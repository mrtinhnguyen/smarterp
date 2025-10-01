<?php

return [
    'title'      => 'Kế hoạch tích lũy',
    'navigation' => [
        'title' => 'Kế hoạch tích lũy',
    ],

    'form' => [
        'fields' => [
            'name'                    => 'Tiêu đề',
            'is-based-on-worked-time' => 'Dựa trên thời gian làm việc',
            'accrued-gain-time'       => 'Thời gian tích lũy',
            'carry-over-time'         => 'Thời gian chuyển tiếp',
            'carry-over-date'         => 'Ngày chuyển tiếp',
            'status'                  => 'Trạng thái',
        ],
    ],

    'table' => [
        'columns' => [
            'name'   => 'Tên',
            'levels' => 'Cấp độ',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Kế hoạch tích lũy đã được xóa',
                    'body'  => 'Kế hoạch tích lũy đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Kế hoạch tích lũy đã được xóa',
                    'body'  => 'Kế hoạch tích lũy đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'                    => 'Tên',
            'is-based-on-worked-time' => 'Dựa trên thời gian làm việc',
            'accrued-gain-time'       => 'Thời gian tích lũy',
            'carry-over-time'         => 'Thời gian chuyển tiếp',
            'carry-over-day'          => 'Ngày chuyển tiếp',
            'carry-over-month'        => 'Tháng chuyển tiếp',
        ],
    ],
];
