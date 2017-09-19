<?php namespace Grcote7\Contact\Components;


use Mail;
use Input;
use Redirect;
use Validator;
use Cms\Classes\ComponentBase;

class ContactForm extends ComponentBase {

  public function componentDetails() {

    return [
      'name'        => 'Contact Form',
      'description' => 'Simple contact form'
    ];
  }


  public function Rule() {
  }


  public function onSend() {

    $validator = Validator::make([
                                   'name'    => Input::get('name'),
                                   'email'   => Input::get('email'),
                                   'message' => Input::get('content')
                                 ], [
                                   'name'    => 'required|min:3',
                                   'email'   => 'required|email',
                                   'message' => 'required|min:3'
                                 ]);

    if ($validator->fails()) {
      return Redirect::back()
                     ->withErrors($validator);
    }
    else {
      $vars = [
        'name'    => Input::get('name'),
        'email'   => Input::get('email'),
        'content' => Input::get('content')
      ];

      Mail::send('grcote7.contact::mail.message', $vars, function ($message) {

        $message->to('grcote7@gmail.com', 'Lionel COTE');
        $message->subject('New message from my contact form.');
      });
    }
  }

}
