<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PlaceOrderMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $order;

    public function __construct($order){
        $this->order = $order;
    }

    public function build(){
        $subject = "Order Place Successfully, Thank you";
        return $this->subject($subject)->view('frontend.users.invoice.mail-invoice');
    }
}
