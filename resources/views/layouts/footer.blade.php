</div>
<section class="footer section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h2 class="text-white mb-3">Eventer
                </h2>
                <p class="text-white-50">We are a creative-led experiential Event Production Agency that helps brands
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

    <!--
    Essential Scripts
    =====================================-->
    <!-- Main jQuery -->

    <script src="plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

    <!--  -->
    <script src="plugins/SyoTimer/jquery.syotimer.min.js"></script>

    <!-- Form Validator -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
    <script src="{{ asset('plugins/easing/waypoint.js') }}"></script>
    <script src="{{ asset('plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/magnific-popup/dist/jquery.magnific-popup.js') }}"></script>
 <script src="{{asset('slick-1.8.1/slick-1.8.1/slick/slick.min.js')}}r"></script>
    <!-- Google Map -->
    <script src="{{ asset('plugins/google-map/gmap3.min.js') }}"></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script> --}}

    <script src="{{ asset('js/script.js') }}"></script>
<script>


        $(document).ready(function() {
        $('.yearpicker').datepicker({
    autoclose: true,
    format: " yyyy",
    viewMode: "years",
    minViewMode: "years",
    startDate: '1947',
    endDate: new Date(),

});

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


    $(document).ready(function() {

        $(".Modern-Slider-full").slick({
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
</script>
</body>

</html>
