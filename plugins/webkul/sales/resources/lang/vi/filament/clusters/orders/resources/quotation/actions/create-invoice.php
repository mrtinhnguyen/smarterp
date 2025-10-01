<?php

return [
    'title' => 'Tạo hóa đơn',

    'modal' => [
        'heading' => 'Tạo hóa đơn',
    ],

    'notification' => [
        'invoice-created' => [
            'title' => 'Hóa đơn đã tạo',
            'body'  => 'Hóa đơn đã được tạo thành công.',
        ],

        'no-invoiceable-lines' => [
            'title' => 'Không có dòng có thể lập hóa đơn',
            'body'  => 'Không có dòng nào có thể lập hóa đơn, vui lòng đảm bảo rằng số lượng đã được nhận.',
        ],
    ],

    'form' => [
        'fields' => [
            'create-invoice' => 'Tạo hóa đơn',
        ],
    ],
];