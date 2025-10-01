<?php

return [
    'header-actions' => [
        'print' => [
            'label' => 'In',

            'actions' => [
                'without-content' => [
                    'label' => 'In mã vạch',
                ],

                'with-content' => [
                    'label' => 'In mã vạch với nội dung',
                ],
            ],
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Bao bì đã được xóa',
                    'body'  => 'Bao bì đã được xóa thành công.',
                ],

                'error' => [
                    'title' => 'Không thể xóa bao bì',
                    'body'  => 'Bao bì không thể được xóa vì đang được sử dụng.',
                ],
            ],
        ],
    ],
];