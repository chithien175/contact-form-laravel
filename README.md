[![Latest Stable Version](https://poser.pugx.org/thienpham/contacts/v/stable)](https://packagist.org/packages/thienpham/contacts)
[![Total Downloads](https://poser.pugx.org/thienpham/contacts/downloads)](https://packagist.org/packages/thienpham/contacts)
[![Latest Unstable Version](https://poser.pugx.org/thienpham/contacts/v/unstable)](https://packagist.org/packages/thienpham/contacts)
[![License](https://poser.pugx.org/thienpham/contacts/license)](https://packagist.org/packages/thienpham/contacts)

# Contacts Form for Laravel

## Giới thiệu
Đây là gói ứng dụng dành cho Laravel:
- Tạo mẫu form liên hệ nhanh chóng.
- Sử dụng captcha đơn giản cho form liên hệ.
- Gửi thông tin liên hệ tới email admin.

## Yêu cầu
- [Laravel >= 5.6](https://laravel.com/docs/5.6/installation)

## Cài đặt
- Bạn sẽ cần [Composer](https://getcomposer.org/) để cài đặt gói này, sau đó chạy:
<pre>
    $ composer require thienpham/contacts
</pre>
- Sau khi cài đặt thành công, sao chép đoạn mã sau vào file `.env` để cấu hình email.
- Lưu ý:
- Nhập `MAIL_CONTACT_CAPTCHA=TRUE` để sử dụng Captcha.
- Nhập `MAIL_USERNAME` và `MAIL_PASSWORD` chính xác để quá trình gửi mail thành công.
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
    MAIL_CONTACT_CAPTCHA=TRUE
</pre>
Thực hiện lệnh `php artisan config:clear` để làm mới cấu hình mail

## Sử dụng
- Áp dụng `action` và `method` sau vào `from` liên hệ:
<pre>
    action="{{ route('store.thienpham.contact') }}" method="post"
</pre>
- Sử dụng `renderCheckCaptcha(env('MAIL_CONTACT_CAPTCHA'))` nếu dùng Captcha

##Code mẫu form liên hệ:
- Vào đường dẫn bên dưới để xem code mẫu form liên hệ:

## Tùy chỉnh giao diện gửi email (Overwrite)
- Chạy lệnh sau để nhân bản giao diện vào `resources/views`
<pre>
    $ php artisan vendor:publish
</pre>
- Để tùy chỉnh giao diện email, sửa file `email-template` theo đường dẫn sau:
<pre>
    resources/views/vendor/thienpham-contacts/email-template.blade.php
</pre>

## Hình ảnh
![alt text](https://uphinhnhanh.com/images/2018/07/14/AnhchupManhinh2018-07-14luc08.30.35.png "thienpham/contacts")
![alt text](https://uphinhnhanh.com/images/2018/07/14/AnhchupManhinh2018-07-14luc08.30.35.png "thienpham/contacts")

## Giấy phép
- Gói **thienpham/contacts** là phần mềm nguồn mở được cấp phép theo [MIT license](https://opensource.org/licenses/MIT).
