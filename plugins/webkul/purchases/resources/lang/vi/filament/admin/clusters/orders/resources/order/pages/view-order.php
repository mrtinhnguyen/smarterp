<?php

return [
    'header-actions' => [
        'print' => [
            'label' => 'Print',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Order Deleted',
                    'body'  => 'Don hang da duoc xoa thanh cong.',
                ],

                'error' => [
                    'title' => 'Order could not be deleted',
                    'body'  => 'The order cannot be deleted because it is currently in use.',
                ],
            ],
        ],
    ],
];

