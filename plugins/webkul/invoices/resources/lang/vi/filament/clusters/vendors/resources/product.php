<?php

return [
    'navigation' => [
        'title' => 'Sản phẩm',
        'group' => 'Kho hàng',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Chung',

                'fields' => [
                    'name'             => 'Tên',
                    'name-placeholder' => 'vd. Áo thun',
                    'description'      => 'Mô tả',
                    'tags'             => 'Thẻ',
                    'sales'            => 'Bán hàng',
                    'purchase'         => 'Mua hàng',
                ],
            ],

            'invoice-policy' => [
                'title'            => 'Chính sách hóa đơn',
                'ordered-policy'   => 'Bạn có thể xuất hóa đơn hàng hóa trước khi chúng được giao.',
                'delivered-policy' => 'Xuất hóa đơn sau khi giao hàng, dựa trên số lượng đã giao, không phải đã đặt.',
            ],

            'images' => [
                'title' => 'Hình ảnh',
            ],

            'settings' => [
                'title' => 'Cài đặt',

                'fields' => [
                    'type'      => 'Loại',
                    'reference' => 'Tham chiếu',
                    'barcode'   => 'Mã vạch',
                    'category'  => 'Danh mục',
                    'company'   => 'Công ty',
                ],
            ],

            'category-and-tags' => [
                'title' => 'Danh mục & Thẻ',

                'fields' => [
                    'category' => 'Danh mục',
                    'tags'     => 'Thẻ',
                ],
            ],

            'pricing' => [
                'title' => 'Định giá',

                'fields' => [
                    'price' => 'Giá',
                    'cost'  => 'Chi phí',
                ],
            ],

            'additional' => [
                'title' => 'Bổ sung',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'        => 'Tên',
            'images'      => 'Hình ảnh',
            'type'        => 'Loại',
            'reference'   => 'Tham chiếu',
            'responsible' => 'Người phụ trách',
            'barcode'     => 'Mã vạch',
            'category'    => 'Danh mục',
            'company'     => 'Công ty',
            'price'       => 'Giá',
            'cost'        => 'Chi phí',
            'tags'        => 'Thẻ',
            'deleted-at'  => 'Ngày xóa',
            'created-at'  => 'Ngày tạo',
            'updated-at'  => 'Ngày cập nhật',
        ],

        'groups' => [
            'type'       => 'Loại',
            'category'   => 'Danh mục',
            'created-at' => 'Ngày tạo',
        ],

        'filters' => [
            'name'        => 'Tên',
            'type'        => 'Loại',
            'reference'   => 'Tham chiếu',
            'barcode'     => 'Mã vạch',
            'category'    => 'Danh mục',
            'company'     => 'Công ty',
            'price'       => 'Giá',
            'cost'        => 'Chi phí',
            'is-favorite' => 'Yêu thích',
            'weight'      => 'Trọng lượng',
            'volume'      => 'Thể tích',
            'tags'        => 'Thẻ',
            'responsible' => 'Người phụ trách',
            'created-at'  => 'Ngày tạo',
            'updated-at'  => 'Ngày cập nhật',
            'creator'     => 'Người tạo',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Sản phẩm đã khôi phục',
                    'body'  => 'Sản phẩm đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Sản phẩm đã xóa',
                    'body'  => 'Sản phẩm đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Sản phẩm đã xóa vĩnh viễn',
                    'body'  => 'Sản phẩm đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Các sản phẩm đã khôi phục',
                    'body'  => 'Các sản phẩm đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các sản phẩm đã xóa',
                    'body'  => 'Các sản phẩm đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Các sản phẩm đã xóa vĩnh viễn',
                    'body'  => 'Các sản phẩm đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Chung',

                'entries' => [
                    'name'             => 'Tên',
                    'name-placeholder' => 'vd. Áo thun',
                    'description'      => 'Mô tả',
                    'tags'             => 'Thẻ',
                ],
            ],

            'images' => [
                'title' => 'Hình ảnh',

                'entries' => [],
            ],

            'settings' => [
                'title' => 'Cài đặt',

                'entries' => [
                    'type'      => 'Loại',
                    'reference' => 'Tham chiếu',
                    'barcode'   => 'Mã vạch',
                    'category'  => 'Danh mục',
                    'company'   => 'Công ty',
                ],
            ],

            'pricing' => [
                'title' => 'Định giá',

                'entries' => [
                    'price' => 'Giá',
                    'cost'  => 'Chi phí',
                ],
            ],

            'inventory' => [
                'title' => 'Kho hàng',

                'entries' => [],

                'fieldsets' => [
                    'tracking' => [
                        'title' => 'Theo dõi',

                        'entries' => [
                            'track-inventory' => 'Theo dõi kho hàng',
                            'track-by'        => 'Theo dõi theo',
                            'expiration-date' => 'Ngày hết hạn',
                        ],
                    ],

                    'operation' => [
                        'title' => 'Hoạt động',

                        'entries' => [
                            'routes' => 'Tuyến đường',
                        ],
                    ],

                    'logistics' => [
                        'title' => 'Hậu cần',

                        'entries' => [
                            'responsible' => 'Người phụ trách',
                            'weight'      => 'Trọng lượng',
                            'volume'      => 'Thể tích',
                            'sale-delay'  => 'Thời gian dẫn đầu khách hàng (Ngày)',
                        ],
                    ],

                    'traceability' => [
                        'title' => 'Truy xuất nguồn gốc',

                        'entries' => [
                            'expiration-date'  => 'Ngày hết hạn (Ngày)',
                            'best-before-date' => 'Ngày sử dụng tốt nhất (Ngày)',
                            'removal-date'     => 'Ngày loại bỏ (Ngày)',
                            'alert-date'       => 'Ngày cảnh báo (Ngày)',
                        ],
                    ],
                ],
            ],

            'record-information' => [
                'title' => 'Thông tin bản ghi',

                'entries' => [
                    'created-at' => 'Ngày tạo',
                    'created-by' => 'Tạo bởi',
                    'updated-at' => 'Ngày cập nhật',
                ],
            ],
        ],
    ],
];