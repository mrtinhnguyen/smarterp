<?php

return [
    'title' => 'Phòng ban',

    'navigation' => [
        'title' => 'Phòng ban',
        'group' => 'Nhân viên',
    ],

    'form' => [
        'sections' => [
            'activity-type-details' => [
                'title' => 'Thông tin chung',

                'fields' => [
                    'name'                => 'Loại hoạt động',
                    'name-tooltip'        => 'Nhập tên chính thức của loại hoạt động',
                    'action'              => 'Hành động',
                    'default-user'        => 'Người dùng mặc định',
                    'summary'             => 'Tóm tắt',
                    'note'                => 'Ghi chú',
                ],
            ],

            'delay-information' => [
                'title' => 'Thông tin trì hoãn',

                'fields' => [
                    'delay-count'            => 'Số lượng trì hoãn',
                    'delay-unit'             => 'Đơn vị trì hoãn',
                    'delay-form'             => 'Hình thức trì hoãn',
                    'delay-form-helper-text' => 'Nguồn tính toán trì hoãn',
                ],
            ],

            'advanced-information' => [
                'title' => 'Thông tin nâng cao',

                'fields' => [
                    'icon'                => 'Biểu tượng',
                    'decoration-type'     => 'Loại trang trí',
                    'chaining-type'       => 'Loại chuỗi',
                    'suggest'             => 'Gợi ý',
                    'trigger'             => 'Kích hoạt',
                ],
            ],

            'status-and-configuration-information' => [
                'title' => 'Trạng thái & Cấu hình',

                'fields' => [
                    'active'              => 'Hoạt động',
                    'responsible-type'    => 'Loại người chịu trách nhiệm',
                    'responsible-type-tooltip' => 'Người chịu trách nhiệm thực hiện hoạt động này',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                => 'Loại hoạt động',
            'action'              => 'Hành động',
            'default-user'        => 'Người dùng mặc định',
            'summary'             => 'Tóm tắt',
            'note'                => 'Ghi chú',
            'delay-count'         => 'Số lượng trì hoãn',
            'delay-unit'          => 'Đơn vị trì hoãn',
            'delay-form'          => 'Hình thức trì hoãn',
            'icon'                => 'Biểu tượng',
            'decoration-type'     => 'Loại trang trí',
            'chaining-type'       => 'Loại chuỗi',
            'suggest'             => 'Gợi ý',
            'trigger'             => 'Kích hoạt',
            'active'              => 'Hoạt động',
            'responsible-type'    => 'Loại người chịu trách nhiệm',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo loại hoạt động',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Loại hoạt động đã được xóa',
                    'body'  => 'Loại hoạt động đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các loại hoạt động đã được xóa',
                    'body'  => 'Các loại hoạt động đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'activity-type-details' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'name'                => 'Loại hoạt động',
                    'action'              => 'Hành động',
                    'default-user'        => 'Người dùng mặc định',
                    'summary'             => 'Tóm tắt',
                    'note'                => 'Ghi chú',
                ],
            ],

            'delay-information' => [
                'title' => 'Thông tin trì hoãn',
                'entries' => [
                    'delay-count'         => 'Số lượng trì hoãn',
                    'delay-unit'          => 'Đơn vị trì hoãn',
                    'delay-form'          => 'Hình thức trì hoãn',
                ],
            ],

            'advanced-information' => [
                'title' => 'Thông tin nâng cao',
                'entries' => [
                    'icon'                => 'Biểu tượng',
                    'decoration-type'     => 'Loại trang trí',
                    'chaining-type'       => 'Loại chuỗi',
                    'suggest'             => 'Gợi ý',
                    'trigger'             => 'Kích hoạt',
                ],
            ],

            'status-and-configuration-information' => [
                'title' => 'Trạng thái & Cấu hình',
                'entries' => [
                    'active'              => 'Hoạt động',
                    'responsible-type'    => 'Loại người chịu trách nhiệm',
                ],
            ],
        ],
    ],
];
