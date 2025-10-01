<?php

return [
    'title' => 'Ngày bắt buộc',

    'model-label' => 'Ngày bắt buộc',

    'navigation' => [
        'title' => 'Ngày nghỉ bắt buộc',
    ],

    'form' => [
        'fields' => [
            'name'       => 'Tên',
            'start-date' => 'Ngày bắt đầu',
            'end-date'   => 'Ngày kết thúc',
            'color'      => 'Màu sắc',
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => 'Tên',
            'company-name' => 'Tên công ty',
            'created-by'   => 'Tạo bởi',
            'start-date'   => 'Ngày bắt đầu',
            'end-date'     => 'Ngày kết thúc',
        ],

        'filters' => [
            'name'         => 'Tên',
            'company-name' => 'Tên công ty',
            'created-by'   => 'Tạo bởi',
            'start-date'   => 'Ngày bắt đầu',
            'end-date'     => 'Ngày kết thúc',
        ],

        'groups' => [
            'name'         => 'Tên',
            'company-name' => 'Tên công ty',
            'created-by'   => 'Tạo bởi',
            'start-date'   => 'Ngày bắt đầu',
            'end-date'     => 'Ngày kết thúc',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Ngày bắt buộc đã cập nhật',
                    'body'  => 'Ngày bắt buộc đã được cập nhật thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Ngày bắt buộc đã xóa',
                    'body'  => 'Ngày bắt buộc đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Các ngày bắt buộc đã xóa',
                    'body'  => 'Các ngày bắt buộc đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'       => 'Tên',
            'start-date' => 'Ngày bắt đầu',
            'end-date'   => 'Ngày kết thúc',
            'color'      => 'Màu sắc',
        ],
    ],
];
