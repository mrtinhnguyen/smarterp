<?php

return [
    'navigation' => [
        'title' => 'Số lượng',
        'group' => 'Điều chỉnh',
    ],

    'form' => [
        'fields' => [
            'location'         => 'Vị trí',
            'product'          => 'Sản phẩm',
            'package'          => 'Gói hàng',
            'lot'              => 'Lô / Số seri',
            'counted-qty'      => 'Số lượng đã đếm',
            'scheduled-at'     => 'Lên lịch vào',
            'storage-category' => 'Danh mục lưu trữ',
        ],
    ],

    'table' => [
        'columns' => [
            'location'           => 'Vị trí',
            'product'            => 'Sản phẩm',
            'product-category'   => 'Danh mục sản phẩm',
            'lot'                => 'Lô / Số seri',
            'storage-category'   => 'Danh mục lưu trữ',
            'available-quantity' => 'Số lượng có sẵn',
            'quantity'           => 'Số lượng',
            'package'            => 'Gói hàng',
            'last-counted-at'    => 'Lần đếm cuối',
            'on-hand'            => 'Số lượng tồn kho',
            'counted'            => 'Số lượng đã đếm',
            'difference'         => 'Chênh lệch',
            'scheduled-at'       => 'Lên lịch vào',
            'user'               => 'Người dùng',
            'company'            => 'Công ty',

            'on-hand-before-state-updated' => [
                'notification' => [
                    'title' => 'So luong da duoc cap nhat',
                    'body'  => 'So luong da duoc cap nhat thanh cong.',
                ],
            ],
        ],

        'groups' => [
            'product'          => 'Sản phẩm',
            'product-category' => 'Danh mục sản phẩm',
            'location'         => 'Vị trí',
            'storage-category' => 'Danh mục lưu trữ',
            'lot'              => 'Lô / Số seri',
            'company'          => 'Công ty',
            'package'          => 'Gói hàng',
        ],

        'filters' => [
            'product'             => 'Sản phẩm',
            'uom'                 => 'Đơn vị đo lường',
            'product-category'    => 'Danh mục sản phẩm',
            'location'            => 'Vị trí',
            'storage-category'    => 'Danh mục lưu trữ',
            'lot'                 => 'Lô / Số seri',
            'company'             => 'Công ty',
            'package'             => 'Gói hàng',
            'on-hand-quantity'    => 'Số lượng tồn kho',
            'difference-quantity' => 'Số lượng chênh lệch',
            'incoming-at'         => 'Thời gian nhập',
            'scheduled-at'        => 'Lên lịch vào',
            'user'                => 'Người dùng',
            'created-at'          => 'Ngày tạo',
            'updated-at'          => 'Ngày cập nhật',
            'company'             => 'Công ty',
            'creator'             => 'Người tạo',
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
                        'body'  => 'Số lượng đã tồn tại cho cấu hình này. Vui lòng cập nhật số lượng hiện có thay vì tạo mới.',
                    ],
                ],
            ],
        ],

        'actions' => [
            'apply' => [
                'label' => 'Áp dụng',

                'notification' => [
                    'title' => 'Thay đổi số lượng đã được áp dụng',
                    'body'  => 'Các thay đổi số lượng đã được áp dụng thành công.',
                ],
            ],

            'clear' => [
                'label' => 'Xóa',

                'notification' => [
                    'title' => 'Thay đổi số lượng đã được xóa',
                    'body'  => 'Các thay đổi số lượng đã được xóa thành công.',
                ],
            ],
        ],
    ],
];

