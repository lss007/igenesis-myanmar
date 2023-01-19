<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;


class Emailsend extends Mailable
{
    use Queueable, SerializesModels;
    public $emaildata;

    public function __construct( $emaildata)
    {
        $this->emaildata = $emaildata;
    
    }

    public function envelope()
    {
        return new Envelope(
            subject: $this->emaildata->name ,
     
        );
    }

    public function content()
    {
        return new Content(
            view: 'email.contact_us',
            with:[
                'name' => $this->emaildata->name,
                'email' => $this->emaildata->email,
                'subject_test' => $this->emaildata->subject,
                'subject' => $this->emaildata->message,
            ],
        );
    }


    // public function attachments()
    // {
    //     return [];
    // }
}
