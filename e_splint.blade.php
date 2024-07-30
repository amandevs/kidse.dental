@extends('layouts.main')
@section('content')


<!-- Body starting -->

<!-- Banner Starting -->

<img src="{{ asset('images/e_mta_images/e_mta_banner.png')}}" class="img-fluid">

<!-- Banner Ending -->

<div class="container-fluid mt-2">
    <div class="row justify-content-center">
        <img src="{{ asset('images/e_splint/logo.png')}}" alt=""
            class="img-fluid col-lg-2 col-md-4 col-sm-5 col-8 pt-3 ps-3 pe-3">
    </div>
    <div class="fs-4 text-center fw-bold">Fiber Reinforced Esthetic Splint
    </div>
</div>

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="row">
                <div class="col-12 text-center fs-4">
                    e-splint is esthetic fiber material. Medical grade polyethylene fibers are weaved into tight
                    structural threads.
                </div>
            </div>
        </div>

    </div>
</div>
<img src="{{ asset('images/e_splint/e_splint_mid_01.jpg')}}" alt="" class="img-fluid w-100 mt-2">
<!-- Indication -->
<div class="text-center display-3 mt-5" style="font-weight: 900 !important;">
    INDICATION
</div>
<div class="container-fluid">
    <div class="row align-items-center justify-content-evenly">

        <div class="col-lg-6 mt-4 mt-4">
            <ul class="fs-4 fw-normal">
                <!-- <li class="mt-2">Periodontal splinting for mobile teeth</li>
                <li class="mt-2">Stabilization of teeth after trauma.</li>
                <li class="mt-2">Provisional bridges</li>
                <li class="mt-2">Endodontic post and core</li>
                <li class="mt-2">Esthetic space maintainer for primary teeth</li>
                <li class="mt-2">Reinforcement of large restorations</li> -->

                <style>
                    ul {
                        list-style-type: none;
                        /* Remove default list styling */
                        padding-left: 0;
                        /* Remove default padding */
                    }

                    li {
                        display: flex;
                        /* Use flexbox to align items */
                        align-items: flex-start;
                        /* Align items to the top */
                        margin-bottom: 10px;
                        /* Space between list items */
                    }

                    span {
                        margin-right: 10px;
                        /* Space between icon and text */
                        display: flex;
                        /* Ensure span is a flex container */
                        align-items: flex-start;
                        /* Align icon to the top of the span */
                    }

                    .bi-dot {
                        flex-shrink: 0;
                        /* Prevent the icon from shrinking */
                    }
                </style>
                <ul>
                    <li>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                            </svg>
                        </span>
                        Periodontal splinting for mobile teeth.
                    </li>
                    <li>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                            </svg>
                        </span>
                        Stabilization of teeth after trauma.
                    </li>
                    <li>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                            </svg>
                        </span>
                        Provisional bridges.
                    </li>
                    <li>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                            </svg>
                        </span>
                        Endodontic post and core.
                    </li>
                    <li>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                            </svg>
                        </span>
                        Esthetic space maintainer for primary teeth.
                    </li>
                    <li>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                            </svg>
                        </span>
                        Reinforcement of large restorations.
                    </li>
                </ul>
            </ul>
        </div>
        <img src="{{ asset('images/e_splint/splint_case_05.jpg')}}" alt=""
            class="img-fluid col-lg-4 col-md-6 col-sm-7 col-10 mt-4">

    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="row justify-content-center">
                <img src="{{ asset('images/e_splint/features_of_e_splint.jpg')}}" alt=""
                    class="img-fluid col-12 col-md-9">
            </div>
        </div>
    </div>
</div>
<!-- <div class="container-fluid mb-4">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="row">
                <img src="{{ asset('images/e_splint/instruction_ifu_hou_e_splint.jpg')}}" alt="" class="img-fluid col-12">
            </div>
        </div>
    </div>
</div> -->
<div class="container-fluid mt-3">
    <div class="row justify-content-center">
        <img src="{{ asset('images/e_splint/instruction/header.jpg')}}" alt=""
            class="img-fluid col-lg-5 col-md-8 col-10">
    </div>
</div>
<div class="container-fluid mb-5 d-none d-lg-block">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="row">
                <img src="{{ asset('images/e_splint/instruction/step_1.jpg')}}" alt=""
                    class="img-fluid col-lg-3 col-md-4 col-6 mt-4">
                <img src="{{ asset('images/e_splint/instruction/step_2.jpg')}}" alt=""
                    class="img-fluid col-lg-3 col-md-4 col-6 mt-4">
                <img src="{{ asset('images/e_splint/instruction/step_3.jpg')}}" alt=""
                    class="img-fluid col-lg-3 col-md-4 col-6 mt-4">
                <img src="{{ asset('images/e_splint/instruction/step_4.jpg')}}" alt=""
                    class="img-fluid col-lg-3 col-md-4 col-6 mt-4">
                <img src="{{ asset('images/e_splint/instruction/step_5.jpg')}}" alt=""
                    class="img-fluid col-lg-3 col-md-4 col-6 mt-4">
                <img src="{{ asset('images/e_splint/instruction/step_6.jpg')}}" alt=""
                    class="img-fluid col-lg-3 col-md-4 col-6 mt-4">
                <img src="{{ asset('images/e_splint/instruction/step_7.jpg')}}" alt=""
                    class="img-fluid col-lg-3 col-md-4 col-6 mt-4">
                <img src="{{ asset('images/e_splint/instruction/step_8.jpg')}}" alt=""
                    class="img-fluid col-lg-3 col-md-4 col-6 mt-4">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-1 d-block d-lg-none mb-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div id="carouselExampleFadeSmall" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/e_splint/instruction/step_1.jpg')}}" alt=""
                                class="img-fluid col-lg-3 col-md-4 col-8 mt-4">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/e_splint/instruction/step_2.jpg')}}" alt=""
                                class="img-fluid col-lg-3 col-md-4 col-8 mt-4">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/e_splint/instruction/step_3.jpg')}}" alt=""
                                class="img-fluid col-lg-3 col-md-4 col-8 mt-4">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/e_splint/instruction/step_4.jpg')}}" alt=""
                                class="img-fluid col-lg-3 col-md-4 col-8 mt-4">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/e_splint/instruction/step_5.jpg')}}" alt=""
                                class="img-fluid col-lg-3 col-md-4 col-8 mt-4">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/e_splint/instruction/step_6.jpg')}}" alt=""
                                class="img-fluid col-lg-3 col-md-4 col-8 mt-4">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/e_splint/instruction/step_7.jpg')}}" alt=""
                                class="img-fluid col-lg-3 col-md-4 col-8 mt-4">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/e_splint/instruction/step_8.jpg')}}" alt=""
                                class="img-fluid col-lg-3 col-md-4 col-8 mt-4">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFadeSmall"
                    data-bs-slide="prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                        class="bi bi-arrow-left-circle-fill text-warning" viewBox="0 0 16 16">
                        <path
                            d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                    </svg>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFadeSmall"
                    data-bs-slide="next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                        class="bi bi-arrow-right-circle-fill text-warning" viewBox="0 0 16 16">
                        <path
                            d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                    </svg>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

@endsection