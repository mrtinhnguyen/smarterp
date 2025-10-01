<?php

return [
    'title' => 'Dung lượng theo bao bì',

    'form' => [
        'package-type' => 'Loại bao bì',
        'qty'          => 'Số lượng',
    ],

    'table' => [
        'header-actions' => [
            'create' => [
                'label' => 'Thêm dung lượng loại bao bì',

                'notification' => [
                    'title' => 'Dung lượng loại bao bì đã được tạo',
                    'body'  => 'Dung lượng loại bao bì đã được thêm thành công.',
                ],
            ],
        ],

        'columns' => [
            'package-type' => 'Loại bao bì',
            'qty'          => 'Số lượng',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Dung lượng loại bao bì đã được cập nhật',
                    'body'  => 'Dung lượng loại bao bì đã được cập nhật thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Dung lượng loại bao bì đã được xóa',
                    'body'  => 'Dung lượng loại bao bì đã được xóa thành công.',
                ],
            ],
        ],
    ],
];