<?php

return [
    'notification' => [
        'success' => [
            'title' => 'Nghỉ phép đã được tạo',
            'body'  => 'Nghỉ phép đã được tạo thành công.',
        ],

        'overlap' => [
            'title' => 'Yêu cầu nghỉ phép trùng lặp',
            'body'  => 'Các ngày nghỉ phép đã chọn trùng với yêu cầu hiện có. Vui lòng chọn ngày khác.',
        ],

        'warning' => [
            'title' => 'Bạn không có tài khoản nhân viên',
            'body'  => 'Bạn không có tài khoản nhân viên. Vui lòng liên hệ quản trị viên.',
        ],

        'invalid_half_day_leave' => [
            'title' => 'Yêu cầu nghỉ phép không hợp lệ',
            'body'  => 'Nghỉ nửa ngày chỉ có thể áp dụng cho một ngày duy nhất.',
        ],

        'leave_request_denied_no_allocation' => [
            'title' => 'Yêu cầu nghỉ phép bị từ chối',
            'body'  => 'Bạn không có nghỉ phép được phân bổ cho :leaveType.',
        ],

        'leave_request_denied_insufficient_balance' => [
            'title' => 'Yêu cầu nghỉ phép bị từ chối',
            'body'  => 'Số dư nghỉ phép không đủ. Bạn có :available_balance ngày khả dụng. Yêu cầu: :requested_days ngày.',
        ],
    ],
];
