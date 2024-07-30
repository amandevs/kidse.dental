@extends('layouts.main')
@section('content')

<!-- Product Details Starting -->

<div class="container">
    <div class="row justify-content-between">

        <div>
            <h2 class="my-4 pt-4"><b>My Orders</b></h2>
        </div>

        



        <div class="col-md-9">
            @foreach ($orders as $order)
                <div class="card mb-4 border shadow">
                    <div class="card-body">
                        <h4><b>Order Id: {{$order['id']}}</b></h4>
                        <p>Product: {{$order->product['title']}}</p>
                        @if ($order->varient_name != null)
                            <p>Varient: {{$order->varient_name}}</p>
                        @endif

                        <p>Status: {{$order->status}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    



    </div>
</div>

@endsection