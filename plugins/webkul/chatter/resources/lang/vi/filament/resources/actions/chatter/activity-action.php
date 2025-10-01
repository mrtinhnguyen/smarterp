<?php

return [
    'setup' => [
        'title'               => 'Lên lịch hoạt động',
        'submit-action-title' => 'Lên lịch',

        'form' => [
            'fields' => [
                'activity-plan' => 'Kế hoạch hoạt động',
                'plan-date'     => 'Ngày kế hoạch',
                'plan-summary'  => 'Tóm tắt kế hoạch',
                'activity-type' => 'Loại hoạt động',
                'due-date'      => 'Ngày đến hạn',
                'summary'       => 'Tóm tắt',
                'assigned-to'   => 'Giao cho',
                'log-note'      => 'Ghi chú nhật ký',
            ],
        ],

        'actions' => [
            'notification' => [
                'success' => [
                    'title' => 'Hoạt động đã được tạo',
                    'body'  => 'Hoạt động đã được tạo.',
                ],

                'warning'  => [
                    'title' => 'Không có file mới',
                    'body'  => 'Tất cả file đã được tải lên.',
                ],

                'error' => [
                    'title' => 'Tạo hoạt động thất bại',
                    'body'  => 'Không thể tạo hoạt động ',
                ],
            ],
        ],
    ],
];
