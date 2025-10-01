<?php

return [
    'navigation' => [
        'title' => 'Loại Thao tác',
        'group' => 'Quản lý Kho hàng',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'fields' => [
                    'operator-type'             => 'Loại Người vận hành',
                    'operator-type-placeholder' => 'vd. Tiếp nhận',
                ],
            ],

            'applicable-on' => [
                'title'       => 'Áp dụng Trên',
                'description' => 'Chọn các nơi mà tuyến đường này có thể được chọn.',

                'fields' => [
                ],
            ],
        ],

        'tabs' => [
            'general' => [
                'title'  => 'Chung',

                'fields' => [
                    'operator-type'                      => 'Loại Người vận hành',
                    'sequence-prefix'                    => 'Tiền tố Chuỗi',
                    'generate-shipping-labels'           => 'Tạo Nhãn Vận chuyển',
                    'warehouse'                          => 'Kho hàng',
                    'show-reception-report'              => 'Hiển thị Báo cáo Tiếp nhận khi Xác thực',
                    'show-reception-report-hint-tooltip' => 'Nếu được chọn, hệ thống sẽ tự động hiển thị báo cáo tiếp nhận khi xác thực, miễn là có các di chuyển để phân bổ.',
                    'company'                            => 'Công ty',
                    'return-type'                        => 'Loại Trả lại',
                    'create-backorder'                   => 'Tạo Đơn hàng Chờ',
                    'move-type'                          => 'Loại Di chuyển',
                    'move-type-hint-tooltip'             => 'Trừ khi được định nghĩa bởi tài liệu nguồn, điều này sẽ phục vụ như chính sách lấy hàng mặc định cho loại thao tác này.',
                ],

                'fieldsets' => [
                    'lots' => [
                        'title'  => 'Lô/Số Sê-ri',

                        'fields' => [
                            'create-new'                => 'Tạo Mới',
                            'create-new-hint-tooltip'   => 'Nếu được chọn, hệ thống sẽ giả định bạn có ý định tạo Lô/Số Sê-ri mới, cho phép bạn nhập chúng trong trường văn bản.',
                            'use-existing'              => 'Sử dụng Hiện có',
                            'use-existing-hint-tooltip' => 'Nếu được chọn, bạn có thể chọn Lô/Số Sê-ri hoặc chọn không gán bất kỳ. Điều này cho phép tạo kho mà không cần lô hoặc không có hạn chế về lô được sử dụng.',
                        ],
                    ],

                    'locations' => [
                        'title'  => 'Vị trí',

                        'fields' => [
                            'source-location'                   => 'Vị trí Nguồn',
                            'source-location-hint-tooltip'      => 'Điều này phục vụ như vị trí nguồn mặc định khi tạo thủ công thao tác này. Tuy nhiên, nó có thể được thay đổi sau này, và các tuyến đường có thể gán một vị trí mặc định khác.',
                            'destination-location'              => 'Vị trí Đích',
                            'destination-location-hint-tooltip' => 'Đây là vị trí đích mặc định cho các thao tác được tạo thủ công. Tuy nhiên, nó có thể được sửa đổi sau này, và các tuyến đường có thể gán một vị trí mặc định khác.',
                        ],
                    ],

                    'packages' => [
                        'title'  => 'Gói hàng',

                        'fields' => [
                            'show-entire-package'              => 'Di chuyển Toàn bộ Gói',
                            'show-entire-package-hint-tooltip' => 'Nếu được chọn, bạn có thể di chuyển toàn bộ gói hàng.',
                        ],
                    ],
                ],
            ],

            'hardware' => [
                'title'  => 'Phần cứng',

                'fieldsets' => [
                    'print-on-validation' => [
                        'title'  => 'In khi Xác thực',

                        'fields' => [
                            'delivery-slip'              => 'Phiếu Giao hàng',
                            'delivery-slip-hint-tooltip' => 'Nếu được chọn, hệ thống sẽ tự động in phiếu giao hàng khi việc lấy hàng được xác thực.',

                            'return-slip'              => 'Phiếu Trả lại',
                            'return-slip-hint-tooltip' => 'Nếu được chọn, hệ thống sẽ tự động in phiếu trả lại khi việc lấy hàng được xác thực.',

                            'product-labels'              => 'Nhãn Sản phẩm',
                            'product-labels-hint-tooltip' => 'Nếu được chọn, hệ thống sẽ tự động in nhãn sản phẩm khi việc lấy hàng được xác thực.',

                            'lots-labels'              => 'Nhãn Lô/SN',
                            'lots-labels-hint-tooltip' => 'Nếu được chọn, hệ thống sẽ tự động in nhãn lô/số sê-ri khi việc lấy hàng được xác thực.',

                            'reception-report'              => 'Báo cáo Tiếp nhận',
                            'reception-report-hint-tooltip' => 'Nếu được chọn, hệ thống sẽ tự động in báo cáo tiếp nhận khi việc lấy hàng được xác thực và chứa các di chuyển được gán.',

                            'reception-report-labels'              => 'Nhãn Báo cáo Tiếp nhận',
                            'reception-report-labels-hint-tooltip' => 'Nếu được chọn, hệ thống sẽ tự động in nhãn báo cáo tiếp nhận khi việc lấy hàng được xác thực.',

                            'package-content'              => 'Nội dung Gói',
                            'package-content-hint-tooltip' => 'Nếu được chọn, hệ thống sẽ tự động in chi tiết gói và nội dung của chúng khi việc lấy hàng được xác thực.',
                        ],
                    ],

                    'print-on-pack' => [
                        'title'  => 'In khi "Đóng gói"',

                        'fields' => [
                            'package-label'              => 'Nhãn Gói',
                            'package-label-hint-tooltip' => 'Nếu được chọn, hệ thống sẽ tự động in nhãn gói khi nút "Đóng gói" được sử dụng.',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Tên',
            'warehouse'  => 'Kho hàng',
            'company'    => 'Công ty',
            'deleted-at' => 'Đã xóa lúc',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'groups' => [
            'type'       => 'Loại',
            'warehouse'  => 'Kho hàng',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'filters' => [
            'type'      => 'Loại',
            'warehouse' => 'Kho hàng',
            'company'   => 'Công ty',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Loại thao tác đã khôi phục',
                    'body'  => 'Loại thao tác đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Loại thao tác đã xóa',
                    'body'  => 'Loại thao tác đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Loại thao tác đã xóa vĩnh viễn',
                        'body'  => 'Loại thao tác đã được xóa vĩnh viễn thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa loại thao tác',
                        'body'  => 'Loại thao tác không thể bị xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Các loại thao tác đã khôi phục',
                    'body'  => 'Các loại thao tác đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các loại thao tác đã xóa',
                    'body'  => 'Các loại thao tác đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Các loại thao tác đã xóa vĩnh viễn',
                        'body'  => 'Các loại thao tác đã được xóa vĩnh viễn thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa các loại thao tác',
                        'body'  => 'Các loại thao tác không thể bị xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],

        'empty-actions' => [
            'create' => [
                'label' => 'Tạo Loại Thao tác',
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin Chung',

                'entries' => [
                    'name' => 'Tên',
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

        'tabs' => [
            'general' => [
                'title' => 'Chung',

                'entries' => [
                    'type'                       => 'Loại Thao tác',
                    'sequence_code'              => 'Mã Chuỗi',
                    'print_label'                => 'In Nhãn',
                    'warehouse'                  => 'Kho hàng',
                    'reservation_method'         => 'Phương pháp Đặt chỗ',
                    'auto_show_reception_report' => 'Tự động Hiển thị Báo cáo Tiếp nhận',
                    'company'                    => 'Công ty',
                    'return_operation_type'      => 'Loại Thao tác Trả lại',
                    'create_backorder'           => 'Tạo Đơn hàng Chờ',
                    'move_type'                  => 'Loại Di chuyển',
                ],

                'fieldsets' => [
                    'lots' => [
                        'title' => 'Lô',

                        'entries' => [
                            'use_create_lots'   => 'Sử dụng Tạo Lô',
                            'use_existing_lots' => 'Sử dụng Lô Hiện có',
                        ],
                    ],

                    'locations' => [
                        'title' => 'Vị trí',

                        'entries' => [
                            'source_location'      => 'Vị trí Nguồn',
                            'destination_location' => 'Vị trí Đích',
                        ],
                    ],
                ],
            ],
            'hardware' => [
                'title' => 'Phần cứng',

                'fieldsets' => [
                    'print_on_validation' => [
                        'title' => 'In khi Xác thực',

                        'entries' => [
                            'auto_print_delivery_slip'           => 'Tự động In Phiếu Giao hàng',
                            'auto_print_return_slip'             => 'Tự động In Phiếu Trả lại',
                            'auto_print_product_labels'          => 'Tự động In Nhãn Sản phẩm',
                            'auto_print_lot_labels'              => 'Tự động In Nhãn Lô',
                            'auto_print_reception_report'        => 'Tự động In Báo cáo Tiếp nhận',
                            'auto_print_reception_report_labels' => 'Tự động In Nhãn Báo cáo Tiếp nhận',
                            'auto_print_packages'                => 'Tự động In Gói hàng',
                        ],
                    ],

                    'print_on_pack' => [
                        'title' => 'In khi Đóng gói',

                        'entries' => [
                            'auto_print_package_label' => 'Tự động In Nhãn Gói',
                        ],
                    ],
                ],
            ],
        ],
    ],
];