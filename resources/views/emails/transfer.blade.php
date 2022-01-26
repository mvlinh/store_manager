
@component('mail::message')
Email chuyển khách hàng

Bạn nhận được một khách hàng chuyển từ {{Auth::user()->name}}

Email {{Auth::user()->email}}<br><br>

@component('mail::button', ['url' => 'http://127.0.0.1:8000/transfer_customer_receive'])
Xem chi tiết
@endcomponent

Cảm ơn,<br>
{{ config('app.name') }}
@endcomponent
