<?php

return [
    'title' => 'Hoàn tiền',

    'navigation' => [
        'title' => 'Hoàn tiền',
        'group' => 'Hóa đơn',
    ],

    'global-search' => [
        'number'           => 'Số hóa đơn',
        'customer'         => 'Nhà cung cấp',
        'invoice-date'     => 'Ngày hóa đơn',
        'invoice-due-date' => 'Ngày đến hạn',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => 'Thông tin chung',
                'fields' => [
                    'vendor-credit-note' => 'Hóa đơn điều chỉnh giảm nhà cung cấp',
                    'vendor'             => 'Nhà cung cấp',
                    'bill-date'          => 'Ngày hóa đơn',
                    'bill-reference'     => 'Mã tham chiếu hóa đơn',
                    'accounting-date'    => 'Ngày kế toán',
                    'payment-reference'  => 'Mã tham chiếu thanh toán',
                    'recipient-bank'     => 'Ngân hàng nhận',
                    'due-date'           => 'Ngày đến hạn',
                    'payment-term'       => 'Điều khoản thanh toán',
                ],
            ],
        ],

        'tabs' => [
            'invoice-lines' => [
                'title' => 'Chi tiết hóa đơn',

                'repeater' => [
                    'products' => [
                        'title'       => 'Sản phẩm',
                        'add-product' => 'Thêm sản phẩm',

                        'fields' => [
                            'product'             => 'Sản phẩm',
                            'quantity'            => 'Số lượng',
                            'unit'                => 'Đơn vị',
                            'taxes'               => 'Thuế',
                            'discount-percentage' => 'Phần trăm chiết khấu',
                            'unit-price'          => 'Đơn giá',
                            'sub-total'           => 'Thành tiền',
                        ],
                    ],
                ],
            ],

            'other-information' => [
                'title'    => 'Thông tin khác',
                'fieldset' => [
                    'accounting' => [
                        'title' => 'Kế toán',

                        'fields' => [
                            'incoterm'          => 'Điều kiện thương mại quốc tế',
                            'incoterm-location' => 'Địa điểm Incoterm',
                        ],
                    ],

                    'secured' => [
                        'title'  => 'Bảo mật',
                        'fields' => [
                            'payment-method' => 'Phương thức thanh toán',
                            'auto-post'      => 'Tự động ghi sổ',
                            'checked'        => 'Đã kiểm tra',
                        ],
                    ],

                    'additional-information' => [
                        'title'  => 'Thông tin bổ sung',
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

    'infolist' => [
        'section' => [
            'general' => [
                'title'   => 'Thông tin chung',
                'entries' => [
                    'vendor-invoice'    => 'Hóa đơn nhà cung cấp',
                    'vendor'            => 'Nhà cung cấp',
                    'bill-date'         => 'Ngày hóa đơn',
                    'bill-reference'    => 'Mã tham chiếu hóa đơn',
                    'accounting-date'   => 'Ngày kế toán',
                    'payment-reference' => 'Mã tham chiếu thanh toán',
                    'recipient-bank'    => 'Ngân hàng nhận',
                    'due-date'          => 'Ngày đến hạn',
                    'payment-term'      => 'Điều khoản thanh toán',
                ],
            ],
        ],

        'tabs' => [
            'invoice-lines' => [
                'title' => 'Chi tiết hóa đơn',

                'repeater' => [
                    'products' => [
                        'title'       => 'Sản phẩm',
                        'add-product' => 'Thêm sản phẩm',

                        'entries' => [
                            'product'             => 'Sản phẩm',
                            'quantity'            => 'Số lượng',
                            'unit'                => 'Đơn vị',
                            'taxes'               => 'Thuế',
                            'discount-percentage' => 'Phần trăm chiết khấu',
                            'unit-price'          => 'Đơn giá',
                            'sub-total'           => 'Thành tiền',
                        ],
                    ],
                ],
            ],

            'other-information' => [
                'title'    => 'Thông tin khác',
                'fieldset' => [
                    'accounting' => [
                        'title' => 'Kế toán',

                        'entries' => [
                            'incoterm'          => 'Điều kiện thương mại quốc tế',
                            'incoterm-location' => 'Địa điểm Incoterm',
                        ],
                    ],

                    'secured' => [
                        'title'   => 'Bảo mật',
                        'entries' => [
                            'payment-method' => 'Phương thức thanh toán',
                            'auto-post'      => 'Tự động ghi sổ',
                            'checked'        => 'Đã kiểm tra',
                        ],
                    ],

                    'additional-information' => [
                        'title'   => 'Thông tin bổ sung',
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