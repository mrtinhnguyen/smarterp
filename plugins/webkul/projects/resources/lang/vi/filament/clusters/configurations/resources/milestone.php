<?php

return [
    'navigation' => [
        'title' => 'Cột mốc',
    ],

    'form' => [
        'name'         => 'Tên',
        'deadline'     => 'Hạn chót',
        'is-completed' => 'Đã hoàn thành',
        'project'      => 'Dự án',
    ],

    'table' => [
        'columns' => [
            'name'         => 'Tên',
            'deadline'     => 'Hạn chót',
            'is-completed' => 'Đã hoàn thành',
            'completed-at' => 'Hoàn thành lúc',
            'project'      => 'Dự án',
            'creator'      => 'Người tạo',
            'created-at'   => 'Ngày tạo',
            'updated-at'   => 'Ngày cập nhật',
        ],

        'groups' => [
            'name'         => 'Tên',
            'is-completed' => 'Đã hoàn thành',
            'project'      => 'Dự án',
            'created-at'   => 'Ngày tạo',
        ],

        'filters' => [
            'is-completed' => 'Đã hoàn thành',
            'project'      => 'Dự án',
            'creator'      => 'Người tạo',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Cột mốc đã được cập nhật',
                    'body'  => 'Cột mốc đã được cập nhật thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Cột mốc đã được xóa',
                    'body'  => 'Cột mốc đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Các cột mốc đã được xóa',
                    'body'  => 'Các cột mốc đã được xóa thành công.',
                ],
            ],
        ],
    ],
];
