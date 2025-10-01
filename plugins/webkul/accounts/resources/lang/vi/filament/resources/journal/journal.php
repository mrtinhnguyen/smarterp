<?php

return [
    'form' => [
        'tabs' => [
            'journal-entries' => [
                'title' => 'Bút toán sổ nhật ký',

                'field-set' => [
                    'accounting-information' => [
                        'title'  => 'Thông tin kế toán',
                        'fields' => [
                            'dedicated-credit-note-sequence' => 'Dãy số phiếu ghi có chuyên dụng',
                            'dedicated-payment-sequence'     => 'Dãy số thanh toán chuyên dụng',
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
                    'relation-notes-placeholder' => 'Nhập chi tiết quan hệ',
                ],
            ],
            'outgoing-payments' => [
                'title' => 'Thanh toán đi',

                'fields' => [
                    'relation-notes'             => 'Ghi chú quan hệ',
                    'relation-notes-placeholder' => 'Nhập chi tiết quan hệ',
                ],
            ],
        ],

        'sections' => [
            'fields' => [
                'name'                => 'Tên',
                'journal-type'        => 'Loại sổ nhật ký',
                'code'                => 'Mã',
                'currency'            => 'Tiền tệ',
                'color'               => 'Màu sắc',
                'default-account'     => 'Tài khoản mặc định',
                'suspense-account'    => 'Tài khoản tạm ứng',
                'profit-account'      => 'Tài khoản lãi',
                'loss-account'        => 'Tài khoản lỗ',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                => 'Tên',
            'journal-type'        => 'Loại sổ nhật ký',
            'code'                => 'Mã',
            'currency'            => 'Tiền tệ',
            'color'               => 'Màu sắc',
            'default-account'     => 'Tài khoản mặc định',
            'suspense-account'    => 'Tài khoản tạm ứng',
            'profit-account'      => 'Tài khoản lãi',
            'loss-account'        => 'Tài khoản lỗ',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo sổ nhật ký',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Sổ nhật ký đã được xóa',
                    'body'  => 'Sổ nhật ký đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các sổ nhật ký đã được xóa',
                    'body'  => 'Các sổ nhật ký đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'name'                => 'Tên',
                    'journal-type'        => 'Loại sổ nhật ký',
                    'code'                => 'Mã',
                    'currency'            => 'Tiền tệ',
                    'color'               => 'Màu sắc',
                ],
            ],

            'accounts' => [
                'title' => 'Tài khoản',
                'entries' => [
                    'default-account'     => 'Tài khoản mặc định',
                    'suspense-account'    => 'Tài khoản tạm ứng',
                    'profit-account'      => 'Tài khoản lãi',
                    'loss-account'        => 'Tài khoản lỗ',
                ],
            ],
        ],
    ],
];
