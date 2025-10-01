<?php

return [
    'title' => 'Ngày lễ công cộng',

    'model-label' => 'Ngày lễ công cộng',

    'navigation' => [
        'title' => 'Ngày lễ công cộng',
    ],

    'form' => [
        'fields' => [
            'name'             => 'Tên',
            'name-placeholder' => 'Nhập tên ngày lễ công cộng',
            'date-from'        => 'Ngày bắt đầu',
            'date-to'          => 'Ngày kết thúc',
            'color'            => 'Màu sắc',
            'calendar'         => 'Lịch',
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => 'Tên',
            'company-name' => 'Tên công ty',
            'calendar'     => 'Lịch',
            'created-by'   => 'Được tạo bởi',
            'date-from'    => 'Ngày bắt đầu',
            'date-to'      => 'Ngày kết thúc',
        ],

        'filters' => [
            'name'         => 'Tên',
            'company-name' => 'Tên công ty',
            'created-by'   => 'Được tạo bởi',
            'date-from'    => 'Ngày bắt đầu',
            'date-to'      => 'Ngày kết thúc',
            'created-at'   => 'Ngày tạo',
            'updated-at'   => 'Ngày cập nhật',
        ],

        'groups' => [
            'name'         => 'Tên',
            'company-name' => 'Tên công ty',
            'created-by'   => 'Được tạo bởi',
            'date-from'    => 'Ngày bắt đầu',
            'date-to'      => 'Ngày kết thúc',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Ngày lễ công cộng đã được cập nhật',
                    'body'  => 'Ngày lễ công cộng đã được cập nhật thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Ngày lễ công cộng đã được xóa',
                    'body'  => 'Ngày lễ công cộng đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Các ngày lễ công cộng đã được xóa',
                    'body'  => 'Các ngày lễ công cộng đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'      => 'Tên',
            'date-from' => 'Ngày bắt đầu',
            'date-to'   => 'Ngày kết thúc',
            'color'     => 'Màu sắc',
        ],
    ],
];
