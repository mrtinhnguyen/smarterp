<?php

return [
    'table' => [
        'header-actions' => [
            'create' => [
                'label' => 'Thêm nhiệm vụ phụ',

                'notification' => [
                    'title' => 'Nhiệm vụ đã được tạo',
                    'body'  => 'Nhiệm vụ đã được tạo thành công.',
                ],
            ],
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Nhiệm vụ đã được khôi phục',
                    'body'  => 'Nhiệm vụ đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Nhiệm vụ đã được xóa',
                    'body'  => 'Nhiệm vụ đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Nhiệm vụ đã được xóa vĩnh viễn',
                    'body'  => 'Nhiệm vụ đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],
    ],
];
