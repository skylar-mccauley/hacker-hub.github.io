<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/UniformServer/UniServerZ/www/blog/user/themes/dup-blog/blueprints.yaml',
    'modified' => 1519038902,
    'data' => [
        'name' => 'DUP-Blog',
        'version' => '1.0.0',
        'description' => 'A Customised version of DUP for #consistensy',
        'icon' => 'empire',
        'author' => [
            'name' => 'Cabooshy / Colorlib'
        ],
        'homepage' => 'https://colorlib.com',
        'keywords' => 'dup, theme, core, modern, fast, responsive, html5, css3',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
