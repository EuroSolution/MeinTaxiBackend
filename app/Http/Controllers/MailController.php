<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function basic_email() {
      $ab = Mail::send('emails/token', ['purchase_order'=> 5, 'order_summary' => "8"], function($message) {
         $message->to("zahid4453@gmail.com", "Zahid Hussain")
             ->subject('Your Purchase Order #87878 from Medusa Distribution LLC');
     });
        echo "Basic Email Sent. Check your inbox.".$ab;
        die;
     }
}
