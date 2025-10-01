<?php

return [
    'title' => 'Hủy',
    'modal' => [
        'heading'     => 'Hủy báo giá',
        'description' => 'Bạn có chắc chắn muốn hủy báo giá này không?',
    ],

    'footer-actions' => [
        'send-and-cancel' => [
            'title' => 'Gửi & Hủy',

            'notification' => [
                'cancelled' => [
                    'title' => 'Báo giá đã hủy',
                    'body'  => 'Báo giá đã được hủy và email đã được gửi thành công.',
                ],
            ],
        ],

        'cancel' => [
            'title' => 'Hủy',

            'notification' => [
                'cancelled' => [
                    'title' => 'Báo giá đã hủy',
                    'body'  => 'Báo giá đã được hủy thành công.',
                ],
            ],
        ],

        'close' => [
            'title' => 'Đóng',
        ],
    ],

    'form' => [
        'fields' => [
            'partner'             => 'Đối tác',
            'subject'             => 'Chủ đề',
            'subject-placeholder' => 'Chủ đề',
            'subject-default'     => 'Báo giá :name đã bị hủy cho Đơn hàng bán #:id',
            'description'         => 'Mô tả',
            'description-default' => 'Kính gửi <b>:partner_name</b>, <br/><br/>Chúng tôi xin thông báo rằng Đơn hàng bán <b>:name</b> của bạn đã bị hủy. Do đó, sẽ không có khoản phí nào được áp dụng cho đơn hàng này. Nếu cần hoàn tiền, chúng tôi sẽ xử lý trong thời gian sớm nhất.<br/><br/>Nếu bạn có bất kỳ câu hỏi nào hoặc cần hỗ trợ thêm, vui lòng liên hệ với chúng tôi.',
        ],
    ],
];