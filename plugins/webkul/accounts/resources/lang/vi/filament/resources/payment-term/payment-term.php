<?php

return [
    'form' => [
        'sections' => [
            'fields' => [
                'payment-term'         => 'Điều khoản thanh toán',
                'early-discount'       => 'Giảm giá sớm',
                'discount-days-prefix' => 'nếu thanh toán trong vòng',
                'discount-days-suffix' => 'ngày',
                'reduced-tax'          => 'Thuế giảm',
                'note'                 => 'Ghi chú',
                'status'               => 'Trạng thái',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'payment-term' => 'Điều khoản thanh toán',
            'company'      => 'Công ty',
            'created-at'   => 'Ngày tạo',
            'updated-at'   => 'Ngày cập nhật',
        ],

        'groups' => [
            'company-name'        => 'Tên công ty',
            'discount-days'       => 'Ngày giảm giá',
            'early-pay-discount'  => 'Giảm giá thanh toán sớm',
            'payment-term'        => 'Điều khoản thanh toán',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo điều khoản thanh toán',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Điều khoản thanh toán đã được xóa',
                    'body'  => 'Điều khoản thanh toán đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các điều khoản thanh toán đã được xóa',
                    'body'  => 'Các điều khoản thanh toán đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'payment-term'         => 'Điều khoản thanh toán',
                    'early-discount'       => 'Giảm giá sớm',
                    'discount-days-prefix' => 'nếu thanh toán trong vòng',
                    'discount-days-suffix' => 'ngày',
                    'reduced-tax'          => 'Thuế giảm',
                    'note'                 => 'Ghi chú',
                    'status'               => 'Trạng thái',
                ],
            ],
        ],
    ],
];
