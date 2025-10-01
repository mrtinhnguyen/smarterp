<?php

return [
    'form' => [
        'date'                   => 'Ngày',
        'employee'               => 'Nhân viên',
        'description'            => 'Mô tả',
        'time-spent'             => 'Thời gian sử dụng',
        'time-spent-helper-text' => 'Thời gian sử dụng tính bằng giờ (Ví dụ: 1.5 giờ có nghĩa là 1 giờ 30 phút)',
    ],

    'table' => [
        'header-actions' => [
            'create' => [
                'label' => 'Thêm bảng chấm công',

                'notification' => [
                    'title' => 'Bảng chấm công đã được tạo',
                    'body'  => 'Bảng chấm công đã được tạo thành công.',
                ],
            ],
        ],

        'columns' => [
            'date'                   => 'Ngày',
            'employee'               => 'Nhân viên',
            'description'            => 'Mô tả',
            'time-spent'             => 'Thời gian sử dụng',
            'time-spent-on-subtasks' => 'Thời gian sử dụng cho nhiệm vụ phụ',
            'total-time-spent'       => 'Tổng thời gian sử dụng',
            'remaining-time'         => 'Thời gian còn lại',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Bảng chấm công đã được cập nhật',
                    'body'  => 'Bảng chấm công đã được cập nhật thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Bảng chấm công đã được xóa',
                    'body'  => 'Bảng chấm công đã được xóa thành công.',
                ],
            ],
        ],
    ],
];
