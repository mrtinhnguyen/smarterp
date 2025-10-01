<?php

return [
    'table' => [
        'columns' => [
            'reference'         => 'Mã tham chiếu',
            'total-amount'      => 'Tổng số tiền',
            'confirmation-date' => 'Ngày xác nhận',
            'status'            => 'Trạng thái',
        ],
    ],

    'infolist' => [
        'settings' => [
            'entries' => [
                'buyer' => 'Người mua',
            ],

            'actions' => [
                'accept' => [
                    'label' => 'Chấp nhận',

                    'notification' => [
                        'title' => 'Báo giá đã được chấp nhận',
                        'body'  => 'RFQ đã được xác nhận thành công.',
                    ],

                    'message' => [
                        'body' => 'RFQ đã được nhà cung cấp xác nhận.',
                    ],
                ],

                'decline' => [
                    'label' => 'Từ chối',

                    'notification' => [
                        'title' => 'Báo giá đã bị từ chối',
                        'body'  => 'RFQ đã được từ chối thành công.',
                    ],

                    'message' => [
                        'body' => 'RFQ đã bị nhà cung cấp từ chối.',
                    ],
                ],

                'print' => [
                    'label' => 'Tải xuống/In',
                ],
            ],
        ],

        'general' => [
            'entries' => [
                'purchase-order'        => 'Đơn đặt hàng #:id',
                'quotation'             => 'Yêu cầu báo giá #:id',
                'order-date'            => 'Ngày đặt hàng',
                'from'                  => 'Từ',
                'confirmation-date'     => 'Ngày xác nhận',
                'receipt-date'          => 'Ngày nhận hàng',
                'products'              => 'Sản phẩm',
                'untaxed-amount'        => 'Số tiền chưa thuế',
                'tax-amount'            => 'Số tiền thuế',
                'total'                 => 'Tổng cộng',
                'communication-history' => 'Lịch sử giao tiếp',
            ],
        ],
    ],
];
