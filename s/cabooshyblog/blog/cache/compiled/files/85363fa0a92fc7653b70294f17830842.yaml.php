<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/UniformServer/UniServerZ/www/blog/user/plugins/blog-injector/blueprints.yaml',
    'modified' => 1519038604,
    'data' => [
        'name' => 'BlogInjector',
        'version' => '1.2.3',
        'description' => 'BlogInjector is a Grav plugin that makes available the functionalities to add a blog to each Grav theme',
        'icon' => 'file-text-o',
        'author' => [
            'name' => 'Giansimon Diblas',
            'email' => 'info@diblas.net',
            'url' => 'http://diblas.net'
        ],
        'homepage' => 'http://diblas.net/plugins/blog-grav-cms-plugin-adds-blog-functionalities-to-each-grav-theme',
        'demo' => '-',
        'keywords' => 'blog, theme',
        'bugs' => 'https://github.com/giansi/grav-plugin-blog/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'simplesearch',
            1 => 'feed',
            2 => 'relatedpages',
            3 => 'pagination',
            4 => 'taxonomylist',
            5 => 'archives',
            6 => 'breadcrumbs'
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_BLOG_INJECTOR.ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'framework' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_BLOG_INJECTOR.ADMIN.FRAMEWORK',
                    'size' => 'small',
                    'default' => 'pure',
                    'options' => [
                        'pure' => 'pure',
                        'bootstrap' => 'bootstrap'
                    ],
                    'help' => 'PLUGIN_BLOG_INJECTOR.ADMIN.HELP.FRAMEWORK'
                ],
                'add_default_css' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_BLOG_INJECTOR.ADMIN.DEFAULT_STYLESHEET',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'PLUGIN_BLOG_INJECTOR.ADMIN.HELP.DEFAULT_STYLESHEET'
                ],
                'add_framework_assets' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_BLOG_INJECTOR.ADMIN.FRAMEWORK_ASSETS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'PLUGIN_BLOG_INJECTOR.ADMIN.HELP.FRAMEWORK_ASSETS'
                ]
            ]
        ]
    ]
];
