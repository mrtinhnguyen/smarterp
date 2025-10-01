<?php

return [
    'form' => [
        'sections' => [
            'activity-details' => [
                'title' => 'Chi tiết hoạt động',

                'fields' => [
                    'activity-type' => 'Loại hoạt động',
                    'summary'       => 'Tóm tắt',
                    'note'          => 'Ghi chú',
                ],
            ],

            'assignment' => [
                'title' => 'Phân công',

                'fields' => [
                    'assignment' => 'Phân công',
                    'assignee'   => 'Người được phân công',
                ],
            ],

            'delay-information' => [
                'title' => 'Thông tin trễ hạn',

                'fields' => [
                    'delay-count'            => 'Số lần trễ hạn',
                    'delay-unit'             => 'Đơn vị trễ hạn',
                    'delay-from'             => 'Trễ hạn từ',
                    'delay-from-helper-text' => 'Nguồn tính toán trễ hạn',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'activity-type' => 'Loại hoạt động',
            'summary'       => 'Tóm tắt',
            'assignment'    => 'Phân công',
            'assigned-to'   => 'Phân công cho',
            'interval'      => 'Khoảng thời gian',
            'delay-unit'    => 'Đơn vị trễ hạn',
            'delay-from'    => 'Trễ hạn từ',
            'created-by'    => 'Tạo bởi',
            'created-at'    => 'Ngày tạo',
            'updated-at'    => 'Ngày cập nhật',
        ],

        'groups' => [
            'activity-type' => 'Loại hoạt động',
            'assignment'    => 'Phân công',
            'assigned-to'   => 'Phân công cho',
            'interval'      => 'Khoảng thời gian',
            'delay-unit'    => 'Đơn vị trễ hạn',
            'delay-from'    => 'Trễ hạn từ',
            'created-by'    => 'Tạo bởi',
            'created-at'    => 'Ngày tạo',
            'updated-at'    => 'Ngày cập nhật',
        ],

        'filters' => [
            'activity-type'   => 'Loại hoạt động',
            'activity-status' => 'Trạng thái hoạt động',
            'has-delay'       => 'Có trễ hạn',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Mẫu hoạt động đã cập nhật',
                    'body'  => 'Mẫu hoạt động đã được cập nhật thành công.',
                ],
            ],

            'create' => [
                'notification' => [
                    'title' => 'Mẫu hoạt động đã tạo',
                    'body'  => 'Mẫu hoạt động đã được tạo thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Mẫu hoạt động đã xóa',
                    'body'  => 'Mẫu hoạt động đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Các mẫu hoạt động đã xóa',
                    'body'  => 'Các mẫu hoạt động đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'activity-details' => [
                'title' => 'Chi tiết hoạt động',

                'entries' => [
                    'activity-type' => 'Loại hoạt động',
                    'summary'       => 'Tóm tắt',
                ],
            ],

            'assignment' => [
                'title' => 'Phân công',

                'entries' => [
                    'assignment' => 'Phân công',
                    'assignee'   => 'Người được phân công',
                ],
            ],

            'delay-information' => [
                'title' => 'Thông tin trễ hạn',

                'entries' => [
                    'delay-count'            => 'Số lần trễ hạn',
                    'delay-unit'             => 'Đơn vị trễ hạn',
                    'delay-from'             => 'Trễ hạn từ',
                    'delay-from-helper-text' => 'Nguồn tính toán trễ hạn',
                ],
            ],
        ],

        'note' => 'Ghi chú',
    ],
];