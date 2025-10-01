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
            'edit' => [
                'notification' => [
                    'title' => 'Giai đoạn nhiệm vụ đã được cập nhật',
                    'body'  => 'Giai đoạn nhiệm vụ đã được cập nhật thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Giai đoạn nhiệm vụ đã được khôi phục',
                    'body'  => 'Giai đoạn nhiệm vụ đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Giai đoạn nhiệm vụ đã được xóa',
                    'body'  => 'Giai đoạn nhiệm vụ đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Giai đoạn nhiệm vụ đã được xóa vĩnh viễn',
                        'body'  => 'Giai đoạn nhiệm vụ đã được xóa vĩnh viễn thành công.',
                    ],
                    'error' => [
                        'title' => 'Không thể xóa giai đoạn nhiệm vụ',
                        'body'  => 'Giai đoạn nhiệm vụ không thể được xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Các giai đoạn nhiệm vụ đã được khôi phục',
                    'body'  => 'Các giai đoạn nhiệm vụ đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các giai đoạn nhiệm vụ đã được xóa',
                    'body'  => 'Các giai đoạn nhiệm vụ đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Các giai đoạn nhiệm vụ đã được xóa vĩnh viễn',
                    'body'  => 'Các giai đoạn nhiệm vụ đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],
    ],
];
