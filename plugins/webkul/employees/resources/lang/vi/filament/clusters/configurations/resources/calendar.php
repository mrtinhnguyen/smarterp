<?php

return [
    'title' => 'Lịch trình Làm việc',

    'navigation' => [
        'title' => 'Lịch trình Làm việc',
        'group' => 'Nhân viên',
    ],

    'groups' => [
        'status'     => 'Trạng thái',
        'created-by' => 'Tạo bởi',
        'created-at' => 'Ngày tạo',
        'updated-at' => 'Ngày cập nhật',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Thông tin Chung',
                'fields' => [
                    'name'                  => 'Tên',
                    'schedule-name'         => 'Tên Lịch trình',
                    'schedule-name-tooltip' => 'Vui lòng viết tên lịch trình làm việc mô tả.',
                    'timezone'              => 'Múi giờ',
                    'timezone-tooltip'      => 'Vui lòng chọn múi giờ cho lịch trình làm việc.',
                    'company'               => 'Công ty',
                ],
            ],

            'configuration' => [
                'title'  => 'Cấu hình Giờ làm việc',
                'fields' => [
                    'hours-per-day'                   => 'Giờ Mỗi ngày',
                    'hours-per-day-suffix'            => 'Giờ',
                    'full-time-required-hours'        => 'Giờ Yêu cầu Toàn thời gian',
                    'full-time-required-hours-suffix' => 'Giờ Mỗi tuần',
                ],
            ],

            'flexibility' => [
                'title'  => 'Tính linh hoạt',
                'fields' => [
                    'status'                     => 'Trạng thái',
                    'two-weeks-calendar'         => 'Lịch Hai tuần',
                    'two-weeks-calendar-tooltip' => 'Bật lịch trình làm việc hai tuần xen kẽ.',
                    'flexible-hours'             => 'Giờ Linh hoạt',
                    'flexible-hours-tooltip'     => 'Cho phép nhân viên có giờ làm việc linh hoạt.',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'             => 'ID',
            'name'           => 'Tên Lịch trình',
            'timezone'       => 'Múi giờ',
            'company'        => 'Công ty',
            'flexible-hours' => 'Giờ Linh hoạt',
            'status'         => 'Trạng thái',
            'daily-hours'    => 'Giờ Hàng ngày',
            'created-by'     => 'Tạo bởi',
            'created-at'     => 'Ngày tạo',
            'updated-at'     => 'Ngày cập nhật',
        ],

        'filters' => [
            'company'           => 'Công ty',
            'is-active'         => 'Trạng thái',
            'two-week-calendar' => 'Lịch Hai tuần',
            'flexible-hours'    => 'Giờ Linh hoạt',
            'timezone'          => 'Múi giờ',
            'name'              => 'Tên Lịch trình',
            'attendance'        => 'Chấm công',
            'created-by'        => 'Tạo bởi',
            'daily-hours'       => 'Giờ Hàng ngày',
            'updated-at'        => 'Ngày cập nhật',
            'created-at'        => 'Ngày tạo',
        ],

        'groups' => [
            'name'           => 'Tên Lịch trình',
            'status'         => 'Trạng thái',
            'timezone'       => 'Múi giờ',
            'flexible-hours' => 'Giờ Linh hoạt',
            'daily-hours'    => 'Giờ Hàng ngày',
            'created-by'     => 'Tạo bởi',
            'created-at'     => 'Ngày tạo',
            'updated-at'     => 'Ngày cập nhật',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Kế hoạch lịch đã khôi phục',
                    'body'  => 'Kế hoạch lịch đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Kế hoạch lịch đã xóa',
                    'body'  => 'Kế hoạch lịch đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Kế hoạch lịch đã xóa vĩnh viễn',
                    'body'  => 'Kế hoạch lịch đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Các kế hoạch lịch đã khôi phục',
                    'body'  => 'Các kế hoạch lịch đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các kế hoạch lịch đã xóa',
                    'body'  => 'Các kế hoạch lịch đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Các kế hoạch lịch đã xóa vĩnh viễn',
                    'body'  => 'Các kế hoạch lịch đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'Thông tin Chung',
                'entries' => [
                    'name'                  => 'Tên',
                    'schedule-name'         => 'Tên Lịch trình',
                    'schedule-name-tooltip' => 'Vui lòng viết tên lịch trình làm việc mô tả.',
                    'timezone'              => 'Múi giờ',
                    'timezone-tooltip'      => 'Vui lòng chọn múi giờ cho lịch trình làm việc.',
                    'company'               => 'Công ty',
                ],
            ],

            'configuration' => [
                'title'   => 'Cấu hình Giờ làm việc',
                'entries' => [
                    'hours-per-day'                   => 'Giờ Mỗi ngày',
                    'hours-per-day-suffix'            => 'Giờ',
                    'full-time-required-hours'        => 'Giờ Yêu cầu Toàn thời gian',
                    'full-time-required-hours-suffix' => 'Giờ Mỗi tuần',
                ],
            ],

            'flexibility' => [
                'title'   => 'Tính linh hoạt',
                'entries' => [
                    'status'                     => 'Trạng thái',
                    'two-weeks-calendar'         => 'Lịch Hai tuần',
                    'two-weeks-calendar-tooltip' => 'Bật lịch trình làm việc hai tuần xen kẽ.',
                    'flexible-hours'             => 'Giờ Linh hoạt',
                    'flexible-hours-tooltip'     => 'Cho phép nhân viên có giờ làm việc linh hoạt.',
                ],
            ],
        ],
    ],
];