<?php

return [
    'title' => 'Loại việc làm',

    'navigation' => [
        'title' => 'Loại việc làm',
        'group' => 'Tuyển dụng',
    ],

    'form' => [
        'fields' => [
            'name'    => 'Loại việc làm',
            'code'    => 'Mã',
            'country' => 'Quốc gia',
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => 'ID',
            'name'       => 'Loại việc làm',
            'code'       => 'Mã',
            'country'    => 'Quốc gia',
            'created-by' => 'Tạo bởi',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'filters' => [
            'country' => 'Quốc gia',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo loại việc làm',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Loại việc làm đã được xóa',
                    'body'  => 'Loại việc làm đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các loại việc làm đã được xóa',
                    'body'  => 'Các loại việc làm đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'name'    => 'Loại việc làm',
                    'code'    => 'Mã',
                    'country' => 'Quốc gia',
                ],
            ],
        ],
    ],
];
