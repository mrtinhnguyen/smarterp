<?php

return [
    'notification' => [
        'title' => 'Phế liệu đã được cập nhật',
        'body'  => 'Phế liệu đã được cập nhật thành công.',
    ],

    'header-actions' => [
        'validate' => [
            'label' => 'Xác thực',

            'notification' => [
                'warning' => [
                    'title' => 'Hàng tồn kho không đủ',
                    'body'  => 'Phế liệu không có đủ hàng tồn kho để xác thực.',
                ],

                'success' => [
                    'title' => 'Phế liệu đã được đánh dấu hoàn thành',
                    'body'  => 'Phế liệu đã được đánh dấu hoàn thành thành công.',
                ],
            ],
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Phế liệu đã được xóa',
                    'body'  => 'Phế liệu đã được xóa thành công.',
                ],

                'error' => [
                    'title' => 'Không thể xóa phế liệu',
                    'body'  => 'Phế liệu không thể được xóa vì đang được sử dụng.',
                ],
            ],
        ],
    ],
];