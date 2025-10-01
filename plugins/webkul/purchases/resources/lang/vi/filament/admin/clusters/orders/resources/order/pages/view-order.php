<?php

return [
    'header-actions' => [
        'print' => [
            'label' => 'In',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Đơn hàng đã được xóa',
                    'body'  => 'Đơn hàng đã được xóa thành công.',
                ],

                'error' => [
                    'title' => 'Không thể xóa đơn hàng',
                    'body'  => 'Đơn hàng không thể được xóa vì đang được sử dụng.',
                ],
            ],
        ],
    ],
];

