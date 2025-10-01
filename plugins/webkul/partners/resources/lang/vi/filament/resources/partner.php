<?php

return [
    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',

                'fields' => [
                    'company'    => 'Công ty',
                    'avatar'     => 'Ảnh đại diện',
                    'tax-id'     => 'Mã số thuế',
                    'job-title'  => 'Chức vụ',
                    'phone'      => 'Điện thoại',
                    'mobile'     => 'Di động',
                    'email'      => 'Email',
                    'website'    => 'Website',
                    'title'      => 'Chức danh',
                    'name'       => 'Tên',
                    'short-name' => 'Tên viết tắt',
                    'tags'       => 'Thẻ',
                    'color'      => 'Màu sắc',
                ],

                'address' => [
                    'title' => 'Địa chỉ',

                    'fields' => [
                        'street1'  => 'Đường 1',
                        'street2'  => 'Đường 2',
                        'city'     => 'Thành phố',
                        'zip'      => 'Mã bưu điện',
                        'state'    => 'Tỉnh/Thành phố',
                        'country'  => 'Quốc gia',
                        'name'     => 'Tên',
                        'code'     => 'Mã',
                    ],
                ],
            ],
        ],

        'tabs' => [
            'sales-purchase' => [
                'title' => 'Bán hàng và Mua hàng',

                'fields' => [
                    'responsible'           => 'Người chịu trách nhiệm',
                    'responsible-hint-text' => 'Đây là nhân viên bán hàng nội bộ chịu trách nhiệm cho khách hàng này',
                    'company-id'            => 'Mã công ty',
                    'company-id-hint-text'  => 'Số đăng ký của công ty, được sử dụng nếu khác với mã số thuế. Phải là duy nhất trong tất cả các đối tác trong cùng một quốc gia.',
                    'reference'             => 'Tham chiếu',
                    'industry'              => 'Ngành nghề',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'parent'     => 'Công ty mẹ',
        ],

        'groups' => [
            'account-type' => 'Loại tài khoản',
            'parent'       => 'Công ty mẹ',
            'title'        => 'Chức danh',
            'job-title'    => 'Chức vụ',
            'industry'     => 'Ngành nghề',
        ],

        'filters' => [
            'account-type'     => 'Loại tài khoản',
            'name'             => 'Tên',
            'email'            => 'Email',
            'parent'           => 'Công ty mẹ',
            'title'            => 'Chức danh',
            'tax-id'           => 'Mã số thuế',
            'phone'            => 'Điện thoại',
            'mobile'           => 'Di động',
            'job-title'        => 'Chức vụ',
            'website'          => 'Website',
            'company-registry' => 'Đăng ký công ty',
            'responsible'      => 'Người chịu trách nhiệm',
            'reference'        => 'Tham chiếu',
            'parent'           => 'Công ty mẹ',
            'creator'          => 'Người tạo',
            'company'          => 'Công ty',
            'industry'         => 'Ngành nghề',
            'industry'         => 'Ngành nghề',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Liên hệ đã được cập nhật',
                    'body'  => 'Liên hệ đã được cập nhật thành công.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Liên hệ đã được khôi phục',
                    'body'  => 'Liên hệ đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Liên hệ đã được xóa',
                    'body'  => 'Liên hệ đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Liên hệ đã được xóa vĩnh viễn',
                        'body'  => 'Liên hệ đã được xóa vĩnh viễn thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa liên hệ',
                        'body'  => 'Liên hệ không thể được xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Liên hệ đã được khôi phục',
                    'body'  => 'Liên hệ đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Liên hệ đã được xóa',
                    'body'  => 'Liên hệ đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Liên hệ đã được xóa vĩnh viễn',
                        'body'  => 'Liên hệ đã được xóa vĩnh viễn thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa liên hệ',
                        'body'  => 'Liên hệ không thể được xóa vì đang được sử dụng.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',

                'fields' => [
                    'company'    => 'Công ty',
                    'avatar'     => 'Ảnh đại diện',
                    'tax-id'     => 'Mã số thuế',
                    'job-title'  => 'Chức vụ',
                    'phone'      => 'Điện thoại',
                    'mobile'     => 'Di động',
                    'email'      => 'Email',
                    'website'    => 'Website',
                    'title'      => 'Chức danh',
                    'name'       => 'Tên',
                    'short-name' => 'Tên viết tắt',
                    'tags'       => 'Thẻ',
                ],

                'address' => [
                    'title' => 'Địa chỉ',

                    'fields' => [
                        'street1'  => 'Đường 1',
                        'street2'  => 'Đường 2',
                        'city'     => 'Thành phố',
                        'zip'      => 'Mã bưu điện',
                        'state'    => 'Tỉnh/Thành phố',
                        'country'  => 'Quốc gia',
                        'name'     => 'Tên',
                        'code'     => 'Mã',
                    ],
                ],
            ],
        ],

        'tabs' => [
            'sales-purchase' => [
                'title' => 'Bán hàng và Mua hàng',

                'fields' => [
                    'responsible'           => 'Người chịu trách nhiệm',
                    'responsible-hint-text' => 'Đây là nhân viên bán hàng nội bộ chịu trách nhiệm cho khách hàng này',
                    'company-id'            => 'Mã công ty',
                    'company-id-hint-text'  => 'Số đăng ký của công ty. Sử dụng nó nếu khác với mã số thuế. Phải là duy nhất trong tất cả các đối tác của cùng một quốc gia',
                    'reference'             => 'Tham chiếu',
                    'industry'              => 'Ngành nghề',
                ],
            ],
        ],
    ],
];