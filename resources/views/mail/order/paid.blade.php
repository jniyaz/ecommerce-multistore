@component('mail::message')
# Invoice Paid

Thank you for purchase. Please check below your receipt.

<table class="table">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($order->products as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->pivot->quantity }}</td>
                <td>{{ $item->pivot->price }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

Total: {{ $order->grand_total }}

@component('mail::button', ['url' => ''])
Download
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
