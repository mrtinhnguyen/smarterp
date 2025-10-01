<?php

return [
    'title' => 'Loại kỹ năng',

    'navigation' => [
        'title' => 'Loại kỹ năng',
        'group' => 'Nhân viên',
    ],

    'form' => [
        'sections' => [
            'fields' => [
                'name'       => 'Tên',
                'color'      => 'Màu sắc',
                'status'     => 'Trạng thái',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => 'ID',
            'name'       => 'Loại kỹ năng',
            'status'     => 'Trạng thái',
            'color'      => 'Màu sắc',
            'skills'     => 'Kỹ năng',
            'levels'     => 'Cấp độ',
            'created-by' => 'Tạo bởi',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo loại kỹ năng',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Loại kỹ năng đã được xóa',
                    'body'  => 'Loại kỹ năng đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các loại kỹ năng đã được xóa',
                    'body'  => 'Các loại kỹ năng đã được xóa thành công.',
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
                    'color'      => 'Màu sắc',
                    'status'     => 'Trạng thái',
                ],
            ],
        ],
    ],
];
