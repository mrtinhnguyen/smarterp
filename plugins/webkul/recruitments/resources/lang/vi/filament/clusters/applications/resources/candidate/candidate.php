<?php

return [
    'title' => 'Ứng viên',

    'navigation' => [
        'title' => 'Ứng viên',
    ],

    'form' => [
        'sections' => [
            'basic-information' => [
                'title' => 'Thông tin cơ bản',

                'fields' => [
                    'full-name' => 'Họ và tên',
                    'email'     => 'Địa chỉ email',
                    'phone'     => 'Số điện thoại',
                    'linkedin'  => 'Hồ sơ LinkedIn',
                    'contact'   => 'Liên hệ',
                ],
            ],

            'additional-details' => [
                'title' => 'Chi tiết bổ sung',

                'fields' => [
                    'company'           => 'Công ty',
                    'degree'            => 'Bằng cấp',
                    'tags'              => 'Thẻ',
                    'manager'           => 'Quản lý',
                    'availability-date' => 'Ngày có thể làm việc',

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

            'salary-information' => [
                'title' => 'Thông tin lương',

                'fields' => [
                    'expected-salary' => 'Lương mong đợi',
                    'proposed-salary' => 'Lương đề xuất',
                    'currency'        => 'Tiền tệ',
                ],
            ],

            'source-information' => [
                'title' => 'Thông tin nguồn',

                'fields' => [
                    'source'       => 'Nguồn',
                    'utm-source'   => 'UTM Source',
                    'utm-medium'   => 'UTM Medium',
                    'utm-campaign' => 'UTM Campaign',
                    'utm-content'  => 'UTM Content',
                    'utm-term'     => 'UTM Term',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'full-name'         => 'Họ và tên',
            'email'             => 'Email',
            'phone'             => 'Điện thoại',
            'linkedin'          => 'LinkedIn',
            'company'           => 'Công ty',
            'degree'            => 'Bằng cấp',
            'tags'              => 'Thẻ',
            'manager'           => 'Quản lý',
            'availability-date' => 'Ngày có thể làm việc',
            'active'            => 'Hoạt động',
            'evaluation'        => 'Đánh giá',
            'expected-salary'   => 'Lương mong đợi',
            'proposed-salary'   => 'Lương đề xuất',
            'currency'          => 'Tiền tệ',
            'source'            => 'Nguồn',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo ứng viên',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Ứng viên đã được xóa',
                    'body'  => 'Ứng viên đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các ứng viên đã được xóa',
                    'body'  => 'Các ứng viên đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'basic-information' => [
                'title' => 'Thông tin cơ bản',
                'entries' => [
                    'full-name' => 'Họ và tên',
                    'email'     => 'Email',
                    'phone'     => 'Điện thoại',
                    'linkedin'  => 'LinkedIn',
                    'contact'   => 'Liên hệ',
                ],
            ],

            'additional-details' => [
                'title' => 'Chi tiết bổ sung',
                'entries' => [
                    'company'           => 'Công ty',
                    'degree'            => 'Bằng cấp',
                    'tags'              => 'Thẻ',
                    'manager'           => 'Quản lý',
                    'availability-date' => 'Ngày có thể làm việc',
                ],
            ],

            'status-and-evaluation' => [
                'title' => 'Trạng thái',
                'entries' => [
                    'active'     => 'Hoạt động',
                    'evaluation' => 'Đánh giá',
                ],
            ],

            'salary-information' => [
                'title' => 'Thông tin lương',
                'entries' => [
                    'expected-salary' => 'Lương mong đợi',
                    'proposed-salary' => 'Lương đề xuất',
                    'currency'        => 'Tiền tệ',
                ],
            ],

            'source-information' => [
                'title' => 'Thông tin nguồn',
                'entries' => [
                    'source'       => 'Nguồn',
                    'utm-source'   => 'UTM Source',
                    'utm-medium'   => 'UTM Medium',
                    'utm-campaign' => 'UTM Campaign',
                    'utm-content'  => 'UTM Content',
                    'utm-term'     => 'UTM Term',
                ],
            ],
        ],
    ],
];
