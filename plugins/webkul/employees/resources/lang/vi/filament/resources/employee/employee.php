<?php

return [
    'title' => 'Nhân viên',

    'navigation' => [
        'title' => 'Nhân viên',
        'group' => 'Nhân viên',
    ],

    'global-search' => [
        'name'       => 'Tên nhân viên',
        'department' => 'Phòng ban',
        'work-email' => 'Email công việc',
        'work-phone' => 'Điện thoại công việc',
    ],

    'form' => [
        'sections' => [
            'fields' => [
                'name'          => 'Tên',
                'job-title'     => 'Chức vụ',
                'work-email'    => 'Email công việc',
                'work-phone'    => 'Điện thoại công việc',
                'department'    => 'Phòng ban',
                'work-mobile'   => 'Di động công việc',
                'job-position'  => 'Vị trí công việc',
                'manager'       => 'Quản lý',
                'coach'         => 'Huấn luyện viên',
                'employee-tags' => 'Thẻ nhân viên',
            ],
        ],

        'tabs' => [
            'work-information' => [
                'title' => 'Thông tin công việc',

                'fields' => [
                    'location'             => 'Vị trí',
                    'work-address'         => 'Địa chỉ làm việc',
                    'work-location'        => 'Nơi làm việc',
                    'approver'             => 'Người phê duyệt',
                    'time-off'             => 'Nghỉ phép',
                    'attendance-manager'   => 'Quản lý chấm công',
                    'schedule'             => 'Lịch trình',
                    'working-hours'        => 'Giờ làm việc',
                    'time-zone'            => 'Múi giờ',
                    'time-zone-tooltip'    => 'Chỉ định múi giờ cho lịch trình làm việc này',
                    'organization-details' => 'Chi tiết tổ chức',
                    'company'              => 'Công ty',
                    'employment-type'      => 'Loại việc làm',
                    'employee-category'    => 'Danh mục nhân viên',
                    'job-position'         => 'Vị trí công việc',
                    'manager'              => 'Quản lý',
                    'coach'                => 'Huấn luyện viên',
                    'approver'             => 'Người phê duyệt',
                    'attendance-manager'   => 'Quản lý chấm công',
                    'time-off'             => 'Nghỉ phép',
                    'schedule'             => 'Lịch trình',
                    'working-hours'        => 'Giờ làm việc',
                    'time-zone'            => 'Múi giờ',
                ],
            ],

            'personal-information' => [
                'title' => 'Thông tin cá nhân',

                'fields' => [
                    'first-name'        => 'Tên',
                    'last-name'         => 'Họ',
                    'middle-name'       => 'Tên đệm',
                    'birth-date'        => 'Ngày sinh',
                    'gender'            => 'Giới tính',
                    'marital-status'    => 'Tình trạng hôn nhân',
                    'nationality'       => 'Quốc tịch',
                    'identification-id' => 'Số CMND/CCCD',
                    'passport-id'       => 'Số hộ chiếu',
                    'bank-account-id'   => 'Số tài khoản ngân hàng',
                    'home-address'      => 'Địa chỉ nhà',
                    'country'           => 'Quốc gia',
                    'state'             => 'Tỉnh/Thành phố',
                    'city'              => 'Thành phố',
                    'zip'               => 'Mã bưu điện',
                    'phone'             => 'Điện thoại',
                    'mobile'            => 'Di động',
                    'email'             => 'Email',
                    'emergency-contact' => 'Liên hệ khẩn cấp',
                    'emergency-phone'   => 'Điện thoại khẩn cấp',
                    'emergency-email'   => 'Email khẩn cấp',
                ],
            ],

            'skills' => [
                'title' => 'Kỹ năng',

                'fields' => [
                    'skill-type' => 'Loại kỹ năng',
                    'skill'      => 'Kỹ năng',
                    'level'      => 'Cấp độ',
                    'progress'   => 'Tiến độ',
                ],
            ],

            'resume' => [
                'title' => 'Sơ yếu lý lịch',

                'fields' => [
                    'resume-display-type' => 'Loại hiển thị sơ yếu lý lịch',
                    'resume'              => 'Sơ yếu lý lịch',
                    'resume-file'         => 'File sơ yếu lý lịch',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'          => 'Tên',
            'job-title'     => 'Chức vụ',
            'work-email'    => 'Email công việc',
            'work-phone'    => 'Điện thoại công việc',
            'department'    => 'Phòng ban',
            'work-mobile'   => 'Di động công việc',
            'job-position'  => 'Vị trí công việc',
            'manager'       => 'Quản lý',
            'coach'         => 'Huấn luyện viên',
            'employee-tags' => 'Thẻ nhân viên',
            'location'      => 'Vị trí',
            'work-address'  => 'Địa chỉ làm việc',
            'work-location' => 'Nơi làm việc',
            'approver'      => 'Người phê duyệt',
            'time-off'      => 'Nghỉ phép',
            'attendance-manager' => 'Quản lý chấm công',
            'schedule'      => 'Lịch trình',
            'working-hours' => 'Giờ làm việc',
            'time-zone'     => 'Múi giờ',
            'company'       => 'Công ty',
            'employment-type' => 'Loại việc làm',
            'employee-category' => 'Danh mục nhân viên',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo nhân viên',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Nhân viên đã được xóa',
                    'body'  => 'Nhân viên đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các nhân viên đã được xóa',
                    'body'  => 'Các nhân viên đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'personal' => [
                'title' => 'Thông tin cá nhân',
                'entries' => [
                    'first-name'        => 'Tên',
                    'last-name'         => 'Họ',
                    'middle-name'       => 'Tên đệm',
                    'birth-date'        => 'Ngày sinh',
                    'gender'            => 'Giới tính',
                    'marital-status'    => 'Tình trạng hôn nhân',
                    'nationality'       => 'Quốc tịch',
                    'identification-id' => 'Số CMND/CCCD',
                    'passport-id'       => 'Số hộ chiếu',
                    'bank-account-id'   => 'Số tài khoản ngân hàng',
                    'home-address'      => 'Địa chỉ nhà',
                    'country'           => 'Quốc gia',
                    'state'             => 'Tỉnh/Thành phố',
                    'city'              => 'Thành phố',
                    'zip'               => 'Mã bưu điện',
                    'phone'             => 'Điện thoại',
                    'mobile'            => 'Di động',
                    'email'             => 'Email',
                    'emergency-contact' => 'Liên hệ khẩn cấp',
                    'emergency-phone'   => 'Điện thoại khẩn cấp',
                    'emergency-email'   => 'Email khẩn cấp',
                ],
            ],

            'work' => [
                'title' => 'Thông tin công việc',
                'entries' => [
                    'name'               => 'Tên',
                    'job-title'          => 'Chức vụ',
                    'work-email'         => 'Email công việc',
                    'work-phone'         => 'Điện thoại công việc',
                    'department'         => 'Phòng ban',
                    'work-mobile'        => 'Di động công việc',
                    'job-position'       => 'Vị trí công việc',
                    'manager'            => 'Quản lý',
                    'coach'              => 'Huấn luyện viên',
                    'employee-tags'      => 'Thẻ nhân viên',
                    'location'           => 'Vị trí',
                    'work-address'       => 'Địa chỉ làm việc',
                    'work-location'      => 'Nơi làm việc',
                    'approver'           => 'Người phê duyệt',
                    'time-off'           => 'Nghỉ phép',
                    'attendance-manager' => 'Quản lý chấm công',
                    'schedule'           => 'Lịch trình',
                    'working-hours'      => 'Giờ làm việc',
                    'time-zone'          => 'Múi giờ',
                    'company'            => 'Công ty',
                    'employment-type'    => 'Loại việc làm',
                    'employee-category'  => 'Danh mục nhân viên',
                ],
            ],
        ],
    ],
];
