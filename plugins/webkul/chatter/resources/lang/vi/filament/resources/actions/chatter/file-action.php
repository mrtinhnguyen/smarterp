<?php

return [
    'setup' => [
        'title'   => 'Tệp đính kèm',
        'tooltip' => 'Tải lên tệp đính kèm',

        'form' => [
            'fields' => [
                'files'                  => 'Tệp',
                'attachment-helper-text' => 'Kích thước tệp tối đa: 10MB. Loại được phép: Hình ảnh, PDF, Word, Excel, Văn bản',

                'actions' => [
                    'delete' => [
                        'title' => 'Tệp đã được xóa',
                        'body'  => 'Tệp đã được xóa thành công.',
                    ],
                ],
            ],
        ],

        'actions' => [
            'notification' => [
                'success' => [
                    'title' => 'Tệp đính kèm đã được tải lên',
                    'body'  => 'Tệp đính kèm đã được tải lên thành công.',
                ],

                'warning'  => [
                    'title' => 'Không có file mới',
                    'body'  => 'Tất cả file đã được tải lên.',
                ],

                'error' => [
                    'title' => 'Lỗi tải lên tệp đính kèm',
                    'body'  => 'Không thể tải lên tệp đính kèm ',
                ],
            ],
        ],
    ],
];
