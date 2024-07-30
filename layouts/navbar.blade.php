<style>
    @media screen and (min-width: 1px) and (max-width: 464px) {
        .logo {
            height: 40px !important;
        }
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light navs"
    style="background-image: url({{asset('images/Navbar/bg.png')}});background-size: cover;box-shadow: 0px 0px 15px rgb(119, 119, 119) !important;">
    <div class="container-fluid">
        <a class="navbar-brand bg-white ms-md-2 ms-lg-2" href="#">
                <img src="https://www.kidsedental.com/wp-content/themes/kidsedental/images/logo_r.png" alt=""
                class="img-fluid logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="background-color: #FFCC00 !important;">
                <li class="nav-item ms-3 ms-lg-0 ms-3 me-4">
                    <a class="nav-link active fw-bold" aria-current="page" href="{{route('about_us')}}">About Us</a>
                </li>
                <li class="nav-item ms-3 ms-lg-0 ms-3 dropdown me-xl-4 me-lg-2">

                    <a class="nav-link text-dark fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                    
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="{{route('bioflx')}}">Bioflx</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('e_iodocal')}}">e-Iodocal</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('e_mta_carrier')}}">e-MTA-Carrier</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('e_mta_putty')}}">e-MTA-Putty</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('e_mta_sealer')}}">e-MTA-sealer</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('e_mta')}}">e-MTA</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('e_sdf')}}">e-Sdf</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('e_splint')}}">e-Splint</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('endodontics')}}">Endodontics</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('kids_e_crown')}}">Kids-e-Crown</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('kids_e_files')}}">Kids-e-Files</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('kids_e_pit_and_fissure_sealant')}}">Kids-e-Pit & Fissure Sealant</a>
                        </li>
                         <li>
                            <a class="dropdown-item" href="{{route('space_maintainer')}}">Space Maintainer</a>
                        </li>
                    </ul>

                </li>


                {{-- <li class="nav-item ms-3 ms-lg-0 ms-3 me-xl-4 me-lg-2">
                    <a class="nav-link active fw-bold" aria-current="page" href="{{route('about_us')}}">Education</a>
                </li>
                <li class="nav-item ms-3 ms-lg-0 ms-3 me-xl-4 me-lg-2">
                    <a class="nav-link active fw-bold" aria-current="page" href="{{route('about_us')}}">Blogs</a>
                </li>
                <li class="nav-item ms-3 ms-lg-0 ms-3 me-xl-4 me-lg-2">
                    <a class="nav-link active fw-bold" aria-current="page" href="{{route('about_us')}}">Contact us</a>
                </li> --}}
                <li class="nav-item ms-3 ms-lg-0 ms-3 me-xl-4 me-lg-2">
                    <a class="nav-link active fw-bold" aria-current="page" href="{{route('about_us')}}">Education</a>
                </li>
                <li class="nav-item ms-3 ms-lg-0 ms-3 me-xl-4 me-lg-2">
                    <a class="nav-link active fw-bold" aria-current="page" href="{{route('about_us')}}">Blogs</a>
                </li>
                <li class="nav-item ms-3 ms-lg-0 ms-3 me-xl-4 me-lg-2">
                    <a class="nav-link active fw-bold" aria-current="page" href="{{route('about_us')}}">Contact us</a>
                </li> 
                <li class="nav-item ms-3 ms-lg-0 ms-3 me-xl-4 me-lg-2 mb-3 mb-lg-0 me-3">
                    <a class="nav-link ps-5 btn w-100 pe-5 fw-bold active bg-white rounded-pill fw-bold store-yellow" aria-current="page" href="{{route('store')}}">Store</a>
                </li>
                <li class="nav-item ms-3 ms-lg-0 ms-3 me-xl-4 me-lg-2 mb-3 mb-lg-0 me-3">
                    <a class="nav-link text-dark fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{isset(auth()->user()->name)  ? "Hello, ".ucfirst(auth()->user()->name) : '' }}</a>
                    
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="{{route('dashboard')}}">
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf<a href="{{route('logout')}}" onclick="event.preventDefault();
                                this.closest('form').submit();" class="dropdown-item">Logout</a>
                            </form>
                        </li>                     
                    </ul>
                </li>
                <li class="nav-item ms-3 ms-lg-0 ms-3 me-xl-4 me-lg-2 mb-3 mb-lg-0 me-3">
                    <div class="dropdown-menu dropdown-menu-end position-absolute mx-3 my-5">
                                                
                        <div class="dropdown-item">
                            <div class="d-flex">
                                <div class="ms-1 lh-1">
                                    <h5 class="mb-1"></h5>
                                    <p class="mb-0">{{isset(auth()->user()->email) ? auth()->user()->email : ''}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-divider"></div>

                        <ul class="list-unstyled">
                            <li>
                                <a class="dropdown-item" href="{{route('dashboard')}}">
                                <i class="fe fe-user me-2"></i>
                                    Profile
                                </a>
                            </li>
                        </ul>

                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>