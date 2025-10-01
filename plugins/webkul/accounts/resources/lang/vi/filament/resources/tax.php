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
                        'include-base-amount' => 'Ảnh hưởng đến cơ sở của các loại thuế tiếp theo',
                        'is-base-affected'    => 'Cơ sở bị ảnh hưởng bởi các loại thuế trước đó',
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
            'tax-exigibility'        => 'Tính bắt buộc của thuế',
            'price-include-override' => 'Ghi đè bao gồm giá',
            'amount'                 => 'Số tiền',
            'status'                 => 'Trạng thái',
            'include-base-amount'    => 'Bao gồm số tiền cơ sở',
            'is-base-affected'       => 'Có bị ảnh hưởng cơ sở',
        ],

        'groups' => [
            'name'         => 'Tên',
            'company'      => 'Công ty',
            'tax-group'    => 'Nhóm thuế',
            'country'      => 'Quốc gia',
            'created-by'   => 'Người tạo',
            'type-tax-use' => 'Loại sử dụng thuế',
            'tax-scope'    => 'Phạm vi thuế',
            'amount-type'  => 'Loại số tiền',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Thuế đã được xóa',
                        'body'  => 'Thuế đã được xóa thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa thuế',
                        'body'  => 'Không thể xóa thuế vì nó đang được sử dụng.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Các loại thuế đã được xóa',
                        'body'  => 'Các loại thuế đã được xóa thành công.',
                    ],

                    'error' => [
                        'title' => 'Không thể xóa các loại thuế',
                        'body'  => 'Không thể xóa các loại thuế vì chúng đang được sử dụng.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
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

                    'entries' => [
                        'invoice-label'       => 'Nhãn hóa đơn',
                        'tax-group'           => 'Nhóm thuế',
                        'country'             => 'Quốc gia',
                        'include-in-price'    => 'Bao gồm trong giá',
                        'include-base-amount' => 'Bao gồm số tiền cơ sở',
                        'is-base-affected'    => 'Có bị ảnh hưởng cơ sở',
                    ],
                ],

                'description-and-legal-notes' => [
                    'title'   => 'Mô tả & Ghi chú pháp lý hóa đơn',
                    'entries' => [
                        'description' => 'Mô tả',
                        'legal-notes' => 'Ghi chú pháp lý',
                    ],
                ],
            ],
        ],
    ],

];