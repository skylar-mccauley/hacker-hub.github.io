<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/UniformServer/UniServerZ/www/blog/user/config/site.yaml',
    'modified' => 1519038048,
    'data' => [
        'title' => 'Cabooshy\'s Ramblings',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Cameron Miller',
            'email' => 'cambomiller@googlemail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Welcome to the actual blog bit for my page, this is where i do all my rablings n stuffs'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
