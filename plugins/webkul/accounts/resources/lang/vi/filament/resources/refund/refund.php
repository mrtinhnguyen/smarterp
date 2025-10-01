<?php

return [
    'title' => 'Hoàn tiền',

    'navigation' => [
        'title' => 'Hoàn tiền',
        'group' => 'Hóa đơn',
    ],

    'global-search' => [
        'number'           => 'Số phiếu',
        'vendor'           => 'Nhà cung cấp',
        'bill-date'        => 'Ngày hóa đơn',
        'bill-due-date'    => 'Ngày đến hạn',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => 'Thông tin chung',
                'fields' => [
                    'vendor-credit-note' => 'Phiếu ghi có nhà cung cấp',
                    'vendor'             => 'Nhà cung cấp',
                    'bill-date'          => 'Ngày hóa đơn',
                    'bill-reference'     => 'Tham chiếu hóa đơn',
                    'accounting-date'    => 'Ngày kế toán',
                    'payment-reference'  => 'Tham chiếu thanh toán',
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
            'vendor'           => 'Nhà cung cấp',
            'bill-date'        => 'Ngày hóa đơn',
            'due-date'         => 'Ngày đến hạn',
            'amount-untaxed'   => 'Tổng chưa thuế',
            'amount-tax'       => 'Tổng thuế',
            'amount-total'     => 'Tổng cộng',
            'amount-residual'  => 'Số dư còn lại',
            'state'            => 'Trạng thái',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo hoàn tiền',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Hoàn tiền đã được xóa',
                    'body'  => 'Hoàn tiền đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các hoàn tiền đã được xóa',
                    'body'  => 'Các hoàn tiền đã được xóa thành công.',
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
                    'vendor'           => 'Nhà cung cấp',
                    'bill-date'        => 'Ngày hóa đơn',
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
