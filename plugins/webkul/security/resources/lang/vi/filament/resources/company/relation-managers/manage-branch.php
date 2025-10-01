<?php

return [
    'form' => [
        'tabs' => [
            'general-information' => [
                'title' => 'Thông tin chung',

                'sections' => [
                    'branch-information' => [
                        'title' => 'Thông tin chi nhánh',

                        'fields' => [
                            'company-name'                => 'Tên công ty',
                            'registration-number'         => 'Số đăng ký',
                            'tax-id'                      => 'Mã số thuế',
                            'tax-id-tooltip'              => 'Mã số thuế là định danh duy nhất cho công ty của bạn.',
                            'color'                       => 'Màu sắc',
                            'company-id'                  => 'ID công ty',
                            'company-id-tooltip'          => 'ID công ty là định danh duy nhất cho công ty của bạn.',
                        ],
                    ],

                    'branding' => [
                        'title'  => 'Thương hiệu',
                        'fields' => [
                            'branch-logo' => 'Logo chi nhánh',
                        ],
                    ],
                ],
            ],

            'address-information' => [
                'title' => 'Thông tin địa chỉ',

                'sections' => [
                    'address-information' => [
                        'title' => 'Thông tin địa chỉ',

                        'fields' => [
                            'street1'                => 'Địa chỉ 1',
                            'street2'                => 'Địa chỉ 2',
                            'city'                   => 'Thành phố',
                            'zip'                    => 'Mã bưu điện',
                            'country'                => 'Quốc gia',
                            'country-currency-name'  => 'Tên tiền tệ',
                            'country-phone-code'     => 'Mã điện thoại',
                            'country-code'           => 'Mã',
                            'country-name'           => 'Tên quốc gia',
                            'country-state-required' => 'Bắt buộc tỉnh/thành',
                            'country-zip-required'   => 'Bắt buộc mã bưu điện',
                            'country-create'         => 'Tạo quốc gia',
                            'state'                  => 'Tỉnh/thành',
                            'state-name'             => 'Tên tỉnh/thành',
                            'state-code'             => 'Mã tỉnh/thành',
                            'zip-code'               => 'Mã bưu điện',
                            'state-create'           => 'Tạo tỉnh/thành',
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
                            'currency-create'         => 'Tạo tiền tệ',
                            'company-foundation-date' => 'Ngày thành lập công ty',
                            'status'                  => 'Trạng thái',
                        ],
                    ],
                ],
            ],

            'contact-information' => [
                'title' => 'Thông tin liên hệ',

                'sections' => [
                    'contact-information' => [
                        'title' => 'Thông tin liên hệ',

                        'fields' => [
                            'email-address' => 'Địa chỉ email',
                            'phone-number'  => 'Số điện thoại',
                            'mobile-number' => 'Số điện thoại',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'logo'                 => 'Logo',
            'company-name'         => 'Tên chi nhánh',
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
            'company-name' => 'Tên chi nhánh',
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
            'trashed' => 'Đã xóa',
            'status'  => 'Trạng thái',
            'country' => 'Quốc gia',
        ],

        'header-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Đã tạo chi nhánh',
                    'body'  => 'Chi nhánh đã được tạo thành công.',
                ],
            ],
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Đã cập nhật chi nhánh',
                    'body'  => 'Chi nhánh đã được cập nhật thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Đã xóa chi nhánh',
                    'body'  => 'Chi nhánh đã được xóa thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Đã khôi phục chi nhánh',
                    'body'  => 'Chi nhánh đã được khôi phục thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Đã khôi phục chi nhánh',
                    'body'  => 'Các chi nhánh đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Đã xóa chi nhánh',
                    'body'  => 'Các chi nhánh đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Đã xóa vĩnh viễn chi nhánh',
                    'body'  => 'Các chi nhánh đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'tabs' => [
            'general-information' => [
                'title' => 'Thông tin chung',

                'sections' => [
                    'branch-information' => [
                        'title' => 'Thông tin chi nhánh',

                        'entries' => [
                            'company-name'                => 'Tên công ty',
                            'registration-number'         => 'Số đăng ký',
                            'registration-number-tooltip' => 'Mã số thuế là định danh duy nhất cho công ty của bạn.',
                            'color'                       => 'Màu sắc',
                        ],
                    ],

                    'branding' => [
                        'title'   => 'Thương hiệu',
                        'entries' => [
                            'branch-logo' => 'Logo chi nhánh',
                        ],
                    ],
                ],
            ],

            'address-information' => [
                'title' => 'Thông tin địa chỉ',

                'sections' => [
                    'address-information' => [
                        'title' => 'Thông tin địa chỉ',

                        'entries' => [
                            'street1'                => 'Địa chỉ 1',
                            'street2'                => 'Địa chỉ 2',
                            'city'                   => 'Thành phố',
                            'zip'                    => 'Mã bưu điện',
                            'country'                => 'Quốc gia',
                            'country-currency-name'  => 'Tên tiền tệ',
                            'country-phone-code'     => 'Mã điện thoại',
                            'country-code'           => 'Mã',
                            'country-name'           => 'Tên quốc gia',
                            'country-state-required' => 'Bắt buộc tỉnh/thành',
                            'country-zip-required'   => 'Bắt buộc mã bưu điện',
                            'country-create'         => 'Tạo quốc gia',
                            'state'                  => 'Tỉnh/thành',
                            'state-name'             => 'Tên tỉnh/thành',
                            'state-code'             => 'Mã tỉnh/thành',
                            'zip-code'               => 'Mã bưu điện',
                            'state-create'           => 'Tạo tỉnh/thành',
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
                            'currency-create'         => 'Tạo tiền tệ',
                            'company-foundation-date' => 'Ngày thành lập công ty',
                            'status'                  => 'Trạng thái',
                        ],
                    ],
                ],
            ],

            'contact-information' => [
                'title' => 'Thông tin liên hệ',

                'sections' => [
                    'contact-information' => [
                        'title' => 'Thông tin liên hệ',

                        'entries' => [
                            'email-address' => 'Địa chỉ email',
                            'phone-number'  => 'Số điện thoại',
                            'mobile-number' => 'Số điện thoại',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
