@component('mail::message')
# New Shop Activation Request

Shop Name : {{ $shop->name }} <br>
Shop Owner : {{ $shop->owner->name }} <br>

@component('mail::button', ['url' => url('/admin/shops')])
Manage Shops
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
