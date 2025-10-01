<?php

return [
    'notification' => [
        'title' => 'Giao hàng trực tiếp đã được cập nhật',
        'body'  => 'Giao hàng trực tiếp đã được cập nhật thành công.',
    ],

    'header-actions' => [
        'print' => [
            'label' => 'In',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Giao hàng trực tiếp đã được xóa',
                    'body'  => 'Giao hàng trực tiếp đã được xóa thành công.',
                ],

                'error' => [
                    'title' => 'Không thể xóa giao hàng trực tiếp',
                    'body'  => 'Giao hàng trực tiếp không thể được xóa vì đang được sử dụng.',
                ],
            ],
        ],
    ],
];