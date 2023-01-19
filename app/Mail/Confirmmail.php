<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Confirmmail extends Mailable
{
    use Queueable, SerializesModels;

    public  $confirm;


    public function __construct($confirm)
    {
        $this->confirm = $confirm;
    
     }

  
    public function envelope()
    {
        return new Envelope(
            subject: 'Automated Reply from genesismyanmar',
        );
    }


    public function content()
    {
        return new Content(
            view: 'email.confirm_reply_to',
          
        );
    }
    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    // public function attachments()
    // {
    //     return [];
    // }
}
