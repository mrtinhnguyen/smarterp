<?php

return [
    'form' => [
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
                    'street1' => 'Đường 1',
                    'street2' => 'Đường 2',
                    'state'   => 'Tỉnh/Thành phố',
                    'zip'     => 'Mã bưu điện',
                    'country' => 'Quốc gia',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'           => 'Tên',
            'code'           => 'Mã định danh ngân hàng',
            'country'        => 'Quốc gia',
            'created-at'     => 'Tạo lúc',
            'updated-at'     => 'Cập nhật lúc',
            'deleted-at'     => 'Xóa lúc',
        ],

        'groups' => [
            'country'               => 'Quốc gia',
            'created-at'            => 'Tạo lúc',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Ngân hàng đã được cập nhật',
                    'body'  => 'Ngân hàng đã được cập nhật thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Ngân hàng đã được khôi phục',
                    'body'  => 'Ngân hàng đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Ngân hàng đã được xóa',
                    'body'  => 'Ngân hàng đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Ngân hàng đã được xóa vĩnh viễn',
                    'body'  => 'Ngân hàng đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Ngân hàng đã được khôi phục',
                    'body'  => 'Ngân hàng đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Ngân hàng đã được xóa',
                    'body'  => 'Ngân hàng đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Ngân hàng đã được xóa vĩnh viễn',
                    'body'  => 'Ngân hàng đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],
    ],
];