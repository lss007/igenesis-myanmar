<?php

namespace App\Jobs;

use App\Mail\ResumeMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ResumeJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $emailCvData;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($emailCvData)
    {
        //
        $this->emailCvData = $emailCvData;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $email = new ResumeMail($this->emailCvData);
        Mail::to('sb@genesismyanmar.com')->send($email);
        // Mail::to('info@genesismyanmar.com')->send($email);
  
    }
}
