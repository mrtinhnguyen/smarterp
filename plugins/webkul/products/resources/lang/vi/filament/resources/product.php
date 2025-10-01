<?php

return [
    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Chung',

                'fields' => [
                    'name'             => 'Tên',
                    'name-placeholder' => 'vd. Áo thun',
                    'description'      => 'Mô tả',
                    'tags'             => 'Thẻ',
                ],
            ],

            'images' => [
                'title' => 'Hình ảnh',
            ],

            'inventory' => [
                'title' => 'Kho hàng',

                'fields' => [],

                'fieldsets' => [
                    'logistics' => [
                        'title' => 'Hậu cần',

                        'fields' => [
                            'weight' => 'Trọng lượng',
                            'volume' => 'Thể tích',
                        ],
                    ],
                ],
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
            'variants'    => 'Biến thể',
            'images'      => 'Hình ảnh',
            'type'        => 'Loại',
            'reference'   => 'Tham chiếu',
            'responsible' => 'Người phụ trách',
            'barcode'     => 'Mã vạch',
            'category'    => 'Danh mục',
            'company'     => 'Công ty',
            'price'       => 'Giá',
            'cost'        => 'Chi phí',
            'on-hand'     => 'Tồn kho',
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
                    'success' => [
                        'title' => 'Sản phẩm đã xóa vĩnh viễn',
                        'body'  => 'Sản phẩm đã được xóa vĩnh viễn thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa sản phẩm',
                        'body'  => 'Sản phẩm không thể bị xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print' => [
                'label' => 'In nhãn',

                'form' => [
                    'fields' => [
                        'quantity' => 'Số lượng nhãn',
                        'format'   => 'Định dạng',

                        'format-options' => [
                            'dymo'       => 'Dymo',
                            '2x7_price'  => '2x7 với giá',
                            '4x7_price'  => '4x7 với giá',
                            '4x12'       => '4x12',
                            '4x12_price' => '4x12 với giá',
                        ],
                    ],
                ],
            ],

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
                    'success' => [
                        'title' => 'Các sản phẩm đã xóa vĩnh viễn',
                        'body'  => 'Các sản phẩm đã được xóa vĩnh viễn thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa các sản phẩm',
                        'body'  => 'Các sản phẩm không thể bị xóa vì đang được sử dụng.',
                    ],
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

                'fieldsets' => [
                    'logistics' => [
                        'title' => 'Hậu cần',

                        'entries' => [
                            'weight' => 'Trọng lượng',
                            'volume' => 'Thể tích',
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