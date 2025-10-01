<?php

return [
    'navigation' => [
        'title' => 'Gói hàng',
        'group' => 'Kho hàng',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Chung',

                'fields' => [
                    'name'             => 'Tên',
                    'name-placeholder' => 'ví dụ: PACK007',
                    'package-type'     => 'Loại gói hàng',
                    'pack-date'        => 'Ngày đóng gói',
                    'location'         => 'Vị trí',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => 'Name',
            'package-type' => 'Package Type',
            'location'     => 'Location',
            'company'      => 'Company',
            'created-at'   => 'Created At',
            'updated-at'   => 'Updated At',
        ],

        'groups' => [
            'package-type'   => 'Package Type',
            'location'       => 'Location',
            'created-at'     => 'Created At',
        ],

        'filters' => [
            'package-type' => 'Package Type',
            'location'     => 'Location',
            'creator'      => 'Creator',
            'company'      => 'Company',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Goi hang da duoc xoa',
                        'body'  => 'Goi hang da duoc xoa thanh cong.',
                    ],

                    'error' => [
                        'title' => 'Package could not be deleted',
                        'body'  => 'The package cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print-without-content' => [
                'label' => 'Print Barcode',
            ],

            'print-with-content' => [
                'label' => 'Print Barcode With Content',
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Packages deleted',
                        'body'  => 'The packages has been deleted successfully.',
                    ],

                    'error' => [
                        'title' => 'Packages could not be deleted',
                        'body'  => 'The packages cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Package Details',

                'entries' => [
                    'name'         => 'Package Name',
                    'package-type' => 'Package Type',
                    'pack-date'    => 'Pack Date',
                    'location'     => 'Location',
                    'company'      => 'Company',
                    'created-at'   => 'Created At',
                    'updated-at'   => 'Last Updated',
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

