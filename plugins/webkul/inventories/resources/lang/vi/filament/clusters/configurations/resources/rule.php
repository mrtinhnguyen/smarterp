<?php

return [
    'navigation' => [
        'title' => 'Quy tắc',
        'group' => 'Quản lý Kho hàng',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Chung',

                'fields' => [
                    'name'                        => 'Tên',
                    'action'                      => 'Hành động',
                    'operation-type'              => 'Loại Thao tác',
                    'source-location'             => 'Vị trí Nguồn',
                    'destination-location'        => 'Vị trí Đích',
                    'supply-method'               => 'Phương pháp Cung cấp',
                    'supply-method-hint-tooltip'  => 'Lấy Từ Kho: Sản phẩm được lấy trực tiếp từ kho có sẵn trong vị trí nguồn.<br/>Kích hoạt Quy tắc Khác: Hệ thống bỏ qua kho có sẵn và tìm kiếm quy tắc kho để bổ sung vị trí nguồn.<br/>Lấy Từ Kho, nếu Không có, Kích hoạt Quy tắc Khác: Sản phẩm được lấy trước từ kho có sẵn. Nếu không có, hệ thống áp dụng quy tắc kho để đưa sản phẩm vào vị trí nguồn.',
                    'automatic-move'              => 'Di chuyển Tự động',
                    'automatic-move-hint-tooltip' => 'Thao tác Thủ công: Tạo một di chuyển kho riêng biệt sau thao tác hiện tại.<br/>Tự động Không Thêm Bước: Trực tiếp thay thế vị trí trong di chuyển gốc mà không thêm bước bổ sung.',

                    'action-information' => [
                        'pull' => 'Khi sản phẩm được yêu cầu trong <b>:sourceLocation</b>, :operation được tạo từ <b>:destinationLocation</b> để đáp ứng nhu cầu.',
                        'push' => 'Khi sản phẩm đến <b>:sourceLocation</b>,</br><b>:operation</b> được tạo để chuyển chúng đến <b>:destinationLocation</b>.',
                        'buy'  => 'Khi sản phẩm cần thiết trong <b>:destinationLocation</b>, một yêu cầu báo giá được tạo để đáp ứng nhu cầu.',
                    ],
                ],
            ],

            'settings' => [
                'title'  => 'Cài đặt',

                'fields' => [
                    'partner-address'              => 'Địa chỉ Đối tác',
                    'partner-address-hint-tooltip' => 'Địa chỉ nơi hàng hóa nên được giao. Tùy chọn.',
                    'lead-time'                    => 'Thời gian Dẫn (Ngày)',
                    'lead-time-hint-tooltip'       => 'Ngày chuyển dự kiến sẽ được tính toán bằng cách sử dụng thời gian dẫn này.',
                ],

                'fieldsets' => [
                    'applicability' => [
                        'title'  => 'Khả năng Áp dụng',

                        'fields' => [
                            'route'   => 'Tuyến đường',
                            'company' => 'Công ty',
                        ],
                    ],

                    'propagation' => [
                        'title'  => 'Lan truyền',

                        'fields' => [
                            'propagation-procurement-group'              => 'Lan truyền Nhóm Mua sắm',
                            'propagation-procurement-group-hint-tooltip' => 'Nếu được chọn, hủy di chuyển được tạo bởi quy tắc này cũng sẽ hủy di chuyển tiếp theo.',
                            'cancel-next-move'                           => 'Hủy Di chuyển Tiếp theo',
                            'warehouse-to-propagate'                     => 'Kho để Lan truyền',
                            'warehouse-to-propagate-hint-tooltip'        => 'Kho được gán cho di chuyển hoặc mua sắm được tạo, có thể khác với kho mà quy tắc này áp dụng (ví dụ: cho quy tắc bổ sung từ kho khác).',
                        ],
                    ],
                ],

            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                 => 'Tên',
            'action'               => 'Hành động',
            'source-location'      => 'Vị trí Nguồn',
            'destination-location' => 'Vị trí Đích',
            'route'                => 'Tuyến đường',
            'deleted-at'           => 'Đã xóa lúc',
            'created-at'           => 'Ngày tạo',
            'updated-at'           => 'Ngày cập nhật',
        ],

        'groups' => [
            'action'               => 'Hành động',
            'source-location'      => 'Vị trí Nguồn',
            'destination-location' => 'Vị trí Đích',
            'route'                => 'Tuyến đường',
            'created-at'           => 'Ngày tạo',
            'updated-at'           => 'Ngày cập nhật',
        ],

        'filters' => [
            'action'               => 'Hành động',
            'source-location'      => 'Vị trí Nguồn',
            'destination-location' => 'Vị trí Đích',
            'route'                => 'Tuyến đường',
            'company'              => 'Công ty',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Quy tắc đã cập nhật',
                    'body'  => 'Quy tắc đã được cập nhật thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Quy tắc đã khôi phục',
                    'body'  => 'Quy tắc đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Quy tắc đã xóa',
                    'body'  => 'Quy tắc đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Quy tắc đã xóa vĩnh viễn',
                        'body'  => 'Quy tắc đã được xóa vĩnh viễn thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa quy tắc',
                        'body'  => 'Quy tắc không thể bị xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Các quy tắc đã khôi phục',
                    'body'  => 'Các quy tắc đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các quy tắc đã xóa',
                    'body'  => 'Các quy tắc đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Các quy tắc đã xóa vĩnh viễn',
                        'body'  => 'Các quy tắc đã được xóa vĩnh viễn thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa các quy tắc',
                        'body'  => 'Các quy tắc không thể bị xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Chi tiết Quy tắc',

                'description' => [
                    'pull' => 'Khi sản phẩm được yêu cầu trong <b>:sourceLocation</b>, <b>:operation</b> được tạo từ <b>:destinationLocation</b> để đáp ứng nhu cầu.',
                    'push' => 'Khi sản phẩm đến trong <b>:sourceLocation</b>, <b>:operation</b> được tạo để chuyển chúng đến <b>:destinationLocation</b>.',
                ],

                'entries' => [
                    'name'                 => 'Tên Quy tắc',
                    'action'               => 'Hành động',
                    'operation-type'       => 'Loại Thao tác',
                    'source-location'      => 'Vị trí Nguồn',
                    'destination-location' => 'Vị trí Đích',
                    'route'                => 'Tuyến đường',
                    'company'              => 'Công ty',
                    'partner-address'      => 'Địa chỉ Đối tác',
                    'lead-time'            => 'Thời gian Dẫn',
                    'action-information'   => 'Thông tin Hành động',
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