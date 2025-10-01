<?php

return [
    'title' => 'Thẻ nhân viên',

    'navigation' => [
        'title' => 'Thẻ nhân viên',
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

        'actions' => [
            'create' => [
                'label' => 'Tạo thẻ nhân viên',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Thẻ nhân viên đã được xóa',
                    'body'  => 'Thẻ nhân viên đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các thẻ nhân viên đã được xóa',
                    'body'  => 'Các thẻ nhân viên đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'name'  => 'Tên',
                    'color' => 'Màu sắc',
                ],
            ],
        ],
    ],
];
