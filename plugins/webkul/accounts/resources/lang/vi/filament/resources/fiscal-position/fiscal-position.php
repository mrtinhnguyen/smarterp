<?php

return [
    'global-search' => [
        'zip-from' => 'Mã bưu điện từ',
        'zip-to'   => 'Mã bưu điện đến',
        'name'     => 'Tên',
    ],

    'form' => [
        'fields' => [
            'name'                 => 'Tên',
            'foreign-vat'          => 'VAT nước ngoài',
            'country'              => 'Quốc gia',
            'country-group'        => 'Nhóm quốc gia',
            'zip-from'             => 'Mã bưu điện từ',
            'zip-to'               => 'Mã bưu điện đến',
            'detect-automatically' => 'Tự động phát hiện',
            'notes'                => 'Ghi chú',
        ],
    ],

    'table' => [
        'columns' => [
            'name'                 => 'Tên',
            'company'              => 'Công ty',
            'country'              => 'Quốc gia',
            'country-group'        => 'Nhóm quốc gia',
            'created-by'           => 'Tạo bởi',
            'zip-from'             => 'Mã bưu điện từ',
            'zip-to'               => 'Mã bưu điện đến',
            'detect-automatically' => 'Tự động phát hiện',
            'notes'                => 'Ghi chú',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo vị thế tài chính',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Vị thế tài chính đã được xóa',
                    'body'  => 'Vị thế tài chính đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các vị thế tài chính đã được xóa',
                    'body'  => 'Các vị thế tài chính đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'name'                 => 'Tên',
                    'foreign-vat'          => 'VAT nước ngoài',
                    'country'              => 'Quốc gia',
                    'country-group'        => 'Nhóm quốc gia',
                    'zip-from'             => 'Mã bưu điện từ',
                    'zip-to'               => 'Mã bưu điện đến',
                    'detect-automatically' => 'Tự động phát hiện',
                    'notes'                => 'Ghi chú',
                ],
            ],
        ],
    ],
];
