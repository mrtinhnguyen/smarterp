<?php

return [
    'navigation' => [
        'title' => 'Thẻ',
    ],

    'form' => [
        'name'  => 'Tên',
        'color' => 'Màu sắc',
    ],

    'table' => [
        'columns' => [
            'name'       => 'Tên',
            'color'      => 'Màu sắc',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Thẻ đã được cập nhật',
                    'body'  => 'Thẻ đã được cập nhật thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Thẻ đã được khôi phục',
                    'body'  => 'Thẻ đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Thẻ đã được xóa',
                    'body'  => 'Thẻ đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Các thẻ đã được xóa',
                    'body'  => 'Các thẻ đã được xóa thành công.',
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
