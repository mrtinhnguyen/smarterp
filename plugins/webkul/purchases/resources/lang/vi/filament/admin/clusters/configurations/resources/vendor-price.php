<?php

return [
    'navigation' => [
        'title' => 'Bảng giá nhà cung cấp',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Chung',

                'fields' => [
                    'vendor'                      => 'Nhà cung cấp',
                    'vendor-product-name'         => 'Tên sản phẩm nhà cung cấp',
                    'vendor-product-name-tooltip' => 'Tên sản phẩm của nhà cung cấp sẽ xuất hiện trên yêu cầu báo giá. Để trống để sử dụng tên sản phẩm nội bộ.',
                    'vendor-product-code'         => 'Mã sản phẩm nhà cung cấp',
                    'vendor-product-code-tooltip' => 'Mã sản phẩm của nhà cung cấp sẽ xuất hiện trên yêu cầu báo giá. Để trống để sử dụng mã nội bộ.',
                    'delay'                       => 'Thời gian dẫn đầu giao hàng (Ngày)',
                    'delay-tooltip'               => 'Thời gian dẫn đầu (tính bằng ngày) từ xác nhận đơn hàng mua đến khi nhận sản phẩm trong kho. Được sử dụng bởi bộ lập lịch để lập kế hoạch đơn hàng mua tự động.',
                ],
            ],

            'prices' => [
                'title'  => 'Giá',

                'fields' => [
                    'product'            => 'Sản phẩm',
                    'quantity'           => 'Số lượng',
                    'quantity-tooltip'   => 'Số lượng tối thiểu cần mua từ nhà cung cấp này để đủ điều kiện cho giá được chỉ định. Được biểu thị bằng đơn vị đo sản phẩm của nhà cung cấp hoặc, nếu không được đặt, đơn vị đo mặc định của sản phẩm.',
                    'unit-price'         => 'Đơn giá',
                    'unit-price-tooltip' => 'Giá mỗi đơn vị cho sản phẩm này từ nhà cung cấp, được biểu thị bằng đơn vị đo sản phẩm của nhà cung cấp hoặc, nếu không được đặt, đơn vị đo mặc định của sản phẩm.',
                    'currency'           => 'Tiền tệ',
                    'valid-from'         => 'Có hiệu lực từ',
                    'valid-to'           => 'Có hiệu lực đến',
                    'discount'           => 'Chiết khấu (%)',
                    'company'            => 'Công ty',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'vendor'              => 'Nhà cung cấp',
            'vendor-product-name' => 'Tên sản phẩm nhà cung cấp',
            'vendor-product-code' => 'Mã sản phẩm nhà cung cấp',
            'delay'               => 'Thời gian dẫn đầu giao hàng (Ngày)',
            'product'             => 'Sản phẩm',
            'quantity'            => 'Số lượng',
            'unit-price'          => 'Đơn giá',
            'currency'            => 'Tiền tệ',
            'valid-from'          => 'Có hiệu lực từ',
            'valid-to'            => 'Có hiệu lực đến',
            'discount'            => 'Chiết khấu (%)',
            'company'             => 'Công ty',
            'created-at'          => 'Ngày tạo',
            'updated-at'          => 'Ngày cập nhật',
        ],

        'filters' => [
            'vendor'        => 'Lọc theo nhà cung cấp',
            'product'       => 'Lọc theo sản phẩm',
            'currency'      => 'Lọc theo tiền tệ',
            'company'       => 'Lọc theo công ty',
            'price-from'    => 'Giá tối thiểu',
            'price-to'      => 'Giá tối đa',
            'min-qty-from'  => 'Số lượng tối thiểu từ',
            'min-qty-to'    => 'Số lượng tối thiểu đến',
            'starts-from'   => 'Có hiệu lực từ ngày',
            'ends-before'   => 'Có hiệu lực đến ngày',
            'created-from'  => 'Tạo từ',
            'created-until' => 'Tạo đến',
        ],

        'groups' => [
            'vendor'     => 'Nhà cung cấp',
            'product'    => 'Sản phẩm',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Giá nhà cung cấp đã xóa',
                        'body'  => 'Giá nhà cung cấp đã được xóa thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa giá nhà cung cấp',
                        'body'  => 'Giá nhà cung cấp không thể bị xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Các giá nhà cung cấp đã xóa',
                        'body'  => 'Các giá nhà cung cấp đã được xóa thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa các giá nhà cung cấp',
                        'body'  => 'Các giá nhà cung cấp không thể bị xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'  => 'Chung',

                'entries' => [
                    'vendor'                      => 'Nhà cung cấp',
                    'vendor-product-name'         => 'Tên sản phẩm nhà cung cấp',
                    'vendor-product-name-tooltip' => 'Tên sản phẩm của nhà cung cấp sẽ xuất hiện trên yêu cầu báo giá. Để trống để sử dụng tên sản phẩm nội bộ.',
                    'vendor-product-code'         => 'Mã sản phẩm nhà cung cấp',
                    'vendor-product-code-tooltip' => 'Mã sản phẩm của nhà cung cấp sẽ xuất hiện trên yêu cầu báo giá. Để trống để sử dụng mã nội bộ.',
                    'delay'                       => 'Thời gian dẫn đầu giao hàng (Ngày)',
                    'delay-tooltip'               => 'Thời gian dẫn đầu (tính bằng ngày) từ xác nhận đơn hàng mua đến khi nhận sản phẩm trong kho. Được sử dụng bởi bộ lập lịch để lập kế hoạch đơn hàng mua tự động.',
                ],
            ],

            'record-information' => [
                'title'  => 'Thông tin bản ghi',

                'entries' => [
                    'created-by'   => 'Tạo bởi',
                    'created-at'   => 'Ngày tạo',
                    'last-updated' => 'Cập nhật lần cuối',
                ],
            ],

            'prices' => [
                'title'  => 'Giá',

                'entries' => [
                    'product'            => 'Sản phẩm',
                    'quantity'           => 'Số lượng',
                    'quantity-tooltip'   => 'Số lượng tối thiểu cần mua từ nhà cung cấp này để đủ điều kiện cho giá được chỉ định. Được biểu thị bằng đơn vị đo sản phẩm của nhà cung cấp hoặc, nếu không được đặt, đơn vị đo mặc định của sản phẩm.',
                    'unit-price'         => 'Đơn giá',
                    'unit-price-tooltip' => 'Giá mỗi đơn vị cho sản phẩm này từ nhà cung cấp, được biểu thị bằng đơn vị đo sản phẩm của nhà cung cấp hoặc, nếu không được đặt, đơn vị đo mặc định của sản phẩm.',
                    'currency'           => 'Tiền tệ',
                    'valid-from'         => 'Có hiệu lực từ',
                    'valid-to'           => 'Có hiệu lực đến',
                    'discount'           => 'Chiết khấu (%)',
                    'company'            => 'Công ty',
                ],
            ],
        ],
    ],
];