<?php

return [
    'header-actions' => [
        'print' => [
            'label' => 'In',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Biên lai đã được xóa',
                    'body'  => 'Biên lai đã được xóa thành công.',
                ],

                'error' => [
                    'title' => 'Không thể xóa biên lai',
                    'body'  => 'Biên lai không thể được xóa vì đang được sử dụng.',
                ],
            ],
        ],
    ],
];