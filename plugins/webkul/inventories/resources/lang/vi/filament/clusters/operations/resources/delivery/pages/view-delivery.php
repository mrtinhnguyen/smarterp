<?php

return [
    'header-actions' => [
        'print' => [
            'label' => 'In',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Giao hàng đã được xóa',
                    'body'  => 'Giao hàng đã được xóa thành công.',
                ],

                'error' => [
                    'title' => 'Không thể xóa giao hàng',
                    'body'  => 'Giao hàng không thể được xóa vì đang được sử dụng.',
                ],
            ],
        ],
    ],
];