@extends('layouts.main')
@section('content')
<img src="{{ asset('images/store/banner.jpg')}}" class="img-fluid w-100 h-100">



<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="row justify-content-center" id="products">
                <div class="col-12 col-md-12 col-lg-11 col-xl-10">
                    <div class="display-5 fw-bold mt-3 ">ALL PRODUCTS</div>
                </div>
            </div>
            <!-- links -->
            <div class="row mt-3 justify-content-center">
                <!-- <div class="col-md-12 col-lg-11 col-xl-9"> -->
                <div class="col-md-12 col-lg-11 col-xl-10">
                    <div class="row">

                        <a href="store.php #products"
                            class="btn col-xl-2 col-lg-2 col-md-3 col-5 mt-3 ms-3 text-center fw-bold fs-5"
                            style="background-color: #FFCC00 !important;">All</a>
                        <a href="restorative.php #products"
                            class="btn col-xl-2 col-lg-2 col-md-3 col-5 mt-3 ms-3 text-center fw-bold fs-5 border border-2 border-dark">Restorative</a>
                        <a href="preventive.php #products"
                            class="btn col-xl-2 col-lg-2 col-md-3 col-5 mt-3 ms-3 text-center fw-bold fs-5"
                            style="background-color: #FFCC00 !important;">Preventive</a>
                        <a href="endodontics.php #products"
                            class="btn col-xl-2 col-lg-2 col-md-3 col-5 mt-3 ms-3 text-center fw-bold fs-5"
                            style="background-color: #FFCC00 !important;">Endodontics</a>
                        <a href="periodontics.php #products"
                            class="btn col-xl-2 col-lg-2 col-md-3 col-5 mt-3 ms-3 text-center fw-bold fs-5"
                            style="background-color: #FFCC00 !important;">Periodontics</a>
                        <div class="col col-xl-2 col-lg-2 col-md-3 ms-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- PRODUCTS -->

<div class="container-fluid mb-5">
    <div class="row justify-content-center">
        <div class="col-xl-9 col-lg-10 col-11">
            <div class="row mt-3 align-items-center">
   @include("modal/kids_e_crown")
      @include("modal/bioflx_crowns")

                <a href="" class="col-xl-2 col-md-3 col-sm-4 col-6 ms-xl-2 mt-4 ms-md-none ms-lg-block">
                    <div class="row">
                        <img src="assets/images/store/box.png" alt="" class="img-fluid col-12">
                    </div>
                    <div class="row">
                        <div class="fs-4 fw-bold text-dark text-center">Kids-e-Restore</div>
                    </div>
                </a>

            </div>
        </div>
    </div>
</div>
<!-- MORE PRODUCTS -->
<div class="display-5 text-center fw-bold mt-4">More Products</div>
@endsection