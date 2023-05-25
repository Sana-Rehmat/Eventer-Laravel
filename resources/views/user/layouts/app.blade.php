<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page_title', 'Eventer | Dashboard')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" />
    <!-- bootstrap.min css -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- Fonts --}}
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    {{-- Stylesheets --}}

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- jquery --}}
    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    {{-- crausel --}}
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- datetyime picker --}}
    <link rel="stylesheet" href="{{ asset('assets/plugins/fullcalendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
    {{-- input --}}
    <link rel="stylesheet" href="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/dropzone/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('chosen/chosen.css') }}">
    <link rel="stylesheet" href="{{ asset('chosen/chosen.min.css') }}">

    <style>
        #user_bio {
            height: 120px !important;
            font-size: 12px;
        }

        body {
            color: #213546;
            background: #ffffff;
            font-family: Arial, Helvetica, sans-serif;
        }

        .title {
            position: relative;
            margin-top: 30px;
            width: 100%;
            text-align: center;
        }

        .timeline {
            position: relative;
            width: 100%;
            padding: 30px 0;
        }

        .timeline .timeline-container {
            position: relative;
            width: 100%;
        }

        .timeline .timeline-end,
        .timeline .timeline-start,
        .timeline .timeline-year {
            position: relative;
            width: 100%;
            text-align: center;
            z-index: 1;
        }

        .timeline .timeline-end p,
        .timeline .timeline-start p,
        .timeline .timeline-year p {
            display: inline-block;
            /* padding: 10px; */
            /* width: 80px; */
            /* height: 80px; */
            /* margin: 100px; */
            padding: 30px 10px;
            text-align: center;
            background: linear-gradient(#ED1B79, #b82667);
            border-radius: 20px;
            box-shadow: 0 0 5px rgba(0, 0, 0, .4);
            color: #ffffff;
            font-size: 14px;
            text-transform: uppercase;
        }

        .timeline .timeline-year {
            margin: 30px 0;
        }

        .timeline .timeline-continue {
            position: relative;
            width: 100%;
            padding: 60px 0;
        }

        .timeline .timeline-continue::after {
            position: absolute;
            content: "";
            width: 1px;
            height: 100%;
            top: 0;
            left: 50%;
            margin-left: -1px;
            background: #ED1B79;
        }

        .timeline .row.timeline-left,
        .timeline .row.timeline-right .timeline-date {
            text-align: right;
        }

        .timeline .row.timeline-right,
        .timeline .row.timeline-left .timeline-date {
            text-align: left;
        }

        .timeline .timeline-date {
            font-size: 14px;
            font-weight: 600;
            margin: 41px 0 0 0;
        }

        .timeline .timeline-date::after {
            content: '';
            display: block;
            position: absolute;
            width: 14px;
            height: 14px;
            top: 45px;
            background: linear-gradient(#ED1B79, #b82667);
            box-shadow: 0 0 5px rgba(0, 0, 0, .4);
            border-radius: 15px;
            z-index: 1;
        }

        .timeline .row.timeline-left .timeline-date::after {
            left: -7px;
        }

        .timeline .row.timeline-right .timeline-date::after {
            right: -7px;
        }

        .timeline .timeline-box,
        .timeline .timeline-launch {
            position: relative;
            display: inline-block;
            margin: 15px;
            padding: 20px;
            border: 1px solid #dddddd;
            border-radius: 6px;
            background: #ffffff;
        }

        .timeline .timeline-launch {
            width: 100%;
            margin: 15px 0;
            padding: 0;
            border: none;
            text-align: center;
            background: transparent;
        }

        .timeline .timeline-box::after,
        .timeline .timeline-box::before {
            content: '';
            display: block;
            position: absolute;
            width: 0;
            height: 0;
            border-style: solid;
        }

        .timeline .row.timeline-left .timeline-box::after,
        .timeline .row.timeline-left .timeline-box::before {
            left: 100%;
        }

        .timeline .row.timeline-right .timeline-box::after,
        .timeline .row.timeline-right .timeline-box::before {
            right: 100%;
        }

        .timeline .timeline-launch .timeline-box::after,
        .timeline .timeline-launch .timeline-box::before {
            left: 50%;
            margin-left: -10px;
        }

        .timeline .timeline-box::after {
            top: 26px;
            border-color: transparent transparent transparent #ffffff;
            border-width: 10px;
        }

        .timeline .timeline-box::before {
            top: 25px;
            border-color: transparent transparent transparent #dddddd;
            border-width: 11px;
        }

        .timeline .row.timeline-right .timeline-box::after {
            border-color: transparent #ffffff transparent transparent;
        }

        .timeline .row.timeline-right .timeline-box::before {
            border-color: transparent #dddddd transparent transparent;
        }

        .timeline .timeline-launch .timeline-box::after {
            top: -20px;
            border-color: transparent transparent #dddddd transparent;
        }

        .timeline .timeline-launch .timeline-box::before {
            top: -19px;
            border-color: transparent transparent #ffffff transparent;
            border-width: 10px;
            z-index: 1;
        }

        .timeline .timeline-box .timeline-icon {
            position: relative;
            width: 40px;
            height: auto;
            float: left;
        }

        .timeline .timeline-icon i {
            font-size: 25px;
            color: #ED1B79;
        }

        .timeline .timeline-box .timeline-text {
            position: relative;
            width: calc(100% - 40px);
            float: left;
        }

        .timeline .timeline-launch .timeline-text {
            width: 100%;
        }

        .timeline .timeline-text h3 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 3px;
        }

        .timeline .timeline-text p {
            font-size: 14px;
            font-weight: 400;
            margin-bottom: 0;
        }

        @media (max-width: 768px) {
            .timeline .timeline-continue::after {
                left: 40px;
            }

            .timeline .timeline-end,
            .timeline .timeline-start,
            .timeline .timeline-year,
            .timeline .row.timeline-left,
            .timeline .row.timeline-right .timeline-date,
            .timeline .row.timeline-right,
            .timeline .row.timeline-left .timeline-date,
            .timeline .timeline-launch {
                text-align: left;
            }

            .timeline .row.timeline-left .timeline-date::after,
            .timeline .row.timeline-right .timeline-date::after {
                left: 47px;
            }

            .timeline .timeline-box,
            .timeline .row.timeline-right .timeline-date,
            .timeline .row.timeline-left .timeline-date {
                margin-left: 55px;
            }

            .timeline .timeline-launch .timeline-box {
                margin-left: 0;
            }

            .timeline .row.timeline-left .timeline-box::after {
                left: -20px;
                border-color: transparent #ffffff transparent transparent;
            }

            .timeline .row.timeline-left .timeline-box::before {
                left: -22px;
                border-color: transparent #dddddd transparent transparent;
            }

            .timeline .timeline-launch .timeline-box::after,
            .timeline .timeline-launch .timeline-box::before {
                left: 30px;
                margin-left: 0;
            }
        }

        .invalid-feedback {
            display: block;
        }

        .images-preview-div img {
            padding: 10px;
            width: 150px !important;
        }

        #service_actions {
            font-size: 20px;

        }

        /*
        .slider {
            width: auto;
            margin: 30px 50px 50px;
        }

        .slider .slick-slide {
            background: #292e3e;
            color: white;
            padding: 40px 0;
            font-size: 30px;
            font-family: "Arial", "Helvetica";
            text-align: center;
        }

        .slider .slick-prev:before,
        .slider .slick-next:before {
            color: #292e3e;
        }

        .slider .slick-dots {
            bottom: -30px;
        }

        .slider .slick-slide:nth-child(odd) {
            background: #57C09F;
        } */
        /* ==== Main CSS === */
        .img-fill {
            width: 100%;
            height: 200px;
            display: block;
            overflow: hidden;
            position: relative;
            text-align: center
        }

        .img-fill img {
            min-height: 200px;
            min-width: 100%;
            position: relative;
            display: inline-block;
            max-width: none;
        }

        .blocks-box,
        .slick-slider {
            margin: 0;
            padding: 0 !important;
        }

        .slick-slide {
            float: left
                /* If RTL Make This Right */
            ;
            padding: 0;
        }

        .Modern-Slider .item .info>div {
            display: inline-block !important;
            vertical-align: middle;
        }

        .Modern-Slider .NextArrow {
            position: absolute;
            top: 50%;
            right: 0px;
            width: 45px;
            height: 45px;
            background: transparent;
            border: 0 none;
            margin-top: -22.5px;
            text-align: center;
            font: 20px/45px FontAwesome;
            color: rgba(250, 250, 250, 0.747);
            z-index: 5;
        }

        .Modern-Slider .NextArrow:before {
            content: '\f105';
        }

        .Modern-Slider .PrevArrow {
            position: absolute;
            top: 50%;
            left: 0px;
            width: 45px;
            height: 45px;
            background: transparent;
            border: 0 none;
            margin-top: -22.5px;
            text-align: center;
            font: 20px/45px FontAwesome;
            color: rgba(250, 250, 250, 0.747);
            z-index: 5;
        }

        .Modern-Slider .PrevArrow:before {
            content: '\f104';
        }


        .Modern-Slider .item.slick-active {
            animation: Slick-FastSwipeIn 1s both;
        }

        /* .Modern-Slider {background:#000;} */

        /* ==== Slider Image Transition === */
        @keyframes Slick-FastSwipeIn {
            0% {
                transform: rotate3d(0, 1, 0, 150deg) scale(0) perspective(400px);
            }

            100% {
                transform: rotate3d(0, 1, 0, 0deg) scale(1) perspective(400px);
            }
        }

        @-webkit-keyframes ProgressDots {
            from {
                width: 0px;
            }

            to {
                width: 100%;
            }
        }

        @keyframes ProgressDots {
            from {
                width: 0px;
            }

            to {
                width: 100%;
            }
        }

        .img-wrap {
            position: relative;
            /* width: 200px !important; */
        }

        .img-wrap .close {
            position: absolute;
            top: -65px;
            bottom: 100%;
            right: 8px;
            z-index: 100;
            color: red;

        }

        .chosen-container-multi .chosen-choices li.search-choice span {
            background-color: #3e08b9 !important;
            color: #fff;
            display: inline-block;
            font-size: 14px;
            font-weight: normal;
            margin-right: 2px;
            padding: 11px 15px;
            border-radius: 0;
        }


        .chosen-container-multi .chosen-choices li.search-choice {
            background-color: #3e08b9 !important;
            background-image: none !important;
        }

        .chosen-container-multi .chosen-choices li.search-field input[type=text] {
            border-color: #dcdcdc !important;
            box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
            min-height: 46px;
        }

        .pro-content .title {
            height: 35px !important;
        }
    </style>
</head>

<div class="">
    <header class="">
        <nav class="navbar navbar-expand-md  bg-white ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" width="100px" alt="meetub"
                        class="img-fluid logo-b ">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
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
                                        <a class="dropdown-item"
                                            href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    @elseif(auth()->user()->type == 'seller')
                                        <a class="dropdown-item"
                                            href="{{ route('seller.index') }}">{{ __('Dashboard') }}</a>
                                    @else
                                        <a class="dropdown-item"
                                            href="{{ route('buyer.index') }}">{{ __('Dashboard') }}</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
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
    {{-- <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Dashboard</h2>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-xl-3 theiaStickySidebar">
                    <div class="profile-sidebar">
                        <div class="widget-profile pro-widget-content">
                            <div class="profile-info-widget">
                                <a href="#" class="booking-doc-img">
                                    {{-- <img src="assets/img/speakers/speaker-thumb-02.jpg" alt="User Image"> --}}
                                    <img src="{{ asset('images/users/' . Auth::user()->userimage) }}"
                                        alt="">
                                </a>
                                <div class="profile-det-info">
                                    <h3>{{ Auth::user()->name }}</h3>
                                    <div class="customer-details">
                                        <h5 class="mb-0">MCA, BE - 10+ Years Experience</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-widget">
                            <nav class="dashboard-menu">
                                <ul>
                                    <li class="active">
                                        <a href="speaker-dashboard.html">
                                            <i class="fas fa-columns"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
                                    <li><a href="{{ route('profile.index') }}"><i
                                                class="fas fa-user"></i><span>Profile</span></a></li>
                                    <ul id="accordion" class="accordion">
                                        <li class="default open">
                                            <div class="link"><i class="fas fa-user-cog"></i>Profile Settings<i
                                                    class="fa fa-chevron-down"></i></div>
                                            <ul class="submenu">
                                                <li><a href="{{ route('education.index') }}">Education</a></li>
                                                <li><a href="{{ route('award.index') }}">Awards</a></li>
                                                <li><a href="{{ route('experience.index') }}">Experience</a></li>
                                                {{-- <li><a href="{{route('social.index')}}">Social Links</a></li> --}}
                                            </ul>
                                        </li>
                                        {{-- <li>
                                            <div class="link"><i class="fa fa-paint-brush"></i>Diseño web<i class="fa fa-chevron-down"></i></div>
                                            <ul class="submenu">
                                                <li><a href="#">Photoshop</a></li>
                                                <li><a href="#">HTML</a></li>
                                                <li><a href="#">CSS</a></li>
                                                <li><a href="#">Maquetacion web</a></li>
                                            </ul>
                                        </li> --}}

                                        {{-- <li>
                                            <div class="link"><i class="fa fa-mobile"></i>Diseño responsive<i class="fa fa-chevron-down"></i></div>
                                            <ul class="submenu">
                                                <li><a href="#">Tablets</a></li>
                                                <li><a href="#">Dispositivos mobiles</a></li>
                                                <li><a href="#">Medios de escritorio</a></li>
                                                <li><a href="#">Otros dispositivos</a></li>
                                            </ul>
                                        </li> --}}
                                        <li>
                                            <div class="link">
                                                <i class="fas fa-calendar-check"></i>
                                                <span>Services</span><i class="fa fa-chevron-down"></i>
                                            </div>
                                            <ul class="submenu">
                                                <li><a href="{{ route('event.create') }}">Create Service</a></li>
                                                <li><a href="{{ route('event.index') }}">Srevices List</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    {{-- <li>
                                        <a href="{{ route('event.index') }}">
                                            <i class="fas fa-calendar-check"></i>
                                            <span>Events</span>
                                        </a>
                                    </li> --}}
                                    <li>
                                        <a href="my-customers.html">
                                            <i class="fas fa-user-injured"></i>
                                            <span>My customers</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="schedule-timings.html">
                                            <i class="fas fa-hourglass-start"></i>
                                            <span>Schedule Timings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="invoices.html">
                                            <i class="fas fa-file-invoice"></i>
                                            <span>Invoices</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="reviews.html">
                                            <i class="fas fa-star"></i>
                                            <span>Reviews</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="chat-speaker.html">
                                            <i class="fas fa-comments"></i>
                                            <span>Message</span>
                                            <small class="unread-msg">23</small>
                                        </a>
                                    </li>
                                    <li>
                                        {{-- <a href="{{ route('seller.profile') }}">
                                            <i class="fas fa-user-cog"></i>
                                            <span>Profile Settings</span>
                                        </a> --}}
                                    </li>
                                    <li>
                                        <a href="{{ route('social.index') }}">
                                            <i class="fas fa-share-alt"></i>
                                            <span>Social Media</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="speaker-change-password.html">
                                            <i class="fas fa-lock"></i>
                                            <span>Change Password</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html">
                                            <i class="fas fa-sign-out-alt"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-8 col-xl-9">
                    @yield('user_content')
                </div>
            </div>
            {{-- <script data-cfasync="false" src="http://cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
            <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
            <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
            </script>

            <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
            <script src="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
            <script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
            {{-- <script src="{{ asset('assets/plugins/dropzone/dropzone.min.js') }}"></script> --}}
            <script src="{{ asset('assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>
            <script src="{{ asset('assets/js/profile-settings.js') }}"></script>
            {{-- <script src="{{ asset('assets/js/moment.min.js') }}"></script> --}}
            <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
            <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
            {{-- <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script> --}}
            <script src="{{ asset('assets/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
            <script src="{{ asset('assets/plugins/fullcalendar/jquery.fullcalendar.js') }}"></script>
            <script src="{{ asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"
                integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="{{ asset('chosen/chosen.jquery.min.js') }}"></script>
            <script src="{{ asset('chosen/chosen.proto.min.js') }}"></script>
            {{-- <script src="{{ asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script> --}}
            <script src="{{ asset('assets/js/script.js') }}"></script>
            <script>
                function countChar(val) {
                    var len = val.value.length;
                    if (len >= 225) {
                        val.value = val.value.substring(0, 225);
                    } else {
                        $('#charNum').text(225 - len);
                    }
                };

                function countChar_des(val) {
                    var length = val.value.length;
                    if (length >= 30) {
                        val.value = val.value.substring(0, 30);
                    } else {
                        $('#charNum_des').text(30 - length);
                    }
                };

                $(".chosen-select").chosen({
                    disable_search_threshold: 10,
                    max_selected_options: 5,
                    no_results_text: "Oops, nothing found!",
                    width: "100%",

                });


                $(document).ready(function() {

                    $(".Modern-Slider").slick({
                        autoplay: false,
                        // autoplaySpeed:10000,
                        speed: 600,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        pauseOnHover: false,
                        dots: false,
                        pauseOnDotsHover: false,
                        // cssEase:'linear',
                        // fade:true,
                        draggable: false,
                        prevArrow: '<button class="PrevArrow"></button>',
                        nextArrow: '<button class="NextArrow"></button>',
                    });


                })
                $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                    $('.Modern-Slider').slick('setPosition');
                })
                $(function() {
                    // Multiple images preview with JavaScript
                    var previewImages = function(input, imgPreviewPlaceholder) {
                        if (input.files) {
                            var filesAmount = input.files.length;
                            for (i = 0; i < filesAmount; i++) {
                                var reader = new FileReader();
                                reader.onload = function(event) {
                                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(
                                        imgPreviewPlaceholder);
                                }
                                reader.readAsDataURL(input.files[i]);
                            }
                        }
                    };
                    $('#serviceimages').on('change', function() {
                        previewImages(this, 'div.images-preview-div');
                    });
                });
            </script>

            <script>
                jQuery(document).ready(function() {
                    // $(".carousel-indicators li:first").addClass("active");
                    $(".carousel-inner .item:first").addClass("active");
                });
                // Education Update

                $(document).ready(function() {
                    $('#edit_education').on('click', function() {
                        var education_id = this.value;
                        $('#UpdateEducation').modal('show');
                        $.ajax({
                            type: "GET",
                            url: "/education/update/" + education_id,
                            success: function(response) {
                                console.log(response);
                                $('#Degree').val(response.education.Degree)
                                $('#institute').val(response.education.institute)
                                $('#start_year').val(response.education.start_year)
                                $('#end_year').val(response.education.end_year)
                                $('#education_id').val(education_id)
                            }
                        });
                        // alert(education_id);
                        console.log(experience_id)
                    });
                })
                // Experience Update
                $(document).ready(function() {
                    $('#edit_experience').on('click', function() {
                        var experience_id = this.value;
                        $('#UpdateExperience').modal('show');
                        $.ajax({
                            type: "GET",
                            url: "/experience/update/" + experience_id,
                            success: function(response) {
                                console.log(response);
                                $('#designation').val(response.experience.designation)
                                $('#organization').val(response.experience.organization)
                                $('#start').val(response.experience.start)
                                $('#end').val(response.experience.end)
                                $('#experience_id').val(experience_id)
                                console.log(experience_id)
                            }
                        });
                        // alert(education_id);
                    });
                })
                // Award Update
                $(document).ready(function() {
                    $('#edit_award').on('click', function() {
                        var award_id = this.value;
                        $('#UpdateAward').modal('show');
                        $.ajax({
                            type: "GET",
                            url: "/award/update/" + award_id,
                            success: function(response) {
                                console.log(response);
                                $('#award').val(response.award.award)
                                $('#year').val(response.award.year)
                                $('#award_id').val(award_id)
                            }
                        });
                        // alert(education_id);
                        console.log(education_id)
                    });
                })
                // Social Update
                $(document).ready(function() {
                    $('#edit_social').on('click', function() {
                        var social_id = this.value;
                        $('#UpdateSocial').modal('show');
                        $.ajax({
                            type: "GET",
                            url: "/social/update/" + social_id,
                            success: function(response) {
                                console.log(response);
                                $('#fb').val(response.social.fb)
                                $('#insta').val(response.social.insta)
                                $('#twitter').val(response.social.twitter)
                                $('#printrest').val(response.social.printrest)
                                $('#youtube').val(response.social.youtube)
                                $('#linkidin').val(response.social.linkidin)
                                $('#social_id').val(social_id)
                            }
                        });
                        // alert(education_id);
                        console.log(social_id)
                    });
                })
                // Dropdown
                $(function() {
                    var Accordion = function(el, multiple) {
                        this.el = el || {};
                        this.multiple = multiple || false;

                        // Variables privadas
                        var links = this.el.find('.link');
                        // Evento
                        links.on('click', {
                            el: this.el,
                            multiple: this.multiple
                        }, this.dropdown)
                    }

                    Accordion.prototype.dropdown = function(e) {
                        var $el = e.data.el;
                        $this = $(this),
                            $next = $this.next();

                        $next.slideToggle();
                        $this.parent().toggleClass('open');

                        if (!e.data.multiple) {
                            $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
                        };
                    }

                    var accordion = new Accordion($('#accordion'), false);
                });
            </script>
            </body>

</html>
