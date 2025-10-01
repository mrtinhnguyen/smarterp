<?php

return [
    'notification' => [
        'title' => 'Danh muc da duoc cap nhat',
        'body'  => 'Danh muc da duoc cap nhat thanh cong.',
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Danh muc da duoc xoa',
                    'body'  => 'Danh muc da duoc xoa thanh cong.',
                ],

                'error' => [
                    'title' => 'Category could not be deleted',
                    'body'  => 'The category cannot be deleted because it is currently in use.',
                ],
            ],
        ],
    ],

    'save' => [
        'notification' => [
            'error' => [
                'title' => 'Category updated failed',
            ],
        ],
    ],
];

