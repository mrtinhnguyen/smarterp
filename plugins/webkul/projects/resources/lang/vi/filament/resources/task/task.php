<?php

return [
    'title' => 'Nhiệm vụ',

    'navigation' => [
        'title' => 'Nhiệm vụ',
        'group' => 'Dự án',
    ],

    'global-search' => [
        'project'   => 'Dự án',
        'customer'  => 'Khách hàng',
        'milestone' => 'Cột mốc',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',

                'fields' => [
                    'title'             => 'Tiêu đề',
                    'title-placeholder' => 'Tiêu đề nhiệm vụ...',
                    'tags'              => 'Thẻ',
                    'name'              => 'Tên',
                    'color'             => 'Màu sắc',
                    'description'       => 'Mô tả',
                    'project'           => 'Dự án',
                    'status'            => 'Trạng thái',
                    'start_date'        => 'Ngày bắt đầu',
                    'end_date'          => 'Ngày kết thúc',
                ],
            ],

            'additional' => [
                'title' => 'Thông tin bổ sung',
            ],

            'settings' => [
                'title' => 'Cài đặt',

                'fields' => [
                    'project'                     => 'Dự án',
                    'milestone'                   => 'Cột mốc',
                    'milestone-hint-text'         => 'Tự động giao dịch vụ của bạn khi đạt được cột mốc bằng cách liên kết nó với một mục đơn hàng bán.',
                    'name'                        => 'Tên',
                    'deadline'                    => 'Hạn chót',
                    'is-completed'                => 'Đã hoàn thành',
                    'customer'                    => 'Khách hàng',
                    'assigned-to'                 => 'Giao cho',
                    'assigned-to-hint-text'       => 'Chọn người sẽ thực hiện nhiệm vụ này.',
                    'priority'                    => 'Ưu tiên',
                    'priority-hint-text'          => 'Chọn mức độ ưu tiên của nhiệm vụ.',
                    'estimated-hours'             => 'Giờ ước tính',
                    'estimated-hours-hint-text'   => 'Số giờ ước tính để hoàn thành nhiệm vụ này.',
                    'actual-hours'                => 'Giờ thực tế',
                    'actual-hours-hint-text'      => 'Số giờ thực tế đã sử dụng để hoàn thành nhiệm vụ này.',
                    'progress'                    => 'Tiến độ',
                    'progress-hint-text'          => 'Phần trăm hoàn thành của nhiệm vụ.',
                    'tags'                        => 'Thẻ',
                    'tags-hint-text'              => 'Thêm thẻ để phân loại nhiệm vụ.',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'title'             => 'Tiêu đề',
            'project'           => 'Dự án',
            'milestone'         => 'Cột mốc',
            'customer'          => 'Khách hàng',
            'assigned-to'       => 'Giao cho',
            'priority'          => 'Ưu tiên',
            'status'            => 'Trạng thái',
            'start_date'        => 'Ngày bắt đầu',
            'end_date'          => 'Ngày kết thúc',
            'deadline'          => 'Hạn chót',
            'estimated-hours'   => 'Giờ ước tính',
            'actual-hours'      => 'Giờ thực tế',
            'progress'          => 'Tiến độ',
            'tags'              => 'Thẻ',
            'is-completed'      => 'Đã hoàn thành',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo nhiệm vụ',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Nhiệm vụ đã được xóa',
                    'body'  => 'Nhiệm vụ đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các nhiệm vụ đã được xóa',
                    'body'  => 'Các nhiệm vụ đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'title'       => 'Tiêu đề',
                    'description' => 'Mô tả',
                    'project'     => 'Dự án',
                    'status'      => 'Trạng thái',
                    'start_date'  => 'Ngày bắt đầu',
                    'end_date'    => 'Ngày kết thúc',
                ],
            ],

            'assignment' => [
                'title' => 'Phân công',
                'entries' => [
                    'assigned-to' => 'Giao cho',
                    'customer'    => 'Khách hàng',
                    'priority'    => 'Ưu tiên',
                    'milestone'   => 'Cột mốc',
                ],
            ],

            'time-tracking' => [
                'title' => 'Theo dõi thời gian',
                'entries' => [
                    'estimated-hours' => 'Giờ ước tính',
                    'actual-hours'    => 'Giờ thực tế',
                    'progress'        => 'Tiến độ',
                    'deadline'        => 'Hạn chót',
                ],
            ],

            'additional' => [
                'title' => 'Thông tin bổ sung',
                'entries' => [
                    'tags'         => 'Thẻ',
                    'is-completed' => 'Đã hoàn thành',
                ],
            ],
        ],
    ],
];
