<?php

return [
    'title' => 'Ngày lễ',

    'model-label' => 'Ngày lễ',

    'navigation' => [
        'title' => 'Ngày lễ',
    ],

    'form' => [
        'fields' => [
            'name'             => 'Tên',
            'name-placeholder' => 'Nhập tên ngày lễ',
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
            'created-by'   => 'Tạo bởi',
            'date-from'    => 'Ngày bắt đầu',
            'date-to'      => 'Ngày kết thúc',
        ],

        'filters' => [
            'name'         => 'Tên',
            'company-name' => 'Tên công ty',
            'created-by'   => 'Tạo bởi',
            'date-from'    => 'Ngày bắt đầu',
            'date-to'      => 'Ngày kết thúc',
            'created-at'   => 'Tạo lúc',
            'updated-at'   => 'Cập nhật lúc',
        ],

        'groups' => [
            'name'         => 'Tên',
            'company-name' => 'Tên công ty',
            'created-by'   => 'Tạo bởi',
            'date-from'    => 'Ngày bắt đầu',
            'date-to'      => 'Ngày kết thúc',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Ngày lễ đã cập nhật',
                    'body'  => 'Ngày lễ đã được cập nhật thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Ngày lễ đã xóa',
                    'body'  => 'Ngày lễ đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Các ngày lễ đã xóa',
                    'body'  => 'Các ngày lễ đã được xóa thành công.',
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
