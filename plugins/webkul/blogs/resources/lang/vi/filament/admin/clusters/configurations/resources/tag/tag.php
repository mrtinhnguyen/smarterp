<?php

return [
    'navigation' => [
        'title' => 'Thẻ',
        'group' => 'Blog',
    ],

    'form' => [
        'name'  => 'Tên',
        'color' => 'Màu sắc',
    ],

    'table' => [
        'columns' => [
            'name'       => 'Tên',
            'color'      => 'Màu sắc',
            'created-at' => 'Được tạo lúc',
            'updated-at' => 'Được cập nhật lúc',
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

            'force-delete' => [
                'notification' => [
                    'title' => 'Thẻ đã được xóa vĩnh viễn',
                    'body'  => 'Thẻ đã được xóa vĩnh viễn thành công.',
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
