<?php

return [
    'title'      => 'Loại nghỉ phép',
    'navigation' => [
        'title' => 'Loại nghỉ phép',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Thông tin chung',
                'fields' => [
                    'name'                => 'Tiêu đề',
                    'approval'            => 'Phê duyệt',
                    'requires-allocation' => 'Yêu cầu phân bổ',
                    'employee-requests'   => 'Yêu cầu nhân viên',
                    'display-option'      => 'Tùy chọn hiển thị',
                ],
            ],
            'display-option' => [
                'title'  => 'Tùy chọn hiển thị',
                'fields' => [
                    'color' => 'Màu sắc',
                ],
            ],
            'configuration' => [
                'title' => 'Cấu hình',

                'fields' => [
                    'notified-time-off-officers'          => 'Nhân viên nghỉ phép được thông báo',
                    'take-time-off-in'                    => 'Nghỉ phép theo',
                    'public-holiday-included'             => 'Bao gồm ngày lễ',
                    'allow-to-attach-supporting-document' => 'Cho phép đính kèm tài liệu hỗ trợ',
                    'show-on-dashboard'                   => 'Hiển thị trên bảng điều khiển',
                    'allow-negative-cap'                  => 'Cho phép âm',
                    'kind-off-time'                       => 'Loại thời gian',
                    'max-negative-cap'                    => 'Mức âm tối đa',
                    'kind-of-time'                        => 'Loại nghỉ phép',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                      => 'Tên',
            'company-name'              => 'Công ty',
            'color'                     => 'Màu sắc',
            'notified-time-officers'    => 'Nhân viên thời gian được thông báo',
            'time-off-approval'         => 'Phê duyệt nghỉ phép',
            'requires-allocation'       => 'Yêu cầu phân bổ',
            'allocation-approval'       => 'Phê duyệt phân bổ',
            'employee-request'          => 'Yêu cầu nhân viên',
        ],

        'filters' => [
            'name'                => 'Tên',
            'company-name'        => 'Công ty',
            'time-off-approval'   => 'Phê duyệt nghỉ phép',
            'requires-allocation' => 'Yêu cầu phân bổ',
            'time-type'           => 'Loại thời gian',
            'request-unit'        => 'Đơn vị yêu cầu',
            'created-by'          => 'Tạo bởi',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Loại nghỉ phép đã xóa',
                    'body'  => 'Loại nghỉ phép đã được xóa thành công.',
                ],
            ],
            'restore' => [
                'notification' => [
                    'title' => 'Loại nghỉ phép đã khôi phục',
                    'body'  => 'Loại nghỉ phép đã được khôi phục thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Loại nghỉ phép đã khôi phục',
                    'body'  => 'Loại nghỉ phép đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Loại nghỉ phép đã xóa',
                    'body'  => 'Loại nghỉ phép đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Loại nghỉ phép đã xóa vĩnh viễn',
                        'body'  => 'Loại nghỉ phép đã được xóa vĩnh viễn thành công.',
                    ],
                    'error' => [
                        'title' => 'Không thể xóa loại nghỉ phép',
                        'body'  => 'Loại nghỉ phép không thể xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'Thông tin chung',
                'entries' => [
                    'name'                => 'Tiêu đề',
                    'approval'            => 'Phê duyệt',
                    'requires-allocation' => 'Yêu cầu phân bổ',
                    'employee-requests'   => 'Yêu cầu nhân viên',
                    'display-option'      => 'Tùy chọn hiển thị',
                ],
            ],
            'display-option' => [
                'title'   => 'Tùy chọn hiển thị',
                'entries' => [
                    'color' => 'Màu sắc',
                ],
            ],
            'configuration' => [
                'title' => 'Cấu hình',

                'entries' => [
                    'notified-time-off-officers'          => 'Nhân viên nghỉ phép được thông báo',
                    'take-time-off-in'                    => 'Nghỉ phép theo',
                    'public-holiday-included'             => 'Bao gồm ngày lễ',
                    'allow-to-attach-supporting-document' => 'Cho phép đính kèm tài liệu hỗ trợ',
                    'show-on-dashboard'                   => 'Hiển thị trên bảng điều khiển',
                    'kind-off-time'                       => 'Loại thời gian',
                    'max-negative-cap'                    => 'Mức âm tối đa',
                    'kind-of-time'                        => 'Loại nghỉ phép',
                ],
            ],
        ],
    ],
];
