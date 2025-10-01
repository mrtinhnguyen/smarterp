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
                    'title' => 'Chung',

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
                        'street1' => 'Đường 1',
                        'street2' => 'Đường 2',
                        'state'   => 'Tỉnh/Thành phố',
                        'zip'     => 'Mã bưu điện',
                        'country' => 'Quốc gia',
                    ],
                ],
            ],
        ],

        'account-holder'     => 'Chủ tài khoản',
    ],

    'table' => [
        'columns' => [
            'account-number' => 'Số tài khoản',
            'bank'           => 'Ngân hàng',
            'account-holder' => 'Chủ tài khoản',
            'send-money'     => 'Có thể gửi tiền',
            'created-at'     => 'Ngày tạo',
            'updated-at'     => 'Ngày cập nhật',
            'deleted-at'     => 'Ngày xóa',
        ],

        'filters' => [
            'bank'           => 'Ngân hàng',
            'account-holder' => 'Chủ tài khoản',
            'creator'        => 'Người tạo',
            'can-send-money' => 'Có thể gửi tiền',
        ],

        'groups' => [
            'bank'               => 'Ngân hàng',
            'can-send-money'     => 'Có thể gửi tiền',
            'created-at'         => 'Ngày tạo',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Tài khoản ngân hàng đã cập nhật',
                    'body'  => 'Tài khoản ngân hàng đã được cập nhật thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Tài khoản ngân hàng đã khôi phục',
                    'body'  => 'Tài khoản ngân hàng đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tài khoản ngân hàng đã xóa',
                    'body'  => 'Tài khoản ngân hàng đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Tài khoản ngân hàng đã xóa vĩnh viễn',
                    'body'  => 'Tài khoản ngân hàng đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Các tài khoản ngân hàng đã khôi phục',
                    'body'  => 'Các tài khoản ngân hàng đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các tài khoản ngân hàng đã xóa',
                    'body'  => 'Các tài khoản ngân hàng đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Các tài khoản ngân hàng đã xóa vĩnh viễn',
                    'body'  => 'Các tài khoản ngân hàng đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],
    ],
];