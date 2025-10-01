<?php

return [
    'navigation' => [
        'title' => 'Dropship',
        'group' => 'Chuyển kho',
    ],

    'table' => [
        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Dropship đã được xóa',
                        'body'  => 'Dropship đã được xóa thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa dropship',
                        'body'  => 'Dropship không thể được xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Dropships đã được xóa',
                        'body'  => 'Các dropships đã được xóa thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa dropships',
                        'body'  => 'Các dropships không thể được xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],
    ],
];

