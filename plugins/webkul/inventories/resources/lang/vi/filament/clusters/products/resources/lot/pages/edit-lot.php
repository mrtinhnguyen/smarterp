<?php

return [
    'notification' => [
        'title' => 'Lô hàng đã được cập nhật',
        'body'  => 'Lô hàng đã được cập nhật thành công.',
    ],

    'header-actions' => [
        'print' => [
            'label' => 'In',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Lô hàng đã được xóa',
                    'body'  => 'Lô hàng đã được xóa thành công.',
                ],

                'error' => [
                    'title' => 'Không thể xóa lô hàng',
                    'body'  => 'Lô hàng không thể được xóa vì đang được sử dụng.',
                ],
            ],
        ],
    ],
];