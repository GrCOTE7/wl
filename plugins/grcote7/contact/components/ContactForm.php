<?php namespace Grcote7\Contact\Components;


use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;

class ContactForm extends ComponentBase {

  public function componentDetails() {

    return [
      'name'        => 'Contact Form',
      'description' => 'Simple contact form'
    ];
  }


  public function onSend() {

    mail('test', 'a', 'b');
    /*
        $vars = [
          'name'    => Input::get('name'),
          'email'   => Input::get('email'),
          'content' => Input::get('content')
        ];

        Mail::send('grcote7.contact::mail.message', $vars, function ($message) {

          $message->to('grcote7@gmail.com', 'Lionel COTE');
          $message->subject('New message from contact form');
        });
    */
    /*
        return redirect()
          ->back()
          ->with('success', 'Done');
      */
  }

}