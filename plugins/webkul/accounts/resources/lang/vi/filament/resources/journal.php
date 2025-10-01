<?php

return [
    'form' => [
        'tabs' => [
            'journal-entries' => [
                'title' => 'Bút toán nhật ký',

                'field-set' => [
                    'accounting-information' => [
                        'title'  => 'Thông tin kế toán',
                        'fields' => [
                            'dedicated-credit-note-sequence' => 'Chuỗi hóa đơn điều chỉnh giảm chuyên dụng',
                            'dedicated-payment-sequence'     => 'Chuỗi thanh toán chuyên dụng',
                            'sort-code-placeholder'          => 'Nhập mã sổ nhật ký',
                            'sort-code'                      => 'Sắp xếp',
                            'currency'                       => 'Tiền tệ',
                            'color'                          => 'Màu sắc',
                        ],
                    ],
                    'bank-account-number' => [
                        'title' => 'Số tài khoản ngân hàng',
                    ],
                ],
            ],
            'incoming-payments' => [
                'title' => 'Thanh toán đến',

                'fields' => [
                    'relation-notes'             => 'Ghi chú quan hệ',
                    'relation-notes-placeholder' => 'Nhập bất kỳ chi tiết quan hệ nào',
                ],
            ],
            'outgoing-payments' => [
                'title' => 'Thanh toán đi',

                'fields' => [
                    'relation-notes'             => 'Ghi chú quan hệ',
                    'relation-notes-placeholder' => 'Nhập bất kỳ chi tiết quan hệ nào',
                ],
            ],
            'advanced-settings' => [
                'title'  => 'Cài đặt nâng cao',
                'fields' => [
                    'allowed-accounts'       => 'Tài khoản được phép',
                    'control-access'         => 'Kiểm soát truy cập',
                    'payment-communication'  => 'Giao tiếp thanh toán',
                    'auto-check-on-post'     => 'Tự động kiểm tra khi ghi sổ',
                    'communication-type'     => 'Loại giao tiếp',
                    'communication-standard' => 'Tiêu chuẩn giao tiếp',
                ],
            ],
        ],

        'general' => [
            'title' => 'Thông tin chung',

            'fields' => [
                'name'    => 'Tên',
                'type'    => 'Loại',
                'company' => 'Công ty',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Tên',
            'type'       => 'Loại',
            'code'       => 'Mã',
            'currency'   => 'Tiền tệ',
            'created-by' => 'Người tạo',
            'status'     => 'Trạng thái',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Điều kiện thương mại quốc tế đã được xóa',
                    'body'  => 'Điều kiện thương mại quốc tế đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Sổ nhật ký đã được xóa',
                    'body'  => 'Sổ nhật ký đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'tabs' => [
            'journal-entries' => [
                'title' => 'Bút toán nhật ký',

                'field-set' => [
                    'accounting-information' => [
                        'title'   => 'Thông tin kế toán',
                        'entries' => [
                            'dedicated-credit-note-sequence' => 'Chuỗi hóa đơn điều chỉnh giảm chuyên dụng',
                            'dedicated-payment-sequence'     => 'Chuỗi thanh toán chuyên dụng',
                            'sort-code-placeholder'          => 'Nhập mã sổ nhật ký',
                            'sort-code'                      => 'Sắp xếp',
                            'currency'                       => 'Tiền tệ',
                            'color'                          => 'Màu sắc',
                        ],
                    ],
                    'bank-account-number' => [
                        'title' => 'Số tài khoản ngân hàng',
                    ],
                ],
            ],
            'incoming-payments' => [
                'title' => 'Thanh toán đến',

                'entries' => [
                    'relation-notes'             => 'Ghi chú quan hệ',
                    'relation-notes-placeholder' => 'Nhập bất kỳ chi tiết quan hệ nào',
                ],
            ],
            'outgoing-payments' => [
                'title' => 'Thanh toán đi',

                'entries' => [
                    'relation-notes'             => 'Ghi chú quan hệ',
                    'relation-notes-placeholder' => 'Nhập bất kỳ chi tiết quan hệ nào',
                ],
            ],
            'advanced-settings' => [
                'title'   => 'Cài đặt nâng cao',
                'entries' => [
                    'allowed-accounts'       => 'Tài khoản được phép',
                    'control-access'         => 'Kiểm soát truy cập',
                    'payment-communication'  => 'Giao tiếp thanh toán',
                    'auto-check-on-post'     => 'Tự động kiểm tra khi ghi sổ',
                    'communication-type'     => 'Loại giao tiếp',
                    'communication-standard' => 'Tiêu chuẩn giao tiếp',
                ],
            ],
        ],

        'general' => [
            'title' => 'Thông tin chung',

            'entries' => [
                'name'    => 'Tên',
                'type'    => 'Loại',
                'company' => 'Công ty',
            ],
        ],
    ],

];