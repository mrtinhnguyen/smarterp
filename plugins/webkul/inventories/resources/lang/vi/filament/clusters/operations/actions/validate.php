<?php

return [
    'label'             => 'Xác thực',
    'modal-heading'     => 'Tạo đơn hàng bổ sung?',
    'modal-description' => 'Tạo đơn hàng bổ sung nếu các sản phẩm còn lại sẽ được xử lý sau. Nếu không, không tạo đơn hàng bổ sung.',

    'extra-modal-footer-actions' => [
        'no-backorder' => [
            'label' => 'Không có đơn hàng bổ sung',
        ],
    ],

    'notification' => [
        'warning' => [
            'lines-missing' => [
                'title' => 'Không có số lượng nào được đặt trước',
                'body'  => 'Không có số lượng nào được đặt trước cho việc chuyển.',
            ],

            'lot-missing' => [
                'title' => 'Cung cấp lô/số seri',
                'body'  => 'Bạn cần cung cấp lô/số seri cho sản phẩm',
            ],

            'serial-qty' => [
                'title' => 'Số seri đã được gán',
                'body'  => 'Số seri đã được gán cho sản phẩm khác.',
            ],

            'partial-package' => [
                'title' => 'Không thể di chuyển cùng nội dung bao bì',
                'body'  => 'Bạn không thể di chuyển cùng nội dung bao bì nhiều hơn một lần trong một lần chuyển hoặc chia bao bì giữa hai vị trí.',
            ],
        ],
    ],
];