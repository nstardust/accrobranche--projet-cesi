<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/lemaycta/public_html/user/plugins/aura/blueprints/default.yaml',
    'modified' => 1601584700,
    'data' => [
        'title' => 'Aura',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'options' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.OPTIONS',
                            'fields' => [
                                'publishing' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.PUBLISHING',
                                    'underline' => true,
                                    'fields' => [
                                        'header.metadata' => [
                                            'unset@' => true
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'aura' => [
                            'type' => 'tab',
                            'title' => 'Aura',
                            'fields' => [
                                'header.aura.pagetype' => [
                                    'type' => 'select',
                                    'label' => 'Page Type',
                                    'size' => 'medium',
                                    'options' => [
                                        'website' => 'Website (default)',
                                        'article' => 'Article'
                                    ],
                                    'validate' => [
                                        'required' => true
                                    ]
                                ],
                                'header.aura.description' => [
                                    'type' => 'text',
                                    'size' => 'long',
                                    'label' => 'Page Description',
                                    'description' => 'Recommended length 140-160 characters.'
                                ],
                                'header.aura.image' => [
                                    'type' => 'filepicker',
                                    'label' => 'Preview Image',
                                    'preview_images' => true,
                                    'description' => 'Recommended size 1920x1080px in .jpg, .png or .gif format only. If not specified, will default to the first image found in the page\'s folder.'
                                ],
                                'header.aura.metadata' => [
                                    'toggleable' => true,
                                    'type' => 'array',
                                    'label' => 'Additional Metadata',
                                    'placeholder_key' => 'PLUGIN_ADMIN.METADATA_KEY',
                                    'placeholder_value' => 'PLUGIN_ADMIN.METADATA_VALUE'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
