<?php

return [
    'form' => [
        'sections' => [
            'fields' => [
                'name'            => 'Tên',
                'tax-type'        => 'Loại thuế',
                'tax-computation' => 'Tính toán thuế',
                'tax-scope'       => 'Phạm vi thuế',
                'status'          => 'Trạng thái',
                'amount'          => 'Số tiền',
            ],

            'field-set' => [
                'advanced-options' => [
                    'title' => 'Tùy chọn nâng cao',

                    'fields' => [
                        'invoice-label'       => 'Nhãn hóa đơn',
                        'tax-group'           => 'Nhóm thuế',
                        'country'             => 'Quốc gia',
                        'include-in-price'    => 'Bao gồm trong giá',
                        'include-base-amount' => 'Ảnh hưởng cơ sở thuế tiếp theo',
                        'is-base-affected'    => 'Cơ sở bị ảnh hưởng bởi thuế trước',
                    ],
                ],

                'fields' => [
                    'description' => 'Mô tả',
                    'legal-notes' => 'Ghi chú pháp lý',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                   => 'Tên',
            'amount-type'            => 'Loại số tiền',
            'company'                => 'Công ty',
            'tax-group'              => 'Nhóm thuế',
            'country'                => 'Quốc gia',
            'tax-type'               => 'Loại thuế',
            'tax-scope'              => 'Phạm vi thuế',
            'amount-type'            => 'Loại số tiền',
            'invoice-label'          => 'Nhãn hóa đơn',
            'tax-exigibility'        => 'Tính bắt buộc thuế',
            'price-include-override' => 'Ghi đè bao gồm giá',
            'amount'                 => 'Số tiền',
        ],

        'actions' => [
            'create' => [
                'label' => 'Tạo thuế',
            ],
            'edit' => [
                'label' => 'Chỉnh sửa',
            ],
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Thuế đã được xóa',
                    'body'  => 'Thuế đã được xóa thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'label' => 'Xóa',
                'notification' => [
                    'title' => 'Các thuế đã được xóa',
                    'body'  => 'Các thuế đã được xóa thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Thông tin chung',
                'entries' => [
                    'name'            => 'Tên',
                    'tax-type'        => 'Loại thuế',
                    'tax-computation' => 'Tính toán thuế',
                    'tax-scope'       => 'Phạm vi thuế',
                    'status'          => 'Trạng thái',
                    'amount'          => 'Số tiền',
                ],
            ],

            'advanced' => [
                'title' => 'Tùy chọn nâng cao',
                'entries' => [
                    'invoice-label'       => 'Nhãn hóa đơn',
                    'tax-group'           => 'Nhóm thuế',
                    'country'             => 'Quốc gia',
                    'include-in-price'    => 'Bao gồm trong giá',
                    'include-base-amount' => 'Ảnh hưởng cơ sở thuế tiếp theo',
                    'is-base-affected'    => 'Cơ sở bị ảnh hưởng bởi thuế trước',
                ],
            ],

            'description' => [
                'title' => 'Mô tả',
                'entries' => [
                    'description' => 'Mô tả',
                    'legal-notes' => 'Ghi chú pháp lý',
                ],
            ],
        ],
    ],
];
