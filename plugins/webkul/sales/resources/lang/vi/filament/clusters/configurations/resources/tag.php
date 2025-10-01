<?php

return [
    'title' => 'Thẻ',

    'navigation' => [
        'title' => 'Thẻ',
        'group' => 'Đơn hàng bán',
    ],

    'form' => [
        'fields' => [
            'name'  => 'Tên',
            'color' => 'Màu sắc',
        ],
    ],

    'table' => [
        'columns' => [
            'created-by' => 'Tạo bởi',
            'name'       => 'Tên',
            'color'      => 'Màu sắc',
        ],
        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Thẻ sản phẩm đã cập nhật',
                    'body'  => 'Thẻ sản phẩm đã được cập nhật thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Thẻ sản phẩm đã xóa',
                    'body'  => 'Thẻ sản phẩm đã được xóa thành công.',
                ],
            ],
        ],
        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Thẻ sản phẩm đã xóa',
                    'body'  => 'Thẻ sản phẩm đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'  => 'Tên',
            'color' => 'Màu sắc',
        ],
    ],
];