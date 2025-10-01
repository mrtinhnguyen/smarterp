<?php

return [
    'navigation' => [
        'title' => 'Chuyển kho nội bộ',
        'group' => 'Chuyển kho',
    ],

    'table' => [
        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Chuyển kho nội bộ đã được xóa',
                        'body'  => 'Chuyển kho nội bộ đã được xóa thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa chuyển kho nội bộ',
                        'body'  => 'Chuyển kho nội bộ không thể được xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Chuyển kho nội bộ đã được xóa',
                        'body'  => 'Chuyển kho nội bộ đã được xóa thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa chuyển kho nội bộ',
                        'body'  => 'Chuyển kho nội bộ không thể được xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],
    ],
];