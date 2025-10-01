<?php

return [
    'navigation' => [
        'title' => 'Lô / Số seri',
        'group' => 'Kho hàng',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Chung',

                'fields' => [
                    'name'                   => 'Tên',
                    'name-placeholder'       => 'ví dụ: LOT/0001/20121',
                    'product'                => 'Sản phẩm',
                    'product-hint-tooltip'   => 'Sản phẩm liên kết với lô/số seri này. Không thể thay đổi nếu đã được di chuyển.',
                    'reference'              => 'Tham chiếu',
                    'reference-hint-tooltip' => 'Số tham chiếu nội bộ, nếu khác với lô/số seri của nhà sản xuất.',
                    'description'            => 'Mô tả',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => 'Name',
            'product'      => 'Product',
            'on-hand-qty'  => 'On Hand Quantity',
            'reference'    => 'Internal Reference',
            'created-at'   => 'Created At',
            'updated-at'   => 'Updated At',
        ],

        'groups' => [
            'product'        => 'Product',
            'location'       => 'Location',
            'created-at'     => 'Created At',
        ],

        'filters' => [
            'product'  => 'Product',
            'location' => 'Location',
            'creator'  => 'Creator',
            'company'  => 'Company',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Lo da duoc xoa',
                        'body'  => 'Lo da duoc xoa thanh cong.',
                    ],

                    'error' => [
                        'title' => 'Lot could not be deleted',
                        'body'  => 'The lot cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print' => [
                'label' => 'Print Barcode',
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Lots deleted',
                        'body'  => 'The lots has been deleted successfully.',
                    ],

                    'error' => [
                        'title' => 'Lots could not be deleted',
                        'body'  => 'The lots cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Lot Details',

                'entries' => [
                    'name'        => 'Lot Name',
                    'product'     => 'Product',
                    'reference'   => 'Reference',
                    'description' => 'Description',
                    'on-hand-qty' => 'On-Hand Quantity',
                    'company'     => 'Company',
                    'created-at'  => 'Created At',
                    'updated-at'  => 'Last Updated',
                ],
            ],

            'record-information' => [
                'title' => 'Record Information',

                'entries' => [
                    'created-by'   => 'Created By',
                    'created-at'   => 'Created At',
                    'last-updated' => 'Last Updated',
                ],
            ],
        ],
    ],
];

