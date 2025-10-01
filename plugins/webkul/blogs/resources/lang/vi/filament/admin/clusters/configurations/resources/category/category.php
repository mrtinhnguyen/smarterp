<?php

return [
    'navigation' => [
        'title' => 'Danh mục',
        'group' => 'Blog',
    ],

    'form' => [
        'fields' => [
            'name'             => 'Tên',
            'name-placeholder' => 'Tiêu đề danh mục ...',
            'sub-title'        => 'Tiêu đề phụ',
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Tên',
            'sub-title'  => 'Tiêu đề phụ',
            'posts'      => 'Bài viết',
            'created-at' => 'Được tạo lúc',
        ],

        'filters' => [
            'is-published' => 'Đã xuất bản',
            'author'       => 'Tác giả',
            'creator'      => 'Được tạo bởi',
            'category'     => 'Danh mục',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Danh mục đã được cập nhật',
                    'body'  => 'Danh mục đã được cập nhật thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Danh mục đã được khôi phục',
                    'body'  => 'Danh mục đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Danh mục đã được xóa',
                    'body'  => 'Danh mục đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Các danh mục đã được xóa',
                    'body'  => 'Các danh mục đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'name'      => 'Tên',
                    'sub-title' => 'Tiêu đề phụ',
                    'posts'     => 'Bài viết',
                ],
            ],
        ],
    ],
];
