<?php

return [
    'navigation' => [
        'title' => 'Kho hàng',
        'group' => 'Quản lý Kho hàng',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Chung',
                'fields' => [
                    'name'               => 'Tên',
                    'name-placeholder'   => 'vd. Kho Trung tâm',
                    'code'               => 'Tên viết tắt',
                    'code-placeholder'   => 'vd. KT',
                    'code-hint-tooltip'  => 'Tên viết tắt dùng làm định danh cho kho hàng.',
                    'company'            => 'Công ty',
                    'address'            => 'Địa chỉ',
                ],
            ],

            'settings' => [
                'title'  => 'Cài đặt',

                'fields' => [
                    'shipment-management'              => 'Quản lý Vận chuyển',
                    'incoming-shipments'               => 'Lô hàng Đến',
                    'incoming-shipments-hint-tooltip'  => 'Tuyến đường mặc định để theo dõi',
                    'outgoing-shipments'               => 'Lô hàng Đi',
                    'outgoing-shipments-hint-tooltip'  => 'Tuyến đường mặc định để theo dõi',
                    'resupply-management'              => 'Quản lý Bổ sung',
                    'resupply-management-hint-tooltip' => 'Các tuyến đường sẽ được tự động tạo để bổ sung kho này từ các kho đã chọn.',
                    'resupply-from'                    => 'Bổ sung Từ',
                ],
            ],

            'additional' => [
                'title'  => 'Thông tin Bổ sung',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Tên',
            'code'       => 'Tên viết tắt',
            'company'    => 'Công ty',
            'address'    => 'Địa chỉ',
            'deleted-at' => 'Đã xóa lúc',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'groups' => [
            'address'       => 'Địa chỉ',
            'company'       => 'Công ty',
            'created-at'    => 'Ngày tạo',
            'updated-at'    => 'Ngày cập nhật',
        ],

        'filters' => [
            'company' => 'Công ty',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Kho hàng đã khôi phục',
                    'body'  => 'Kho hàng đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Kho hàng đã xóa',
                    'body'  => 'Kho hàng đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Kho hàng đã xóa vĩnh viễn',
                        'body'  => 'Kho hàng đã được xóa vĩnh viễn thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa kho hàng',
                        'body'  => 'Kho hàng không thể bị xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Các kho hàng đã khôi phục',
                    'body'  => 'Các kho hàng đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các kho hàng đã xóa',
                    'body'  => 'Các kho hàng đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Các kho hàng đã xóa vĩnh viễn',
                        'body'  => 'Các kho hàng đã được xóa vĩnh viễn thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa các kho hàng',
                        'body'  => 'Các kho hàng không thể bị xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin Chung',

                'entries' => [
                    'name'    => 'Tên Kho hàng',
                    'code'    => 'Mã Kho hàng',
                    'company' => 'Công ty',
                    'address' => 'Địa chỉ',
                ],
            ],

            'settings' => [
                'title' => 'Cài đặt',

                'entries' => [
                    'shipment-management' => 'Quản lý Vận chuyển',
                    'incoming-shipments'  => 'Lô hàng Đến',
                    'outgoing-shipments'  => 'Lô hàng Đi',
                    'resupply-management' => 'Quản lý Bổ sung',
                    'resupply-from'       => 'Bổ sung Từ',
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