<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
      'domain' => '',
      'secret' => '',
    ],

    'mandrill' => [
      'secret' => '',
    ],

    'ses' => [
      'key'    => '',
      'secret' => '',
      'region' => 'us-east-1',
    ],

    'stripe' => [
      'model'  => 'User',
      'secret' => '',
    ],

];

return ["driver"   => "smtp",
        "host"     => "smtp.mailtrap.io",
        "port"     => 2525,
        "from"     => [
          "address" => "from@example.com",
          "name"    => "Example"
        ],
        "username" => "ad8c19aa66baf2",
        "password" => "a05cdad3c9114a",
        "sendmail" => "/usr/sbin/sendmail -bs",
        "pretend"  => false
];