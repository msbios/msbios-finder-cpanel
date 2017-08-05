<?php

/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Finder\CPanel;

return [

    'router' => [
        'routes' => [
            'cpanel' => [
                'child_routes' => [
                    'file-manager' => [
                        'type' => \Zend\Router\Http\Segment::class,
                        'options' => [
                            'route' => 'file-manager[/[:action[/]]]',
                            'defaults' => [
                                'controller' => Controller\FileManagerController::class,
                            ],
                            'constraints' => [
                                'action' => 'index|connector'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ],


    'controllers' => [
        'factories' => [
            Controller\FileManagerController::class => Factory\FileManagerControllerFactory::class
        ]
    ],

    'navigation' => [
        \MSBios\CPanel\Navigation\Sidebar::class => [
            'file-manager' => [
                'label' => _('File manager'),
                'route' => 'cpanel/file-manager',
                'class' => 'icon-finder',
                'order' => 100300,
            ],
        ],
    ],

    \MSBios\Theme\Module::class => [
        'themes' => [
            'limitless' => [
                'template_map' => [
                ],
                'template_path_stack' => [
                    __DIR__ . '/../themes/limitless/view/',
                ],
                'controller_map' => [
                ],
                'translation_file_patterns' => [
                    [
                        'type' => 'gettext',
                        'base_dir' => __DIR__ . '/../themes/limitless/language/',
                        'pattern' => '%s.mo',
                    ],
                ],
            ]
        ]
    ],

    \MSBios\Guard\Module::class => [

        'guard_listeners' => [
            \MSBios\Guard\Listener\ControllerListener::class => [
                [
                    'controller' => Controller\FileManagerController::class,
                    'roles' => ['DEVELOPER']
                ],
            ],
        ]
    ],

    Module::class => [

    ]
];
