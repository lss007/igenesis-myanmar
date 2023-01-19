<?php

namespace App\Jobs;

use App\Mail\Emailsend;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class EmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $emaildata;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($emaildata)
    {
        $this->emaildata = $emaildata;
       
     
}


    public function handle()
    {
        $email = new Emailsend($this->emaildata);

        Mail::to('sb@genesismyanmar.com')->send($email);
        // Mail::to('info@genesismyanmar.com')->send($email);

        
    }
}
