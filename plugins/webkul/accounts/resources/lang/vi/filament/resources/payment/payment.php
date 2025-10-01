<?php

return [
    'title' => 'Thanh toán',

    'navigation' => [
        'title' => 'Thanh toán',
        'group' => 'Hóa đơn',
    ],

    'form' => [
        'sections' => [
            'fields' => [
                'payment-type'          => 'Loại thanh toán',
                'memo'                  => 'Ghi chú',
                'date'                  => 'Ngày',
                'amount'                => 'Số tiền',
                'payment-method'        => 'Phương thức thanh toán',
                'customer'              => 'Khách hàng',
                'journal'               => 'Sổ nhật ký',
                'customer-bank-account' => 'Tài khoản ngân hàng khách hàng',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                             => 'Tên',
            'company'                          => 'Công ty',
            'bank-account-holder'              => 'Chủ tài khoản ngân hàng',
            'paired-internal-transfer-payment' => 'Thanh toán chuyển khoản nội bộ',
            'payment-method-line'              => 'Dòng phương thức thanh toán',
            'payment-method'                   => 'Phương thức thanh toán',
            'currency'                         => 'Tiền tệ',
            'partner'                          => 'Đối tác',
            'outstanding-amount'               => 'Số tiền còn nợ',
            'destination-account'              => 'Tài khoản đích',
            'created-by'                       => 'Tạo bởi',
            'payment-transaction'              => 'Giao dịch thanh toán',
        ],

        'groups' => [
            'name'                             => 'Tên',
            'company'                          => 'Công ty',
            'partner'                          => 'Đối tác',
            'payment-method-line'              => 'Dòng phương thức thanh toán',
            'payment-method'                   => 'Phương thức thanh toán',
            'partner-bank-account'             => 'Tài khoản ngân hàng đối tác',
            'paired-internal-transfer-payment' => 'Thanh toán chuyển khoản nội bộ',
            'created-at'                       => 'Ngày tạo',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo thanh toán',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Thanh toán đã được xóa',
                    'body'  => 'Thanh toán đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các thanh toán đã được xóa',
                    'body'  => 'Các thanh toán đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'name'                => 'Tên',
                    'payment-type'        => 'Loại thanh toán',
                    'date'                => 'Ngày',
                    'amount'              => 'Số tiền',
                    'payment-method'      => 'Phương thức thanh toán',
                    'customer'            => 'Khách hàng',
                    'journal'             => 'Sổ nhật ký',
                    'memo'                => 'Ghi chú',
                ],
            ],

            'banking' => [
                'title' => 'Thông tin ngân hàng',
                'entries' => [
                    'customer-bank-account' => 'Tài khoản ngân hàng khách hàng',
                    'destination-account'   => 'Tài khoản đích',
                    'bank-account-holder'   => 'Chủ tài khoản ngân hàng',
                ],
            ],
        ],
    ],
];
