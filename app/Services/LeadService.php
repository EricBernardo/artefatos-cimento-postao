<?php
namespace App\Services;

use App\Mail\sendMail;
use App\Models\Lead;
use Illuminate\Support\Facades\Mail;

class LeadService extends DefaultService
{
    public function __construct(Lead $model)
    {
        $this->model = $model;
    }

    public function store($request) {

        if($this->model->insert([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'message' => $request->get('message'),
            'http_referrer' => $request->get('http_referrer')
        ])) {
            Mail::to(env('MAIL_TO'))
            ->send(new sendMail());
            return ['status' => 'success'];
        }

    }

}
