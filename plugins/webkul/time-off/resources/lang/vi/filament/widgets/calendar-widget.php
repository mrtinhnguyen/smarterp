<?php

return [
    'heading' => [
        'title' => 'Yêu cầu nghỉ phép',
    ],

    'modal-actions' => [
        'edit' => [
            'title'                         => 'Chỉnh sửa',
            'duration-display'              => ':count ngày làm việc',
            'duration-display-with-weekend' => ':count ngày làm việc (+ :weekend ngày cuối tuần)',

            'notification' => [
                'title' => 'Nghỉ phép đã được cập nhật',
                'body'  => 'Yêu cầu nghỉ phép của bạn đã được cập nhật thành công.',
            ],
        ],

        'delete' => [
            'title' => 'Xóa',
        ],
    ],

    'view-action' => [
        'title'       => 'Xem',
        'description' => 'Xem yêu cầu nghỉ phép',
    ],

    'header-actions' => [
        'create' => [
            'title'       => 'Nghỉ phép mới',
            'description' => 'Tạo yêu cầu nghỉ phép',

            'notification' => [
                'title' => 'Nghỉ phép đã được tạo',
                'body'  => 'Yêu cầu nghỉ phép đã được tạo thành công.',
            ],

            'employee-not-found' => [
                'notification' => [
                    'title' => 'Không tìm thấy nhân viên',
                    'body'  => 'Vui lòng thêm nhân viên vào hồ sơ của bạn trước khi tạo yêu cầu nghỉ phép.',
                ],
            ],

            'success' => [
                'notification' => [
                    'title' => 'Nghỉ phép đã được tạo',
                    'body'  => 'Yêu cầu nghỉ phép của bạn đã được tạo thành công.',
                ],
            ],
        ],
    ],

    'form' => [
        'title'       => 'Yêu cầu nghỉ phép',
        'description' => 'Tạo hoặc chỉnh sửa yêu cầu nghỉ phép của bạn với các chi tiết sau:',

        'fields' => [
            'time-off-type'             => 'Loại nghỉ phép',
            'time-off-type-placeholder' => 'Chọn loại nghỉ phép',
            'time-off-type-helper'      => 'Chọn loại nghỉ phép bạn đang yêu cầu.',
            'request-date-from'         => 'Ngày yêu cầu từ',
            'request-date-to'           => 'Ngày yêu cầu đến',
            'period'                    => 'Kỳ',
            'half-day'                  => 'Nửa ngày',
            'half-day-helper'           => 'Bật/tắt cho nghỉ nửa ngày.',
            'requested-days'            => 'Yêu cầu (Ngày/Giờ)',
            'description'               => 'Mô tả',
            'description-placeholder'   => 'Không có mô tả',
            'description-helper'        => 'Cung cấp mô tả ngắn gọn về yêu cầu nghỉ phép của bạn.',
            'duration'                  => 'Thời gian',
            'please-select-dates'       => 'Vui lòng chọn ngày yêu cầu từ và đến.',
        ],
    ],

    'infolist' => [
        'title'       => 'Chi tiết nghỉ phép',
        'description' => 'Đây là chi tiết yêu cầu nghỉ phép của bạn:',
        'entries'     => [
            'time-off-type'           => 'Loại nghỉ phép',
            'request-date-from'       => 'Ngày yêu cầu từ',
            'request-date-to'         => 'Ngày yêu cầu đến',
            'description'             => 'Mô tả',
            'description-placeholder' => 'Không có mô tả',
            'duration'                => 'Thời gian',
            'status'                  => 'Trạng thái',
        ],
    ],

    'events' => [
        'title' => ':name Trạng thái :status: :days ngày',
    ],
];
