<?php

return [
    'notification' => [
        'title' => 'San pham da duoc cap nhat',
        'body'  => 'San pham da duoc cap nhat thanh cong.',
    ],

    'header-actions' => [
        'update-quantity' => [
            'label'                     => 'Update Quantity',
            'modal-heading'             => 'Update Product Quantity',
            'modal-submit-action-label' => 'Update',

            'form' => [
                'fields' => [
                    'on-hand-qty' => 'On Hand Quantity',
                ],
            ],
        ],

        'delete' => [
            'notification' => [
                'title' => 'San pham da duoc xoa',
                'body'  => 'San pham da duoc xoa thanh cong.',
            ],
        ],
    ],
];

