<?php

return [
    'title' => 'Ứng viên',

    'navigation' => [
        'title' => 'Ứng viên',
    ],

    'form' => [
        'sections' => [
            'general-information' => [
                'title' => 'Thông tin Chung',

                'fields' => [
                    'evaluation-good'           => 'Đánh giá: Tốt',
                    'evaluation-very-good'      => 'Đánh giá: Rất tốt',
                    'evaluation-very-excellent' => 'Đánh giá: Xuất sắc',
                    'hired'                     => 'Đã tuyển dụng',
                    'candidate-name'            => 'Tên ứng viên',
                    'email'                     => 'Email',
                    'phone'                     => 'Điện thoại',
                    'linkedin-profile'          => 'Hồ sơ LinkedIn',
                    'recruiter'                 => 'Người tuyển dụng',
                    'interviewer'               => 'Người phỏng vấn',
                    'tags'                      => 'Thẻ',
                    'notes'                     => 'Ghi chú',
                    'hired-date'                => 'Ngày tuyển dụng',
                    'job-position'              => 'Vị trí Công việc',
                ],
            ],

            'education-and-availability' => [
                'title' => 'Học vấn & Khả năng',

                'fields' => [
                    'degree'            => 'Bằng cấp',
                    'availability-date' => 'Ngày có thể bắt đầu',
                ],
            ],

            'department' => [
                'title' => 'Phòng ban',
            ],

            'salary' => [
                'title' => 'Lương Mong đợi & Đề xuất',

                'fields' => [
                    'expected-salary'       => 'Lương Mong đợi',
                    'salary-proposed-extra' => 'Phúc lợi Khác',
                    'proposed-salary'       => 'Lương Đề xuất',
                    'salary-expected-extra' => 'Phúc lợi Khác',
                ],
            ],

            'source-and-medium' => [
                'title' => 'Nguồn & Phương tiện',

                'fields' => [
                    'source' => 'Nguồn',
                    'medium' => 'Phương tiện',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'partner-name'       => 'Tên Đối tác',
            'applied-on'         => 'Nộp đơn ngày',
            'job-position'       => 'Vị trí Công việc',
            'stage'              => 'Giai đoạn',
            'candidate-name'     => 'Tên Ứng viên',
            'evaluation'         => 'Đánh giá',
            'application-status' => 'Trạng thái Đơn ứng tuyển',
            'tags'               => 'Thẻ',
            'refuse-reason'      => 'Lý do Từ chối',
            'email'              => 'Email',
            'recruiter'          => 'Người tuyển dụng',
            'interviewer'        => 'Người phỏng vấn',
            'candidate-phone'    => 'Điện thoại',
            'medium'             => 'Phương tiện',
            'source'             => 'Nguồn',
            'salary-expected'    => 'Lương Mong đợi',
            'availability-date'  => 'Ngày có thể bắt đầu',
        ],

        'filters' => [
            'source'                  => 'Nguồn',
            'medium'                  => 'Phương tiện',
            'candidate'               => 'Ứng viên',
            'priority'                => 'Ưu tiên',
            'salary-proposed-extra'   => 'Phúc lợi Lương Đề xuất',
            'salary-expected-extra'   => 'Phúc lợi Lương Mong đợi',
            'applicant-notes'         => 'Ghi chú Ứng viên',
            'create-date'             => 'Nộp đơn ngày',
            'date-closed'             => 'Ngày Tuyển dụng',
            'date-last-stage-updated' => 'Cập nhật Giai đoạn Cuối',
            'stage'                   => 'Giai đoạn',
            'job-position'            => 'Vị trí Công việc',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Ứng viên đã xóa',
                    'body'  => 'Ứng viên đã được xóa thành công.',
                ],
            ],
        ],

        'groups' => [
            'stage'          => 'Giai đoạn',
            'job-position'   => 'Vị trí Công việc',
            'candidate-name' => 'Tên Ứng viên',
            'responsible'    => 'Người phụ trách',
            'creation-date'  => 'Ngày tạo',
            'hired-date'     => 'Ngày Tuyển dụng',
            'last-stage'     => 'Giai đoạn Cuối',
            'refuse-reason'  => 'Lý do Từ chối',
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Các ứng viên đã xóa',
                    'body'  => 'Các ứng viên đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Các ứng viên đã xóa',
                    'body'  => 'Các ứng viên đã được xóa thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Các ứng viên đã khôi phục',
                    'body'  => 'Các ứng viên đã được khôi phục thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general-information' => [
                'title' => 'Thông tin Chung',

                'entries' => [
                    'evaluation-good'           => 'Đánh giá: Tốt',
                    'evaluation-very-good'      => 'Đánh giá: Rất tốt',
                    'evaluation-very-excellent' => 'Đánh giá: Xuất sắc',
                    'hired'                     => 'Đã tuyển dụng',
                    'candidate-name'            => 'Tên ứng viên',
                    'email'                     => 'Email',
                    'phone'                     => 'Điện thoại',
                    'linkedin-profile'          => 'Hồ sơ LinkedIn',
                    'recruiter'                 => 'Người tuyển dụng',
                    'interviewer'               => 'Người phỏng vấn',
                    'tags'                      => 'Thẻ',
                    'notes'                     => 'Ghi chú',
                    'job-position'              => 'Vị trí Công việc',
                ],
            ],

            'education-and-availability' => [
                'title' => 'Học vấn & Khả năng',

                'entries' => [
                    'degree'            => 'Bằng cấp',
                    'availability-date' => 'Ngày có thể bắt đầu',
                ],
            ],

            'department' => [
                'title' => 'Phòng ban',
            ],

            'salary' => [
                'title' => 'Lương Mong đợi & Đề xuất',

                'entries' => [
                    'expected-salary'       => 'Lương Mong đợi',
                    'salary-proposed-extra' => 'Phúc lợi Khác',
                    'proposed-salary'       => 'Lương Đề xuất',
                    'salary-expected-extra' => 'Phúc lợi Khác',
                ],
            ],

            'source-and-medium' => [
                'title' => 'Nguồn & Phương tiện',

                'entries' => [
                    'source' => 'Nguồn',
                    'medium' => 'Phương tiện',
                ],
            ],
        ],
    ],
];
