<?php

return [
    'title' => 'Số lượng',

    'tabs' => [
        'internal-locations' => 'Vị trí nội bộ',
        'transit-locations'  => 'Vị trí quá cảnh',
        'on-hand'            => 'Có sẵn',
        'to-count'           => 'Cần đếm',
        'to-apply'           => 'Cần áp dụng',
    ],

    'form' => [
        'fields' => [
            'product'          => 'Sản phẩm',
            'location'         => 'Vị trí',
            'package'          => 'Bao bì',
            'lot'              => 'Lô / Số seri',
            'on-hand-qty'      => 'Số lượng có sẵn',
            'storage-category' => 'Danh mục lưu trữ',
        ],
    ],

    'table' => [
        'columns' => [
            'product'           => 'Sản phẩm',
            'location'          => 'Vị trí',
            'lot'               => 'Lô / Số seri',
            'storage-category'  => 'Danh mục lưu trữ',
            'quantity'          => 'Số lượng',
            'package'           => 'Bao bì',
            'on-hand'           => 'Số lượng có sẵn',
            'reserved-quantity' => 'Số lượng đặt trước',

            'on-hand-before-state-updated' => [
                'notification' => [
                    'title' => 'Số lượng đã được cập nhật',
                    'body'  => 'Số lượng đã được cập nhật thành công.',
                ],
            ],
        ],

        'header-actions' => [
            'create' => [
                'label' => 'Thêm số lượng',

                'notification' => [
                    'title' => 'Số lượng đã được thêm',
                    'body'  => 'Số lượng đã được thêm thành công.',
                ],

                'before' => [
                    'notification' => [
                        'title' => 'Số lượng đã tồn tại',
                        'body'  => 'Đã có số lượng cho cùng cấu hình. Vui lòng cập nhật số lượng thay vì thêm mới.',
                    ],
                ],
            ],
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Số lượng đã được xóa',
                    'body'  => 'Số lượng đã được xóa thành công.',
                ],
            ],
        ],
    ],
];