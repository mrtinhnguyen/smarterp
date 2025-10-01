<?php

return [
    'navigation' => [
        'title' => 'Bài viết Blog',
        'group' => 'Website',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Chung',

                'fields' => [
                    'title'             => 'Tiêu đề',
                    'sub-title'         => 'Tiêu đề phụ',
                    'title-placeholder' => 'Tiêu đề bài viết...',
                    'slug'              => 'Slug',
                    'content'           => 'Nội dung',
                    'banner'            => 'Banner',
                ],
            ],

            'seo' => [
                'title' => 'SEO',

                'fields' => [
                    'meta-title'       => 'Meta Title',
                    'meta-keywords'    => 'Meta Keywords',
                    'meta-description' => 'Meta Description',
                ],
            ],

            'settings' => [
                'title' => 'Cài đặt',

                'fields' => [
                    'category'     => 'Danh mục',
                    'tags'         => 'Thẻ',
                    'name'         => 'Tên',
                    'color'        => 'Màu sắc',
                    'is-published' => 'Đã xuất bản',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'title'        => 'Tiêu đề',
            'slug'         => 'Slug',
            'author'       => 'Tác giả',
            'category'     => 'Danh mục',
            'creator'      => 'Tạo bởi',
            'is-published' => 'Đã xuất bản',
            'created-at'   => 'Tạo lúc',
            'updated-at'   => 'Cập nhật lúc',
        ],

        'groups' => [
            'category'   => 'Danh mục',
            'author'     => 'Tác giả',
            'created-at' => 'Tạo lúc',
        ],

        'filters' => [
            'is-published' => 'Đã xuất bản',
            'author'       => 'Tác giả',
            'creator'      => 'Tạo bởi',
            'category'     => 'Danh mục',
            'tags'         => 'Thẻ',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Bài viết đã cập nhật',
                    'body'  => 'Bài viết đã được cập nhật thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Bài viết đã khôi phục',
                    'body'  => 'Bài viết đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Bài viết đã xóa',
                    'body'  => 'Bài viết đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Bài viết đã xóa vĩnh viễn',
                    'body'  => 'Bài viết đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Các bài viết đã khôi phục',
                    'body'  => 'Các bài viết đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các bài viết đã xóa',
                    'body'  => 'Các bài viết đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Các bài viết đã xóa vĩnh viễn',
                    'body'  => 'Các bài viết đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Chung',

                'entries' => [
                    'title'   => 'Tiêu đề',
                    'slug'    => 'Slug',
                    'content' => 'Nội dung',
                    'banner'  => 'Banner',
                ],
            ],

            'seo' => [
                'title' => 'SEO',

                'entries' => [
                    'meta-title'       => 'Meta Title',
                    'meta-keywords'    => 'Meta Keywords',
                    'meta-description' => 'Meta Description',
                ],
            ],

            'record-information' => [
                'title' => 'Thông tin bản ghi',

                'entries' => [
                    'author'          => 'Tác giả',
                    'created-by'      => 'Tạo bởi',
                    'published-at'    => 'Xuất bản lúc',
                    'last-updated-by' => 'Cập nhật lần cuối bởi',
                    'last-updated'    => 'Cập nhật lần cuối lúc',
                    'created-at'      => 'Tạo lúc',
                ],
            ],

            'settings' => [
                'title' => 'Cài đặt',

                'entries' => [
                    'category'     => 'Danh mục',
                    'tags'         => 'Thẻ',
                    'name'         => 'Tên',
                    'color'        => 'Màu sắc',
                    'is-published' => 'Đã xuất bản',
                ],
            ],
        ],
    ],
];
