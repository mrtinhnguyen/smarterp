<?php

return [
    'title' => 'Thuộc tính',

    'form' => [
        'attribute' => 'Thuộc tính',
        'values'    => 'Giá trị',
    ],

    'table' => [
        'description' => 'Cảnh báo: thêm hoặc xóa thuộc tính sẽ xóa và tạo lại các biến thể hiện có và dẫn đến mất các tùy chỉnh có thể có của chúng.',

        'header-actions' => [
            'create' => [
                'label' => 'Thêm thuộc tính',

                'notification' => [
                    'title' => 'Thuộc tính đã được tạo',
                    'body'  => 'Thuộc tính đã được tạo thành công.',
                ],
            ],
        ],

        'columns' => [
            'attribute' => 'Thuộc tính',
            'values'    => 'Giá trị',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Thuộc tính đã được cập nhật',
                    'body'  => 'Thuộc tính đã được cập nhật thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Thuộc tính đã được xóa',
                    'body'  => 'Thuộc tính đã được xóa thành công.',
                ],
            ],
        ],
    ],
];
