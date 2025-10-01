<?php

return [
    'form' => [
        'fields' => [
            'tax-source'      => 'Nguồn thuế',
            'tax-destination' => 'Đích thuế',
        ],
    ],

    'table' => [
        'columns' => [
            'tax-source'      => 'Nguồn thuế',
            'tax-destination' => 'Đích thuế',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Điều khoản thanh toán đã được cập nhật',
                    'body'  => 'Điều khoản thanh toán đã được cập nhật thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Điều khoản thanh toán đã được xóa',
                    'body'  => 'Điều khoản thanh toán đã được xóa thành công.',
                ],
            ],
        ],

        'header-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Điều khoản thanh toán đã được tạo',
                    'body'  => 'Điều khoản thanh toán đã được tạo thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'tax-source'      => 'Nguồn thuế',
            'tax-destination' => 'Đích thuế',
        ],
    ],
];