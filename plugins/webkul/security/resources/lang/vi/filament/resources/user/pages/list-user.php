<?php

return [
    'tabs' => [
        'all'      => 'Tất cả người dùng',
        'archived' => 'Người dùng đã lưu trữ',
    ],

    'header-actions' => [
        'invite' => [
            'title' => 'Mời người dùng',
            'modal' => [
                'submit-action-label' => 'Mời người dùng',
            ],
            'form' => [
                'email' => 'Email',
            ],
            'notification' => [
                'success' => [
                    'title' => 'Người dùng đã được mời',
                    'body'  => 'Người dùng đã được mời thành công',
                ],
                'error' => [
                    'title' => 'Mời người dùng thất bại',
                    'body'  => 'Hệ thống gặp lỗi không mong muốn khi cố gắng gửi lời mời người dùng.',
                ],

                'default-company-error' => [
                    'title' => 'Công ty mặc định chưa được thiết lập',
                    'body'  => 'Vui lòng thiết lập công ty mặc định từ cài đặt, trước khi mời người dùng.',
                ],
            ],
        ],

        'create' => [
            'label' => 'Người dùng mới',
        ],
    ],
];