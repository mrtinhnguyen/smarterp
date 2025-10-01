<?php

return [
    'title' => 'Mẫu báo giá',

    'navigation' => [
        'title'  => 'Mẫu báo giá',
        'group'  => 'Đơn hàng bán',
    ],

    'form' => [
        'tabs' => [
            'products' => [
                'title'  => 'Sản phẩm',
                'fields' => [
                    'products'     => 'Sản phẩm',
                    'name'         => 'Tên',
                    'quantity'     => 'Số lượng',
                ],
            ],

            'terms-and-conditions' => [
                'title'  => 'Điều khoản & Điều kiện',
                'fields' => [
                    'note-placeholder' => 'Viết điều khoản và điều kiện cho báo giá.',
                ],
            ],
        ],

        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',

                'fields' => [
                    'name'               => 'Tên',
                    'quotation-validity' => 'Hiệu lực báo giá',
                    'sale-journal'       => 'Sổ nhật ký bán hàng',
                ],
            ],

            'signature-and-payment' => [
                'title' => 'Chữ ký & Thanh toán',

                'fields' => [
                    'online-signature'      => 'Chữ ký trực tuyến',
                    'online-payment'        => 'Thanh toán trực tuyến',
                    'prepayment-percentage' => 'Tỷ lệ thanh toán trước',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'created-by'            => 'Tạo bởi',
            'company'               => 'Công ty',
            'name'                  => 'Tên',
            'number-of-days'        => 'Số ngày',
            'journal'               => 'Sổ nhật ký bán hàng',
            'signature-required'    => 'Yêu cầu chữ ký',
            'payment-required'      => 'Yêu cầu thanh toán',
            'prepayment-percentage' => 'Tỷ lệ thanh toán trước',
        ],
        'groups'  => [
            'company' => 'Công ty',
            'name'    => 'Tên',
            'journal' => 'Sổ nhật ký',
        ],
        'filters' => [
            'created-by' => 'Tạo bởi',
            'company'    => 'Công ty',
            'name'       => 'Tên',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],
        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Mẫu báo giá đã xóa',
                    'body'  => 'Mẫu báo giá đã được xóa thành công.',
                ],
            ],

        ],
        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Mẫu báo giá đã xóa',
                    'body'  => 'Mẫu báo giá đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'tabs' => [
            'products' => [
                'title' => 'Sản phẩm',
            ],
            'terms-and-conditions' => [
                'title' => 'Điều khoản & Điều kiện',
            ],
        ],
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
            ],
            'signature_and_payment' => [
                'title' => 'Chữ ký & Thanh toán',
            ],
        ],
        'entries' => [
            'product'               => 'Sản phẩm',
            'description'           => 'Mô tả',
            'quantity'              => 'Số lượng',
            'unit-price'            => 'Đơn giá',
            'section-name'          => 'Tên phần',
            'note-title'            => 'Tiêu đề ghi chú',
            'name'                  => 'Tên mẫu',
            'quotation-validity'    => 'Hiệu lực báo giá',
            'sale-journal'          => 'Sổ nhật ký bán hàng',
            'online-signature'      => 'Chữ ký trực tuyến',
            'online-payment'        => 'Thanh toán trực tuyến',
            'prepayment-percentage' => 'Tỷ lệ thanh toán trước',
        ],
    ],
];