<?php

return [
    'form' => [
        'name'      => 'Tên',
        'full-name' => 'Tên đầy đủ',
    ],

    'table' => [
        'columns' => [
            'name'       => 'Tên',
            'full-name'  => 'Tên đầy đủ',
            'created-at' => 'Tạo lúc',
            'updated-at' => 'Cập nhật lúc',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Ngành nghề đã được cập nhật',
                    'body'  => 'Ngành nghề đã được cập nhật thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Ngành nghề đã được khôi phục',
                    'body'  => 'Ngành nghề đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Ngành nghề đã được xóa',
                    'body'  => 'Ngành nghề đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Ngành nghề đã được xóa vĩnh viễn',
                    'body'  => 'Ngành nghề đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Ngành nghề đã được khôi phục',
                    'body'  => 'Ngành nghề đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Ngành nghề đã được xóa',
                    'body'  => 'Ngành nghề đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Ngành nghề đã được xóa vĩnh viễn',
                    'body'  => 'Ngành nghề đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],
    ],
];