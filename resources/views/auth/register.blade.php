<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="{{ asset('image/x-icon" href="img/favicon.html') }}" />
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Icon Css -->
    <link rel="stylesheet" href="{{ asset('plugins/themefisher-font/style.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('plugins/animate-css/animate.css') }}">
    <!-- Magnify Popup -->
    <link rel="stylesheet" href="{{ asset('plugins/magnific-popup/dist/magnific-popup.css') }}">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick-theme.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css
    ">
</head>

<body id="body">
    <section class=" signup">
        <div class="container">
            <div class=" row justify-contnet-center">
                <img src="{{asset('images/logo.png')}}" alt="" height="100px" class="mx-auto mt-3">
            </div> @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
            <div class="row justify-content-center no-gutters ">
                <div class="col-lg-6">
                    <img src="{{ asset('images/about/signup.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <div class="signup-form px-5 pt-3  border-left">
                        <div class="mb-">
                            <h2 class="mb-2">Create Account</h2>

                            <p class="">Already have an account? <a href="{{ route('login') }}" class="text-color">
                                    Login now</a></p>


                        </div>
                        {{-- <form method="POST" action=@if(Auth::user()->type=='admin'{{route('user.create')}})@else{{
                            route('register') }}
                            @endif enctype="multipart/form-data"> --}}
                            <form method="POST" action="{{ route('register')}}" enctype="multipart/form-data">
                                @csrf <div class="form-group mb-2">
                                    <input type="text" placeholder="username"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-0">
                                    <label class="radio-inline ">
                                        <input type="radio" class="option-input radio" name="gender" id="male"
                                            value="male" value="{{ old('gender') }}" checked> Male
                                    </label>
                                    <label class="radio-inline ml-4 ">
                                        <input type="radio" class="option-input radio" name="gender" id="female"
                                            value="female" value="{{ old('gender') }}" />
                                        Female
                                    </label>
                                </div>
                                <div class="mb-2 ">
                                    <input id="userimage" type="file" value="{{ old('userimage') }}"
                                        class="form-control @error('userimage') is-invalid @enderror" name="userimage"
                                        required />
                                    @error('userimage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Email Address"
                                        class="form-control  @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="from-group mb-2">
                                    <select class="form-select form-control @error('type') is-invalid @enderror "
                                        name="type" required name="type">
                                        <option value="0">User</option>
                                        <option value="1">Seller</option>


                                    </select>
                                    @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <input id="password" type="password" placeholder="Password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <input id="password-confirm" type="password" placeholder="Confirm Password"
                                        class="form-control" name="password_confirmation" required
                                        autocomplete="new-password">
                                </div>
                                <button type="submit" class="btn btn-hero btn-rounded btn-lg mt-4 ">
                                    {{ __('Register Now') }}
                                </button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>

</html>