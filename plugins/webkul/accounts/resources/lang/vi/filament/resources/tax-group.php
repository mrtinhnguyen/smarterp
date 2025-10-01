<?php

return [
    'form' => [
        'sections' => [
            'fields' => [
                'company'            => 'Công ty',
                'country'            => 'Quốc gia',
                'name'               => 'Tên',
                'preceding-subtotal' => 'Tổng phụ trước',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'company'            => 'Công ty',
            'country'            => 'Quốc gia',
            'created-by'         => 'Tạo bởi',
            'name'               => 'Tên',
            'preceding-subtotal' => 'Tổng phụ trước',
            'created-at'         => 'Ngày tạo',
            'updated-at'         => 'Ngày cập nhật',
        ],

        'groups' => [
            'name'       => 'Tên',
            'company'    => 'Công ty',
            'country'    => 'Quốc gia',
            'created-by' => 'Tạo bởi',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Nhóm thuế đã xóa',
                        'body'  => 'Nhóm thuế đã được xóa thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa nhóm thuế',
                        'body'  => 'Nhóm thuế không thể bị xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Các nhóm thuế đã xóa',
                        'body'  => 'Các nhóm thuế đã được xóa thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa các nhóm thuế',
                        'body'  => 'Các nhóm thuế không thể bị xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'company'            => 'Công ty',
                'country'            => 'Quốc gia',
                'name'               => 'Tên',
                'preceding-subtotal' => 'Tổng phụ trước',
            ],
        ],
    ],
];