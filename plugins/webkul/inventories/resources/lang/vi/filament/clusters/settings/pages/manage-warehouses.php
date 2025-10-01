<?php

return [
    'title' => 'Quản lý kho hàng',

    'form' => [
        'enable-locations'                      => 'Vị trí',
        'enable-locations-helper-text'          => 'Theo dõi vị trí sản phẩm trong kho của bạn',
        'configure-locations'                   => 'Cấu hình vị trí',
        'enable-multi-steps-routes'             => 'Tuyến đường nhiều bước',
        'enable-multi-steps-routes-helper-text' => 'Sử dụng tuyến đường riêng để quản lý việc chuyển sản phẩm giữa các kho',
        'configure-routes'                      => 'Cấu hình tuyến đường kho',
    ],

    'before-save' => [
        'notification' => [
            'warning' => [
                'title' => 'Có nhiều kho hàng',
                'body'  => 'Bạn không thể tắt đa vị trí nếu có nhiều hơn một kho hàng.',
            ],
        ],
    ],
];

