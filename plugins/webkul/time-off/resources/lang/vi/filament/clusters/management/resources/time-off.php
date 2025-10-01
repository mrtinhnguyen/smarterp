<?php

return [
    'title' => 'Nghỉ phép',

    'model-label' => 'Nghỉ phép',

    'navigation' => [
        'title' => 'Nghỉ phép',
    ],

    'form' => [
        'fields' => [
            'employee-name'     => 'Tên nhân viên',
            'department-name'   => 'Tên phòng ban',
            'time-off-type'     => 'Loại nghỉ phép',
            'date'              => 'Ngày',
            'dates'             => 'Các ngày',
            'request-date-from' => 'Ngày yêu cầu từ',
            'request-date-to'   => 'Ngày yêu cầu đến',
            'description'       => 'Mô tả',
            'period'            => 'Kỳ',
            'half-day'          => 'Nửa ngày',
            'requested-days'    => 'Yêu cầu (Ngày/Giờ)',
            'description'       => 'Mô tả',
            'attachment'        => 'Tệp đính kèm',
            'day'               => ':day ngày',
            'days'              => ':days ngày',
        ],
    ],

    'table' => [
        'columns' => [
            'employee-name'  => 'Nhân viên',
            'time-off-type'  => 'Loại nghỉ phép',
            'description'    => 'Mô tả',
            'date-from'      => 'Từ ngày',
            'date-to'        => 'Đến ngày',
            'duration'       => 'Thời gian',
            'status'         => 'Trạng thái',
        ],

        'groups' => [
            'employee-name' => 'Nhân viên',
            'time-off-type' => 'Loại nghỉ phép',
            'status'        => 'Trạng thái',
            'start-date'    => 'Ngày bắt đầu',
            'start-to'      => 'Ngày kết thúc',
            'updated-at'    => 'Ngày cập nhật',
            'created-at'    => 'Ngày tạo',
        ],

        'actions' => [
            'approve' => [
                'title' => [
                    'validate' => 'Xác thực',
                    'approve'  => 'Phê duyệt',
                ],
                'notification' => [
                    'title' => 'Nghỉ phép đã được phê duyệt',
                    'body'  => 'Nghỉ phép đã được phê duyệt thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Nghỉ phép đã được xóa',
                    'body'  => 'Nghỉ phép đã được xóa thành công.',
                ],
            ],

            'refused' => [
                'title'        => 'Từ chối',
                'notification' => [
                    'title' => 'Nghỉ phép đã bị từ chối',
                    'body'  => 'Nghỉ phép đã bị từ chối thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Nghỉ phép đã được xóa',
                    'body'  => 'Nghỉ phép đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'employee-name'     => 'Tên nhân viên',
            'department-name'   => 'Tên phòng ban',
            'time-off-type'     => 'Loại nghỉ phép',
            'date'              => 'Ngày',
            'dates'             => 'Các ngày',
            'request-date-from' => 'Ngày yêu cầu từ',
            'request-date-to'   => 'Ngày yêu cầu đến',
            'description'       => 'Mô tả',
            'period'            => 'Kỳ',
            'half-day'          => 'Nửa ngày',
            'requested-days'    => 'Yêu cầu (Ngày/Giờ)',
            'attachment'        => 'Tệp đính kèm',
            'day'               => ':day ngày',
            'days'              => ':days ngày',
            'date-from'         => 'Từ ngày',
            'date-to'           => 'Đến ngày',
            'status'            => 'Trạng thái',
        ],
    ],
];
