<?php

return [
    'title' => 'Kỹ năng',

    'navigation' => [
        'title' => 'Kỹ năng',
    ],

    'form' => [
        'sections' => [
            'skill-details' => [
                'title' => 'Chi tiết Kỹ năng',

                'fields' => [
                    'employee'       => 'Nhân viên',
                    'skill'          => 'Kỹ năng',
                    'skill-level'    => 'Cấp độ',
                    'skill-type'     => 'Loại Kỹ năng',
                ],
            ],
            'addition-information' => [
                'title' => 'Thông tin Bổ sung',

                'fields' => [
                    'created-by' => 'Tạo bởi',
                    'updated-by' => 'Cập nhật bởi',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'              => 'ID',
            'employee'        => 'Nhân viên',
            'skill'           => 'Kỹ năng',
            'skill-level'     => 'Cấp độ',
            'skill-type'      => 'Loại Kỹ năng',
            'user'            => 'Người dùng',
            'proficiency'     => 'Thành thạo',
            'created-by'      => 'Tạo bởi',
            'created-at'      => 'Ngày tạo',
        ],

        'filters' => [
            'employee'        => 'Nhân viên',
            'skill'           => 'Kỹ năng',
            'skill-level'     => 'Cấp độ',
            'skill-type'      => 'Loại Kỹ năng',
            'user'            => 'Người dùng',
            'created-by'      => 'Tạo bởi',
            'created-at'      => 'Ngày tạo',
            'updated-at'      => 'Ngày cập nhật',
        ],

        'groups' => [
            'employee'   => 'Nhân viên',
            'skill-type' => 'Loại Kỹ năng',
        ],
    ],

    'infolist' => [
        'sections' => [
            'skill-details' => [
                'title' => 'Chi tiết Kỹ năng',

                'entries' => [
                    'employee'        => 'Nhân viên',
                    'skill'           => 'Kỹ năng',
                    'skill-level'     => 'Cấp độ',
                    'skill-type'      => 'Loại Kỹ năng',
                ],
            ],

            'additional-information' => [
                'title' => 'Thông tin Bổ sung',

                'entries' => [
                    'created-by' => 'Tạo bởi',
                    'updated-by' => 'Cập nhật bởi',
                ],
            ],
        ],
    ],
];