<?php

return [
    'title' => 'Quản lý hóa đơn',

    'breadcrumb' => 'Quản lý hóa đơn',

    'navigation' => [
        'title' => 'Quản lý hóa đơn',
    ],

    'form' => [
        'invoice-policy' => [
            'label'      => 'Chính sách hóa đơn',
            'label-help' => 'Định nghĩa cách hóa đơn được tạo từ đơn hàng bán.',
            'options'    => [
                'order'    => 'Tạo hóa đơn dựa trên số lượng đã đặt',
                'delivery' => 'Tạo hóa đơn dựa trên số lượng đã giao',
            ],
        ],
    ],
];

