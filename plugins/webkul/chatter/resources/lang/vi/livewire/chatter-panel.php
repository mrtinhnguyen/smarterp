<?php

return [
    'placeholders' => [
        'no-record-found' => 'Không tìm thấy bản ghi.',
        'loading'         => 'Đang tải Chatter...',
    ],

    'activity-infolist' => [
        'title' => 'Hoạt động',
    ],

    'cancel-activity-plan-action' => [
        'title' => 'Hủy hoạt động',
    ],

    'delete-message-action' => [
        'title' => 'Xóa tin nhắn',
    ],

    'edit-activity' => [
        'title' => 'Chỉnh sửa hoạt động',

        'form' => [
            'fields' => [
                'activity-plan' => 'Kế hoạch hoạt động',
                'plan-date'     => 'Ngày kế hoạch',
                'plan-summary'  => 'Tóm tắt kế hoạch',
                'activity-type' => 'Loại hoạt động',
                'due-date'      => 'Ngày đến hạn',
                'summary'       => 'Tóm tắt',
                'assigned-to'   => 'Giao cho',
            ],
        ],

        'action' => [
            'notification' => [
                'success' => [
                    'title' => 'Hoạt động đã được cập nhật',
                    'body'  => 'Hoạt động đã được cập nhật thành công.',
                ],
            ],
        ],
    ],

    'process-message' => [
        'original-note' => '<br><div><span class="font-bold">Ghi chú gốc</span>: :body</div>',
        'original-note' => '<br><div><span class="font-bold">Ghi chú gốc</span>: :body</div>',
        'feedback'      => '<div><span class="font-bold">Phản hồi</span>: <p>:feedback</p></div>',
    ],

    'mark-as-done' => [
        'title' => 'Đánh dấu hoàn thành',
        'form'  => [
            'fields' => [
                'feedback' => 'Phản hồi',
            ],
        ],

        'footer-actions' => [
            'label' => 'Hoàn thành & Lên lịch tiếp theo',

            'actions' => [
                'notification' => [
                    'mark-as-done' => [
                        'title' => 'Hoạt động đã được đánh dấu hoàn thành',
                        'body'  => 'Hoạt động đã được đánh dấu hoàn thành thành công.',
                    ],
                ],
            ],
        ],
    ],
];
