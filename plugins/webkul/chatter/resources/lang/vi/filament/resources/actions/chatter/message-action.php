<?php

return [
    'setup' => [
        'title'        => 'Gửi tin nhắn',
        'submit-title' => 'Gửi',

        'form' => [
            'fields' => [
                'hide-subject'            => 'Ẩn chủ đề',
                'add-subject'             => 'Thêm chủ đề',
                'subject'                 => 'Chủ đề',
                'write-message-here'      => 'Viết tin nhắn của bạn ở đây',
                'attachments-helper-text' => 'Kích thước tệp tối đa: 10MB. Loại được phép: Hình ảnh, PDF, Word, Excel, Văn bản',
            ],
        ],

        'actions' => [
            'notification' => [
                'success' => [
                    'title' => 'Tin nhắn đã được gửi',
                    'body'  => 'Tin nhắn của bạn đã được gửi thành công.',
                ],

                'error' => [
                    'title' => 'Lỗi gửi tin nhắn',
                    'body'  => 'Không thể gửi tin nhắn của bạn',
                ],
            ],

            'mail' => [
                'subject' => ':record_name',
            ],
        ],
    ],
];
