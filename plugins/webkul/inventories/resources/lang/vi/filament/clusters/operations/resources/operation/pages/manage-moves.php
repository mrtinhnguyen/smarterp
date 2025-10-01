<?php

return [
    'title' => 'Di chuyển',

    'table' => [
        'columns' => [
            'date'                 => 'Ngày',
            'reference'            => 'Tham chiếu',
            'product'              => 'Sản phẩm',
            'package'              => 'Bao bì',
            'lot'                  => 'Lô / Số seri',
            'source-location'      => 'Vị trí nguồn',
            'destination-location' => 'Vị trí đích',
            'quantity'             => 'Số lượng',
            'state'                => 'Trạng thái',
            'done-by'              => 'Thực hiện bởi',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Di chuyển đã được xóa',
                    'body'  => 'Di chuyển đã được xóa thành công.',
                ],
            ],
        ],
    ],
];