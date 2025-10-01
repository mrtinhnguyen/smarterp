<?php

return [
    'navigation' => [
        'title' => 'Giao hàng',
        'group' => 'Chuyển kho',
    ],

    'table' => [
        'actions' => [
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

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Giao hàng đã được xóa',
                        'body'  => 'Các giao hàng đã được xóa thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa giao hàng',
                        'body'  => 'Các giao hàng không thể được xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],
    ],
];

