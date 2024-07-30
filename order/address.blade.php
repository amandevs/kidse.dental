@extends('layouts.main')
@section('content')

<!-- Product Details Starting -->

<div class="container">
    <div class="row justify-content-between">

        <div>
            <h2 class="my-4 pt-4"><b>Select Address</b></h2>
        </div>

        <div class="col-md-8">
            
            <div class="card shadow border my-4 p-1">
                <div class="card-body">
                    {{-- <h1>Add Address</h1> --}}
                    <form action="{{ route('order.saveAddress', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="address_line_1">Address Line 1</label>
                            <input type="text" id="address_line_1" name="address_line_1" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="address_line_2">Address Line 2</label>
                            <input type="text" id="address_line_2" name="address_line_2" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="city">City</label>
                            <input type="text" id="city" name="city" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="state">State</label>
                            <input type="text" id="state" name="state" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="postal_code">Postal Code</label>
                            <input type="text" id="postal_code" name="postal_code" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="country">Country</label>
                            <input type="text" id="country" name="country" class="form-control" required>
                        </div>


                        

                        @isset($product_varient)
                            <input type="hidden" name="variante_name" value="{{ $product_varient->variante_name }}">
                            <input type="hidden" name="varient_price" value="{{ $product_varient->price }}">
                            <input type="hidden" name="product_varient" value="{{ $product_varient }}">
                            <input type="hidden" name="product" value="{{ $product }}">
                        @endisset


                        <button type="submit" class="btn btn-primary">Proceed to Payment</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">

            <div class="card shadow border my-4 p-1">
                <div class="card-body">
                    @isset($product_varient)
                        <h2>Product</h2>
                        <div class="card p-1">
                            <img src="https://www.kidsedental.com/wp-content/uploads/2021/08/Open-Box-e-SDF.jpg" class="mw-100" alt="">
                            
                            <div class="card-body">
                                <h5 class="card-title"><b>{{$product['title']}}</b></h5>
                                <h5 class="card-title">Varient: <span><b>{{$product_varient['variante_name']}}</b></span></h5>
                                <h5 class="card-title">Buying Option: <b>{{$product_varient['buying_option']}}</b></h5>
                                <h5 class="card-title">Price: <b>INR {{$product_varient['price']}}</b></h5>
                            </div>
                        </div>

                    @else
                        <h2>Product</h2>
                        {{-- {{$product}} --}}

                        <div class="card p-1">
                            <img src="https://www.kidsedental.com/wp-content/uploads/2021/08/Open-Box-e-SDF.jpg" class="mw-100" alt="">
                            
                            <div class="card-body">
                                <h5 class="card-title"><b>{{$product['title']}}</b></h5>
                                <h5 class="card-title">Price: <b>INR {{$product['price']}}</b></h5>
                            </div>
                        </div>


                    @endisset
                </div>
            </div>

        </div>

    



    </div>
</div>

@endsection