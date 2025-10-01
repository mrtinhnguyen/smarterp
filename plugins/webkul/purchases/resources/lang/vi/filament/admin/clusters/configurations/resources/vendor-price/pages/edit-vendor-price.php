<?php

return [
    'navigation' => [
        'title' => 'Edit Vendor Price List',
    ],

    'notification' => [
        'title' => 'Gia nha cung cap da duoc cap nhat',
        'body'  => 'Gia nha cung cap da duoc cap nhat thanh cong.',
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Gia nha cung cap da duoc xoa',
                    'body'  => 'Gia nha cung cap da duoc xoa thanh cong.',
                ],

                'error' => [
                    'title' => 'Vendor Price could not be deleted',
                    'body'  => 'The vendor price cannot be deleted because it is currently in use.',
                ],
            ],
        ],
    ],
];

