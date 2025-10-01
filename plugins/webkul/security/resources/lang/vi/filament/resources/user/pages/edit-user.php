<?php

return [
    'notification' => [
        'title' => 'Người dùng đã cập nhật',
        'body'  => 'Người dùng đã được cập nhật thành công.',
    ],

    'header-actions' => [
        'change-password' => [
            'label' => 'Đổi mật khẩu',

            'notification' => [
                'title' => 'Mật khẩu đã thay đổi',
                'body'  => 'Mật khẩu đã được thay đổi thành công.',
            ],

            'form' => [
                'new-password'         => 'Mật khẩu mới',
                'confirm-new-password' => 'Xác nhận mật khẩu mới',
            ],
        ],

        'delete' => [
            'notification' => [
                'title' => 'Người dùng đã xóa',
                'body'  => 'Người dùng đã được xóa thành công.',
            ],
        ],
    ],
];