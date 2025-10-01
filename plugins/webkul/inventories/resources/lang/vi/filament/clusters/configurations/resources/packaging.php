<?php

return [
    'navigation' => [
        'title' => 'Đóng gói',
        'group' => 'Sản phẩm',
    ],

    'form' => [
        'package-type' => 'Loại Gói hàng',
        'routes'       => 'Tuyến đường',
    ],

    'table' => [
        'columns' => [
            'package-type' => 'Loại Gói hàng',
        ],

        'groups' => [
            'package-type' => 'Loại Gói hàng',
        ],

        'filters' => [
            'package-type' => 'Loại Gói hàng',
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'entries' => [
                    'package_type' => 'Loại Gói hàng',
                ],
            ],

            'routing' => [
                'title' => 'Thông tin Định tuyến',

                'entries' => [
                    'routes'     => 'Tuyến đường Kho hàng',
                    'route_name' => 'Tên Tuyến đường',
                ],
            ],
        ],
    ],
];