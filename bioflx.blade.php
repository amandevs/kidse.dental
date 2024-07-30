@extends('layouts.main')
@section('content')

<!-- Body starting -->
<div class="container-fluid" style="background-color: black;">
    <div class="row">
        <video class="col-12 slider" autoplay="" loop="" muted="" playsinline="" preload="yes"
            poster="https://www.kidsedental.com/wp-content/themes/kidsedental/images/bioflex/vidthumb.png">
            <source src="{{ asset('images/bioflx/bioflex_video.mp4')}}" type="video/mp4">
        </video>
        <style>
            @media screen and (min-width: 1px) and (max-width: 768px) {
                .slider {
                    height: 300px !important;
                }
            }

            @media screen and (min-width: 992px) and (max-width: 2000px) {
                .slider {
                    height: 750px !important;
                }
            }
        </style>
    </div>
</div>

<!-- Crown -->

<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-11 col-md-12">
            <div class="row justify-content-center">
                <img src="{{ asset('images/bioflx/logo.png')}}" alt="" class="col-md-3 col-10 img-fluid">
            </div>
            <div class="row justify-content-center">
                <!-- <div class="col-md-10 fs-1 text-center">
                    Bioflx Crowns are the world’s first flexible, durable, self-adaptable and esthetic pre-formed
                    pediatric
                    crowns which offer properties of both stainless steel crowns and zirconia crowns. Designed and
                    invented by a Pediatric dentist from India, offers a smart solution to do pediatric tooth colored
                    crowns.
                    They are ideal full coverage restoration and a dream crown of every pediatric dentist. They are the
                    next
                    generation of pediatric esthetic crowns.
                </div> -->
                <!-- <div class="col-12 col-md-10 text-center custom-text">
                    Bioflx Crowns are the world’s first flexible, durable, self-adaptable, and esthetic pre-formed
                    pediatric crowns which offer properties of both stainless steel crowns and zirconia crowns. Designed
                    and
                    invented by a pediatric dentist from India, Bioflx Crowns offer a smart solution for pediatric
                    tooth-colored crowns. They are an ideal full-coverage restoration and a dream crown for every
                    pediatric
                    dentist. Bioflx Crowns represent the next generation of pediatric esthetic crowns.
                </div> -->

                <style>
                    /* Custom responsive text sizes */
                    .custom-text {
                        font-size: 1.25rem;
                        /* Default size for small devices */
                    }

                    @media (min-width: 576px) {
                        .custom-text {
                            font-size: 1.5rem;
                            /* Size for small tablets */
                        }
                    }

                    @media (min-width: 768px) {
                        .custom-text {
                            font-size: 1.75rem;
                            /* Size for tablets */
                        }
                    }

                    @media (min-width: 992px) {
                        .custom-text {
                            font-size: 2rem;
                            /* Size for desktops */
                        }
                    }

                    @media (min-width: 1200px) {
                        .custom-text {
                            font-size: 2.25rem;
                            /* Size for large desktops */
                        }
                    }
                </style>

                <div class="container mt-4">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 text-center custom-text">
                            Bioflx Crowns are the world’s first flexible, durable, self-adaptable, and esthetic
                            pre-formed
                            pediatric crowns which offer properties of both stainless steel crowns and zirconia
                            crowns. Designed
                            and invented by a pediatric dentist from India, Bioflx Crowns offer a smart solution for
                            pediatric
                            tooth-colored crowns. They are an ideal full-coverage restoration and a dream crown for
                            every
                            pediatric dentist. Bioflx Crowns represent the next generation of pediatric esthetic
                            crowns.
                        </div>
                    </div>
                </div>
                <style>
                    @media (max-width: 575.98px) {
                        .custom-text {
                            font-size: 1.25rem;
                            /* Adjust size for extra-small devices */
                        }
                    }

                    @media (min-width: 576px) and (max-width: 767.98px) {
                        .custom-text {
                            font-size: 1.5rem;
                            /* Adjust size for small devices */
                        }
                    }

                    @media (min-width: 768px) and (max-width: 991.98px) {
                        .custom-text {
                            font-size: 1.75rem;
                            /* Adjust size for medium devices */
                        }
                    }

                    @media (min-width: 992px) {
                        .custom-text {
                            font-size: 2rem;
                            /* Adjust size for large devices */
                        }
                    }
                </style>
            </div>
        </div>
    </div>

</div>

<!-- ecrown slider Starting -->

<!-- ecrown slider Ending -->

<!-- CHARACTERISTICS Starting -->

<div class="display-4 mt-5 text-center fw-bold">FEATURES</div>
<!-- Flex Fit -->
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-11 col-md-12">
            <div class="row justify-content-center">
                <img src="{{ asset('images/bioflx/flexi_fit.jpg')}}" alt="" class="img-fluid col-xl-5 col-md-6">
                <img src="{{ asset('images/bioflx/flexi_fit_img.gif')}}" alt="" class="img-fluid col-xl-5 col-md-6">
            </div>
        </div>
    </div>
</div>
<!-- Esthetic -->
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-11 col-md-12">
            <div class="row justify-content-evenly align-items-center">
                <style>
                    /* 767 */
                    @media screen and (min-width: 767px) {
                        .esthetic-fam {
                            height: 260px !important;
                        }

                        .durable {
                            height: 455.31px !important;
                        }
                    }
                </style>
                <img src="{{ asset('images/bioflx/esthetic_fam.png')}}" alt=""
                    class="img-fluid col-xl-4 col-md-6 order-2 order-md-1 esthetic-fam">
                <img src="{{ asset('images/bioflx/esthetic.jpg')}}" alt=""
                    class="img-fluid col-xl-5 col-md-6 order-1 order-md-2">
            </div>
        </div>
    </div>
</div>
<!-- Durable -->
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-11 col-md-12">
            <div class="row justify-content-center align-items-center">
                <img src="{{ asset('images/bioflx/durable_text.jpg')}}" alt="" class="img-fluid col-xl-5 col-md-6">
                <img src="{{ asset('images/bioflx/durable.gif')}}" alt="" class="img-fluid col-xl-5 col-md-6 durable">
            </div>
        </div>
    </div>
</div>
<!-- Cementation -->
<div class="container-fluid mt-4">
    <div class="row justify-content-center align-items-center">
        <div class="col-11 col-md-12">
            <div class="row justify-content-center align-items-center">
                <img src="{{ asset('images/bioflx/cementation_diagram.png')}}" alt=""
                    class="img-fluid col-xl-4 col-md-6 order-2 order-md-1">
                <img src="{{ asset('images/bioflx/cementation.jpg')}}" alt=""
                    class="img-fluid col-xl-6 col-md-6  order-1 order-md-2">
            </div>
        </div>
    </div>
</div>

<!-- CHARACTERISTICS Ending -->

<!-- Bioflx Guide Starting -->

<div class="text-center fw-bold display-4 mt-4">
    BIOFLX CROWN
</div>
<div class="text-center fw-bold display-5 mt-2">
    Guide to buy
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-11 col-md-12">
            <div class="row justify-content-md-evenly justify-content-center align-items-center ">
                <img src="{{ asset('images/bioflx/Posterior Kit.png')}}" alt="" class="img-fluid col-md-5 mt-3">
                <img src="{{ asset('images/bioflx/bioflx Refill Mockup.png')}}" alt=""
                    class="img-fluid col-md-3 mt-3 pt-md-5 pb-md-3">
            </div>
        </div>
    </div>
</div>

<!-- Bioflx Guide Ending -->



<!-- Bioflx Crowwn Starting -->

<!-- Bioflx Crowwn Starting -->


<!-- TECHNIQUES Starting -->

<div class="display-4 mt-5 text-center fw-bold">HOW IS IT USED?</div>
<div class="display-6 mt-4 text-center fw-bold">ANTERIOR TECHNIQUE</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="row">
                <img src="{{ asset('images/bioflx/anterior_bioflx_ifu_for_website.png')}}" alt=""
                    class="img-fluid col-12">
            </div>
        </div>
    </div>
</div>
<!-- Posterior -->
<div class="display-6 mt-4 text-center fw-bold">POSTERIOR TECHNIQUE</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="row">
                <img src="{{ asset('images/bioflx/posterior_technique.png')}}" alt="" class="img-fluid col-12">
            </div>
        </div>
    </div>
</div>

<!-- TECHNIQUES Ending -->

<!-- Testimonials Starting -->


<div class="display-5 fw-bold text-center mt-5">
    TESTIMONIALS
</div>
<div class="container mt-3">

    <div id="carouselExampleControls" class="carousel slide d-lg-block d-none" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <img src="{{ asset('images/bioflx/dr._minakshi.png')}}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
                    <img src="{{ asset('images/bioflx/dr._mukul.png')}}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <img src="{{ asset('images/bioflx/dr._chew_ling.png')}}" alt=""
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
                    <img src="{{ asset('images/bioflx/dr._minakshi.png')}}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-sm-8 col-8 mt-3">
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <img src="{{ asset('images/bioflx/dr._mukul.png')}}" alt=""
                        class="img-fluid col-lg-4 col-md-6 col-sm-8 col-8 mt-3">
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <img src="{{ asset('images/bioflx/dr._chew_ling.png')}}" alt=""
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
        <img src="{{ asset('images/bioflx/dr._minakshi.png')}}" alt="" class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
        <img src="{{ asset('images/bioflx/dr._mukul.png')}}" alt="" class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
        <img src="{{ asset('images/bioflx/dr._chew_ling.png')}}" alt="" class="img-fluid col-lg-4 col-md-6 col-11 mt-3">
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
                                            What material is Bioflx made of?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            Bioflx crown is made of high impact, biocompatible, hybrid resin polymer
                                            used in the
                                            medical field where high strength, flexibility and durability are required.
                                            They are
                                            Bis-GMA free and contain no metal.
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
                                            Can I Crimp, Contour & Trim the crown?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            -You can trim the crown with bridge scissors, when needed. Slightly
                                            flattening of
                                            proximal surface with howes plier is allowed, but you should not attempt to
                                            crimp
                                            Bioflx crowns.
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
                                            How do you describe the fit of Bioflx crowns?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            It is neither a “snap fit”, nor a “passive fit”. Bioflx crowns should fit
                                            snugly on
                                            the tooth, with slight resistance that can be described as a flex or active
                                            fit. It
                                            will flex over small convexities of the tooth.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 7 -->
                <div class="p-2 fw-bold fs-md-5 mt-5 col-12 h-100">
                    <div class="row justify-content-center">
                        <div class="col-11 fw-bold ">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingSeven">
                                        <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven"
                                            aria-expanded="false" aria-controls="flush-collapseSeven"
                                            style="background-color: rgb(254,205,1); list-style: none !important;">
                                            Can I use a bite stick to seat a Bioflx crown?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSeven" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            -You can use significant force to seat a Bioflx crown onto a preparation,
                                            including
                                            heavy finger pressure or a bite stick. It is unlikely that you will break a
                                            Bioflx
                                            crown during seating.
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 9 -->
                <div class="p-2 fw-bold fs-md-5 mt-5 col-12 h-100">
                    <div class="row justify-content-center">
                        <div class="col-11 fw-bold ">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingNine">
                                        <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseNine"
                                            aria-expanded="false" aria-controls="flush-collapseNine"
                                            style="background-color: rgb(254,205,1); list-style: none !important;">
                                            Are Bioflx crowns radiopaque?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseNine" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            -The radiopacity of Bioflx crowns is similar to the radiopacity of enamel
                                            and should
                                            allow radiographic evaluation of adaptation of the crown margins and pulpal
                                            therapy.
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
                                            Can Bioflx crowns be sterilized?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            -Cold sterilization, autoclave or steam sterilization may be used according
                                            to the
                                            standard instructions of the manufacturer of the sterilant or sterilizer.
                                            Bioflx
                                            crowns, as other pediatric crowns, are provided in non-sterile packaging.
                                            Clinician
                                            may choose to sterilize before use.
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
                                            Can I adjust the occlusion of Bioflx crowns?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            -It is not recommended to use any kind of rotary instrument to adjust the
                                            occlusion
                                            of a Bioflx crown. The occlusal surface of the preparation should be reduced
                                            1-1.5
                                            mm, similar to an SSC preparation. If the crown is slightly high in
                                            occlusion, it
                                            will slightly self-adapt and may show a dimple in that area after a period
                                            of time.
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
                                            Can I use Bioflx crowns in areas of space loss?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            -Bioflx crowns will be available in narrow sizes to be easier to place in
                                            areas of
                                            space loss. Due their flexible nature and elastic memory, Bioflx crowns
                                            cannot be
                                            significantly altered in their shape or width with pliers. To fit Bioflx in
                                            areas of
                                            space loss, it is likely that circumferential reduction of the tooth will be
                                            needed
                                            to fit a smaller crown than would have been used if there were no space
                                            loss.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 8 -->
                <div class="p-2 fw-bold fs-md-5 mt-5 col-12 h-100">
                    <div class="row justify-content-center">
                        <div class="col-11 fw-bold ">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingEight">
                                        <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseEight"
                                            aria-expanded="false" aria-controls="flush-collapseEight"
                                            style="background-color: rgb(254,205,1); list-style: none !important;">
                                            What should I use to cement Bioflx crowns?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseEight" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            -A regular glass ionomer cement should be sufficient for cementing Bioflx
                                            crowns. A
                                            self-setting resin modified glass ionomer cement can also be used. A light
                                            cured
                                            cement should NOT be used because the opacity of the crown will not let
                                            light pass
                                            through to set the cement.
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 10 -->
                <div class="p-2 fw-bold fs-md-5 mt-5 col-12 h-100">
                    <div class="row justify-content-center">
                        <div class="col-11 fw-bold ">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTen">
                                        <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTen"
                                            aria-expanded="false" aria-controls="flush-collapseTen"
                                            style="background-color: rgb(254,205,1); list-style: none !important;">
                                            Will blood or Salivary contamination affect the cementation of Bioflx
                                            crowns?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTen" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            -If Bioflx crowns are contaminated with blood or saliva during try-in, they
                                            can be
                                            rinsed with water, dried and then cemented without any significant effect on
                                            cementation.
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
                <!-- 11 -->
                <div class="col-md-5 p-2 fw-bold fs-md-5 mt-5 col-12 h-100">
                    <div class="row justify-content-center">
                        <div class="col-11 fw-bold ">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingEleven">
                                        <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven"
                                            aria-expanded="false" aria-controls="flush-collapseEleven"
                                            style="background-color: rgb(254,205,1); list-style: none !important;">
                                            How does the wear resistance od Bioflx crowns compare to stainless steel
                                            crowns?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseEleven" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            -Robust in house wear testing demonstrates that Bioflx crowns are at least
                                            as wear
                                            resistant as stainless steel crowns, after 800,000 cycles at 80 newtons on a
                                            Leinfelder wear machine. However, clinicians may see a “dimple” develop on
                                            the
                                            Bioflx crowns in areas of heavy occlusion. This “dimple” appears due to the
                                            self-adaptable technology of the material. Rather than wearing, the material
                                            “self
                                            adapts” to reduce the pressure of the opposing occlusal surface. For this
                                            reason,
                                            and for best results, it is recommended that Bioflx crowns not be placed in
                                            high
                                            occlusion on teeth with little or no occlusal preparation.
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
                                    What material is Bioflx made of?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Bioflx crown is made of high impact, biocompatible, hybrid resin polymer
                                    used in the
                                    medical field where high strength, flexibility and durability are required.
                                    They are
                                    Bis-GMA free and contain no metal.
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
                <div class="col-11 fw-bold ">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo"
                                    style="background-color: rgb(254,205,1); list-style: none !important;">
                                    Can Bioflx crowns be sterilized?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    -Cold sterilization, autoclave or steam sterilization may be used according
                                    to the
                                    standard instructions of the manufacturer of the sterilant or sterilizer.
                                    Bioflx
                                    crowns, as other pediatric crowns, are provided in non-sterile packaging.
                                    Clinician
                                    may choose to sterilize before use.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- 3 -->
        <div class="col-md-5 p-2 fw-bold fs-md-5 mt-5 col-11 h-100
        ">
            <div class="row justify-content-center">
                <div class="col-11 fw-bold ">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                    aria-expanded="false" aria-controls="flush-collapseThree"
                                    style="background-color: rgb(254,205,1); list-style: none !important;">
                                    Can I Crimp, Contour & Trim the crown?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    -You can trim the crown with bridge scissors, when needed. Slightly
                                    flattening of
                                    proximal surface with howes plier is allowed, but you should not attempt to
                                    crimp
                                    Bioflx crowns.
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
                <div class="col-11 fw-bold ">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour"
                                    style="background-color: rgb(254,205,1); list-style: none !important;">
                                    Can I adjust the occlusion of Bioflx crowns?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    -It is not recommended to use any kind of rotary instrument to adjust the
                                    occlusion
                                    of a Bioflx crown. The occlusal surface of the preparation should be reduced
                                    1-1.5
                                    mm, similar to an SSC preparation. If the crown is slightly high in
                                    occlusion, it
                                    will slightly self-adapt and may show a dimple in that area after a period
                                    of time.
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
                <div class="col-11 fw-bold ">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive"
                                    style="background-color: rgb(254,205,1); list-style: none !important;">
                                    How do you describe the fit of Bioflx crowns?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    It is neither a “snap fit”, nor a “passive fit”. Bioflx crowns should fit
                                    snugly on
                                    the tooth, with slight resistance that can be described as a flex or active
                                    fit. It
                                    will flex over small convexities of the tooth.
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
                                    Can I use Bioflx crowns in areas of space loss?
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    -Bioflx crowns will be available in narrow sizes to be easier to place in
                                    areas of
                                    space loss. Due their flexible nature and elastic memory, Bioflx crowns
                                    cannot be
                                    significantly altered in their shape or width with pliers. To fit Bioflx in
                                    areas of
                                    space loss, it is likely that circumferential reduction of the tooth will be
                                    needed
                                    to fit a smaller crown than would have been used if there were no space
                                    loss.
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
                <div class="col-11 fw-bold ">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSeven">
                                <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven"
                                    aria-expanded="false" aria-controls="flush-collapseSeven"
                                    style="background-color: rgb(254,205,1); list-style: none !important;">
                                    Can I use a bite stick to seat a Bioflx crown?
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    -You can use significant force to seat a Bioflx crown onto a preparation,
                                    including
                                    heavy finger pressure or a bite stick. It is unlikely that you will break a
                                    Bioflx
                                    crown during seating.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 8 -->
        <div class="col-md-5 p-2 fw-bold fs-md-5 mt-5 col-11 h-100">
            <div class="row justify-content-center">
                <div class="col-11 fw-bold ">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingEight">
                                <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseEight"
                                    aria-expanded="false" aria-controls="flush-collapseEight"
                                    style="background-color: rgb(254,205,1); list-style: none !important;">
                                    What should I use to cement Bioflx crowns?
                                </button>
                            </h2>
                            <div id="flush-collapseEight" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    -A regular glass ionomer cement should be sufficient for cementing Bioflx
                                    crowns. A
                                    self-setting resin modified glass ionomer cement can also be used. A light
                                    cured
                                    cement should NOT be used because the opacity of the crown will not let
                                    light pass
                                    through to set the cement.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 9 -->
        <div class="col-md-5 p-2 fw-bold fs-md-5 mt-5 col-11 h-100">
            <div class="row justify-content-center">
                <div class="col-11 fw-bold ">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingNine">
                                <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false"
                                    aria-controls="flush-collapseNine"
                                    style="background-color: rgb(254,205,1); list-style: none !important;">
                                    Are Bioflx crowns radiopaque?
                                </button>
                            </h2>
                            <div id="flush-collapseNine" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    -The radiopacity of Bioflx crowns is similar to the radiopacity of enamel
                                    and should
                                    allow radiographic evaluation of adaptation of the crown margins and pulpal
                                    therapy.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 10 -->
        <div class="col-md-5 p-2 fw-bold fs-md-5 mt-5 col-11 h-100">
            <div class="row justify-content-center">
                <div class="col-11 fw-bold ">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTen">
                                <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false"
                                    aria-controls="flush-collapseTen"
                                    style="background-color: rgb(254,205,1); list-style: none !important;">
                                    Will blood or Salivary contamination affect the cementation of Bioflx
                                    crowns?
                                </button>
                            </h2>
                            <div id="flush-collapseTen" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    -If Bioflx crowns are contaminated with blood or saliva during try-in, they
                                    can be
                                    rinsed with water, dried and then cemented without any significant effect on
                                    cementation.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 11 -->
        <div class="col-md-5 p-2 fw-bold fs-md-5 mt-5 col-11 h-100">
            <div class="row justify-content-center">
                <div class="col-11 fw-bold ">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingEleven">
                                <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven"
                                    aria-expanded="false" aria-controls="flush-collapseEleven"
                                    style="background-color: rgb(254,205,1); list-style: none !important;">
                                    How does the wear resistance od Bioflx crowns compare to stainless steel
                                    crowns?
                                </button>
                            </h2>
                            <div id="flush-collapseEleven" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    -Robust in house wear testing demonstrates that Bioflx crowns are at least
                                    as wear
                                    resistant as stainless steel crowns, after 800,000 cycles at 80 newtons on a
                                    Leinfelder wear machine. However, clinicians may see a “dimple” develop on
                                    the
                                    Bioflx crowns in areas of heavy occlusion. This “dimple” appears due to the
                                    self-adaptable technology of the material. Rather than wearing, the material
                                    “self
                                    adapts” to reduce the pressure of the opposing occlusal surface. For this
                                    reason,
                                    and for best results, it is recommended that Bioflx crowns not be placed in
                                    high
                                    occlusion on teeth with little or no occlusal preparation.
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