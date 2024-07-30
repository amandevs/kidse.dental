@extends('layouts.main')
@section('content')

<!-- Banner Starting -->

<img src="{{ asset('images/e_mta_putty_images/banner.png')}}" alt="" class="img-fluid">
<!-- not complete -->

<!-- Banner Ending -->

<div class="container-fluid mt-2">
    <div class="row justify-content-center">
        <img src="{{ asset('images/e_mta_putty_images/e_mta_logo.png')}}" alt=""
            class="img-fluid col-lg-3 col-md-4 col-sm-6 col-10 pt-3 ps-3 pe-3">
    </div>
    <div class="fs-4 text-center fw-bold">Pre-mixed Mineral Trioxide Aggregate
    </div>
</div>

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="row">
                <!-- <div class="col-12 text-center fs-5">
                    <div>e-MTA Putty is a pre-mixed bio-ceramic, insoluble, radiopaque and bioactive MTA consisting of
                        very</div>
                    <div>fine hydrophilic particles of several mineral oxides.
                    </div>
                </div> -->

                <style>
                    /* Optional custom styling */
                    .fs-custom {
                        font-size: 1.25rem;
                        /* Default size for small devices */
                    }

                    @media (min-width: 576px) {
                        .fs-custom {
                            font-size: 1.5rem;
                            /* Size for small tablets */
                        }
                    }

                    @media (min-width: 768px) {
                        .fs-custom {
                            font-size: 1.75rem;
                            /* Size for tablets */
                        }
                    }

                    @media (min-width: 992px) {
                        .fs-custom {
                            font-size: 2rem;
                            /* Size for desktops */
                        }
                    }

                    @media (min-width: 1200px) {
                        .fs-custom {
                            font-size: 2.15rem;
                            /* Size for large desktops */
                        }
                    }
                </style>
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-12 text-center fs-custom">
                            e-MTA Putty is a pre-mixed bio-ceramic, insoluble, radiopaque and bioactive MTA consisting
                            of very
                            fine hydrophilic particles of several mineral oxides.
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<div class="container-fluid mt-5 mb-4">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="row justify-content-center">
                <img src="{{ asset('images/e_mta_putty_images/putty_03.jpg')}}" alt=""
                    class="img-fluid col-md-6 col-11">
            </div>
        </div>
    </div>
</div>

<img src="{{ asset('images/e_mta_putty_images/indications/lg.png')}}" alt=""
    class="img-fluid d-none d-lg-block w-100 mt-5">

<div class="container-fluid d-block d-lg-none mt-5">
    <div class="row justify-content-center">
        <img src="{{ asset('images/e_mta_putty_images/indications/sm_header.png')}}" alt=""
            class="img-fluid col-sm-8 col-10">
    </div>
    <div class="row">
        <video src="{{ asset('images/e_mta_putty_images/putty_website.mp4')}}" class="col-12"></video>
        <div class="col-lg-5 text-lg-start">
            <div class="row justify-contente-center">
                <div class="col-10">
                    <div class="row justify-content-center">
                        <img src="{{ asset('images/e_mta_putty_images/indications/left_primary.png')}}" alt=""
                            class="img-fluid col-sm-6 mt-4">
                        <img src="{{ asset('images/e_mta_putty_images/indications/left_permanent.png')}}" alt=""
                            class="img-fluid col-sm-6 mt-4">
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="row justify-content-center">
                <img src="{{ asset('images/e_mta_putty_images/features_of_e_mta_putty.jpg')}}" alt=""
                    class="img-fluid col-sm-10 col-11">
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
                                            What is e-MTA putty?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            – e-MTA putty is ready to use MTA cement which has all indications of MTA
                                            cement
                                            like apexification, pulp capping, pulpotomy, furcation repair and root
                                            resorption
                                            repair.
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
                                            What is difference between e-MTA putty and e-MTA sealer?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            – e-MTA putty is ready to use MTA cement which has all indications of MTA
                                            cement
                                            like apexification, pulp capping, pulpotomy, furcation repair and root
                                            resorption
                                            repair. Whereas e-MTA sealer is a root canal sealer with flowable
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
                                            How does e-MTA putty set?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            -e-MTA putty is formulated with a water-free organic liquid which only sets
                                            in vivo
                                            or moisture. Setting begins in the presence of moisture from the apical
                                            tissues,
                                            dentinal tubules, or pulp.
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
                                            What is working time and setting time of e-MTA putty?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSeven" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            – working time is 45 minutees-1hour.e-MTA putty will set will set in vivo in
                                            about 4
                                            hrs. Setting begins in the presence of moisture from the apical tissues,
                                            dentinal
                                            tubules or pulp tissue.
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
                                            What is best instrument to place e-MTA putty inside the tooth?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseNine" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            -You can use plastic instrument or cement carrier to place the material on
                                            the tooth
                                            or chamber. If you want to do apexification or resorption repair you can use
                                            our
                                            e-MTA carrier.
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
                                            Can I place e-MTA putty and complete the restoration before it is completely
                                            set?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            – You can complete the restoration or cement a crown immediately after
                                            placing e-MTA
                                            putty.It will harden/set underneath the restoration. It immediately achieves
                                            wash-out resistant and is dimensionally stable when placed with zero
                                            shrinkage and
                                            negligible expansion to ensure gap-free sealing.
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
                                            How to store the product?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
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
                                            What is shelf life of the product?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            -2 years from date of manufacturing.
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
                                            How many procedures can be done one syringe of 0.65gm?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseEight" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            -You can do 10-12 procedures using one syringe.
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
                                            Can I etch the e-MTA putty?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTen" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            No you cannot etch the putty. You can secure the putty material with Glass
                                            ionomer
                                            cement before placement of composite resin material.
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
                                    What is e-MTA putty?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    – e-MTA putty is ready to use MTA cement which has all indications of MTA cement
                                    like apexification, pulp capping, pulpotomy, furcation repair and root resorption
                                    repair.
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
                                    Can I place e-MTA putty and complete the restoration before it is completely set?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    – You can complete the restoration or cement a crown immediately after placing e-MTA
                                    putty.It will harden/set underneath the restoration. It immediately achieves
                                    wash-out resistant and is dimensionally stable when placed with zero shrinkage and
                                    negligible expansion to ensure gap-free sealing.
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
                                    What is difference between e-MTA putty and e-MTA sealer?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    – e-MTA putty is ready to use MTA cement which has all indications of MTA cement
                                    like apexification, pulp capping, pulpotomy, furcation repair and root resorption
                                    repair. Whereas e-MTA sealer is a root canal sealer with flowable consistency used
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
                                    How to store the product?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    -Keep the syringe in the aluminum pouch in cool dry place. Do not refrigerate.
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
                                    How does e-MTA putty set?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    -e-MTA putty is formulated with a water-free organic liquid which only sets in vivo
                                    or moisture. Setting begins in the presence of moisture from the apical tissues,
                                    dentinal tubules, or pulp.
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
                                    What is shelf life of the product?
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    -2 years from date of manufacturing.
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
                                    What is working time and setting time of e-MTA putty?
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    – working time is 45 minutees-1hour.e-MTA putty will set will set in vivo in about 4
                                    hrs. Setting begins in the presence of moisture from the apical tissues, dentinal
                                    tubules or pulp tissue.
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
                <div class="col-11 fw-bold">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingEight">
                                <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseEight"
                                    aria-expanded="false" aria-controls="flush-collapseEight"
                                    style="background-color: rgb(254,205,1); list-style: none !important;">
                                    How many procedures can be done one syringe of 0.65gm?
                                </button>
                            </h2>
                            <div id="flush-collapseEight" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    -You can do 10-12 procedures using one syringe.
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
                <div class="col-11 fw-bold">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingNine">
                                <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false"
                                    aria-controls="flush-collapseNine"
                                    style="background-color: rgb(254,205,1); list-style: none !important;">
                                    What is best instrument to place e-MTA putty inside the tooth?
                                </button>
                            </h2>
                            <div id="flush-collapseNine" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    -You can use plastic instrument or cement carrier to place the material on the tooth
                                    or chamber. If you want to do apexification or resorption repair you can use our
                                    e-MTA carrier.
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
                <div class="col-11 fw-bold">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTen">
                                <button class="accordion-button collapsed fw-bold fs-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false"
                                    aria-controls="flush-collapseTen"
                                    style="background-color: rgb(254,205,1); list-style: none !important;">
                                    Can I etch the e-MTA putty?
                                </button>
                            </h2>
                            <div id="flush-collapseTen" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    No you cannot etch the putty. You can secure the putty material with Glass ionomer
                                    cement before placement of composite resin material.
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