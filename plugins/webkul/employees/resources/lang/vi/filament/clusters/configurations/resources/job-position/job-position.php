<?php

return [
    'title' => 'Vị trí công việc',

    'navigation' => [
        'title' => 'Vị trí công việc',
        'group' => 'Tuyển dụng',
    ],

    'form' => [
        'sections' => [
            'employment-information' => [
                'title' => 'Thông tin việc làm',

                'fields' => [
                    'job-position-title'         => 'Tiêu đề vị trí công việc',
                    'job-position-title-tooltip' => 'Nhập tiêu đề chính thức của vị trí công việc',
                    'department'                 => 'Phòng ban',
                    'department-modal-title'     => 'Tạo phòng ban',
                    'company-modal-title'        => 'Tạo công ty',
                    'job-location'               => 'Vị trí công việc',
                    'industry'                   => 'Ngành nghề',
                    'company'                    => 'Công ty',
                    'employment-type'            => 'Loại việc làm',
                    'recruiter'                  => 'Người tuyển dụng',
                    'interviewer'                => 'Người phỏng vấn',
                ],
            ],

            'job-description' => [
                'title' => 'Mô tả công việc',

                'fields' => [
                    'job-description' => 'Mô tả công việc',
                    'requirements'    => 'Yêu cầu',
                    'responsibilities' => 'Trách nhiệm',
                    'benefits'        => 'Phúc lợi',
                ],
            ],

            'recruitment-details' => [
                'title' => 'Chi tiết tuyển dụng',

                'fields' => [
                    'recruiter'           => 'Người tuyển dụng',
                    'interviewer'         => 'Người phỏng vấn',
                    'hiring-manager'      => 'Quản lý tuyển dụng',
                    'recruitment-process' => 'Quy trình tuyển dụng',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'job-position-title' => 'Tiêu đề vị trí',
            'department'         => 'Phòng ban',
            'company'            => 'Công ty',
            'employment-type'    => 'Loại việc làm',
            'job-location'       => 'Vị trí công việc',
            'industry'           => 'Ngành nghề',
            'recruiter'          => 'Người tuyển dụng',
            'interviewer'        => 'Người phỏng vấn',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo vị trí công việc',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Vị trí công việc đã được xóa',
                    'body'  => 'Vị trí công việc đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các vị trí công việc đã được xóa',
                    'body'  => 'Các vị trí công việc đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'employment' => [
                'title' => 'Thông tin việc làm',
                'entries' => [
                    'job-position-title' => 'Tiêu đề vị trí công việc',
                    'department'         => 'Phòng ban',
                    'company'            => 'Công ty',
                    'employment-type'    => 'Loại việc làm',
                    'job-location'       => 'Vị trí công việc',
                    'industry'           => 'Ngành nghề',
                    'recruiter'          => 'Người tuyển dụng',
                    'interviewer'        => 'Người phỏng vấn',
                ],
            ],

            'description' => [
                'title' => 'Mô tả công việc',
                'entries' => [
                    'job-description' => 'Mô tả công việc',
                    'requirements'    => 'Yêu cầu',
                    'responsibilities' => 'Trách nhiệm',
                    'benefits'        => 'Phúc lợi',
                ],
            ],
        ],
    ],
];
