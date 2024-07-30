<x-mail::message>
# Order Confirmation

Thank you for your purchase!

**Order ID:** {{ $order['id'] }}<br>
**Product:** {{ $order->product->title }}<br>
**Price:** ₹{{ $order->product->price }}<br>


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
