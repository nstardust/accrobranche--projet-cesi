<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/lemaycta/public_html/user/config/site.yaml',
    'modified' => 1601584634,
    'data' => [
        'title' => 'Accrobranché',
        'default_lang' => 'fr',
        'author' => [
            'name' => 'Michaël LEMAY',
            'email' => 'michael.lemay@lilo.org'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'title' => 'Accrobranché | Association d\'accrobranche',
            'description' => 'Accrobranché est le site de référence d\'accrobranche dans le Nord'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 150,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
