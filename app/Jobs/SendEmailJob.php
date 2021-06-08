<?php

namespace App\Jobs;

use App\Mail\SendEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $subject;
    protected $isi;
    protected $email;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($subject,$isi,$email)
    {
        $this->subject = $subject;
        $this->isi = $isi;
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // dd($this->email['email']);
        $subject = $this->subject;
        $isi = $this->isi;
        Mail::to($this->email)->send(new SendEmail($subject,$isi));
    }
}
