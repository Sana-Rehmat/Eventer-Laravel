<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page_title', 'Eventer | Home')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" />
    {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script> --}}
    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="{{asset('assets/js/moment.min.js')}}"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Icon Css -->
    <link rel="stylesheet" href="{{ asset('plugins/themefisher-font/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('plugins/animate-css/animate.css') }}">
    <!-- Magnify Popup -->
    <link rel="stylesheet" href="{{ asset('plugins/magnific-popup/dist/magnific-popup.css') }}">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{asset('slick-1.8.1/slick-1.8.1/slick/slick-theme.css')}}" />
    <link rel="stylesheet" href="{{asset('slick-1.8.1/slick-1.8.1/slick/slick.css')}}" />
    <script src="{{asset('slick-1.8.1/slick-1.8.1/slick/slick.js')}}"></script>
    <script src="{{asset('slick-1.8.1/slick-1.8.1/slick/slick.min.js')}}"></script>
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">


</head>
<style>
    .comments-reply li {
        text-decoration: none;
        list-style: none;
    }

    table.table td h2 {
        display: inline-block;
        font-size: inherit;
        font-weight: 400;
        margin: 0;
        padding: 0;
        vertical-align: middle;
    }

    table.table td h2.table-avatar {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        font-size: inherit;
        font-weight: 400;
        margin: 0;
        padding: 0;
        vertical-align: middle;
        white-space: nowrap;
    }

    table.table td h2 a {
        color: #272b41;
    }

    table.table td h2 a:hover {
        color: #ed1b79;
    }

    table.table td h2 span {
        color: #888;
        display: block;
        font-size: 12px;
        margin-top: 3px;
    }

    /* rating */
    .rating-css div {
        color: #ffe400;
        font-size: 10px;
        font-family: sans-serif;
        font-weight: 800;
        /* text-align: center; */
        text-transform: uppercase;
        padding: 20px 0;
    }

    .rating-css input {
        display: none;
    }

    .rating-css input+label {
        font-size: 40px;
        text-shadow: 1px 1px 0 #8f8420;
        cursor: pointer;
    }

    .rating-css input:checked+label~label {
        color: #b4afaf;
    }

    .rating-css label:active {
        transform: scale(0.8);
        transition: 0.3s ease;
    }

    .tags {
        border-top: #d7d7da 1px solid;
        /* border-bottom: #d7d7da 1px solid; */
        padding: 10px;
    }

    .tags button:hover,
    .tags a:hover {
        background-color: #3e08b9;
        color: #fff;
        cursor: pointer;
        font-weight: 600;
    }

    .submit,
    .tags a {
        border: #d7d7da 1px solid;
        padding: 5px;
        background: inherit;
        border-radius: 5px;
    }

    .no_reviews {
        color: #b4afaf !important;
    }
</style>

<body id="body">
    <div id="app">
        <!-- Navigation Start -->
        <header class="header-bar bg-white fixed-top">
            <nav class="navbar navbar-expand-md  ">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('images/logo.png') }}" width="100px" alt="meetub" class="img-fluid logo-b ">
                        {{-- {{ config('app.name', 'Laravel') }} --}}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto main-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown1" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Services
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    @foreach ($categories as $category )
                                    <a class="dropdown-item" href="{{ route('event.service',$category->id) }}">{{
                                        $category->name }}</a>
                                    @endforeach
                                </div>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li> --}}
                        </ul>
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                            @auth
                            @if (auth()->user()->type == 'admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif
                            @if (auth()->user()->type == 'user')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif
                            @endauth
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="{{ asset('images/users/' . Auth::user()->userimage) }}" width="50px"
                                        height="50px" class="rounded-circle" alt="">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @if (auth()->user()->type == 'admin')
                                    <a class="dropdown-item" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    @elseif(auth()->user()->type == 'seller')
                                    <a class="dropdown-item" href="{{ route('profile.index') }}">{{ __('Dashboard')
                                        }}</a>
                                    @else
                                    <a class="dropdown-item" href="{{ route('orderlist') }}">{{ __('Orders List') }}</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Navigation End -->

        <main class="py-5 mt-5">
            @yield('content')
        </main>