<?php

return [
    'navigation' => [
        'title' => 'Sản phẩm',
        'group' => 'Kho hàng',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',

                'fields' => [
                    'name'             => 'Tên',
                    'name-placeholder' => 'ví dụ: Áo thun',
                    'description'      => 'Mô tả',
                    'tags'             => 'Thẻ',
                    'sales'            => 'Bán hàng',
                    'purchase'         => 'Mua sắm',
                ],
            ],

            'invoice-policy' => [
                'title'            => 'Chính sách hóa đơn',
                'ordered-policy'   => 'Bạn có thể xuất hóa đơn hàng hóa trước khi chúng được giao.',
                'delivered-policy' => 'Xuất hóa đơn sau khi giao hàng, dựa trên số lượng đã giao, không phải đã đặt.',
            ],

            'images' => [
                'title' => 'Hình ảnh',
            ],

            'settings' => [
                'title' => 'Cài đặt',

                'fields' => [
                    'type'      => 'Loại',
                    'reference' => 'Tham chiếu',
                    'barcode'   => 'Mã vạch',
                    'category'  => 'Danh mục',
                    'company'   => 'Công ty',
                ],
            ],

            'category-and-tags' => [
                'title' => 'Danh mục & Thẻ',

                'fields' => [
                    'category' => 'Danh mục',
                    'tags'     => 'Thẻ',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'        => 'Tên',
            'description' => 'Mô tả',
            'tags'        => 'Thẻ',
            'sales'       => 'Bán hàng',
            'purchase'    => 'Mua sắm',
            'type'        => 'Loại',
            'reference'   => 'Tham chiếu',
            'barcode'     => 'Mã vạch',
            'category'    => 'Danh mục',
            'company'     => 'Công ty',
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'name'        => 'Tên',
                    'description' => 'Mô tả',
                    'tags'        => 'Thẻ',
                    'sales'       => 'Bán hàng',
                    'purchase'    => 'Mua sắm',
                ],
            ],

            'settings' => [
                'title' => 'Cài đặt',
                'entries' => [
                    'type'      => 'Loại',
                    'reference' => 'Tham chiếu',
                    'barcode'   => 'Mã vạch',
                    'category'  => 'Danh mục',
                    'company'   => 'Công ty',
                ],
            ],

            'category-and-tags' => [
                'title' => 'Danh mục & Thẻ',
                'entries' => [
                    'category' => 'Danh mục',
                    'tags'     => 'Thẻ',
                ],
            ],
        ],
    ],
];
