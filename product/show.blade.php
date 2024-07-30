@extends('layouts.main')
@section('content')

<!-- Product Details Starting -->

<div class="container">
    <div class="row justify-content-between">
        <div class="col-lg-6 my-5">
            <!-- big-image -->
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center align-items-center"
                        style="height: 34rem !important;border: 1px solid lightgray !important;">
                        <img src="https://www.kidsedental.com/wp-content/uploads/2021/08/Open-Box-e-SDF.jpg" class="mw-100" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 my-5">
            <div class="row justify-content-center">
                <div class="col-11 col-sm-12">
                    <h3 class="fw-bold">{{$product['title']}}</h3>

                    {{-- <p >{{$product['buying_option']}}</p> --}}

                    <p class="mb-">{!! nl2br(e($product['description'])) !!}</p>
                    
                    @auth
                    
                        {{-- <div class="row align-items-center justify-content-sm-between justify-content-center mt-3">
                            <div class="col-11 col-sm-12">
                                <div class="row">
                                    <div class="col-sm-5 col-6 order-lg-1 order-2">
                                        <div class="row justify-content-between">
                                            <button
                                                class="decrease btn btn-outline-dark d-flex justify-content-center align-items-center fw-bold fs-5 col-3">-</button>
                                            <input type="text"
                                                class="input-form quantity-input d-flex justify-content-center align-items-center fs-5 text-center fw-bold col-4"
                                                value="1">
                                            <button
                                                class="increase btn btn-outline-dark d-flex justify-content-center align-items-center fw-bold fs-5 col-3">+</button>
                                        </div>
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function () {
                                                const decreaseButton = document.querySelector('.decrease');
                                                const increaseButton = document.querySelector('.increase');
                                                const quantityInput = document.querySelector('.quantity-input');

                                                decreaseButton.addEventListener('click', function () {
                                                    let currentValue = parseInt(quantityInput.value);
                                                    if (currentValue > 1) {
                                                        quantityInput.value = currentValue - 1;
                                                    }
                                                });

                                                increaseButton.addEventListener('click', function () {
                                                    let currentValue = parseInt(quantityInput.value);
                                                    quantityInput.value = currentValue + 1;
                                                });
                                            });
                                        </script>
                                    </div>
                                    <div class="fw-bold">Quantity</div>
                                </div>
                            </div>

                        </div> --}}

                        <p class="mb-2">Price: INR {{$product['price']}}</p>

                        




                        <div class="py-3">
                            {{-- <a href="#" class="btn btn-warning text-white px-4 fw-700 w-100" style="background-color: #FFCC00;">Buy Now</a> --}}

                            <form action="{{ route('order.address', $product['id']) }}" method="GET" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="product_title" value="{{$product['title']}}" id="">
                                @isset($product_varient)
                                    <input type="hidden" name="varient_name" value="{{$product_varient['variante_name']}}" id="">
                                    <input type="hidden" name="varient_price" value="{{$product_varient['price']}}" id="">
                                    <input type="hidden" name="varient" value="{{$product_varient}}" id="">
                                    
                                @endisset
                                <input type="hidden" name="product" value="{{$product}}" id="">


                                <button type="submit" class="btn btn-warning text-white px-4 fw-700 w-100" style="background-color: #FFCC00;">Buy Now</button>
                            </form>



                        </div>



                    @else

                        <div class="py-3">
                            <a href="{{route('login')}}" class="btn btn-warning text-white px-4 fw-700 w-100" style="background-color: #FFCC00;">Login to check price</a>
                        </div>

                    @endauth


                    <div class="my-4">
                        <nav>
                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Features</button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Shipping Details</button>
                                <button class="nav-link" id="Packaging-tab" data-bs-toggle="tab" data-bs-target="#Packaging" type="button" role="tab" aria-controls="Packaging" aria-selected="false">Packaging</button>
                            </div>
                        </nav>
                        <div class="tab-content p-3 border" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <p class="mb-0">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laudantium est, tenetur voluptates pariatur quia nihil incidunt ipsum sed numquam minus tempore, iure deserunt consequuntur! Hic odit tempora necessitatibus in.
                                    
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non itaque qui fuga enim, quas nostrum consectetur dolorem commodi velit eveniet? Esse, laborum autem maxime accusantium illum dicta sunt cumque inventore!</p>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos, voluptas! Eveniet impedit in corrupti sapiente repellendus praesentium necessitatibus est quam at enim odio quo accusamus facere, beatae exercitationem, perspiciatis dolorem!</p>
                            </div>

                            <div class="tab-pane fade" id="Packaging" role="tabpanel" aria-labelledby="Packaging-tab">
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, expedita voluptates quas eos consequuntur dignissimos, saepe in a facere aperiam, itaque voluptatem voluptatibus dolor quaerat vel ullam hic sunt error.</p>
                            </div>
                        </div>
                    </div>



                    {{-- <p class="">{{$product_varient['discription']}}</p> --}}
                    
                    
                    {{-- <p class="">{{$product_varient['product_image']}}</p>
                    <p class="">{{$product_varient['price']}}</p>
                    <p class="">{{$product_varient['hsn_code']}}</p>
                    
                    <p class="">{{$product_varient['tax_rate']}}</p> --}}

                </div>
            </div>
            
            {{-- <div class="row justify-content-center mt-4">
                <div class="btn col-11 col-sm-12 text-white fs-5 fw-700 p-2" style="background-color: #FFCC00;">
                    Login to check price
                </div>
            </div> --}}

            {{-- <div class="row justify-content-center">
                <div class="col-11 col-sm-12">
                    <div class="fw-bold fs-3 mt-3">
                        Description
                    </div>
                    <div class="fw-bold fs-3 mt-5">
                        Features
                    </div>
                    <div class="fw-bold fs-3 mt-5">
                        Shipping Details
                    </div>
                    <div class="fw-bold fs-3 mt-5">
                        Packaging
                    </div>
                </div>
            </div> --}}


        </div>

    </div>
</div>

<!-- Rewies Starting -->

{{-- <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-12">
            <div class="row">
                <div class="col-md-3 mt-3 col-sm-4 order-sm-1 order-2">
                    <div class="display-5 fw-bold">Reviews</div>
                    <div class="fs-4 fw-bold mt-5">Your Review</div>
                </div>
                <div class="col-md-4 mt-3 col-sm order-sm-2 order-1">
                    <div class="display-5 fw-bold">Rating</div>
                    <img src="{{ asset('images/my_cart/rating.png')}}" alt="" class="img-fluid mt-5">
                </div>
            </div>
        </div>

    </div>
    <div class="row justify-content-center">
        <div class="col-11 col-sm-12">
            <form class="mt-3">
                <div class="mb-3">
                    <textarea class="form-control" style="border: 1px solid black; border-radius: 0 !important;"
                        id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3 mt-4">
                    <label for="exampleInputPassword1" class="form-label fw-bold fs-5">Name</label>
                    <input type="password" style="border: 1px solid black; border-radius: 0 !important;"
                        class="form-control mt-3" id="exampleInputPassword1">
                </div>
                <div class="mb-3 mt-4">
                    <label for="exampleInputEmail1" class="form-label fw-bold fs-5">Email</label>
                    <input type="email" style="border: 1px solid black; border-radius: 0 !important;"
                        class="form-control mt-3" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="ps-3">
                    <div class="mb-3 row form-check mt-3 d-flex align-items-center">
                        <input type="checkbox" class="form-check-input col-3"
                            style="border: 1px solid black;height: 25px !important; border-radius: 0 !important;"
                            id="exampleCheck1">
                        <label class="form-check-label col-9 fw-bold fs-sm-5 ms-2" for="exampleCheck1">Save my name,
                            email,
                            and
                            website in
                            this browser for the
                            next time I comment.
                        </label>
                    </div>
                </div>
                <button type="submit" style="background-color: #FFCC00 !important; border-radius: 0 !important;"
                    class="btn text-white fw-bold fs-4 ps-4 pe-4 mt-2">Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- Rewies Ending -->

<!-- Similar Product Starting -->

<div class="display-4 fw-bold text-center mt-5">Similar Product</div>

<div class="container mb-5">
    <div class="row justify-content-md-between justify-content-center">
        <div class="col-lg-2 col-md-5 col-11 mt-5" style="height: 10rem !important;border: 2px solid black !important;">

        </div>
        <div class="col-lg-2 col-md-5 col-11 mt-5" style="height: 10rem !important;border: 2px solid black !important;">

        </div>
        <div class="col-lg-2 col-md-5 col-11 mt-5" style="height: 10rem !important;border: 2px solid black !important;">

        </div>
        <div class="col-lg-2 col-md-5 col-11 mt-5" style="height: 10rem !important;border: 2px solid black !important;">

        </div>
    </div>
</div> --}}
@endsection