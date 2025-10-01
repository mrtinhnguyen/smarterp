<?php

return [
    'title' => 'Ứng viên',

    'navigation' => [
        'title' => 'Ứng viên',
    ],

    'form' => [
        'sections' => [
            'basic-information' => [
                'title' => 'Thông tin Cơ bản',

                'fields' => [
                    'full-name' => 'Họ và tên',
                    'email'     => 'Địa chỉ Email',
                    'phone'     => 'Số điện thoại',
                    'linkedin'  => 'Hồ sơ LinkedIn',
                    'contact'   => 'Liên hệ',
                ],
            ],

            'additional-details' => [
                'title' => 'Chi tiết Bổ sung',

                'fields' => [
                    'company'           => 'Công ty',
                    'degree'            => 'Bằng cấp',
                    'tags'              => 'Thẻ',
                    'manager'           => 'Quản lý',
                    'availability-date' => 'Ngày có thể bắt đầu',

                    'priority-options' => [
                        'low'    => 'Thấp',
                        'medium' => 'Trung bình',
                        'high'   => 'Cao',
                    ],
                ],
            ],

            'status-and-evaluation' => [
                'title' => 'Trạng thái',

                'fields' => [
                    'active'     => 'Hoạt động',
                    'evaluation' => 'Đánh giá',
                ],
            ],

            'communication' => [
                'title' => 'Giao tiếp',

                'fields' => [
                    'cc-email'      => 'CC Email',
                    'email-bounced' => 'Email Bị trả lại',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Họ và tên',
            'tags'       => 'Thẻ',
            'evaluation' => 'Đánh giá',
        ],

        'filters' => [
            'company'      => 'Công ty',
            'partner-name' => 'Liên hệ',
            'degree'       => 'Bằng cấp',
            'manager-name' => 'Quản lý',
        ],

        'groups' => [
            'manager-name' => 'Quản lý',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Ứng viên đã xóa',
                    'body'  => 'Ứng viên đã được xóa thành công.',
                ],
            ],

            'empty-state-actions' => [
                'create' => [
                    'notification' => [
                        'title' => 'Ứng viên đã tạo',
                        'body'  => 'Ứng viên đã được tạo thành công.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Các ứng viên đã xóa',
                    'body'  => 'Các ứng viên đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'basic-information' => [
                'title' => 'Thông tin Cơ bản',

                'entries' => [
                    'full-name' => 'Họ và tên',
                    'email'     => 'Địa chỉ Email',
                    'phone'     => 'Số điện thoại',
                    'linkedin'  => 'Hồ sơ LinkedIn',
                    'contact'   => 'Liên hệ',
                ],
            ],

            'additional-details' => [
                'title' => 'Chi tiết Bổ sung',

                'entries' => [
                    'company'           => 'Công ty',
                    'degree'            => 'Bằng cấp',
                    'tags'              => 'Thẻ',
                    'manager'           => 'Quản lý',
                    'availability-date' => 'Ngày có thể bắt đầu',

                    'priority-options' => [
                        'low'    => 'Thấp',
                        'medium' => 'Trung bình',
                        'high'   => 'Cao',
                    ],
                ],
            ],

            'status-and-evaluation' => [
                'title' => 'Trạng thái',

                'entries' => [
                    'active'     => 'Hoạt động',
                    'evaluation' => 'Đánh giá',
                ],
            ],

            'communication' => [
                'title' => 'Giao tiếp',

                'entries' => [
                    'cc-email'      => 'CC Email',
                    'email-bounced' => 'Email Bị trả lại',
                ],
            ],
        ],
    ],
];
