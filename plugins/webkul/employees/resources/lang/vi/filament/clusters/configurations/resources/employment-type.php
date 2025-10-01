<?php

return [
    'title' => 'Loại Việc làm',

    'navigation' => [
        'title' => 'Loại Việc làm',
        'group' => 'Tuyển dụng',
    ],

    'form' => [
        'fields' => [
            'name'    => 'Loại Việc làm',
            'code'    => 'Mã',
            'country' => 'Quốc gia',
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => 'ID',
            'name'       => 'Loại Việc làm',
            'code'       => 'Mã',
            'country'    => 'Quốc gia',
            'created-by' => 'Tạo bởi',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'filters' => [
            'name'       => 'Loại Việc làm',
            'country'    => 'Quốc gia',
            'created-by' => 'Tạo bởi',
            'updated-at' => 'Ngày cập nhật',
            'created-at' => 'Ngày tạo',
        ],

        'groups' => [
            'name'       => 'Loại Việc làm',
            'country'    => 'Quốc gia',
            'code'       => 'Mã',
            'created-by' => 'Tạo bởi',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Loại Việc làm',
                    'body'  => 'Loại việc làm đã được chỉnh sửa thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Loại việc làm đã xóa',
                    'body'  => 'Loại việc làm đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Các loại việc làm đã xóa',
                    'body'  => 'Các loại việc làm đã được xóa thành công.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Loại Việc làm',
                    'body'  => 'Loại việc làm đã được tạo thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'    => 'Loại Việc làm',
            'code'    => 'Mã',
            'country' => 'Quốc gia',
        ],
    ],
];