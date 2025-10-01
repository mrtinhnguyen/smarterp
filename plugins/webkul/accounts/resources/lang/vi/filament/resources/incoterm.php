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
                    'title' => 'Điều kiện giao hàng đã cập nhật',
                    'body'  => 'Điều kiện giao hàng đã được cập nhật thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Điều kiện giao hàng đã xóa',
                    'body'  => 'Điều kiện giao hàng đã được xóa thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Điều kiện giao hàng đã khôi phục',
                    'body'  => 'Điều kiện giao hàng đã được khôi phục thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Các điều kiện giao hàng đã khôi phục',
                    'body'  => 'Các điều kiện giao hàng đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các điều kiện giao hàng đã xóa',
                    'body'  => 'Các điều kiện giao hàng đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Các điều kiện giao hàng đã xóa vĩnh viễn',
                    'body'  => 'Các điều kiện giao hàng đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name' => 'Tên',
            'code' => 'Mã',
        ],
    ],
];