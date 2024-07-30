@extends('layouts.main')
@section('content')


<!-- Banner Starting -->

<img src="{{ asset('images/e_sdf_images/web_banners_01.jpg')}}" alt="" class="img-fluid">

<!-- Banner Ending -->

<!-- e Sdf Starting -->

<!-- Logo -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <img src="{{ asset('images/e_sdf_images/logo.png')}}" alt=""
            class="img-fluid col-lg-2 col-md-4 col-sm-5 col-8 pt-3 ps-3 pe-3">
    </div>
    <div class="row justify-content-center mt-2 fw-bold fs-3">
        <div class="col text-center">
            38% Silver Diamine Fluoride
        </div>
    </div>
</div>
<div class="container mt-1">
    <div class="row justify-content-center">

        <style>
            /* Inline custom CSS if not using a separate file */
            .custom-font-size {
                font-size: 1rem;
                /* Default font size */
            }

            @media (min-width: 576px) {
                .custom-font-size {
                    font-size: 1.25rem;
                }
            }

            @media (min-width: 768px) {
                .custom-font-size {
                    font-size: 1.5rem;
                }
            }

            @media (min-width: 992px) {
                .custom-font-size {
                    font-size: 1.75rem;
                }
            }

            @media (min-width: 1200px) {
                .custom-font-size {
                    font-size: 2rem;
                }
            }

            /* .custom-padding {
                padding: 5rem;
            } */
        </style>
        <div class="container mt-4">
            <div class="col-12 text-center custom-font-size custom-padding">
                e-SDF is an anti-microbial and re-mineralizing liquid clinically applied to control and arrest active
                dental caries and to stop hypersensitivity. It is a safe, painless alternative to traditional cavity
                drilling procedures with the power of silver and fluoride. Silver acts as an antimicrobial agent that
                simultaneously strengthens the dentin. Fluoride is the active ingredient that puts a stop to tooth decay
                by re-mineralizing and helps prevent dental caries.
            </div>
        </div>

        <style>
            .custom-font-size {
                font-size: 1rem;
                /* Default font size for extra small devices */
            }

            @media (min-width: 576px) {
                .custom-font-size {
                    font-size: 1.25rem;
                    /* Font size for small devices */
                }
            }

            @media (min-width: 768px) {
                .custom-font-size {
                    font-size: 1.5rem;
                    /* Font size for medium devices */
                }
            }

            @media (min-width: 992px) {
                .custom-font-size {
                    font-size: 1.25rem;
                    /* Font size for large devices */
                }
            }

            @media (min-width: 1200px) {
                .custom-font-size {
                    font-size: 1rem;
                    /* Font size for extra large devices */
                }
            }

            @media (min-width: 1400px) {
                .custom-font-size {
                    font-size: 1.1rem;
                    /* Font size for extra extra large devices */
                }
            }
        </style>



    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <img src="{{ asset('images/e_sdf_images/sdf_lower_banner_02.jpg')}}" alt="" class="img-fluid col-lg-9 col-12">
    </div>
</div>


<!-- e Sdf Ending -->

<!-- Features Starting -->

<div class="container-fluid">
    <div class="row justify-content-center">
        <img src="{{ asset('images/e_sdf_images/features_of_e_sdf.jpg')}}" alt="" class="img-fluid col-lg-8">
    </div>
</div>

<!-- Features Ending -->

<!-- Application Starting -->


<div class="container-fluid">
    <div class="row justify-content-center">
        <img src="{{ asset('images/e_sdf_images/application/application.png')}}" alt=""
            class="img-fluid col-md-8 col-11">
    </div>
</div>


<!-- Application Ending -->

<!-- Benefits Starting -->

<div class="text-center fw-bold fs-1 mt-5">
    Benefits
</div>
<img src="{{ asset('images/e_sdf_images/benefits.jpg')}}" alt="" class="img-fluid">

<!-- Benefits Ending -->

<!-- How is it Used Starting -->

<div class="text-center fw-bold display-5 mt-5">
    HOW IS IT USED?
</div>

<div class="container d-lg-block d-none">
    <div class="row p-lg-4 p-md-2 justify-content-evenly">
        <img src="{{ asset('images/e_sdf_images/steps/step_1.jpg')}}" alt=""
            class="img-fluid col-lg-3 me-2 mt-5 col-md-5 col-12">
        <img src="{{ asset('images/e_sdf_images/steps/step_2.jpg')}}" alt=""
            class="img-fluid col-lg-4 me-2 mt-5 col-md-6 col-12">
        <img src="{{ asset('images/e_sdf_images/steps/step_3.jpg')}}" alt=""
            class="img-fluid col-lg-3 me-2 mt-5 col-md-5 col-12">
        <img src="{{ asset('images/e_sdf_images/steps/step_4.jpg')}}" alt=""
            class="img-fluid col-lg-3 me-2 mt-5 col-md-5 col-12">
        <img src="{{ asset('images/e_sdf_images/steps/step_5.jpg')}}" alt=""
            class="img-fluid col-lg-3 me-2 mt-5 col-md-5 col-12">
        <img src="{{ asset('images/e_sdf_images/steps/step_6.jpg')}}" alt=""
            class="img-fluid col-lg-3 me-2 mt-5 col-md-5 col-12">
    </div>
</div>


<div class="container-fluid mt-5 d-block d-lg-none">
    <div class="row justify-content-center">
        <div class="col-12">
            <div id="carouselExampleFadeSmall" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/e_sdf_images/steps/step_1.jpg') }}" alt="Step 1"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/e_sdf_images/steps/step_2.jpg') }}" alt="Step 2"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/e_sdf_images/steps/step_3.jpg') }}" alt="Step 3"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/e_sdf_images/steps/step_4.jpg') }}" alt="Step 4"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/e_sdf_images/steps/step_5.jpg') }}" alt="Step 5"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/e_sdf_images/steps/step_6.jpg') }}" alt="Step 6"
                                class="img-fluid">
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


<!-- How is it Used Ending -->

<!-- TESTIMONIALS STARTING -->

<div class="display-5 fw-bold text-center mt-5">
    TESTIMONIALS
</div>
<div class="container mt-3">

    <div id="carouselExampleControls" class="carousel slide d-lg-block d-none" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <img src="{{ asset('images/e_sdf_images/testimonials/1.png')}}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
                    <img src="{{ asset('images/e_sdf_images/testimonials/2.png')}}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <img src="{{ asset('images/e_sdf_images/testimonials/3.png')}}" alt=""
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
                    <img src="{{ asset('images/e_sdf_images/testimonials/1.png')}}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-sm-8 col-8 mt-3">
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <img src="{{ asset('images/e_sdf_images/testimonials/2.png')}}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-sm-8 col-8 mt-3">
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <img src="{{ asset('images/e_sdf_images/testimonials/3.png')}}" alt=""
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
        <img src="{{ asset('images/e_sdf_images/testimonials/1.png')}}" alt=""
            class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
        <img src="{{ asset('images/e_sdf_images/testimonials/2.png')}}" alt=""
            class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
        <img src="{{ asset('images/e_sdf_images/testimonials/3.png')}}" alt=""
            class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
    </div> -->
</div>

<!-- TESTIMONIALS ENDING -->

<!-- Faq Starting -->

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
                                            What are the contra indications for use e-SDF?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            Do not use in patients with silver allergy, oral ulcerations or canker
                                            sores,
                                            advanced gum disease. These conditions can have painful reactions with the
                                            ammonia
                                            in SDF
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
                                            What are the side effects of use of e-SDF?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            The only common side effect is black staining around the area where SDF is
                                            applied.
                                            SDF can also stain surfaces that it comes into contact with when being
                                            applied, such
                                            as clothing or nearby tissues in the mouth.
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
                                            When one should use e-SDF?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            The following are the indications to use e-SDF:
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
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                        </svg>
                                                    </span>
                                                    Non-symptomatic carious lesion (Arresting and preventing caries).
                                                </li>
                                                <li>
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                        </svg>
                                                    </span>
                                                    Carious lesions that cannot be treated in 1 visit.
                                                </li>
                                                <li>
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                        </svg>
                                                    </span>
                                                    Root caries.
                                                </li>
                                                <li>
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                        </svg>
                                                    </span>
                                                    Tooth sensitivity.
                                                </li>
                                                <li>
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                        </svg>
                                                    </span>
                                                    Difficult to treat lesions.
                                                </li>
                                                <li>
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                        </svg>
                                                    </span>
                                                    Patients with special health care needs, severe dental phobia,
                                                    high-risk
                                                    conditions, and immune-compromised patients.
                                                </li>
                                                <li>
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                        </svg>
                                                    </span>
                                                    Patients without access to traditional dental care.
                                                </li>
                                                <li>
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                        </svg>
                                                    </span>
                                                    Patients not indicated for general anesthesia or oral sedation.
                                                </li>
                                            </ul>
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
                                            What are the Precautions for Handling?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            Use Gloves while Handling the Liquid.
                                            <div class="mt-3">It will stain skin, clothes, countertops, floors, and
                                                instruments
                                                brown or black. Refer to the following for stain removal:</div>
                                            <div class="mt-3">For skin: Wash immediately with water, soap, ammonia, or
                                                iodine
                                                tincture, and then rinse thoroughly with water. Do not use excessive
                                                methods in
                                                an attempt to remove difficult stains from the skin as the stains will
                                                eventually fade.</div>
                                            <div class="mt-3">For Clothing/Countertops/Floors/Instruments: use the same
                                                procedures as with stained skin. Difficult stains may be treated with
                                                sodium
                                                hypochlorite.</div>
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
                                            How should you store e-SDF?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                        </svg>
                                                    </span>
                                                    Store in the original packaging in a cool, dark place.
                                                </li>
                                                <li>
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                        </svg>
                                                    </span>
                                                    Replace cap immediately after use.
                                                </li>
                                                <li>
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                        </svg>
                                                    </span>
                                                    Use as soon as dispensed.
                                                </li>
                                            </ul>
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
                                            How much can you use?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
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
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                        </svg>
                                                    </span>
                                                    1drop/10kg per visit.
                                                </li>
                                                <li>
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                        </svg>
                                                    </span>
                                                    Re-apply at intervals of 3 to 6 months depending on the oral hygiene
                                                    of the
                                                    patient.
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-11">
            <div class="row justify-content-center">
                <!-- 7 -->
                <div class="col-md-6 p-2 fw-bold fs-md-5 mt-5 col-12 h-100">
                    <div class="row justify-content-center">
                        <div class="col-11 fw-bold">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingSeven">
                                        <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven"
                                            aria-expanded="false" aria-controls="flush-collapseSeven"
                                            style="background-color: rgb(254,205,1); list-style: none !important;">
                                            How much can you use?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSeven" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
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
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                        </svg>
                                                    </span>
                                                    25-30 microns into the enamel
                                                </li>
                                                <li>
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                        </svg>
                                                    </span>
                                                    200-300 microns into dentine
                                                </li>
                                                <li>
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                        </svg>
                                                    </span>
                                                    Upto 2mm into the deep lesion
                                                </li>
                                            </ul>
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
                                    What are the contra indications for use e-SDF?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Do not use in patients with silver allergy, oral ulcerations or canker sores,
                                    advanced gum disease. These conditions can have painful reactions with the ammonia
                                    in SDF
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
                                    What are the Precautions for Handling?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Use Gloves while Handling the Liquid.
                                    <div class="mt-3">It will stain skin, clothes, countertops, floors, and instruments
                                        brown or black. Refer to the following for stain removal:</div>
                                    <div class="mt-3">For skin: Wash immediately with water, soap, ammonia, or iodine
                                        tincture, and then rinse thoroughly with water. Do not use excessive methods in
                                        an attempt to remove difficult stains from the skin as the stains will
                                        eventually fade.</div>
                                    <div class="mt-3">For Clothing/Countertops/Floors/Instruments: use the same
                                        procedures as with stained skin. Difficult stains may be treated with sodium
                                        hypochlorite.</div>
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
                                    What are the side effects of use of e-SDF?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    The only common side effect is black staining around the area where SDF is applied.
                                    SDF can also stain surfaces that it comes into contact with when being applied, such
                                    as clothing or nearby tissues in the mouth.
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
                                    How should you store e-SDF?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                </svg>
                                            </span>
                                            Store in the original packaging in a cool, dark place.
                                        </li>
                                        <li>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                </svg>
                                            </span>
                                            Replace cap immediately after use.
                                        </li>
                                        <li>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                </svg>
                                            </span>
                                            Use as soon as dispensed.
                                        </li>
                                    </ul>
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
                                    When one should use e-SDF?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    The following are the indications to use e-SDF:
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                </svg>
                                            </span>
                                            Non-symptomatic carious lesion (Arresting and preventing caries).
                                        </li>
                                        <li>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                </svg>
                                            </span>
                                            Carious lesions that cannot be treated in 1 visit.
                                        </li>
                                        <li>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                </svg>
                                            </span>
                                            Root caries.
                                        </li>
                                        <li>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                </svg>
                                            </span>
                                            Tooth sensitivity.
                                        </li>
                                        <li>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                </svg>
                                            </span>
                                            Difficult to treat lesions.
                                        </li>
                                        <li>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                </svg>
                                            </span>
                                            Patients with special health care needs, severe dental phobia, high-risk
                                            conditions, and immune-compromised patients.
                                        </li>
                                        <li>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                </svg>
                                            </span>
                                            Patients without access to traditional dental care.
                                        </li>
                                        <li>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                </svg>
                                            </span>
                                            Patients not indicated for general anesthesia or oral sedation.
                                        </li>
                                    </ul>
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
                                    How much can you use?
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                </svg>
                                            </span>
                                            1drop/10kg per visit.
                                        </li>
                                        <li>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                </svg>
                                            </span>
                                            Re-apply at intervals of 3 to 6 months depending on the oral hygiene of the
                                            patient.
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 7 -->
        <div class="col-md-5 p-2 fw-bold fs-md-5 mt-5 col-11 h-100">
            <div class="row justify-content-center">
                <div class="col-11 fw-bold">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSeven">
                                <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven"
                                    aria-expanded="false" aria-controls="flush-collapseSeven"
                                    style="background-color: rgb(254,205,1); list-style: none !important;">
                                    How much can you use?
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                </svg>
                                            </span>
                                            25-30 microns into the enamel
                                        </li>
                                        <li>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                </svg>
                                            </span>
                                            200-300 microns into dentine
                                        </li>
                                        <li>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                                </svg>
                                            </span>
                                            Upto 2mm into the deep lesion
                                        </li>
                                    </ul>
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