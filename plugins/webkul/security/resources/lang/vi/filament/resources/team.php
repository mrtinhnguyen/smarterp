<?php

return [
    'title' => 'Nhóm',

    'navigation' => [
        'title' => 'Nhóm',
        'group' => 'Cài đặt',
    ],

    'form' => [
        'fields' => [
            'name' => 'Tên',
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => 'Tên',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Đã cập nhật nhóm',
                    'body'  => 'Nhóm đã được cập nhật thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Đã xóa nhóm',
                    'body'  => 'Nhóm đã được xóa thành công.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Đã tạo nhóm',
                    'body'  => 'Các nhóm đã được tạo thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'name'          => 'Tên',
                'job-title'     => 'Chức vụ',
                'work-email'    => 'Email công việc',
                'work-mobile'   => 'Di động công việc',
                'work-phone'    => 'Điện thoại công việc',
                'manager'       => 'Quản lý',
                'department'    => 'Phòng ban',
                'job-position'  => 'Vị trí công việc',
                'team-tags'     => 'Thẻ nhóm',
                'coach'         => 'Huấn luyện viên',
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name' => 'Tên',
        ],
    ],
];
