<?php

return [
    'title'                   => 'Hồ sơ',
    'heading'                 => 'Hồ sơ',
    'subheading'              => 'Quản lý cài đặt tài khoản và tùy chọn của bạn.',
    'information_section'     => 'Thông tin hồ sơ',
    'information_description' => 'Cập nhật thông tin hồ sơ tài khoản và địa chỉ email của bạn.',

    'notification' => [
        'success' => [
            'title' => 'Hồ sơ đã được cập nhật',
            'body'  => 'Hồ sơ của bạn đã được cập nhật thành công.',
        ],

        'error' => [
            'title' => 'Cập nhật hồ sơ thất bại',
            'body'  => 'Có lỗi xảy ra khi cập nhật hồ sơ của bạn.',
        ],

        'validation-error' => [
            'title' => 'Lỗi xác thực',
        ],
    ],

    'actions' => [
        'save' => 'Lưu thay đổi',
    ],

    'fields' => [
        'avatar' => 'Ảnh đại diện',
        'name'   => 'Tên',
        'email'  => 'Email',
    ],

    'password' => [
        'section'     => 'Cập nhật mật khẩu',
        'description' => 'Đảm bảo tài khoản của bạn sử dụng mật khẩu dài và ngẫu nhiên để bảo mật.',
        'current'     => 'Mật khẩu hiện tại',
        'new'         => 'Mật khẩu mới',
        'confirm'     => 'Xác nhận mật khẩu',
        'helper'      => 'Phải có ít nhất 8 ký tự.',

        'errors' => [
            'current-required'  => 'Mật khẩu hiện tại là bắt buộc.',
            'current-incorrect' => 'Mật khẩu hiện tại không đúng. Vui lòng thử lại.',
            'same-as-current'   => 'Mật khẩu mới phải khác với mật khẩu hiện tại của bạn.',
        ],

        'current-helper' => 'Nhập mật khẩu hiện tại của bạn để xác minh danh tính.',

        'notification' => [
            'success' => [
                'title' => 'Mật khẩu đã được cập nhật',
                'body'  => 'Mật khẩu của bạn đã được cập nhật thành công.',
            ],

            'error' => [
                'title' => 'Cập nhật mật khẩu thất bại',
                'body'  => 'Có lỗi xảy ra khi cập nhật mật khẩu của bạn.',
            ],
        ],
    ],
];
