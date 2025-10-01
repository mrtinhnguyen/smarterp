<?php

return [
    'navigation' => [
        'title' => 'Giai đoạn nhiệm vụ',
    ],

    'form' => [
        'name'    => 'Tên',
        'project' => 'Dự án',
    ],

    'table' => [
        'columns' => [
            'name'       => 'Tên',
            'project'    => 'Dự án',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'groups' => [
            'project'    => 'Dự án',
            'created-at' => 'Ngày tạo',
        ],

        'filters' => [
            'project' => 'Dự án',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo giai đoạn nhiệm vụ',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Giai đoạn nhiệm vụ đã được xóa',
                    'body'  => 'Giai đoạn nhiệm vụ đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các giai đoạn nhiệm vụ đã được xóa',
                    'body'  => 'Các giai đoạn nhiệm vụ đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'name'    => 'Tên',
                    'project' => 'Dự án',
                ],
            ],
        ],
    ],
];
