<?php

return [
    'navigation' => [
        'title' => 'Danh sách lý do nghỉ việc',
        'group' => 'Nhân viên',
    ],
    'header-actions' => [
        'create' => [
            'label' => 'Thêm mới lý do nghỉ việc',

            'notification' => [
                'title' => 'Một lý do nghỉ việc mới đã tạo thành công',
                'body'  => 'The departure reason has been created successfully.',
            ],
        ],
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