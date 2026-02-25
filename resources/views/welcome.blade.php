@extends('layouts.app')

@section('content')
                <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
            <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img class="w-100" src="{{ asset('img/carousel-3.jpg') }}" alt="Lokavira Digital Marketing">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row align-items-center justify-content-between">

                                    <div class="col-lg-6 col-md-12 mb-4 mb-lg-0 text-start">
                                        <p
                                            class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                            Selamat Datang di Lokavira
                                        </p>

                                        <h1 class="display-3 mb-3 animated slideInDown fw-bold">
                                            Digital Marketing <br> Agency
                                        </h1>

                                        <p class="fs-5 mb-4 animated slideInDown text-dark" style="animation-delay: 0.2s;">
                                            Kami membantu bisnis Anda tumbuh lebih cepat melalui strategi konten kreatif,
                                            pengelolaan media sosial, dan kampanye iklan yang tepat sasaran.
                                        </p>

                                        <a href="{{ url('/service') }}" class="btn btn-primary py-3 px-5 animated slideInDown"
                                            style="animation-delay: 0.4s;">
                                            Lihat Layanan
                                        </a>
                                    </div>

                                   <div class="col-lg-6 col-md-12 text-center text-lg-end">
                                        <img src="{{ asset('img/mockup1.jpg') }}" alt="Ilustrasi Digital Marketing"
                                            class="img-fluid animated slideInRight"
                                            style="width: 100%; max-width: 750px; height: auto; animation-delay: 0.6s;">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('img/carousel-3.jpg') }}" alt="Creative Solutions">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row align-items-center justify-content-between">

                                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0 text-start">
                                    <p
                                        class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                        Tingkatkan Bisnis Anda
                                    </p>

                                    <h1 class="display-4 mb-3 animated slideInDown fw-bold text-dark">
                                        Solusi Kreatif Untuk <br> Brand Digital Anda
                                    </h1>

                                    <p class="fs-5 mb-4 animated slideInDown text-dark" style="animation-delay: 0.2s;">
                                        Membangun identitas digital yang kuat dengan desain inovatif dan strategi konten yang memikat
                                        audiens.
                                    </p>

                                    <a href="{{ url('/contact') }}" class="btn btn-primary py-3 px-5 animated slideInDown"
                                        style="animation-delay: 0.4s;">
                                        Konsultasi Gratis
                                    </a>
                                </div>

                                <div class="col-lg-6 col-md-12 text-center text-lg-end">
                                    <img src="{{ asset('img/mockup2.png') }}" alt="Creative Brand Solutions"
                                        class="img-fluid animated slideInRight"
                                        style="width: 100%; max-width: unset; margin-right: -15%; height: auto; animation-delay: 0.6s;">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
                <!-- Carousel End -->


                <!-- About Start -->
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row g-4 align-items-end mb-4">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <img class="img-fluid rounded" src="img/about1.jpg" alt="Tentang Lokavira">
                            </div>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Tentang Kami</p>
                                <h1 class="display-5 mb-4">Mitra Digital Terbaik untuk Pertumbuhan Bisnis Anda</h1>
                                <p class="mb-4">
                                    Lokavira hadir sebagai solusi lengkap kebutuhan digital marketing Anda.
                                    Kami memadukan kreativitas konten, strategi media sosial yang jitu,
                                    dan pengelolaan iklan yang efisien untuk memastikan brand Anda tidak hanya dilihat,
                                    tapi juga diingat dan dipilih oleh pelanggan.
                                </p>
                                <div class="border rounded p-4">
                                    <nav>
                                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                            <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                                aria-selected="true">Siapa Kami</button>
                                            <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"
                                                aria-selected="false">Misi</button>
                                            <button class="nav-link fw-semi-bold" id="nav-vision-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision"
                                                aria-selected="false">Visi</button>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                                            aria-labelledby="nav-story-tab">
                                            <p>Lokavira adalah agensi digital marketing yang berdedikasi membantu UMKM dan perusahaan
                                                korporat beradaptasi di era digital.</p>
                                            <p class="mb-0">Kami percaya setiap bisnis memiliki cerita unik. Tugas kami adalah mengemas
                                                cerita tersebut menjadi konten yang menarik dan menjual.</p>
                                        </div>
                                        <div class="tab-pane fade" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                                            <p>Membantu klien mencapai target penjualan melalui strategi digital yang terukur dan
                                                efisien.</p>
                                            <p class="mb-0">Memberikan layanan pengelolaan media sosial yang responsif, kreatif, dan
                                                inovatif.</p>
                                        </div>
                                        <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                                            <p>Menjadi agensi digital marketing nomor satu yang paling dipercaya dalam menumbuhkan
                                                ekosistem bisnis digital di Indonesia.</p>
                                            <p class="mb-0">Selalu berinovasi dengan tren teknologi pemasaran terbaru.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="row g-4">

                                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="h-100">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                                <i class="fa fa-bolt text-white"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h4>Respon Cepat</h4>
                                                <span>Kami menghargai waktu Anda. Tim kami siap merespons kebutuhan dan revisi dengan
                                                    kilat.</span>
                                            </div>
                                            <div class="border-end d-none d-lg-block"></div>
                                        </div>
                                        <div class="border-bottom mt-4 d-block d-lg-none"></div>
                                    </div>
                                </div>

                                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="h-100">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                                <i class="fa fa-users text-white"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h4>Tim Profesional</h4>
                                                <span>Dikerjakan oleh ahli strategi, konten kreator, dan desainer grafis
                                                    berpengalaman.</span>
                                            </div>
                                            <div class="border-end d-none d-lg-block"></div>
                                        </div>
                                        <div class="border-bottom mt-4 d-block d-lg-none"></div>
                                    </div>
                                </div>

                                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="h-100">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                                <i class="fa fa-headset text-white"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h4>Konsultasi Brand</h4>
                                                <span>Kami tidak hanya sekadar membuat dan memposting konten sosial media Anda. Kami juga hadir sebagai partner diskusi untuk
                                                merancang strategi digital marketing yang tepat sasaran.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- About End -->

                <!-- Service Start -->
            <div class="container-xxl service py-5">
                <div class="container">

                    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Layanan Kami</p>
                        <h1 class="display-5 mb-5">Solusi Digital Terbaik untuk Bisnis Anda</h1>
                    </div>

                    <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                        <div class="col-lg-10">
                            <nav>
                                <div class="nav nav-pills justify-content-center mb-5" id="nav-tab" role="tablist">

                                    <button class="nav-link border py-3 px-5 active me-3" id="nav-social-tab" data-bs-toggle="pill"
                                        data-bs-target="#nav-social" type="button" role="tab" aria-controls="nav-social"
                                        aria-selected="true">
                                        <h5 class="m-0"><i class="fa fa-share-alt text-primary me-3"></i>Social Media Management
                                        </h5>
                                    </button>

                                    <button class="nav-link border py-3 px-5" id="nav-web-tab" data-bs-toggle="pill"
                                        data-bs-target="#nav-web" type="button" role="tab" aria-controls="nav-web"
                                        aria-selected="false">
                                        <h5 class="m-0"><i class="fa fa-laptop-code text-primary me-3"></i>Web Development</h5>
                                    </button>

                                </div>
                            </nav>

                            <div class="tab-content" id="nav-tabContent">

                                <div class="tab-pane fade show active" id="nav-social" role="tabpanel"
                                    aria-labelledby="nav-social-tab">
                                    <div class="row g-4">
                                        <div class="col-md-6" style="min-height: 350px;">
                                            <div class="position-relative h-100">
                                                <img class="position-absolute rounded w-100 h-100" src="img/mediapkt.png"
                                                    style="object-fit: cover;" alt="Jasa Kelola Media Sosial">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3 class="mb-4">Bangun Interaksi, Tingkatkan Penjualan</h3>
                                            <p class="mb-4">
                                                Nggak perlu pusing mikirin konten setiap hari. Biarkan kami yang mengurus strategi,
                                                desain visual yang estetik, hingga postingan terjadwal agar brand Anda makin dikenal
                                                dan orderan makin lancar.
                                            </p>
                                            <p><i class="fa fa-check text-primary me-3"></i>Konten Kreatif & Relevan</p>
                                            <p><i class="fa fa-check text-primary me-3"></i>Admin Posting & Scheduling</p>
                                            <p><i class="fa fa-check text-primary me-3"></i>Laporan Analisa Bulanan</p>
                                            <a href="{{ url('/paket') }}" class="btn btn-primary py-3 px-5 mt-3">Lihat Pilihan Paket</a>

                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-web" role="tabpanel" aria-labelledby="nav-web-tab">
                                    <div class="row g-4">
                                        <div class="col-md-6" style="min-height: 350px;">
                                            <div class="position-relative h-100">
                                                <img class="position-absolute rounded w-100 h-100" src="img/webpkt.png"
                                                    style="object-fit: cover;" alt="Jasa Pembuatan Website">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3 class="mb-4">Website Profesional, Kredibilitas Meningkat</h3>
                                            <p class="mb-4">
                                                Miliki "kantor digital" yang buka 24 jam. Kami membangun website yang cepat,
                                                responsif di semua perangkat, dan didesain khusus untuk mengubah pengunjung
                                                menjadi pelanggan setia bisnis Anda.
                                            </p>
                                            <p><i class="fa fa-check text-primary me-3"></i>Desain Modern & Responsif</p>
                                            <p><i class="fa fa-check text-primary me-3"></i>Optimasi SEO Dasar</p>
                                            <p><i class="fa fa-check text-primary me-3"></i>Gratis Domain & Hosting*</p>
                                            <a href="/website" class="btn btn-primary py-3 px-5 mt-3">Cek Fitur Website</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- Service End -->

                <div class="container-fluid py-4 my-4 wow fadeIn" data-wow-delay="0.1s"
                    style="background: linear-gradient(135deg, #0C8C8C 0%, #085e5e 100%);">
                    <div class="container py-3 text-center">
                        <h2 class="display-5 text-white mb-3">Bingung Mulai Strategi Digital dari Mana?</h2>

                        <p class="text-white-50 mb-4 mx-auto" style="max-width: 700px;">
                            Jangan buang waktu dan anggaran Anda untuk *trial & error*. Mari diskusikan kebutuhan brand Anda dengan tim
                            ahli Lokavira. Kami siap memberikan panduan secara gratis!
                        </p>

                        <a href="https://wa.me/628138808690?text=Halo%20Loka,%20saya%20ingin%20konsultasi%20gratis%20mengenai%20strategi%20digital%20bisnis%20saya."
                            target="_blank" class="btn btn-warning text-dark py-2 px-4 rounded-pill fw-bold shadow">
                            <i class="fab fa-whatsapp me-2"></i> Mulai Konsultasi Gratis
                        </a>
                    </div>
                </div>


                <!-- Projects Start -->
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Portofolio Kami</p>
                            <h1 class="display-5 mb-5">Lihat Hasil Kolaborasi & Karya Terbaik Kami</h1>
                        </div>

                        <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.3s">

                            <div class="project-item pe-5 pb-5">
                                <div class="project-img mb-3">
                                    <img class="img-fluid rounded" src="img/service-1.jpg" alt="Social Media Project">
                                    <a href=""><i class="fa fa-link fa-3x text-primary"></i></a>
                                </div>
                                <div class="project-title">
                                    <h4 class="mb-0">Social Media Growth (F&B)</h4>
                                </div>
                            </div>

                            <div class="project-item pe-5 pb-5">
                                <div class="project-img mb-3">
                                    <img class="img-fluid rounded" src="img/service-2.jpg" alt="Website Project">
                                    <a href=""><i class="fa fa-link fa-3x text-primary"></i></a>
                                </div>
                                <div class="project-title">
                                    <h4 class="mb-0">Website Company Profile</h4>
                                </div>
                            </div>

                            <div class="project-item pe-5 pb-5">
                                <div class="project-img mb-3">
                                    <img class="img-fluid rounded" src="img/service-3.jpg" alt="Digital Campaign">
                                    <a href=""><i class="fa fa-link fa-3x text-primary"></i></a>
                                </div>
                                <div class="project-title">
                                    <h4 class="mb-0">Digital Campaign Strategy</h4>
                                </div>
                            </div>

                            <div class="project-item pe-5 pb-5">
                                <div class="project-img mb-3">
                                    <img class="img-fluid rounded" src="img/service-4.jpg" alt="Branding Project">
                                    <a href=""><i class="fa fa-link fa-3x text-primary"></i></a>
                                </div>
                                <div class="project-title">
                                    <h4 class="mb-0">Brand Identity & Design</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Projects End -->


                <div class="container-xxl py-5 bg-white border-top border-bottom">
                    <div class="container py-4">
                        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                            <p class="fs-5 fw-bold text-primary mb-2">Jejaring Kami</p>
                            <h2 class="display-6 mb-5">Telah Dipercaya Oleh</h2>
                        </div>
                        <div class="row justify-content-center align-items-center text-center wow fadeInUp" data-wow-delay="0.3s">

                            <div class="col-6 col-sm-4 col-md-3 px-4 mb-4">
                                <img src="{{ asset('img/pt1.jpg') }}" alt="Partner Lokavira" class="img-fluid client-logo">
                            </div>

                        </div>
                    </div>
                </div>
                <style>
                    .client-logo {
                        filter: grayscale(100%);
                        /* Bikin logo jadi abu-abu elegan */
                        opacity: 0.6;
                        /* Agak dipudarkan */
                        transition: all 0.3s ease;
                        max-height: 90px;
                        /* Biar ukuran logonya nggak raksasa */
                        object-fit: contain;
                        cursor: pointer;
                    }

                    .client-logo:hover {
                        filter: grayscale(0%);
                        /* Warnanya balik asli (kuning) saat disentuh */
                        opacity: 1;
                        /* Jadi terang 100% */
                        transform: scale(1.05);
                        /* Sedikit membesar membal */
                    }
                </style>

                <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">

                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Hubungi Kami</p>
                        <h1 class="display-5 mb-4">Siap Meningkatkan Bisnis Anda ke Level Berikutnya?</h1>
                        <p class="mb-4">
                            Jangan ragu untuk berdiskusi dengan kami. Tim Lokavira siap memberikan solusi digital terbaik yang
                            sesuai dengan target dan anggaran Anda.
                        </p>

                        <form id="waFormHome" onsubmit="kirimKeWhatsAppHome(event)">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="waNameHome" placeholder="Nama Lengkap"
                                            required>
                                        <label for="waNameHome">Nama Lengkap</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" id="waPhoneHome" placeholder="08xxxxxxxxxx"
                                            pattern="^08[0-9]{8,11}$" title="Nomor WhatsApp harus diawali dengan 08" required>
                                        <label for="waPhoneHome">No. WhatsApp (Awali: 08)</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Tulis pesan Anda di sini" id="waMessageHome"
                                            style="height: 120px" required></textarea>
                                        <label for="waMessageHome">Pesan Anda</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary py-3 px-5 rounded-pill w-100 fw-bold" type="submit">
                                        <i class="fab fa-whatsapp me-2 fs-5 align-middle"></i> Kirim Pesan via WhatsApp
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                        <div class="position-relative rounded overflow-hidden h-100 shadow-sm">
                            <iframe class="position-relative w-100 h-100"
                                src="https://maps.google.com/maps?q=Jl.+Gading+Griya+Lestari+H1+No.39,+Cilincing,+Jakarta+Utara&t=&z=15&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function kirimKeWhatsAppHome(event) {
                event.preventDefault();
                var nama = document.getElementById('waNameHome').value;
                var pesan = document.getElementById('waMessageHome').value;
                var noTujuan = "628138808690";
                var teksWA = "Halo Lokavira, saya " + nama + ".\n\n" + pesan;
                var urlWA = "https://wa.me/" + noTujuan + "?text=" + encodeURIComponent(teksWA);
                window.open(urlWA, "_blank");
            }
        </script>
                <!-- Contact End -->
@endsection
