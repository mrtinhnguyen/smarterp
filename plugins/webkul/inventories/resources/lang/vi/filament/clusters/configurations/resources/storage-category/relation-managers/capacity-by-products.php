<?php

return [
    'title' => 'Dung lượng theo sản phẩm',

    'form' => [
        'product' => 'Sản phẩm',
        'qty'     => 'Số lượng',
    ],

    'table' => [
        'header-actions' => [
            'create' => [
                'label' => 'Thêm dung lượng sản phẩm',

                'notification' => [
                    'title' => 'Dung lượng sản phẩm đã được tạo',
                    'body'  => 'Dung lượng sản phẩm đã được thêm thành công.',
                ],
            ],
        ],

        'columns' => [
            'product' => 'Sản phẩm',
            'qty'     => 'Số lượng',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Dung lượng sản phẩm đã được cập nhật',
                    'body'  => 'Dung lượng sản phẩm đã được cập nhật thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Dung lượng sản phẩm đã được xóa',
                    'body'  => 'Dung lượng sản phẩm đã được xóa thành công.',
                ],
            ],
        ],
    ],
];