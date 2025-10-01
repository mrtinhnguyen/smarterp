<?php

return [
    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Chung',

                'fields' => [
                    'vendor'                   => 'Nhà cung cấp',
                    'vendor-reference'         => 'Tham chiếu nhà cung cấp',
                    'vendor-reference-tooltip' => 'Số tham chiếu của đơn hàng bán hoặc đấu thầu do nhà cung cấp cung cấp. Được sử dụng để khớp khi nhận sản phẩm, vì tham chiếu này thường được bao gồm trong đơn giao hàng của nhà cung cấp.',
                    'agreement'                => 'Thỏa thuận',
                    'currency'                 => 'Tiền tệ',
                    'confirmation-date'        => 'Ngày xác nhận',
                    'order-deadline'           => 'Hạn đặt hàng',
                    'expected-arrival'         => 'Dự kiến đến',
                    'confirmed-by-vendor'      => 'Đã xác nhận bởi nhà cung cấp',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'Sản phẩm',

                'repeater' => [
                    'products' => [
                        'title'            => 'Sản phẩm',
                        'add-product-line' => 'Thêm sản phẩm',

                        'fields' => [
                            'product'             => 'Sản phẩm',
                            'expected-arrival'    => 'Dự kiến đến',
                            'quantity'            => 'Số lượng',
                            'received'            => 'Đã nhận',
                            'billed'              => 'Đã xuất hóa đơn',
                            'unit'                => 'Đơn vị',
                            'packaging-qty'       => 'Số lượng đóng gói',
                            'packaging'           => 'Đóng gói',
                            'taxes'               => 'Thuế',
                            'discount-percentage' => 'Chiết khấu (%)',
                            'unit-price'          => 'Đơn giá',
                            'amount'              => 'Số tiền',
                        ],

                        'columns' => [
                            'product'             => 'Sản phẩm',
                            'expected-arrival'    => 'Dự kiến đến',
                            'quantity'            => 'Số lượng',
                            'received'            => 'Đã nhận',
                            'billed'              => 'Đã xuất hóa đơn',
                            'unit'                => 'Đơn vị',
                            'packaging-qty'       => 'Số lượng đóng gói',
                            'packaging'           => 'Đóng gói',
                            'taxes'               => 'Thuế',
                            'discount-percentage' => 'Chiết khấu (%)',
                            'unit-price'          => 'Đơn giá',
                            'amount'              => 'Số tiền',
                        ],
                    ],

                    'section' => [
                        'title' => 'Thêm phần',

                        'fields' => [
                        ],
                    ],

                    'note' => [
                        'title' => 'Thêm ghi chú',

                        'fields' => [
                        ],
                    ],
                ],
            ],

            'additional' => [
                'title' => 'Thông tin bổ sung',

                'fields' => [
                    'buyer'             => 'Người mua',
                    'company'           => 'Công ty',
                    'source-document'   => 'Tài liệu nguồn',
                    'incoterm'          => 'Điều kiện giao hàng',
                    'incoterm-tooltip'  => 'Điều kiện thương mại quốc tế (Incoterms) là một bộ các điều khoản thương mại tiêu chuẩn được sử dụng trong các giao dịch toàn cầu để xác định trách nhiệm giữa người mua và người bán.',
                    'incoterm-location' => 'Địa điểm điều kiện giao hàng',
                    'payment-term'      => 'Điều khoản thanh toán',
                    'fiscal-position'   => 'Vị thế tài chính',
                ],
            ],

            'terms' => [
                'title' => 'Điều khoản và điều kiện',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'priority'         => 'Ưu tiên',
            'vendor-reference' => 'Tham chiếu nhà cung cấp',
            'reference'        => 'Tham chiếu',
            'vendor'           => 'Nhà cung cấp',
            'buyer'            => 'Người mua',
            'company'          => 'Công ty',
            'order-deadline'   => 'Hạn đặt hàng',
            'source-document'  => 'Tài liệu nguồn',
            'untaxed-amount'   => 'Số tiền chưa thuế',
            'total-amount'     => 'Tổng số tiền',
            'status'           => 'Trạng thái',
            'billing-status'   => 'Trạng thái xuất hóa đơn',
            'currency'         => 'Tiền tệ',
            'billing-status'   => 'Trạng thái xuất hóa đơn',
        ],

        'groups' => [
            'vendor'     => 'Nhà cung cấp',
            'buyer'      => 'Người mua',
            'state'      => 'Trạng thái',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'filters' => [
            'status'           => 'Trạng thái',
            'vendor-reference' => 'Tham chiếu nhà cung cấp',
            'reference'        => 'Tham chiếu',
            'untaxed-amount'   => 'Số tiền chưa thuế',
            'total-amount'     => 'Tổng số tiền',
            'order-deadline'   => 'Hạn đặt hàng',
            'vendor'           => 'Nhà cung cấp',
            'buyer'            => 'Người mua',
            'company'          => 'Công ty',
            'payment-term'     => 'Điều khoản thanh toán',
            'incoterm'         => 'Điều kiện giao hàng',
            'status'           => 'Trạng thái',
            'created-at'       => 'Ngày tạo',
            'updated-at'       => 'Ngày cập nhật',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Đơn hàng đã xóa',
                        'body'  => 'Đơn hàng đã được xóa thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa đơn hàng',
                        'body'  => 'Đơn hàng không thể bị xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Các đơn hàng đã xóa',
                        'body'  => 'Các đơn hàng đã được xóa thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa các đơn hàng',
                        'body'  => 'Các đơn hàng không thể bị xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Chung',

                'entries' => [
                    'vendor'                   => 'Nhà cung cấp',
                    'vendor-reference'         => 'Tham chiếu nhà cung cấp',
                    'vendor-reference-tooltip' => 'Số tham chiếu của đơn hàng bán hoặc đấu thầu do nhà cung cấp cung cấp. Được sử dụng để khớp khi nhận sản phẩm, vì tham chiếu này thường được bao gồm trong đơn giao hàng của nhà cung cấp.',
                    'agreement'                => 'Thỏa thuận',
                    'currency'                 => 'Tiền tệ',
                    'confirmation-date'        => 'Ngày xác nhận',
                    'order-deadline'           => 'Hạn đặt hàng',
                    'expected-arrival'         => 'Dự kiến đến',
                    'confirmed-by-vendor'      => 'Đã xác nhận bởi nhà cung cấp',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'Sản phẩm',

                'repeater' => [
                    'products' => [
                        'title'            => 'Sản phẩm',
                        'add-product-line' => 'Thêm sản phẩm',

                        'entries' => [
                            'product'             => 'Sản phẩm',
                            'expected-arrival'    => 'Dự kiến đến',
                            'quantity'            => 'Số lượng',
                            'received'            => 'Đã nhận',
                            'billed'              => 'Đã xuất hóa đơn',
                            'unit'                => 'Đơn vị',
                            'packaging-qty'       => 'Số lượng đóng gói',
                            'packaging'           => 'Đóng gói',
                            'taxes'               => 'Thuế',
                            'discount-percentage' => 'Chiết khấu (%)',
                            'unit-price'          => 'Đơn giá',
                            'amount'              => 'Số tiền',
                        ],
                    ],

                    'section' => [
                        'title' => 'Thêm phần',
                    ],

                    'note' => [
                        'title' => 'Thêm ghi chú',
                    ],
                ],
            ],

            'additional' => [
                'title' => 'Thông tin bổ sung',

                'entries' => [
                    'buyer'             => 'Người mua',
                    'company'           => 'Công ty',
                    'source-document'   => 'Tài liệu nguồn',
                    'incoterm'          => 'Điều kiện giao hàng',
                    'incoterm-tooltip'  => 'Điều kiện thương mại quốc tế (Incoterms) là một bộ các điều khoản thương mại tiêu chuẩn được sử dụng trong các giao dịch toàn cầu để xác định trách nhiệm giữa người mua và người bán.',
                    'incoterm-location' => 'Địa điểm điều kiện giao hàng',
                    'payment-term'      => 'Điều khoản thanh toán',
                    'fiscal-position'   => 'Vị thế tài chính',
                ],
            ],

            'terms' => [
                'title' => 'Điều khoản và điều kiện',
            ],
        ],
    ],
];