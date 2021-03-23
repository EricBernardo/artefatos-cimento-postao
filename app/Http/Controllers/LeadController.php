<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeadRequestStore;
use App\Mail\SendMailOlx;
use App\Models\Seo;
use App\Services\LeadService;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{

    private $service;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        LeadService $service
    ) {
        $this->service = $service;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(LeadRequestStore $request)
    {
        return $this->service->store($request);
    }

    public function olx() {

        $last_date = 0;

        $result = Seo::where(['path' => 'olx-nao-apagar'])->first();

        if($result) {

            $url = 'https://rs.olx.com.br/regioes-de-porto-alegre-torres-e-santa-cruz-do-sul?q=aqu%C3%A1rio%20marinho&sf=1';

            $dom = new \DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTMLFile($url);
            $data = $dom->getElementById("ad-list");
            $html = $dom->saveHTML($data);
            $html = preg_replace("/<span color=\"white\".*?>(.*?)<\/span>/", "", $html);
            $dom2 = new \DOMDocument();
            $dom2->loadHTML($html);
            $data2 = $dom2->getElementsByTagName('li');

            $title = '';
            foreach ($data2 as $key => $value) {
                if ($value->nodeValue && strpos($value->nodeValue, 'Hoje') > 0) {
                    $date = strtotime(date('Y-m-d ') . substr(trim($value->nodeValue), -5));
                    if($date > $result['title']) {
                        $title .= $value->nodeValue . '<br/><hr><br/>';
                        if (!$last_date) {
                            $last_date = $date;
                        }
                    }
                }
            }

            if ($last_date) {
                $result->update(['title' => $last_date]);

                Mail::to('eric.bernardo.sousa@gmail.com')
                    ->send(new SendMailOlx(['title' => utf8_decode($title), 'date' => date('Y-m-d H:i', $last_date)]));
            }
        }
    }
}
