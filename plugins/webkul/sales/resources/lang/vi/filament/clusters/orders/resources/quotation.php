<?php

return [
    'title' => 'Báo giá',

    'navigation' => [
        'title' => 'Báo giá',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => 'Chung',
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
                            'lead-time'           => 'Thời gian dẫn đầu',
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
                            'discount-percentage' => 'Chiết khấu (%)',
                        ],

                        'fields'      => [
                            'product'             => 'Sản phẩm',
                            'product-variants'    => 'Biến thể sản phẩm',
                            'product-simple'      => 'Sản phẩm đơn giản',
                            'quantity'            => 'Số lượng',
                            'uom'                 => 'Đơn vị đo lường',
                            'lead-time'           => 'Thời gian dẫn đầu',
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
                            'discount-percentage' => 'Chiết khấu (%)',
                        ],
                    ],

                    'product-optional' => [
                        'title'       => 'Sản phẩm tùy chọn',
                        'add-product' => 'Thêm sản phẩm',

                        'columns' => [
                            'product'             => 'Sản phẩm',
                            'description'         => 'Mô tả',
                            'quantity'            => 'Số lượng',
                            'uom'                 => 'Đơn vị đo lường',
                            'unit-price'          => 'Đơn giá',
                            'discount-percentage' => 'Chiết khấu (%)',
                        ],

                        'fields'      => [
                            'product'             => 'Sản phẩm',
                            'description'         => 'Mô tả',
                            'quantity'            => 'Số lượng',
                            'uom'                 => 'Đơn vị đo lường',
                            'unit-price'          => 'Đơn giá',
                            'discount-percentage' => 'Chiết khấu (%)',

                            'actions' => [
                                'tooltip' => [
                                    'add-order-line' => 'Thêm dòng đơn hàng',
                                ],

                                'notifications' => [
                                    'product-added' => [
                                        'title' => 'Sản phẩm đã thêm',
                                        'body'  => 'Sản phẩm đã được thêm thành công.',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'other-information' => [
                'title' => 'Thông tin khác',

                'fieldset' => [
                    'sales' => [
                        'title' => 'Bán hàng',

                        'fields' => [
                            'sales-person'       => 'Nhân viên bán hàng',
                            'customer-reference' => 'Tham chiếu khách hàng',
                            'tags'               => 'Thẻ',
                        ],
                    ],

                    'shipping' => [
                        'title'  => 'Vận chuyển',
                        'fields' => [
                            'commitment-date' => 'Ngày giao hàng',
                        ],
                    ],

                    'tracking' => [
                        'title'  => 'Theo dõi',
                        'fields' => [
                            'source-document' => 'Tài liệu nguồn',
                            'medium'          => 'Phương tiện',
                            'source'          => 'Nguồn',
                            'campaign'        => 'Chiến dịch',
                        ],
                    ],

                    'additional-information' => [
                        'title' => 'Thông tin bổ sung',

                        'fields' => [
                            'company'  => 'Công ty',
                            'currency' => 'Tiền tệ',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => 'Điều khoản & Điều kiện',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'number'             => 'Số',
            'status'             => 'Trạng thái',
            'invoice-status'     => 'Trạng thái hóa đơn',
            'creation-date'      => 'Ngày tạo',
            'commitment-date'    => 'Ngày cam kết',
            'expected-date'      => 'Ngày dự kiến',
            'customer'           => 'Khách hàng',
            'sales-person'       => 'Nhân viên bán hàng',
            'sales-team'         => 'Đội bán hàng',
            'untaxed-amount'     => 'Số tiền chưa thuế',
            'amount-tax'         => 'Số tiền thuế',
            'amount-total'       => 'Tổng số tiền',
            'customer-reference' => 'Tham chiếu khách hàng',
        ],

        'filters' => [
            'sales-person'     => 'Nhân viên bán hàng',
            'utm-source'       => 'Nguồn UTM',
            'company'          => 'Công ty',
            'customer'         => 'Khách hàng',
            'journal'          => 'Sổ nhật ký',
            'invoice-address'  => 'Địa chỉ hóa đơn',
            'shipping-address' => 'Địa chỉ giao hàng',
            'fiscal-position'  => 'Vị thế tài chính',
            'payment-term'     => 'Điều khoản thanh toán',
            'currency'         => 'Tiền tệ',
            'created-at'       => 'Ngày tạo',
            'updated-at'       => 'Ngày cập nhật',
        ],

        'groups' => [
            'medium'          => 'Phương tiện',
            'source'          => 'Nguồn',
            'team'            => 'Đội',
            'sales-person'    => 'Nhân viên bán hàng',
            'currency'        => 'Tiền tệ',
            'company'         => 'Công ty',
            'customer'        => 'Khách hàng',
            'quotation-date'  => 'Ngày báo giá',
            'commitment-date' => 'Ngày cam kết',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Báo giá đã khôi phục',
                    'body'  => 'Báo giá đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Báo giá đã xóa',
                    'body'  => 'Báo giá đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Báo giá đã xóa vĩnh viễn',
                    'body'  => 'Báo giá đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Các báo giá đã khôi phục',
                    'body'  => 'Các báo giá đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các báo giá đã xóa',
                    'body'  => 'Các báo giá đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Các báo giá đã xóa vĩnh viễn',
                    'body'  => 'Các báo giá đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'Báo giá đã tạo',
                    'body'  => 'Báo giá đã được tạo thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'section' => [
            'general' => [
                'title'   => 'Chung',
                'entries' => [
                    'customer'       => 'Khách hàng',
                    'expiration'     => 'Hết hạn',
                    'quotation-date' => 'Ngày báo giá',
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
                        'entries'     => [
                            'product'             => 'Sản phẩm',
                            'product-variants'    => 'Biến thể sản phẩm',
                            'product-simple'      => 'Sản phẩm đơn giản',
                            'quantity'            => 'Số lượng',
                            'uom'                 => 'Đơn vị đo lường',
                            'lead-time'           => 'Thời gian dẫn đầu',
                            'packaging-qty'       => 'Số lượng đóng gói',
                            'packaging'           => 'Đóng gói',
                            'unit-price'          => 'Đơn giá',
                            'cost'                => 'Chi phí',
                            'margin'              => 'Biên lợi nhuận',
                            'taxes'               => 'Thuế',
                            'amount'              => 'Số tiền',
                            'margin-percentage'   => 'Biên lợi nhuận (%)',
                            'discount-percentage' => 'Chiết khấu (%)',
                            'sub-total'           => 'Tổng phụ',
                        ],
                    ],

                    'product-optional' => [
                        'title'       => 'Sản phẩm tùy chọn',
                        'add-product' => 'Thêm sản phẩm',
                        'entries'     => [
                            'product'             => 'Sản phẩm',
                            'description'         => 'Mô tả',
                            'quantity'            => 'Số lượng',
                            'uom'                 => 'Đơn vị đo lường',
                            'unit-price'          => 'Đơn giá',
                            'discount-percentage' => 'Chiết khấu (%)',
                            'sub-total'           => 'Tổng phụ',

                            'actions' => [
                                'tooltip' => [
                                    'add-order-line' => 'Thêm dòng đơn hàng',
                                ],

                                'notifications' => [
                                    'product-added' => [
                                        'title' => 'Sản phẩm đã thêm',
                                        'body'  => 'Sản phẩm đã được thêm thành công.',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'other-information' => [
                'title' => 'Thông tin khác',

                'fieldset' => [
                    'sales' => [
                        'title' => 'Bán hàng',

                        'entries' => [
                            'sales-person'       => 'Nhân viên bán hàng',
                            'customer-reference' => 'Tham chiếu khách hàng',
                            'tags'               => 'Thẻ',
                        ],
                    ],

                    'shipping' => [
                        'title'   => 'Vận chuyển',
                        'entries' => [
                            'commitment-date' => 'Ngày giao hàng',
                        ],
                    ],

                    'tracking' => [
                        'title'   => 'Theo dõi',
                        'entries' => [
                            'source-document' => 'Tài liệu nguồn',
                            'medium'          => 'Phương tiện',
                            'source'          => 'Nguồn',
                            'campaign'        => 'Chiến dịch',
                        ],
                    ],

                    'additional-information' => [
                        'title' => 'Thông tin bổ sung',

                        'entries' => [
                            'company'  => 'Công ty',
                            'currency' => 'Tiền tệ',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => 'Điều khoản & Điều kiện',
            ],
        ],
    ],
];