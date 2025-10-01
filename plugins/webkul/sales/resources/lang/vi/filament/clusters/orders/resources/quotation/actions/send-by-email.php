<?php

return [
    'title'        => 'Gửi qua Email',
    'resend-title' => 'Gửi lại qua Email',
    'quotation'    => 'báo giá',
    'quotations'   => 'báo giá',

    'modal' => [
        'heading' => 'Gửi báo giá qua Email',
    ],

    'form' => [
        'fields' => [
            'partners'    => 'Đối tác',
            'subject'     => 'Chủ đề',
            'description' => 'Mô tả',
            'attachment'  => 'Tệp đính kèm',
        ],
    ],

    'actions' => [
        'notification' => [
            'email' => [
                'no_recipients' => [
                    'title' => 'Không có người nhận được chọn',
                    'body'  => 'Vui lòng chọn ít nhất một đối tác để gửi báo giá.',
                ],

                'all_success' => [
                    'title' => 'Báo giá đã gửi!',
                    'body'  => ':plural của bạn đã được gửi thành công đến: :recipients',
                ],

                'all_failed' => [
                    'title' => 'Không thể gửi báo giá',
                    'body'  => 'Chúng tôi gặp vấn đề khi gửi báo giá của bạn: :failures',
                ],

                'partial_success' => [
                    'title'       => 'Một số báo giá đã gửi',
                    'sent_part'   => 'Gửi thành công đến: :recipients',
                    'failed_part' => 'Không thể gửi đến: :failures',
                ],

                'failure_item' => ':partner (:reason)',
            ],
        ],
    ],

];