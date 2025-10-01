<?php

return [
    'title' => 'Vị trí Làm việc',

    'navigation' => [
        'title' => 'Vị trí Làm việc',
        'group' => 'Nhân viên',
    ],

    'form' => [
        'name'            => 'Tên',
        'company'         => 'Công ty',
        'location-type'   => 'Loại Vị trí',
        'location-number' => 'Số Vị trí',
        'status'          => 'Trạng thái',
    ],

    'table' => [
        'columns' => [
            'id'              => 'ID',
            'name'            => 'Tên',
            'status'          => 'Trạng thái',
            'company'         => 'Công ty',
            'location-type'   => 'Loại Vị trí',
            'location-number' => 'Số Vị trí',
            'deleted-at'      => 'Đã xóa lúc',
            'created-by'      => 'Tạo bởi',
            'created-at'      => 'Ngày tạo',
            'updated-at'      => 'Ngày cập nhật',
        ],

        'filters' => [
            'name'            => 'Tên',
            'status'          => 'Trạng thái',
            'created-by'      => 'Tạo bởi',
            'company'         => 'Công ty',
            'location-number' => 'Số Vị trí',
            'location-type'   => 'Loại Vị trí',
            'updated-at'      => 'Ngày cập nhật',
            'created-at'      => 'Ngày tạo',
        ],

        'groups' => [
            'name'          => 'Tên',
            'status'        => 'Trạng thái',
            'location-type' => 'Loại Vị trí',
            'company'       => 'Công ty',
            'created-by'    => 'Tạo bởi',
            'created-at'    => 'Ngày tạo',
            'updated-at'    => 'Ngày cập nhật',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Vị trí làm việc đã cập nhật',
                    'body'  => 'Vị trí làm việc đã được cập nhật thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Vị trí làm việc đã khôi phục',
                    'body'  => 'Vị trí làm việc đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Vị trí làm việc đã xóa',
                    'body'  => 'Vị trí làm việc đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Vị trí làm việc đã xóa vĩnh viễn',
                    'body'  => 'Vị trí làm việc đã được xóa vĩnh viễn thành công.',
                ],
            ],

            'empty-state' => [
                'notification' => [
                    'title' => 'Vị trí làm việc đã tạo',
                    'body'  => 'Vị trí làm việc đã được tạo thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Các vị trí làm việc đã xóa',
                    'body'  => 'Các vị trí làm việc đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Các vị trí làm việc đã xóa vĩnh viễn',
                    'body'  => 'Các vị trí làm việc đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name'            => 'Tên',
        'company'         => 'Công ty',
        'location-type'   => 'Loại Vị trí',
        'location-number' => 'Số Vị trí',
        'status'          => 'Trạng thái',
    ],
];