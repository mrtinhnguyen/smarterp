<?php

return [
    'header-actions' => [
        'create' => [
            'label' => 'Thêm loại việc làm mới',

            'notification' => [
                'title' => 'Đã tạo loại việc làm mới',
                'body'  => 'The employment type has been created successfully.',
            ],
        ],
    ],
    'navigation' => [
        'title' => 'Danh sách loại hợp đồng',
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