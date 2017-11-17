<?php

return [
    'menu'     => [
        'dashboard'          => 'Bảng điều khiển',
        'admin_users'        => 'User',
        'users'              => 'Users',
        'site-configuration' => 'Cấu hình trang',
    ],
    'messages' => [
        'general' => [
            'update_success' => 'Cập nhật thành công.',
            'create_success' => 'Tạo mới thành công.',
            'delete_success' => 'Xóa thành công.',
        ],
    ],
    'errors'   => [
        'general'  => [
            'save_failed' => 'Lưu không thành công. Vui lòng liên hệ với các nhà phát triển.',
        ],
        'requests' => [
            'me' => [
                'email'    => [
                    'required' => 'Email không được để trống',
                    'email'    => 'Email không đúng',
                ],
                'password' => [
                    'min' => 'Mật khẩu ít nhất 6 ký tự',
                ],
            ],
        ],
    ],
    'pages'    => [
        'common'                   => [
            'buttons' => [
                'create'          => 'Tạo mới',
                'edit'            => 'Sửa',
                'save'            => 'Lưu lại',
                'delete'          => 'Xóa',
                'cancel'          => 'Cancel',
                'add'             => 'Thêm',
                'preview'         => 'Xem trước',
                'forgot_password' => 'Gửi tôi email!',
                'reset_password'  => 'Đổi mật khẩu',
            ],
        ],
        'auth'                     => [
            'buttons'  => [
                'sign_in'         => 'Đăng nhập',
                'forgot_password' => 'Gửi tôi email!',
                'reset_password'  => 'Đổi mật khẩu',
            ],
            'messages' => [
                'remember_me'     => 'Duy trì đăng nhập',
                'please_sign_in'  => 'Đăng nhập để bắt đầu phiên làm việc',
                'forgot_password' => 'Quên mật khẩu',
                'reset_password'  => 'Vui lòng nhập địa chỉ email và mật khẩu mới',
            ],
        ],
        'site-configurations'      => [
            'columns' => [
                'locale'                => 'Ngôn ngữ',
                'name'                  => 'Tên',
                'title'                 => 'Tiêu đề',
                'keywords'              => 'Từ khóa',
                'description'           => 'Mô tả',
                'ogp_image_id'          => 'Ảnh OGP',
                'twitter_card_image_id' => 'Ảnh thẻ twitter',
            ],
        ],
        'articles'                 => [
            'columns' => [
                'slug'               => 'Đường dẫn bài viết',
                'title'              => 'Tiêu đề',
                'keywords'           => 'Từ khóa',
                'description'        => 'Mô tả',
                'content'            => 'Nội dung',
                'cover_image_id'     => 'Ảnh bìa',
                'locale'             => 'Ngôn ngữ',
                'is_enabled'         => 'Hoạt động',
                'publish_started_at' => 'Xuất bản bắt đầu lúc',
                'publish_ended_at'   => 'Xuất bản kết thúc lúc',
                'is_enabled_true'    => 'Kích hoạt',
                'is_enabled_false'   => 'Khóa',

            ],
        ],
        'user-notifications'       => [
            'columns' => [
                'user_id'       => 'Người dùng',
                'category_type' => 'Chuyên mục',
                'type'          => 'Thể loại',
                'data'          => 'Dữ liệu',
                'locale'        => 'Ngôn ngữ',
                'content'       => 'Nội dung',
                'read'          => 'Đọc',
                'read_true'     => 'Đọc',
                'read_false'    => 'Chưa đọc',
                'sent_at'       => 'Gửi vào lúc',
            ],
        ],
        'admin-user-notifications' => [
            'columns' => [
                'user_id'       => 'Người dùng',
                'category_type' => 'Chuyên mục',
                'type'          => 'Thể loại',
                'data'          => 'Dữ liệu',
                'locale'        => 'Ngôn ngữ',
                'content'       => 'Nội dung',
                'read'          => 'Đọc',
                'read_true'     => 'Đọc',
                'read_false'    => 'Chưa đọc',
                'sent_at'       => 'Gửi vào lúc',
            ],
        ],
        'images'                   => [
            'columns' => [
                'url'                    => 'Đường link',
                'title'                  => 'Tiêu đề',
                'is_local'               => '',
                'entity_type'            => 'Thể loại',
                'entity_id'              => 'ID',
                'file_category_type'     => 'Danh mục',
                's3_key'                 => '',
                's3_bucket'              => '',
                's3_region'              => '',
                's3_extension'           => '',
                'media_type'             => 'Thể loại',
                'format'                 => 'Định dạng',
                'file_size'              => 'Kích thước',
                'width'                  => 'Độ rộng',
                'height'                 => 'Độ cao',
                'has_alternative'        => '',
                'alternative_media_type' => '',
                'alternative_format'     => '',
                'alternative_extension'  => '',
                'is_enabled'             => 'Trạng thái',
                'is_enabled_true'        => 'Kích hoạt',
                'is_enabled_false'       => 'Khóa',
            ],
        ],
        'users'                    => [
            'columns' => [
                'name'     => 'Tên',
                'email'    => 'Địa chỉ email',
                'password' => 'Mật khẩu',
            ],
        ],
        /* NEW PAGE STRINGS */
    ],
    'roles'    => [
        'super_admin' => 'Super admin',
        'sub_admin' => 'Sub admin',
        'user' => 'User',
    ],
];
