<?php

return [
    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Chung',

                'fields' => [
                    'name' => 'Tên',
                    'type' => 'Loại',
                ],
            ],

            'options' => [
                'title'  => 'Tùy chọn',

                'fields' => [
                    'name'        => 'Tên',
                    'color'       => 'Màu sắc',
                    'extra-price' => 'Giá bổ sung',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'        => 'Tên',
            'type'        => 'Loại',
            'deleted-at'  => 'Ngày xóa',
            'created-at'  => 'Ngày tạo',
            'updated-at'  => 'Ngày cập nhật',
        ],

        'groups' => [
            'type'       => 'Loại',
            'created-at' => 'Ngày tạo',
            'updated-at' => 'Ngày cập nhật',
        ],

        'filters' => [
            'type' => 'Loại',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Thuộc tính đã khôi phục',
                    'body'  => 'Thuộc tính đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Thuộc tính đã xóa',
                    'body'  => 'Thuộc tính đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Thuộc tính đã xóa vĩnh viễn',
                        'body'  => 'Thuộc tính đã được xóa vĩnh viễn thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa thuộc tính',
                        'body'  => 'Thuộc tính không thể bị xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Các thuộc tính đã khôi phục',
                    'body'  => 'Các thuộc tính đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các thuộc tính đã xóa',
                    'body'  => 'Các thuộc tính đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Các thuộc tính đã xóa vĩnh viễn',
                        'body'  => 'Các thuộc tính đã được xóa vĩnh viễn thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa các thuộc tính',
                        'body'  => 'Các thuộc tính không thể bị xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',

                'entries' => [
                    'name' => 'Tên',
                    'type' => 'Loại',
                ],
            ],

            'record-information' => [
                'title' => 'Thông tin bản ghi',

                'entries' => [
                    'creator'    => 'Tạo bởi',
                    'created_at' => 'Ngày tạo',
                    'updated_at' => 'Cập nhật lần cuối',
                ],
            ],
        ],
    ],
];