<?php

return [
    'setup' => [
        'title'        => 'Ghi chú nhật ký',
        'submit-title' => 'Ghi',

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
                    'title' => 'Ghi chú nhật ký đã được thêm',
                    'body'  => 'Ghi chú nhật ký của bạn đã được thêm thành công.',
                ],

                'error' => [
                    'title' => 'Lỗi thêm ghi chú',
                    'body'  => 'Không thể thêm ghi chú nhật ký của bạn',
                ],
            ],
        ],
    ],
];
