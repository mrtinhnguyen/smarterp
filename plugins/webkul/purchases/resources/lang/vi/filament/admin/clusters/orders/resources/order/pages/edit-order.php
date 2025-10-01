<?php

return [
    'notification' => [
        'title' => 'Don hang da duoc cap nhat',
        'body'  => 'Don hang da duoc cap nhat thanh cong.',
    ],

    'header-actions' => [
        'confirm' => [
            'label' => 'Confirm',
        ],

        'close' => [
            'label' => 'Close',
        ],

        'cancel' => [
            'label' => 'Cancel',
        ],

        'print' => [
            'label' => 'Print',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Don hang da duoc xoa',
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

