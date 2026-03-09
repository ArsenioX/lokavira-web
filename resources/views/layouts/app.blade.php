<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    {{-- Format Judul Baru: Halaman | lokavira.id --}}
    <title>@yield('title', 'lokavira.id')</title>
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <meta name="description" content="@yield('meta_description', 'Partner digital kreatif dan analitik terpercaya di Jakarta Utara. Solusi Social Media Management, Web Development, dan Ads.')">
    <meta name="keywords" content="Digital Marketing, Web Development, Laravel, Lokavira, PT Viovera Marli Sejahtera">
    <meta name="author" content="lokavira.id">
    <meta name="robots" content="index, follow">

    {{-- Meta Open Graph (Social Media) --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'lokavira.id')">
    <meta property="og:description" content="@yield('meta_description', 'Partner digital kreatif dan analitik terpercaya Anda.')">
    {{-- Gunakan logo.jpg karena OG image biasanya butuh gambar yang tidak transparan (background putih) agar bagus di WA/IG --}}
    <meta property="og:image" content="{{ asset('logolv.png') }}">

    {{-- Meta Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('title', 'lokavira.id')">
    <meta name="twitter:description" content="@yield('meta_description', 'Partner digital kreatif dan analitik terpercaya Anda.')">
    <meta name="twitter:image" content="{{ asset('logolv.png') }}">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('logolv.png') }}">

    {{-- Fonts & CSS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>
        /* WhatsApp Popup Styling */
        .wa-popup-wrapper {
            position: fixed;
            bottom: 90px;
            right: 20px;
            width: 320px;
            z-index: 1060;
            display: none;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            overflow: hidden;
            animation: slideUp 0.3s ease-out forwards;
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1050;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .whatsapp-float:hover { transform: scale(1.05); }

        .navbar-brand img {
            max-height: 70px;
            width: auto;
            object-fit: contain;
            border-radius: 5px;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    {{-- Spinner --}}
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>

    {{-- WhatsApp Popup --}}
    <div id="waPopupForm" class="wa-popup-wrapper bg-white">
        <div class="p-3 d-flex justify-content-between align-items-center" style="background-color: #0C8C8C;">
            <div class="d-flex align-items-center text-white">
                <i class="fab fa-whatsapp fs-3 me-2"></i>
                <h6 class="mb-0 text-white fw-bold">Halo Lokavira!</h6>
            </div>
            <button type="button" class="btn-close btn-close-white" onclick="tutupWaPopup()"></button>
        </div>
        <div class="p-4">
            <p class="small text-muted mb-3">Boleh tahu nama Anda sebelum kita berdiskusi lebih lanjut?</p>
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

    <button onclick="bukaWaPopup()" class="whatsapp-float border-0 bg-transparent">
        <div class="whatsapp-container shadow-lg" style="background-color: #25D366; border-radius: 50px; padding: 10px 20px; display: flex; align-items: center; color: white;">
            <i class="fab fa-whatsapp fs-4 me-2"></i>
            <span class="fw-bold">Kontak Kami</span>
        </div>
    </button>

    {{-- Top Bar --}}
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt text-primary me-2"></i>Jl. Gading Griya Lestari, Jakarta Utara</small>
                <small class="ms-4"><i class="fa fa-clock text-primary me-2"></i>09.00 - 17.00 WIB</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small><i class="fa fa-envelope text-primary me-2"></i>helo.lokavira@gmail.com</small>
                <small class="ms-4"><i class="fa fa-phone-alt text-primary me-2"></i>0813 8808 690</small>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="{{ url('/') }}" class="navbar-brand ms-4 ms-lg-0 d-flex align-items-center">
                <img src="{{ asset('img/logo.jpg') }}" alt="Logo Lokavira" class="me-3">
                <h3 class="text-primary m-0 fw-bold">lokavira.id</h3>
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

    <main class="flex-fill" style="margin-top: 100px;">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="container-fluid text-light footer py-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(90deg, #0b1121 0%, #0f4c5c 100%);">
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
                    <a class="btn btn-link" href="{{ url('/service') }}">TikTok & YouTube Ads</a>
                    <a class="btn btn-link" href="{{ url('/service') }}">Instagram Ads</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Hubungi Kami</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jakarta Utara</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>helo.lokavira@gmail.com</p>
                    <p class="mb-2"><i class="fab fa-whatsapp me-3"></i>+62 813-8808-690</p>
                </div>
            </div>
        </div>
    </footer>

    <div class="container-fluid copyright text-light py-4" style="background: #0b1121; border-top: 1px solid rgba(255, 255, 255, .1);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; 2026 <a class="border-bottom text-white" href="{{ url('/') }}">lokavira.id</a>.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu mb-2">
                        <a href="{{ url('/') }}">Home</a>
                        <a href="#">Cookies</a>
                        <a href="#">Help</a>
                        <a href="#">FAQs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        function bukaWaPopup() {
            const popup = document.getElementById("waPopupForm");
            popup.style.display = (popup.style.display === "none" || popup.style.display === "") ? "block" : "none";
        }
        function tutupWaPopup() { document.getElementById("waPopupForm").style.display = "none"; }
        function kirimFloatingWa(event) {
            event.preventDefault();
            const nama = document.getElementById("namaVisitor").value;
            const noTujuan = "628138808690";
            const teksWA = `Halo Lokavira, saya ${nama}. Saya ingin konsultasi mengenai layanan digital marketing Anda.`;
            const urlWA = "https://wa.me/" + noTujuan + "?text=" + encodeURIComponent(teksWA);
            document.getElementById("namaVisitor").value = "";
            tutupWaPopup();
            window.open(urlWA, "_blank");
        }
    </script>
</body>
</html>