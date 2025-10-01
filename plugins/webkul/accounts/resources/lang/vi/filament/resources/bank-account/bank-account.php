<?php

return [
    'navigation' => [
        'title' => 'Tài khoản ngân hàng',
        'group' => 'Ngân hàng',
    ],

    'form' => [
        'account-number'     => 'Số tài khoản',
        'bank'               => [
            'title'    => 'Ngân hàng',
            'sections' => [
                'general' => [
                    'title' => 'Thông tin chung',

                    'fields' => [
                        'name'  => 'Tên',
                        'code'  => 'Mã định danh ngân hàng',
                        'email' => 'Email',
                        'phone' => 'Điện thoại',
                    ],
                ],

                'address' => [
                    'title' => 'Địa chỉ',

                    'fields' => [
                        'address' => 'Địa chỉ',
                        'city'    => 'Thành phố',
                        'state'   => 'Tỉnh/Thành phố',
                        'country' => 'Quốc gia',
                        'zip'     => 'Mã bưu điện',
                    ],
                ],
            ],
        ],

        'sections' => [
            'fields' => [
                'account-number' => 'Số tài khoản',
                'bank'           => 'Ngân hàng',
                'currency'       => 'Tiền tệ',
                'account-holder' => 'Chủ tài khoản',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'account-number' => 'Số tài khoản',
            'bank'           => 'Ngân hàng',
            'currency'       => 'Tiền tệ',
            'account-holder' => 'Chủ tài khoản',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo tài khoản ngân hàng',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Tài khoản ngân hàng đã được xóa',
                    'body'  => 'Tài khoản ngân hàng đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các tài khoản ngân hàng đã được xóa',
                    'body'  => 'Các tài khoản ngân hàng đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'account-number' => 'Số tài khoản',
                    'bank'           => 'Ngân hàng',
                    'currency'       => 'Tiền tệ',
                    'account-holder' => 'Chủ tài khoản',
                ],
            ],

            'bank-info' => [
                'title' => 'Thông tin ngân hàng',
                'entries' => [
                    'bank-name'  => 'Tên ngân hàng',
                    'bank-code'  => 'Mã ngân hàng',
                    'bank-email' => 'Email ngân hàng',
                    'bank-phone' => 'Điện thoại ngân hàng',
                ],
            ],
        ],
    ],
];
