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
            'paired-internal-transfer-payment' => 'Thanh toán chuyển khoản nội bộ được ghép',
            'payment-method-line'              => 'Dòng phương thức thanh toán',
            'payment-method'                   => 'Phương thức thanh toán',
            'currency'                         => 'Tiền tệ',
            'partner'                          => 'Đối tác',
            'outstanding-amount'               => 'Số tiền còn nợ',
            'destination-account'              => 'Tài khoản đích',
            'created-by'                       => 'Người tạo',
            'payment-transaction'              => 'Giao dịch thanh toán',
        ],

        'groups' => [
            'name'                             => 'Tên',
            'company'                          => 'Công ty',
            'partner'                          => 'Đối tác',
            'payment-method-line'              => 'Dòng phương thức thanh toán',
            'payment-method'                   => 'Phương thức thanh toán',
            'partner-bank-account'             => 'Tài khoản ngân hàng đối tác',
            'paired-internal-transfer-payment' => 'Thanh toán chuyển khoản nội bộ được ghép',
            'created-at'                       => 'Ngày tạo',
            'updated-at'                       => 'Ngày cập nhật',
        ],

        'filters' => [
            'company'                          => 'Công ty',
            'customer-bank-account'            => 'Tài khoản ngân hàng khách hàng',
            'paired-internal-transfer-payment' => 'Thanh toán chuyển khoản nội bộ được ghép',
            'payment-method'                   => 'Phương thức thanh toán',
            'currency'                         => 'Tiền tệ',
            'partner'                          => 'Đối tác',
            'partner-method-line'              => 'Dòng phương thức đối tác',
            'created-at'                       => 'Ngày tạo',
            'updated-at'                       => 'Ngày cập nhật',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Thanh toán đã được xóa',
                    'body'  => 'Thanh toán đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Các thanh toán đã được xóa',
                    'body'  => 'Các thanh toán đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'payment-information' => [
                'title'   => 'Thông tin thanh toán',
                'entries' => [
                    'state'                 => 'Trạng thái',
                    'payment-type'          => 'Loại thanh toán',
                    'journal'               => 'Sổ nhật ký',
                    'customer-bank-account' => 'Tài khoản ngân hàng khách hàng',
                    'customer'              => 'Khách hàng',
                ],
            ],

            'payment-details' => [
                'title'   => 'Chi tiết thanh toán',
                'entries' => [
                    'amount' => 'Số tiền',
                    'date'   => 'Ngày',
                    'memo'   => 'Ghi chú',
                ],
            ],

            'payment-method' => [
                'title'   => 'Phương thức thanh toán',
                'entries' => [
                    'payment-method' => 'Phương thức thanh toán',
                ],
            ],
        ],
    ],

];