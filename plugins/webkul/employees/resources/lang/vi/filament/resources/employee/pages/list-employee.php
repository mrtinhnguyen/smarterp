<?php

return [
    'tabs' => [
        'my-team'       => 'Team của tôi',
        'my-department' => 'Phòng/ban của tôi',
        'archived'      => 'Đã lưu trữ',
        'newly-hired'   => 'Mới tuyển',
    ],

    'header-actions' => [
        'create' => [
            'label' => 'Thêm nhân viên',
        ],
    ],
    'navigation' => [
        'title' => 'Danh sách nhân viên',
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