<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Eventer | Checkout</title>
<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('images/icon.png') }}" />    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"
        integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

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
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('event.service') }}">Services</a>
                            </li> --}}
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
                                    {{-- <a class="dropdown-item" href="pricing.html">Tickets</a>
                                    <a class="dropdown-item" href="schedule.html">Schedule</a>
                                    <a class="dropdown-item" href="login.html">Login</a>
                                    <a class="dropdown-item" href="signup.html">Regstration</a>
                                    <a class="dropdown-item" href="error.html">404 Page</a>
                                    <a class="dropdown-item" href="faq.html">Supports</a> --}}
                                </div>
                            </li>
                            {{--<li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown2" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Blog.
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                    <a class="dropdown-item" href="blog.html">Blog</a>
                                    <a class="dropdown-item" href="blog-single.html">Blog Single</a>
                                </div>
                            </li>
                            --}}
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
            {{-- <div class="tags">

                @foreach ($header_tags as $tags )

                <span class="tag">
                    <form action="{{ route('search') }}" class="d-inline" method="POST" role="search">
                        @csrf
                        <input type="hidden" name="search" value="bussiness">
                        <button type="submit" class="submit d-inline ">
                            {{ $tags->tag_name }}</button>
                    </form>

                </span>
                @endforeach
            </div> --}}
        </header>
        <section class="page-header ">
            <div class="overly"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="content text-center">
                            <h1 class="mb-3 text-white text-capitalize letter-spacing">Checkout</h1>
                            <div class="divider mx-auto mb-4 bg-white">
                                <ul class="list-inline">
                                    <li class="list-inline-item mt-2"><a href="index-2.html">{{ $service->user->name }}
                                            Service</a></li>
                                    {{-- <li class="list-inline-item">/</li> --}}
                                    {{-- <li class="list-inline-item"><a href="index-2.html">{{ $user->name }}</a></li>
                                    --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="content my-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-8">
                        <div class="card">
                            <div class="card-body">

                                <form method="POST" action=" {{ route('checkout',$service->id)  }}">
                                    @csrf
                                    <input type="hidden" name="quantity" id="f_quantity" value="">
                                    <input type="hidden" name="price" id="f_price" value="">
                                    <div class="info-widget">
                                        <h4 class="card-title">Personal Information</h4>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group card-label">
                                                    <label>Full Name</label>
                                                    <input type="text"
                                                        value="{{ Auth::check() ? Auth::user()->name : old('name') }}"
                                                        id="name"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        name="name" required autocomplete="name" autofocus>
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group card-label">
                                                    <label>Email</label>
                                                    <input type="email"
                                                        value="{{Auth::check() ?  Auth::user()->email  : old('email')}}"
                                                        id="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}" required
                                                        autocomplete="email" autofocus>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group card-label">
                                                    <label>Phone</label>
                                                    <input type="text" id="phone" value="{{ old('phone') }}"
                                                        class="form-control @error('phone') is-invalid @enderror"
                                                        name="phone" required value="{{ old('phone') }}"
                                                        autocomplete="phone" autofocus>
                                                    @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group card-label">
                                                    <label for="">Booking Start Date</label>
                                                    <input type="text" id="search_checkin"
                                                        class="form-control @error('start_date') is-invalid @enderror"
                                                        name="start_date" value="{{ old('start_date') }}" required
                                                        autocomplete="start_date" autofocus>
                                                    @error('start_date')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group card-label">
                                                    <label for="">Booking End Date</label>
                                                    <input type="text" id="search_checkout"
                                                        class="form-control @error('end_date') is-invalid @enderror"
                                                        name="end_date" required autocomplete="end_date"
                                                        value="{{ old('end_date') }}" autofocus>
                                                    @error('end_date')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group card-label">
                                                <label for="">Address</label>
                                                <input type="text" style="height: 120px" id="address"
                                                    class="form-control @error('address') is-invalid @enderror"
                                                    name="address" value="{{ old('address') }}" required
                                                    autocomplete="address" autofocus>
                                                @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="exist-customer">Existing Customer? <a href="#">Click here to
                                                login</a>
                                        </div>
                                    </div>

                                    <div class="payment-widget">
                                        <h4 class="card-title">Payment Method</h4>

                                        <div class="payment-list">
                                            <label class="payment-radio credit-card-option">
                                                <input type="radio" name="radio" checked>
                                                <span class="checkmark"></span>
                                                Credit card
                                            </label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group card-label">
                                                        <label for="card_name">Name on Card</label>
                                                        <input class="form-control" id="card_name" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group card-label">
                                                        <label for="card_number">Card Number</label>
                                                        <input class="form-control" id="card_number"
                                                            placeholder="1234  5678  9876  5432" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group card-label">
                                                        <label for="expiry_month">Expiry Month</label>
                                                        <input class="form-control" id="expiry_month" placeholder="M"
                                                            type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group card-label">
                                                        <label for="expiry_year">Expiry Year</label>
                                                        <input class="form-control" id="expiry_year" placeholder="YY"
                                                            type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group card-label">
                                                        <label for="cvv">CVV</label>
                                                        <input class="form-control" id="cvv" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="payment-list">
                                            <label class="payment-radio paypal-option">
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                                Paypal
                                            </label>
                                        </div>


                                        <div class="terms-accept">
                                            <div class="custom-checkbox">
                                                <input type="checkbox" id="terms_accept">
                                                <label for="terms_accept">I have read and accept <a href="#">Terms &amp;
                                                        Conditions</a></label>
                                            </div>
                                        </div>


                                        <div class="submit-section mt-4">
                                            <button type="submit" onclick="{{ route('checkout',$service->id) }}"
                                                class="btn btn-primary ">Confirm and
                                                Proceede</button>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4 theiaStickySidebar">

                        <div class="card booking-card">
                            <div class="card-header">
                                <h4 class="card-title">Booking Summary</h4>
                            </div>
                            <div class="card-body">

                                <div class="booking-doc-info">
                                    <a href="speaker-profile.html" class="booking-doc-img">
                                        @if (!Auth::check())
                                        <img src="{{ asset('images/avtar.png') }}" alt="User Image">
                                        @else
                                        @if (Auth::user()->userimage!=="")

                                        <img src="{{ asset('images/users/'.Auth::user()->userimage) }}"
                                            alt="User Image">
                                        @else
                                        <img src="{{ asset('images/avtar.png') }}" alt="User Image">

                                        @endif

                                        @endif


                                    </a>
                                    <div class="booking-info">
                                        <h6><a href="#">
                                                <span id="user_name">{{ Auth::check() ? Auth::user()->name : ''
                                                    }}</span>
                                            </a></h6>


                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i> <span
                                                    id="address_fill"></span></p>
                                            <p class="doc-location"><i class="fas fa-envelope"></i> <span
                                                    id="email_fill">{{ Auth::check() ? Auth::user()->email : ''
                                                    }}</span></p>
                                            <p class="doc-location"><i class="fas fa-phone"></i> <span
                                                    id="phone_fill"></span></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="booking-suMary">
                                    <div class="booking-item-wrap">
                                        <ul class="booking-date">
                                            <li>Start Date <span id="start_date"></span></li>
                                            <li>End Date <span id="end_date"></span></li>
                                        </ul>
                                        <ul class="booking-fee">
                                            <li>Total Days <span id="total_days"></span></li>
                                            <li>Booking Fee <span id="booking_fee">RS {{ $service->charges }}</span>
                                            </li>
                                            <li>Tax <span>Rs 50</span></li>
                                        </ul>
                                        <div class="booking-total">
                                            <ul class="booking-total-list">
                                                <li>
                                                    <span>Total</span>
                                                    <span class="total-cost"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        {{-- <input type="text" name="datetimes" /> --}}
    </div>
    <section class="footer section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2 class="text-white mb-3">Eventer
                    </h2>
                    <p class="text-white-50">We are a creative-led experiential Event Production Agency that helps
                        brands
                        connect, engage and evolve. </p>

                    <form action="#" class="sub-form mt-4 mb-3">
                        <input type="text" class="form-control" placeholder="Put your email address">
                        <a href="#" class="btn btn-secondary btn-rounded mt-3">Subscribe now</a>
                    </form>
                    <p class="mt-3 text-white-50">We will not spam at your inbox .Don't panic</p>

                    <ul class="list-inline footer-socails">
                        <li class="list-inline-item"><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="tf-ion-social-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="tf-ion-social-pinterest"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="tf-ion-social-rss"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center mt-5 ">
                    <p class="copy border-top pt-4 text-white-50 mb-0">Copyright Reserved to Themefisher.2019</p>
                </div>
            </div>
        </div>
    </section>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>

    <script>
        $(document).ready(function () {


        $('#name').keyup(function (e) {
            var name=this.value;
            $('#user_name').html(name);
            console.log(name);
    });
    $('#email').keyup(function (e) {
            var name=this.value;
            $('#email_fill').html(name);
            console.log(name);
    });
    $('#address').keyup(function (e) {
            var lastname=$('#address').val();
            $('#address_fill').html(lastname);
            console.log(lastname);
    });
    $('#phone').keyup(function (e) {
            var lastname=$('#phone').val();
            $('#phone_fill').html(lastname);
            console.log(lastname);
    });

    });
                        var dates = @json($dates);
                        $(function() {
    // var dateRanges = [
    //                 { 'start': moment('2022-09-22'), 'end': moment('2022-09-24') },
    //             ];
     var dateRanges = [
            ];
            $.each(dates, function (index, val) {
                 var test={   'start': moment(val.from), 'end': moment(val.to) };
                 dateRanges.push(test)
            });

            console.log(dateRanges)
     if($('#search_checkin, #search_checkout').length){
    // check if element is available to bind ITS ONLY ON HOMEPAGE
    var currentDate = moment().format("YYYY-MM-DD");


    $('#search_checkin, #search_checkout').daterangepicker({
        locale: {
              format: 'YYYY-MM-DD'
        },
        "alwaysShowCalendars": true,
        "minDate": currentDate,
        "maxDate": moment().add('months', 1),
        autoApply: true,
        autoUpdateInput: false,
        "isInvalidDate": function(date) {

            return dateRanges.reduce(function(bool, range) {
                return bool || (date >= range.start && date <= range.end);
            }, false);

        }
    }, function(start, end, label) {
      // console.log("New date range selected: ' + start.format('YYYY-M-DD') + ' to ' + end.format('YYYY-M-DD') + ' (predefined range: ' + label + ')");
      // Lets update the fields manually this event fires on selection of range
      var selectedStartDate = start.format('YYYY-MM-DD'); // selected start
      var selectedEndDate = end.format('YYYY-MM-DD'); // selected end

      $checkinInput = $('#search_checkin');
      $checkoutInput = $('#search_checkout');

      // Updating Fields with selected dates
      $checkinInput.val(selectedStartDate);
      $checkoutInput.val(selectedEndDate);

      // Setting the Selection of dates on calender on CHECKOUT FIELD (To get this it must be binded by Ids not Calss)
      var checkOutPicker = $checkoutInput.data('daterangepicker');
      checkOutPicker.setStartDate(selectedStartDate);
      checkOutPicker.setEndDate(selectedEndDate);

      // Setting the Selection of dates on calender on CHECKIN FIELD (To get this it must be binded by Ids not Calss)
      var checkInPicker = $checkinInput.data('daterangepicker');
      checkInPicker.setStartDate(selectedStartDate);
      checkInPicker.setEndDate(selectedEndDate);
// cheout fill
      $('#start_date').html(selectedStartDate);
      $('#end_date').html(selectedEndDate);

    //   dates differece
    var date_diff_indays = function(date1, date2) {
dt1 = new Date(date1);
dt2 = new Date(date2);
return Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate()) ) /(1000 * 60 * 60 * 24));
}
var diff= date_diff_indays(selectedStartDate, selectedEndDate)+1
      $('#total_days').html(diff);
      $('#f_quantity').val(diff);
var total={{ $service->charges }}*(diff)+50;
var price={{ $service->charges }}*(diff);
console.log(total);
$('.total-cost').html("RS "+total)
$('#f_price').val(price)
    });

} // End Daterange Picker
  $('input[name="datetimes"]').daterangepicker({
    timePicker: true,
    startDate: moment().startOf('hour'),
    endDate: moment().startOf('hour').add(32, 'hour'),
    locale: {
      format: 'M/DD hh:M A'
    }
  });
});
    </script>
</body>

</html>