<?php

return [
    'navigation' => [
        'title' => 'Nhãn',
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
                    'title' => 'Nhãn đã được cập nhật',
                    'body'  => 'Nhãn đã được cập nhật thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Nhãn đã được khôi phục',
                    'body'  => 'Nhãn đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Nhãn đã được xóa',
                    'body'  => 'Nhãn đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Nhãn đã được xóa vĩnh viễn',
                    'body'  => 'Nhãn đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Các nhãn đã được khôi phục',
                    'body'  => 'Các nhãn đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các nhãn đã được xóa',
                    'body'  => 'Các nhãn đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Các nhãn đã được xóa vĩnh viễn',
                    'body'  => 'Các nhãn đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],
    ],
];
