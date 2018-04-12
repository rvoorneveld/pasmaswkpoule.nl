<?php

return [
    'driver' => 'smtp',
    'host' => 'smtp.mailtrap.io',
    'port' => 2525,
    'from' => [
        'address' => 'from@example.com',
        'name' => 'Example',
    ],
    'username' => 'e86e627d406489',
    'password' => '98e61393e25a07',
    'sendmail' => '/usr/sbin/sendmail -bs',
    'pretend' => false,
];
