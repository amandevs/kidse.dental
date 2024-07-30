@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="login-container my-4">
                    <div class="card my-5">
                        <div class="card-body shadow">
                            <div class="text-center py-4">
                                <a href="index.php" target="_blank" class="header" href="#">
                                    <img src="{{ asset('images/navbar/logo_r.png')}}" alt="" class="img-fluid logo">
                                </a>
                            </div>
                            @if (session('errors'))
                                <div class="alert alert-danger" role="alert">
                                    {{session('errors')->first()}}
                                </div>
                            @endif
                            <form class="form" method="POST" action="{{ route('login') }}">
                                @csrf
                                
                                <div class="input-group-custom">
                                    <label for="username">Email</label>
                                    </svg>
                                    <input type="text" id="email" name="email" class="form-control form-control-lg"  value="{{old('email')}}" placeholder="Type your Email">
                                     @if ($errors->has('email'))
                                                    @foreach ($errors->get('email') as $error)
                                                          <div class="invalid-feedback">{{$error}}</div>
                                                    @endforeach
                                                @endif
                                </div>
                                <div class="input-group-custom">
                                    <label for="password">Password</label>
                                    <input type="password" id="password"  class="form-control form-control-lg" name="password" value="{{old('password')}}" placeholder="Type your password">
                                      @if ($errors->has('password'))
                                    @foreach ($errors->get('password') as $error)
                                        <div class="invalid-feedback">{{$error}}</div>
                                    @endforeach
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-dark rounded my-3 w-100 py-2" name="submit">Login</button>
                                
                            </form>

                            <div class="my-3 text-center">
                                                <a href="{{route('register')}}" class="btn btn-outline-dark rounded-pill col-5">Signup</a>

                            </div>
                
                            {{-- <h3 class="signup-header">Or signup using</h3>
                
                            <div class="social-icons">
                                <ul class="social-list">
                                    <li class="social-links"><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                                    <li class="social-links"><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                                    <li class="social-links"><a href=""><i class="fa-brands fa-google"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
        
                </div>
            </div>
        </div>
    </div>
@endsection