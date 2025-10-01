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
                            'discount-percentage' => 'Giảm giá',
                            'unit-price'          => 'Đơn giá',
                            'sub-total'           => 'Thành tiền',
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
            'number'           => 'Số hóa đơn',
            'customer'         => 'Khách hàng',
            'invoice-date'     => 'Ngày hóa đơn',
            'due-date'         => 'Ngày đến hạn',
            'amount-untaxed'   => 'Tổng chưa thuế',
            'amount-tax'       => 'Tổng thuế',
            'amount-total'     => 'Tổng cộng',
            'amount-residual'  => 'Số dư còn lại',
            'state'            => 'Trạng thái',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo hóa đơn',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Hóa đơn đã được xóa',
                    'body'  => 'Hóa đơn đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các hóa đơn đã được xóa',
                    'body'  => 'Các hóa đơn đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'number'           => 'Số hóa đơn',
                    'customer'         => 'Khách hàng',
                    'invoice-date'     => 'Ngày hóa đơn',
                    'due-date'         => 'Ngày đến hạn',
                    'payment-term'     => 'Điều khoản thanh toán',
                    'reference'        => 'Tham chiếu',
                    'incoterm'         => 'Điều kiện giao hàng',
                    'incoterm-place'   => 'Nơi giao hàng',
                    'note'             => 'Ghi chú',
                ],
            ],

            'amounts' => [
                'title' => 'Số tiền',
                'entries' => [
                    'amount-untaxed' => 'Tổng chưa thuế',
                    'amount-tax'     => 'Tổng thuế',
                    'amount-total'   => 'Tổng cộng',
                    'amount-residual' => 'Số dư còn lại',
                ],
            ],
        ],
    ],
];
