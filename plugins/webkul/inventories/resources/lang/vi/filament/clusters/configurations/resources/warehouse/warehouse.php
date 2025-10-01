<?php

return [
    'navigation' => [
        'title' => 'Kho hàng',
        'group' => 'Quản lý kho hàng',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Thông tin chung',
                'fields' => [
                    'name'               => 'Tên',
                    'name-placeholder'   => 'ví dụ: Kho trung tâm',
                    'code'               => 'Tên viết tắt',
                    'code-placeholder'   => 'ví dụ: KT',
                    'code-hint-tooltip'  => 'Tên viết tắt dùng làm định danh cho kho hàng.',
                    'company'            => 'Công ty',
                    'address'            => 'Địa chỉ',
                ],
            ],

            'settings' => [
                'title'  => 'Cài đặt',

                'fields' => [
                    'shipment-management'              => 'Quản lý vận chuyển',
                    'incoming-shipments'               => 'Lô hàng đến',
                    'incoming-shipments-hint-tooltip'  => 'Tuyến đường mặc định để theo dõi',
                    'outgoing-shipments'               => 'Lô hàng đi',
                    'outgoing-shipments-hint-tooltip'  => 'Tuyến đường mặc định để theo dõi',
                    'resupply-management'              => 'Quản lý cung cấp lại',
                    'resupply-management-hint-tooltip' => 'Tuyến đường sẽ được tự động tạo để cung cấp lại kho này từ các kho đã chọn.',
                    'resupply-from'                    => 'Cung cấp lại từ',
                ],
            ],

            'additional' => [
                'title'  => 'Thông tin bổ sung',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Tên',
            'code'       => 'Tên viết tắt',
            'company'    => 'Công ty',
            'address'    => 'Địa chỉ',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo kho hàng',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Kho hàng đã được xóa',
                    'body'  => 'Kho hàng đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các kho hàng đã được xóa',
                    'body'  => 'Các kho hàng đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'name'    => 'Tên',
                    'code'    => 'Tên viết tắt',
                    'company' => 'Công ty',
                    'address' => 'Địa chỉ',
                ],
            ],

            'settings' => [
                'title' => 'Cài đặt',
                'entries' => [
                    'shipment-management' => 'Quản lý vận chuyển',
                    'incoming-shipments'  => 'Lô hàng đến',
                    'outgoing-shipments'  => 'Lô hàng đi',
                    'resupply-management' => 'Quản lý cung cấp lại',
                    'resupply-from'       => 'Cung cấp lại từ',
                ],
            ],
        ],
    ],
];
