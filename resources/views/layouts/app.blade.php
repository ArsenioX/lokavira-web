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

    <style>
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
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Tombol diubah jadi transparent border-0 karena sekarang pakai button bukan link */
        button.whatsapp-float {
            background: transparent;
            border: none;
            padding: 0;
            outline: none;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

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
                    <input type="text" class="form-control bg-light border-0" id="namaVisitor" placeholder="Nama Anda"
                        required>
                    <label for="namaVisitor">Nama Anda</label>
                </div>
                <button type="submit" class="btn text-white w-100 fw-bold rounded-pill"
                    style="background-color: #25D366;">
                    Mulai Chat <i class="fas fa-paper-plane ms-1"></i>
                </button>
            </form>
        </div>
    </div>

    <button onclick="bukaWaPopup()" class="whatsapp-float border-0" style="z-index: 1050;">
        <div class="whatsapp-container shadow-lg"
            style="background-color: #25D366; border-radius: 50px; padding: 10px 20px; display: flex; align-items: center; color: white;">
            <i class="fab fa-whatsapp whatsapp-icon fs-4 me-2"></i>
            <span class="fw-bold">Kontak Kami</span>
        </div>
    </button>

    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt text-primary me-2"></i>Jl. Gading Griya Lestari, Jakarta
                    Utara</small>
                <small class="ms-4"><i class="fa fa-clock text-primary me-2"></i>Senin - Jumat: 09.00 - 17.00
                    WIB</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small><i class="fa fa-envelope text-primary me-2"></i>Halo.Lokavira@gmail.com</small>
                <small class="ms-4"><i class="fa fa-phone-alt text-primary me-2"></i>0813 8808 690</small>
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
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3"
                        href="https://www.tiktok.com/@lokavira.id?_r=1&_t=ZS-948d33BJoDk" target="_blank"
                        rel="noopener noreferrer">
                        <small class="fab fa-tiktok text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="https://wa.me/628138808690"
                        target="_blank" rel="noopener noreferrer">
                        <small class="fab fa-whatsapp text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3"
                        href="https://www.instagram.com/lokavira.id?igsh=Ym9qODc1NnF5Z3I4" target="_blank"
                        rel="noopener noreferrer">
                        <small class="fab fa-instagram text-primary"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <main class="flex-fill">
        @yield('content')
    </main>

    <div class="container-fluid text-light footer py-5 wow fadeIn" data-wow-delay="0.1s"
        style="background: linear-gradient(90deg, #0b1121 0%, #0f4c5c 100%);">
        <div class="container py-5">
            <div class="row g-5">

                <div class="col-lg-4 col-md-6">
                    <h4 class="text-info mb-4">LOKAVIRA</h4>
                    <h6 class="text-white">PT Viovera Marli Sejahtera</h6>
                    <p class="mb-4 text-white-50">Partner digital kreatif dan analitik terpercaya Anda.</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2"
                            href="https://wa.me/628138808690?text=Halo%20Loka,%20saya%20ingin%20tanya-tanya%20seputar%20layanan%20digital%20marketingnya"
                            target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2"
                            href="https://www.instagram.com/lokavira.id?igsh=Ym9qODc1NnF5Z3I4" target="_blank"
                            rel="noopener noreferrer">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2"
                            href="https://www.tiktok.com/@lokavira.id?_r=1&_t=ZS-948d33BJoDk" target="_blank"
                            rel="noopener noreferrer">
                            <i class="fab fa-tiktok"></i>
                        </a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2"
                            href="https://youtube.com/@lokavira?si=6f_XcKuaqFZ5hRP1" target="_blank"
                            rel="noopener noreferrer">
                            <i class="fab fa-youtube"></i>
                        </a>
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
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Gading Griya Lestari H1 No.39,
                        Cilincing,
                        Jakarta Utara</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>helo.lokavira@gmail.com</p>
                    <p class="mb-2"><i class="fab fa-whatsapp me-3"></i>+62 813-880-8690</p>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s"
        style="background: #0b1121; border-top: 1px solid rgba(255, 255, 255, .1);">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; 2026 <a class="border-bottom text-white" href="{{ url('/') }}">PT. Viovera Marli Sejahtera
                        (Lokavira)</a>, All Right Reserved.
                </div>

                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu mb-2">
                        <a href="{{ url('/') }}">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FAQs</a>
                    </div>

                    <div class="small text-white-50">
                        Designed By <a class="border-bottom text-white-50" href="https://htmlcodex.com"
                            target="_blank">HTML Codex</a>
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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const navbar = document.querySelector(".navbar");
            const collapse = document.querySelector(".navbar-collapse");

            function checkScrollState() {
                if (window.scrollY <= 50 && !collapse.classList.contains("show")) {
                    navbar.classList.remove("nav-open");
                }
            }

            collapse.addEventListener("show.bs.collapse", function () {
                navbar.classList.add("nav-open");
            });

            collapse.addEventListener("hidden.bs.collapse", function () {
                checkScrollState();
            });

            window.addEventListener("scroll", function () {
                if (window.scrollY > 50) {
                    navbar.classList.add("nav-open");
                } else {
                    checkScrollState();
                }
            });
        });
    </script>

    <script>
        function bukaWaPopup() {
            const popup = document.getElementById("waPopupForm");
            // Toggle tampil/sembunyi kotak pop-up
            if (popup.style.display === "none" || popup.style.display === "") {
                popup.style.display = "block";
            } else {
                popup.style.display = "none";
            }
        }

        function tutupWaPopup() {
            document.getElementById("waPopupForm").style.display = "none";
        }

        function kirimFloatingWa(event) {
            event.preventDefault(); // Cegah reload halaman

            const nama = document.getElementById("namaVisitor").value;
            // Gunakan nomor API resmi "628...", sistem WA dan Wablas otomatis membaca ini sebagai 08.
            const noTujuan = "628138808690";
            const teksWA = "Halo Lokavira, saya " + nama + ". Saya ingin konsultasi mengenai layanan digital marketing Anda.";

            // Encode teks menjadi format URL
            const urlWA = "https://wa.me/" + noTujuan + "?text=" + encodeURIComponent(teksWA);

            // Kosongkan form, tutup popup, lalu buka WA di tab baru
            document.getElementById("namaVisitor").value = "";
            tutupWaPopup();
            window.open(urlWA, "_blank");
        }
    </script>
</body>

</html>
