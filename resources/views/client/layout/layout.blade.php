<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    {{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
    {{--    <link rel="canonical" href="{{ url()->full() }}">--}}
    <link rel="sitemap" href="/sitemap.xml" title="Sitemap" type="application/xml">
    <link rel="icon" type="image/svg+xml" href="{{ asset(setting('logo')) }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset(setting('logo')) }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset(setting('logo')) }}">
    <link rel="shortcut icon" href="{{ asset(setting('logo')) }}">
    <meta name="robots" content="max-snippet:-1,max-image-preview:large,max-video-preview:-1">
    <meta name="description" content="{{ strip_tags(setting('desc')) }}">
    <meta name="keywords" content="{{ strip_tags(setting('keywords')) }}">
    <meta name="author" content="{{ setting('title_'.lang()) }}">
    <meta name="image" content="{{ asset(setting('logo')) }}">
    <meta property="og:title" content="{{ setting('title_'.lang()) }}">
    <meta property="og:description" content="{{ strip_tags(setting('desc')) }}">
    <meta property="og:locale" content="en">
    <meta property="og:image" content="{{ asset(setting('logo')) }}">
    <meta property="og:url" content="{{ url()->full() }}">
    <meta property="og:site_name" content="{{ setting('title_'.lang()) }}">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="{{ setting('title_'.lang()) }}">
    <meta name="twitter:title" content="{{ setting('title_'.lang()) }}">
    <meta name="twitter:description" content="{{ strip_tags(setting('desc')) }}">
    <meta name="twitter:site" content="@{{ setting('title_'.lang()) }}">
    <meta name="csrf-token" content="UA03C1pxmumaEQe8eqQuogEL9x4lDE8HyhaSlguZ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="orJ7ZbMHiPkMYkLCmiZpVFPHiWeJYzxBdmYrqe4q-0E" />
    <meta content='max-age=604800' http-equiv='Cache-Control' />
    <include expiration='7d' path='*.css' />
    <include expiration='7d' path='*.js' />
    <include expiration='3d' path='*.gif' />
    <include expiration='3d' path='*.jpeg' />
    <include expiration='3d' path='*.jpg' />
    <include expiration='3d' path='*.png' />
    <include expiration='3d' path='*.webp' />
    <include expiration='3d' path='*.ico' />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset(setting('logo')) }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets_website/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_website/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
          integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets_website/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_website/css/Responsive.css') }}">
    <!-- Include intl-tel-input CSS -->
    <link rel="stylesheet" href="https://unpkg.com/intl-tel-input@17.0.3/build/css/intlTelInput.css">
    @yield('links')
    @yield('styles')
    <style>
        @if(lang() == 'ar')
        body{direction: rtl}
        .slick-track{
            float:left;
        }
        @else
        body{direction: ltr}
        @endif

        .address_footer p{
            display: inline-block !important;
        }
        .iti--separate-dial-code{
            min-width: 100%;
        }
    </style>
    <style>
        /*@media(min-width: 800px) {*/
        /*    a.bg-primary-color{*/
        /*        margin-top: 1px !important;*/
        /*    }*/
        /*}*/

        /*@media(max-width: 800px) {*/

        /*    .carousel-caption h5 p{*/
        /*        font-size: 30px !important;*/
        /*        font-weight: 700;*/
        /*        line-height: 40px;*/
        /*    }*/

        /*    .about h5 p, .in_website h5 p{*/
        /*        font-size: 20px !important;*/
        /*        overflow-wrap: anywhere;*/
        /*    }*/

        /*    .in_website .container{*/
        /*        margin-top: 75px;*/
        /*    }*/

        /*    a.bg-primary-color{*/
        /*        margin-top: -28px !important;*/
        /*    }*/
        /*}*/


        /*@media(max-width: 600px) {*/
        /*    .navbar-brand img{*/
        /*        width: 100px;*/
        /*    }*/

        /*    .carousel-caption h5 p{*/
        /*        font-size: 20px !important;*/
        /*        font-weight: 100;*/
        /*        line-height: 25px;*/
        /*    }*/

        /*    .about h5 p, .in_website h5 p{*/
        /*        font-size: 20px !important;*/
        /*        overflow-wrap: anywhere;*/
        /*    }*/

        /*    .in_website .container{*/
        /*        margin-top: 75px;*/
        /*    }*/

        /*    a.bg-primary-color{*/
        /*        margin-top: 15px !important;*/
        /*    }*/
        /*}*/

        /*@media(max-width: 500px) {*/
        /*    a.bg-primary-color{*/
        /*        margin-top: 5px !important;*/
        /*    }*/
        /*}*/



    </style>



    <title>
        @if (Route::is('client.home'))
            {{ setting('title_'.lang()) }}
        @else
            {{ setting('title_'.lang()) }} |  @yield('title')
        @endif
    </title>
</head>

<body class="{{ lang() == 'ar'? 'arabicVersion' : '' }}" style="direction:{{ lang('en') ? 'ltr' : 'rtl' }}" >
<div class="loading-screen  position-fixed top-0 start-0 end-0 bottom-0 bg-white justify-content-center align-items-center">
    <img src="{{ asset('assets_website/imgs/home/loading.gif') }}">
</div>



<!-- Navbar -->
@include('client.layout.navBar')


@yield('content')

<!-- Footer -->
@include('client.layout.footer')



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"
        integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- intl-tel-input -->

<!-- Include intl-tel-input JS -->
<script src="https://unpkg.com/intl-tel-input@17.0.3/build/js/intlTelInput.js"></script>
<script>
    var iti = window.intlTelInput(document.querySelector("#phone"), {
        separateDialCode: true
        , autoFormat: false
        , utilsScript: "https://unpkg.com/intl-tel-input@17.0.3/build/js/utils.js"
        {{--, onlyCountries: @json(countries()->pluck('country_code'))--}}
        , });
    window.iti = iti;
    iti.setCountry("{{ old('country_code',isset($country_code) ? $country_code : country_code()) }}");
    document.querySelector("#phone").addEventListener("countrychange", function() {
        document.getElementById("phone").value = '';
        document.getElementById("country_code").value = iti.getSelectedCountryData().iso2.toUpperCase();
        document.getElementById("phone_code").value = iti.getSelectedCountryData().dialCode;
    })
</script>


<script src="{{ asset('assets_website/js/index.js') }}"></script>
<script src="{{ asset('assets_website/js/phone.js') }}"></script>

<!-- Front-end -->
<script>

    $(document).ready(() => {
        $(window).scroll(function () {
            let windowScroll = $(window).scrollTop();
            if (windowScroll > 130) {
                $("#backTop").fadeIn(10).css("display","flex");
                $(".navContainer").addClass("bg-white");
                $(".navContainer").removeClass("text-white");
            }
            else {
                $("#backTop").fadeOut(500)
                $(".navContainer").removeClass("bg-white");
                $(".navContainer").addClass("text-white");

            }
        })
        $("#backTop").click(function () {
            $("html,body").animate({ scrollTop: 0 }, 300)
        })
    });

    AOS.init({
        once: true
    })
    var lang = localStorage.getItem('Language');
    $(document).ready(() => {
        $(".loading-screen").fadeOut(1000);
    });
    var lang = localStorage.getItem('Language');
    var Diriction = false;
    var scroll = 1;
    if (lang == "العربية") {
        Diriction = true;
        scroll = -1;
    }

    $(".slider-package").slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: false,
        rtl: Diriction,
        arrows: true,
        dots: false,
        prevArrow: `<button class="prev-button btn rounded-circle primary-color"><i class="fa-solid fa-chevron-left"></i></button>`,
        nextArrow: `<button class="next-button btn rounded-circle primary-color"><i class="fa-solid fa-chevron-right"></i></button>`,
        autoplaySpeed: 900,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    infinite: true,
                },
            },
            {
                breakpoint: 719,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 1,
                },
            }
        ],
    });
    $(".slider1").slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        dots: false,
        rtl: Diriction,
        autoplaySpeed: 1000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    infinite: true,
                },
            },
            {
                breakpoint: 719,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 1,
                },
            }
        ],
    });




    $(".slider2").slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: false,
        arrows: true,
        prevArrow: `<button class="prev-button btn rounded-circle text-white"><i class="fa-solid fa-chevron-left"></i></button>`,
        nextArrow: `<button class="next-button btn rounded-circle text-white"><i class="fa-solid fa-chevron-right"></i></button>`,
        dots: false,
        rtl: Diriction,
        autoplaySpeed: 900,

        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    infinite: true,
                },
            },
            {
                breakpoint: 719,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 1,
                },
            }
        ],
    });




    document.addEventListener("DOMContentLoaded", () => {
        const cards = document.querySelectorAll(".slider-package .slick-active .card");
        const isRTL = document.dir === "rtl" || document.body.style.direction == "rtl" ;
        let currentIndex = isRTL ? cards.length - 1 : 0;

        function activateNextCard() {
            cards.forEach(card => card.classList.remove("active"));

            cards[currentIndex].classList.add("active");

            if (isRTL) {
                // Decrement for RTL
                currentIndex = currentIndex - 1 < 0 ? cards.length - 1 : currentIndex - 1;
            } else {
                // Increment for LTR
                currentIndex = (currentIndex + 1) % cards.length;
            }
        }

        setInterval(activateNextCard, 3000);
    });

</script>

<!-- (Start) Input validation To choose which (numeric or alphabetic) according to input name  -->
<script>
    document.querySelector("input[name='name']").addEventListener('input', function (e) {
        var input = e.target;
        var value = input.value;
        input.value = value.replace(/\d/g, ''); // Remove numeric characters
    });

    document.querySelector("input[name='phone'], input[name='national_id']").addEventListener('input', function (e) {
        var input = e.target;
        var value = input.value;
        input.value = value.replace(/[A-Za-z\u0600-\u06FF\s]/g, ''); // Remove alphabetic characters and spaces
    });

    document.querySelector('form').addEventListener('submit', function (e) {
        var nameInput = document.getElementById('name');
        var phoneInput = document.getElementById('phone');
        var nameValue = nameInput.value.trim();
        var phoneValue = phoneInput.value.trim();

        if (/^\d+$/.test(nameValue)) {
            alert('Name cannot be only numbers.');
            e.preventDefault();
            return false;
        }

        if (/^[A-Za-z\s]+$/.test(phoneValue)) {
            alert('Phone number cannot be only alphabetic characters.');
            e.preventDefault();
            return false;
        }
    });

    // Array of element IDs
    var emailInputIds = ['email_subscriber', 'email_contact'];
    emailInputIds.forEach(function(id) {
        var emailInput = document.getElementById(id);
        if (emailInput) { // Check if the element exists
            emailInput.addEventListener('input', function() {
                var email = this.value;
                var pattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                if (!pattern.test(email)) {
                    this.setCustomValidity('Please enter a valid email in the format like sallam@gmail.com');
                } else {
                    this.setCustomValidity('');
                }
            });
        }
    });
</script>
<!-- (End) Input validation To choose which (numeric or alphabetic) according to input name -->




<!-- for tostr messages-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    // Check if there are any toast messages from the backend
    @if(session('toast_message'))
    // Display the toast message using Toastr
    toastr.{{ session('toast_message')['type'] }}('{{ session('toast_message')['message'] }}');
    @endif
</script>
<script>
    @if(session()->has('toastr'))
    @foreach(session('toastr') as $toastr)
    @if($toastr['type'] === 'error')  //if tostr_error (don't disappear automatically)
    toastr.options = {
        "closeButton": true,
        "timeOut": 0,
        "extendedTimeOut": 0
    };
    @else
        toastr.options = {
        "closeButton": true,
        "timeOut": 5000,
        "extendedTimeOut": 1000
    };
    @endif
        toastr["{{ $toastr['type'] }}"]("{{ $toastr['message'] }}");
    @endforeach
    @endif
</script>
<!-- for tostr messages-->