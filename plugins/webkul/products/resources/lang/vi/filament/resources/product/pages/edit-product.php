<?php

return [
    'notification' => [
        'title' => 'Sản phẩm đã được cập nhật',
        'body'  => 'Sản phẩm đã được cập nhật thành công.',
    ],

    'header-actions' => [
        'print' => [
            'label' => 'In nhãn',

            'form' => [
                'fields' => [
                    'quantity' => 'Số lượng nhãn',
                    'format'   => 'Định dạng',

                    'format-options' => [
                        'dymo'       => 'Dymo',
                        '2x7_price'  => '2x7 với giá',
                        '4x7_price'  => '4x7 với giá',
                        '4x12'       => '4x12',
                        '4x12_price' => '4x12 với giá',
                    ],
                ],
            ],
        ],

        'delete' => [
            'notification' => [
                'title' => 'Sản phẩm đã được xóa',
                'body'  => 'Sản phẩm đã được xóa thành công.',
            ],
        ],
    ],
];
