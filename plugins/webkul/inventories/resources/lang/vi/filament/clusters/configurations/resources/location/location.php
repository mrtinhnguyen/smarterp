<?php

return [
    'navigation' => [
        'title' => 'Vị trí',
        'group' => 'Quản lý kho hàng',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Thông tin chung',

                'fields' => [
                    'location'                     => 'Vị trí',
                    'location-placeholder'         => 'ví dụ: Kho dự phòng',
                    'parent-location'              => 'Vị trí cha',
                    'parent-location-hint-tooltip' => 'Vị trí chính bao gồm vị trí này. Ví dụ, \'Khu vực giao hàng\' là một phần của vị trí cha \'Cổng 1\'.',
                    'external-notes'               => 'Ghi chú bên ngoài',
                ],
            ],

            'settings' => [
                'title'  => 'Cài đặt',

                'fields' => [
                    'location-type'                 => 'Loại vị trí',
                    'company'                       => 'Công ty',
                    'storage-category'              => 'Danh mục lưu trữ',
                    'is-scrap'                      => 'Có phải vị trí phế liệu?',
                    'is-scrap-hint-tooltip'         => 'Chọn hộp kiểm này để chỉ định vị trí này để lưu trữ hàng hóa bị hỏng hoặc phế liệu.',
                    'is-dock'                       => 'Có phải vị trí bến tàu?',
                    'is-dock-hint-tooltip'          => 'Chọn hộp kiểm này để chỉ định vị trí này để lưu trữ hàng hóa sẵn sàng để vận chuyển.',
                    'is-replenish'                  => 'Có phải vị trí bổ sung?',
                    'is-replenish-hint-tooltip'     => 'Bật chức năng này để lấy tất cả số lượng cần thiết để bổ sung tại vị trí này.',
                    'logistics'                     => 'Hậu cần',
                    'removal-strategy'              => 'Chiến lược loại bỏ',
                    'removal-strategy-hint-tooltip' => 'Chỉ định phương pháp mặc định để xác định kệ, lô và vị trí chính xác để lấy sản phẩm. Phương pháp này có thể được thực thi ở cấp danh mục sản phẩm, với fallback về vị trí cha nếu không được đặt ở đây.',
                    'cyclic-counting'               => 'Đếm chu kỳ',
                    'inventory-frequency'           => 'Tần suất kiểm kê',
                    'last-inventory'                => 'Kiểm kê cuối',
                    'last-inventory-hint-tooltip'   => 'Ngày kiểm kê cuối cùng tại vị trí này.',
                    'next-expected'                 => 'Tiếp theo dự kiến',
                    'next-expected-hint-tooltip'    => 'Ngày cho kế hoạch kiểm kê tiếp theo dựa trên lịch trình chu kỳ.',
                ],
            ],

            'additional' => [
                'title'  => 'Thông tin bổ sung',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'location'        => 'Vị trí',
            'parent-location' => 'Vị trí cha',
            'location-type'   => 'Loại vị trí',
            'company'         => 'Công ty',
            'storage-category' => 'Danh mục lưu trữ',
            'is-scrap'        => 'Vị trí phế liệu',
            'is-dock'         => 'Vị trí bến tàu',
            'is-replenish'    => 'Vị trí bổ sung',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo vị trí',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Vị trí đã được xóa',
                    'body'  => 'Vị trí đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các vị trí đã được xóa',
                    'body'  => 'Các vị trí đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'location'        => 'Vị trí',
                    'parent-location' => 'Vị trí cha',
                    'external-notes'  => 'Ghi chú bên ngoài',
                ],
            ],

            'settings' => [
                'title' => 'Cài đặt',
                'entries' => [
                    'location-type'      => 'Loại vị trí',
                    'company'            => 'Công ty',
                    'storage-category'   => 'Danh mục lưu trữ',
                    'is-scrap'           => 'Vị trí phế liệu',
                    'is-dock'            => 'Vị trí bến tàu',
                    'is-replenish'       => 'Vị trí bổ sung',
                    'logistics'          => 'Hậu cần',
                    'removal-strategy'   => 'Chiến lược loại bỏ',
                    'cyclic-counting'    => 'Đếm chu kỳ',
                    'inventory-frequency' => 'Tần suất kiểm kê',
                    'last-inventory'     => 'Kiểm kê cuối',
                    'next-expected'      => 'Tiếp theo dự kiến',
                ],
            ],
        ],
    ],
];
