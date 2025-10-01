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
                    'title' => 'Kế hoạch hoạt động đã được khôi phục',
                    'body'  => 'Kế hoạch hoạt động đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Kế hoạch hoạt động đã được xóa',
                    'body'  => 'Kế hoạch hoạt động đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Kế hoạch hoạt động đã được xóa vĩnh viễn',
                    'body'  => 'Kế hoạch hoạt động đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Các kế hoạch hoạt động đã được khôi phục',
                    'body'  => 'Các kế hoạch hoạt động đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các kế hoạch hoạt động đã được xóa',
                    'body'  => 'Các kế hoạch hoạt động đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Các kế hoạch hoạt động đã được xóa vĩnh viễn',
                    'body'  => 'Các kế hoạch hoạt động đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],

        'empty-state' => [
            'create' => [
                'notification' => [
                    'title' => 'Kế hoạch hoạt động đã được tạo',
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
