<?php

return [
    'tabs' => [
        'with-skill'    => 'Có kỹ năng',
        'without-skill' => 'Không có kỹ năng',
        'archived'      => 'Đã lưu trữ',
    ],
    'navigation' => [
        'title' => 'Danh sách kỹ năng nhân viên',
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