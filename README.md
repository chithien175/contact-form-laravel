# Contacts Form for Laravel

Đây là gói ứng dụng dành cho Laravel:
- Gửi thông tin liên hệ tới email admin.

## Yêu cầu

- [Laravel >= 5.6](https://laravel.com/docs/5.6/installation)

## Cài đặt

Bạn sẽ cần [Composer](https://getcomposer.org/) để cài đặt gói này, sau đó chạy:
```sh
    $ composer require thienpham/contacts
```

Sau khi cài đặt thành công, sao chép đoạn mã sau vào file `.env` để cấu hình email.
Lưu ý nhập đúng `usename` và `password` để quá trình gửi mail thành công:
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
- Áp dụng `action` và `method` sau vào `from` liên hệ:
<pre>
    action="{{ route('store.thienpham.contact') }}" method="post"
</pre>

## Tùy chỉnh giao diện (Overwrite)

- Chạy lệnh sau để nhân bản giao diện vào `resources/views`
```sh
    $ php artisan vendor:publish
```

- Để tùy chỉnh giao diện email, sửa file `email-template` theo đường dẫn sau:
<pre>
    resources/views/vendor/thienpham-contacts/email-template.blade.php
</pre>

## Hình ảnh
![alt text](https://uphinhnhanh.com/images/2018/07/14/AnhchupManhinh2018-07-14luc08.30.26.png "thienpham/contacts")
![alt text](https://uphinhnhanh.com/images/2018/07/14/AnhchupManhinh2018-07-14luc08.30.35.png "thienpham/contacts")

## Giấy phép

Gói **thienpham/contacts** là phần mềm nguồn mở được cấp phép theo [MIT license](https://opensource.org/licenses/MIT).
