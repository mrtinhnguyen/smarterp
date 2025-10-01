<?php

return [
    'notification' => [
        'title' => 'Nhóm thuế đã cập nhật',
        'body'  => 'Nhóm thuế đã được cập nhật thành công.',
    ],

    'header-actions' => [
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
];