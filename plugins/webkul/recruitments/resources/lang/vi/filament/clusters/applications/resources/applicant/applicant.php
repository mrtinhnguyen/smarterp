<?php

return [
    'title' => 'Ứng viên',

    'navigation' => [
        'title' => 'Ứng viên',
    ],

    'form' => [
        'sections' => [
            'general-information' => [
                'title' => 'Thông tin chung',

                'fields' => [
                    'evaluation-good'           => 'Đánh giá: Tốt',
                    'evaluation-very-good'      => 'Đánh giá: Rất tốt',
                    'evaluation-very-excellent' => 'Đánh giá: Xuất sắc',
                    'hired'                     => 'Đã tuyển',
                    'candidate-name'            => 'Tên ứng viên',
                    'email'                     => 'Email',
                    'phone'                     => 'Điện thoại',
                    'linkedin-profile'          => 'Hồ sơ LinkedIn',
                    'recruiter'                 => 'Người tuyển dụng',
                    'interviewer'               => 'Người phỏng vấn',
                    'tags'                      => 'Thẻ',
                    'notes'                     => 'Ghi chú',
                    'hired-date'                => 'Ngày tuyển',
                    'job-position'              => 'Vị trí công việc',
                ],
            ],

            'education-and-availability' => [
                'title' => 'Học vấn & Khả năng',

                'fields' => [
                    'degree'            => 'Bằng cấp',
                    'availability-date' => 'Ngày có thể làm việc',
                ],
            ],

            'department' => [
                'title' => 'Phòng ban',
            ],

            'salary' => [
                'title' => 'Lương mong đợi & Đề xuất',

                'fields' => [
                    'expected-salary'       => 'Lương mong đợi',
                    'proposed-salary'       => 'Lương đề xuất',
                    'salary-currency'       => 'Tiền tệ lương',
                    'salary-currency-hint'  => 'Tiền tệ cho lương mong đợi và đề xuất',
                ],
            ],

            'source' => [
                'title' => 'Nguồn',

                'fields' => [
                    'source'         => 'Nguồn',
                    'utm-source'     => 'UTM Source',
                    'utm-medium'     => 'UTM Medium',
                    'utm-campaign'   => 'UTM Campaign',
                    'utm-content'    => 'UTM Content',
                    'utm-term'       => 'UTM Term',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'candidate-name'    => 'Tên ứng viên',
            'email'             => 'Email',
            'phone'             => 'Điện thoại',
            'job-position'      => 'Vị trí công việc',
            'recruiter'         => 'Người tuyển dụng',
            'interviewer'       => 'Người phỏng vấn',
            'hired'             => 'Đã tuyển',
            'hired-date'        => 'Ngày tuyển',
            'expected-salary'   => 'Lương mong đợi',
            'proposed-salary'   => 'Lương đề xuất',
            'degree'            => 'Bằng cấp',
            'availability-date' => 'Ngày có thể làm việc',
            'source'            => 'Nguồn',
            'tags'              => 'Thẻ',
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
            'general-information' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'candidate-name'    => 'Tên ứng viên',
                    'email'             => 'Email',
                    'phone'             => 'Điện thoại',
                    'linkedin-profile'  => 'Hồ sơ LinkedIn',
                    'recruiter'         => 'Người tuyển dụng',
                    'interviewer'       => 'Người phỏng vấn',
                    'tags'              => 'Thẻ',
                    'notes'             => 'Ghi chú',
                    'hired'             => 'Đã tuyển',
                    'hired-date'        => 'Ngày tuyển',
                    'job-position'      => 'Vị trí công việc',
                ],
            ],

            'education-and-availability' => [
                'title' => 'Học vấn & Khả năng',
                'entries' => [
                    'degree'            => 'Bằng cấp',
                    'availability-date' => 'Ngày có thể làm việc',
                ],
            ],

            'salary' => [
                'title' => 'Lương',
                'entries' => [
                    'expected-salary' => 'Lương mong đợi',
                    'proposed-salary' => 'Lương đề xuất',
                    'salary-currency' => 'Tiền tệ lương',
                ],
            ],

            'source' => [
                'title' => 'Nguồn',
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
