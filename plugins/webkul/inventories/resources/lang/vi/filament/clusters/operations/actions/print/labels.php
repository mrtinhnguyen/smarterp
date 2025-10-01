<?php

return [
    'label' => 'Nhãn',

    'form' => [
        'fields' => [
            'type'          => 'Loại nhãn',
            'quantity'      => 'Số lượng',
            'format'        => 'Định dạng',
            'layout'        => 'Bố cục nhãn',
            'quantity-type' => 'Số lượng in',
            'quantity'      => 'Số lượng',

            'quantity-type-options' => [
                'operation' => 'Số lượng thao tác',
                'custom'    => 'Số lượng tùy chỉnh',
                'per-slot'  => 'Một cho mỗi lô/số seri',
                'per-unit'  => 'Một cho mỗi đơn vị',
            ],

            'type-options' => [
                'product' => 'Nhãn sản phẩm',
                'lot'     => 'Nhãn lô/số seri',
            ],

            'format-options' => [
                'dymo'       => 'Dymo',
                '2x7_price'  => '2x7 có giá',
                '4x7_price'  => '4x7 có giá',
                '4x12'       => '4x12',
                '4x12_price' => '4x12 có giá',
            ],
        ],
    ],
];