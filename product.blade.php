@extends('layouts.main')
@section('content')

<div class="display-4 fw-bold text-center mt-4 mb-4">SHOP</div>

<style>
    .filter-link {
        border: 1px solid black;
        border-left: transparent !important;
        border-bottom: 0.5px;
    }
</style>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="row">
                <div class="col-lg-2 filter-link text-center fs-1">
                    Filters
                </div>
                <div class="col-lg-10"></div>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center" style="border-top: 1px solid black !important;">
        <div class="col-lg-3">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <button class="navbar-toggler btn btn-outline-warning" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2"
                        aria-expanded="false" aria-label="Toggle navigation">
                        Filter
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-inline w-100">
                            <!-- <li class="nav-item">
                                <a class="nav-link filter-link active text-center fs-1" aria-current="page"
                                    href="#">Filters</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link filter-link active text-center fs-1" aria-current="page" href="#"
                                    style="border-top: transparent !important;">Categories</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link filter-link text-dark dropdown-toggle text-center fs-1" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false"
                        data-bs-target="#navbarDropdown1">
                                    Restorative
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1"  id="navbarDropdown1">
                                    <li><a class="dropdown-item fs-2" href="#">Action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item fs-2" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item fs-2" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link filter-link text-dark dropdown-toggle text-center fs-1" href="#"
                                    id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Preventive
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                    <li><a class="dropdown-item fs-2" href="#">Action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item fs-2" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item fs-2" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link filter-link text-dark dropdown-toggle text-center fs-1" href="#"
                                    id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Endodontics
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                    <li><a class="dropdown-item fs-2" href="#">Action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item fs-2" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item fs-2" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link filter-link text-dark dropdown-toggle text-center fs-1" href="#"
                                    id="navbarDropdown4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Periodontics
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
                                    <li><a class="dropdown-item fs-2" href="#">Action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item fs-2" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item fs-2" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link filter-link text-dark dropdown-toggle text-center fs-1" href="#"
                                    id="navbarDropdown5" role="button" style="border-bottom: 1px solid black !important;"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Price
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown5">
                                    <li><a class="dropdown-item fs-2" href="#">Action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item fs-2" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item fs-2" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!-- right side -->

        <!-- <div class="col-lg-9"><div class="mt-2" style="border: 1px solid black; border-right: transparent !important;"><br><br><br></div></div> -->
        <div class="col-lg-9">
            <div class="mt-2"></div>
        </div>

    </div>
</div>
@endsection