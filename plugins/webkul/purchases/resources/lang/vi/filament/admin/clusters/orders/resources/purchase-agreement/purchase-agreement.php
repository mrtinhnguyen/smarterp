<?php

return [
    'navigation' => [
        'title' => 'Thỏa thuận mua sắm',
        'group' => 'Mua sắm',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',

                'fields' => [
                    'vendor'                => 'Nhà cung cấp',
                    'valid-from'            => 'Có hiệu lực từ',
                    'valid-to'              => 'Có hiệu lực đến',
                    'buyer'                 => 'Người mua',
                    'reference'             => 'Tham chiếu',
                    'reference-placeholder' => 'ví dụ: PO/123',
                    'agreement-type'        => 'Loại thỏa thuận',
                    'company'               => 'Công ty',
                    'currency'              => 'Tiền tệ',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'Sản phẩm',

                'columns' => [
                    'product'    => 'Sản phẩm',
                    'quantity'   => 'Số lượng',
                    'ordered'    => 'Đã đặt',
                    'uom'        => 'Đơn vị đo',
                    'unit-price' => 'Giá đơn vị',
                ],

                'fields' => [
                    'product'    => 'Sản phẩm',
                    'quantity'   => 'Số lượng',
                    'ordered'    => 'Đã đặt',
                    'uom'        => 'Đơn vị đo',
                    'unit-price' => 'Giá đơn vị',
                ],
            ],

            'additional' => [
                'title' => 'Thông tin bổ sung',
            ],

            'terms' => [
                'title' => 'Điều khoản và điều kiện',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'agreement'      => 'Thỏa thuận',
            'vendor'         => 'Nhà cung cấp',
            'agreement-type' => 'Loại thỏa thuận',
            'buyer'          => 'Người mua',
            'company'        => 'Công ty',
            'valid-from'     => 'Có hiệu lực từ',
            'valid-to'       => 'Có hiệu lực đến',
            'reference'      => 'Tham chiếu',
            'status'         => 'Trạng thái',
        ],

        'groups' => [
            'agreement-type' => 'Loại thỏa thuận',
            'vendor'         => 'Nhà cung cấp',
            'state'          => 'Trạng thái',
            'created-at'     => 'Được tạo lúc',
            'updated-at'     => 'Được cập nhật lúc',
        ],

        'filters' => [
            'agreement'      => 'Thỏa thuận',
            'vendor'         => 'Nhà cung cấp',
            'agreement-type' => 'Loại thỏa thuận',
            'buyer'          => 'Người mua',
            'company'        => 'Công ty',
            'valid-from'     => 'Có hiệu lực từ',
            'valid-to'       => 'Có hiệu lực đến',
            'reference'      => 'Tham chiếu',
            'status'         => 'Trạng thái',
            'created-at'     => 'Được tạo lúc',
            'updated-at'     => 'Được cập nhật lúc',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Thỏa thuận mua sắm đã được xóa',
                    'body'  => 'Thỏa thuận mua sắm đã được xóa thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Thỏa thuận mua sắm đã được khôi phục',
                    'body'  => 'Thỏa thuận mua sắm đã được khôi phục thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Thỏa thuận mua sắm đã được xóa vĩnh viễn',
                        'body'  => 'Thỏa thuận mua sắm đã được xóa vĩnh viễn thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa thỏa thuận mua sắm',
                        'body'  => 'Thỏa thuận mua sắm không thể được xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Các thỏa thuận mua sắm đã được xóa',
                    'body'  => 'Các thỏa thuận mua sắm đã được xóa thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Các thỏa thuận mua sắm đã được khôi phục',
                    'body'  => 'Các thỏa thuận mua sắm đã được khôi phục thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Các thỏa thuận mua sắm đã được xóa vĩnh viễn',
                        'body'  => 'Các thỏa thuận mua sắm đã được xóa vĩnh viễn thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa các thỏa thuận mua sắm',
                        'body'  => 'Các thỏa thuận mua sắm không thể được xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',

                'entries' => [
                    'vendor'                => 'Nhà cung cấp',
                    'valid-from'            => 'Có hiệu lực từ',
                    'valid-to'              => 'Có hiệu lực đến',
                    'buyer'                 => 'Người mua',
                    'reference'             => 'Tham chiếu',
                    'reference-placeholder' => 'ví dụ: PO/123',
                    'agreement-type'        => 'Loại thỏa thuận',
                    'company'               => 'Công ty',
                    'currency'              => 'Tiền tệ',
                ],
            ],

            'metadata' => [
                'title' => 'Siêu dữ liệu',

                'entries' => [
                    'created-at' => 'Được tạo lúc',
                    'created-by' => 'Được tạo bởi',
                    'updated-at' => 'Được cập nhật lúc',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'Sản phẩm',

                'entries' => [
                    'product'    => 'Sản phẩm',
                    'quantity'   => 'Số lượng',
                    'ordered'    => 'Đã đặt',
                    'uom'        => 'Đơn vị đo',
                    'unit-price' => 'Giá đơn vị',
                ],
            ],

            'additional' => [
                'title' => 'Thông tin bổ sung',
            ],

            'terms' => [
                'title' => 'Điều khoản và điều kiện',
            ],
        ],
    ],
];
