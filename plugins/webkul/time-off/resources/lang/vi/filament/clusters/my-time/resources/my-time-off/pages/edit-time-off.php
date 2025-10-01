<?php

return [
    'notification' => [
        'title'              => 'Nghỉ phép đã được cập nhật',
        'body'               => 'Nghỉ phép đã được cập nhật thành công.',
        'action_not_allowed' => [
            'title' => 'Hành động không được phép',
            'body'  => 'Bạn không thể chỉnh sửa yêu cầu nghỉ phép này vì nó đang ở trạng thái khóa.',
        ],
        'overlap' => [
            'title' => 'Yêu cầu nghỉ phép trùng lặp',
            'body'  => 'Các ngày nghỉ phép đã chọn trùng với yêu cầu hiện có. Vui lòng chọn ngày khác.',
        ],
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'title' => 'Nghỉ phép đã được xóa',
                'body'  => 'Nghỉ phép đã được xóa thành công.',
            ],
        ],
    ],
];
