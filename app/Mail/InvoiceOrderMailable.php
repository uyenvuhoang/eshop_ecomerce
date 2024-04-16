<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InvoiceOrderMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
   
    public function __construct($order)
    {
        $this->order = $order;
    }
   
    public function build(){
        $subject = "Your Order Invoice";
        return $this->subject($subject)->view('admin.invoice.generate-invoice');
    }
   
}
