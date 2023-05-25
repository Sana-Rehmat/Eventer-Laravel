<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('Admin Dashboard', 'Update User') }}</title>
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
    <!-- Bootstrap Styles -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> --}}
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <style>
        ::-webkit-file-upload-button {
            background: #ff007a !important;
            margin: 0;
            color: wheat;
            height: 100%;
            border: none;
            border-top-right-radius: 6px;
            border-bottom-right-radius: 6px;
            margin-right: 5px;
        }

        input[type="file"] {
            padding: 0 0 !important;
        }

        @keyframes click-wave {
            0% {
                height: 20px;
                width: 20px;
                opacity: 0.15;
                position: relative;
            }

            100% {
                height: 100px;
                width: 100px;
                margin-left: -40px;
                margin-top: -40px;
                opacity: 0;
            }
        }

        .option-input {
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            -o-appearance: none;
            appearance: none;
            position: relative;
            top: 5px;
            right: 0;
            bottom: 0;
            left: 0;
            height: 20px;
            width: 20px;
            transition: all 0.15s ease-out 0s;
            background: #cbd1d8;
            border: none;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            margin-right: 0.5rem;
            outline: none;
            position: relative;
            z-index: 1000;
            /*  */
        }

        .option-input:hover {
            background: #9faab7;
        }

        .option-input:checked {
            background: #ff007a;
        }

        .option-input:checked::before {
            height: 20px;
            width: 20px;
            position: absolute;
            content: "\f111";
            font-family: "Font Awesome 5 Free";
            display: inline-block;
            font-size: 17px;
            text-align: center;
            line-height: 20px;
        }

        .option-input:checked::after {
            -webkit-animation: click-wave 0.25s;
            -moz-animation: click-wave 0.25s;
            animation: click-wave 0.25s;
            background: #ff007a;
            content: '';
            display: block;
            position: relative;
            z-index: 100;
        }

        .option-input.radio {
            border-radius: 50%;
        }

        .option-input.radio::after {
            border-radius: 50%;
        }
    </style>
</head>

<body id="body">

    <section class=" signup">
        <div class="container">
            {{-- <div class="box-shadow"> --}}
            <div class="row justify-content-center no-gutters ">
                <div class="col-lg-6">
                    <img src="{{ asset('images/about/signup.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <div class="signup-form px-5 pt-2  border-left">
                        <div class="mb-">
                            <h2 class="mb-1">Edit Account</h2>
                            <p class="">Already have an account? <a href="{{ route('login') }}"
                                    class="text-color"> Login </a></p>
                            <p class="mt-n3">Create an Account<a href="{{ route('register') }}"
                                    class="text-color"> Register now</a></p>
                        </div>
                        <form method="POST" action="{{route('user.update',$user->id)}}" enctype="multipart/form-data">
                            @csrf <div class="form-group mb-2">
                                <input type="text" placeholder="username"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{$user->name}}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-0">
                                <label class="radio-inline ">
                                    <input type="radio" class="option-input radio" name="gender" id="male" value="male"
                                    {{ ($user->gender=="male")? "checked" : "" }} checked> Male
                                </label>
                                <label class="radio-inline ml-4 ">
                                    <input type="radio" class="option-input radio" name="gender" id="female"
                                        value="female"  {{ ($user->gender=="female")? "checked" : "" }} />
                                    Female
                                </label>
                            </div>
                            <div class="mb-2 ">
                                <input id="userimage" type="file"
                                    class="form-control @error('userimage') is-invalid @enderror" name="userimage"
                                     value="{{$user->userimage}}">
                                    <img src="/images/users/{{ $user->userimage }}" class="img-fluid py-2" width="100px" height="100px">

                                @error('userimage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Enter Email Address"
                                    class="form-control  @error('email') is-invalid @enderror" name="email"
                                    value="{{$user->email}}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="from-group mb-2">

                                <select class="form-select form-control @error('type') is-invalid @enderror "
                                    name="type" required name="type">
                                    <option value="0" {{ $user->type == "user" ? 'selected' : '' }}>User</option>
                                    <option value="1" {{ $user->type == "seller" ? 'selected' : '' }}>Seller</option>
                                    <option value="2" {{ $user->type == "admin" ? 'selected' : '' }}>Admin</option>
                                </select>
                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <button type="submit" class="btn btn-hero btn-rounded btn-lg mt-4 ">
                                {{ __('Update Now') }}
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
