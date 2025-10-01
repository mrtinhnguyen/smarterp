<?php

return [
    'form' => [
        'fields' => [
            'name'               => 'Tên',
            'rounding-precision' => 'Độ chính xác làm tròn',
            'rounding-strategy'  => 'Chiến lược làm tròn',
            'profit-account'     => 'Tài khoản lãi',
            'loss-account'       => 'Tài khoản lỗ',
            'rounding-method'    => 'Phương pháp làm tròn',
        ],
    ],

    'table' => [
        'columns' => [
            'name'                 => 'Tên',
            'rounding-strategy'    => 'Chiến lược làm tròn',
            'rounding-method'      => 'Phương pháp làm tròn',
            'created-by'           => 'Tạo bởi',
            'profit-account'       => 'Tài khoản lãi',
            'loss-account'         => 'Tài khoản lỗ',
        ],

        'groups' => [
            'name'              => 'Tên',
            'rounding-strategy' => 'Chiến lược làm tròn',
            'rounding-method'   => 'Phương pháp làm tròn',
            'created-by'        => 'Tạo bởi',
            'profit-account'    => 'Tài khoản lãi',
            'loss-account'      => 'Tài khoản lỗ',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Làm tròn tiền mặt đã xóa',
                    'body'  => 'Làm tròn tiền mặt đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Làm tròn tiền mặt đã xóa',
                    'body'  => 'Làm tròn tiền mặt đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'               => 'Tên',
            'rounding-precision' => 'Độ chính xác làm tròn',
            'rounding-strategy'  => 'Chiến lược làm tròn',
            'profit-account'     => 'Tài khoản lãi',
            'loss-account'       => 'Tài khoản lỗ',
            'rounding-method'    => 'Phương pháp làm tròn',
        ],
    ],
];