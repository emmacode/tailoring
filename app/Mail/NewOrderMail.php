<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewOrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $recipientName;

    public function __construct($recipientName)
    {
        $this->recipientName = $recipientName;
    }


    public function build()
    {
        $data = [
            'recipient_name' => $this->recipientName,
        ];
        return $this->subject("New Service Request")->view('emails.new_order', $data);
    }
}
