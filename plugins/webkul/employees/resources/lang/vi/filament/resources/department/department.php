<?php

return [
    'title' => 'Phòng ban',

    'navigation' => [
        'title' => 'Phòng ban',
        'group' => 'Nhân viên',
    ],

    'global-search' => [
        'name'               => 'Phòng ban',
        'department-manager' => 'Quản lý',
        'company'            => 'Công ty',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',

                'fields' => [
                    'name'                => 'Tên',
                    'manager'             => 'Quản lý',
                    'parent-department'   => 'Phòng ban cha',
                    'manager-placeholder' => 'Chọn quản lý',
                    'company'             => 'Công ty',
                    'company-placeholder' => 'Chọn công ty',
                    'color'               => 'Màu sắc',
                ],
            ],

            'additional' => [
                'title'       => 'Thông tin bổ sung',
                'description' => 'Thông tin bổ sung về phòng ban này.',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => 'Tên',
            'manager-name' => 'Quản lý',
            'company-name' => 'Công ty',
        ],

        'groups' => [
            'name'       => 'Tên',
            'manager'    => 'Quản lý',
            'company'    => 'Công ty',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo phòng ban',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Phòng ban đã được xóa',
                    'body'  => 'Phòng ban đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các phòng ban đã được xóa',
                    'body'  => 'Các phòng ban đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'name'              => 'Tên',
                    'manager'           => 'Quản lý',
                    'parent-department' => 'Phòng ban cha',
                    'company'           => 'Công ty',
                    'color'             => 'Màu sắc',
                ],
            ],

            'additional' => [
                'title' => 'Thông tin bổ sung',
                'entries' => [
                    'description' => 'Mô tả',
                ],
            ],
        ],
    ],
];
