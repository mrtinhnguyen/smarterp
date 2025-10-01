<?php

return [
    'title' => 'Thẻ',

    'navigation' => [
        'title' => 'Thẻ',
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
            'name'  => 'Tên',
            'color' => 'Màu sắc',
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => 'ID',
            'name'       => 'Tên',
            'color'      => 'Màu sắc',
            'created-by' => 'Tạo bởi',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'filters' => [
            'name'       => 'Tên',
            'created-by' => 'Tạo bởi',
            'updated-by' => 'Cập nhật bởi',
            'updated-at' => 'Ngày cập nhật',
            'created-at' => 'Ngày tạo',
        ],

        'groups' => [
            'name'         => 'Tên',
            'job-position' => 'Vị trí Công việc',
            'color'        => 'Màu sắc',
            'created-by'   => 'Tạo bởi',
            'created-at'   => 'Ngày tạo',
            'updated-at'   => 'Ngày cập nhật',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Thẻ đã cập nhật',
                    'body'  => 'Thẻ đã được cập nhật thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Thẻ đã xóa',
                    'body'  => 'Thẻ đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Các thẻ đã xóa',
                    'body'  => 'Các thẻ đã được xóa thành công.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'Thẻ đã tạo',
                    'body'  => 'Thẻ đã được tạo thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name'  => 'Tên',
        'color' => 'Màu sắc',
    ],
];