@extends('layouts.main')
@section('content')
    <div>
        <div class="container">

            <div class="row justify-content-center ">
                <div class="col-md-5">
                    <div class="card shadow my-5 p-1">
                        <div class="card-body ">
                            <div class="text-center my-4">
                                <a href="/" target="_blank" class="header" href="#">
                                    <img src="{{ asset('images/navbar/logo_r.png')}}" alt="" class="img-fluid logo">
                                </a>
                            </div>
                            <form class="form" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="input-group-custom mb-3">
                                    <label class="mb-2" for="username">Name</label>
                                    </svg>
                                    <input type="text" id="username" name="name" class="block mt-1 w-full form-control" value="{{old('name')}}" placeholder="Type your Name" required autofocus autocomplete="name">
                                        @if ($errors->has('password'))
                                        @foreach ($errors->get('password') as $error)
                                            <div class="invalid-feedback">{{$error}}</div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="input-group-custom mb-3">
                                    <label class="mb-2" for="username">Email</label>
                                    </svg>  
                                    <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="Type your Email" class="form-control">
                                    @if ($errors->has('password'))
                                    @foreach ($errors->get('password') as $error)
                                        <div class="invalid-feedback">{{$error}}</div>
                                    @endforeach
                                    @endif
                                </div>
                                <div class="input-group-custom mb-3">
                                    <label class="mb-2" for="username">Contact No.</label>
                                    </svg>
                                    <input type="number" id="contact" name="contact" value="{{old('contact')}}" class="form-control" placeholder="Type your Contact No."maxlength="10" pattern="\d{10}" min="1000000000" max="9999999999">
                                    @if ($errors->has('password'))
                                    @foreach ($errors->get('password') as $error)
                                        <div class="invalid-feedback">{{$error}}</div>
                                    @endforeach
                                    @endif
                                </div>
                                <div class="input-group-custom mb-3">
                                    <label class="mb-2" for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Create a password">
                                    
                                </div>
                                <div class="input-group-custom mb-3">
                                    <label class="mb-2" for="password">Password</label>
                                    <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" placeholder="Create a password">
                                    
                                </div>
                                <div class="my-3 pt-2">
                                    <button type="submit" class="btn btn-dark rounded w-100 py-2"  name="submit">Signup</button>
                                </div>
                            </form>

                            <div class="text-center my-3">
                                <a href="{{route('login')}}" class="btn btn-outline-dark rounded-pill col-5">Login</a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            
            {{-- <h3 class="signup-header">Or signup using</h3>
              <div>
                <a href="">Forgot your password?</a>
            </div>

            <div class="social-icons">
                <ul class="social-list">
                    <li class="social-links"><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                    <li class="social-links"><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                    <li class="social-links"><a href=""><i class="fa-brands fa-google"></i></a></li>
                </ul>
            </div> --}}

        </div>
    </div>
@endsection