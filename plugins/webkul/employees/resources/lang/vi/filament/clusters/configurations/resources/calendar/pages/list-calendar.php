<?php

return [
    'tabs' => [
        'all'      => 'Tất cả',
        'archived' => 'Đã lưu trữ',
    ],
    'header-actions' => [
        'create' => [
            'label' => 'Thêm lịch làm việc mới',

            'notification' => [
                'title' => 'Lịch làm việc mới đã được tạo',
                'body'  => 'The working schedule has been created successfully.',
            ],
        ],
    ],
    'navigation' => [
        'title' => 'Danh sách lịch làm việc',
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