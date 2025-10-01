<?php

return [
    'notification' => [
        'title' => 'Giao hàng đã được cập nhật',
        'body'  => 'Giao hàng đã được cập nhật thành công.',
    ],

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