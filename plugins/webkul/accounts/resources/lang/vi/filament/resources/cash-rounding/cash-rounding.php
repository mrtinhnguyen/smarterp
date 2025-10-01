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
            'create' => [
                'label' => 'Tạo làm tròn tiền mặt',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Làm tròn tiền mặt đã được xóa',
                    'body'  => 'Làm tròn tiền mặt đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các làm tròn tiền mặt đã được xóa',
                    'body'  => 'Các làm tròn tiền mặt đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'name'               => 'Tên',
                    'rounding-precision' => 'Độ chính xác làm tròn',
                    'rounding-strategy'  => 'Chiến lược làm tròn',
                    'profit-account'     => 'Tài khoản lãi',
                    'loss-account'       => 'Tài khoản lỗ',
                    'rounding-method'    => 'Phương pháp làm tròn',
                ],
            ],
        ],
    ],
];
