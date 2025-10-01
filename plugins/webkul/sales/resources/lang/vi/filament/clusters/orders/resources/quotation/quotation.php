<?php

return [
    'title' => 'Báo giá',

    'navigation' => [
        'title' => 'Báo giá',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => 'Thông tin chung',
                'fields' => [
                    'customer'       => 'Khách hàng',
                    'expiration'     => 'Hết hạn',
                    'quotation-date' => 'Ngày báo giá',
                    'order-date'     => 'Ngày đặt hàng',
                    'payment-term'   => 'Điều khoản thanh toán',
                ],
            ],
        ],

        'tabs' => [
            'order-line' => [
                'title' => 'Dòng đơn hàng',

                'repeater' => [
                    'products' => [
                        'title'       => 'Sản phẩm',
                        'add-product' => 'Thêm sản phẩm',

                        'columns'     => [
                            'product'             => 'Sản phẩm',
                            'product-variants'    => 'Biến thể sản phẩm',
                            'product-simple'      => 'Sản phẩm đơn giản',
                            'quantity'            => 'Số lượng',
                            'uom'                 => 'Đơn vị đo',
                            'lead-time'           => 'Thời gian dẫn',
                            'qty-delivered'       => 'Số lượng đã giao',
                            'qty-invoiced'        => 'Số lượng đã xuất hóa đơn',
                            'packaging-qty'       => 'Số lượng đóng gói',
                            'packaging'           => 'Đóng gói',
                            'unit-price'          => 'Đơn giá',
                            'cost'                => 'Chi phí',
                            'margin'              => 'Biên lợi nhuận',
                            'taxes'               => 'Thuế',
                            'amount'              => 'Số tiền',
                            'margin-percentage'   => 'Biên lợi nhuận (%)',
                            'discount-percentage' => 'Giảm giá (%)',
                        ],
                    ],
                ],
            ],

            'other-info' => [
                'title' => 'Thông tin khác',

                'fields' => [
                    'reference'     => 'Tham chiếu',
                    'incoterm'      => 'Điều kiện giao hàng',
                    'incoterm-place' => 'Nơi giao hàng',
                    'note'          => 'Ghi chú',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'customer'       => 'Khách hàng',
            'expiration'     => 'Hết hạn',
            'quotation-date' => 'Ngày báo giá',
            'order-date'     => 'Ngày đặt hàng',
            'payment-term'   => 'Điều khoản thanh toán',
            'reference'      => 'Tham chiếu',
            'incoterm'       => 'Điều kiện giao hàng',
            'incoterm-place' => 'Nơi giao hàng',
            'note'           => 'Ghi chú',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo báo giá',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Báo giá đã được xóa',
                    'body'  => 'Báo giá đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các báo giá đã được xóa',
                    'body'  => 'Các báo giá đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'customer'       => 'Khách hàng',
                    'expiration'     => 'Hết hạn',
                    'quotation-date' => 'Ngày báo giá',
                    'order-date'     => 'Ngày đặt hàng',
                    'payment-term'   => 'Điều khoản thanh toán',
                ],
            ],

            'additional' => [
                'title' => 'Thông tin bổ sung',
                'entries' => [
                    'reference'      => 'Tham chiếu',
                    'incoterm'       => 'Điều kiện giao hàng',
                    'incoterm-place' => 'Nơi giao hàng',
                    'note'           => 'Ghi chú',
                ],
            ],
        ],
    ],
];
