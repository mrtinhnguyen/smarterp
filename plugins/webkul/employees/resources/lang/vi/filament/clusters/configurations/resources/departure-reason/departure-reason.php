<?php

return [
    'title' => 'Lý do nghỉ việc',

    'navigation' => [
        'title' => 'Lý do nghỉ việc',
        'group' => 'Nhân viên',
    ],

    'groups' => [
        'status'     => 'Trạng thái',
        'created-by' => 'Tạo bởi',
        'created-at' => 'Ngày tạo',
        'updated-at' => 'Ngày cập nhật',
    ],

    'form' => [
        'fields' => [
            'name' => 'Tên',
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => 'ID',
            'name'       => 'Tên',
            'created-by' => 'Tạo bởi',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo lý do nghỉ việc',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Lý do nghỉ việc đã được xóa',
                    'body'  => 'Lý do nghỉ việc đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các lý do nghỉ việc đã được xóa',
                    'body'  => 'Các lý do nghỉ việc đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'name' => 'Tên',
                ],
            ],
        ],
    ],
];
