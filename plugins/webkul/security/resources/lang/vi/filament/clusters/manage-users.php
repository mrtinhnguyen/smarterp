<?php

return [
    'breadcrumb' => 'Quản lý người dùng',
    'title'      => 'Quản lý người dùng',
    'group'      => 'Chung',

    'navigation' => [
        'label' => 'Quản lý người dùng',
    ],

    'form' => [
        'enable-user-invitation' => [
            'label'       => 'Bật mời người dùng',
            'helper-text' => 'Cho phép người dùng mời người dùng khác vào ứng dụng.',
        ],

        'enable-reset-password' => [
            'label'       => 'Bật đặt lại mật khẩu',
            'helper-text' => 'Cho phép người dùng đặt lại mật khẩu của họ.',
        ],

        'default-role' => [
            'label'       => 'Vai trò mặc định',
            'helper-text' => 'Vai trò mặc định được gán cho người dùng mới.',
        ],

        'default-company' => [
            'label'       => 'Công ty mặc định',
            'helper-text' => 'Công ty mặc định được gán cho người dùng mới.',
        ],
    ],
];
