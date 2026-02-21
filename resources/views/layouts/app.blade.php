<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lokavira - Digital Marketing Agency</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <a href="https://wa.me/6281234567890?text=Halo%20Lokavira,%20saya%20ingin%20bertanya%20tentang%20layanan"
        class="whatsapp-float" target="_blank" rel="noopener noreferrer">
        <div class="whatsapp-container">
            <i class="fab fa-whatsapp whatsapp-icon"></i>
            <span>Kontak Kami</span>
        </div>
    </a>

    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt text-primary me-2"></i>123 streat, Jakarta Utara, IND</small>
                <small class="ms-4"><i class="fa fa-clock text-primary me-2"></i>6.00 am - 6.00 pm</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small><i class="fa fa-envelope text-primary me-2"></i>Halo.Lokavira@gmail.com</small>
                <small class="ms-4"><i class="fa fa-phone-alt text-primary me-2"></i>+813 8808 690</small>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="{{ url('/') }}" class="navbar-brand ms-4 ms-lg-0 d-flex align-items-center">
                <img src="{{ asset('img/logo.jpg') }}" alt="Logo Lokavira" width="70" class="me-3">
                <h3 class="text-primary m-0 fw-bold">Lokavira</h3>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ url('/about') }}" class="nav-item nav-link">About</a>
                    <a href="{{ url('/service') }}" class="nav-item nav-link">Services</a>
                    <a href="{{ url('/project') }}" class="nav-item nav-link">Projects</a>
                    <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-tiktok text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-whatsapp text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-instagram text-primary"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    @yield('content')

    <div class="container-fluid text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s"
        style="background: linear-gradient(90deg, #0b1121 0%, #0f4c5c 100%);">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-info mb-4">LOKAVIRA</h4>
                    <h6 class="text-white">PT Viovera Marli Sejahtera</h6>
                    <p class="mb-4 text-white-50">Partner digital kreatif dan analitik terpercaya Anda.</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-tiktok"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Layanan</h4>
                    <a class="btn btn-link" href="">Social Media Management</a>
                    <a class="btn btn-link" href="">Web Development</a>
                    <a class="btn btn-link" href="">TikTok & YouTube Ads</a>
                    <a class="btn btn-link" href="">Instagram Ads</a>
                    <a class="btn btn-link" href="">UI/UX & Editing Grafis</a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Hubungi Kami</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Gading Griya Lestari H1 No.39,
                        Cilincing, Jakarta Utara</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>support@lokavira.com</p>
                    <p class="mb-2"><i class="fab fa-whatsapp me-3"></i>+62 812-3456-7890</p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Newsletter</h4>
                    <p>Dapatkan tips marketing dan promo terbaru langsung di inbox Anda.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-white border-0 w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Email Anda">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Daftar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s"
        style="background: #0b1121; border-top: 1px solid rgba(256, 256, 256, .1);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; 2026 <a class="border-bottom" href="#">PT. Viovera Marli Sejahtera</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>