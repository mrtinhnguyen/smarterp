<?php

return [
    'title' => 'Nhiệm vụ',

    'header-actions' => [
        'create' => [
            'label' => 'Nhiệm vụ mới',
        ],
    ],

    'table' => [
        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Nhiệm vụ đã được khôi phục',
                    'body'  => 'Nhiệm vụ đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Nhiệm vụ đã được xóa',
                    'body'  => 'Nhiệm vụ đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Nhiệm vụ đã được xóa vĩnh viễn',
                    'body'  => 'Nhiệm vụ đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],
    ],

    'tabs' => [
        'open-tasks'       => 'Nhiệm vụ đang mở',
        'my-tasks'         => 'Nhiệm vụ của tôi',
        'unassigned-tasks' => 'Nhiệm vụ chưa phân công',
        'closed-tasks'     => 'Nhiệm vụ đã đóng',
        'starred-tasks'    => 'Nhiệm vụ đã đánh dấu',
        'archived-tasks'   => 'Nhiệm vụ đã lưu trữ',
    ],
];
