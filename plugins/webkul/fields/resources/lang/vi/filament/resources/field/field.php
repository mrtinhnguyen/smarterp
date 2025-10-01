<?php

return [
    'navigation' => [
        'title' => 'Trường tùy chỉnh',
        'group' => 'Cài đặt',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'fields' => [
                    'name'              => 'Tên',
                    'code'              => 'Mã',
                    'code-helper-text'  => 'Mã phải bắt đầu bằng chữ cái hoặc dấu gạch dưới, và chỉ có thể chứa chữ cái, số và dấu gạch dưới.',
                ],
            ],

            'options' => [
                'title' => 'Tùy chọn',

                'fields' => [
                    'add-option' => 'Thêm tùy chọn',
                ],
            ],

            'form-settings' => [
                'title' => 'Cài đặt biểu mẫu',

                'field-sets' => [
                    'validations' => [
                        'title' => 'Xác thực',

                        'fields' => [
                            'validation'     => 'Xác thực',
                            'field'          => 'Trường',
                            'value'          => 'Giá trị',
                            'add-validation' => 'Thêm xác thực',
                        ],
                    ],

                    'additional-settings' => [
                        'title' => 'Cài đặt bổ sung',

                        'fields' => [
                            'setting'     => 'Cài đặt',
                            'value'       => 'Giá trị',
                            'color'       => 'Màu sắc',
                            'add-setting' => 'Thêm cài đặt',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'        => 'Tên',
            'code'        => 'Mã',
            'type'        => 'Loại',
            'is-required' => 'Bắt buộc',
            'created-at'  => 'Được tạo lúc',
            'updated-at'  => 'Được cập nhật lúc',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo trường',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Trường đã được xóa',
                    'body'  => 'Trường đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các trường đã được xóa',
                    'body'  => 'Các trường đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'name'        => 'Tên',
                    'code'        => 'Mã',
                    'type'        => 'Loại',
                    'is-required' => 'Bắt buộc',
                ],
            ],
        ],
    ],
];
