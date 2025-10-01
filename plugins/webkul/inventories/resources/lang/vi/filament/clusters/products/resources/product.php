<?php

return [
    'navigation' => [
        'title' => 'Sản phẩm',
        'group' => 'Kho hàng',
    ],

    'form' => [
        'sections' => [
            'inventory' => [
                'title' => 'Kho hàng',

                'fieldsets' => [
                    'tracking' => [
                        'title' => 'Theo dõi',

                        'fields' => [
                            'track-inventory'              => 'Theo dõi kho hàng',
                            'track-inventory-hint-tooltip' => 'Sản phẩm có thể lưu trữ là sản phẩm cần quản lý kho hàng.',
                            'track-by'                     => 'Theo dõi theo',
                            'expiration-date'              => 'Ngày hết hạn',
                            'expiration-date-hint-tooltip' => 'Nếu được chọn, bạn có thể chỉ định ngày hết hạn cho sản phẩm và lô/số seri liên quan.',
                        ],
                    ],

                    'operation' => [
                        'title' => 'Thao tác',

                        'fields' => [
                            'routes'              => 'Tuyến đường',
                            'routes-hint-tooltip' => 'Dựa trên các module đã cài đặt, cài đặt này cho phép bạn định nghĩa tuyến đường của sản phẩm, chẳng hạn như mua hàng, sản xuất hoặc bổ sung khi đặt hàng.',
                        ],
                    ],

                    'logistics' => [
                        'title' => 'Hậu cần',

                        'fields' => [
                            'responsible'              => 'Người chịu trách nhiệm',
                            'responsible-hint-tooltip' => 'Thời gian giao hàng (tính bằng ngày) đại diện cho thời gian hứa hẹn giữa xác nhận đơn hàng bán và giao sản phẩm.',
                            'weight'                   => 'Trọng lượng',
                            'volume'                   => 'Thể tích',
                            'sale-delay'               => 'Thời gian giao hàng khách hàng (Ngày)',
                            'sale-delay-hint-tooltip'  => 'Thời gian giao hàng (tính bằng ngày) đại diện cho thời gian hứa hẹn giữa xác nhận đơn hàng bán và giao sản phẩm.',
                        ],
                    ],

                    'traceability' => [
                        'title' => 'Truy xuất nguồn gốc',

                        'fields' => [
                            'expiration-date'               => 'Ngày hết hạn (Ngày)',
                            'expiration-date-hint-tooltip'  => 'Nếu được chọn, bạn có thể đặt ngày hết hạn cho sản phẩm và lô/số seri liên quan.',
                            'best-before-date'              => 'Ngày sử dụng tốt nhất (Ngày)',
                            'best-before-date-hint-tooltip' => 'Số ngày trước ngày hết hạn khi sản phẩm bắt đầu xuống cấp, mặc dù vẫn an toàn để sử dụng. Điều này được tính dựa trên lô/số seri.',
                            'removal-date'                  => 'Ngày loại bỏ (Ngày)',
                            'removal-date-hint-tooltip'     => 'Số ngày trước ngày hết hạn khi sản phẩm nên được loại bỏ khỏi kho. Điều này được tính dựa trên lô/số seri.',
                            'alert-date'                    => 'Ngày cảnh báo (Ngày)',
                            'alert-date-hint-tooltip'       => 'Số ngày trước ngày hết hạn khi cảnh báo nên được kích hoạt cho lô/số seri. Điều này được tính dựa trên lô/số seri.',
                        ],
                    ],
                ],
            ],

            'additional' => [
                'title' => 'Bổ sung',
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'inventory' => [
                'title' => 'Kho hàng',

                'entries' => [
                ],

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
                        'title' => 'Thao tác',

                        'entries' => [
                            'routes' => 'Tuyến đường',
                        ],
                    ],

                    'logistics' => [
                        'title' => 'Hậu cần',

                        'entries' => [
                            'responsible' => 'Người chịu trách nhiệm',
                            'weight'      => 'Trọng lượng',
                            'volume'      => 'Thể tích',
                            'sale-delay'  => 'Thời gian giao hàng khách hàng (Ngày)',
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
        ],
    ],
];