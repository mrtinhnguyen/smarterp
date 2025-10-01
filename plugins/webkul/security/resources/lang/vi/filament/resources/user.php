<?php

return [
    'title' => 'Người dùng',

    'navigation' => [
        'title' => 'Người dùng',
        'group' => 'Cài đặt',
    ],

    'global-search' => [
        'name'  => 'Tên',
        'email' => 'Email',
    ],

    'form' => [
        'sections' => [
            'general-information' => [
                'title'  => 'Thông tin chung',
                'fields' => [
                    'name'                  => 'Tên',
                    'email'                 => 'Email',
                    'password'              => 'Mật khẩu',
                    'password-confirmation' => 'Xác nhận mật khẩu',
                ],
            ],

            'permissions' => [
                'title'  => 'Quyền hạn',
                'fields' => [
                    'roles'               => 'Vai trò',
                    'permissions'         => 'Quyền hạn',
                    'resource-permission' => 'Quyền tài nguyên',
                    'teams'               => 'Nhóm',
                ],
            ],

            'avatar' => [
                'title' => 'Ảnh đại diện',
            ],

            'lang-and-status' => [
                'title'  => 'Ngôn ngữ & Trạng thái',
                'fields' => [
                    'language' => 'Ngôn ngữ ưa thích',
                    'status'   => 'Trạng thái',
                ],
            ],

            'multi-company' => [
                'title'  => 'Đa công ty',
                'fields' => [
                    'companies' => 'Công ty',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Tên',
            'email'      => 'Email',
            'roles'      => 'Vai trò',
            'teams'      => 'Nhóm',
            'companies'  => 'Công ty',
            'status'     => 'Trạng thái',
            'language'   => 'Ngôn ngữ',
            'created-at' => 'Được tạo lúc',
            'updated-at' => 'Được cập nhật lúc',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo người dùng',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Người dùng đã được xóa',
                    'body'  => 'Người dùng đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các người dùng đã được xóa',
                    'body'  => 'Các người dùng đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general-information' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'name'  => 'Tên',
                    'email' => 'Email',
                    'status' => 'Trạng thái',
                    'language' => 'Ngôn ngữ',
                ],
            ],

            'permissions' => [
                'title' => 'Quyền hạn',
                'entries' => [
                    'roles' => 'Vai trò',
                    'teams' => 'Nhóm',
                ],
            ],

            'multi-company' => [
                'title' => 'Đa công ty',
                'entries' => [
                    'companies' => 'Công ty',
                ],
            ],
        ],
    ],
];
