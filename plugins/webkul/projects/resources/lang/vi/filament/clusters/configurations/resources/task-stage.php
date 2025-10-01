<?php

return [
    'navigation' => [
        'title' => 'Giai đoạn công việc',
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
                    'title' => 'Giai đoạn công việc đã cập nhật',
                    'body'  => 'Giai đoạn công việc đã được cập nhật thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Giai đoạn công việc đã khôi phục',
                    'body'  => 'Giai đoạn công việc đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Giai đoạn công việc đã xóa',
                    'body'  => 'Giai đoạn công việc đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Giai đoạn công việc đã xóa vĩnh viễn',
                        'body'  => 'Giai đoạn công việc đã được xóa vĩnh viễn thành công.',
                    ],
                    'error' => [
                        'title' => 'Không thể xóa giai đoạn công việc',
                        'body'  => 'Giai đoạn công việc không thể bị xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Các giai đoạn công việc đã khôi phục',
                    'body'  => 'Các giai đoạn công việc đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các giai đoạn công việc đã xóa',
                    'body'  => 'Các giai đoạn công việc đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Các giai đoạn công việc đã xóa vĩnh viễn',
                    'body'  => 'Các giai đoạn công việc đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],
    ],
];