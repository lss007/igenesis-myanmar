<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ResumeMail extends Mailable
{
    use Queueable, SerializesModels;
    public $emailCvData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emailCvData)
    {
        //
        $this->emailCvData =$emailCvData;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Resume submited by '.$this->emailCvData->name ,

        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'email.resume',
            with:[
                'name'  =>  $this->emailCvData->name,
                'email' =>  $this->emailCvData->email,
                'location' =>$this->emailCvData->location,
                'contact' =>    $this->emailCvData->contact,
                'current_industry' =>    $this->emailCvData->current_industry,
                'current_function' =>    $this->emailCvData->current_function,
                'resume' =>    $this->emailCvData->resumeFile,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    // public function attachments()
    // {
    //     return [

    //         Attachment::fromStorage('resume/' .$this->emailCvData->resumeFile),


       
           
    // ];
    // }
}
