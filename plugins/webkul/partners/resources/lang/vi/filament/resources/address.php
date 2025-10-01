<?php

return [
    'form' => [
        'partner' => 'Đối tác',
        'name'    => 'Tên',
        'email'   => 'Email',
        'phone'   => 'Điện thoại',
        'mobile'  => 'Di động',
        'type'    => 'Loại',
        'address' => 'Địa chỉ',
        'city'    => 'Thành phố',
        'street1' => 'Đường 1',
        'street2' => 'Đường 2',
        'state'   => 'Tỉnh/Thành phố',
        'zip'     => 'Mã bưu điện',
        'code'    => 'Mã',
        'country' => 'Quốc gia',
    ],

    'table' => [
        'header-actions' => [
            'create' => [
                'label' => 'Thêm địa chỉ',

                'notification' => [
                    'title' => 'Địa chỉ đã được tạo',
                    'body'  => 'Địa chỉ đã được tạo thành công.',
                ],
            ],
        ],

        'columns' => [
            'type'    => 'Loại',
            'name'    => 'Tên liên hệ',
            'address' => 'Địa chỉ',
            'city'    => 'Thành phố',
            'street1' => 'Đường 1',
            'street2' => 'Đường 2',
            'state'   => 'Tỉnh/Thành phố',
            'zip'     => 'Mã bưu điện',
            'country' => 'Quốc gia',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Địa chỉ đã được cập nhật',
                    'body'  => 'Địa chỉ đã được cập nhật thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Địa chỉ đã được xóa',
                    'body'  => 'Địa chỉ đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Địa chỉ đã được xóa',
                    'body'  => 'Địa chỉ đã được xóa thành công.',
                ],
            ],
        ],
    ],
];