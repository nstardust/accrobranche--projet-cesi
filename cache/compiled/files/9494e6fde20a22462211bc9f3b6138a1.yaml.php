<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav-accrobranche/user/config/site.yaml',
    'modified' => 1603264544,
    'data' => [
        'title' => 'Accro-branché',
        'default_lang' => 'fr',
        'author' => [
            'name' => 'Accro-branché',
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