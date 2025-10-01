<?php

return [
    'navigation' => [
        'title' => 'Giai đoạn dự án',
    ],

    'form' => [
        'name' => 'Tên',
    ],

    'table' => [
        'columns' => [
            'name'       => 'Tên',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'groups' => [
            'name'         => 'Tên',
            'is-completed' => 'Đã hoàn thành',
            'project'      => 'Dự án',
            'created-at'   => 'Ngày tạo',
        ],

        'filters' => [
            'is-completed' => 'Đã hoàn thành',
            'project'      => 'Dự án',
            'creator'      => 'Người tạo',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Giai đoạn dự án đã được cập nhật',
                    'body'  => 'Giai đoạn dự án đã được cập nhật thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Giai đoạn dự án đã được khôi phục',
                    'body'  => 'Giai đoạn dự án đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Giai đoạn dự án đã được xóa',
                    'body'  => 'Giai đoạn dự án đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Giai đoạn dự án đã được xóa vĩnh viễn',
                        'body'  => 'Giai đoạn dự án đã được xóa vĩnh viễn thành công.',
                    ],
                    'error' => [
                        'title' => 'Không thể xóa giai đoạn dự án',
                        'body'  => 'Giai đoạn dự án không thể được xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Các giai đoạn dự án đã được khôi phục',
                    'body'  => 'Các giai đoạn dự án đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các giai đoạn dự án đã được xóa',
                    'body'  => 'Các giai đoạn dự án đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Các giai đoạn dự án đã được xóa vĩnh viễn',
                    'body'  => 'Các giai đoạn dự án đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],
    ],
];
