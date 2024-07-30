{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <h1>Payment for {{ $product->title }}</h1>
    <form action="{{ route('order.handlePayment', $product->id) }}" method="POST">
        @csrf
        <script
            src="https://checkout.razorpay.com/v1/checkout.js"
            data-key="{{ env('RAZORPAY_KEY') }}"
            data-amount="{{ $product->price * 100 }}"
            data-currency="INR"
            data-order_id="{{ $orderId }}"
            data-buttontext="Pay Now"
            data-name="Your Company Name"
            data-description="Purchase Description"
            data-image="https://example.com/your_logo.jpg"
            data-prefill.name="{{ Auth::user()->name }}"
            data-prefill.email="{{ Auth::user()->email }}"
            data-theme.color="#F37254">
        </script>
    </form>
</div>
@endsection --}}


@extends('layouts.main')

@section('content')

@isset($product_varient)

    <div class="container">
        <div class="my-5 ">
            <h1><b>Payment for {{ $product_varient->variante_name }}</b></h1>
            <form id="razorpay-payment-form" action="{{ route('order.handlePayment.varient',[$product->id, $product_varient['variante_name']]) }}" method="POST">
                @csrf
                <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
                <input type="hidden" name="razorpay_order_id" id="razorpay_order_id" value="{{ $orderId }}">
                <input type="hidden" name="razorpay_signature" id="razorpay_signature">
            </form>

            <button id="pay-button" class="btn text-white px-4 fw-700 my-4" style="background-color: #FFCC00;">Pay Now</button>
        </div>

    </div>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        document.getElementById('pay-button').onclick = function(e) {
            var options = {
                "key": "{{ env('RAZORPAY_KEY') }}",
                "amount": "{{ $product_varient->price * 100 }}", // amount in paise
                "currency": "INR",
                "name": "Your Company Name",
                "description": "Purchase Description",
                "image": "https://example.com/your_logo.jpg",
                "order_id": "{{ $orderId }}",
                "handler": function (response){
                    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
                    document.getElementById('razorpay_signature').value = response.razorpay_signature;
                    document.getElementById('razorpay-payment-form').submit();
                },
                "prefill": {
                    "name": "{{ Auth::user()->name }}",
                    "email": "{{ Auth::user()->email }}",

                },
                "theme": {
                    "color": "#F37254"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
            e.preventDefault();
        }
    </script>
@else

    <div class="container">
        <div class="my-5 ">
            <h1><b>Payment for {{ $product->title }}</b></h1>
            <form id="razorpay-payment-form" action="{{ route('order.handlePayment', $product->id) }}" method="POST">
                @csrf
                <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
                <input type="hidden" name="razorpay_order_id" id="razorpay_order_id" value="{{ $orderId }}">
                <input type="hidden" name="razorpay_signature" id="razorpay_signature">
            </form>

            <button id="pay-button" class="btn text-white px-4 fw-700 my-4" style="background-color: #FFCC00;">Pay Now</button>
        </div>

    </div>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        document.getElementById('pay-button').onclick = function(e) {
            var options = {
                "key": "{{ env('RAZORPAY_KEY') }}",
                "amount": "{{ $product->price * 100 }}", // amount in paise
                "currency": "INR",
                "name": "Your Company Name",
                "description": "Purchase Description",
                "image": "https://example.com/your_logo.jpg",
                "order_id": "{{ $orderId }}",
                "handler": function (response){
                    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
                    document.getElementById('razorpay_signature').value = response.razorpay_signature;
                    document.getElementById('razorpay-payment-form').submit();
                },
                "prefill": {
                    "name": "{{ Auth::user()->name }}",
                    "email": "{{ Auth::user()->email }}",
                    "phone": "{{ Auth::user()->phone }}",
                },
                "theme": {
                    "color": "#F37254"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
            e.preventDefault();
        }
    </script>


@endisset
@endsection

