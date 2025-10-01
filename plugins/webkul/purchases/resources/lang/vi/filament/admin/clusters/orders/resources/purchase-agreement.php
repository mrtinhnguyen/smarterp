<?php

return [
    'navigation' => [
        'title' => 'Thỏa thuận mua sắm',
        'group' => 'Mua sắm',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Chung',

                'fields' => [
                    'vendor'                => 'Nhà cung cấp',
                    'valid-from'            => 'Có hiệu lực từ',
                    'valid-to'              => 'Có hiệu lực đến',
                    'buyer'                 => 'Người mua',
                    'reference'             => 'Tham chiếu',
                    'reference-placeholder' => 'vd. PO/123',
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
                    'uom'        => 'Đơn vị đo lường',
                    'unit-price' => 'Đơn giá',
                ],

                'fields' => [
                    'product'    => 'Sản phẩm',
                    'quantity'   => 'Số lượng',
                    'ordered'    => 'Đã đặt',
                    'uom'        => 'Đơn vị đo lường',
                    'unit-price' => 'Đơn giá',
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
            'created-at'     => 'Ngày tạo',
            'updated-at'     => 'Ngày cập nhật',
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
            'created-at'     => 'Ngày tạo',
            'updated-at'     => 'Ngày cập nhật',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Thỏa thuận mua sắm đã xóa',
                    'body'  => 'Thỏa thuận mua sắm đã được xóa thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Thỏa thuận mua sắm đã khôi phục',
                    'body'  => 'Thỏa thuận mua sắm đã được khôi phục thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Thỏa thuận mua sắm đã xóa vĩnh viễn',
                        'body'  => 'Thỏa thuận mua sắm đã được xóa vĩnh viễn thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa thỏa thuận mua sắm',
                        'body'  => 'Thỏa thuận mua sắm không thể bị xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Các thỏa thuận mua sắm đã xóa',
                    'body'  => 'Các thỏa thuận mua sắm đã được xóa thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Các thỏa thuận mua sắm đã khôi phục',
                    'body'  => 'Các thỏa thuận mua sắm đã được khôi phục thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Các thỏa thuận mua sắm đã xóa vĩnh viễn',
                        'body'  => 'Các thỏa thuận mua sắm đã được xóa vĩnh viễn thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa các thỏa thuận mua sắm',
                        'body'  => 'Các thỏa thuận mua sắm không thể bị xóa vì đang được sử dụng.',
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
                    'vendor'                => 'Nhà cung cấp',
                    'valid-from'            => 'Có hiệu lực từ',
                    'valid-to'              => 'Có hiệu lực đến',
                    'buyer'                 => 'Người mua',
                    'reference'             => 'Tham chiếu',
                    'reference-placeholder' => 'vd. PO/123',
                    'agreement-type'        => 'Loại thỏa thuận',
                    'company'               => 'Công ty',
                    'currency'              => 'Tiền tệ',
                ],
            ],

            'metadata' => [
                'title' => 'Siêu dữ liệu',

                'entries' => [
                    'created-at' => 'Ngày tạo',
                    'created-by' => 'Tạo bởi',
                    'updated-at' => 'Ngày cập nhật',
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
                    'uom'        => 'Đơn vị đo lường',
                    'unit-price' => 'Đơn giá',
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