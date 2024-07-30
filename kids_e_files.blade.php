@extends('layouts.main')
@section('content')

<!-- Body starting -->
<div class="container-fluid" style="background-color: black;">
    <div class="row">
        <video class="col-12 banner" autoplay="" loop="" muted="" playsinline="" preload="yes"
            poster="https://www.kidsedental.com/wp-content/themes/kidsedental/images/bioflex/vidthumb.png">
            <source src="{{ asset('images/kids_e_files/banner.mp4') }}" type="video/mp4">
        </video>
        <!-- style="height: 550px !important;" -->
        <style>
            @media screen and (min-width: 1200px) {
                .banner {
                    height: 813.5px !important;
                }
            }
        </style>
    </div>
</div>

<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-11 col-md-12">
            <div class="row justify-content-center">
                <img src="{{ asset('images/kids_e_files/logo.png') }}" alt="" class="col-md-3 col-10 img-fluid">
            </div>
            <!-- <div class="row justify-content-center mt-4">
                <div class="col-md-11 fs-1 text-center">
                    Kids-e-files are advanced heat-treated rainbow rotary files used for effective and efficient root
                    canal preparation for primary teeth. The rainbow file is designed for debris removal, cutting
                    efficiency, and safety.
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-md-11 fs-1 text-center">
                    Innovative heat treatment and surface therapy of premium quality nickel-titanium alloy results in
                    high flexibility and durability at the same time.
                </div>
            </div> -->

            <div class="row justify-content-center mt-4">
                <div class="col-md-11 custom-font-size text-center">
                    Kids-e-files are advanced heat-treated rainbow rotary files used for effective and efficient root
                    canal preparation for primary teeth. The rainbow file is designed for debris removal, cutting
                    efficiency, and safety.
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-md-11 custom-font-size text-center">
                    Innovative heat treatment and surface therapy of premium quality nickel-titanium alloy results in
                    high flexibility and durability at the same time.
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
                        font-size: 1.75rem;
                        /* Font size for large devices */
                    }
                }

                @media (min-width: 1200px) {
                    .custom-font-size {
                        font-size: 2rem;
                        /* Font size for extra large devices */
                    }
                }

                @media (min-width: 1400px) {
                    .custom-font-size {
                        font-size: 2.25rem;
                        /* Font size for extra extra large devices */
                    }
                }
            </style>


            <!-- Kids e files Starting -->

            <div class="row justify-content-center mt-3">
                <img src="{{ asset('images/kids_e_files/files.png') }}" alt="" class="img-fluid col-12 col-md-6">
            </div>

            <!-- Kids e files Ending -->

            <!-- Features Starting -->

            <!-- Features Header -->
            <div class="row justify-content-center mt-3">
                <img src="{{ asset('images/kids_e_files/features_header.jpg') }}" alt=""
                    class="img-fluid col-12 col-md-9">
            </div>

            <!-- Features Body -->
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="row justify-content-center align-items-center">
                        <ul class="col-xl-6 col-lg-5 fs-4 order-2 order-lg-1">
                            <li class="mt-3">
                                Rainbow surface treatment results in reduced crack
                                propagation tendency thus improving resistance to
                                cyclic fatigue.
                            </li>
                            <li class="mt-3">
                                It has a triangular-shaped cross section. This results
                                in very high flexibility. The files can easily negotiate
                                and prepare curved root canals.
                            </li>
                            <li class="mt-3">
                                The innovative design results in the transportation of
                                debris up the canal and decreases preparation time.
                            </li>
                            <li class="mt-3">
                                It has inactive tip design that allows safe
                                preparation, minimizing the risk of perforations and
                                zipping.
                            </li>
                            <li class="mt-3">
                                Variable pitch design over the length results in
                                better mechanical resistance, and reduce the risk of
                                tip fracture.
                            </li>
                        </ul>
                        <img src="{{ asset('images/kids_e_files/features.png') }}" alt=""
                            class="img-fluid col-xl-4 col-lg-7 order-1 order-lg-2">
                    </div>
                </div>
            </div>

            <!-- Features Ending -->

            <!-- Rainbow Starting -->

            <div class="display-4 mt-5 fw-bold text-center" style="color: #FFCC00 !important;">Rainbow Surface
                Technology</div>

            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="row justify-content-lg-evenly justify-content-end align-items-center">
                        <ul class="col-xl-6 col-lg-5 fs-4">
                            <li class="mt-3">
                                It is a three-stage heat treatment, first treating the
                                darkest blue area, when the temperature will be
                                high. Then it deals with its gold areas, and finally, it
                                deals with other areas such as purple, orange, and so
                                on.
                            </li>
                            <li class="mt-3">
                                The whole file is divided into three sections and its
                                heat treatment is completed in different periods of
                                time.
                            </li>
                            <li class="mt-3">
                                The temperature of the tip treatment is the highest
                                and it means that this area of the tip 3 mm is the
                                riskiest and most prone to instrument separation
                                becoming safer.
                            </li>
                            <li class="mt-3">
                                Therefore, the rainbow file is designed with both
                                cutting force and safety.
                            </li>
                        </ul>
                        <img src="{{ asset('images/kids_e_files/rainbow_surface_technology.png') }}" alt=""
                            class="img-fluid col-xl-4 col-lg-7 col-8">
                    </div>
                </div>
            </div>

            <!-- Rainbow Ending -->

        </div>
    </div>
</div>

<!-- How To Use Starting -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11 col-md-10">
            <div class="row justify-content-center">
                <div class="display-4 text-center fw-bold mt-5">How to use</div>
                <div class="row justify-content-center">
                    <img src="{{ asset('images/kids_e_files/how_to_use_rotary.png') }}" alt=""
                        class="img-fluid col-12 col-md-7">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- How To Use Ending -->

<!-- Testimonials Starting -->
<div class="display-5 fw-bold text-center mt-5">
    TESTIMONIALS
</div>





<div class="container-fluid">

    <div id="carouselExampleControls" class="carousel slide d-lg-block d-none" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <img src="{{ asset('images/kids_e_files/testimonial_1.png') }}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
                    <img src="{{ asset('images/kids_e_files/testimonial_2.png') }}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
                </div>
            </div>
            <!-- <div class="carousel-item">
                <div class="row justify-content-center">
                    <img src="{{asset('images/product/testimonial_3.png')}}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-11 mt-3">

                </div>
            </div> -->
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
                    <img src="{{ asset('images/kids_e_files/testimonial_1.png') }}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-sm-8 col-8 mt-3">
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <img src="{{ asset('images/kids_e_files/testimonial_2.png') }}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-sm-8 col-8 mt-3">
                </div>
            </div>
            <!-- <div class="carousel-item">
                <div class="row justify-content-center">
                    <img src="{{asset('images/product/testimonial_3.png')}}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-sm-8 col-8 mt-3">
                </div>
            </div> -->
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

    <!-- <div class="row justify-content-center">
        <div class="col-11">
            <div class="row justify-content-center">
                <img src="{{ asset('images/kids_e_files/testimonial_1.png') }}" alt=""
                    class="img-fluid col-lg-5 col-md-6 col-11 mt-5">
                <img src="{{ asset('images/kids_e_files/testimonial_2.png') }}" alt=""
                    class="img-fluid col-lg-5 col-md-6 col-11 mt-5">
            </div>
        </div>
    </div> -->

</div>
<!-- Testimonials Ending -->

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
                                            -Kids-e-Files is a premixed bioactive bioceramic endodontic sealer
                                            consisting of an
                                            extremely fine, inorganic powder of tricalcium/dicalcium silicate. The
                                            product is
                                            packaged ready-to-use.
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
                                            What are the Precautions for Handling?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            – e-MTA putty is ready to use MTA cement which has all indications of MTA
                                            cement
                                            like apexification, pulp capping, pulpotomy, furcation repair and root
                                            resorption
                                            repair. Whereas Kids-e-Files is a root canal sealer with flowable
                                            consistency used
                                            along with Gutta purcha points in endodontic treatment of permanent teeth.
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
                                            What are the side effects of use of e-SDF?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            -NO. Moisture is required for setting of the sealer, supplied by the
                                            dentinal
                                            tubules and apical tissues. Clean & shape the canals and remove the smear
                                            layer.
                                            Remove pooled irrigants or excessive moisture from surrounding tissues with
                                            absorbent points.
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
                                            When one should use e-SDF?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            -Working time is 30-40 minutes. Setting starts as soon as the material gets
                                            moisture. Setting time is 9-11 hours.
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
                                            How deep does it Penetrate?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            Use conventional instrumentation, including hand/rotary files and ultrasonic
                                            instrument tips, to remove the sealer if it was placed with one or more
                                            gutta percha
                                            points.
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
                                            -Keep the syringe in the aluminum pouch in cool dry place. Do not
                                            refrigerate.
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
                                            How should you store e-SDF?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSeven" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            -Kids-e-Files releases calcium and hydroxide ions from the MTA, promoting
                                            hydroxyapatite (HA) formation on the MTA surfaces to enhance sealing and
                                            support
                                            healing. It resin-free for maximum bioactivity. Zirconium oxide as a
                                            radio-opacifier
                                            makes it bioactive and non-staining.
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
                                    -Kids-e-Files is a premixed bioactive bioceramic endodontic sealer consisting of an
                                    extremely fine, inorganic powder of tricalcium/dicalcium silicate. The product is
                                    packaged ready-to-use.
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
                                    When one should use e-SDF?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    -Working time is 30-40 minutes. Setting starts as soon as the material gets
                                    moisture. Setting time is 9-11 hours.
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
                                    What are the Precautions for Handling?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    – e-MTA putty is ready to use MTA cement which has all indications of MTA cement
                                    like apexification, pulp capping, pulpotomy, furcation repair and root resorption
                                    repair. Whereas Kids-e-Files is a root canal sealer with flowable consistency used
                                    along with Gutta purcha points in endodontic treatment of permanent teeth.
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
                                    How deep does it Penetrate?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Use conventional instrumentation, including hand/rotary files and ultrasonic
                                    instrument tips, to remove the sealer if it was placed with one or more gutta percha
                                    points.
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
                                    What are the side effects of use of e-SDF?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    -NO. Moisture is required for setting of the sealer, supplied by the dentinal
                                    tubules and apical tissues. Clean & shape the canals and remove the smear layer.
                                    Remove pooled irrigants or excessive moisture from surrounding tissues with
                                    absorbent points.
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
                                    -Keep the syringe in the aluminum pouch in cool dry place. Do not refrigerate.
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
                                    How should you store e-SDF?
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    -Kids-e-Files releases calcium and hydroxide ions from the MTA, promoting
                                    hydroxyapatite (HA) formation on the MTA surfaces to enhance sealing and support
                                    healing. It resin-free for maximum bioactivity. Zirconium oxide as a radio-opacifier
                                    makes it bioactive and non-staining.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



<!-- Faq Ending -->

@endsection