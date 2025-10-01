<?php

return [
    'label' => 'Gửi PO qua Email',

    'form' => [
        'fields' => [
            'to'      => 'Đến',
            'subject' => 'Tiêu đề',
            'message' => 'Tin nhắn',
        ],
    ],

    'action' => [
        'notification' => [
            'success' => [
                'title' => 'Email đã được gửi',
                'body'  => 'Email đã được gửi thành công.',
            ],
        ],
    ],
];

