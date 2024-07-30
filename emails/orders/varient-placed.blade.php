<x-mail::message>
# Order Confirmation

Thank you for your purchase!

**Order ID:** {{ $order['id'] }}<br>
**Product:** {{ $order->product->title }}<br>
**Varient:** {{ $product_varient->variante_name }}<br>
**Option:** {{ $product_varient->buying_option }}<br>
**Price:** ₹{{ $product_varient->price }}<br>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
