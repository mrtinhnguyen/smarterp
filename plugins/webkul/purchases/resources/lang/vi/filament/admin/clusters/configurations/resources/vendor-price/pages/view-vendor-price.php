<?php

return [
    'navigation' => [
        'title' => 'View Vendor Price List',
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

