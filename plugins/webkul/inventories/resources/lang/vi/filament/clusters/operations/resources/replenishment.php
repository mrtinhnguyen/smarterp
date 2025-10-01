<?php

return [
    'navigation' => [
        'title' => 'Bổ sung',
        'group' => 'Mua sắm',
    ],

    'form' => [
        'fields' => [
        ],
    ],

    'table' => [
        'columns' => [
            'product'           => 'Sản phẩm',
            'location'          => 'Vị trí',
            'route'             => 'Tuyến đường',
            'vendor'            => 'Nhà cung cấp',
            'trigger'           => 'Kích hoạt',
            'on-hand'           => 'Tồn kho',
            'min'               => 'Tối thiểu',
            'max'               => 'Tối đa',
            'multiple-quantity' => 'Số lượng bội số',
            'to-order'          => 'Cần đặt',
            'uom'               => 'Đơn vị',
            'company'           => 'Công ty',
        ],

        'groups' => [
            'location' => 'Vị trí',
            'product'  => 'Sản phẩm',
            'category' => 'Danh mục',
        ],

        'filters' => [
        ],

        'header-actions' => [
            'create' => [
                'label' => 'Thêm bổ sung',

                'notification' => [
                    'title' => 'Bổ sung đã được thêm',
                    'body'  => 'Bổ sung đã được thêm thành công.',
                ],

                'before' => [
                    'notification' => [
                        'title' => 'Bổ sung đã tồn tại',
                        'body'  => 'Bổ sung đã tồn tại cho cấu hình này. Vui lòng cập nhật bổ sung hiện có thay vì tạo mới.',
                    ],
                ],
            ],
        ],

        'actions' => [
        ],
    ],
];

