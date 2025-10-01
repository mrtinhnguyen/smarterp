<?php

return [
    'notification' => [
        'title' => 'Danh mục đã được cập nhật',
        'body'  => 'Danh mục đã được cập nhật thành công.',
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Danh mục đã được xóa',
                    'body'  => 'Danh mục đã được xóa thành công.',
                ],

                'error' => [
                    'title' => 'Không thể xóa danh mục',
                    'body'  => 'Danh mục không thể được xóa vì đang được sử dụng.',
                ],
            ],
        ],
    ],

    'save' => [
        'notification' => [
            'error' => [
                'title' => 'Cập nhật danh mục thất bại',
            ],
        ],
    ],
];
