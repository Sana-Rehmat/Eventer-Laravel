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
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('datetimepicker/bootstrap-datepicker.min.css') }}">
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('datetimepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.css') }}">
    {{--
    <link rel="stylesheet" href="{{ asset('assets/plugins/fullcalendar/fullcalendar.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/dropzone/dropzone.min.css') }}">
    {{--
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{asset('slick-1.8.1/slick-1.8.1/slick/slick.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/dropzone/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('chosen/chosen.css') }}">
    <link rel="stylesheet" href="{{ asset('chosen/chosen.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <link href="{{asset('summernote-bs4.js_0.8.12/summernote.min.css')}}" rel="stylesheet">
    <script src="{{asset('summernote-bs4.js_0.8.12/summernote-bs4.js')}}"></script>
    <!-- third party css -->
    <link href="{{asset('backend/vendor/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('backend/vendor/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css')}}"
        rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendor/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('backend/vendor/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css')}}" rel="stylesheet"
        type="text/css" />
    <!-- third party css end -->
</head>
<style>
    .btn-blue{
        background: #3e08b9;
    }
</style>
{{-- </head> --}}
<div class="">
    <header class="">
        <nav class="navbar navbar-expand-md  bg-white ">
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
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->

                </div>
            </div>
        </nav>
    </header>
    @yield('breadcrumb')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-xl-3 theiaStickySidebar">
                    <div class="profile-sidebar">
                        <div class="widget-profile pro-widget-content">
                            <div class="profile-info-widget">
                                <a href="#" class="booking-doc-img">
                                    <img src="{{ asset('images/users/' . Auth::user()->userimage) }}" alt="">
                                </a>
                                <div class="profile-det-info">
                                    <h3>{{ Auth::user()->name }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-widget">
                            <nav class="dashboard-menu">
                                <ul>
                                    
                                    <li class="active"><a href="{{ route('profile.index') }}"><i
                                                class="fas fa-user"></i><span>Profile</span></a></li>


                                    <ul id="accordion" class="accordion">
                                        <li class="default open">
                                            <div class="link">
                                                <i class="fas fa-user-cog "></i>
                                                Profile Settings
                                                <i class="fa fa-chevron-down ml-3 "></i>
                                            </div>
                                            <ul class="submenu">
                                                <li><a href="{{ route('education.index') }}">Education</a></li>
                                                <li><a href="{{ route('award.index') }}">Awards</a></li>
                                                <li><a href="{{ route('experience.index') }}">Experience</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            <div class="link">
                                                <i class="fas fa-calendar-check"></i>
                                                <span>Services</span><i class="fa fa-chevron-down ml-5"></i>
                                            </div>
                                            <ul class="submenu">
                                                <li><a href="{{ route('event.create') }}">Create Service</a></li>
                                                <li><a href="{{ route('event.index') }}">Srevices List</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <li>
                                        <a href="{{route('seller.invoice') }}">
                                            <i class="fas fa-file-invoice"></i>
                                            <span>Invoices</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('review.index')}}">
                                            <i class="fas fa-star"></i>
                                            <span>Reviews</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('social.index') }}">
                                            <i class="fas fa-share-alt"></i>
                                            <span>Social Media</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('change_password.create') }}">
                                            <i class="fas fa-lock"></i>
                                            <span>Change Password</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt"></i>

                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
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
            <script src="{{ asset('datetimepicker/date_script.js') }}"></script>

            {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" --}} {{--
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
            <script data-cfasync="false" src="http://cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
            </script>
            {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script> --}}
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                crossorigin="anonymous"></script>

            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
                crossorigin="anonymous"></script>

            {{-- <script src="{{asset('summernote-bs4.js_0.8.12/summernote.min.js')}}"></script> --}}
            <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
            {{-- <script src="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script> --}}
            <script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>
            <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
            <script src="{{ asset('assets/plugins/dropzone/dropzone.min.js') }}"></script>
            <script src="{{ asset('assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>
            <script src="{{ asset('assets/js/profile-settings.js') }}"></script>
            <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
            {{-- <script src="{{ asset('assets/plugins/fullcalendar/fullcalendar.min.js') }}"></script> --}}
            {{-- <script src="{{ asset('assets/plugins/fullcalendar/jquery.fullcalendar.js') }}"></script> --}}
            <script src="{{ asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
            <script src="{{ asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
            {{-- <script src="{{ asset('assets/js/script.js') }}"></script> --}}
            <script src="{{ asset('assets/plugins/dropzone/dropzone.min.js') }}"></script>
            <script src="{{ asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
            <script src="{{asset('slick-1.8.1/slick-1.8.1/slick/slick.js')}}"></script>
            <script src="{{ asset('chosen/chosen.jquery.min.js') }}"></script>
            <script src="{{ asset('chosen/chosen.proto.min.js') }}"></script>
<!-- third party js -->
        <script src="{{asset('backend/vendor/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('backend/vendor/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
        <script src="{{asset('backend/vendor/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('backend/vendor/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>
        <script src="{{asset('backend/vendor/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('backend/vendor/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
        <script src="{{asset('backend/vendor/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('backend/vendor/libs/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
        <script src="{{asset('backend/vendor/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('backend/vendor/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('backend/vendor/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>
        <script src="{{asset('backend/vendor/libs/pdfmake/build/pdfmake.min.js')}}"></script>
        <script src="{{asset('backend/vendor/libs/pdfmake/build/vfs_fonts.js')}}"></script>
        <!-- third party js ends -->
        
        <!-- Datatables init -->
        <script src="{{asset('backend/js/datatables.init.js')}}"></script>
            <script src="{{ asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('.summernote').summernote();
                });

            </script>

            <script>
                // Date Time Picker


                function countChar(val) {
                    var len = val.value.length;
                    if (len >= 225) {
                        val.value = val.value.substring(0, 225);
                    } else {
                        $('#charNum').text(225 - len);
                    }
                    $('#left_large').text("Character Left :");
                };

                function countChar_des(val) {
                    var length = val.value.length;
                    if (length >= 30) {
                        val.value = val.value.substring(0, 30);
                    } else {
                        $('#charNum_des').text(30 - length);

                    }
                    $('#left_small').text("Character Left :");
                };
                $(".chosen-select").chosen({
                    disable_search_threshold: 10,
                    max_selected_options: 5,
                    no_results_text: "Oops, nothing found!",
                    width: "100%",
                });
                $(document).ready(function () {
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
                $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                    $('.Modern-Slider').slick('setPosition');
                })
                $(function () {
                    // Multiple images preview with JavaScript
                    var previewImages = function (input, imgPreviewPlaceholder) {
                        if (input.files) {
                            var filesAmount = input.files.length;
                            for (i = 0; i < filesAmount; i++) {
                                var reader = new FileReader();
                                reader.onload = function (event) {
                                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(
                                        imgPreviewPlaceholder);
                                }
                                reader.readAsDataURL(input.files[i]);
                            }
                        }
                    };
                    $('#serviceimages').on('change', function () {
                        previewImages(this, 'div.images-preview-div');
                    });
                });

                jQuery(document).ready(function () {
                    $(".carousel-inner .item:first").addClass("active");
                });
                // Award Update
                $(document).ready(function () {
                    $('#edit_award').on('click', function () {
                        var award_id = this.value;
                        $('#UpdateAward').modal('show');
                        $.ajax({
                            type: "GET",
                            url: "/award/update/" + award_id,
                            success: function (response) {
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
                $(document).ready(function () {
                    $('#edit_social').on('click', function () {
                        var social_id = this.value;
                        $('#UpdateSocial').modal('show');
                        $.ajax({
                            type: "GET",
                            url: "/social/update/" + social_id,
                            success: function (response) {
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
                $(function () {
                    var Accordion = function (el, multiple) {
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
                    Accordion.prototype.dropdown = function (e) {
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