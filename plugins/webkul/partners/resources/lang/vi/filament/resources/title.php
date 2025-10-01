<?php

return [
    'form' => [
        'name'       => 'Tên',
        'short-name' => 'Tên viết tắt',
    ],

    'table' => [
        'columns' => [
            'name'       => 'Tên',
            'short-name' => 'Tên viết tắt',
            'created-at' => 'Tạo lúc',
            'updated-at' => 'Cập nhật lúc',
        ],

        'filters' => [
            'creator' => 'Người tạo',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Chức danh đã được cập nhật',
                    'body'  => 'Chức danh đã được cập nhật thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Chức danh đã được xóa',
                    'body'  => 'Chức danh đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Chức danh đã được xóa',
                    'body'  => 'Chức danh đã được xóa thành công.',
                ],
            ],
        ],
    ],
];