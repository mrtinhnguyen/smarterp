<?php

return [
    'navigation' => [
        'title' => 'Kế hoạch hoạt động',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Thông tin chung',
                'fields' => [
                    'name'       => 'Tên',
                    'status'     => 'Trạng thái',
                    'department' => 'Phòng ban',
                    'company'    => 'Công ty',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Tên',
            'status'     => 'Trạng thái',
            'department' => 'Phòng ban',
            'company'    => 'Công ty',
            'manager'    => 'Quản lý',
            'created-by' => 'Tạo bởi',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo kế hoạch hoạt động',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Kế hoạch hoạt động đã được xóa',
                    'body'  => 'Kế hoạch hoạt động đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các kế hoạch hoạt động đã được xóa',
                    'body'  => 'Các kế hoạch hoạt động đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'name'       => 'Tên',
                    'status'     => 'Trạng thái',
                    'department' => 'Phòng ban',
                    'company'    => 'Công ty',
                    'manager'    => 'Quản lý',
                ],
            ],
        ],
    ],
];
