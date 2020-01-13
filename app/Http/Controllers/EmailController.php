<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class EmailController extends Controller
{
  public function sendEmail()
  {
    $to_name = 'Mariana';
    $to_email = 'marianagaldomartinez@gmail.com';
    $data = array('name'=>"Ogbonna Vitalis(sender_name)", "body" => "A test mail");
    Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
      $message->to($to_email, $to_name)
      ->subject('Laravel Test Mail');
      $message->from('ecopreguntasar@gmail.com','Test Mail');
    });
    /*Mail::to('marianagaldomartinez@gmail.com')
    ->cc('cc-example@gmail.com')
    ->bcc('bcc-example@gmail.com')
    ->send(new TestMail());

    if (Mail::failures()) {
    // return with failed message
  }
  // return with success message
  */
}
}
