@extends('layouts.main')
@section('content')

<img src="{{ asset('images/store/banner.jpg')}}" class="img-fluid w-100 h-100">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="row justify-content-center" id="products">
                <div class="col-12 col-md-12 col-lg-11 col-xl-10 my-4">
                    <div class="display-5 fw-bold mt-3 ">ALL PRODUCTS</div>
                </div>
            </div>
            <!-- links -->
            {{-- <div class="row mt-3 justify-content-center">
                <!-- <div class="col-md-12 col-lg-11 col-xl-9"> -->
                <div class="col-md-12 col-lg-11 col-xl-10">
                    <div class="row">
                        <a href="store.php #products"
                            class="btn col-xl-2 col-lg-2 col-md-3 col-5 mt-3 ms-3 text-center fw-bold fs-5 border border-2 border-dark">All</a>
                        <a href="restorative.php #products"
                            class="btn col-xl-2 col-lg-2 col-md-3 col-5 mt-3 ms-3 text-center fw-bold fs-5"
                            style="background-color: #FFCC00 !important;">Restorative</a>
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
            </div> --}}
        </div>
    </div>
</div>

<!-- PRODUCTS -->


<div class="container mb-5">
    <div class="row justify-content-start">

        @foreach ($ProductData as $product)
            <div class="col-md-3 my-4">
                <div class="card shadow">
                    <img src="https://www.kidsedental.com/wp-content/themes/kidsedental/images/mputty/emtaputty.png" class="mw-100 card-img" alt="">
                    <div class="card-body">

                        {{-- {{$product}} --}}
                        <h5 class="card-title fw-700">{{$product['title']}}</h5>
                        <p>
                            {{-- {!! nl2br(e($product['description'])) !!} --}}
                        </p>
                        {{-- <p>Buying Option: {{$product['buying_option']}}</p>
                        <p>Status: {{$product['status']}}</p>
                        <p>Stock: {{$product['stock']}}</p>
                        <p>Price: {{$product['price']}}</p>
                        <p>HSN Code: {{$product['hsn_code']}}</p>
                        <p>Tax Rate: {{$product['tax_rate']}}</p>
                        <p>Is Variante: {{$product['is_variante']}}</p>
                        <p>Is Kit: {{$product['is_kit']}}</p>
                        <p>Is Refil: {{$product['is_refill']}}</p> --}}


                       
                            @if ($product->Variant()->exists())


                                @foreach ($product->Variant as $variant)
                                    <div class="border p-2 my-2">
                                        {{-- Variant Name: {{$variant['variante_name']}} <br>
                                        Buying Option : {{$variant['buying_option']}} <br>
                                        Price : {{$variant['price']}} <br>
                                        Description : {{$variant['discription']}} --}}

                                        
                                        {{-- {{$variant}} --}}
                                        <a href="{{route('product.varient', [$product['id'], $variant['variante_name']])}}" class="btn btn-warning" style="background-color: #FFCC00;"> {{$variant['buying_option']}}</a>
                                        {{-- <p style="font-size: 12px" class="my-2">{{$variant['buying_option']}}</p> --}}
                                    </div>
                                @endforeach

                                @else
                                <div class="border p-2 my-2">
                                    <a href="{{route('product.detail', $product->id)}}" class="btn btn-warning" style="background-color: #FFCC00;">View Product</a>
                                </div>
                            @endif

                            {{-- @if ($product->Kit()->exists())
                                
                                <h3>Kit</h3>
                                @foreach ($product->Kit as $kit)
                                    <div class="border p-2 my-2">
                                        {{$kit}}
                                    </div>
                                @endforeach

                                

                            @endif --}}


                            {{-- @if ($product->Refill()->exists())
                                
                                <h3>Refilla</h3>
                                @foreach ($product->Refill as $refill)
                                    <div class="border p-2 my-2">
                                        {{$refill}}
                                    </div>
                                @endforeach

                                

                            @endif --}}
                       

                        
                    </div>
                </div>
            </div>
        @endforeach

        {{-- {{$ProductData}} --}}

        {{-- <div class="col-xl-11 col-lg-10 col-11">
            <div class="row mt-3 justify-content-center align-items-center">

                <?php //include "modal/kids_e_crown.php" ?>
                @include("modal/kids_e_crown")

                <?php //include "modal/bioflx_crowns.php" ?>
                     @include("modal/bioflx_crowns")

                <a href="" class="col-xl-2 col-md-3 col-sm-4 col-6 ms-xl-2 mt-4 ms-md-none ms-lg-block">
                    <div class="row">
                        <img src="assets/images/store/box.png')}}" alt="" class="img-fluid col-12">
                    </div>
                    <div class="row">
                        <div class="fs-4 fw-bold text-dark text-center">Kids-e-Restore</div>
                    </div>
                </a>

                <?php //include "modal/e_sdf.php" ?>
                     @include("modal/e_sdf")

                <a href="" class="col-xl-2 col-md-3 col-sm-4 col-6 ms-xl-2 mt-4 ms-md-none ms-lg-block">
                    <div class="row">
                        <img src="assets/images/store/box.png')}}" alt="" class="img-fluid col-12">
                    </div>
                    <div class="row">
                        <div class="fs-4 fw-bold text-dark text-center">e-Pit & Fissure Sealant</div>
                    </div>
                </a>

                <?php //include "modal/e_space_maintainer.php" ?>
                  @include("modal/e_space_maintainer")

                <a href="" class="col-xl-2 col-md-3 col-sm-4 col-6 ms-xl-2 mt-4 ms-md-none ms-lg-block">
                    <div class="row">
                        <img src="assets/images/store/box.png')}}" alt="" class="img-fluid col-12">
                    </div>
                    <div class="row">
                        <div class="fs-4 fw-bold text-dark text-center">e-MTA</div>
                    </div>
                </a>

                <a href="" class="col-xl-2 col-md-3 col-sm-4 col-6 ms-xl-2 mt-4 ms-md-none ms-lg-block">
                    <div class="row">
                        <img src="assets/images/store/box.png')}}" alt="" class="img-fluid col-12">
                    </div>
                    <div class="row">
                        <div class="fs-4 fw-bold text-dark text-center">e-MTA Putty</div>
                    </div>
                </a>

                <?php //include "modal/e_mta_carrier" ?>
                 @include("modal/e_mta_carrier")

                <a href="" class="col-xl-2 col-md-3 col-sm-4 col-6 ms-xl-2 mt-4 ms-md-none ms-lg-block">
                    <div class="row">
                        <img src="assets/images/store/box.png')}}" alt="" class="img-fluid col-12">
                    </div>
                    <div class="row">
                        <div class="fs-4 fw-bold text-dark text-center">e-MTA Sealer</div>
                    </div>
                </a>

                <a href="" class="col-xl-2 col-md-3 col-sm-4 col-6 ms-xl-2 mt-4 ms-md-none ms-lg-block">
                    <div class="row">
                        <img src="assets/images/store/box.png')}}" alt="" class="img-fluid col-12">
                    </div>
                    <div class="row">
                        <div class="fs-4 fw-bold text-dark text-center">e-lodoCal</div>
                    </div>
                </a>    
                
                   @include("modal/kids_e_files")
                     @include("modal/e_splint")
            </div>
        </div> --}}
    </div>

</div>
@endsection