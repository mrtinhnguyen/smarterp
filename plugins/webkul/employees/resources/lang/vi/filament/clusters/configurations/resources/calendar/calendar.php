<?php

return [
    'title' => 'Lịch trình làm việc',

    'navigation' => [
        'title' => 'Lịch trình làm việc',
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
                'title'  => 'Thông tin chung',
                'fields' => [
                    'name'                  => 'Tên',
                    'schedule-name'         => 'Tên lịch trình',
                    'schedule-name-tooltip' => 'Vui lòng viết tên lịch trình làm việc mô tả.',
                    'timezone'              => 'Múi giờ',
                    'timezone-tooltip'      => 'Vui lòng chọn múi giờ cho lịch trình làm việc.',
                    'company'               => 'Công ty',
                ],
            ],

            'working-hours' => [
                'title' => 'Giờ làm việc',
                'fields' => [
                    'working-hours' => 'Giờ làm việc',
                    'day-of-week'   => 'Ngày trong tuần',
                    'start-time'    => 'Giờ bắt đầu',
                    'end-time'      => 'Giờ kết thúc',
                    'break-time'    => 'Giờ nghỉ',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'      => 'Tên',
            'timezone'  => 'Múi giờ',
            'company'   => 'Công ty',
            'status'    => 'Trạng thái',
            'created-by' => 'Tạo bởi',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo lịch trình làm việc',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Lịch trình làm việc đã được xóa',
                    'body'  => 'Lịch trình làm việc đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các lịch trình làm việc đã được xóa',
                    'body'  => 'Các lịch trình làm việc đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'name'     => 'Tên',
                    'timezone' => 'Múi giờ',
                    'company'  => 'Công ty',
                    'status'   => 'Trạng thái',
                ],
            ],

            'working-hours' => [
                'title' => 'Giờ làm việc',
                'entries' => [
                    'working-hours' => 'Giờ làm việc',
                    'day-of-week'   => 'Ngày trong tuần',
                    'start-time'    => 'Giờ bắt đầu',
                    'end-time'      => 'Giờ kết thúc',
                    'break-time'    => 'Giờ nghỉ',
                ],
            ],
        ],
    ],
];
