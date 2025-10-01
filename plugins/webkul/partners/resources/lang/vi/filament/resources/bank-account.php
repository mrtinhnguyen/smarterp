<?php

return [
    'navigation' => [
        'group' => 'Ngân hàng',
        'title' => 'Tài khoản ngân hàng',
    ],

    'form' => [
        'account-number'     => 'Số tài khoản',
        'bank'               => 'Ngân hàng',
        'account-holder'     => 'Chủ tài khoản',
        'can-send-money'     => 'Có thể gửi tiền',
    ],

    'table' => [
        'columns' => [
            'account-number' => 'Số tài khoản',
            'bank'           => 'Ngân hàng',
            'account-holder' => 'Chủ tài khoản',
            'send-money'     => 'Có thể gửi tiền',
            'created-at'     => 'Tạo lúc',
            'updated-at'     => 'Cập nhật lúc',
            'deleted-at'     => 'Xóa lúc',
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
            'created-at'         => 'Tạo lúc',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Tài khoản ngân hàng đã được cập nhật',
                    'body'  => 'Tài khoản ngân hàng đã được cập nhật thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Tài khoản ngân hàng đã được khôi phục',
                    'body'  => 'Tài khoản ngân hàng đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tài khoản ngân hàng đã được xóa',
                    'body'  => 'Tài khoản ngân hàng đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Tài khoản ngân hàng đã được xóa vĩnh viễn',
                    'body'  => 'Tài khoản ngân hàng đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Tài khoản ngân hàng đã được khôi phục',
                    'body'  => 'Tài khoản ngân hàng đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tài khoản ngân hàng đã được xóa',
                    'body'  => 'Tài khoản ngân hàng đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Tài khoản ngân hàng đã được xóa vĩnh viễn',
                    'body'  => 'Tài khoản ngân hàng đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],
    ],
];