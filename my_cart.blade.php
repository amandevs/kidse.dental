@extends('layouts.main')
@section('content')


<div class="display-4 fw-bold text-center mt-4">My Cart</div>
<p class="container fs-4 mt-5">Home>Product>Kit, Refill.....etc</p>

<!-- Product Details Starting -->

<div class="container">
    <div class="row justify-content-between">
        <div class="col-lg-6">
            <!-- big-image -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center align-items-center"
                        style="height: 34rem !important;border: 2px solid black !important;">
                        <span>product Image</span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-2 col-5 me-3 mt-3 me-sm-5"
                        style="height: 6rem !important;border: 2px solid black !important;">

                    </div>
                    <div class="col-sm-2 col-5 me-3 mt-3 me-sm-5"
                        style="height: 6rem !important;border: 2px solid black !important;">

                    </div>
                    <div class="col-sm-2 col-5 me-3 mt-3 me-sm-5"
                        style="height: 6rem !important;border: 2px solid black !important;">

                    </div>
                    <div class="col-sm-2 col-5 me-3 me-sm-0 mt-3"
                        style="height: 6rem !important;border: 2px solid black !important;">

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="mt-2 mt-sm-3 col-lg-4 col-sm-2 col-5 me-3 me-sm-5"
                                style="height: 6rem !important;border: 2px solid black !important;">

                            </div>
                            <div class="mt-2 mt-sm-3 col-lg-4 col-sm-2 col-5"
                                style="height: 6rem !important;border: 2px solid black !important;">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg"></div>

                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="row justify-content-center">
                <div class="col-11 col-sm-12">
                    <div class="display-4 fw-bold mt-4">Product Name</div>
                    <div class="display-6 fw-bold mt-4">Sub Name or Full Form</div>
                    <div class="display-6 fw-bold mt-5">Price-</div>
                </div>
            </div>
            <div class="row align-items-center justify-content-sm-between justify-content-center mt-3">
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
                        <div class="col-6 order-lg-1 order-2 fs-1 fw-bold">Quantity</div>
                    </div>
                </div>

            </div>
            <div class="row justify-content-center mt-4">
                <div class="btn col-11 col-sm-12 text-white fs-5 fw-bold p-2" style="background-color: #FFCC00;">
                    Login to check price
                </div>

            </div>

            <div class="row justify-content-center mt-4">
                <div class="btn col-11 col-sm-12 fs-5 fw-bold p-2 border border-3" style="border-color: #FFCC00 !important;color: #FFCC00 !important;">
                    Add To Cart
                </div>

            </div>

            <div class="row justify-content-center">
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
            </div>


        </div>

    </div>
</div>

<!-- Rewies Starting -->

<div class="container mt-5">
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
</div>
@endsection