<?php

return [
    'tabs' => [
        'all'      => 'Tất cả',
        'office'   => 'Office',
        'home'     => 'Home',
        'other'    => 'Khác',
    ],
    'header-actions' => [
        'create' => [
            'label' => 'Thêm địa điểm làm việc',

            'notification' => [
                'title' => 'Một địa điểm làm việc mới đã được tạo',
                'body'  => 'The work location has been created successfully.',
            ],
        ],
    ],
    'navigation' => [
        'title' => 'Danh sách địa điểm làm việc',
        'group' => 'Nhân viên',
    ],
    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'fields' => [
                    'name' => 'Tên',
                    'description' => 'Mô tả',
                ],
            ],
        ],
    ],
    'table' => [
        'columns' => [
            'name' => 'Tên',
            'created-at' => 'Tạo lúc',
            'updated-at' => 'Cập nhật lúc',
        ],
        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Đã cập nhật',
                    'body' => 'Đã được cập nhật thành công.',
                ],
            ],
            'delete' => [
                'notification' => [
                    'title' => 'Đã xóa',
                    'body' => 'Đã được xóa thành công.',
                ],
            ],
        ],
    ],
];