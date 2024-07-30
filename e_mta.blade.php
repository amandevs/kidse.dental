@extends('layouts.main')
@section('content')

<!-- Body starting -->

<!-- Banner Starting -->

<img src="{{ asset('images/e_mta_images/e_mta_banner.png')}}" class="img-fluid">

<!-- Banner Ending -->

<!-- Miniral Trioxide  -->
<div class="container-fluid mt-2">
    <div class="row justify-content-center">
        <img src="{{ asset('images/e_mta_images/e_mta_logo.png')}}" alt=""
            class="img-fluid col-lg-3 col-md-4 col-sm-5 col-8 pt-3 ps-3 pe-3">
    </div>
    <div class="fs-4 text-center fw-bold">Mineral Trioxide Aggregate</div>
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-11">
            <div class="row align-items-start">
                <div class="col-xxl-5  mt-5 fs-4">
                    <!-- <div class="text-lg-start text-center">Mineral trioxide aggregate (e-MTA) is a</div>
                    <div class="text-lg-start text-center">bioactive cement made up of extremely</div>
                    <div class="text-lg-start text-center">small hydrophilic particles of several</div>
                    <div class="text-lg-start text-center">mineral oxides. It is better protection for</div>
                    <div class="text-lg-start text-center">vital pulp therapy which promotes</div>
                    <div class="text-lg-start text-center">precipitation of Calcium Phosphate and</div>
                    <div class="text-lg-start text-center">promotes dentinal bridging and forms an</div>
                    <div class="text-lg-start text-center">impeccable seal that promotes healing</div>
                    <div class="text-lg-start text-center">response. Because of the ultrafine-grained</div>
                    <div class="text-lg-start text-center"> powder, e-MTA has a smoother consistency</div>
                    <div class="text-lg-start text-center"> and is easier to apply.</div> -->
                    <style>
                        /* Inline custom CSS if not using a separate file */
                        .responsive-text {
                            font-size: 1rem;
                        }

                        @media (min-width: 576px) {
                            .responsive-text {
                                font-size: 1.25rem;
                            }
                        }

                        @media (min-width: 768px) {
                            .responsive-text {
                                font-size: 1.5rem;
                            }
                        }

                        @media (min-width: 992px) {
                            .responsive-text {
                                font-size: 1.75rem;
                            }
                        }

                        @media (min-width: 1200px) {
                            .responsive-text {
                                font-size: 2rem;
                            }
                        }

                        .text-lg-start {
                            text-align: left;
                        }

                        @media (min-width: 992px) {
                            .text-lg-start {
                                text-align: left;
                            }
                        }
                    </style>
                    <div class="container">
                        <div class="text-lg-start text-center responsive-text">Mineral trioxide aggregate (e-MTA) is
                            a</div>
                        <div class="text-lg-start text-center responsive-text">bioactive cement made up of extremely
                        </div>
                        <div class="text-lg-start text-center responsive-text">small hydrophilic particles of
                            several</div>
                        <div class="text-lg-start text-center responsive-text">mineral oxides. It is better
                            protection for</div>
                        <div class="text-lg-start text-center responsive-text">vital pulp therapy which promotes
                        </div>
                        <div class="text-lg-start text-center responsive-text">precipitation of Calcium Phosphate
                            and</div>
                        <div class="text-lg-start text-center responsive-text">promotes dentinal bridging and forms
                            an</div>
                        <div class="text-lg-start text-center responsive-text">impeccable seal that promotes healing
                        </div>
                        <div class="text-lg-start text-center responsive-text">response. Because of the
                            ultrafine-grained</div>
                        <div class="text-lg-start text-center responsive-text">powder, e-MTA has a smoother
                            consistency</div>
                        <div class="text-lg-start text-center responsive-text">and is easier to apply.</div>
                    </div>
                </div>
                <img src="{{ asset('images/e_mta_images/e_mta.png')}}" alt=""
                    class="img-fluid col-xxl-7 col-lg-8  mt-5">
            </div>
            <div class="row align-items-center">

                <!-- <div class="col-lg-5 text-lg-start">
                    <div class="text-center fw-bold fs-1">
                        INDICATION
                    </div>
                    <div class="text-center fw-bolder display-5">
                        Dental Procedure
                    </div>
                    <div class="row justify-content-center justify-content-sm-between">
                        <div class="col-sm-6 mt-4">
                            <div class="fw-bold fs-5">In Primary teeth:</div>
                            <ul class="fs-5">
                                <li>Pulp capping</li>
                                <li>Pulpotomy</li>
                                <li>Root canal filling</li>
                                <li>Furcation perforation repair</li>
                                <li>Resorption repair</li>
                            </ul>
                        </div>
                        <div class="col-sm-6 mt-4">
                            <div class="fw-bold fs-5">In Permanent teeth:</div>
                            <ul class="fs-5">
                                <li>Pulp capping</li>
                                <li>Partial pulpotomy</li>
                                <li>Perforation repair</li>
                                <li>Resorption repair</li>
                                <li>Repair of fracture</li>
                                <li>Root end filling</li>
                                <li>Regenerative endodontics</li>
                            </ul>
                        </div>
                    </div>
                </div> -->

                <!-- <img src="{{ asset('images/e_mta_images/indication_right.png')}}" alt=""
                    class="img-fluid col-lg-5 d-none d-lg-block"> -->

                <div class="col-12">
                    <div class="row justify-content-center">
                        <img src="{{ asset('images/e_mta_images/indication/indication.png')}}" alt=""
                            class="img-fluid col-lg-11 d-none d-lg-block mt-5">
                    </div>
                </div>
                <div class="col-12 d-block d-lg-none">
                    <div class="row mt-4">
                        <img src="{{ asset('images/e_mta_images/indication/header_sm.png')}}" alt=""
                            class="img-fluid col-lg-11">
                        <div class="col-12">
                            <div class="row justify-content-between">
                                <img src="{{ asset('images/e_mta_images/indication/indication_left.png')}}" alt=""
                                    class="img-fluid col-sm-5 col-10 mt-3">
                                <img src="{{ asset('images/e_mta_images/indication/indication_right.png')}}" alt=""
                                    class="img-fluid col-sm-5 col-11 mt-3">
                            </div>
                        </div>
                        <img src="{{ asset('images/e_mta_images/indication.png')}}" alt=""
                            class="img-fluid col-lg-11 mt-5">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <img src="{{ asset('images/e_mta_images/application/header.png')}}" alt=""
            class="img-fluid mt-2 col-md-3 col-sm-5 col-7">
    </div>
</div>


<img src="{{ asset('images/e_mta_images/application/application.jpg')}}" alt=""
    class="img-fluid mt-2 d-none d-md-block">
<img src="{{ asset('images/e_mta_images/application/application_sm.jpg')}}" alt=""
    class="img-fluid mt-2 d-block d-md-none">


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="row justify-content-center">
                <img src="{{ asset('images/e_mta_images/features_of_e_mta.jpg')}}" alt="" class="img-fluid col-lg-8">
            </div>
        </div>
    </div>
</div>

<div class="text-center display-6 fw-bold">
    HOW IS IT USED?
</div>
<!-- <div class="container fs-2 text-center mt-2 fw-bold" style="color: #ffcc00;">
    Schematic representation of e-MTA pulpotomy in primary & adult teeth
</div> -->
<style>
    /* Custom CSS if not using a separate file */
    .font-size-xs {
        font-size: 1rem;
        /* Default font size */
    }

    @media (min-width: 576px) {

        /* For small screens and up */
        .font-size-xs {
            font-size: 1.25rem;
        }
    }

    @media (min-width: 768px) {

        /* For medium screens and up */
        .font-size-xs {
            font-size: 1.5rem;
        }
    }

    @media (min-width: 992px) {

        /* For large screens and up */
        .font-size-xs {
            font-size: 2rem;
        }
    }

    @media (min-width: 1200px) {

        /* For extra-large screens and up */
        .font-size-xs {
            font-size: 2.5rem;
        }
    }
</style>
<div class="container text-center mt-2 fw-bold font-size-xs" style="color: #ffcc00;">
    Schematic representation of e-MTA pulpotomy in primary & adult teeth
</div>
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <img src="{{ asset('images/e_mta_images/e_mta_hou/header.jpg')}}" alt=""
            class="col-lg-6 col-md-8 col-10 img-fluid">
    </div>
    <div class="row justify-content-center mb-5 mt-3">
        <div class="col-11">
            <div class="row">
                <img src="{{ asset('images/e_mta_images/e_mta_hou/step_1.jpg')}}" alt="" class="col-lg-4 col-md-6 mt-3">
                <img src="{{ asset('images/e_mta_images/e_mta_hou/step_2.jpg')}}" alt="" class="col-lg-4 col-md-6 mt-3">
                <img src="{{ asset('images/e_mta_images/e_mta_hou/step_3.jpg')}}" alt="" class="col-lg-4 col-md-6 mt-3">
                <img src="{{ asset('images/e_mta_images/e_mta_hou/step_4.jpg')}}" alt="" class="col-lg-4 col-md-6 mt-3">
                <img src="{{ asset('images/e_mta_images/e_mta_hou/step_5.jpg')}}" alt="" class="col-lg-4 col-md-6 mt-3">
                <img src="{{ asset('images/e_mta_images/e_mta_hou/step_6.jpg')}}" alt="" class="col-lg-4 col-md-6 mt-3">
            </div>
        </div>

    </div>
</div>


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
                                            What is MTA?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            Mineral Trioxide Aggregate (MTA) is a bioactive cement used in a wide range
                                            of
                                            clinical applications. MTA is one of the most advanced materials of this
                                            century
                                            in
                                            the dentistry field. It is used for apexification, perforation repairs,
                                            apexogenesis, regenerative procedures, pulp capping, and pulpotomies.
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
                                            How do I mix e-MTA?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            On a glass slab or mixing pad, wet the powder by gently mixing the powder
                                            with
                                            liquid in ratio 3:1 with the help of a spatula until all the powder been
                                            hydrated
                                            and mix for approximately 30 seconds.
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
                                            Why two bottles of gel and liquid?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            Liquid is distilled water use to get sand mix Gel is used to get a putty mix
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
                                            How do I place e-MTA?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            Once the mixture is prepared, immediately load it in an e-MTA Carrier or
                                            other
                                            suitable alternative and place it at the operative site.
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
                                            What are the precautions for using e-MTA?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            The mixture should be applied immediately after preparing the mixture to
                                            avoid
                                            dehydration of the mixture.
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
                                            What are some advantages of e-MTA?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            Biocompatibility, Hydrophilic, Excellent sealing, and low solubility.
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
                                            What are all the instructions for the storage of e-MTA?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSeven" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Store in the original packaging in a dry place.</li>
                                                <li>Replace cap immediately after use</li>
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
                                    What is MTA?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Mineral Trioxide Aggregate (MTA) is a bioactive cement used in a wide range of
                                    clinical applications. MTA is one of the most advanced materials of this century
                                    in
                                    the dentistry field. It is used for apexification, perforation repairs,
                                    apexogenesis, regenerative procedures, pulp capping, and pulpotomies.
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
                                    How do I place e-MTA?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Once the mixture is prepared, immediately load it in an e-MTA Carrier or other
                                    suitable alternative and place it at the operative site.
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
                                    How do I mix e-MTA?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    On a glass slab or mixing pad, wet the powder by gently mixing the powder with
                                    liquid in ratio 3:1 with the help of a spatula until all the powder been
                                    hydrated
                                    and mix for approximately 30 seconds.
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
                                    What are the precautions for using e-MTA?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    The mixture should be applied immediately after preparing the mixture to avoid
                                    dehydration of the mixture.
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
                                    Why two bottles of gel and liquid?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Liquid is distilled water use to get sand mix Gel is used to get a putty mix
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
                                    What are some advantages of e-MTA?
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Biocompatibility, Hydrophilic, Excellent sealing, and low solubility.
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
                                    What are all the instructions for the storage of e-MTA?
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Store in the original packaging in a dry place.</li>
                                        <li>Replace cap immediately after use</li>
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