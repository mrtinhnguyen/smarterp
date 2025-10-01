<?php

return [
    'label' => 'Hủy',

    'action' => [
        'notification' => [
            'warning' => [
                'receipts' => [
                    'title' => 'Không thể hủy đơn hàng',
                    'body'  => 'Đơn hàng không thể được hủy vì đã có biên lai nhận hàng được hoàn thành.',
                ],

                'bills' => [
                    'title' => 'Không thể hủy đơn hàng',
                    'body'  => 'Đơn hàng không thể được hủy. Bạn phải hủy các hóa đơn nhà cung cấp liên quan trước.',
                ],
            ],

            'success' => [
                'title' => 'Đơn hàng đã được hủy',
                'body'  => 'Đơn hàng đã được hủy thành công.',
            ],
        ],
    ],
];

