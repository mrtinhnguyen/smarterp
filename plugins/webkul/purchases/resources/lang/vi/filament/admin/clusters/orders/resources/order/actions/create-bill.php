<?php

return [
    'label' => 'Tạo hóa đơn',

    'action' => [
        'notification' => [
            'warning' => [
                'title' => 'Không có dòng có thể xuất hóa đơn',
                'body'  => 'Không có dòng nào có thể xuất hóa đơn, vui lòng đảm bảo rằng số lượng đã được nhận.',
            ],

            'success' => [
                'title' => 'Hóa đơn đã được tạo',
                'body'  => 'Hóa đơn đã được tạo thành công.',
            ],
        ],
    ],
];

