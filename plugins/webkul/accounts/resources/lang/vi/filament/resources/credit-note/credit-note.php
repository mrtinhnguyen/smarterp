<?php

return [
    'title' => 'Phiếu ghi có',

    'navigation' => [
        'title' => 'Phiếu ghi có',
        'group' => 'Hóa đơn',
    ],

    'global-search' => [
        'number'           => 'Số phiếu',
        'customer'         => 'Khách hàng',
        'invoice-date'     => 'Ngày phiếu',
        'invoice-due-date' => 'Ngày đến hạn',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => 'Thông tin chung',
                'fields' => [
                    'customer-invoice' => 'Phiếu ghi có khách hàng',
                    'customer'         => 'Khách hàng',
                    'invoice-date'     => 'Ngày phiếu',
                    'due-date'         => 'Ngày đến hạn',
                    'payment-term'     => 'Điều khoản thanh toán',
                ],
            ],
        ],

        'tabs' => [
            'invoice-lines' => [
                'title' => 'Chi tiết phiếu',

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
            'number'           => 'Số phiếu',
            'customer'         => 'Khách hàng',
            'invoice-date'     => 'Ngày phiếu',
            'due-date'         => 'Ngày đến hạn',
            'amount-untaxed'   => 'Tổng chưa thuế',
            'amount-tax'       => 'Tổng thuế',
            'amount-total'     => 'Tổng cộng',
            'amount-residual'  => 'Số dư còn lại',
            'state'            => 'Trạng thái',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo phiếu ghi có',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Phiếu ghi có đã được xóa',
                    'body'  => 'Phiếu ghi có đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các phiếu ghi có đã được xóa',
                    'body'  => 'Các phiếu ghi có đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'number'           => 'Số phiếu',
                    'customer'         => 'Khách hàng',
                    'invoice-date'     => 'Ngày phiếu',
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
