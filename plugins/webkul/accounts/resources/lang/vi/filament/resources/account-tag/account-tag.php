<?php

return [
    'form' => [
        'fields' => [
            'color'         => 'Màu sắc',
            'country'       => 'Quốc gia',
            'applicability' => 'Khả năng áp dụng',
            'name'          => 'Tên',
            'status'        => 'Trạng thái',
            'tax-negate'    => 'Phủ định thuế',
        ],
    ],

    'table' => [
        'columns' => [
            'color'         => 'Màu sắc',
            'country'       => 'Quốc gia',
            'created-by'    => 'Tạo bởi',
            'applicability' => 'Khả năng áp dụng',
            'name'          => 'Tên',
            'status'        => 'Trạng thái',
            'tax-negate'    => 'Phủ định thuế',
            'created-at'    => 'Ngày tạo',
            'updated-at'    => 'Ngày cập nhật',
            'deleted-at'    => 'Ngày xóa',
        ],

        'filters' => [
            'bank'           => 'Ngân hàng',
            'cash'           => 'Tiền mặt',
            'credit-card'    => 'Thẻ tín dụng',
            'general'        => 'Chung',
            'purchase'       => 'Mua hàng',
            'sale'           => 'Bán hàng',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo thẻ tài khoản',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Thẻ tài khoản đã được xóa',
                    'body'  => 'Thẻ tài khoản đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các thẻ tài khoản đã được xóa',
                    'body'  => 'Các thẻ tài khoản đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'color'         => 'Màu sắc',
                    'country'       => 'Quốc gia',
                    'applicability' => 'Khả năng áp dụng',
                    'name'          => 'Tên',
                    'status'        => 'Trạng thái',
                    'tax-negate'    => 'Phủ định thuế',
                ],
            ],
        ],
    ],
];
