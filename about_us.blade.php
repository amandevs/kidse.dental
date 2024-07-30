@extends('layouts.main')
@section('content')


<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/about_us/web_1.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/about_us/web_2.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/about_us/web_3.png')}}" class="d-block w-100" alt="...">
        </div>
        <!-- Remaining Slider -->
        <!-- <div class="carousel-item">
            <img src="{{ asset('images/about_us/web_4.png')}}" class="d-block w-100 web_4" alt="...">
        </div> -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Slider Ending -->

<br class="d-none d-md-block">
<br class="d-none d-md-block">
<br>

<!-- Who We Are Starting -->

<div class="display-4 fw-bold text-center">Who We Are?</div>


<div class="container-fluid mt-3">
    <div class="row justify-content-center">
        <!-- <div class="col-md-10 col-11 text-center fs-2">
            We are a dedicated team of professionals, committed to providing the highest quality dental products for
            children. Established in the year 2017, by <b> Dr. Mukul Jain,</b> a pediatric dentist by profession, we
            have been
            at
            the forefront of innovation in pediatric dental care, dedicated to creating exceptional products that make a
            difference in children’s lives. All our products are research based and passionately made using the best
            technologies. We believe in high quality standards and customer service. Our mission is to revolutionize
            pediatric dentistry through innovation and excellence in manufacturing. We are committed to developing
            safe, effective, and child-friendly dental products that empower dental professionals to provide the best
            care
            for young patients. Through our products, we aim to instill healthy oral habits from a young age, setting
            the
            foundation for a lifetime of smiles.
        </div> -->
        <div class="col-12 col-md-11 text-center fw-bold custom-text">
            We are a dedicated team of professionals, committed to providing the highest quality dental products for
            children. Established in the year 2017, by <b>Dr. Mukul Jain</b>, a pediatric dentist by profession, we have been
            at the forefront of innovation in pediatric dental care, dedicated to creating exceptional products that
            make a difference in children’s lives. All our products are research based and passionately made using the
            best technologies. We believe in high quality standards and customer service. Our mission is to
            revolutionize pediatric dentistry through innovation and excellence in manufacturing. We are committed to
            developing safe, effective, and child-friendly dental products that empower dental professionals to provide
            the best care for young patients. Through our products, we aim to instill healthy oral habits from a young
            age, setting the foundation for a lifetime of smiles.
        </div>

        <style>
            @media (min-width: 576px) {
                .custom-text {
                    font-size: 1.2rem;
                    /* Adjust size for small devices */
                }
            }

            @media (min-width: 768px) {
                .custom-text {
                    font-size: 1.4rem;
                    /* Adjust size for medium devices */
                }
            }

            @media (min-width: 992px) {
                .custom-text {
                    font-size: 1.6rem;
                    /* Adjust size for large devices */
                }
            }

            @media (min-width: 1200px) {
                .custom-text {
                    font-size: 1.8rem;
                    /* Adjust size for extra large devices */
                }
            }
        </style>

    </div>
</div>


<!-- Who We Are Ending -->

<!-- Aims And Values Starting -->

<!-- <img src="{{ asset('images/about_us/aims_&_values.jpg')}}" alt="" class="img-fluid mt-5"> -->
<div class="container-fluid mt-5" style="background: #FFCC00 !important;">
    <div class="row justify-content-center">
        <img src="{{ asset('images/about_us/aims_&_values_1.jpg')}}" alt="" class="col-md-6 col-11 img-fluid">
        <img src="{{ asset('images/about_us/aims_&_values_2.jpg')}}" alt="" class="col-md-6 col-11 img-fluid">
    </div>
</div>

<!-- Aims And Values Ending -->

<br class="d-none d-md-block">
<br class="d-none d-md-block">
<br>

<!-- Our Journey Starting -->

<div class="display-4 fw-bold text-center">Our Journey</div>
<div class="container-fluid mt-5 mb-4">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="row">
                <img src="{{ asset('images/about_us/our_Journey.png')}}" alt="" class="img-fluid col-12">
            </div>
        </div>
    </div>
</div>

@endsection