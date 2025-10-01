<?php

return [
    'form' => [
        'name'  => 'Tên',
        'color' => 'Màu sắc',
    ],

    'table' => [
        'columns' => [
            'name'       => 'Tên',
            'color'      => 'Màu sắc',
            'created-at' => 'Tạo lúc',
            'updated-at' => 'Cập nhật lúc',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Thẻ đã được cập nhật',
                    'body'  => 'Thẻ đã được cập nhật thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Thẻ đã được khôi phục',
                    'body'  => 'Thẻ đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Thẻ đã được xóa',
                    'body'  => 'Thẻ đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Thẻ đã được xóa vĩnh viễn',
                    'body'  => 'Thẻ đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Thẻ đã được khôi phục',
                    'body'  => 'Thẻ đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Thẻ đã được xóa',
                    'body'  => 'Thẻ đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Thẻ đã được xóa vĩnh viễn',
                    'body'  => 'Thẻ đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],
    ],
];