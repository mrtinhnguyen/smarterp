<?php

return [
    'title' => 'Biến thể',

    'form' => [
        'date'                   => 'Ngày',
        'employee'               => 'Nhân viên',
        'description'            => 'Mô tả',
        'time-spent'             => 'Thời gian sử dụng',
        'time-spent-helper-text' => 'Thời gian sử dụng tính bằng giờ (Ví dụ: 1.5 giờ có nghĩa là 1 giờ 30 phút)',
    ],

    'table' => [
        'columns' => [
            'date'                   => 'Ngày',
            'employee'               => 'Nhân viên',
            'description'            => 'Mô tả',
            'time-spent'             => 'Thời gian sử dụng',
            'time-spent-on-subtasks' => 'Thời gian sử dụng cho nhiệm vụ phụ',
            'total-time-spent'       => 'Tổng thời gian sử dụng',
            'remaining-time'         => 'Thời gian còn lại',
            'variant-values'         => 'Giá trị biến thể',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Biến thể đã được xóa',
                    'body'  => 'Biến thể đã được xóa thành công.',
                ],
            ],
        ],
    ],
];
