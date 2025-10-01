<?php

return [
    'form' => [
        'sections' => [
            'fields' => [
                'payment-term'         => 'Điều khoản thanh toán',
                'early-discount'       => 'Chiết khấu sớm',
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
            'discount-days'       => 'Số ngày chiết khấu',
            'early-pay-discount'  => 'Chiết khấu thanh toán sớm',
            'payment-term'        => 'Điều khoản thanh toán',
            'display-on-invoice'  => 'Hiển thị trên hóa đơn',
            'early-discount'      => 'Chiết khấu sớm',
            'discount-percentage' => 'Tỷ lệ chiết khấu',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Điều khoản thanh toán đã khôi phục',
                    'body'  => 'Điều khoản thanh toán đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Điều khoản thanh toán đã xóa',
                    'body'  => 'Điều khoản thanh toán đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Điều khoản thanh toán đã xóa vĩnh viễn',
                    'body'  => 'Điều khoản thanh toán đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Các điều khoản thanh toán đã khôi phục',
                    'body'  => 'Các điều khoản thanh toán đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các điều khoản thanh toán đã xóa',
                    'body'  => 'Các điều khoản thanh toán đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Các điều khoản thanh toán đã xóa vĩnh viễn',
                    'body'  => 'Các điều khoản thanh toán đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'payment-term'         => 'Điều khoản thanh toán',
                'early-discount'       => 'Chiết khấu sớm',
                'discount-percentage'  => 'Tỷ lệ chiết khấu',
                'discount-days-prefix' => 'nếu thanh toán trong vòng',
                'discount-days-suffix' => 'ngày',
                'reduced-tax'          => 'Thuế giảm',
                'note'                 => 'Ghi chú',
                'status'               => 'Trạng thái',
            ],
        ],
    ],
];