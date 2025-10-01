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
                    'assigned-to-hint-text'       => 'Người được giao nhiệm vụ này.',
                    'priority'                    => 'Ưu tiên',
                    'priority-hint-text'          => 'Mức độ ưu tiên của nhiệm vụ.',
                    'tags'                        => 'Thẻ',
                    'company'                     => 'Công ty',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'title'        => 'Tiêu đề',
            'project'      => 'Dự án',
            'assigned-to'  => 'Giao cho',
            'deadline'     => 'Hạn chót',
            'priority'     => 'Ưu tiên',
            'status'       => 'Trạng thái',
            'is-completed' => 'Đã hoàn thành',
            'customer'     => 'Khách hàng',
            'created-at'   => 'Được tạo lúc',
            'updated-at'   => 'Được cập nhật lúc',
        ],

        'groups' => [
            'project'      => 'Dự án',
            'assigned-to'  => 'Giao cho',
            'priority'     => 'Ưu tiên',
            'status'       => 'Trạng thái',
            'is-completed' => 'Đã hoàn thành',
            'customer'     => 'Khách hàng',
            'created-at'   => 'Được tạo lúc',
        ],

        'filters' => [
            'title'        => 'Tiêu đề',
            'project'      => 'Dự án',
            'assigned-to'  => 'Giao cho',
            'deadline'     => 'Hạn chót',
            'priority'     => 'Ưu tiên',
            'status'       => 'Trạng thái',
            'is-completed' => 'Đã hoàn thành',
            'customer'     => 'Khách hàng',
            'created-at'   => 'Được tạo lúc',
            'updated-at'   => 'Được cập nhật lúc',
            'milestone'    => 'Cột mốc',
            'company'      => 'Công ty',
            'creator'      => 'Người tạo',
            'tags'         => 'Thẻ',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo nhiệm vụ',
            ],

            'edit' => [
                'label' => 'Chỉnh sửa',
                'notification' => [
                    'title' => 'Nhiệm vụ đã được cập nhật',
                    'body'  => 'Nhiệm vụ đã được cập nhật thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Nhiệm vụ đã được khôi phục',
                    'body'  => 'Nhiệm vụ đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Nhiệm vụ đã được xóa',
                    'body'  => 'Nhiệm vụ đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Nhiệm vụ đã được xóa vĩnh viễn',
                        'body'  => 'Nhiệm vụ đã được xóa vĩnh viễn thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa vĩnh viễn nhiệm vụ',
                        'body'  => 'Nhiệm vụ được liên kết với các bản ghi khác.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
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
                ],
            ],

            'additional' => [
                'title' => 'Thông tin bổ sung',

                'entries' => [
                    'assigned-to' => 'Giao cho',
                    'deadline'    => 'Hạn chót',
                    'priority'    => 'Ưu tiên',
                    'milestone'   => 'Cột mốc',
                    'customer'    => 'Khách hàng',
                    'tags'        => 'Thẻ',
                ],
            ],

            'record-information' => [
                'title' => 'Thông tin bản ghi',

                'entries' => [
                    'created-at'   => 'Được tạo lúc',
                    'created-by'   => 'Được tạo bởi',
                    'last-updated' => 'Cập nhật lần cuối',
                ],
            ],
        ],
    ],
];
