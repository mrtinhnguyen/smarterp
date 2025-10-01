<?php

return [
    'title' => 'Sản phẩm mẫu đơn hàng',

    'navigation' => [
        'title' => 'Sản phẩm mẫu đơn hàng',
        'group' => 'Đơn hàng bán',
    ],

    'global-search' => [
        'name'    => 'Tên',
    ],

    'form' => [
        'fields' => [
            'sort'           => 'Sắp xếp',
            'order-template' => 'Mẫu đơn hàng',
            'company'        => 'Công ty',
            'product'        => 'Sản phẩm',
            'product-uom'    => 'Đơn vị đo sản phẩm',
            'creator'        => 'Người tạo',
            'display-type'   => 'Loại hiển thị',
            'name'           => 'Tên',
            'quantity'       => 'Số lượng',
        ],
    ],

    'table' => [
        'columns' => [
            'sort'           => 'Sắp xếp',
            'order-template' => 'Mẫu đơn hàng',
            'company'        => 'Công ty',
            'product'        => 'Sản phẩm',
            'product-uom'    => 'Đơn vị đo sản phẩm',
            'created-by'     => 'Tạo bởi',
            'display-type'   => 'Loại hiển thị',
            'name'           => 'Tên',
            'quantity'       => 'Số lượng',
            'created-at'     => 'Ngày tạo',
            'updated-at'     => 'Ngày cập nhật',

        ],
        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Sản phẩm mẫu đơn hàng đã cập nhật',
                    'body'  => 'Sản phẩm mẫu đơn hàng đã được cập nhật thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Sản phẩm mẫu đơn hàng đã xóa',
                    'body'  => 'Sản phẩm mẫu đơn hàng đã được xóa thành công.',
                ],
            ],
        ],
        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Sản phẩm mẫu đơn hàng đã xóa',
                    'body'  => 'Sản phẩm mẫu đơn hàng đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'sort'           => 'Thứ tự sắp xếp',
            'order-template' => 'Mẫu đơn hàng',
            'company'        => 'Công ty',
            'product'        => 'Sản phẩm',
            'product-uom'    => 'Đơn vị đo sản phẩm',
            'display-type'   => 'Loại hiển thị',
            'name'           => 'Tên',
            'quantity'       => 'Số lượng',
        ],
    ],
];