<?php

return [
    'setup' => [
        'title'               => 'Người theo dõi',
        'submit-action-title' => 'Thêm người theo dõi',
        'tooltip'             => 'Thêm người theo dõi',

        'form' => [
            'fields' => [
                'recipients'  => 'Người nhận',
                'notify-user' => 'Thông báo người dùng',
                'add-a-note'  => 'Thêm ghi chú',
            ],
        ],

        'actions' => [
            'notification' => [
                'success' => [
                    'title' => 'Đã thêm người theo dõi',
                    'body'  => '":partner" đã được thêm làm người theo dõi.',
                ],

                'error' => [
                    'title' => 'Lỗi thêm người theo dõi',
                    'body'  => 'Không thể thêm ":partner" làm người theo dõi',
                ],
            ],

            'mail' => [
                'subject' => 'Lời mời theo dõi :model: :department',
            ],
        ],
    ],
];
