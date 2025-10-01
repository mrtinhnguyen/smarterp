<?php

return [
    'navigation' => [
        'title' => 'Tuyến đường',
        'group' => 'Quản lý Kho hàng',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Chung',

                'fields' => [
                    'route'             => 'Tuyến đường',
                    'route-placeholder' => 'vd. Tiếp nhận Hai Bước',
                    'company'           => 'Công ty',
                ],
            ],

            'applicable-on' => [
                'title'       => 'Áp dụng Trên',
                'description' => 'Chọn các vị trí mà tuyến đường này có thể được áp dụng.',

                'fields' => [
                    'products'                        => 'Sản phẩm',
                    'products-hint-tooltip'           => 'Nếu được chọn, tuyến đường này sẽ có sẵn để chọn trên sản phẩm.',
                    'product-categories'              => 'Danh mục Sản phẩm',
                    'product-categories-hint-tooltip' => 'Nếu được chọn, tuyến đường này sẽ có sẵn để chọn trên danh mục sản phẩm.',
                    'warehouses'                      => 'Kho hàng',
                    'warehouses-hint-tooltip'         => 'Khi một kho hàng được gán cho tuyến đường này, nó sẽ được coi là tuyến đường mặc định cho các sản phẩm di chuyển qua kho đó.',
                    'packaging'                       => 'Đóng gói',
                    'packaging-hint-tooltip'          => 'Nếu được chọn, tuyến đường này sẽ có sẵn để chọn trên đóng gói.',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'route'      => 'Tuyến đường',
            'company'    => 'Công ty',
            'deleted-at' => 'Đã xóa lúc',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'groups' => [
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'filters' => [
            'company'  => 'Công ty',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Tuyến đường đã cập nhật',
                    'body'  => 'Tuyến đường đã được cập nhật thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Tuyến đường đã khôi phục',
                    'body'  => 'Tuyến đường đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tuyến đường đã xóa',
                    'body'  => 'Tuyến đường đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Tuyến đường đã xóa vĩnh viễn',
                        'body'  => 'Tuyến đường đã được xóa vĩnh viễn thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa tuyến đường',
                        'body'  => 'Tuyến đường không thể bị xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Các tuyến đường đã khôi phục',
                    'body'  => 'Các tuyến đường đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các tuyến đường đã xóa',
                    'body'  => 'Các tuyến đường đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Các tuyến đường đã xóa vĩnh viễn',
                        'body'  => 'Các tuyến đường đã được xóa vĩnh viễn thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa các tuyến đường',
                        'body'  => 'Các tuyến đường không thể bị xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'  => 'Chung',

                'entries' => [
                    'route'             => 'Tuyến đường',
                    'route-placeholder' => 'vd. Tiếp nhận Hai Bước',
                    'company'           => 'Công ty',
                ],
            ],

            'applicable-on' => [
                'title'       => 'Áp dụng Trên',
                'description' => 'Chọn các nơi mà tuyến đường này có thể được chọn.',

                'entries' => [
                    'products'                        => 'Sản phẩm',
                    'products-hint-tooltip'           => 'Nếu được chọn, tuyến đường này sẽ có sẵn để chọn trên sản phẩm.',
                    'product-categories'              => 'Danh mục Sản phẩm',
                    'product-categories-hint-tooltip' => 'Nếu được chọn, tuyến đường này sẽ có sẵn để chọn trên danh mục sản phẩm.',
                    'warehouses'                      => 'Kho hàng',
                    'warehouses-hint-tooltip'         => 'Khi một kho hàng được gán cho tuyến đường này, nó sẽ được coi là tuyến đường mặc định cho các sản phẩm di chuyển qua kho đó.',
                    'packaging'                       => 'Đóng gói',
                    'packaging-hint-tooltip'          => 'Nếu được chọn, tuyến đường này sẽ có sẵn để chọn trên đóng gói.',
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