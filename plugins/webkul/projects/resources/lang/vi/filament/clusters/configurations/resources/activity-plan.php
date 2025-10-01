<?php

return [
    'navigation' => [
        'title' => 'Kế hoạch hoạt động',
    ],

    'form' => [
        'name'   => 'Tên',
        'status' => 'Trạng thái',
    ],

    'table' => [
        'columns' => [
            'name'       => 'Tên',
            'status'     => 'Trạng thái',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'groups' => [
            'name'       => 'Tên',
            'status'     => 'Trạng thái',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Kế hoạch hoạt động đã khôi phục',
                    'body'  => 'Kế hoạch hoạt động đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Kế hoạch hoạt động đã xóa',
                    'body'  => 'Kế hoạch hoạt động đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Kế hoạch hoạt động đã xóa vĩnh viễn',
                    'body'  => 'Kế hoạch hoạt động đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Các kế hoạch hoạt động đã khôi phục',
                    'body'  => 'Các kế hoạch hoạt động đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các kế hoạch hoạt động đã xóa',
                    'body'  => 'Các kế hoạch hoạt động đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Các kế hoạch hoạt động đã xóa vĩnh viễn',
                    'body'  => 'Các kế hoạch hoạt động đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],

        'empty-state' => [
            'create' => [
                'notification' => [
                    'title' => 'Kế hoạch hoạt động đã tạo',
                    'body'  => 'Kế hoạch hoạt động đã được tạo thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name'   => 'Tên',
        'status' => 'Trạng thái',
    ],
];