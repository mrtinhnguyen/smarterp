<?php

return [
    'title' => 'Attributes',

    'form' => [
        'attribute' => 'Attribute',
        'values'    => 'Values',
    ],

    'table' => [
        'description' => 'Warning: adding or deleting attributes will delete and recreate existing variants and lead to the loss of their possible customizations.',

        'header-actions' => [
            'create' => [
                'label' => 'Add Attribute',

                'notification' => [
                    'title' => 'Thuoc tinh da duoc tao',
                    'body'  => 'Thuoc tinh da duoc tao thanh cong.',
                ],
            ],
        ],

        'columns' => [
            'attribute' => 'Attribute',
            'values'    => 'Values',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Thuoc tinh da duoc cap nhat',
                    'body'  => 'Thuoc tinh da duoc cap nhat thanh cong.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Thuoc tinh da duoc xoa',
                    'body'  => 'Thuoc tinh da duoc xoa thanh cong.',
                ],
            ],
        ],
    ],
];

