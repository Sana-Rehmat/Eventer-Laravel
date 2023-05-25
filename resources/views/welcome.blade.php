@extends('layouts.app')
@section('page_title')
    Home
@endsection
@section('content')
    <!--  preloader start -->
    <div id="tb-preloader">
        <div class="tb-preloader-wave"></div>
    </div>
    <!-- preloader end -->
    <!-- Section START-->
    <section class="section-banner d-flex align-items-center" style="background-image: url(images/banner/banner-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mr-auto">
                    <div class="banner-content">
                        {{-- <span>November 12, at 10.00am</span> --}}
                        <h2 class=" ">Find the perfect
                            <span id="main_title">Services</span><br> for your Events
                        </h2>

                        <form action="{{ route('search') }}" class="" method="POST" role="search">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-lg" placeholder="Search Here" name="search">
                                <button type="submit" class="input-group-text btn btn-hero "><i
                                        class="bi bi-search me-2"></i>
                                    Search</button>
                            </div>
                        </form>
                        {{-- <a href="#" class="btn btn-hero btn-rounded">Discover more</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section END-->
    <section class="overflow-hidden counter-wrapper pt-4 pb-5">
        <div class="container">
            <div class="counter-inner">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="counter-stat">
                            <h2 class="font-weight-light"><span class="font-weight-bold">Count the days</span> <br>until
                                Event starts</h2>
                        </div>
                    </div>
                    {{-- <div id="simple-timer" class="syotimer"></div> --}}
                </div>
            </div>
        </div>
    </section>
    <section class="section about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="about-img position-relative">
                        <img src="images/about/h1-gallery-img-7.jpg" alt="" class="img-fluid w-100">
                        <div class="img-block">
                            <img src="images/about/main-home-img-1.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="about-content-wrap mt-5 mt-md-0">
                        <span class="stroke-text">eventer</span>
                        <div class="ml-90">
                            <h3 class="text-lg mb-3 mt-3">The New Era of Event Companies </h3>
                            <p>Lorem ipsum proin gravida nibh vel velit auctor aliquet. Aeneansollicitudin, lorem quis
                                bibendum auctonisi elit consequat ipsum nec sagittis sem nibh id elit. Duis sed odio sit
                                amet nibh vulputate cursusa sit nibh vel velit.</p>
                            {{-- <a href="#" class="btn btn-hero btn-rounded mt-3">Discover Services </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section cta-wrap ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="cta-content">
                        {{-- <span class="lead">10% Sale offer for early birds</span> --}}
                        <h2 class="mt-3 mb-4 text-md">A Whole Wold of <span class="text-color"> Event Organizers </span>
                            <br>&
                            Companies <span class="text-color">at </span>your Fingertips.
                        </h2>
                        {{-- <a href="#" class="btn btn-secondary btn-rounded">Discover Frelancers</a> --}}
                    </div>
                </div>
                <div class="col-lg-5 mt-5 mt-lg-0 d-none d-lg-block">
                    <img src="images/banner/rev-slider-09.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- Section START-->
    <section id="section-feature" class="section-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box active">
                        {{-- <i class="tf-ion-android-microphone"></i> --}}
                        <i class="fa-brands fa-servicestack"></i>
                        <h4 class="mt-3 mb-3">Post a Service</h4>
                        <div class="divider"></div>
                        <p>It’s free and easy to post a job. Simply fill in a title, description and budget within minutes.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box mb-md-3 mt-3">
                        <i class="fa fa-users-line"></i>
                        {{-- <i class="tf-ion-android-globe"></i> --}}
                        <h4 class="mt-3 mb-3">Choose freelancers</h4>
                        <div class="divider"></div>
                        <p>No Event is too big or too small. We've got freelancers for events of any size or budget, across
                            the world. No Event is too complex. We can get it done! </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box mt-3 mt-lg-5">
                        {{-- <i class="tf-ion-android-share"></i> --}}
                        <i class="fa-solid fa-shield-halved"></i>
                        <h4 class="mt-3 mb-3">Pay safely</h4>
                        <div class="divider"></div>
                        <p>Only pay for work when it has been completed and you're 100% satisfied with the quality using our
                            milestone payment system.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section END-->
    {{-- <section class="section-schedule section-bottom ">
        <div class="container">
            <div class="row section-heading">
                <div class="col-lg-6">
                    <div class="heading">
                        <span class="stroke-text">Schedule</span>
                        <div class="pl-90">
                            <h2 class="mt-2">Topic Discussion</h2>
                            <p>Accusantium provident suscipit dicta magni dolor deserunt nam obcaecati non veritatis optio.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    {{-- <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="nav nav-pills nav-fill" id="TopicTab" role="tablist">
                        <a class="nav-item nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">
                            <h2>Day 1</h2>
                            <p>13 Nov ,2019 [09.00am - 04.00pm]</p>
                        </a>
                        <a class="nav-item nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">
                            <h2>Day 2</h2>
                            <p>13 Nov ,2019 [09.00am - 04.00pm]</p>
                        </a>
                        <a class="nav-item nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                            aria-controls="contact" aria-selected="false">
                            <h2>Day 3</h2>
                            <p>13 Nov ,2019 [09.00am - 04.00pm]</p>
                        </a>
                    </nav>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <ul class="mt-5 time-table pl-0 list-unstyled">
                                <li class="d-md-flex align-items-center justify-content-between bg-light p-4 mb-3">
                                    <h4 class="time text-color">9.00am</h4>
                                    <div class="content">
                                        <h3 class="mb-3">Introduction of material Design</h3>
                                        <span class="h6 ">By Risabh moinul</span>
                                        <p>CEo of themefisher</p>
                                    </div>
                                    <div class="content-img text-lg-right">
                                        <img src="images/about/wordpress.png" alt="" class="img-fluid">
                                    </div>
                                </li>
                                <li class="d-md-flex align-items-center justify-content-between bg-light p-4 mb-3">
                                    <h4 class="time text-color">12.20pm</h4>
                                    <div class="content">
                                        <h3 class="mb-3">Marketing Matters in design area</h3>
                                        <span class="h6">By Risabh moinul</span>
                                        <p>CEo of themefisher</p>
                                    </div>
                                    <div class="content-img text-lg-right">
                                        <img src="images/about/big-data.png" alt="" class="img-fluid">
                                    </div>
                                </li>
                                <li class="d-md-flex align-items-center justify-content-between bg-light p-4 mb-3">
                                    <h4 class="time text-color">2.20pm</h4>
                                    <div class="content">
                                        <h3 class="mb-3">Launch Break</h3>
                                        <p>Doloribus veritatis, placeat, laborum amet voluptates cupiditate sapiente,
                                            reiciendis nemo
                                            recusandae quo mollitial.</p>
                                    </div>
                                    <div class="content-img text-lg-right">
                                        <img src="images/about/lunch.jpg" alt="" class="img-fluid">
                                    </div>
                                </li>
                                <li class="d-md-flex align-items-center justify-content-between bg-light p-4 ">
                                    <h4 class="time text-color">02.40pm</h4>
                                    <div class="content">
                                        <h3 class="mb-3 ">Cultures of Creativity</h3>
                                        <span class="h6">By Risabh moinul</span>
                                        <p>CEo of themefisher</p>
                                    </div>
                                    <div class="content-img text-lg-right">
                                        <img src="images/about/creativity.jpg" alt="" class="img-fluid">
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <ul class="mt-5 time-table pl-0 list-unstyled">
                                <li class="d-md-flex align-items-center justify-content-between bg-light p-4 mb-3">
                                    <h4 class="time text-color">9.00am</h4>
                                    <div class="content">
                                        <h3 class="mb-3">Launch Break</h3>
                                        <p>Doloribus veritatis, placeat, laborum amet voluptates cupiditate sapiente,
                                            reiciendis nemo
                                            recusandae quo mollitial.</p>
                                    </div>
                                    <div class="content-img text-lg-right">
                                        <img src="images/about/lunch.jpg" alt="" class="img-fluid">
                                    </div>
                                </li>
                                <li class="d-md-flex align-items-center justify-content-between bg-light p-4 mb-3">
                                    <h4 class="time text-color">12.00pm</h4>
                                    <div class="content">
                                        <h3 class="mb-3">Introduction of material Design</h3>
                                        <span class="h6 ">By Risabh moinul</span>
                                        <p>CEo of themefisher</p>
                                    </div>
                                    <div class="content-img text-lg-right">
                                        <img src="images/about/wordpress.png" alt="" class="img-fluid">
                                    </div>
                                </li>
                                <li class="d-md-flex align-items-center justify-content-between bg-light p-4 mb-3">
                                    <h4 class="time text-color">12.40pm</h4>
                                    <div class="content">
                                        <h3 class="mb-3">Marketing Matters in design area</h3>
                                        <span class="h6">By Risabh moinul</span>
                                        <p>CEo of themefisher</p>
                                    </div>
                                    <div class="content-img text-lg-right">
                                        <img src="images/about/big-data.png" alt="" class="img-fluid">
                                    </div>
                                </li>
                                <li class="d-md-flex align-items-center justify-content-between bg-light p-4 ">
                                    <h4 class="time text-color">02.40pm</h4>
                                    <div class="content">
                                        <h3 class="mb-3 ">Cultures of Creativity</h3>
                                        <span class="h6">By Risabh moinul</span>
                                        <p>CEo of themefisher</p>
                                    </div>
                                    <div class="content-img text-lg-right">
                                        <img src="images/about/creativity.jpg" alt="" class="img-fluid">
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <ul class="mt-5 time-table pl-0 list-unstyled">
                                <li class="d-md-flex align-items-center justify-content-between bg-light p-4 mb-3">
                                    <h4 class="time text-color">9.00am</h4>
                                    <div class="content">
                                        <h3 class="mb-3">Marketing Matters in design area</h3>
                                        <span class="h6">By Risabh moinul</span>
                                        <p>CEo of themefisher</p>
                                    </div>
                                    <div class="content-img text-lg-right">
                                        <img src="images/about/big-data.png" alt="" class="img-fluid">
                                    </div>
                                </li>
                                <li class="d-md-flex align-items-center justify-content-between bg-light p-4 mb-3">
                                    <h4 class="time text-color">12.20pm</h4>
                                    <div class="content">
                                        <h3 class="mb-3">Introduction of material Design</h3>
                                        <span class="h6 ">By Risabh moinul</span>
                                        <p>CEo of themefisher</p>
                                    </div>
                                    <div class="content-img text-lg-right">
                                        <img src="images/about/wordpress.png" alt="" class="img-fluid">
                                    </div>
                                </li>
                                <li class="d-md-flex align-items-center justify-content-between bg-light p-4 mb-3">
                                    <h4 class="time text-color">2.00pm</h4>
                                    <div class="content">
                                        <h3 class="mb-3">Launch Break</h3>
                                        <p>Doloribus veritatis, placeat, laborum amet voluptates cupiditate sapiente,
                                            reiciendis nemo
                                            recusandae quo mollitial.</p>
                                    </div>
                                    <div class="content-img text-lg-right">
                                        <img src="images/about/lunch.jpg" alt="" class="img-fluid">
                                    </div>
                                </li>
                                <li class="d-md-flex align-items-center justify-content-between bg-light p-4 ">
                                    <h4 class="time text-color">02.40pm</h4>
                                    <div class="content">
                                        <h3 class="mb-3 ">Cultures of Creativity</h3>
                                        <span class="h6">By Risabh moinul</span>
                                        <p>CEo of themefisher</p>
                                    </div>
                                    <div class="content-img text-lg-right">
                                        <img src="images/about/creativity.jpg" alt="" class="img-fluid">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    {{-- </section> --}}
    {{-- <section class="section section-pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="heading mb-5">
                        <span class="stroke-text">Price</span>
                        <div class="pl-90">
                            <h2 class="text-white mt-3"> Get your Ticket</h2>
                            <p class="text-white-50">Accusantium provident suscipit dicta magni dolor deserunt nam
                                obcaecati non
                                veritatis optio.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-4 col-md-6">
                    <div class="package style-1 bg-white mb-5 mb-lg-0">
                        <div class="price-header mb-4">
                            <i class="tf-ion-android-bulb"></i>
                            <h2 class="mt-4 text-white">70$</h2>
                        </div>
                        <h6 class="pname">Early</h6>
                        <ul class="list-unstyled ">
                            <li>Two Days Ticket</li>
                            <li>Coffee & Launch</li>
                            <li>Networking</li>
                            <li>Certificate</li>
                            <li>Gift Box</li>
                            <li>Email listing</li>
                        </ul>
                        <a href="#" class="btn btn-hero btn-rounded mt-3 mb-5">Get now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="package  style-2 bg-white mb-5 mb-lg-0">
                        <div class="price-header mb-4">
                            <i class="tf-ion-android-hangout"></i>
                            <h2 class="mt-4 text-white">250$</h2>
                        </div>
                        <h6 class="pname">Team</h6>
                        <ul class="list-unstyled">
                            <li>Two Days Ticket</li>
                            <li>Coffee & Launch</li>
                            <li>Networking</li>
                            <li>Certificate</li>
                            <li>Gift Box</li>
                            <li>Public ad listing</li>
                            <li>Email listing</li>
                        </ul>
                        <a href="#" class="btn btn-secondary btn-rounded mt-3 mb-5">Get now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="package  bg-white style-3 mb-5 mb-lg-0">
                        <div class="price-header mb-4">
                            <i class="tf-ion-android-person"></i>
                            <h2 class="mt-4 text-white">300$</h2>
                        </div>
                        <h6 class="pname">Economic</h6>
                        <ul class="list-unstyled">
                            <li>Three Days Ticket</li>
                            <li>Coffee & Launch</li>
                            <li>Networking</li>
                            <li>Certificate</li>
                            <li>Gift Box</li>
                            <li>Company Listing</li>
                            <li>Dinner Serve</li>
                            <li>Email listing</li>
                        </ul>
                        <a href="#" class="btn btn-secondary btn-rounded mt-3 mb-5">Get now</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- <section class="section-speaker section">
        <div class="container">
            <div class="row section-heading">
                <div class="col-lg-6">
                    <div class="heading">
                        <span class="stroke-text">Speakers</span>
                        <div class="pl-90">
                            <h2 class=""> Who're speaking</h2>
                            <p>Accusantium provident suscipit dicta magni dolor deserunt nam obcaecati non veritatis optio.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="speaker-block mb-5">
                        <div class="img-block">
                            <img src="images/teams/s-1.jpg" alt="" class="img-fluid">
                            <ul class="list-inline speaker-social">
                                <li class="list-inline-item"><a href="#"><i class="tf-ion-social-facebook"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i
                                            class="tf-ion-social-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="tf-ion-social-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="speaker-info">
                            <h4 class="mb-0 mt-3"><a href="speaker-single.html">Marta Kemnitz</a></h4>
                            <p>UI designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="speaker-block mb-5">
                        <div class="img-block">
                            <img src="images/teams/s-2.jpg" alt="" class="img-fluid">
                            <ul class="list-inline speaker-social">
                                <li class="list-inline-item"><a href="#"><i class="tf-ion-social-facebook"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i
                                            class="tf-ion-social-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="tf-ion-social-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="speaker-info">
                            <h4 class="mb-0 mt-3"><a href="speaker-single.html">Martin Gptil</a></h4>
                            <p>UI designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="speaker-block mb-5">
                        <div class="img-block">
                            <img src="images/teams/s-3.jpg" alt="" class="img-fluid">
                            <ul class="list-inline speaker-social">
                                <li class="list-inline-item"><a href="#"><i class="tf-ion-social-facebook"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i
                                            class="tf-ion-social-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="tf-ion-social-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="speaker-info">
                            <h4 class="mb-0 mt-3"><a href="speaker-single.html">Kemnitz Wagon</a></h4>
                            <p>UI designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="speaker-block mb-5 mb-lg-0">
                        <div class="img-block">
                            <img src="images/teams/s-4.jpg" alt="" class="img-fluid">
                            <ul class="list-inline speaker-social">
                                <li class="list-inline-item"><a href="#"><i class="tf-ion-social-facebook"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i
                                            class="tf-ion-social-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="tf-ion-social-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="speaker-info">
                            <h4 class="mb-0 mt-3"><a href="speaker-single.html">MJohn Doe</a></h4>
                            <p>UI designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="speaker-block mb-5 mb-lg-0">
                        <div class="img-block">
                            <img src="images/teams/s-5.jpg" alt="" class="img-fluid">
                            <ul class="list-inline speaker-social">
                                <li class="list-inline-item"><a href="#"><i class="tf-ion-social-facebook"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i
                                            class="tf-ion-social-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="tf-ion-social-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="speaker-info">
                            <h4 class="mb-0 mt-3"><a href="speaker-single.html">Marta Kemnitz</a></h4>
                            <p>UI designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="speaker-block mb-5 mb-lg-0">
                        <div class="img-block">
                            <img src="images/teams/s-6.jpg" alt="" class="img-fluid">
                            <ul class="list-inline speaker-social">
                                <li class="list-inline-item"><a href="#"><i class="tf-ion-social-facebook"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i
                                            class="tf-ion-social-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="tf-ion-social-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="speaker-info">
                            <h4 class="mb-0 mt-3"><a href="speaker-single.html">Mehedi Miraz</a></h4>
                            <p>UI designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Section Start -->
    <section class="section sponsors">
        <div class="container">
            <div class="row section-heading">
                <div class="col-lg-8">
                    <div class="heading">
                        <span class="stroke-text">Sponsors</span>
                        <div class="pl-90">
                            <h2 class="text-white">Amazing Partners & Sponsors </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <h4 class="mb-4 text-white letter-spacing text-sm">Gold Sponsors</h4>
                </div>
                <div class="col-lg-12">
                    <div class="client-item">
                        <a href="#"><img src="images/clients/client-img-1.png" alt=""
                                class="img-fluid"></a>
                    </div>
                    <div class="client-item">
                        <a href="#"><img src="images/clients/client-img-2.png" alt=""
                                class="img-fluid"></a>
                    </div>
                    <div class="client-item">
                        <a href="#"><img src="images/clients/client-img-3.png" alt=""
                                class="img-fluid"></a>
                    </div>
                    <div class="client-item">
                        <a href="#"><img src="images/clients/client-img-4.png" alt=""
                                class="img-fluid"></a>
                    </div>
                    <div class="client-item">
                        <a href="#"><img src="images/clients/client-img-5.png" alt=""
                                class="img-fluid"></a>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-8">
                    <h4 class="mb-4 text-white mt-5 letter-spacing text-sm">Platinum Sponsors</h4>
                </div>
                <div class="col-lg-12">
                    <div class="client-item">
                        <a href="#"><img src="images/clients/client-img-6.png" alt=""
                                class="img-fluid"></a>
                    </div>
                    <div class="client-item">
                        <a href="#"><img src="images/clients/client-img-7.png" alt=""
                                class="img-fluid"></a>
                    </div>
                    <div class="client-item">
                        <a href="#"><img src="images/clients/client-img-8.png" alt=""
                                class="img-fluid"></a>
                    </div>
                    <div class="client-item">
                        <a href="#"><img src="images/clients/client-img-9.png" alt=""
                                class="img-fluid"></a>
                    </div>
                    <div class="client-item">
                        <a href="#"><img src="images/clients/client-img-1.png" alt=""
                                class="img-fluid"></a>
                    </div>
                    <div class="client-item">
                        <a href="#"><img src="images/clients/client-img-2.png" alt=""
                                class="img-fluid"></a>
                    </div>
                    <div class="client-item">
                        <a href="#"><img src="images/clients/client-img-3.png" alt=""
                                class="img-fluid"></a>
                    </div>
                    <div class="client-item">
                        <a href="#"><img src="images/clients/client-img-4.png" alt=""
                                class="img-fluid"></a>
                    </div>
                    <div class="client-item">
                        <a href="#"><img src="images/clients/client-img-5.png" alt=""
                                class="img-fluid"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-white mt-5 mb-4 h3">Want to be a sponsor ? </h5>
                    <a href="#" class="btn btn-hero btn-rounded">apply now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Section END -->
    {{-- <section class="cta-2 section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-img">
                        <img src="images/bg/cta-bg.jpg" alt="" class="img-fluid">
                        <div class="contact-info box-shadow">
                            <h5 class="text-uppercase letter-spacing mb-4">Venue location</h5>
                            <h6 class="text-color mb-3">18 - 21 December, 2019 </h6>
                            <p class="lead">85 Golden Street, Darlinghurst <br>ERP 2019, United States </p>
                            <a href="contact.html"><i class="tf-ion-ios-location mr-2"></i>View Map location</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="latest-blog section-bottom mt-5 mt-lg-0">
        <div class="container">
            <div class="row section-heading">
                <div class="col-lg-6">
                    <div class="heading">
                        <span class="stroke-text">News</span>
                        <div class="pl-90">
                            <h2 class=""> Latest News update</h2>
                            <p>Accusantium provident suscipit dicta magni dolor deserunt nam obcaecati non veritatis optio.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-item card border-0 mb-5 mb-lg-0">
                        <img src="images/blog/blog-img-1.jpg" alt="" class="img-fluid">
                        <div class="p-4">
                            <h4 class="mt-2 mb-3"><a href="#">Why lead generation is key for business growth</a>
                            </h4>
                            <p>Illum delectus quidem nobis, impedit soluta mollitia dignissimos error.</p>
                            {{-- <a href="#" class="read-more text-color h6">Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-item card border-0 mb-5 mb-lg-0">
                        <img src="images/blog/blog-img-2.jpg" alt="" class="img-fluid">
                        <div class="p-4">
                            <h4 class="mt-2 mb-3"><a href="#">How to visualizze your idea in design</a></h4>
                            <p>Illum delectus quidem nobis, impedit soluta mollitia dignissimos error.</p>
                            {{-- <a href="#" class="read-more text-color h6">Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  col-sm-6">
                    <div class="blog-item card border-0 mb-5 mb-lg-0">
                        <img src="images/blog/blog-img-3.jpg" alt="" class="img-fluid">
                        <div class="p-4">
                            <h4 class="mt-2 mb-3"><a href="#">Next venue in san farnscicos can join</a></h4>
                            <p>Illum delectus quidem nobis, impedit soluta mollitia dignissimos error.</p>
                            {{-- <a href="#" class="read-more text-color h6">Read More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}
    @include('layouts.footer')
@endsection
