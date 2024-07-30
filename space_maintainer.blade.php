@extends('layouts.main')
@section('content')
<!-- SLIDER STARTING -->
<!-- <style>
        @media screen and (min-width: 465px) and (max-width: 5000px) {
            .slide {
                margin-top: 95px !important;
            }
        }

        @media screen and (min-width: 1px) and (max-width: 464px) {
            .slide {
                margin-top: 66px !important;
            }
        }
    </style> -->
<img src="{{ asset('images/product/banner.jpg')}}" alt="" class="img-fluid container-fluid slide">

<!-- SLIDER ENDING -->

<!-- SPACE MAINTAINER STARTING -->

<div class="container-fluid mt-4">
    <div class="row">
        <img src="{{ asset('images/product/logo.png')}}" alt="" class="img-fluid container-fluid col-md-5 col-8">
    </div>
</div>
<div class="fs-3 text-center mt-3">
    It is a chairside space maintainer used to prevent pre mature loss of space.
</div>


<!-- SPACE MAINTAINER ENDING -->

<!-- DESIGN STARTING -->

<div class="container-fluid mt-3">
    <div class="row justify-content-between">
        <img src="{{ asset('images/product/design_left.jpg')}}" alt="" class="img-fluid col-lg-4 col-md-5"
            style="height: 70% !important;">
        <img src="{{ asset('images/product/design_right.png')}}" alt="" class="img-fluid col-lg-5 col-md-5">
    </div>
</div>

<!-- DESIGN ENDING -->

<!-- COMPONENTS STARTING -->

<div class="container-fluid mt-3">
    <div class="row justify-content-between">
        <img src="{{ asset('images/product/components_left.png')}}" alt=""
            class="img-fluid col-md-5 mt-3 order-md-1 order-2" style="height: 70% !important;">
        <img src="{{ asset('images/product/components_right.jpg')}}" alt=""
            class="img-fluid col-md-5 mt-3 order-md-2 order-1">
    </div>
</div>

<!-- COMPONENTS ENDING -->

<!-- INSTRUMENT STARTING -->

<div class="container-fluid mt-3">
    <div class="row justify-content-between">
        <img src="{{ asset('images/product/instrument_left.jpg')}}" alt="" class="img-fluid col-md-5 mt-3"
            style="height: 70% !important;">
        <img src="{{ asset('images/product/instrument_right.png')}}" alt="" class="img-fluid col-md-5 mt-3">
    </div>
</div>

<!-- INSTRUMENT ENDING -->

<!-- ADVANTAGES STARTING -->

<div class="container-fluid mt-3">
    <div class="row justify-content-between">
        <!-- <img src="{{ asset('images/product/design_left.png')}}" alt="" class="img-fluid col-lg-4 col-md-5"
                style="height: 70% !important;"> -->
        <div class="col-lg-5 col-md-8">
            <div class="row">
                <div class="col-md-8 col-9 display-6 pe-5 pt-2 pb-2 d-flex justify-content-end text-dark fw-bold"
                    style="background-color: rgb(254,205,1); border-top-right-radius: 25px !important;border-bottom-right-radius: 25px !important;">
                    ADVANTAGES
                </div>
            </div>
            <div class="row justify-content-end mt-3">
                <ul class="col-11 fs-4 fw-bold">
                    <li class="mt-3">Single appointment</li>
                    <li class="mt-3">No impression and model pouring</li>
                    <li class="mt-3">Precise and no laboratory errors involved</li>
                    <li class="mt-3">Universal bands decreases inventory</li>
                    <li class="mt-3">Cost effective</li>
                    <li class="mt-3">Very useful in sedation cases</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('images/product/advantages.png')}}" alt="" class="img-fluid col-lg-6 col-xl-5 col-md-8">
    </div>
</div>

<!-- ADVANTAGES ENDING -->

<!-- FEATURES STARTING -->

<div class="container-fluid">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <img src="{{ asset('images/product/features.jpg')}}" alt=""
                        class="img-fluid container-fluid col-lg-8 col-md-12">
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <img src="{{ asset('images/product/loops.png')}}" alt=""
                        class="img-fluid container-fluid col-lg-8 col-md-12 mb-4">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                class="bi bi-arrow-left-circle-fill text-warning" viewBox="0 0 16 16">
                <path
                    d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
            </svg>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                class="bi bi-arrow-right-circle-fill text-warning" viewBox="0 0 16 16">
                <path
                    d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
            </svg>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>

<!-- FEATURES ENDING -->

<!-- E-MAINTER STARTING -->

<div class="fs-3 fw-bold text-center mt-4">
    e-SPACE MAINTAINER KIT
</div>

<div class="container mt-4">
    <div class="row justify-content-md-between justify-content-center">
        <img src="{{ asset('images/product/e_kit_1.png')}}" alt="" class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
        <img src="{{ asset('images/product/e_kit_2.png')}}" alt="" class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
        <img src="{{ asset('images/product/e_kit_3.png')}}" alt="" class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
    </div>
</div>

<!-- E-MAINTER ENDING -->

<!-- HOW IT IS USE STARTING -->

<div class="fs-3 fw-bold text-center mt-4">
    HOW IS IT USED?
</div>
<div class="container-fluid mt-3">
    <div class="row">
        <img src="{{ asset('images/product/how_it_is_use.png')}}" alt="" class="img-fluid container-fluid col-11">
    </div>
</div>

<!-- HOW IT IS USE ENDING -->

<!-- TESTIMONIALS STARTING -->

<div class="display-5 fw-bold text-center mt-5">
    TESTIMONIALS
</div>
<div class="container mt-3">

    <div id="carouselExampleControls" class="carousel slide d-lg-block d-none" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <img src="{{ asset('images/product/testimonial_1.png')}}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
                    <img src="{{asset('images/product/testimonial_2.png')}}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <img src="{{asset('images/product/testimonial_3.png')}}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
                    <img src="{{asset('images/product/testimonial_4.png')}}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <img src="{{asset('images/product/testimonial_5.png')}}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
                    <img src="{{asset('images/product/testimonial_6.png')}}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <img src="{{asset('images/product/testimonial_7.png')}}" alt=""
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
                    <img src="{{ asset('images/product/testimonial_1.png')}}" alt=""
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
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <img src="{{ asset('images/product/testimonial_4.png')}}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-sm-8 col-8 mt-3">
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <img src="{{asset('images/product/testimonial_5.png')}}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-sm-8 col-8 mt-3">
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <img src="{{asset('images/product/testimonial_6.png')}}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-sm-8 col-8 mt-3">
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <img src="{{asset('images/product/testimonial_7.png')}}" alt=""
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

    <!-- <div class="row">
        <img src="{{ asset('images/product/testimonial_1.png')}}" alt=""
            class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
        <img src="{{ asset('images/product/testimonial_2.png')}}" alt=""
            class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
        <img src="{{ asset('images/product/testimonial_3.png')}}" alt=""
            class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
    </div> -->

</div>

<!-- TESTIMONIALS ENDING -->

<!-- TESTIMONIALS STARTING -->

<div class="display-5 fw-bold text-center mt-5">
    FAQ
</div>
<div class="display-6 mt-1 fw-bold text-center">
    Common Queries
</div>



<div class="container-fluid mt-3 mb-5 d-none d-md-block">

    <div class="row justify-content-evenly">

        <div class="col-md-5 col-11">
            <div class="row">
                <!-- 1 -->
                <div class="p-2 fw-bold fs-md-5 mt-5 col-12 h-100">
                    <div class="row justify-content-center">
                        <div class="col-11 fw-bold">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne"
                                            style="background-color: rgb(254,205,1); list-style: none !important;">
                                            What do you mean by universal band ?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            – Bands are universal in their shape and can easily be adapted to fit upper
                                            and
                                            lower molars.. There is no right and left side band.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- 3 -->
                <div class="p-2 fw-bold fs-md-5 mt-5 col-12 h-100">
                    <div class="row justify-content-center">
                        <div class="col-11 fw-bold ">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree"
                                            style="background-color: rgb(254,205,1); list-style: none !important;">
                                            How to select the correct size of band?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            -Size 24 to 29.5 fits in primary first molars, size 30 to 35.5 fits in
                                            second
                                            primary molars and size 36-42 fits in young permanent molar. Select a band
                                            by
                                            trial and error method if band is loosely fitting select a smaller size and
                                            if
                                            the band is having lot of resistance to slide circumferentially below middle
                                            one
                                            third of tooth select a bigger size of band.
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 5 -->
                <div class="p-2 fw-bold fs-md-5 mt-5 col-12 h-100">
                    <div class="row justify-content-center">
                        <div class="col-11 fw-bold ">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingFive">
                                        <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                            aria-expanded="false" aria-controls="flush-collapseFive"
                                            style="background-color: rgb(254,205,1); list-style: none !important;">
                                            When to use curved and straight loop?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            -Straight loop should be reserved for cases when space loss does not permit
                                            use
                                            of the curved loop without trimming the tubes. Straight loops have a greater
                                            incidence of slipped contact and gingival impingement (resulting in possible
                                            space loss) if a child bites on hard foods or objects. The curved loop is
                                            the
                                            loop of choice for most cases. It’s design prevents the loop from slipping
                                            below
                                            the contact and impinging on the gingival tissue. The curved loop will
                                            better
                                            engage the surface of the adjacent tooth, particularly if the tooth it is
                                            contacting is only partially erupted.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-5 col-11">
            <div class="row">
                <!-- 2 -->
                <div class="p-2 fw-bold fs-md-5 mt-5 col-12 h-100">
                    <div class="row justify-content-center">
                        <div class="col-11 fw-bold ">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo"
                                            style="background-color: rgb(254,205,1); list-style: none !important;">
                                            When to use a distal shoe component?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            – In the case where the first permanent molar has not erupted yet, and a
                                            second
                                            primary molar is removed, a distal shoe can be placed subgingivally to guide
                                            the
                                            eruption of the permanent molar. Radiographic imaging is required to confirm
                                            proper placement of the blade of the spacer adjacent to the mesial surface
                                            of
                                            the unerupted permanent molar. Ideally, the blade should contour and make
                                            contact with the mesial surface of the permanent molar. It is acceptable to
                                            place the blade in the most distal aspect of the distal root socket of the
                                            extracted tooth, if necessary.
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 4 -->
                <div class="p-2 fw-bold fs-md-5 mt-5 col-12 h-100">
                    <div class="row justify-content-center">
                        <div class="col-11 fw-bold ">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                            aria-expanded="false" aria-controls="flush-collapseFour"
                                            style="background-color: rgb(254,205,1); list-style: none !important;">
                                            How to use a e-cutter?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            -Slide the wire in the groove of the cutter and the length of wire you want
                                            to
                                            cut extend it beyond the centre of groove and cut it.
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 6 -->
                <div class="p-2 fw-bold fs-md-5 mt-5 col-12 h-100">
                    <div class="row justify-content-center">
                        <div class="col-11 fw-bold">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingSix">
                                        <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                                            aria-expanded="false" aria-controls="flush-collapseSix"
                                            style="background-color: rgb(254,205,1); list-style: none !important;">
                                            How to use e-crimper?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            -Once you have a proper fit, crimp the tubes of the space maintainer before
                                            removing from the mouth, to firmly secure the wire loop, ensuring the wire
                                            is
                                            locked into place. After removing from the mouth, make additional
                                            circumferential crimps on both tubes to ensure the wire is well secured and
                                            no
                                            sharp edges exist.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>




<div class="container-fluid mt-3 mb-5 d-block d-md-none">
    <div class="row justify-content-evenly">
        <!-- 1 -->
        <div class="col-md-5 p-2 fw-bold fs-md-5 mt-5 col-11 h-100">
            <div class="row justify-content-center">
                <div class="col-11 fw-bold">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne"
                                    style="background-color: rgb(254,205,1); list-style: none !important;">
                                    What do you mean by universal band ?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    – Bands are universal in their shape and can easily be adapted to fit upper and
                                    lower molars.. There is no right and left side band.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- 2 -->
        <div class="col-md-5 p-2 fw-bold fs-md-5 mt-5 col-11 h-100">
            <div class="row justify-content-center">
                <div class="col-11 fw-bold">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo"
                                    style="background-color: rgb(254,205,1); list-style: none !important;">
                                    When to use a distal shoe component?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    – In the case where the first permanent molar has not erupted yet, and a second
                                    primary molar is removed, a distal shoe can be placed subgingivally to guide the
                                    eruption of the permanent molar. Radiographic imaging is required to confirm
                                    proper placement of the blade of the spacer adjacent to the mesial surface of
                                    the unerupted permanent molar. Ideally, the blade should contour and make
                                    contact with the mesial surface of the permanent molar. It is acceptable to
                                    place the blade in the most distal aspect of the distal root socket of the
                                    extracted tooth, if necessary.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 3 -->
        <div class="col-md-5 p-2 fw-bold fs-md-5 mt-5 col-11 h-100">
            <div class="row justify-content-center">
                <div class="col-11 fw-bold">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                    aria-expanded="false" aria-controls="flush-collapseThree"
                                    style="background-color: rgb(254,205,1); list-style: none !important;">
                                    How to select the correct size of band?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    -Size 24 to 29.5 fits in primary first molars, size 30 to 35.5 fits in second
                                    primary molars and size 36-42 fits in young permanent molar. Select a band by
                                    trial and error method if band is loosely fitting select a smaller size and if
                                    the band is having lot of resistance to slide circumferentially below middle one
                                    third of tooth select a bigger size of band.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 4 -->
        <div class="col-md-5 p-2 fw-bold fs-md-5 mt-5 col-11 h-100">
            <div class="row justify-content-center">
                <div class="col-11 fw-bold">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour"
                                    style="background-color: rgb(254,205,1); list-style: none !important;">
                                    How to use a e-cutter?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    -Slide the wire in the groove of the cutter and the length of wire you want to
                                    cut extend it beyond the centre of groove and cut it.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 5 -->
        <div class="col-md-5 p-2 fw-bold fs-md-5 mt-5 col-11 h-100">
            <div class="row justify-content-center">
                <div class="col-11 fw-bold">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive"
                                    style="background-color: rgb(254,205,1); list-style: none !important;">
                                    When to use curved and straight loop?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    -Straight loop should be reserved for cases when space loss does not permit use
                                    of the curved loop without trimming the tubes. Straight loops have a greater
                                    incidence of slipped contact and gingival impingement (resulting in possible
                                    space loss) if a child bites on hard foods or objects. The curved loop is the
                                    loop of choice for most cases. It’s design prevents the loop from slipping below
                                    the contact and impinging on the gingival tissue. The curved loop will better
                                    engage the surface of the adjacent tooth, particularly if the tooth it is
                                    contacting is only partially erupted.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 6 -->
        <div class="col-md-5 p-2 fw-bold fs-md-5 mt-5 col-11 h-100">
            <div class="row justify-content-center">
                <div class="col-11 fw-bold">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix"
                                    style="background-color: rgb(254,205,1); list-style: none !important;">
                                    How to use e-crimper?
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    -Once you have a proper fit, crimp the tubes of the space maintainer before
                                    removing from the mouth, to firmly secure the wire loop, ensuring the wire is
                                    locked into place. After removing from the mouth, make additional
                                    circumferential crimps on both tubes to ensure the wire is well secured and no
                                    sharp edges exist.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection