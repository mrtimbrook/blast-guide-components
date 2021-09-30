<?php

return [
    'base' => [
        'status' => 'wip',
        'args' => [
            'label' => 'Button',
            'href' => '#',
            'icon' => 'menu-24',
            'iconPosition' => 'after',
        ],
        'argTypes' => [
            'iconPosition' =>[
                'options' => [
                    'before', 'after'
                ],
                'control' => [
                    'type' => 'radio'
                ]
            ],
            'icon' =>[
                'options' => [
                    'help-24', 'menu-24', 'plus-24'
                ],
                'control' => [
                    'type' => 'select'
                ]
            ]
        ]
    ]
];
