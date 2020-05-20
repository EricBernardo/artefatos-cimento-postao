<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.lead')
        ->subject('Contato Site')
        ->with([
            'name' => request()->get('name'),
            'email' => request()->get('email'),
            'phone' => request()->get('phone'),
            'messages' => request()->get('message')
        ]);
    }
}
