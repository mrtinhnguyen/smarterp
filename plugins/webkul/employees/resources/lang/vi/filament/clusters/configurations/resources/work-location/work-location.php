<?php

return [
    'title' => 'Nơi làm việc',

    'navigation' => [
        'title' => 'Nơi làm việc',
        'group' => 'Nhân viên',
    ],

    'form' => [
        'name'            => 'Tên',
        'company'         => 'Công ty',
        'location-type'   => 'Loại vị trí',
        'location-number' => 'Số vị trí',
        'status'          => 'Trạng thái',
    ],

    'table' => [
        'columns' => [
            'id'              => 'ID',
            'name'            => 'Tên',
            'status'          => 'Trạng thái',
            'company'         => 'Công ty',
            'location-type'   => 'Loại vị trí',
            'location-number' => 'Số vị trí',
            'deleted-at'      => 'Ngày xóa',
            'created-by'      => 'Tạo bởi',
            'created-at'      => 'Ngày tạo',
            'updated-at'      => 'Ngày cập nhật',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo nơi làm việc',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Nơi làm việc đã được xóa',
                    'body'  => 'Nơi làm việc đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các nơi làm việc đã được xóa',
                    'body'  => 'Các nơi làm việc đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'name'            => 'Tên',
                    'company'         => 'Công ty',
                    'location-type'   => 'Loại vị trí',
                    'location-number' => 'Số vị trí',
                    'status'          => 'Trạng thái',
                ],
            ],
        ],
    ],
];
