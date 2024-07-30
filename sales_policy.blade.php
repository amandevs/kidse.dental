@extends('layouts.main')
@section('content')
<!-- navbar starting -->
<style>
    @media screen and (min-width: 1px) and (max-width: 464px) {
        .logo {
            height: 40px !important;
        }
    }
    .store-yellow{
        background-color: #ffc40d!important;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light navs">
    <div class="container-fluid">
        <a class="navbar-brand bg-white ms-md-2 ms-lg-2" href="#">
                <img src="{{ asset('images/navbar/logo_r.jpg')}}" alt=""
                class="img-fluid logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item ms-3 ms-lg-0 ms-3 me-xl-4 me-lg-2">
                    <a class="nav-link active fw-bold" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item ms-3 ms-lg-0 ms-3 me-4">
                    <a class="nav-link active fw-bold" aria-current="page" href="#">About Us</a>
                </li>
                <li class="nav-item ms-3 ms-lg-0 ms-3 dropdown me-xl-4 me-lg-2">
                    <a class="nav-link text-dark fw-bold" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="#">
                                
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">

                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">

                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">

                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">

                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">

                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item ms-3 ms-lg-0 ms-3 me-xl-4 me-lg-2">
                    <a class="nav-link active fw-bold" aria-current="page" href="#">Education</a>
                </li>
                <li class="nav-item ms-3 ms-lg-0 ms-3 me-xl-4 me-lg-2">
                    <a class="nav-link active fw-bold" aria-current="page" href="#">Blogs</a>
                </li>
                <li class="nav-item ms-3 ms-lg-0 ms-3 me-xl-4 me-lg-2 mb-3 mb-lg-0 me-3">
                    <a class="nav-link ps-5 btn w-100 pe-5 fw-bold active bg-white rounded-pill fw-bold store-yellow"
                        aria-current="page" href="#">SHOP NOW</a>
                </li>
                <li class="nav-item ms-3 ms-lg-0 ms-3 me-xl-4 me-lg-2 mb-3 mb-lg-0 me-3">
                    <a class="nav-link ps-5 btn w-100 pe-5 fw-bold active bg-white rounded-pill fw-bold store-yellow"
                        aria-current="page" href="#">PRODUCT
                        CATALOGUE</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- navbar ending -->

<img src="{{ asset('images/sales_policy/sales_policy_banner.jpg')}}" alt="" class="img-fluid w-100">

<div class="container-fluid mt-4 mb-4">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="row">
                <div class="col-12">
                    <div class="display-5 fw-bold" style="color: black !important;">Ordering</div>
                    <div class="row justify-content-center">
                        <div class="col-11 mt-4" style="font-weight: 500 !important;">
                            <div class="fs-5">
                                1. Orders for our pediatric dental products can be placed through our website, email, or
                                phone.
                            </div>
                            <div class="fs-5 mt-2">
                                2. All orders are subject to availability and acceptance by us.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <div class="display-5 fw-bold" style="color: black !important;">Pricing and Payment</div>
                    <div class="row justify-content-center">
                        <div class="col-11 mt-4" style="font-weight: 500 !important;">
                            <div class="fs-5">
                                1.Prices are listed in our catalog or on our website and are subject to change without
                                notice.
                            </div>
                            <div class="fs-5 mt-2">
                                2. Payment methods accepted include credit cards, bank transfers, and other methods as
                                specified on
                                our website.
                            </div>
                            <div class="fs-5 mt-2">
                                3.All orders will be confirmed after payment is successfully made.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12">
                    <div class="display-5 fw-bold" style="color: black !important;">Shipping and Delivery</div>
                    <div class="row justify-content-center">
                        <div class="col-11 mt-4" style="font-weight: 500 !important;">
                            <div class="fs-5">
                                1. Shipping costs and estimated delivery times will be provided during the order
                                process.
                            </div>
                            <div class="fs-5 mt-2">
                                2. We are not responsible for delays caused by shipping carriers or other factors beyond
                                our control.
                            </div>
                            <div class="fs-5 mt-2">
                                3. We are not liable for any scams or cyber fraudulent activities related to our
                                products. Please be
                                cautious and report any suspicious behavior to us immediately.
                            </div>
                            <div class="fs-5 mt-2">
                                4. Please note that we do not accept cash on delivery (COD) as a payment method for our
                                products. All
                                payments must be made in advance using the accepted payment methods specified on our
                                website.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12">
                    <div class="display-5 fw-bold" style="color: black !important;">Returns and Refunds</div>
                    <div class="row justify-content-center">
                        <div class="col-11 mt-4" style="font-weight: 500 !important;">
                            <div class="fs-5">
                                1. If you receive a damaged or defective product, please contact us within 7 days of
                                receipt to arrange for
                                a replacement.
                            </div>
                            <div class="fs-5 mt-2">
                                2. As per ISO standards products once sold cannot be returned.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12">
                    <div class="display-5 fw-bold" style="color: black !important;">Customer Support</div>
                    <div class="row justify-content-center">
                        <div class="col-11 mt-4" style="font-weight: 500 !important;">
                            <div class="fs-5">
                                If you have any questions or conc7erns about our products or policies, please contact
                                our customer support
                                team at <a href="" class="text-dark fw-bold">enquiry@kids-e-dental.com</a>
                                <div class="fw-bold"> or +91-7506038332.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection