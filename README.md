# Contacts Form for Laravel

Đây là gói ứng dụng tạo trang liên hệ nhanh chóng dành cho Laravel:
- Tạo form liên hệ ngoài frontend.
- Gửi thông tin liên hệ tới email admin.

## Yêu cầu

- [Laravel >= 5.6](https://laravel.com/docs/5.6/installation)

## Cài đặt

Bạn sẽ cần [Composer](https://getcomposer.org/) để cài đặt gói này, sau đó chạy:
<pre>
    composer require thienpham/contacts
</pre>

Sau khi cài đặt thành công, sao chép đoạn mã sau vào .env để cấu hình email.
Lưu ý nhập đúng usename và password để quá trình gửi mail thành công:
<pre>
    MAIL_DRIVER=smtp
    MAIL_HOST=smtp.googlemail.com
    MAIL_PORT=465
    MAIL_USERNAME=demo@gmail.com
    MAIL_PASSWORD=
    MAIL_ENCRYPTION=ssl
    MAIL_FROM_ADDRESS=demo@gmail.com
    MAIL_FROM_NAME="Demo From Name"
    MAIL_TO_ADDRESS=demo@gmail.com
</pre>

## Sử dụng
- Sử dụng route sau để hiển thị mẫu liên hệ:
<pre>
    localhost:8000/contacts
</pre>

## Tùy chỉnh giao diện

- Chạy lệnh sau để copy giao diện vào "resources/views"
<pre>
    php artisan vendor:publish
</pre>

- Để tùy chỉnh giao diện mẫu liên hệ, sửa file:
<pre>
    resources/views/vendor/contacts/contact.blade.php
</pre>

- Để tùy chỉnh giao diện email, sửa file:
<pre>
    resources/views/vendor/contacts/email-template.blade.php
</pre>

## Giấy phép

Gói **thienpham/contacts** là phần mềm nguồn mở được cấp phép theo [MIT license](https://opensource.org/licenses/MIT).
