<?php

return [
    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',

                'fields' => [
                    'vendor'                   => 'Nhà cung cấp',
                    'vendor-reference'         => 'Tham chiếu nhà cung cấp',
                    'vendor-reference-tooltip' => 'Số tham chiếu của đơn hàng bán hoặc giá thầu do nhà cung cấp cung cấp. Nó được sử dụng để khớp khi nhận sản phẩm, vì tham chiếu này thường được bao gồm trong đơn giao hàng của nhà cung cấp.',
                    'agreement'                => 'Thỏa thuận',
                    'currency'                 => 'Tiền tệ',
                    'confirmation-date'        => 'Ngày xác nhận',
                    'order-deadline'           => 'Hạn đơn hàng',
                    'expected-arrival'         => 'Dự kiến đến',
                    'confirmed-by-vendor'      => 'Được xác nhận bởi nhà cung cấp',
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
                            'discount-percentage' => 'Giảm giá (%)',
                            'unit-price'          => 'Giá đơn vị',
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
                            'discount-percentage' => 'Giảm giá (%)',
                            'unit-price'          => 'Giá đơn vị',
                            'amount'              => 'Số tiền',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'vendor'                   => 'Nhà cung cấp',
            'vendor-reference'         => 'Tham chiếu nhà cung cấp',
            'agreement'                => 'Thỏa thuận',
            'currency'                 => 'Tiền tệ',
            'confirmation-date'        => 'Ngày xác nhận',
            'order-deadline'           => 'Hạn đơn hàng',
            'expected-arrival'         => 'Dự kiến đến',
            'confirmed-by-vendor'      => 'Được xác nhận bởi nhà cung cấp',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo đơn hàng',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Đơn hàng đã được xóa',
                    'body'  => 'Đơn hàng đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các đơn hàng đã được xóa',
                    'body'  => 'Các đơn hàng đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'vendor'                   => 'Nhà cung cấp',
                    'vendor-reference'         => 'Tham chiếu nhà cung cấp',
                    'agreement'                => 'Thỏa thuận',
                    'currency'                 => 'Tiền tệ',
                    'confirmation-date'        => 'Ngày xác nhận',
                    'order-deadline'           => 'Hạn đơn hàng',
                    'expected-arrival'         => 'Dự kiến đến',
                    'confirmed-by-vendor'      => 'Được xác nhận bởi nhà cung cấp',
                ],
            ],
        ],
    ],
];
