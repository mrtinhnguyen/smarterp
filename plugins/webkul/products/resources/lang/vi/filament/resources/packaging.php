<?php

return [
    'form' => [
        'name'    => 'Tên',
        'barcode' => 'Mã vạch',
        'product' => 'Sản phẩm',
        'routes'  => 'Tuyến đường',
        'qty'     => 'Số lượng',
        'company' => 'Công ty',
    ],

    'table' => [
        'columns' => [
            'name'       => 'Tên',
            'product'    => 'Sản phẩm',
            'routes'     => 'Tuyến đường',
            'qty'        => 'Số lượng',
            'company'    => 'Công ty',
            'barcode'    => 'Mã vạch',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'groups' => [
            'product'    => 'Sản phẩm',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'filters' => [
            'product' => 'Sản phẩm',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Đóng gói đã cập nhật',
                    'body'  => 'Đóng gói đã được cập nhật thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Đóng gói đã xóa',
                        'body'  => 'Đóng gói đã được xóa thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa đóng gói',
                        'body'  => 'Đóng gói không thể bị xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print' => [
                'label' => 'In',
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Các đóng gói đã xóa',
                        'body'  => 'Các đóng gói đã được xóa thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa các đóng gói',
                        'body'  => 'Các đóng gói không thể bị xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'label' => 'Đóng gói mới',

                'notification' => [
                    'title' => 'Đóng gói đã tạo',
                    'body'  => 'Đóng gói đã được tạo thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',

                'entries' => [
                    'name'    => 'Tên gói',
                    'barcode' => 'Mã vạch',
                    'product' => 'Sản phẩm',
                    'qty'     => 'Số lượng',
                ],
            ],

            'organization' => [
                'title' => 'Chi tiết tổ chức',

                'entries' => [
                    'company'    => 'Công ty',
                    'creator'    => 'Tạo bởi',
                    'created_at' => 'Ngày tạo',
                    'updated_at' => 'Cập nhật lần cuối',
                ],
            ],
        ],
    ],
];