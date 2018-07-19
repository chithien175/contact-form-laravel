Bạn đã nhận được một tin nhắn từ : {{ $contact['fullname'] }}

@if(isset($contact['fullname'])) 
<p>
Tên: {{ $contact['fullname'] }}
</p>
@endif 

@if(isset($contact['email'])) 
<p>
Email: {{ $contact['email'] }}
</p>
@endif 

@if(isset($contact['address'])) 
<p>
Địa chỉ: {{ $contact['address'] }}
</p>
@endif 

@if(isset($contact['phone'])) 
<p>
Điện thoại: {{ $contact['phone'] }}
</p>
@endif 

@if(isset($contact['subject'])) 
<p>
Chủ đề: {{ $contact['subject'] }}
</p>
@endif 

@if(isset($contact['msg'])) 
<p>
Nội dung: {{ $contact['msg'] }}
</p>
@endif 