@component('mail::message')
# Congratulations

Your shop has been activated.

@component('mail::button', ['url' => route('shops.show')])
Visit Your Shop
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
