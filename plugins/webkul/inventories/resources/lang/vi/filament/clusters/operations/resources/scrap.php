<?php

return [
    'navigation' => [
        'title' => 'Phế liệu',
        'group' => 'Điều chỉnh',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Chung',

                'fields' => [
                    'product'              => 'Sản phẩm',
                    'package'              => 'Gói hàng',
                    'quantity'             => 'Số lượng',
                    'unit'                 => 'Đơn vị đo lường',
                    'lot'                  => 'Lô/Seri',
                    'tags'                 => 'Thẻ',
                    'name'                 => 'Tên',
                    'color'                => 'Màu sắc',
                    'owner'                => 'Chủ sở hữu',
                    'source-location'      => 'Vị trí nguồn',
                    'destination-location' => 'Vị trí phế liệu',
                    'source-document'      => 'Tài liệu nguồn',
                    'company'              => 'Công ty',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'date'            => 'Ngày',
            'reference'       => 'Tham chiếu',
            'product'         => 'Sản phẩm',
            'package'         => 'Gói hàng',
            'quantity'        => 'Số lượng',
            'uom'             => 'Đơn vị đo lường',
            'source-location' => 'Vị trí nguồn',
            'scrap-location'  => 'Vị trí phế liệu',
            'unit'            => 'Đơn vị đo lường',
            'lot'             => 'Lô/Seri',
            'tags'            => 'Thẻ',
            'state'           => 'Trạng thái',
        ],

        'groups' => [
            'product'              => 'Sản phẩm',
            'source-location'      => 'Vị trí nguồn',
            'destination-location' => 'Vị trí phế liệu',
        ],

        'filters' => [
            'source-location'      => 'Vị trí nguồn',
            'destination-location' => 'Vị trí phế liệu',
            'product'              => 'Sản phẩm',
            'state'                => 'Trạng thái',
            'product-category'     => 'Danh mục sản phẩm',
            'uom'                  => 'Đơn vị đo lường',
            'lot'                  => 'Lô/Seri',
            'package'              => 'Gói hàng',
            'tags'                 => 'Thẻ',
            'company'              => 'Công ty',
            'quantity'             => 'Số lượng',
            'creator'              => 'Người tạo',
            'closed-at'            => 'Đóng vào',
            'created-at'           => 'Tạo vào',
            'updated-at'           => 'Cập nhật vào',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Pha vo da duoc xoa',
                        'body'  => 'Pha vo da duoc xoa thanh cong.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa phế liệu',
                        'body'  => 'Phế liệu không thể được xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Phế liệu đã được xóa',
                        'body'  => 'Các phế liệu đã chọn đã được xóa thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa phế liệu',
                        'body'  => 'Các phế liệu không thể được xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Chi tiết phế liệu',

                'entries' => [
                    'product'              => 'Sản phẩm',
                    'quantity'             => 'Số lượng',
                    'lot'                  => 'Lô',
                    'tags'                 => 'Thẻ',
                    'package'              => 'Gói hàng',
                    'owner'                => 'Chủ sở hữu',
                    'source-location'      => 'Vị trí nguồn',
                    'destination-location' => 'Vị trí đích',
                    'source-document'      => 'Tài liệu nguồn',
                    'company'              => 'Công ty',
                ],
            ],

            'record-information' => [
                'title' => 'Thông tin bản ghi',

                'entries' => [
                    'created-by'   => 'Tạo bởi',
                    'created-at'   => 'Tạo vào',
                    'last-updated' => 'Cập nhật cuối',
                ],
            ],
        ],
    ],
];

