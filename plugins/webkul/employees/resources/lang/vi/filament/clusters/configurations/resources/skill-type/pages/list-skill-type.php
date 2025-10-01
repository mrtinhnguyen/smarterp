<?php

return [
    'tabs' => [
        'all'      => 'Tất cả',
        'archived' => 'Đã lưu trữ',
    ],
    'header-actions' => [
        'create' => [
            'label' => 'Thêm loại kỹ năng mới',

            'notification' => [
                'title' => 'Loại kỹ năng mới đã được tạo thành công',
                'body'  => 'The skill type has been created successfully.',
            ],
        ],
    ],
    'navigation' => [
        'title' => 'Danh sách loại kỹ năng',
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