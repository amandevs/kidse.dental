@extends('layouts.main')
@section('content')

<!-- Body starting -->

<!-- Banner Starting -->

<img src="{{ asset('images/kids_e_crown/kids_e_crown_banner.png')}}" class="img-fluid">
<!-- incomplete -->

<!-- Banner Ending -->

<div class="container mt-4 mt-md-5">
    <div class="row justify-content-center">
        <img src="{{ asset('images/kids_e_crown/logo.png')}}" alt="" class="col-md-4 col-8">
    </div>
</div>

<div class="container-fluid mt-4">
    <div class="row justify-content-center text-center">
        <div class="col-md-9 col-11 fs-3">
            <!-- Kids-e-crown® are the world’s first pre-formed smart pediatric crown in the world. It was designed by a
            pediatric dentist who drew on dentist’s perspectives and clinical experience worldwide. It is a
            patented, research-based product that is made using the best technologies available. They are
            anatomically correct, thinner, biocompatible, and long-lasting.
        </div> -->
            <div class="col-12 text-center custom-font-size mt-1">
                Kids-e-crown<sup style="font-size: 18px !important;">®</sup> are the world’s first pre-formed smart
                pediatric crown in the world. It was designed by a
                pediatric dentist who drew on dentist’s perspectives and clinical experience worldwide. It is a
                patented, research-based product that is made using the best technologies available. They are
                anatomically correct, thinner, biocompatible, and long-lasting.
            </div>

            <div class="row justify-content-center mt-5">
                <img src="{{ asset('images/kids_e_crown/anterior_crowns.png')}}" alt=""
                    class="img-fluid col-xl-6 col-md-6 col-11 mt-3">
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
    </div>
</div>

<!-- Features Starting -->

<div class="display-4 mt-md-5 mt-4 fw-bold text-center">FEATURES</div>

<!-- Design -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="row justify-content-between">
                <img src="{{ asset('images/kids_e_crown/design_text.jpg')}}" alt="" class="img-fluid col-md-5 mt-5">
                <img src="{{ asset('images/kids_e_crown/design_diagram.jpg')}}" alt="" class="img-fluid col-md-5 mt-5">
            </div>
        </div>
    </div>
</div>
<!-- Esthetic -->

<div class="container-fluid mt-2">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="row justify-content-between align-items-center">
                <img src="{{ asset('images/kids_e_crown/esthetic_diagram.jpg')}}" alt=""
                    class="img-fluid col-md-5 col-11 order-2 order-md-1 mt-5">
                <img src="{{ asset('images/kids_e_crown/esthetics_text.jpg')}}" alt=""
                    class="img-fluid col-md-5 col-11 order-1 order-md-2 mt-5">
            </div>
        </div>
    </div>
</div>
<!-- Cementation -->
<div class="container-fluid">
    <div class="row justify-content-betweeen align-items-center">
        <div class="col-11">
            <div class="row justify-content-evenly">
                <img src="{{ asset('images/kids_e_crown/cementaion_text.jpg')}}" alt=""
                    class="img-fluid col-xl-7 col-md-6 mt-5">
                <img src="{{ asset('images/kids_e_crown/cementaion_diagram.png')}}" alt=""
                    class="img-fluid col-xl-3 col-md-6 mt-5">
            </div>
        </div>
    </div>
</div>


<!-- Features Ending -->

<!-- Guide Starting -->


<div class="text-center fw-bold display-4 mt-4" style="font-size: 3rem; font-weight: bold; margin-top: 1.5rem;">
    KIDS-E-CROWN <sup
        style="font-size: 0.5em; vertical-align: super; position: relative; top: -0.5em; margin-left: -10.5px;">®
    </sup></div>
<div class="text-center fw-bold display-5 mt-2">Guide to buy </div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="row"><img src="{{ asset('images/kids_e_crownguide_to_buy/1.jpg')}}" alt=""
                    class="img-fluid col-lg-4 col-sm-6 mt-4"><img
                    src="{{ asset('images/kids_e_crownguide_to_buy/2.png')}}" alt=""
                    class="img-fluid col-lg-4 col-sm-6 mt-4"><img
                    src="{{ asset('images/kids_e_crownguide_to_buy/3.png')}}" alt=""
                    class="img-fluid col-lg-4 col-sm-6 mt-4"></div>
        </div>
    </div>
</div>
<div class="text-center fw-bold display-4 mt-md-4" style="color: #FFCC00 !important;">HOW IS IT USED? </div>
<div class="text-center fw-bold display-4 mt-4">ANTERIOR TECHNIQUE </div>
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="row"><img src="{{ asset('images/kids_e_crown/anteriors.jpg')}}" alt="" class="img-fluid col-12">
            </div>
        </div>
    </div>
</div>
<div class="text-center fw-bold display-4 mt-4">POSTERIOR TECHNIQUE </div>
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="row"><img src="{{ asset('images/kids_e_crown/posteriors.jpg')}}" alt=""
                    class="img-fluid col-12"></div>
        </div>
    </div>
</div>
<!-- Guide Ending -->
<!-- TESTIMONIALS STARTING -->
<div class="display-5 fw-bold text-center mt-5">TESTIMONIALS </div>
<div class="container mt-3">
    <div class="row">Image Change Karna Hai <img src="{{ asset('images/kids_e_crown/posteriors.jpg')}}" alt=""
            class="img-fluid col-lg-4 col-md-6 col-11 mt-3"><img src="{{ asset('images/kids_e_crown/posteriors.jpg')}}"
            alt="" class="img-fluid col-lg-4 col-md-6 col-11 mt-3"><img
            src="{{ asset('images/kids_e_crown/posteriors.jpg')}}" alt=""
            class="img-fluid col-lg-4 col-md-6 col-11 mt-3"></div>
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
                                            Can we sterilize Kids-e-crown?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            Cold sterilization, autoclave or steam sterilization are all acceptable
                                            methods.
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
                                            Can we alter Kids-e-crowns?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            We do not recommend making any changes to Kids-e-Crown. However, if
                                            necessary,
                                            you
                                            can make minor adjustments with zirconia adjustment burs with light
                                            hands in the
                                            presence of continuous water spray. Polish the crown after the
                                            adjustments.
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
                                            What is a narrow crown?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            Narrow crowns are mid-size crowns with bucco-lingual more dimension.Used
                                            in
                                            space
                                            loss cases or adjacent crown cases. It has a similar shape like a
                                            stainless
                                            steel
                                            crown which squeezed with howe plier on proximal surface.
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
                                            Can I reduce the height of the crown?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            Diamond burs can be used to reduce & feather the crown margin. It is
                                            important
                                            to
                                            use a lightintermitent touch and a continuous water spray. Zirconia
                                            polishing
                                            burs
                                            should be used following any adjustments.
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
                                            What kind of cement do you suggest?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            It’s best to use a standard Glass Ionomer Cement that sets quickly.
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
                                            Do you provide try-in crowns?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            No, we do not provide and do not recommend try-in crowns, since they are
                                            an
                                            additional liability and dead inventory to manage. Instead you can
                                            select the
                                            crown
                                            by placing them on the target tooth and the ones which do not fit can be
                                            cleaned
                                            off
                                            with alochol and sterilised in an autoclave and reused again.
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
                                            Can the crown be crimped like stainless steel crown?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSeven" class="accordion-collapse collapse fs-5"
                                        aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            No they can’t be crimped
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
                                    Can we sterilize Kids-e-crown?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Cold sterilization, autoclave or steam sterilization are all acceptable methods.
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
                                    Can I reduce the height of the crown?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Diamond burs can be used to reduce & feather the crown margin. It is important
                                    to
                                    use a lightintermitent touch and a continuous water spray. Zirconia polishing
                                    burs
                                    should be used following any adjustments.
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
                                    Can we alter Kids-e-crowns?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    We do not recommend making any changes to Kids-e-Crown. However, if necessary,
                                    you
                                    can make minor adjustments with zirconia adjustment burs with light hands in the
                                    presence of continuous water spray. Polish the crown after the adjustments.
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
                                    What kind of cement do you suggest?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    It’s best to use a standard Glass Ionomer Cement that sets quickly.
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
                                    What is a narrow crown?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Narrow crowns are mid-size crowns with bucco-lingual more dimension.Used in
                                    space
                                    loss cases or adjacent crown cases. It has a similar shape like a stainless
                                    steel
                                    crown which squeezed with howe plier on proximal surface.
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
                                    Do you provide try-in crowns?
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    No, we do not provide and do not recommend try-in crowns, since they are an
                                    additional liability and dead inventory to manage. Instead you can select the
                                    crown
                                    by placing them on the target tooth and the ones which do not fit can be cleaned
                                    off
                                    with alochol and sterilised in an autoclave and reused again.
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
                                    Can the crown be crimped like stainless steel crown?
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse fs-5"
                                aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    No they can’t be crimped
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