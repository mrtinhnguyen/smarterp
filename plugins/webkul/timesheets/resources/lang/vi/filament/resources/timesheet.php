<?php

return [
    'title' => 'Bảng chấm công',

    'navigation' => [
        'title' => 'Bảng chấm công',
        'group' => 'Dự án',
    ],

    'form' => [
        'date'                   => 'Ngày',
        'employee'               => 'Nhân viên',
        'project'                => 'Dự án',
        'task'                   => 'Nhiệm vụ',
        'description'            => 'Mô tả',
        'time-spent'             => 'Thời gian làm việc',
        'time-spent-helper-text' => 'Thời gian làm việc tính bằng giờ (Ví dụ: 1.5 giờ có nghĩa là 1 giờ 30 phút)',
    ],

    'table' => [
        'columns' => [
            'date'        => 'Ngày',
            'employee'    => 'Nhân viên',
            'project'     => 'Dự án',
            'task'        => 'Nhiệm vụ',
            'description' => 'Mô tả',
            'time-spent'  => 'Thời gian làm việc',
            'created-at'  => 'Được tạo lúc',
            'updated-at'  => 'Được cập nhật lúc',
        ],

        'groups' => [
            'date'       => 'Ngày',
            'employee'   => 'Nhân viên',
            'project'    => 'Dự án',
            'task'       => 'Nhiệm vụ',
            'creator'    => 'Người tạo',
        ],

        'filters' => [
            'date-from'  => 'Từ ngày',
            'date-until' => 'Đến ngày',
            'employee'   => 'Nhân viên',
            'project'    => 'Dự án',
            'task'       => 'Nhiệm vụ',
            'creator'    => 'Người tạo',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo bảng chấm công',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Bảng chấm công đã được xóa',
                    'body'  => 'Bảng chấm công đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các bảng chấm công đã được xóa',
                    'body'  => 'Các bảng chấm công đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'date'        => 'Ngày',
                    'employee'    => 'Nhân viên',
                    'project'     => 'Dự án',
                    'task'        => 'Nhiệm vụ',
                    'description' => 'Mô tả',
                    'time-spent'  => 'Thời gian làm việc',
                ],
            ],
        ],
    ],
];
