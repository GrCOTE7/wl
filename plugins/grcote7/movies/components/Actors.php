<?php namespace Grcote7\Movies\Components;

use Cms\Classes\ComponentBase;
use Grcote7\Movies\Models\Actor;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Swift_Message;
use Swift_RfcComplianceException;


class Actors extends ComponentBase {

  public $actors;


  public function componentDetails() {

    return [
      'name'        => 'Actor list',
      'description' => 'List of actors'
    ];
  }


  public function defineProperties() {

    return [
      'results' => [
        'title'             => 'Number of Actors',
        'description'       => 'How  many actors do you want to display?',
        'default'           => 0,
        'validationPattern' => '^[0-9]+$',
        'validationMessage' => 'Only numbers allowed'
      ],

      'sortOrder' => [
        'title'       => 'Sort Actors',
        'description' => 'Sort those actors',
        'type'        => 'dropdown',
        'default'     => 'lastname asc'
      ]
    ];
  }


  public function getSortOrderOptions() {

    return [
      'lastname asc'  => 'Lastname (ascending)',
      'lastname desc' => 'Lastname (descending)'
    ];
  }


  public function onRun() {

    // mail('test', 'a', 'b');
    $this->actors = $this->loadActors();
  }


  protected function loadActors() {

    // $headers = 'From: grcote7@gmail.com' . "\r\n" . 'Reply-To: grcote7@gmail.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
    //dump(mail('grcote7@gmail.com', 'Sujet', 'Msg', $headers));

    $vars = [
      'name'    => 'Lionel',
      'email'   => 'ddd@com.com',
      'content' => 'Mon message (Issu de page d\'accueil)'
    ];
    //dump($_SERVER['MAIL_HOST']); // => "http://wl"
    //    dump($this.theme.getConfigValue('name') );
    //    dump($_SERVER['APP_DRIVER']);
    //    dump(Config::getenv('MAIL_DRIVER'));


    $message = Swift_Message::newInstance();

    // add some message composing here...

    $email = "lio181@yahoo.fr";
    $err01 = 0;
    try {
      $message->setTo([$email]);
    } catch (Swift_RfcComplianceException $e) {
      $err01 = 1;
      dump("Address " . $email . " seems invalid");
    }
    if (!$err01) {
      dump("Address " . $email . " seems VALID");
    }
    /* and now your transport... */
    /*
        try {
          $result = $mailer->send($message);
        } catch (\Swift_TransportException $Ste) {
          echo "EROORRRRRRRRRRRRRRRRRRRR\n\n\n";
        }
    */

    if (0) {
      Mail::send('grcote7.movies::mail.message', $vars, function ($message) {

        $message->to('grcote7@gmail.com', 'Lionel COTE');
        $message->subject('New message from page d\'accueil');
      });
    }

    if (0) {
      $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465);
      $mailer    = \Swift_Mailer::newInstance($transport);
      //      dump($mailer);

      $message = (new \Swift_Message('Hello Email'))->setFrom('grcote7@gmail.com')
                                                    ->setTo('grcote7@gmail.com')
                                                    ->setBody('My body');
      //                                                              'text/html')
      /*
         * If you also want to include a plaintext version of the message
        ->addPart(
            $this->renderView(
                'Emails/registration.txt.twig',
                array('name' => $name)
            ),
            'text/plain'
        )
        */;
      //      dump($message);
      $mailer->send($message);
      /*

            Mail::send('grcote7.movies::mail.message', $vars, function ($message) {

              $message->to('grcote7@gmail.com', 'Lionel COTE');
              $message->subject('New message from contact form');
            });
      */
    }


    if (0) {
      $transport = Swift_MailTransport::newInstance();
      $mailer    = \Swift_Mailer::newInstance($transport);
      $message   = (new \Swift_Message('Hello Email OK'))->setFrom('grcote7@gmail.com')
                                                         ->setTo('grcote7@gmail.com')
                                                         ->setBody('Mon message émis depuis le script');
      $mailer->send($message);
    }
    if (0) {


      $transport = Swift_MailTransport::newInstance();
      //      $transport = Swift_SendmailTransport::newInstance();
      $mailer = \Swift_Mailer::newInstance($transport);

      $message = \Swift_Message::newInstance();
      $message->setSubject('Email From Our Website')
              ->setTo(['grcote7@gmail.com'])
              ->setBody('Oki');

      $result = $mailer->send($message);
      dump($result);
    }
    
    $query = Actor::all();

    if ($this->property('sortOrder') == 'lastname asc') {
      $query = $query->sortBy('lastname');
    }

    if ($this->property('sortOrder') == 'lastname desc') {
      $query = $query->sortByDesc('lastname');
    }

    if ($this->property('results') > 0) {
      $query = $query->take($this->property('results'));
    }

    return $query;
  }

}