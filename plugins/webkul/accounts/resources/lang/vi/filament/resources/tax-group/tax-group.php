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
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo nhóm thuế',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Nhóm thuế đã được xóa',
                    'body'  => 'Nhóm thuế đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các nhóm thuế đã được xóa',
                    'body'  => 'Các nhóm thuế đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'company'            => 'Công ty',
                    'country'            => 'Quốc gia',
                    'name'               => 'Tên',
                    'preceding-subtotal' => 'Tổng phụ trước',
                ],
            ],
        ],
    ],
];
