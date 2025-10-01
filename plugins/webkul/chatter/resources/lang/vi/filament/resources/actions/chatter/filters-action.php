<?php

return [
    'tooltip' => 'Bộ lọc',

    'fields'  => [
        'search'             => 'Tìm kiếm',
        'search-placeholder' => 'Tìm kiếm tin nhắn...',
        'type'               => 'Loại',
        'date'               => 'Ngày',
        'sort-by'            => 'Sắp xếp theo',
        'pinned-only'        => 'Chỉ ghim',
    ],
    'type-options' => [
        'all'          => 'Tất cả loại',
        'note'         => 'Ghi chú',
        'comment'      => 'Bình luận',
        'notification' => 'Thông báo',
        'activity'     => 'Hoạt động',
    ],
    'date-options' => [
        ''          => 'Bất kỳ lúc nào',
        'today'     => 'Hôm nay',
        'yesterday' => 'Hôm qua',
        'week'      => '7 ngày qua',
        'month'     => '30 ngày qua',
        'quarter'   => '3 tháng qua',
        'year'      => 'Năm qua',
    ],
    'sort-options' => [
        'created_at_desc' => 'Mới nhất trước',
        'created_at_asc'  => 'Cũ nhất trước',
        'updated_at_desc' => 'Cập nhật gần đây',
        'priority'        => 'Ưu tiên',
    ],
    'actions' => [
        'apply' => 'Áp dụng bộ lọc',
    ],
];
