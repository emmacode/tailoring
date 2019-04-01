<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdminNewOrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formDataArray;

    public function __construct(array $formDataArray)
    {
        $this->formDataArray = $formDataArray;
    }

    public function build()
    {
        $data = [
            'form_data' => $this->formDataArray
        ];
        return $this->view('admin.emails.new_order_request', $data);
    }
}
