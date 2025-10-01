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
                'title' => 'Thông tin Chung',

                'fields' => [
                    'name'                => 'Tên',
                    'manager'             => 'Quản lý',
                    'parent-department'   => 'Phòng ban Cha',
                    'manager-placeholder' => 'Chọn Quản lý',
                    'company'             => 'Công ty',
                    'company-placeholder' => 'Chọn Công ty',
                    'color'               => 'Màu sắc',
                ],
            ],

            'additional' => [
                'title'       => 'Thông tin Bổ sung',
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
            'updated-at' => 'Ngày cập nhật',
            'created-at' => 'Ngày tạo',
        ],

        'filters' => [
            'name'         => 'Tên',
            'manager-name' => 'Quản lý',
            'company-name' => 'Công ty',
            'updated-at'   => 'Ngày cập nhật',
            'created-at'   => 'Ngày tạo',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Phòng ban đã khôi phục',
                    'body'  => 'Phòng ban đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Phòng ban đã xóa',
                    'body'  => 'Phòng ban đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Phòng ban đã xóa vĩnh viễn',
                    'body'  => 'Phòng ban đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Các phòng ban đã khôi phục',
                    'body'  => 'Các phòng ban đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các phòng ban đã xóa',
                    'body'  => 'Các phòng ban đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Các phòng ban đã xóa vĩnh viễn',
                    'body'  => 'Các phòng ban đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Chung',

                'entries' => [
                    'name'            => 'Tên',
                    'manager'         => 'Quản lý',
                    'company'         => 'Công ty',
                    'color'           => 'Màu sắc',
                    'hierarchy-title' => 'Tổ chức Phòng ban',
                ],
            ],
        ],
    ],
];