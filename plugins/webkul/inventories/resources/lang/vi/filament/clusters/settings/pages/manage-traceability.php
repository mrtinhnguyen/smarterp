<?php

return [
    'title' => 'Quản lý truy xuất nguồn gốc',

    'form' => [
        'enable-lots-serial-numbers'                             => 'Lô & Số seri',
        'enable-lots-serial-numbers-helper-text'                 => 'Có được khả năng truy xuất đầy đủ từ nhà cung cấp đến khách hàng',
        'configure-lots'                                         => 'Cấu hình lô',
        'enable-expiration-dates'                                => 'Ngày hết hạn',
        'enable-expiration-dates-helper-text'                    => 'Thiết lập ngày hết hạn trên lô & số seri',
        'display-on-delivery-slips'                              => 'Hiển thị trên phiếu giao hàng',
        'display-on-delivery-slips-helper-text'                  => 'Lô & Số seri sẽ xuất hiện trên phiếu giao hàng',
        'display-expiration-dates-on-delivery-slips'             => 'Hiển thị ngày hết hạn trên phiếu giao hàng',
        'display-expiration-dates-on-delivery-slips-helper-text' => 'Ngày hết hạn sẽ xuất hiện trên phiếu giao hàng',
        'enable-consignments'                                    => 'Ký gửi',
        'enable-consignments-helper-text'                        => 'Thiết lập chủ sở hữu trên sản phẩm được lưu trữ',
    ],

    'before-save' => [
        'notification' => [
            'warning' => [
                'title' => 'Bạn có sản phẩm trong kho đã bật theo dõi lô/số seri. ',
                'body'  => 'Trước tiên hãy tắt theo dõi trên tất cả sản phẩm trước khi tắt cài đặt này.',
            ],
        ],
    ],
];

