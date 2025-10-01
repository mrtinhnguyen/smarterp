<?php

return [
    'title' => 'Đội bán hàng',

    'navigation' => [
        'title' => 'Đội bán hàng',
    ],

    'form' => [
        'sections' => [
            'fields' => [
                'name'     => 'Đội bán hàng',
                'status'   => 'Trạng thái',
                'fieldset' => [
                    'team-details' => [
                        'title'  => 'Chi tiết đội',
                        'fields' => [
                            'team-leader'            => 'Trưởng đội',
                            'company'                => 'Công ty',
                            'invoiced-target'        => 'Mục tiêu xuất hóa đơn',
                            'invoiced-target-suffix' => '/ Tháng',
                            'color'                  => 'Màu sắc',
                            'members'                => 'Thành viên',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'              => 'ID',
            'company'         => 'Công ty',
            'team-leader'     => 'Trưởng đội',
            'name'            => 'Tên',
            'status'          => 'Trạng thái',
            'invoiced-target' => 'Mục tiêu xuất hóa đơn',
            'color'           => 'Màu sắc',
            'created-by'      => 'Tạo bởi',
            'created-at'      => 'Ngày tạo',
            'updated-at'      => 'Ngày cập nhật',
        ],

        'filters' => [
            'name'        => 'Tên',
            'team-leader' => 'Trưởng đội',
            'company'     => 'Công ty',
            'created-by'  => 'Tạo bởi',
            'updated-at'  => 'Ngày cập nhật',
            'created-at'  => 'Ngày tạo',
        ],

        'groups' => [
            'name'        => 'Tên',
            'company'     => 'Công ty',
            'team-leader' => 'Trưởng đội',
            'created-at'  => 'Ngày tạo',
            'updated-at'  => 'Ngày cập nhật',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Đội bán hàng đã khôi phục',
                    'body'  => 'Đội bán hàng đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Đội bán hàng đã xóa',
                    'body'  => 'Đội bán hàng đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Đội bán hàng đã xóa vĩnh viễn',
                    'body'  => 'Đội bán hàng đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Các đội bán hàng đã khôi phục',
                    'body'  => 'Các đội bán hàng đã được khôi phục thành công.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Các đội bán hàng đã xóa',
                    'body'  => 'Các đội bán hàng đã được xóa thành công.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Các đội bán hàng đã xóa vĩnh viễn',
                    'body'  => 'Các đội bán hàng đã được xóa vĩnh viễn thành công.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'Đội bán hàng đã tạo',
                    'body'  => 'Đội bán hàng đã được tạo thành công.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'name'     => 'Đội bán hàng',
                'status'   => 'Trạng thái',
                'fieldset' => [
                    'team-details' => [
                        'title'   => 'Chi tiết đội',
                        'entries' => [
                            'team-leader'            => 'Trưởng đội',
                            'company'                => 'Công ty',
                            'invoiced-target'        => 'Mục tiêu xuất hóa đơn',
                            'invoiced-target-suffix' => '/ Tháng',
                            'color'                  => 'Màu sắc',
                            'members'                => 'Thành viên',
                        ],
                    ],
                ],
            ],
        ],
    ],
];