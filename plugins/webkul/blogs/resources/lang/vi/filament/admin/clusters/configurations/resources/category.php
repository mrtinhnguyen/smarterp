<?php

return [
    'navigation' => [
        'title' => 'Danh mục',
        'group' => 'Blog',
    ],

    'form' => [
        'fields' => [
            'name'             => 'Tên',
            'name-placeholder' => 'Tiêu đề danh mục...',
            'sub-title'        => 'Tiêu đề phụ',
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Tên',
            'sub-title'  => 'Tiêu đề phụ',
            'posts'      => 'Bài viết',
            'created-at' => 'Tạo lúc',
        ],

        'filters' => [
            'is-published' => 'Đã xuất bản',
            'author'       => 'Tác giả',
            'creator'      => 'Tạo bởi',
            'category'     => 'Danh mục',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Danh mục đã cập nhật',
                    'body'  => 'Danh mục đã được cập nhật thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Danh mục đã khôi phục',
                    'body'  => 'Danh mục đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Danh mục đã xóa',
                    'body'  => 'Danh mục đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Danh mục đã xóa vĩnh viễn',
                        'body'  => 'Danh mục đã được xóa vĩnh viễn thành công.',
                    ],
                    'error' => [
                        'title' => 'Không thể xóa danh mục',
                        'body'  => 'Danh mục không thể xóa vì đang được sử dụng.',
                    ],
                ],
            ],

            'force-delete-error' => [
                'notification' => [
                    'title' => 'Không thể xóa danh mục',
                    'body' => 'Bạn không thể xóa danh mục này vì nó được liên kết với một số bài viết.',
                ],

                'exception' => 'Bạn không thể xóa vĩnh viễn danh mục này vì nó được liên kết với một số bài viết.'
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Các danh mục đã khôi phục',
                    'body'  => 'Các danh mục đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các danh mục đã xóa',
                    'body'  => 'Các danh mục đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Các danh mục đã xóa vĩnh viễn',
                    'body'  => 'Các danh mục đã được xóa vĩnh viễn thành công.',
                ],
            ],
            
            'force-delete-error' => [
                'notification' => [
                    'title' => 'Không thể xóa danh mục',
                    'body' => 'Bạn không thể xóa danh mục này vì nó được liên kết với một số bài viết.',
                ],
            ],
        ],
    ],

    'infolist' => [
    ],
];
