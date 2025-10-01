<?php

return [
    'navigation' => [
        'title' => 'Danh mục',
        'group' => 'Sản phẩm',
    ],

    'form' => [
        'sections' => [
            'inventory' => [
                'title' => 'Kho hàng',

                'fieldsets' => [
                    'logistics' => [
                        'title' => 'Hậu cần',

                        'fields' => [
                            'routes' => 'Tuyến đường',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'inventory' => [
                'title' => 'Kho hàng',

                'subsections' => [
                    'logistics' => [
                        'title' => 'Hậu cần',

                        'entries' => [
                            'routes'     => 'Tuyến đường Kho hàng',
                            'route_name' => 'Tên Tuyến đường',
                        ],
                    ],
                ],
            ],
        ],
    ],
];