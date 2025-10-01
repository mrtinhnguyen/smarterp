<?php

return [
    'heading' => [
        'title' => 'Tổng quan nghỉ phép',
    ],

    'modal-actions' => [
        'edit' => [
            'title' => 'Chỉnh sửa',
            'notification' => [
                'title' => 'Nghỉ phép đã được cập nhật',
                'body'  => 'Yêu cầu nghỉ phép đã được cập nhật thành công.',
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
        ],
    ],

    'form' => [
        'fields' => [
            'time-off-type'     => 'Loại nghỉ phép',
            'request-date-from' => 'Ngày yêu cầu từ',
            'request-date-to'   => 'Ngày yêu cầu đến',
            'period'            => 'Kỳ',
            'half-day'          => 'Nửa ngày',
            'requested-days'    => 'Yêu cầu (Ngày/Giờ)',
            'description'       => 'Mô tả',
        ],
    ],

    'infolist' => [
        'entries' => [
            'time-off-type'           => 'Loại nghỉ phép',
            'request-date-from'       => 'Ngày yêu cầu từ',
            'request-date-to'         => 'Ngày yêu cầu đến',
            'description'             => 'Mô tả',
            'description-placeholder' => 'Không có mô tả',
            'duration'                => 'Thời gian',
            'status'                  => 'Trạng thái',
        ],
    ],
];
