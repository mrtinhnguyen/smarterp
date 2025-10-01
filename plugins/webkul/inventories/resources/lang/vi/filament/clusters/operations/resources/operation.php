<?php

return [
    'navigation' => [
        'title' => 'Hoạt động',
        'group' => 'Kho hàng',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Chung',

                'fields' => [
                    'receive-from'         => 'Nhận từ',
                    'contact'              => 'Liên hệ',
                    'delivery-address'     => 'Địa chỉ giao hàng',
                    'operation-type'       => 'Loại hoạt động',
                    'source-location'      => 'Vị trí nguồn',
                    'destination-location' => 'Vị trí đích',
                ],
            ],
        ],

        'tabs' => [
            'operations' => [
                'title' => 'Hoạt động',

                'columns' => [
                    'product'        => 'Sản phẩm',
                    'final-location' => 'Vị trí cuối',
                    'description'    => 'Mô tả',
                    'scheduled-at'   => 'Lên lịch vào',
                    'deadline'       => 'Hạn chót',
                    'packaging'      => 'Đóng gói',
                    'demand'         => 'Nhu cầu',
                    'quantity'       => 'Số lượng',
                    'unit'           => 'Đơn vị',
                    'picked'         => 'Đã lấy',
                ],

                'fields' => [
                    'product'        => 'Sản phẩm',
                    'final-location' => 'Vị trí cuối',
                    'description'    => 'Mô tả',
                    'scheduled-at'   => 'Lên lịch vào',
                    'deadline'       => 'Hạn chót',
                    'packaging'      => 'Đóng gói',
                    'demand'         => 'Nhu cầu',
                    'quantity'       => 'Số lượng',
                    'unit'           => 'Đơn vị',
                    'picked'         => 'Đã lấy',

                    'lines' => [
                        'modal-heading' => 'Quản lý di chuyển kho',
                        'add-line'      => 'Thêm dòng',

                        'fields' => [
                            'lot'       => 'Lô/Số seri',
                            'pick-from' => 'Lấy từ',
                            'location'  => 'Lưu trữ tại',
                            'package'   => 'Gói đích',
                            'quantity'  => 'Số lượng',
                            'uom'       => 'Đơn vị đo lường',
                        ],
                    ],
                ],
            ],

            'additional' => [
                'title' => 'Bổ sung',

                'fields' => [
                    'responsible'                  => 'Người chịu trách nhiệm',
                    'shipping-policy'              => 'Chính sách vận chuyển',
                    'shipping-policy-hint-tooltip' => 'Định nghĩa liệu hàng hóa có nên được giao một phần hay tất cả cùng lúc.',
                    'scheduled-at'                 => 'Lên lịch vào',
                    'scheduled-at-hint-tooltip'    => 'Thời gian lên lịch để xử lý phần đầu tiên của lô hàng. Việc đặt giá trị thủ công ở đây sẽ áp dụng nó làm ngày dự kiến cho tất cả các di chuyển kho.',
                    'source-document'              => 'Tài liệu nguồn',
                    'source-document-hint-tooltip' => 'Tham chiếu của tài liệu',
                ],
            ],

            'note' => [
                'title' => 'Ghi chú',

                'fields' => [

                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'reference'       => 'Tham chiếu',
            'from'            => 'Từ',
            'to'              => 'Đến',
            'contact'         => 'Liên hệ',
            'responsible'     => 'Người chịu trách nhiệm',
            'scheduled-at'    => 'Lên lịch vào',
            'deadline'        => 'Hạn chót',
            'closed-at'       => 'Đóng vào',
            'source-document' => 'Tài liệu nguồn',
            'operation-type'  => 'Loại hoạt động',
            'company'         => 'Công ty',
            'state'           => 'Trạng thái',
            'deleted-at'      => 'Xóa vào',
            'created-at'      => 'Tạo vào',
            'updated-at'      => 'Cập nhật vào',
        ],

        'groups' => [
            'state'           => 'Trạng thái',
            'source-document' => 'Tài liệu nguồn',
            'operation-type'  => 'Loại hoạt động',
            'scheduled-at'    => 'Lên lịch vào',
            'created-at'      => 'Tạo vào',
        ],

        'filters' => [
            'name'                 => 'Tên',
            'state'                => 'Trạng thái',
            'partner'              => 'Đối tác',
            'responsible'          => 'Người chịu trách nhiệm',
            'owner'                => 'Chủ sở hữu',
            'source-location'      => 'Vị trí nguồn',
            'destination-location' => 'Vị trí đích',
            'deadline'             => 'Hạn chót',
            'scheduled-at'         => 'Lên lịch vào',
            'closed-at'            => 'Đóng vào',
            'created-at'           => 'Tạo vào',
            'updated-at'           => 'Cập nhật vào',
            'company'              => 'Công ty',
            'creator'              => 'Người tạo',
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'Thông tin chung',
                'entries' => [
                    'contact'              => 'Liên hệ',
                    'operation-type'       => 'Loại hoạt động',
                    'source-location'      => 'Vị trí nguồn',
                    'destination-location' => 'Vị trí đích',
                ],
            ],
        ],

        'tabs' => [
            'operations' => [
                'title'   => 'Hoạt động',
                'entries' => [
                    'product'        => 'Sản phẩm',
                    'final-location' => 'Vị trí cuối',
                    'description'    => 'Mô tả',
                    'scheduled-at'   => 'Lên lịch vào',
                    'deadline'       => 'Hạn chót',
                    'packaging'      => 'Đóng gói',
                    'demand'         => 'Nhu cầu',
                    'quantity'       => 'Số lượng',
                    'unit'           => 'Đơn vị',
                    'picked'         => 'Đã lấy',
                ],
            ],
            'additional' => [
                'title'   => 'Thông tin bổ sung',
                'entries' => [
                    'responsible'     => 'Người chịu trách nhiệm',
                    'shipping-policy' => 'Chính sách vận chuyển',
                    'scheduled-at'    => 'Lên lịch vào',
                    'source-document' => 'Tài liệu nguồn',
                ],
            ],
            'note' => [
                'title' => 'Ghi chú',
            ],
        ],
    ],

    'tabs' => [
        'todo'     => 'Cần làm',
        'my'       => 'Chuyển của tôi',
        'starred'  => 'Đã đánh dấu',
        'draft'    => 'Bản nháp',
        'waiting'  => 'Chờ đợi',
        'ready'    => 'Sẵn sàng',
        'done'     => 'Hoàn thành',
        'canceled' => 'Đã hủy',
    ],
];

