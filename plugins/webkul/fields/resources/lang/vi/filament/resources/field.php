<?php

return [
    'navigation' => [
        'title' => 'Trường tùy chỉnh',
        'group' => 'Cài đặt',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'fields' => [
                    'name'              => 'Tên',
                    'code'              => 'Mã',
                    'code-helper-text'  => 'Mã phải bắt đầu bằng chữ cái hoặc dấu gạch dưới, và chỉ có thể chứa chữ cái, số và dấu gạch dưới.',
                ],
            ],

            'options' => [
                'title' => 'Tùy chọn',

                'fields' => [
                    'add-option' => 'Thêm tùy chọn',
                ],
            ],

            'form-settings' => [
                'title' => 'Cài đặt biểu mẫu',

                'field-sets' => [
                    'validations' => [
                        'title' => 'Xác thực',

                        'fields' => [
                            'validation'     => 'Xác thực',
                            'field'          => 'Trường',
                            'value'          => 'Giá trị',
                            'add-validation' => 'Thêm xác thực',
                        ],
                    ],

                    'additional-settings' => [
                        'title' => 'Cài đặt bổ sung',

                        'fields' => [
                            'setting'     => 'Cài đặt',
                            'value'       => 'Giá trị',
                            'color'       => 'Màu sắc',
                            'add-setting' => 'Thêm cài đặt',

                            'color-options' => [
                                'danger'    => 'Nguy hiểm',
                                'info'      => 'Thông tin',
                                'primary'   => 'Chính',
                                'secondary' => 'Phụ',
                                'warning'   => 'Cảnh báo',
                                'success'   => 'Thành công',
                            ],

                            'grid-options' => [
                                'row'    => 'Hàng',
                                'column' => 'Cột',
                            ],

                            'input-modes' => [
                                'text'     => 'Văn bản',
                                'email'    => 'Email',
                                'numeric'  => 'Số',
                                'integer'  => 'Số nguyên',
                                'password' => 'Mật khẩu',
                                'tel'      => 'Điện thoại',
                                'url'      => 'URL',
                                'color'    => 'Màu sắc',
                                'none'     => 'Không',
                                'decimal'  => 'Số thập phân',
                                'search'   => 'Tìm kiếm',
                            ],
                        ],
                    ],
                ],
            ],

            'table-settings' => [
                'title' => 'Cài đặt bảng',

                'fields' => [
                    'use-in-table'  => 'Sử dụng trong bảng',
                    'setting'       => 'Cài đặt',
                    'value'         => 'Giá trị',
                    'color'         => 'Màu sắc',
                    'alignment'     => 'Căn chỉnh',
                    'font-weight'   => 'Độ đậm chữ',
                    'icon-position' => 'Vị trí biểu tượng',
                    'size'          => 'Kích thước',
                    'add-setting'   => 'Thêm cài đặt',

                    'color-options' => [
                        'danger'    => 'Nguy hiểm',
                        'info'      => 'Thông tin',
                        'primary'   => 'Chính',
                        'secondary' => 'Phụ',
                        'warning'   => 'Cảnh báo',
                        'success'   => 'Thành công',
                    ],

                    'alignment-options' => [
                        'start'   => 'Bắt đầu',
                        'left'    => 'Trái',
                        'center'  => 'Giữa',
                        'end'     => 'Kết thúc',
                        'right'   => 'Phải',
                        'justify' => 'Căn đều',
                        'between' => 'Giữa',
                    ],

                    'font-weight-options' => [
                        'extra-light' => 'Rất nhẹ',
                        'light'       => 'Nhẹ',
                        'normal'      => 'Bình thường',
                        'medium'      => 'Trung bình',
                        'semi-bold'   => 'Nửa đậm',
                        'bold'        => 'Đậm',
                        'extra-bold'  => 'Rất đậm',
                    ],

                    'icon-position-options' => [
                        'before'  => 'Trước',
                        'after'   => 'Sau',
                    ],

                    'size-options' => [
                        'extra-small' => 'Rất nhỏ',
                        'small'       => 'Nhỏ',
                        'medium'      => 'Trung bình',
                        'large'       => 'Lớn',
                    ],
                ],
            ],

            'infolist-settings' => [
                'title' => 'Cài đặt danh sách thông tin',

                'fields' => [
                    'setting'       => 'Cài đặt',
                    'value'         => 'Giá trị',
                    'color'         => 'Màu sắc',
                    'font-weight'   => 'Độ đậm chữ',
                    'icon-position' => 'Vị trí biểu tượng',
                    'size'          => 'Kích thước',
                    'add-setting'   => 'Thêm cài đặt',

                    'color-options' => [
                        'danger'    => 'Nguy hiểm',
                        'info'      => 'Thông tin',
                        'primary'   => 'Chính',
                        'secondary' => 'Phụ',
                        'warning'   => 'Cảnh báo',
                        'success'   => 'Thành công',
                    ],

                    'font-weight-options' => [
                        'extra-light' => 'Rất nhẹ',
                        'light'       => 'Nhẹ',
                        'normal'      => 'Bình thường',
                        'medium'      => 'Trung bình',
                        'semi-bold'   => 'Nửa đậm',
                        'bold'        => 'Đậm',
                        'extra-bold'  => 'Rất đậm',
                    ],

                    'icon-position-options' => [
                        'before'  => 'Trước',
                        'after'   => 'Sau',
                    ],

                    'size-options' => [
                        'extra-small' => 'Rất nhỏ',
                        'small'       => 'Nhỏ',
                        'medium'      => 'Trung bình',
                        'large'       => 'Lớn',
                    ],
                ],
            ],

            'settings' => [
                'title' => 'Cài đặt',

                'fields' => [
                    'type'           => 'Loại',
                    'input-type'     => 'Loại đầu vào',
                    'is-multiselect' => 'Là đa lựa chọn',
                    'sort-order'     => 'Thứ tự sắp xếp',

                    'type-options' => [
                        'text'          => 'Nhập văn bản',
                        'textarea'      => 'Vùng văn bản',
                        'select'        => 'Chọn',
                        'checkbox'      => 'Hộp kiểm',
                        'radio'         => 'Nút radio',
                        'toggle'        => 'Công tắc',
                        'checkbox-list' => 'Danh sách hộp kiểm',
                        'datetime'      => 'Chọn ngày giờ',
                        'editor'        => 'Trình soạn thảo văn bản phong phú',
                        'markdown'      => 'Trình soạn thảo Markdown',
                        'color'         => 'Chọn màu',
                    ],

                    'input-type-options' => [
                        'text'     => 'Văn bản',
                        'email'    => 'Email',
                        'numeric'  => 'Số',
                        'integer'  => 'Số nguyên',
                        'password' => 'Mật khẩu',
                        'tel'      => 'Điện thoại',
                        'url'      => 'URL',
                        'color'    => 'Màu sắc',
                    ],
                ],
            ],

            'resource' => [
                'title' => 'Tài nguyên',

                'fields' => [
                    'resource' => 'Tài nguyên',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'code'       => 'Mã',
            'name'       => 'Tên',
            'type'       => 'Loại',
            'resource'   => 'Tài nguyên',
            'created-at' => 'Tạo lúc',
        ],

        'groups' => [
        ],

        'filters' => [
            'type'     => 'Loại',
            'resource' => 'Tài nguyên',

            'type-options' => [
                'text'          => 'Nhập văn bản',
                'textarea'      => 'Vùng văn bản',
                'select'        => 'Chọn',
                'checkbox'      => 'Hộp kiểm',
                'radio'         => 'Nút radio',
                'toggle'        => 'Công tắc',
                'checkbox-list' => 'Danh sách hộp kiểm',
                'datetime'      => 'Chọn ngày giờ',
                'editor'        => 'Trình soạn thảo văn bản phong phú',
                'markdown'      => 'Trình soạn thảo Markdown',
                'color'         => 'Chọn màu',
            ],
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Trường đã khôi phục',
                    'body'  => 'Trường đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Trường đã xóa',
                    'body'  => 'Trường đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Trường đã xóa vĩnh viễn',
                    'body'  => 'Trường đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Các trường đã khôi phục',
                    'body'  => 'Các trường đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các trường đã xóa',
                    'body'  => 'Các trường đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Các trường đã xóa vĩnh viễn',
                    'body'  => 'Các trường đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],
    ],
];