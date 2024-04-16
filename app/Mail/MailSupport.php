<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailSupport extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data){
        $this->data = $data;
    }

    public function build(){
        $subject = $this->data['subjectInput'];
        return $this->subject($subject)->view('frontend.users.invoice.mail-support')->with('data', $this->data);
    }
   
}
