<?php

return [
    'form' => [
        'factor-percent'    => 'Phần trăm hệ số',
        'factor-ratio'      => 'Tỷ lệ hệ số',
        'repartition-type'  => 'Loại phân bổ',
        'document-type'     => 'Loại tài liệu',
        'account'           => 'Tài khoản',
        'tax'               => 'Thuế',
        'tax-closing-entry' => 'Bút toán đóng thuế',
    ],

    'table' => [
        'columns' => [
            'factor-percent'    => 'Phần trăm hệ số(%)',
            'account'           => 'Tài khoản',
            'tax'               => 'Thuế',
            'company'           => 'Công ty',
            'repartition-type'  => 'Loại phân bổ',
            'document-type'     => 'Loại tài liệu',
            'tax-closing-entry' => 'Bút toán đóng thuế',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Phân bổ thuế đã được cập nhật',
                    'body'  => 'Phân bổ thuế đã được cập nhật thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Phân bổ thuế đã được xóa',
                    'body'  => 'Phân bổ thuế đã được xóa thành công.',
                ],
            ],
        ],

        'header-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Phân bổ thuế đã được tạo',
                    'body'  => 'Phân bổ thuế đã được tạo thành công.',
                ],
            ],
        ],
    ],
];