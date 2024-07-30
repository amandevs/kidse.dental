@extends('layouts.main')
@section('content')


<!-- slider starting -->
@include('layouts.slider')
<!-- slider ending -->

<!-- Welcome starting -->

<div class="container mt-3">
    <div class="fs-2 fw-bold text-center">Welcome to Kids-e-Dental,
        <span style="color: #FFCC00 !important;">Where smiles begin their lifelong journey!</span><br>
    </div>
    <div class="row justify-content-center mt-3">
        <!-- <div class="col-11 fs-4 text-center" style="font-weight: 600 !important;">
            We are a dedicated team of professionals, committed to providing the highest quality
            dental products for children. Founded in the year 2017, by Dr. Mukul Jain, a pediatric
            dentist, we have been at the forefront of innovation in pediatric dental care, dedicated
            to creating exceptional products that make a difference in children’s lives. All our
            products are research based and passionately made using the best technologies. We
            believe in high quality standards and customer service.
        </div> -->

        <div class="col-12 col-md-11 text-center fw-bold custom-text">
            We are a dedicated team of professionals, committed to providing the highest quality
            dental products for children. Founded in the year 2017, by Dr. Mukul Jain, a pediatric
            dentist, we have been at the forefront of innovation in pediatric dental care, dedicated
            to creating exceptional products that make a difference in children’s lives. All our
            products are research based and passionately made using the best technologies. We
            believe in high quality standards and customer service.
        </div>

        <style>
            .custom-text {
                font-size: 1rem;
                /* Default size */
            }

            @media (min-width: 576px) {
                .custom-text {
                    font-size: 1.2rem;
                    /* Small devices */
                }
            }

            @media (min-width: 768px) {
                .custom-text {
                    font-size: 1.5rem;
                    /* Medium devices */
                }
            }

            @media (min-width: 992px) {
                .custom-text {
                    font-size: 1.8rem;
                    /* Large devices */
                }
            }

            @media (min-width: 1200px) {
                .custom-text {
                    font-size: 1.85rem;
                    /* Extra large devices */
                }
            }
        </style>

        <!-- <div class="col-11 fs-4 text-center" style="font-weight: 600 !important;">
            <span>
                We are a dedicated team of professionals, committed to providing the highest quality
            </span><br>
            <span>
                dental products for children. Founded in the year 2017, by Dr. Mukul Jain, a pediatric
            </span><br>
            <span>
                dentist, we have been at the forefront of innovation in pediatric dental care, dedicated
            </span><br>
            <span>
                to creating exceptional products that make a difference in children’s lives. All our
            </span><br>
            <span>
                products are research based and passionately made using the best technologies. We
            </span><br>
            <span>
                believe in high quality standards and customer service.
            </span><br>
        </div> -->
    </div>
</div>

<!-- Welcome ending -->

<!-- Our Products Starting -->

<div class="display-6 text-center fw-bold mt-5" style="color: black !important;">OUR PRODUCTS</div>


<!-- products slider -->

<div id="carouselExampleIndicators" class="carousel slide mt-4" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item justify-content-center active d-flex">
            <div class="d-block w-25">
                <div class="p-3" style="width: 18rem;border-radius: 25px !important;background-color: #E8E2E2;">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-img-top" style="height: 175px !important;width: 100% !important; background-color: white !important;border-radius: 25px !important;
                    "></div>
                    <div class="card-body">
                        <p class="card-text fw-bold">e-SDF</p>
                    </div>
                </div>
            </div>
            <div class="d-block w-25">
                <div class="p-3" style="width: 18rem;border-radius: 25px !important;background-color: #E8E2E2;">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-img-top" style="height: 175px !important;width: 100% !important; background-color: white !important;border-radius: 25px !important;
                    "></div>
                    <div class="card-body">
                        <p class="card-text fw-bold">Kids-e-Files</p>
                    </div>
                </div>
            </div>
            <div class="d-block w-25">
                <div class="p-3" style="width: 18rem;border-radius: 25px !important;background-color: #E8E2E2;">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-img-top" style="height: 175px !important;width: 100% !important; background-color: white !important;border-radius: 25px !important;
                    "></div>
                    <div class="card-body">
                        <p class="card-text fw-bold">e-Space Maintainer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor"
            class="bi bi-chevron-left rounded-circle p-2" style="background-color: #FFCC00 !important;"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
        </svg>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor"
            class="bi bi-chevron-right rounded-circle p-2" style="background-color: #FFCC00 !important;"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
        </svg>
    </button>
</div>

<!-- Our Products Ending -->

<!-- Mid slider starting -->

<style>
    @media screen and (min-width: 992px) {
        .mid_slider {
            height: 16rem !important;
        }
    }
</style>
<img src="{{asset('images/home/product_images/mid_slider.png')}}" alt="" class="img-fluid mt-5 mid_slider"
    style="width: 100% !important;">


<!-- Mid slider ending -->

<!-- TESTIMONIALS STARTING -->

<div class="display-5 fw-bold text-center mt-5">
    TESTIMONIALS
</div>
<div class="container mt-3">

    <div id="carouselExampleControls" class="carousel slide d-lg-block d-none" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <img src="{{asset('images/product/testimonial_1.png')}}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
                    <img src="{{asset('images/product/testimonial_2.png')}}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <img src="{{asset('images/product/testimonial_3.png')}}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-11 mt-3">

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                class="bi bi-arrow-left-circle text-warning" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
            </svg>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                class="bi bi-arrow-right-circle text-warning" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
            </svg>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div id="carouselExampleControlsMobile" class="carousel slide d-lg-none d-block" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <img src="{{asset('images/product/testimonial_1.png')}}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-sm-8 col-8 mt-3">
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <img src="{{asset('images/product/testimonial_2.png')}}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-sm-8 col-8 mt-3">
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <img src="{{asset('images/product/testimonial_3.png')}}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-sm-8 col-8 mt-3">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsMobile"
            data-bs-slide="prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                class="bi bi-arrow-left-circle text-warning" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
            </svg>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsMobile"
            data-bs-slide="next">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                class="bi bi-arrow-right-circle text-warning" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
            </svg>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- TESTIMONIALS ENDING -->

<!-- World wide Starting -->

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-5">
            <div class="display-3 fw-bold" style="color:black !important ">
                WORLD WIDE <span style="color: #FFCC00 !important;">SUPPLY</span>
            </div>
            <div class="display-2 fw-bold" style="color:black !important ">
                We follow <span style="color: #FFCC00 !important;">global standards</span>
            </div>
        </div>
        <img src="{{asset('images/home/product_images/asia_map.png')}}" alt="" class="img-fluid col-md-7">
    </div>
</div>
@endsection