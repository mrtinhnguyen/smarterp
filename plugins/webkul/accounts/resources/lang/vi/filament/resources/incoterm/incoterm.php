<?php

return [
    'form' => [
        'fields' => [
            'code' => 'Mã',
            'name' => 'Tên',
        ],
    ],

    'table' => [
        'columns' => [
            'code'       => 'Mã',
            'name'       => 'Tên',
            'created-by' => 'Tạo bởi',
        ],

        'groups' => [
            'code' => 'Mã',
            'name' => 'Tên',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Điều kiện giao hàng đã được cập nhật',
                    'body'  => 'Điều kiện giao hàng đã được cập nhật thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Điều kiện giao hàng đã được xóa',
                    'body'  => 'Điều kiện giao hàng đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Các điều kiện giao hàng đã được xóa',
                    'body'  => 'Các điều kiện giao hàng đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'code' => 'Mã',
                    'name' => 'Tên',
                ],
            ],
        ],
    ],
];
