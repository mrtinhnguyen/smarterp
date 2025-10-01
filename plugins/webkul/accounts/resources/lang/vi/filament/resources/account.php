<?php

return [
    'form' => [
        'sections' => [
            'fields' => [
                'code'          => 'Mã tài khoản',
                'account-name'  => 'Tên tài khoản',
                'accounting'    => 'Kế toán',
                'account-type'  => 'Loại tài khoản',
                'default-taxes' => 'Thuế mặc định',
                'tags'          => 'Nhãn',
                'journals'      => 'Sổ nhật ký',
                'currency'      => 'Tiền tệ',
                'deprecated'    => 'Đã ngừng sử dụng',
                'reconcile'     => 'Đối soát',
                'non-trade'     => 'Phi thương mại',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'code'         => 'Mã tài khoản',
            'account-name' => 'Tên tài khoản',
            'account-type' => 'Loại tài khoản',
            'currency'     => 'Tiền tệ',
            'deprecated'   => 'Đã ngừng sử dụng',
            'reconcile'    => 'Đối soát',
            'non-trade'    => 'Phi thương mại',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Tài khoản đã được xóa',
                    'body'  => 'Tài khoản đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Các tài khoản đã được xóa',
                    'body'  => 'Các tài khoản đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'name'            => 'Tên',
                'tax-type'        => 'Loại thuế',
                'tax-computation' => 'Tính toán thuế',
                'tax-scope'       => 'Phạm vi thuế',
                'status'          => 'Trạng thái',
                'amount'          => 'Số tiền',
            ],

            'field-set' => [
                'advanced-options' => [
                    'title' => 'Tùy chọn nâng cao',

                    'entries' => [
                        'invoice-label'       => 'Nhãn hóa đơn',
                        'tax-group'           => 'Nhóm thuế',
                        'country'             => 'Quốc gia',
                        'include-in-price'    => 'Bao gồm trong giá',
                        'include-base-amount' => 'Bao gồm số tiền cơ sở',
                        'is-base-affected'    => 'Có ảnh hưởng đến cơ sở',
                    ],
                ],

                'description-and-legal-notes' => [
                    'title'   => 'Mô tả & Ghi chú pháp lý hóa đơn',
                    'entries' => [
                        'description' => 'Mô tả',
                        'legal-notes' => 'Ghi chú pháp lý',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'code'          => 'Mã tài khoản',
                'account-name'  => 'Tên tài khoản',
                'accounting'    => 'Kế toán',
                'account-type'  => 'Loại tài khoản',
                'default-taxes' => 'Thuế mặc định',
                'tags'          => 'Nhãn',
                'journals'      => 'Sổ nhật ký',
                'currency'      => 'Tiền tệ',
                'deprecated'    => 'Đã ngừng sử dụng',
                'reconcile'     => 'Đối soát',
                'non-trade'     => 'Phi thương mại',
            ],
        ],
    ],
];