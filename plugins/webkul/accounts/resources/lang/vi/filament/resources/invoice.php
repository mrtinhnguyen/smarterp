<?php

return [
    'title' => 'Hóa đơn',

    'navigation' => [
        'title' => 'Hóa đơn',
        'group' => 'Hóa đơn',
    ],

    'global-search' => [
        'number'           => 'Số hóa đơn',
        'customer'         => 'Khách hàng',
        'invoice-date'     => 'Ngày hóa đơn',
        'invoice-due-date' => 'Ngày đến hạn',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => 'Thông tin chung',
                'fields' => [
                    'customer-invoice' => 'Hóa đơn khách hàng',
                    'customer'         => 'Khách hàng',
                    'invoice-date'     => 'Ngày hóa đơn',
                    'due-date'         => 'Ngày đến hạn',
                    'payment-term'     => 'Điều khoản thanh toán',
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

                        'columns' => [
                            'product'             => 'Sản phẩm',
                            'quantity'            => 'Số lượng',
                            'unit'                => 'Đơn vị',
                            'taxes'               => 'Thuế',
                            'discount-percentage' => 'Chiết khấu',
                            'unit-price'          => 'Đơn giá',
                            'sub-total'           => 'Thành tiền',
                        ],

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
                    'invoice' => [
                        'title'  => 'Hóa đơn',
                        'fields' => [
                            'customer-reference' => 'Mã tham chiếu khách hàng',
                            'sales-person'       => 'Nhân viên bán hàng',
                            'payment-reference'  => 'Mã tham chiếu thanh toán',
                            'recipient-bank'     => 'Ngân hàng nhận',
                            'delivery-date'      => 'Ngày giao hàng',
                        ],
                    ],

                    'accounting' => [
                        'title' => 'Kế toán',

                        'fieldset' => [
                            'incoterm'          => 'Điều kiện thương mại quốc tế',
                            'incoterm-location' => 'Địa điểm Incoterm',
                            'payment-method'    => 'Phương thức thanh toán',
                            'auto-post'         => 'Tự động ghi sổ',
                            'checked'           => 'Đã kiểm tra',
                        ],
                    ],

                    'additional-information' => [
                        'title'  => 'Thông tin bổ sung',
                        'fields' => [
                            'company'  => 'Công ty',
                            'currency' => 'Tiền tệ',
                        ],
                    ],

                    'marketing' => [
                        'title'  => 'Marketing',
                        'fields' => [
                            'campaign' => 'Chiến dịch',
                            'medium'   => 'Phương tiện',
                            'source'   => 'Nguồn',
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
        'total'   => 'Tổng cộng',
        'columns' => [
            'number'           => 'Số hóa đơn',
            'state'            => 'Trạng thái',
            'customer'         => 'Khách hàng',
            'invoice-date'     => 'Ngày hóa đơn',
            'checked'          => 'Đã kiểm tra',
            'accounting-date'  => 'Ngày kế toán',
            'due-date'         => 'Ngày đến hạn',
            'source-document'  => 'Tài liệu nguồn',
            'reference'        => 'Mã tham chiếu',
            'sales-person'     => 'Nhân viên bán hàng',
            'tax-excluded'     => 'Chưa bao gồm thuế',
            'tax'              => 'Thuế',
            'total'            => 'Tổng cộng',
            'amount-due'       => 'Số tiền còn nợ',
            'invoice-currency' => 'Tiền tệ hóa đơn',
        ],

        'groups' => [
            'name'                         => 'Tên',
            'invoice-partner-display-name' => 'Tên hiển thị đối tác hóa đơn',
            'invoice-date'                 => 'Ngày hóa đơn',
            'checked'                      => 'Đã kiểm tra',
            'date'                         => 'Ngày',
            'invoice-due-date'             => 'Ngày đến hạn hóa đơn',
            'invoice-origin'               => 'Nguồn gốc hóa đơn',
            'sales-person'                 => 'Nhân viên bán hàng',
            'currency'                     => 'Tiền tệ',
            'created-at'                   => 'Ngày tạo',
            'updated-at'                   => 'Ngày cập nhật',
        ],

        'filters' => [
            'number'                       => 'Số hóa đơn',
            'invoice-partner-display-name' => 'Tên hiển thị đối tác hóa đơn',
            'invoice-date'                 => 'Ngày hóa đơn',
            'invoice-due-date'             => 'Ngày đến hạn hóa đơn',
            'invoice-origin'               => 'Nguồn gốc hóa đơn',
            'reference'                    => 'Mã tham chiếu',
            'created-at'                   => 'Ngày tạo',
            'updated-at'                   => 'Ngày cập nhật',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Hóa đơn đã được xóa',
                    'body'  => 'Hóa đơn đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Các hóa đơn đã được xóa',
                    'body'  => 'Các hóa đơn đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'section' => [
            'general' => [
                'title'   => 'Thông tin chung',
                'entries' => [
                    'customer-invoice' => 'Hóa đơn khách hàng',
                    'customer'         => 'Khách hàng',
                    'invoice-date'     => 'Ngày hóa đơn',
                    'due-date'         => 'Ngày đến hạn',
                    'payment-term'     => 'Điều khoản thanh toán',
                ],
            ],
        ],

        'tabs' => [
            'invoice-lines' => [
                'title' => 'Chi tiết hóa đơn',

                'repeater' => [
                    'products' => [
                        'entries' => [
                            'product'             => 'Sản phẩm',
                            'quantity'            => 'Số lượng',
                            'unit'                => 'Đơn vị đo lường',
                            'taxes'               => 'Thuế',
                            'discount-percentage' => 'Phần trăm chiết khấu',
                            'unit-price'          => 'Đơn giá',
                            'sub-total'           => 'Thành tiền',
                            'total'               => 'Tổng cộng',
                        ],
                    ],
                ],
            ],

            'other-information' => [
                'title'    => 'Thông tin khác',

                'fieldset' => [
                    'invoice' => [
                        'title'   => 'Hóa đơn',
                        'entries' => [
                            'customer-reference' => 'Mã tham chiếu khách hàng',
                            'sales-person'       => 'Nhân viên bán hàng',
                            'payment-reference'  => 'Mã tham chiếu thanh toán',
                            'recipient-bank'     => 'Ngân hàng nhận',
                            'delivery-date'      => 'Ngày giao hàng',
                        ],
                    ],

                    'accounting' => [
                        'title' => 'Kế toán',

                        'fieldset' => [
                            'incoterm'          => 'Điều kiện thương mại quốc tế',
                            'incoterm-location' => 'Địa điểm Incoterm',
                            'payment-method'    => 'Phương thức thanh toán',
                            'auto-post'         => 'Tự động ghi sổ',
                            'checked'           => 'Đã kiểm tra',
                        ],
                    ],

                    'additional-information' => [
                        'title'   => 'Thông tin bổ sung',

                        'entries' => [
                            'company'  => 'Công ty',
                            'currency' => 'Tiền tệ',
                        ],
                    ],

                    'marketing' => [
                        'title'   => 'Marketing',
                        'entries' => [
                            'campaign' => 'Chiến dịch',
                            'medium'   => 'Phương tiện',
                            'source'   => 'Nguồn',
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