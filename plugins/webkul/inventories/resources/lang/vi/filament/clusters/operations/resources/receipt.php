<?php

return [
    'navigation' => [
        'title' => 'Biên lai',
        'group' => 'Chuyển kho',
    ],

    'table' => [
        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Bien lai da duoc xoa',
                        'body'  => 'The receipt ras been deleted successfully.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa biên lai',
                        'body'  => 'Biên lai không thể được xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Biên lai đã được xóa',
                        'body'  => 'Các biên lai đã được xóa thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa biên lai',
                        'body'  => 'Các biên lai không thể được xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],
    ],
];

