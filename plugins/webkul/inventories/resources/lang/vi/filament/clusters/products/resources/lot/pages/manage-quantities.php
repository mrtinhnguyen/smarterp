<?php

return [
    'title' => 'Vị trí',

    'table' => [
        'columns' => [
            'product'          => 'Sản phẩm',
            'location'         => 'Vị trí',
            'storage-category' => 'Danh mục lưu trữ',
            'quantity'         => 'Số lượng',
            'package'          => 'Bao bì',
            'on-hand'          => 'Số lượng có sẵn',
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