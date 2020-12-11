<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'E:/Program Files (x86)/localhost/accrobranche--projet-cesi/user/config/plugins/email.yaml',
    'modified' => 1604577292,
    'data' => [
        'enabled' => true,
        'from' => 'cyprien.labranche@gmail.com',
        'from_name' => NULL,
        'to' => 'cyprien.labranche@gmail.com',
        'to_name' => NULL,
        'queue' => [
            'enabled' => false,
            'flush_frequency' => '* * * * *',
            'flush_msg_limit' => 10,
            'flush_time_limit' => 100
        ],
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.gmail.com',
                'port' => 587,
                'encryption' => 'tls',
                'user' => 'cyprien.labranche@gmail.com',
                'password' => 'labranche2020'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false,
        'charset' => NULL,
        'cc' => NULL,
        'cc_name' => NULL,
        'bcc' => NULL,
        'reply_to' => NULL,
        'reply_to_name' => NULL,
        'body' => NULL
    ]
];
