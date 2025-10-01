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
            'assigned-to'   => 'Được phân công cho',
            'interval'      => 'Khoảng thời gian',
            'delay-unit'    => 'Đơn vị trễ hạn',
            'delay-from'    => 'Trễ hạn từ',
            'created-by'    => 'Được tạo bởi',
            'created-at'    => 'Ngày tạo',
            'updated-at'    => 'Ngày cập nhật',
        ],

        'groups' => [
            'activity-type' => 'Loại hoạt động',
            'assignment'    => 'Phân công',
            'assigned-to'   => 'Được phân công cho',
            'interval'      => 'Khoảng thời gian',
            'delay-unit'    => 'Đơn vị trễ hạn',
            'delay-from'    => 'Trễ hạn từ',
            'created-by'    => 'Được tạo bởi',
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
                    'title' => 'Mẫu hoạt động đã được cập nhật',
                    'body'  => 'Mẫu hoạt động đã được cập nhật thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Mẫu hoạt động đã được xóa',
                    'body'  => 'Mẫu hoạt động đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Các mẫu hoạt động đã được xóa',
                    'body'  => 'Các mẫu hoạt động đã được xóa thành công.',
                ],
            ],
        ],
    ],
];
