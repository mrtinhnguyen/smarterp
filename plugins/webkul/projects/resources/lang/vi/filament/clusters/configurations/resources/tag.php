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
                    'title' => 'Thẻ đã cập nhật',
                    'body'  => 'Thẻ đã được cập nhật thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Thẻ đã khôi phục',
                    'body'  => 'Thẻ đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Thẻ đã xóa',
                    'body'  => 'Thẻ đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Thẻ đã xóa vĩnh viễn',
                    'body'  => 'Thẻ đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Các thẻ đã khôi phục',
                    'body'  => 'Các thẻ đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các thẻ đã xóa',
                    'body'  => 'Các thẻ đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Các thẻ đã xóa vĩnh viễn',
                    'body'  => 'Các thẻ đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],
    ],
];