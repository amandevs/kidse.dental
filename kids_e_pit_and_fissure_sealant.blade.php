@extends('layouts.main')
@section('content')

<!-- Body starting -->

<!-- Banner Starting -->

<img src="{{ asset('images/kids_e_pit_&_fissure_sealant/banner.jpg')}}" class="img-fluid">

<!-- Banner Ending -->

<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-11 col-md-12">
            <div class="row justify-content-center">
                <img src="{{ asset('images/kids_e_pit_&_fissure_sealant/logo.png')}}" alt=""
                    class="col-md-5 col-10 img-fluid">
            </div>
            <div class="row justify-content-center mt-4">
                <!-- <div class="col-md-11 fs-1 text-center">
                    e-Pit and Fissure Sealant is the world's first nano silver-reinforced bio-active solution for
                    optimal
                    protection, adhesion, and extended fluoride release.
                </div> -->

                <div class="row justify-content-center mt-4">
                    <div class="col-md-11 custom-font-size text-center">
                        e-Pit and Fissure Sealant is the world's first nano silver-reinforced bio-active solution for
                        optimal
                        protection, adhesion, and extended fluoride release.
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

            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-11">
                    <div class="row justify-content-center">
                        <img src="{{asset('images/kids_e_pit_&_fissure_sealant/product_fam.jpg')}}" alt=""
                            class="img-fluid col-12 col-md-9">
                    </div>
                </div>
            </div>
            <!-- Features -->
            <div class="row justify-content-center mt-5">
                <div class="col-11">
                    <div class="row justify-content-center">
                        <img src="{{asset('images/kids_e_pit_&_fissure_sealant/features.jpg')}}" alt=""
                            class="img-fluid col-12 col-md-9">
                    </div>
                </div>
            </div>

            <!-- Indication -->

            <div class="row align-items-center mt-5">
                <div class="col-lg-5">
                    <div class="display-5 fw-bold text-center">INDICATION</div>
                    <div class="display-5 mt-2 fw-bold text-center">Dental Procedure</div>
                    <div class="fs-3 text-center mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-dot" viewBox="0 0 16 16">
                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                        </svg>Seal pits and fissure
                    </div>
                </div>
                <img src="{{asset('images/kids_e_pit_&_fissure_sealant/indication.png')}}" alt=""
                    class="img-fluid col-lg-7">
            </div>

            <!-- How it is used -->

            <div class="row justify-content-center mt-5">
                <div class="col-11">
                    <div class="row justify-content-center">
                        <img src="{{asset('images/kids_e_pit_&_fissure_sealant/how_it_is_used.jpg')}}" alt=""
                            class="img-fluid col-12 col-md-9">
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

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
                                            Do I need to etch or bond the tooth before the use e-Pit & Fissure Sealant?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            NA
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
                                            Is e-Pit & Fissure Sealant dual cure?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            NA
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
                                            What is the role of silver in e-Pit & Fissure Sealant?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            NA
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
                                            What is the shade of e-Pit & Fissure Sealant?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            NA
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
                                    Do I need to etch or bond the tooth before the use e-Pit & Fissure Sealant?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    NA
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
                                    What is the role of silver in e-Pit & Fissure Sealant?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    NA
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
                                    Is e-Pit & Fissure Sealant dual cure?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    NA
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
                                    What is the shade of e-Pit & Fissure Sealant?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    NA
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