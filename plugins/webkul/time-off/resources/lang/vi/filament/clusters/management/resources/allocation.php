<?php

return [
    'title' => 'Phân bổ',

    'model-label' => 'Phân bổ',

    'navigation' => [
        'title' => 'Phân bổ',
    ],

    'form' => [
        'fields' => [
            'name'                => 'Tên',
            'name-placeholder'    => 'Loại nghỉ phép (Từ ngày bắt đầu hiệu lực đến ngày kết thúc hiệu lực/không giới hạn)',
            'time-off-type'       => 'Loại nghỉ phép',
            'employee-name'       => 'Tên nhân viên',
            'allocation-type'     => 'Loại phân bổ',
            'validity-period'     => 'Kỳ hiệu lực',
            'date-from'           => 'Từ ngày',
            'date-to'             => 'Đến ngày',
            'date-to-placeholder' => 'Không giới hạn',
            'allocation'          => 'Phân bổ',
            'allocation-suffix'   => 'Số ngày',
            'reason'              => 'Lý do',
        ],
    ],

    'table' => [
        'columns' => [
            'employee-name'   => 'Nhân viên',
            'time-off-type'   => 'Loại nghỉ phép',
            'amount'          => 'Số lượng',
            'allocation-type' => 'Loại phân bổ',
            'status'          => 'Trạng thái',
        ],

        'groups' => [
            'time-off-type'   => 'Loại nghỉ phép',
            'employee-name'   => 'Tên nhân viên',
            'allocation-type' => 'Loại phân bổ',
            'status'          => 'Trạng thái',
            'start-date'      => 'Ngày bắt đầu',
        ],

        'actions' => [
            'approve' => [
                'title' => [
                    'validate' => 'Xác thực',
                    'approve'  => 'Phê duyệt',
                ],
                'notification' => [
                    'title' => 'Phân bổ đã được phê duyệt',
                    'body'  => 'Phân bổ đã được phê duyệt thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Phân bổ đã được xóa',
                    'body'  => 'Phân bổ đã được xóa thành công.',
                ],
            ],

            'refused' => [
                'title'        => 'Từ chối',
                'notification' => [
                    'title' => 'Phân bổ đã bị từ chối',
                    'body'  => 'Phân bổ đã bị từ chối thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Các phân bổ đã được xóa',
                    'body'  => 'Các phân bổ đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'allocation-details' => [
                'title'   => 'Chi tiết phân bổ',
                'entries' => [
                    'name'                => 'Tên',
                    'time-off-type'       => 'Loại nghỉ phép',
                    'allocation-type'     => 'Loại phân bổ',
                ],
            ],

            'validity-period' => [
                'title'   => 'Kỳ hiệu lực',
                'entries' => [
                    'date-from' => 'Từ ngày',
                    'date-to'   => 'Đến ngày',
                    'reason'    => 'Lý do',
                ],
            ],
            'allocation-status' => [
                'title'   => 'Trạng thái phân bổ',
                'entries' => [
                    'date-to-placeholder' => 'Không giới hạn',
                    'allocation'          => 'Số ngày',
                    'allocation-value'    => ':days ngày',
                    'state'               => 'Trạng thái',
                ],
            ],
        ],
    ],
];
