<?php

return [
    'navigation' => [
        'title' => 'Vị trí',
        'group' => 'Quản lý Kho hàng',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Chung',

                'fields' => [
                    'location'                     => 'Vị trí',
                    'location-placeholder'         => 'vd. Kho Dự trữ',
                    'parent-location'              => 'Vị trí Cha',
                    'parent-location-hint-tooltip' => 'Vị trí chính bao gồm vị trí này. Ví dụ, \'Khu Vực Giao hàng\' là một phần của vị trí cha \'Cổng 1\'.',
                    'external-notes'               => 'Ghi chú Bên ngoài',
                ],
            ],

            'settings' => [
                'title'  => 'Cài đặt',

                'fields' => [
                    'location-type'                 => 'Loại Vị trí',
                    'company'                       => 'Công ty',
                    'storage-category'              => 'Danh mục Lưu trữ',
                    'is-scrap'                      => 'Là Vị trí Phế liệu?',
                    'is-scrap-hint-tooltip'         => 'Chọn hộp kiểm này để chỉ định vị trí này để lưu trữ hàng hóa bị hỏng hoặc phế liệu.',
                    'is-dock'                       => 'Là Vị trí Bến?',
                    'is-dock-hint-tooltip'          => 'Chọn hộp kiểm này để chỉ định vị trí này để lưu trữ hàng hóa sẵn sàng để vận chuyển.',
                    'is-replenish'                  => 'Là Vị trí Bổ sung?',
                    'is-replenish-hint-tooltip'     => 'Bật chức năng này để lấy tất cả số lượng cần thiết để bổ sung tại vị trí này.',
                    'logistics'                     => 'Hậu cần',
                    'removal-strategy'              => 'Chiến lược Loại bỏ',
                    'removal-strategy-hint-tooltip' => 'Chỉ định phương pháp mặc định để xác định kệ, lô và vị trí chính xác để lấy sản phẩm. Phương pháp này có thể được thực thi ở cấp danh mục sản phẩm, với fallback về vị trí cha nếu không được đặt ở đây.',
                    'cyclic-counting'               => 'Đếm Chu kỳ',
                    'inventory-frequency'           => 'Tần suất Kiểm kê',
                    'last-inventory'                => 'Kiểm kê Cuối',
                    'last-inventory-hint-tooltip'   => 'Ngày kiểm kê cuối cùng tại vị trí này.',
                    'next-expected'                 => 'Dự kiến Tiếp theo',
                    'next-expected-hint-tooltip'    => 'Ngày cho lần kiểm kê tiếp theo được lên kế hoạch dựa trên lịch trình chu kỳ.',
                ],
            ],

            'additional' => [
                'title'  => 'Thông tin Bổ sung',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'location'         => 'Vị trí',
            'type'             => 'Loại',
            'storage-category' => 'Danh mục Lưu trữ',
            'company'          => 'Công ty',
            'deleted-at'       => 'Đã xóa lúc',
            'created-at'       => 'Ngày tạo',
            'updated-at'       => 'Ngày cập nhật',
        ],

        'groups' => [
            'warehouse'       => 'Kho hàng',
            'type'            => 'Loại',
            'created-at'      => 'Ngày tạo',
            'updated-at'      => 'Ngày cập nhật',
        ],

        'filters' => [
            'location' => 'Vị trí',
            'type'     => 'Loại',
            'company'  => 'Công ty',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Vị trí đã cập nhật',
                    'body'  => 'Vị trí đã được cập nhật thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Vị trí đã khôi phục',
                    'body'  => 'Vị trí đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Vị trí đã xóa',
                    'body'  => 'Vị trí đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Vị trí đã xóa vĩnh viễn',
                        'body'  => 'Vị trí đã được xóa vĩnh viễn thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa vị trí',
                        'body'  => 'Vị trí không thể bị xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print' => [
                'label' => 'In Mã vạch',
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Các vị trí đã khôi phục',
                    'body'  => 'Các vị trí đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các vị trí đã xóa',
                    'body'  => 'Các vị trí đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Các vị trí đã xóa vĩnh viễn',
                        'body'  => 'Các vị trí đã được xóa vĩnh viễn thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa các vị trí',
                        'body'  => 'Các vị trí không thể bị xóa vì đang được sử dụng.',
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
                    'location'                     => 'Vị trí',
                    'location-placeholder'         => 'vd. Kho Dự trữ',
                    'parent-location'              => 'Vị trí Cha',
                    'parent-location-hint-tooltip' => 'Vị trí chính bao gồm vị trí này. Ví dụ, \'Khu Vực Giao hàng\' là một phần của vị trí cha \'Cổng 1\'.',
                    'external-notes'               => 'Ghi chú Bên ngoài',
                ],
            ],

            'settings' => [
                'title'  => 'Cài đặt',

                'entries' => [
                    'location-type'                 => 'Loại Vị trí',
                    'company'                       => 'Công ty',
                    'storage-category'              => 'Danh mục Lưu trữ',
                    'is-scrap'                      => 'Là Vị trí Phế liệu?',
                    'is-scrap-hint-tooltip'         => 'Chọn hộp kiểm này để chỉ định vị trí này để lưu trữ hàng hóa bị hỏng hoặc phế liệu.',
                    'is-dock'                       => 'Là Vị trí Bến?',
                    'is-dock-hint-tooltip'          => 'Chọn hộp kiểm này để chỉ định vị trí này để lưu trữ hàng hóa sẵn sàng để vận chuyển.',
                    'is-replenish'                  => 'Là Vị trí Bổ sung?',
                    'is-replenish-hint-tooltip'     => 'Bật chức năng này để lấy tất cả số lượng cần thiết để bổ sung tại vị trí này.',
                    'logistics'                     => 'Hậu cần',
                    'removal-strategy'              => 'Chiến lược Loại bỏ',
                    'removal-strategy-hint-tooltip' => 'Chỉ định phương pháp mặc định để xác định kệ, lô và vị trí chính xác để lấy sản phẩm. Phương pháp này có thể được thực thi ở cấp danh mục sản phẩm, với fallback về vị trí cha nếu không được đặt ở đây.',
                    'cyclic-counting'               => 'Đếm Chu kỳ',
                    'inventory-frequency'           => 'Tần suất Kiểm kê',
                    'last-inventory'                => 'Kiểm kê Cuối',
                    'last-inventory-hint-tooltip'   => 'Ngày kiểm kê cuối cùng tại vị trí này.',
                    'next-expected'                 => 'Dự kiến Tiếp theo',
                    'next-expected-hint-tooltip'    => 'Ngày cho lần kiểm kê tiếp theo được lên kế hoạch dựa trên lịch trình chu kỳ.',
                ],
            ],

            'additional' => [
                'title'  => 'Thông tin Bổ sung',
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