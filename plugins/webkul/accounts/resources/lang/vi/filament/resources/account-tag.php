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
            'account-holder' => 'Chủ tài khoản',
            'creator'        => 'Người tạo',
            'can-send-money' => 'Có thể gửi tiền',
        ],

        'groups' => [
            'country'       => 'Quốc gia',
            'created-by'    => 'Tạo bởi',
            'applicability' => 'Khả năng áp dụng',
            'name'          => 'Tên',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Thẻ tài khoản đã cập nhật',
                    'body'  => 'Thẻ tài khoản đã được cập nhật thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Thẻ tài khoản đã xóa',
                    'body'  => 'Thẻ tài khoản đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Các thẻ tài khoản đã xóa',
                    'body'  => 'Các thẻ tài khoản đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'color'         => 'Màu sắc',
            'country'       => 'Quốc gia',
            'applicability' => 'Khả năng áp dụng',
            'name'          => 'Tên',
            'status'        => 'Trạng thái',
            'tax-negate'    => 'Phủ định thuế',
        ],
    ],
];