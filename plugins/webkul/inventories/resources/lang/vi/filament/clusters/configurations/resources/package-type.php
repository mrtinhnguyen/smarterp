<?php

return [
    'navigation' => [
        'title' => 'Loại Gói hàng',
        'group' => 'Giao hàng',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Chung',

                'fields' => [
                    'name'       => 'Tên',
                    'barcode'    => 'Mã vạch',
                    'company'    => 'Công ty',
                    'weight'     => 'Trọng lượng',
                    'max-weight' => 'Trọng lượng Tối đa',

                    'fieldsets' => [
                        'size' => [
                            'title' => 'Kích thước',

                            'fields' => [
                                'length' => 'Chiều dài',
                                'width'  => 'Chiều rộng',
                                'height' => 'Chiều cao',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Tên',
            'barcode'    => 'Mã vạch',
            'weight'     => 'Trọng lượng',
            'max-weight' => 'Trọng lượng Tối đa',
            'width'      => 'Chiều rộng',
            'height'     => 'Chiều cao',
            'length'     => 'Chiều dài',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'groups' => [
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Loại gói hàng đã xóa',
                    'body'  => 'Loại gói hàng đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Loại gói hàng đã xóa',
                    'body'  => 'Loại gói hàng đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'Thông tin Chung',
                'entries' => [
                    'name'      => 'Tên',
                    'fieldsets' => [
                        'size' => [
                            'title'   => 'Kích thước Gói hàng',
                            'entries' => [
                                'length' => 'Chiều dài',
                                'width'  => 'Chiều rộng',
                                'height' => 'Chiều cao',
                            ],
                        ],
                    ],
                    'weight'     => 'Trọng lượng Cơ sở',
                    'max-weight' => 'Trọng lượng Tối đa',
                    'barcode'    => 'Mã vạch',
                    'company'    => 'Công ty',
                    'created-at' => 'Ngày tạo',
                    'updated-at' => 'Cập nhật cuối',
                ],
            ],

            'record-information' => [
                'title' => 'Thông tin Bản ghi',

                'entries' => [
                    'created-by'   => 'Tạo bởi',
                    'created-at'   => 'Ngày tạo',
                    'last-updated' => 'Cập nhật cuối',
                ],
            ],
        ],
    ],
];