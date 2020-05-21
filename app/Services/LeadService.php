<?php
namespace App\Services;

use App\Jobs\ProcessSendMail;
use App\Models\Lead;

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

            ProcessSendMail::dispatch($request->all());

            return ['status' => 'success'];
        }

    }

}
