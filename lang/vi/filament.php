<?php

return [
    'actions' => [
        'attach' => 'Đính kèm',
        'attach_another' => 'Đính kèm thêm',
        'cancel' => 'Hủy',
        'close' => 'Đóng',
        'confirm' => 'Xác nhận',
        'create' => 'Tạo',
        'delete' => 'Xóa',
        'detach' => 'Gỡ bỏ',
        'edit' => 'Chỉnh sửa',
        'save' => 'Lưu',
        'submit' => 'Gửi',
    ],

    'fields' => [
        'boolean' => [
            'true' => 'Có',
            'false' => 'Không',
        ],
        'date' => [
            'format' => 'd/m/Y',
        ],
        'datetime' => [
            'format' => 'd/m/Y H:i',
        ],
        'time' => [
            'format' => 'H:i',
        ],
    ],

    'navigation' => [
        'dashboard' => 'Bảng điều khiển',
        'settings' => 'Cài đặt',
        'users' => 'Người dùng',
        'roles' => 'Vai trò',
        'permissions' => 'Quyền hạn',
    ],

    'pages' => [
        'actions' => [
            'create' => 'Tạo mới',
            'edit' => 'Chỉnh sửa',
            'view' => 'Xem',
            'delete' => 'Xóa',
        ],
        'empty' => [
            'heading' => 'Không có bản ghi nào',
            'description' => 'Bắt đầu bằng cách tạo một bản ghi mới.',
        ],
    ],

    'tables' => [
        'actions' => [
            'bulk' => [
                'delete' => 'Xóa đã chọn',
            ],
        ],
        'columns' => [
            'created_at' => 'Được tạo lúc',
            'updated_at' => 'Được cập nhật lúc',
        ],
        'empty' => [
            'heading' => 'Không có bản ghi nào',
            'description' => 'Bắt đầu bằng cách tạo một bản ghi mới.',
        ],
        'filters' => [
            'actions' => [
                'reset' => 'Đặt lại',
            ],
        ],
        'pagination' => [
            'label' => 'Điều hướng trang',
            'overview' => 'Hiển thị :first đến :last trong tổng số :total kết quả',
            'fields' => [
                'records_per_page' => [
                    'label' => 'mỗi trang',
                    'options' => [
                        'all' => 'Tất cả',
                    ],
                ],
            ],
        ],
        'reorder_indicator' => 'Kéo và thả các bản ghi để sắp xếp lại.',
        'search' => [
            'label' => 'Tìm kiếm',
            'placeholder' => 'Tìm kiếm...',
            'indicator' => 'Tìm kiếm',
        ],
    ],

    'widgets' => [
        'account' => [
            'widgets' => [
                'account_widget' => [
                    'actions' => [
                        'logout' => 'Đăng xuất',
                    ],
                ],
            ],
        ],
        'filament_info' => [
            'widgets' => [
                'filament_info_widget' => [
                    'actions' => [
                        'open_documentation' => 'Mở tài liệu',
                        'open_github' => 'Mở GitHub',
                    ],
                ],
            ],
        ],
    ],
];
