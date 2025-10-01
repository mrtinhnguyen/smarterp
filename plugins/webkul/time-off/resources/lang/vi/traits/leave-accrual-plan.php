<?php

return [
    'form' => [
        'fields' => [
            'accrual-amount'              => 'Số ngày tích lũy',
            'accrual-value-type'          => 'Loại giá trị tích lũy',
            'accrual-frequency'           => 'Tần suất tích lũy',
            'accrual-day'                 => 'Ngày tích lũy',
            'day-of-month'                => 'Ngày trong tháng',
            'first-day-of-month'          => 'Ngày đầu tiên của tháng',
            'second-day-of-month'         => 'Ngày thứ hai của tháng',
            'first-period-month'          => 'Tháng của kỳ đầu tiên',
            'first-period-day'            => 'Ngày của kỳ đầu tiên',
            'second-period-month'         => 'Tháng của kỳ thứ hai',
            'second-period-day'           => 'Ngày của kỳ thứ hai',
            'first-period-year'           => 'Năm của kỳ đầu tiên',
            'cap-accrued-time'            => 'Giới hạn thời gian tích lũy',
            'days'                        => 'Ngày',
            'start-count'                 => 'Số lượng bắt đầu',
            'start-type'                  => 'Loại bắt đầu',
            'action-with-unused-accruals' => 'Hành động với số ngày chưa sử dụng',
            'milestone-cap'               => 'Giới hạn cột mốc',
            'maximum-leave-yearly'        => 'Số ngày nghỉ tối đa hàng năm',
            'accrual-validity'            => 'Hiệu lực tích lũy',
            'accrual-validity-count'      => 'Số lượng hiệu lực tích lũy',
            'accrual-validity-type'       => 'Loại hiệu lực tích lũy',
            'advanced-accrual-settings'   => 'Cài đặt tích lũy nâng cao',
            'after-allocation-start'      => 'Sau ngày bắt đầu phân bổ',
        ],
    ],

    'table' => [
        'columns' => [
            'accrual-amount'     => 'Số ngày tích lũy',
            'accrual-value-type' => 'Loại giá trị tích lũy',
            'frequency'          => 'Tần suất',
            'maximum-leave-days' => 'Số ngày nghỉ tối đa',
        ],

        'groups' => [
            'accrual-amount'       => 'Số ngày tích lũy',
            'accrual-value-type'   => 'Loại giá trị tích lũy',
            'frequency'            => 'Tần suất',
            'maximum-leave-days'   => 'Số ngày nghỉ tối đa',
        ],

        'filters' => [
            'accrual-frequency'           => 'Tần suất tích lũy',
            'start-type'                  => 'Loại bắt đầu',
            'cap-accrued-time'            => 'Giới hạn thời gian tích lũy',
            'action-with-unused-accruals' => 'Hành động với số ngày chưa sử dụng',
            'accrual-amount'              => 'Số ngày tích lũy',
            'accrual-frequency'           => 'Tần suất tích lũy',
            'start-type'                  => 'Loại bắt đầu',
            'created-at'                  => 'Ngày tạo',
            'updated-at'                  => 'Ngày cập nhật',
        ],

        'header-actions' => [
            'created' => [
                'title' => 'Kế hoạch tích lũy nghỉ phép mới',

                'notification' => [
                    'title' => 'Kế hoạch tích lũy nghỉ phép đã được tạo',
                    'body'  => 'Kế hoạch tích lũy nghỉ phép đã được tạo thành công.',
                ],
            ],
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Kế hoạch tích lũy nghỉ phép đã được cập nhật',
                    'body'  => 'Kế hoạch tích lũy nghỉ phép đã được cập nhật thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Kế hoạch tích lũy nghỉ phép đã được xóa',
                    'body'  => 'Kế hoạch tích lũy nghỉ phép đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [

            'delete' => [
                'notification' => [
                    'title' => 'Các kế hoạch tích lũy nghỉ phép đã được xóa',
                    'body'  => 'Các kế hoạch tích lũy nghỉ phép đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'accrual-amount'              => 'Số ngày tích lũy',
            'accrual-value-type'          => 'Loại giá trị tích lũy',
            'accrual-frequency'           => 'Tần suất tích lũy',
            'accrual-day'                 => 'Ngày tích lũy',
            'day-of-month'                => 'Ngày trong tháng',
            'first-day-of-month'          => 'Ngày đầu tiên của tháng',
            'second-day-of-month'         => 'Ngày thứ hai của tháng',
            'first-period-month'          => 'Tháng của kỳ đầu tiên',
            'first-period-day'            => 'Ngày của kỳ đầu tiên',
            'second-period-month'         => 'Tháng của kỳ thứ hai',
            'second-period-day'           => 'Ngày của kỳ thứ hai',
            'first-period-year'           => 'Năm của kỳ đầu tiên',
            'cap-accrued-time'            => 'Giới hạn thời gian tích lũy',
            'days'                        => 'Ngày',
            'start-count'                 => 'Số lượng bắt đầu',
            'start-type'                  => 'Loại bắt đầu',
            'action-with-unused-accruals' => 'Hành động với số ngày chưa sử dụng',
            'milestone-cap'               => 'Giới hạn cột mốc',
            'maximum-leave-yearly'        => 'Số ngày nghỉ tối đa hàng năm',
            'accrual-validity'            => 'Hiệu lực tích lũy',
            'accrual-validity-count'      => 'Số lượng hiệu lực tích lũy',
            'accrual-validity-type'       => 'Loại hiệu lực tích lũy',
            'advanced-accrual-settings'   => 'Cài đặt tích lũy nâng cao',
            'after-allocation-start'      => 'Sau ngày bắt đầu phân bổ',
        ],
    ],
];
