<?php

return [
    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Chung',

                'fields' => [
                    'name'             => 'Tên',
                    'name-placeholder' => 'vd. Đèn',
                    'parent'           => 'Danh mục cha',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'        => 'Tên',
            'full-name'   => 'Tên đầy đủ',
            'parent-path' => 'Đường dẫn cha',
            'parent'      => 'Danh mục cha',
            'creator'     => 'Người tạo',
            'created-at'  => 'Ngày tạo',
            'created-at'  => 'Ngày tạo',
            'updated-at'  => 'Ngày cập nhật',
        ],

        'groups' => [
            'parent'     => 'Danh mục cha',
            'creator'    => 'Người tạo',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'filters' => [
            'parent'  => 'Danh mục cha',
            'creator' => 'Người tạo',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Danh mục đã xóa',
                        'body'  => 'Danh mục đã được xóa thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa danh mục',
                        'body'  => 'Danh mục không thể bị xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Các danh mục đã xóa',
                        'body'  => 'Các danh mục đã được xóa thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa các danh mục',
                        'body'  => 'Các danh mục không thể bị xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',

                'entries' => [
                    'name'        => 'Tên',
                    'parent'      => 'Danh mục cha',
                    'full_name'   => 'Tên danh mục đầy đủ',
                    'parent_path' => 'Đường dẫn danh mục',
                ],
            ],

            'record-information' => [
                'title' => 'Thông tin bản ghi',

                'entries' => [
                    'creator'    => 'Tạo bởi',
                    'created_at' => 'Ngày tạo',
                    'updated_at' => 'Cập nhật lần cuối',
                ],
            ],
        ],
    ],
];