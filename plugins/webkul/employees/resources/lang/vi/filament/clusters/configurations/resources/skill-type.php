<?php

return [
    'title' => 'Loại Kỹ năng',

    'navigation' => [
        'title' => 'Loại Kỹ năng',
        'group' => 'Nhân viên',
    ],

    'form' => [
        'sections' => [
            'fields' => [
                'name'       => 'Tên',
                'color'      => 'Màu sắc',
                'status'     => 'Trạng thái',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => 'ID',
            'name'       => 'Loại Kỹ năng',
            'status'     => 'Trạng thái',
            'color'      => 'Màu sắc',
            'skills'     => 'Kỹ năng',
            'levels'     => 'Cấp độ',
            'created-by' => 'Tạo bởi',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'filters' => [
            'skill-levels' => 'Cấp độ Kỹ năng',
            'skills'       => 'Kỹ năng',
            'created-by'   => 'Tạo bởi',
            'status'       => 'Trạng thái',
            'updated-at'   => 'Ngày cập nhật',
            'created-at'   => 'Ngày tạo',
        ],

        'groups' => [
            'name'       => 'Loại Kỹ năng',
            'color'      => 'Màu sắc',
            'status'     => 'Trạng thái',
            'created-by' => 'Tạo bởi',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Loại kỹ năng đã khôi phục',
                    'body'  => 'Loại kỹ năng đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Loại kỹ năng đã xóa',
                    'body'  => 'Loại kỹ năng đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Các loại kỹ năng đã khôi phục',
                    'body'  => 'Các loại kỹ năng đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các loại kỹ năng đã xóa',
                    'body'  => 'Các loại kỹ năng đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Các loại kỹ năng đã xóa vĩnh viễn',
                    'body'  => 'Các loại kỹ năng đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Loại Kỹ năng',
                    'body'  => 'Loại kỹ năng đã được tạo thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'name'   => 'Loại Kỹ năng',
                'color'  => 'Màu sắc',
                'status' => 'Trạng thái',
            ],
        ],
    ],
];