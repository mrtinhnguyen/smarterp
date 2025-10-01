<?php

return [
    'title' => 'Lý do Rời đi',

    'navigation' => [
        'title' => 'Lý do Rời đi',
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

        'filters' => [
            'name'       => 'Tên',
            'employee'   => 'Nhân viên',
            'created-by' => 'Tạo bởi',
            'updated-at' => 'Ngày cập nhật',
            'created-at' => 'Ngày tạo',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Lý do rời đi đã cập nhật',
                    'body'  => 'Lý do rời đi đã được cập nhật thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Lý do rời đi đã xóa',
                    'body'  => 'Lý do rời đi đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Các lý do rời đi đã xóa',
                    'body'  => 'Các lý do rời đi đã được xóa thành công.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'Lý do rời đi đã tạo',
                    'body'  => 'Lý do rời đi đã được tạo thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name' => 'Tên',
    ],
];