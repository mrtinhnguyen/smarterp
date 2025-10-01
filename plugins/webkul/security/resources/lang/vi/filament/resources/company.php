<?php

return [
    'title' => 'Công ty',

    'navigation' => [
        'title' => 'Công ty',
        'group' => 'Cài đặt',
    ],

    'global-search' => [
        'name'  => 'Tên',
        'email' => 'Email',
    ],

    'form' => [
        'sections' => [
            'company-information' => [
                'title'  => 'Thông tin công ty',
                'fields' => [
                    'name'                  => 'Tên công ty',
                    'registration-number'   => 'Số đăng ký',
                    'company-id'            => 'ID công ty',
                    'tax-id'                => 'Mã số thuế',
                    'tax-id-tooltip'        => 'Mã số thuế là định danh duy nhất cho công ty của bạn.',
                    'website'               => 'Website',
                ],
            ],

            'address-information' => [
                'title'  => 'Thông tin địa chỉ',

                'fields' => [
                    'street1'        => 'Địa chỉ 1',
                    'street2'        => 'Địa chỉ 2',
                    'city'           => 'Thành phố',
                    'zipcode'        => 'Mã bưu điện',
                    'country'        => 'Quốc gia',
                    'currency-name'  => 'Tên tiền tệ',
                    'phone-code'     => 'Mã điện thoại',
                    'code'           => 'Mã',
                    'country-name'   => 'Tên quốc gia',
                    'state-required' => 'Bắt buộc tỉnh/thành',
                    'zip-required'   => 'Bắt buộc mã bưu điện',
                    'create-country' => 'Tạo quốc gia',
                    'state'          => 'Tỉnh/thành',
                    'state-name'     => 'Tên tỉnh/thành',
                    'state-code'     => 'Mã tỉnh/thành',
                    'create-state'   => 'Tạo tỉnh/thành',
                ],
            ],

            'additional-information' => [
                'title' => 'Thông tin bổ sung',

                'fields' => [
                    'default-currency'        => 'Tiền tệ mặc định',
                    'currency-name'           => 'Tên tiền tệ',
                    'currency-full-name'      => 'Tên đầy đủ tiền tệ',
                    'currency-symbol'         => 'Ký hiệu tiền tệ',
                    'currency-iso-numeric'    => 'Mã số ISO tiền tệ',
                    'currency-decimal-places' => 'Số chữ số thập phân',
                    'currency-rounding'       => 'Làm tròn tiền tệ',
                    'currency-status'         => 'Trạng thái tiền tệ',
                    'company-foundation-date' => 'Ngày thành lập công ty',
                    'currency-create'         => 'Tạo tiền tệ',
                    'status'                  => 'Trạng thái',
                ],
            ],

            'branding' => [
                'title'  => 'Thương hiệu',
                'fields' => [
                    'company-logo' => 'Logo công ty',
                    'color'        => 'Màu sắc',
                ],
            ],

            'contact-information' => [
                'title'  => 'Thông tin liên hệ',
                'fields' => [
                    'email'  => 'Địa chỉ email',
                    'phone'  => 'Số điện thoại',
                    'mobile' => 'Số điện thoại',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'logo'                 => 'Logo',
            'company-name'         => 'Tên công ty',
            'branches'             => 'Chi nhánh',
            'email'                => 'Email',
            'city'                 => 'Thành phố',
            'country'              => 'Quốc gia',
            'currency'             => 'Tiền tệ',
            'status'               => 'Trạng thái',
            'created-at'           => 'Tạo lúc',
            'updated-at'           => 'Cập nhật lúc',
        ],

        'groups' => [
            'company-name' => 'Tên công ty',
            'city'         => 'Thành phố',
            'country'      => 'Quốc gia',
            'state'        => 'Tỉnh/thành',
            'email'        => 'Email',
            'phone'        => 'Điện thoại',
            'currency'     => 'Tiền tệ',
            'created-at'   => 'Tạo lúc',
            'updated-at'   => 'Cập nhật lúc',
        ],

        'filters' => [
            'status'  => 'Trạng thái',
            'country' => 'Quốc gia',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Đã chỉnh sửa công ty',
                    'body'  => 'Công ty đã được chỉnh sửa thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Đã xóa công ty',
                    'body'  => 'Công ty đã được xóa thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Đã khôi phục công ty',
                    'body'  => 'Công ty đã được khôi phục thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Đã khôi phục công ty',
                    'body'  => 'Các công ty đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Đã xóa công ty',
                    'body'  => 'Các công ty đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Đã xóa vĩnh viễn công ty',
                    'body'  => 'Các công ty đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Đã tạo công ty',
                    'body'  => 'Các công ty đã được tạo thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'company-information' => [
                'title'   => 'Thông tin công ty',
                'entries' => [
                    'name'                  => 'Tên công ty',
                    'registration-number'   => 'Số đăng ký',
                    'company-id'            => 'ID công ty',
                    'tax-id'                => 'Mã số thuế',
                    'tax-id-tooltip'        => 'Mã số thuế là định danh duy nhất cho công ty của bạn.',
                    'website'               => 'Website',
                ],
            ],

            'address-information' => [
                'title'  => 'Thông tin địa chỉ',

                'entries' => [
                    'street1'        => 'Địa chỉ 1',
                    'street2'        => 'Địa chỉ 2',
                    'city'           => 'Thành phố',
                    'zipcode'        => 'Mã bưu điện',
                    'country'        => 'Quốc gia',
                    'currency-name'  => 'Tên tiền tệ',
                    'phone-code'     => 'Mã điện thoại',
                    'code'           => 'Mã',
                    'country-name'   => 'Tên quốc gia',
                    'state-required' => 'Bắt buộc tỉnh/thành',
                    'zip-required'   => 'Bắt buộc mã bưu điện',
                    'create-country' => 'Tạo quốc gia',
                    'state'          => 'Tỉnh/thành',
                    'state-name'     => 'Tên tỉnh/thành',
                    'state-code'     => 'Mã tỉnh/thành',
                    'create-state'   => 'Tạo tỉnh/thành',
                ],
            ],

            'additional-information' => [
                'title' => 'Thông tin bổ sung',

                'entries' => [
                    'default-currency'        => 'Tiền tệ mặc định',
                    'currency-name'           => 'Tên tiền tệ',
                    'currency-full-name'      => 'Tên đầy đủ tiền tệ',
                    'currency-symbol'         => 'Ký hiệu tiền tệ',
                    'currency-iso-numeric'    => 'Mã số ISO tiền tệ',
                    'currency-decimal-places' => 'Số chữ số thập phân',
                    'currency-rounding'       => 'Làm tròn tiền tệ',
                    'currency-status'         => 'Trạng thái tiền tệ',
                    'company-foundation-date' => 'Ngày thành lập công ty',
                    'currency-create'         => 'Tạo tiền tệ',
                    'status'                  => 'Trạng thái',
                ],
            ],

            'branding' => [
                'title'   => 'Thương hiệu',
                'entries' => [
                    'company-logo' => 'Logo công ty',
                    'color'        => 'Màu sắc',
                ],
            ],

            'contact-information' => [
                'title'   => 'Thông tin liên hệ',
                'entries' => [
                    'email'  => 'Địa chỉ email',
                    'phone'  => 'Số điện thoại',
                    'mobile' => 'Số điện thoại',
                ],
            ],
        ],
    ],
];
