<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    {{-- SEO & Google Verification --}}
    <title>@yield('title', 'Lokavira - Jasa Digital Marketing & Sosmed Management Jakarta')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="google-site-verification" content="google39c21d271db08f07" />
    
    <meta name="description" content="@yield('meta_description', 'Lokavira adalah Digital Marketing Agency terpercaya di Jakarta Utara. Kami menyediakan jasa Social Media Management, Web Development, dan Ads.')">
    <meta name="keywords" content="lokavira, jasa digital marketing jakarta, digital marketing agency, jasa sosmed lokavira, management sosial media, web development laravel, kontak lokavira, pt viovera marli sejahtera">
    <meta name="author" content="lokavira.id">
    <meta name="robots" content="index, follow">

    {{-- Meta Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Lokavira - Digital Marketing Agency')">
    <meta property="og:description" content="Partner digital kreatif dan analitik terpercaya di Jakarta Utara. Hubungi Lokavira untuk solusi bisnis digital Anda.">
    <meta property="og:image" content="{{ asset('logolv.png') }}">

    <link rel="icon" type="image/png" href="{{ asset('logolv.png') }}">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">
    
    {{-- Icon Stylesheets (CDN) --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
    {{-- CSS Libraries --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    
    {{-- Local CSS --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>
        /* Mencegah scroll putih di bawah atau samping */
        html, body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            background-color: #fff;
        }

        /* CSS Clean System */
        a, button, .btn, .nav-link, .footer-menu a, .footer .btn-link, i, .service-item, .project-item {
            transition: all 0.3s ease-in-out !important;
            text-decoration: none !important;
        }

        /* WHATSAPP FLOATING SYSTEM - FIXED ROUNDNESS & COLOR */
        .whatsapp-container {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 9999;
            display: flex;
            align-items: center;
            flex-direction: row-reverse;
        }

        .whatsapp-button {
            width: 60px;
            height: 60px;
            min-width: 60px;
            min-height: 60px;
            flex-shrink: 0;
            padding: 0;
            background-color: #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            border: none;
            outline: none;
            cursor: pointer;
            transition: transform 0.3s, background-color 0.3s;
        }

        .whatsapp-button:hover {
            transform: scale(1.1);
            background-color: #20BA5A;
        }

        .wa-text-tooltip {
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 13px;
            margin-right: 15px;
            pointer-events: none;
            white-space: nowrap;
            opacity: 0;
            transform: translateX(10px);
            transition: all 0.3s ease;
        }

        .whatsapp-container:hover .wa-text-tooltip {
            opacity: 1;
            transform: translateX(0);
        }

        /* WhatsApp Popup */
        .wa-popup-wrapper {
            position: fixed;
            bottom: 105px;
            right: 30px;
            width: 320px;
            z-index: 10000;
            display: none;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            overflow: hidden;
            background: white;
            animation: fadeInScale 0.3s ease-out forwards;
        }

        @keyframes fadeInScale {
            from { opacity: 0; transform: scale(0.9) translateY(20px); }
            to { opacity: 1; transform: scale(1) translateY(0); }
        }

        /* Geser Back to Top dan Fix Posisinya agar tidak menambah space bawah */
        .back-to-top {
            position: fixed !important;
            right: 35px !important;
            bottom: 110px !important;
            z-index: 9998 !important;
        }

        .navbar-brand img {
            max-height: 70px;
            width: auto;
            object-fit: contain;
        }

        /* Footer Full Width & Hapus margin bawah */
        .footer {
            width: 100% !important;
            margin-bottom: 0 !important;
            margin-left: 0 !important;
            margin-right: 0 !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
            display: block; /* Mencegah extra space dari flex */
        }
        .footer .container-fluid.copyright {
            margin: 0 !important;
            width: 100% !important;
            display: block;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    {{-- Spinner --}}
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>

    {{-- WhatsApp Popup Form --}}
    <div id="waPopupForm" class="wa-popup-wrapper">
        <div class="p-3 d-flex justify-content-between align-items-center" style="background-color: #0C8C8C;">
            <div class="d-flex align-items-center text-white">
                <i class="fab fa-whatsapp fs-3 me-2"></i>
                <h6 class="mb-0 text-white fw-bold">Halo Lokavira!</h6>
            </div>
            <button type="button" class="btn-close btn-close-white" onclick="tutupWaPopup()"></button>
        </div>
        <div class="p-4">
            <p class="small text-muted mb-3">Boleh tahu nama Anda sebelum diskusi?</p>
            <form onsubmit="kirimFloatingWa(event)">
                <div class="mb-3 form-floating">
                    <input type="text" class="form-control bg-light border-0" id="namaVisitor" placeholder="Nama Anda" required>
                    <label for="namaVisitor">Nama Anda</label>
                </div>
                <button type="submit" class="btn text-white w-100 fw-bold rounded-pill" style="background-color: #25D366;">
                    Mulai Chat <i class="fas fa-paper-plane ms-1"></i>
                </button>
            </form>
        </div>
    </div>

    {{-- WhatsApp Floating Button --}}
    <div class="whatsapp-container">
        <button onclick="bukaWaPopup()" class="whatsapp-button">
            <i class="fab fa-whatsapp"></i>
        </button>
        <span class="wa-text-tooltip">Ada yang bisa kami bantu?</span>
    </div>

    {{-- Header & Nav --}}
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex" style="background: #f8f9fa;">
            <div class="col-lg-6 px-5 text-start">
                <small class="text-muted"><i class="fa fa-map-marker-alt text-primary me-2"></i>Gading Griya Lestari H1 No.39, Cilincing, Jakarta Utara</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small class="text-muted"><i class="fa fa-envelope text-primary me-2"></i>helo.lokavira@gmail.com</small>
                <small class="ms-4 text-muted"><i class="fa fa-phone-alt text-primary me-2"></i>0813-8808-690</small>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 bg-white shadow-sm">
            <a href="{{ url('/') }}" class="navbar-brand ms-4 ms-lg-0 d-flex align-items-center">
                <img src="{{ asset('img/logo.jpg') }}" alt="Logo Lokavira" class="me-3">
                <h3 class="text-primary m-0 fw-bold">Lokavira</h3>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                    <a href="{{ url('/about') }}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
                    <a href="{{ url('/service') }}" class="nav-item nav-link {{ Request::is('service*') ? 'active' : '' }}">Services</a>
                    <a href="{{ url('/project') }}" class="nav-item nav-link {{ Request::is('project*') ? 'active' : '' }}">Projects</a>
                    <a href="{{ url('/contact') }}" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="https://www.tiktok.com/@lokavira.id" target="_blank"><i class="fab fa-tiktok text-primary"></i></a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="https://wa.me/628138808690" target="_blank"><i class="fab fa-whatsapp text-primary"></i></a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="https://www.instagram.com/lokavira.id" target="_blank"><i class="fab fa-instagram text-primary"></i></a>
                </div>
            </div>
        </nav>
    </div>

    <main class="flex-fill" style="margin-top: 110px;">
        @yield('content')
    </main>

    {{-- Footer Section --}}
    <footer class="container-fluid text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(90deg, #0b1121 0%, #0f4c5c 100%);">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-info mb-4">LOKAVIRA</h4>
                    <h6 class="text-white">PT Viovera Marli Sejahtera</h6>
                    <p class="mb-4 text-white-50">Partner digital kreatif dan analitik terpercaya Anda.</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://wa.me/628138808690" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://www.instagram.com/lokavira.id" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://www.tiktok.com/@lokavira.id" target="_blank"><i class="fab fa-tiktok"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://youtube.com/@lokavira" target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Layanan</h4>
                    <a class="btn btn-link" href="{{ url('/service') }}">Social Media Management</a>
                    <a class="btn btn-link" href="{{ url('/service') }}">Web Development</a>
                    <a class="btn btn-link" href="{{ url('/service') }}">Ads & Content Creator</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Hubungi Kami</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Gading Griya Lestari Blok H1 No. 39, Jakarta Utara</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>helo.lokavira@gmail.com</p>
                    <p class="mb-2"><i class="fab fa-whatsapp me-3"></i>+62 813-8808-690</p>
                </div>
            </div>
        </div>

        <div class="container-fluid copyright text-light py-4" style="background: rgba(0,0,0,.2); border-top: 1px solid rgba(255,255,255,.1);">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; 2026 <a class="text-white border-bottom" href="{{ url('/') }}">PT. Viovera Marli Sejahtera (Lokavira)</a>.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="small text-white-50 mt-1">Designed By <a class="text-white-50 border-bottom" href="https://htmlcodex.com" target="_blank">HTML Codex</a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    {{-- Scripts --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        $(document).ready(function() {
            if (typeof WOW !== 'undefined') { new WOW().init(); }
        });
        function bukaWaPopup() {
            const popup = document.getElementById("waPopupForm");
            popup.style.display = (popup.style.display === "none" || popup.style.display === "") ? "block" : "none";
        }
        function tutupWaPopup() { document.getElementById("waPopupForm").style.display = "none"; }
        function kirimFloatingWa(event) {
            event.preventDefault();
            const nama = document.getElementById("namaVisitor").value;
            window.open("https://wa.me/628138808690?text=" + encodeURIComponent("Halo Lokavira, saya " + nama + ". Ingin tanya layanan digital marketing."), "_blank");
            tutupWaPopup();
        }
    </script>
</body>
</html>