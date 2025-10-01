<?php

return [
    'navigation' => [
        'title' => 'Dự án',
        'group' => 'Dự án',
    ],

    'global-search' => [
        'project-manager' => 'Quản lý dự án',
        'customer'        => 'Khách hàng',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',

                'fields' => [
                    'name'             => 'Tên',
                    'name-placeholder' => 'Tên dự án...',
                    'description'      => 'Mô tả',
                ],
            ],

            'additional' => [
                'title' => 'Thông tin bổ sung',

                'fields' => [
                    'project-manager'             => 'Quản lý dự án',
                    'customer'                    => 'Khách hàng',
                    'start-date'                  => 'Ngày bắt đầu',
                    'end-date'                    => 'Ngày kết thúc',
                    'allocated-hours'             => 'Giờ phân bổ',
                    'allocated-hours-helper-text' => 'Tính bằng giờ (Ví dụ: 1.5 giờ có nghĩa là 1 giờ 30 phút)',
                    'tags'                        => 'Thẻ',
                    'company'                     => 'Công ty',
                ],
            ],

            'settings' => [
                'title' => 'Cài đặt',

                'fields' => [
                    'visibility'                   => 'Hiển thị',
                    'visibility-hint-tooltip'      => 'Cho phép nhân viên truy cập dự án hoặc nhiệm vụ của bạn bằng cách thêm họ làm người theo dõi. Họ sẽ tự động có quyền truy cập vào bất kỳ nhiệm vụ nào được giao cho họ.',
                    'private-description'          => 'Chỉ người dùng nội bộ được mời.',
                    'internal-description'         => 'Tất cả người dùng nội bộ có thể xem.',
                    'public-description'           => 'Người dùng cổng thông tin được mời và tất cả người dùng nội bộ.',
                    'time-management'              => 'Quản lý thời gian',
                    'allow-timesheets'             => 'Cho phép bảng chấm công',
                    'allow-timesheets-helper-text' => 'Ghi lại thời gian trên nhiệm vụ và theo dõi tiến độ',
                    'task-management'              => 'Quản lý nhiệm vụ',
                    'allow-milestones'             => 'Cho phép cột mốc',
                    'allow-milestones-helper-text' => 'Theo dõi các cột mốc quan trọng cần thiết để đạt được thành công.',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'            => 'Tên',
            'customer'        => 'Khách hàng',
            'start-date'      => 'Ngày bắt đầu',
            'end-date'        => 'Ngày kết thúc',
            'planned-date'    => 'Ngày dự kiến',
            'remaining-hours' => 'Giờ còn lại',
            'project-manager' => 'Quản lý dự án',
        ],

        'groups' => [
            'stage'           => 'Giai đoạn',
            'project-manager' => 'Quản lý dự án',
            'customer'        => 'Khách hàng',
            'created-at'      => 'Được tạo lúc',
        ],

        'filters' => [
            'name'             => 'Tên',
            'visibility'       => 'Hiển thị',
            'start-date'       => 'Ngày bắt đầu',
            'end-date'         => 'Ngày kết thúc',
            'allow-timesheets' => 'Cho phép bảng chấm công',
            'allow-milestones' => 'Cho phép cột mốc',
            'allocated-hours'  => 'Giờ phân bổ',
            'created-at'       => 'Được tạo lúc',
            'updated-at'       => 'Được cập nhật lúc',
            'stage'            => 'Giai đoạn',
            'customer'         => 'Khách hàng',
            'project-manager'  => 'Quản lý dự án',
            'company'          => 'Công ty',
            'creator'          => 'Người tạo',
            'tags'             => 'Thẻ',
        ],

        'actions' => [
            'tasks'      => ':count Nhiệm vụ',
            'milestones' => ':completed cột mốc hoàn thành trong tổng số :all',

            'create' => [
                'label' => 'Tạo dự án',
            ],

            'edit' => [
                'label' => 'Chỉnh sửa',
                'notification' => [
                    'title' => 'Dự án đã được cập nhật',
                    'body'  => 'Dự án đã được cập nhật thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Dự án đã được khôi phục',
                    'body'  => 'Dự án đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Dự án đã được xóa',
                    'body'  => 'Dự án đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Dự án đã được xóa vĩnh viễn',
                        'body'  => 'Dự án đã được xóa vĩnh viễn thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa vĩnh viễn dự án',
                        'body'  => 'Dự án được liên kết với các bản ghi khác.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Các dự án đã được xóa',
                    'body'  => 'Các dự án đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',

                'entries' => [
                    'name'             => 'Tên',
                    'name-placeholder' => 'Tên dự án...',
                    'description'      => 'Mô tả',
                ],
            ],

            'additional' => [
                'title' => 'Thông tin bổ sung',

                'entries' => [
                    'project-manager'        => 'Quản lý dự án',
                    'customer'               => 'Khách hàng',
                    'project-timeline'       => 'Thời gian dự án',
                    'allocated-hours'        => 'Giờ phân bổ',
                    'allocated-hours-suffix' => ' Giờ',
                    'remaining-hours'        => 'Giờ còn lại',
                    'remaining-hours-suffix' => ' Giờ',
                    'current-stage'          => 'Giai đoạn hiện tại',
                    'tags'                   => 'Thẻ',
                ],
            ],

            'statistics' => [
                'title' => 'Thống kê',

                'entries' => [
                    'total-tasks'         => 'Tổng nhiệm vụ',
                    'milestones-progress' => 'Tiến độ cột mốc',
                ],
            ],

            'record-information' => [
                'title' => 'Thông tin bản ghi',

                'entries' => [
                    'created-at'   => 'Được tạo lúc',
                    'created-by'   => 'Được tạo bởi',
                    'last-updated' => 'Cập nhật lần cuối',
                ],
            ],

            'settings' => [
                'title' => 'Cài đặt dự án',

                'entries' => [
                    'visibility'         => 'Hiển thị',
                    'timesheets-enabled' => 'Bảng chấm công được bật',
                    'milestones-enabled' => 'Cột mốc được bật',
                ],
            ],
        ],
    ],
];