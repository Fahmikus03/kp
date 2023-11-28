<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/Arsha/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/Arsha/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/Arsha/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Arsha/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Arsha/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Arsha/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Arsha/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Arsha/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Arsha/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/Arsha/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="/">Pengaduan</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    @if (auth()->check())
                        @if (auth()->user()->role_id == 1)
                            <li><a class="nav-link scrollto" href="{{ route('dashboard.admin') }}">Dashboard</a></li>
                        @elseif(auth()->user()->role_id == 3)
                            <li><a class="nav-link scrollto" href="{{ route('dashboard.leader') }}">Dashboard</a></li>
                        @elseif(auth()->user()->role_id == 2)
                            <li><a class="nav-link scrollto" href="{{ route('form-complaint') }}">Pengaduan</a></li>
                        @endif
                        <form method="post" action="/logout">
                            @csrf
                            <li><button type="submit"
                                    class="btn btn-outline-primary getstarted scrollto">Logout</button></li>
                        </form>
                    @else
                        <li><a class="getstarted scrollto" href="/login">Login</a></li>
                    @endif
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Layanan Pengaduan Online Rakyat</h1>
                    <h2>Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang
                    </h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{ route('form-complaint') }}" class="btn-get-started scrollto">Pengaduan</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('assets/Arsha/img/hero-img.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>About Us</h2>
                </div>
                <div class="row content">
                    <div class="col-lg-6 mx-auto pt-4 pt-lg-0">
                        <p>{{ $info[0]->about }}
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Services</h2>
                    <p>Kami siap membantu dan melayani pengaduan anda semua lebih cepat dan efektif</p>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mx-auto" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Kartu Tanda Penduduk</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 mx-auto" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Kartu Keluarga</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 mx-auto" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Akta Kelahiran</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section><!-- End Services Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <!-- Bagian Kontak Footer -->
                    <div class="col-lg-3 col-md-6 footer-contact ">
                        <h3>Pengaduan</h3>
                        <p>
                            {{ $info[0]->street }} <br>
                            {{ $info[0]->address }}<br>
                            {{ $info[0]->country }} <br><br>
                            <strong>Telepon:</strong> {{ $info[0]->phone }}<br>
                            <strong>Email:</strong> {{ $info[0]->email }}<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Pengaduan Masyakarat</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/Arsha/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/Arsha/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/Arsha/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/Arsha/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/Arsha/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/Arsha/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/Arsha/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/Arsha/js/main.js') }}"></script>

</body>

</html>
