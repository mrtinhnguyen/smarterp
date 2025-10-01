<?php

return [
    'title' => 'Nhà cung cấp',

    'navigation' => [
        'title' => 'Nhà cung cấp',
    ],

    'form' => [
        'fields' => [
            'sales-person'       => 'Nhân viên bán hàng',
            'payment-terms'      => 'Điều khoản thanh toán',
            'payment-method'     => 'Phương thức thanh toán',
            'fiscal-position'    => 'Vị trí tài chính',
            'purchase'           => 'Mua sắm',
            'fiscal-information' => 'Thông tin tài chính',
        ],
        'tabs' => [
            'invoicing' => [
                'title'  => 'Xuất hóa đơn',
                'fields' => [
                    'customer-invoices'              => 'Hóa đơn khách hàng',
                    'invoice-sending-method'         => 'Phương thức gửi hóa đơn',
                    'invoice-edi-format-store'       => 'Định dạng hóa đơn điện tử',
                    'peppol-eas'                     => 'Địa chỉ Peppol',
                    'endpoint'                       => 'Điểm cuối',
                    'auto-post-bills'                => 'Tự động đăng hóa đơn',
                    'automation'                     => 'Tự động hóa',
                    'ignore-abnormal-invoice-amount' => 'Bỏ qua số tiền hóa đơn bất thường',
                    'ignore-abnormal-invoice-date'   => 'Bỏ qua ngày hóa đơn bất thường',
                ],
            ],
            'internal-notes' => [
                'title' => 'Ghi chú nội bộ',
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'sales-person'       => 'Nhân viên bán hàng',
            'payment-terms'      => 'Điều khoản thanh toán',
            'payment-method'     => 'Phương thức thanh toán',
            'fiscal-position'    => 'Vị trí tài chính',
            'purchase'           => 'Mua sắm',
            'fiscal-information' => 'Thông tin tài chính',
        ],
        'tabs' => [
            'invoicing' => [
                'title' => 'Xuất hóa đơn',
                'entries' => [
                    'customer-invoices'              => 'Hóa đơn khách hàng',
                    'invoice-sending-method'         => 'Phương thức gửi hóa đơn',
                    'invoice-edi-format-store'       => 'Định dạng hóa đơn điện tử',
                    'peppol-eas'                     => 'Địa chỉ Peppol',
                    'endpoint'                       => 'Điểm cuối',
                    'auto-post-bills'                => 'Tự động đăng hóa đơn',
                    'automation'                     => 'Tự động hóa',
                    'ignore-abnormal-invoice-amount' => 'Bỏ qua số tiền hóa đơn bất thường',
                    'ignore-abnormal-invoice-date'   => 'Bỏ qua ngày hóa đơn bất thường',
                ],
            ],
            'internal-notes' => [
                'title' => 'Ghi chú nội bộ',
            ],
        ],
    ],
];
