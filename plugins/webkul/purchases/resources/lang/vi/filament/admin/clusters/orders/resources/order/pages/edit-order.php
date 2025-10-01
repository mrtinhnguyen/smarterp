<?php

return [
    'notification' => [
        'title' => 'Đơn hàng đã được cập nhật',
        'body'  => 'Đơn hàng đã được cập nhật thành công.',
    ],

    'header-actions' => [
        'confirm' => [
            'label' => 'Xác nhận',
        ],

        'close' => [
            'label' => 'Đóng',
        ],

        'cancel' => [
            'label' => 'Hủy',
        ],

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

