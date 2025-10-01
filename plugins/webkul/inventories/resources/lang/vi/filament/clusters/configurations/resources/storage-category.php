<?php

return [
    'navigation' => [
        'title' => 'Danh mục Lưu trữ',
        'group' => 'Quản lý Kho hàng',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Chung',

                'fields' => [
                    'name'               => 'Tên',
                    'allow-new-products' => 'Cho phép Sản phẩm Mới',
                    'max-weight'         => 'Trọng lượng Tối đa',
                    'company'            => 'Công ty',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'               => 'Tên',
            'allow-new-products' => 'Cho phép Sản phẩm Mới',
            'max-weight'         => 'Trọng lượng Tối đa',
            'company'            => 'Công ty',
            'deleted-at'         => 'Đã xóa lúc',
            'created-at'         => 'Ngày tạo',
            'updated-at'         => 'Ngày cập nhật',
        ],

        'groups' => [
            'allow-new-products' => 'Cho phép Sản phẩm Mới',
            'created-at'         => 'Ngày tạo',
            'updated-at'         => 'Ngày cập nhật',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Danh mục lưu trữ đã xóa',
                    'body'  => 'Danh mục lưu trữ đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Các danh mục lưu trữ đã xóa',
                    'body'  => 'Các danh mục lưu trữ đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'  => 'Chung',

                'entries' => [
                    'name'               => 'Tên',
                    'allow-new-products' => 'Cho phép Sản phẩm Mới',
                    'max-weight'         => 'Trọng lượng Tối đa',
                    'company'            => 'Công ty',
                ],
            ],

            'record-information' => [
                'title' => 'Thông tin Bản ghi',

                'entries' => [
                    'created-by'   => 'Tạo bởi',
                    'created-at'   => 'Ngày tạo',
                    'last-updated' => 'Cập nhật cuối',
                ],
            ],
        ],
    ],
];