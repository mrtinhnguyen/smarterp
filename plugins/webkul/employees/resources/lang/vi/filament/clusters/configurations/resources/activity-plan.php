<?php

return [
    'navigation' => [
        'title' => 'Kế hoạch Hoạt động',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Thông tin Chung',
                'fields' => [
                    'name'       => 'Tên',
                    'status'     => 'Trạng thái',
                    'department' => 'Phòng ban',
                    'company'    => 'Công ty',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Tên',
            'status'     => 'Trạng thái',
            'department' => 'Phòng ban',
            'company'    => 'Công ty',
            'manager'    => 'Quản lý',
            'created-by' => 'Tạo bởi',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'filters' => [
            'name'           => 'Tên',
            'plugin'         => 'Plugin',
            'activity-types' => 'Loại Hoạt động',
            'company'        => 'Công ty',
            'department'     => 'Phòng ban',
            'is-active'      => 'Trạng thái',
            'updated-at'     => 'Ngày cập nhật',
            'created-at'     => 'Ngày tạo',
        ],

        'groups' => [
            'status'     => 'Trạng thái',
            'name'       => 'Tên',
            'created-by' => 'Tạo bởi',
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

        'activity-plan' => [
            'create' => [
                'notification' => [
                    'title' => 'Kế hoạch hoạt động đã tạo',
                    'body'  => 'Kế hoạch hoạt động đã được tạo thành công.',
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
        'sections' => [
            'general' => [
                'title'   => 'Thông tin Chung',
                'entries' => [
                    'name'       => 'Tên',
                    'status'     => 'Trạng thái',
                    'department' => 'Phòng ban',
                    'manager'    => 'Quản lý',
                    'company'    => 'Công ty',
                ],
            ],
        ],
    ],
];