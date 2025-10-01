<?php

return [
    'form' => [
        'value'                  => 'Giá trị',
        'due'                    => 'Đến hạn',
        'delay-due'              => 'Trễ hạn',
        'delay-type'             => 'Loại trễ',
        'days-on-the-next-month' => 'Số ngày trong tháng tiếp theo',
        'days'                   => 'Số ngày',
        'payment-term'           => 'Điều khoản thanh toán',
    ],

    'table' => [
        'columns' => [
            'due'          => 'Đến hạn',
            'value'        => 'Giá trị',
            'value-amount' => 'Số tiền giá trị',
            'after'        => 'Sau',
            'delay-type'   => 'Loại trễ',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Điều khoản thanh toán đã được cập nhật',
                    'body'  => 'Điều khoản thanh toán đã được cập nhật thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Điều khoản thanh toán đã được xóa',
                    'body'  => 'Điều khoản thanh toán đã được xóa thành công.',
                ],
            ],
        ],

        'header-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Điều khoản thanh toán đã được tạo',
                    'body'  => 'Điều khoản thanh toán đã được tạo thành công.',
                ],
            ],
        ],
    ],
];