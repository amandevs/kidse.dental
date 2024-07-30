<x-mail::message>
# Order {{$order['id']}} - Status Updated



**Order ID:** {{ $order['id'] }}<br>
**Status:** {{ $order->status }}<br>


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
