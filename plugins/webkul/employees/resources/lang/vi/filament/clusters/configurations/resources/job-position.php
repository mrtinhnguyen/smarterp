<?php

return [
    'title' => 'Vị trí Công việc',

    'navigation' => [
        'title' => 'Vị trí Công việc',
        'group' => 'Tuyển dụng',
    ],

    'form' => [
        'sections' => [
            'employment-information' => [
                'title' => 'Thông tin Việc làm',

                'fields' => [
                    'job-position-title'         => 'Tiêu đề Vị trí Công việc',
                    'job-position-title-tooltip' => 'Nhập tiêu đề chính thức của vị trí công việc',
                    'department'                 => 'Phòng ban',
                    'department-modal-title'     => 'Tạo Phòng ban',
                    'company-modal-title'        => 'Tạo Công ty',
                    'job-location'               => 'Vị trí Công việc',
                    'industry'                   => 'Ngành nghề',
                    'company'                    => 'Công ty',
                    'employment-type'            => 'Loại Việc làm',
                    'recruiter'                  => 'Người tuyển dụng',
                    'interviewer'                => 'Người phỏng vấn',
                ],
            ],

            'job-description' => [
                'title' => 'Mô tả Công việc',

                'fields' => [
                    'job-description'  => 'Mô tả Công việc',
                    'job-requirements' => 'Yêu cầu Công việc',
                ],
            ],

            'workforce-planning' => [
                'title' => 'Kế hoạch Nhân lực',

                'fields' => [
                    'recruitment-target'         => 'Mục tiêu Tuyển dụng',
                    'date-from'                  => 'Từ ngày',
                    'date-to'                    => 'Đến ngày',
                    'expected-skills'            => 'Kỹ năng Mong đợi',
                    'employment-type'            => 'Loại Việc làm',
                    'status'                     => 'Trạng thái',
                ],
            ],

            'position-status' => [
                'title' => 'Trạng thái Vị trí',

                'fields' => [
                    'status' => 'Trạng thái',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'                 => 'ID',
            'name'               => 'Vị trí Công việc',
            'department'         => 'Phòng ban',
            'job-position'       => 'Vị trí Công việc',
            'company'            => 'Công ty',
            'expected-employees' => 'Nhân viên Dự kiến',
            'current-employees'  => 'Nhân viên Hiện tại',
            'status'             => 'Trạng thái',
            'created-by'         => 'Tạo bởi',
            'created-at'         => 'Ngày tạo',
            'updated-at'         => 'Ngày cập nhật',
        ],

        'filters' => [
            'department'      => 'Phòng ban',
            'employment-type' => 'Loại Việc làm',
            'job-position'    => 'Vị trí Công việc',
            'company'         => 'Công ty',
            'status'          => 'Trạng thái',
            'created-by'      => 'Tạo bởi',
            'updated-at'      => 'Ngày cập nhật',
            'created-at'      => 'Ngày tạo',
        ],

        'groups' => [
            'job-position'    => 'Vị trí Công việc',
            'company'         => 'Công ty',
            'department'      => 'Phòng ban',
            'employment-type' => 'Loại Việc làm',
            'created-by'      => 'Tạo bởi',
            'created-at'      => 'Ngày tạo',
            'updated-at'      => 'Ngày cập nhật',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Vị trí công việc đã khôi phục',
                    'body'  => 'Vị trí công việc đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Vị trí công việc đã xóa',
                    'body'  => 'Vị trí công việc đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Các vị trí công việc đã khôi phục',
                    'body'  => 'Các vị trí công việc đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các vị trí công việc đã xóa',
                    'body'  => 'Các vị trí công việc đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Các vị trí công việc đã xóa vĩnh viễn',
                    'body'  => 'Các vị trí công việc đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Vị trí Công việc',
                    'body'  => 'Vị trí công việc đã được tạo thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'employment-information' => [
                'title' => 'Thông tin Việc làm',

                'entries' => [
                    'job-position-title' => 'Tiêu đề Vị trí Công việc',
                    'department'         => 'Phòng ban',
                    'company'            => 'Công ty',
                    'employment-type'    => 'Loại Việc làm',
                    'job-location'       => 'Vị trí Công việc',
                    'industry'           => 'Ngành nghề',
                ],
            ],
            'job-description' => [
                'title' => 'Mô tả Công việc',

                'entries' => [
                    'job-description'  => 'Mô tả Công việc',
                    'job-requirements' => 'Yêu cầu Công việc',
                ],
            ],
            'work-planning' => [
                'title' => 'Kế hoạch Nhân lực',

                'entries' => [
                    'expected-employees' => 'Nhân viên Dự kiến',
                    'current-employees'  => 'Nhân viên Hiện tại',
                    'date-from'          => 'Từ ngày',
                    'date-to'            => 'Đến ngày',
                    'recruitment-target' => 'Mục tiêu Tuyển dụng',
                ],
            ],
            'position-status' => [
                'title' => 'Trạng thái Vị trí',

                'entries' => [
                    'status' => 'Trạng thái',
                ],
            ],
        ],
    ],
];