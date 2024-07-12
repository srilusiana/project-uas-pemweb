<!DOCTYPE html>
<html lang="en">

<head>
    <title>Carbook - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/dist/css/bg.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/dist/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/dist/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/dist/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/dist/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/dist/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/dist/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/dist/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/dist/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/dist/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('admin/dist/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/dist/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/dist/css/style.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
        <a class="navbar-brand" href="index.php">Halo<span>Bengkel</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('login') }}" class="nav-link">Log In</a></li>
                <li class="nav-item active"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap ftco-degree-bg" style="background-image: url('{{ asset('admin/dist/img/bg_1.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
            <div class="col-lg-8 ftco-animate">
            <div class="text w-100 text-center mb-md-5 pb-md-5">
                <h1 class="mb-4">Servis mobil di HaloBengkel</h1>
                <p style="font-size: 18px;">Solusi Terbaik untuk Perbaikan dan Perawatan Kendaraan Anda. Layanan Lebih
                Mudah, Cepat dan Berkualitas</p>
                <a href="https://www.youtube.com/watch?v=VTDB3mKx7jM"
                class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="ion-ios-play"></span>
                </div>
                <div class="heading-title ml-5">
                    <span>Easy steps for maintaining your car</span>
                </div>
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <h2 class="mb-2">PILIH JENIS SERVIS YANG MEMUDAHKAN PERAWATAN MOBILMU</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <div class="carousel-car owl-carousel">
                <div class="item">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end">
                    <img src="{{ asset('admin/dist/img/paket_a.jpg') }}" alt="Car Image">
                </div>              
                    <div class="text">
                    <h2 class="mb-0"><a href="#">Paket A</a></h2>
                    <div class="d-flex mb-3">
                        <span class="subheading">Perawatan Rutin</span>
                        <p class="price ml-auto">Rp.200.000</p>
                    </div>
                    <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book Now</a> <a href="#"
                        class="btn btn-secondary py-2 ml-1">Details</a></p>
                    </div>
                </div>
                </div>
                <div class="item">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end">
                    <img src="{{ asset('admin/dist/img/paket_b.jpeg') }}" alt="Car Image">
                </div>
                    <div class="text">
                    <h2 class="mb-0"><a href="#">Paket B</a></h2>
                    <div class="d-flex mb-3">
                        <span class="cat">Pengecekan Rem</span>
                        <p class="price ml-auto">Rp.500.000</p>
                    </div>
                    <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#"
                        class="btn btn-secondary py-2 ml-1">Details</a></p>
                    </div>
                </div>
                </div>
                <div class="item">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('admin/dist/img/Paket_c.jpeg') }}');">
                    </div>
                    <div class="text">
                    <h2 class="mb-0"><a href="#">Paket C</a></h2>
                    <div class="d-flex mb-3">
                        <span class="cat">Perawatan Suspensi</span>
                        <p class="price ml-auto">Rp. 750.000</p>
                    </div>
                    <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#"
                        class="btn btn-secondary py-2 ml-1">Details</a></p>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <section class="ftco-section ftco-about">
        <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
            style="background-image: url('{{ asset('admin/dist/img/about.jpg') }}');">
            </div>
            <div class="col-md-6 wrap-about ftco-animate">
            <div class="heading-section heading-section-white pl-md-5">
                <span class="subheading">About us</span>
                <h2 class="mb-4">Welcome to HaloBengkel</h2>

                <p>
                "Selamat datang di Bengkel Mobil Sejahtera! Kami siap melayani Anda dengan berbagai layanan perawatan dan
                perbaikan mobil berkualitas. Mulai dari servis rutin, perbaikan mesin, hingga pengecekan kelistrikan, tim
                ahli kami siap memastikan mobil Anda selalu dalam kondisi prima. Percayakan kebutuhan mobil Anda pada
                kami, karena kepuasan dan kenyamanan Anda adalah prioritas utama kami. Terima kasih telah memilih Bengkel
                Mobil Sejahtera!"</p>
            </div>
            </div>
        </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
        <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Grup</span>
            <h2 class="mb-3">Our Mechanic</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
                <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                    <div class="user-img mb-2" style="background-image: url('{{ asset('admin/dist/img/person_1.jpg') }}')">
                    </div>
                    <div class="text pt-4">
                    <p class="name">Roger albert</p>
                    <span class="position">Montir</span>
                    </div>
                </div>
                </div>
                <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                    <div class="user-img mb-2" style="background-image: url('{{ asset('admin/dist/img/person_3.jpg') }}')">
                    </div>
                    <div class="text pt-4">
                    <p class="name">Rizky Pratama</p>
                    <span class="position">Montir</span>
                    </div>
                </div>
                </div>
                <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                    <div class="user-img mb-2" style="background-image: url('{{ asset('admin/dist/img/person_2.jpg') }}')">
                    </div>
                    <div class="text pt-4">
                    <p class="name">Budi Santoso</p>
                    <span class="position">Montir</span>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <section class="ftco-section ftco-intro" style="background-image: url('{{ asset('admin/dist/img/bg_3.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 heading-section heading-section-white ftco-animate">
            <h2 class="mb-3">Do You Want To Earn With Us? So Don't Be Late.</h2>
            <a href="#" class="btn btn-primary btn-lg">Become A Mechanic</a>
            </div>
        </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
        <div class="row mb-5">
            <div class="col-md">
            <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2"><a href="#" class="logo">Car<span>book</span></a></h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                blind texts.</p>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
            </div>
            </div>
            <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
                <h2 class="ftco-heading-2">Information</h2>
                <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
                <li><a href="#" class="py-2 d-block">Term and Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
                </ul>
            </div>
            </div>
            <div class="col-md">
            <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Customer Support</h2>
                <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                </ul>
            </div>
            </div>
            <div class="col-md">
            <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Have a Questions?</h2>
                <div class="block-23 mb-3">
                <ul>
                    <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San
                        Francisco, California, USA</span></li>
                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                    <li><a href="#"><span class="icon icon-envelope"></span><span
                        class="text">info@yourdomain.com</span></a></li>
                </ul>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with
                <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com"
                target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
        </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#F96D00" />
        </svg></div>


    <script src="{{ asset('admin/dist/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('admin/dist/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/aos.js') }}"></script>
    <script src="{{ asset('admin/dist/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('admin/dist/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/scrollax.min.js') }}"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('admin/dist/js/google-map.js') }}"></script>
    <script src="{{ asset('admin/dist/js/main.js') }}
    "></script>

</body>

</html>