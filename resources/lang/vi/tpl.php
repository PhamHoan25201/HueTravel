<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Template Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    /**
     * Language for template category
     */

    'category.index.title' => 'Danh sách thể loại',
    'category.index.name' => 'Tên thể loại',
    'category.index.status' => 'Trạng thái',
    'category.index.status.hidden' => 'Ẩn',
    'category.index.status.show' => 'Hiện',
    'category.index.edit' => 'Sửa',
    'category.index.delete' => 'Xóa',

    'category.create.title' => 'Thêm Thể Loại',
    'category.create.name' => 'Tên Thể Loại',
    'category.create.status' => 'Trạng thái',

    'category.edit.title' => 'Chỉnh sửa Thể loại',
    'category.edit.name' => 'Tên Thể loại',
    'category.edit.status' => 'Trạng thái',

    'category.show.title' => 'Hiển thị Thể loại',

    /**
     * Language for template newstype
     */
    'newstype.index.title' => 'Danh sách Loại tin',
    'newstype.index.name' => 'Tên Loại tin',
    'newstype.index.typecategory' => 'Tên Thể loại',
    'newstype.index.status' => 'Trạng thái',
    'newstype.index.status.hidden' => 'Ẩn',
    'newstype.index.status.show' => 'Hiện',
    'newstype.index.edit' => 'Sửa',
    'newstype.index.delete' => 'Xóa',
    'newstype.index.submit' => 'Xác nhận',

    'newstype.create.title' => 'Tạo Loại tin',
    'newstype.create.name' => 'Tên Loại tin',
    'newstype.create.nameCategory' => 'Tên Thể Loại',
    'newstype.create.status' => 'Trạng Thái',

    'newstype.edit.title' => 'Chỉnh sửa loại tin',
    'newstype.edit.name' => 'Tên Loại tin',
    'newstype.edit.status' => 'Trạng thái',
    'newstype.edit.nameCategory' => 'Tên Thể loại',

    'newstype.show.title' => 'Hiển thị Loại tin',

     /**
     * Language for template news
     */
    'news.index.title' => 'Danh sách tin',
    'news.index.name' => 'Tiêu đề',
    'news.index.typenewstype' => 'Loại tin',
    'news.index.author' => 'Tác giả',
    'news.index.summary' => 'Tóm tắt',
    'news.index.edit' => 'Sửa',
    'news.index.delete' => 'Xóa',
    'news.index.submit' => 'Xác nhận',
    'news.index.content' => 'Nội dung',
    'news.index.url' => 'Đường dẫn hình ảnh',
    'news.index.views' => 'Lượt xem',
    'news.index.hot_news' => 'Tin nổi bật',
    'news.index.likes' => 'Lượt thích',

    'news.create.title' => 'Thêm Tin',
    'news.create.name' => 'Tiêu đề',
    'news.create.summary' => 'Tóm tắt',
    'news.create.namenewstype' => 'Loại tin',

    'news.edit.title' => 'Chỉnh sửa tin',
    'news.edit.name' => 'Tiêu đề',
    'news.edit.summary' => 'Tóm tắt',
    'news.edit.url' => 'Đường dẫn hình ảnh',
    'news.edit.content' => 'Nội dung',
    'news.edit.namenews' => 'Loại tin',

    'news.show.title' => 'Hiển thị Tin',

    /**
     * Language for template Advertisement
     */

    'advertisement.index.title' => 'Danh sách Quảng cáo',
    'advertisement.index.url1' => 'Đường dẫn hình ảnh 1',
    'advertisement.index.url2' => 'Đường dẫn hình ảnh 2',
    'advertisement.index.startdate' => 'Thời gian bắt đầu',
    'advertisement.index.enddate' => 'Thời gian kết thúc',
    'advertisement.index.description' => 'Mô tả',

    'advertisement.create.title' => 'Tạo Quảng cáo',
    'advertisement.create.url1' => 'Đường dẫn hình ảnh 1',
    'advertisement.create.url2' => 'Đường dẫn hình ảnh 2',
    'advertisement.create.startdate' => 'Thời gian bắt đầu',
    'advertisement.create.enddate' => 'Thời gian kết thúc',
    'advertisement.create.description' => 'Mô tả',

    'advertisement.edit.title' => 'Chỉnh sửa Quảng cáo',
    
    'advertisement.show.title' => 'Hiển thị Quảng cáo',

    /**
     * Language for template User
     */

    'user.index.title' => 'Danh sách Tài khoản',
    'user.index.name' => 'Tên người dùng',
    'user.index.email' => 'Email',
    'user.index.url_img' => 'Đường dẫn hình ảnh',
    'user.index.ngaysinh' => 'Ngày sinh',
    'user.index.password' => 'Mật khẩu',
    'user.index.sex' => 'Giới tính',
    'user.index.sex.male' => 'Nam',
    'user.index.sex.female' => 'Nữ',
    'user.index.is_admin' => 'Phân quyền',
    'user.index.is_admin.admin' => 'Quản trị viên',
    'user.index.is_admin.normaluser' => 'Người dùng bình thường',

    'user.edit.title' => 'Chỉnh sửa tài khoản',
    'user.edit.name' => 'Tên tài khoản',
    'user.edit.email' => 'Email',
    'user.edit.url_img' => 'Đường dẫn hình ảnh',
    'user.edit.ngaysinh' => 'Ngày sinh',
    'user.edit.sex' => 'Giới tính',
    'user.edit.is_admin' => 'Phân quyền',
    
    'user.show.title' => 'Hiển thị Tài khoản',

    /**
     * Language for error
     */
    'name.required' => 'Bắt buộc phải nhập tên',
    'name.min'=> 'Tên phải trên 5 ký tự',
    'name.max'=> 'Tên phải dưới 20 ký tự',

    'tieu_de.required' => 'Bắt buộc phải nhập tiêu đề.',
    'tieu_de.min'=> 'Tiêu đề phải trên 5 ký tự',
    'tieu_de.max'=> 'Tiêu đề phải dưới 40 ký tự',

    'tom_tat.required' => 'Bắt buộc phải nhập tóm tắt bài viết ',
    'tom_tat.min'=> 'Tóm tắt bài viết phải trên 5 ký tự',
    'tom_tat.max'=> 'Tóm tắt bài viết phải dưới 150 ký tự',

    'url_img.required' => 'Bắt buộc phải nhập URL.',
    'url_img.min'=> 'URL phải trên 5 ký tự',
    'url_img.max'=> 'URL phải dưới 150 ký tự',

    'noi_dung.required' => 'Bắt buộc phải nhập nội dung.',
    'noi_dung.min'=> 'Nội dung bài viết phải trên 5 ký tự',
    'noi_dung.max'=> 'Nội dung bài viết phải dưới 5000 ký tự',

    'description.required' => 'Bắt buộc phải nhập mô tả.',
    'description.min'=> 'Mô tả bài viết phải trên 5 ký tự',
    'description.max'=> 'Mô tả bài viết phải dưới 5000 ký tự',

    'email.max' => 'Sai Định dạng. Vui lòng nhập lại!!!',
    'url.max' => 'Sai định dạng. Vui lòng nhập lại!!!',
    
    /**
     * Language for Login and Register
     */
    'admin.error' => "Bạn không có quyền truy cập vào trang Quản trị viên",
    'auth.failed' => "Tài khoản hoặc Mật khẩu không đúng",
    'auth.password' => "Mật khẩu không đúng",

    /**
     * Language for add, delete and update
     */
    'admin.add.success' => "Thêm thành công!!!",
    'admin.update.success' => "Cập nhật thành công!!!",
    'admin.delete.success' => "Xóa thành công!!!",

    'admin.add.fail' => "Thêm thất bại!!!",
    'admin.update.fail' => "Cập nhật thất bại!!!",
    'admin.delete.fail' => "Xóa thất bại!!!",

    'admin.notFound' => "Không thể tìm thấy trang!!!",

    'flashMessage.any' => "Biểu mẫu đã xảy ra lỗi. Vui lòng kiểm tra lại!!!",

];
