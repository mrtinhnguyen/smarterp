<?php

return [
    'navigation' => [
        'title' => 'Giai đoạn dự án',
    ],

    'form' => [
        'name' => 'Tên',
    ],

    'table' => [
        'columns' => [
            'name'       => 'Tên',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'groups' => [
            'name'         => 'Tên',
            'is-completed' => 'Đã hoàn thành',
            'project'      => 'Dự án',
            'created-at'   => 'Ngày tạo',
        ],

        'filters' => [
            'is-completed' => 'Đã hoàn thành',
            'project'      => 'Dự án',
            'creator'      => 'Người tạo',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo giai đoạn dự án',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Giai đoạn dự án đã được xóa',
                    'body'  => 'Giai đoạn dự án đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các giai đoạn dự án đã được xóa',
                    'body'  => 'Các giai đoạn dự án đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'name' => 'Tên',
                ],
            ],
        ],
    ],
];
