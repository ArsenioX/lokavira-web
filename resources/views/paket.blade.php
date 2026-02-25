@extends('layouts.app')

@section('content')
    <style>
        html {
            scroll-behavior: smooth;
        }

        .feature-card,
        .service-card {
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08) !important;
            border-bottom: 3px solid #0C8C8C !important;
            /* Warna Hijau LV */
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important;
        }

        .icon-box-feature {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            background-color: rgba(12, 140, 140, 0.1);
            /* Background transparan Hijau LV */
            color: #0C8C8C;
            /* Warna Icon Hijau LV */
            margin-bottom: 1.2rem;
        }

        /* Style untuk banner tools */
        .trust-banner h5 {
            font-size: 1.1rem;
            color: #495057;
        }
    </style>

    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown text-black">Jasa Social Media</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/service') }}">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Paket Sosial Media</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3 mb-3">Miliki Social Media
                        Profesional</p>
                    <h1 class="display-5 mb-4">Partner Kelola Media Sosial Terbaik</h1>
                    <p class="lead mb-4 text-muted">Maksimalkan potensi digital bisnis Anda. Lokavira menyediakan layanan
                        pengelolaan media sosial kelas atas untuk menjaga konsistensi brand dan menjangkau audiens secara
                        profesional.</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="#pilihan-paket" class="btn btn-primary py-3 px-4 fw-bold rounded-pill text-white">Lihat
                            Pilihan Paket</a>
                        <a href="#mengapa-lokavira" class="btn btn-outline-dark py-3 px-4 fw-bold rounded-pill">Mengapa
                            Lokavira? <i class="fa fa-arrow-down ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img src="https://placehold.co/800x600/0C8C8C/EAB308?text=Mockup+Dashboard/Tim+Profesional"
                        class="img-fluid rounded shadow-lg w-100" alt="Social Media Agency Lokavira"
                        style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light py-4 border-top border-bottom wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <p class="text-muted small fw-bold mb-3 text-uppercase" style="letter-spacing: 2px;">Menggunakan Platform &
                Tools Standar Industri</p>
            <div class="d-flex justify-content-center flex-wrap gap-4 gap-md-5 trust-banner opacity-75">
                <h5 class="m-0 d-flex align-items-center"><i class="fab fa-meta me-2 text-primary"></i>Meta Business</h5>
                <h5 class="m-0 d-flex align-items-center"><i class="fab fa-tiktok me-2 text-dark"></i>TikTok Ads</h5>
                <h5 class="m-0 d-flex align-items-center"><i class="fas fa-pen-nib me-2 text-danger"></i>Adobe Creative</h5>
                <h5 class="m-0 d-flex align-items-center"><i class="fas fa-chart-line me-2 text-warning"></i>Analytics</h5>
            </div>
        </div>
    </div>

    <div id="pilihan-paket" class="container-xxl py-5 mt-4">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h2 class="display-5 mb-3">Pilihan Platform</h2>
                <p class="lead mb-5 text-muted">Setiap bisnis punya target audiens yang berbeda. Pilih platform di bawah
                    ini, atau ambil paket Full 360° untuk hasil yang masif.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card h-100 border-0 shadow-sm text-center p-4 service-card d-flex flex-column">
                        <div class="mx-auto mb-4 bg-white shadow-sm rounded-circle d-flex align-items-center justify-content-center"
                            style="width: 80px; height: 80px;">
                            <i class="fab fa-instagram fa-3x" style="color: #E1306C;"></i>
                        </div>
                        <h4 class="mb-3">Instagram</h4>
                        <p class="text-muted mb-4 small">Feed estetik, Reels viral, dan Stories engaging untuk membangun
                            branding visual yang kuat.</p>
                        <div class="mt-auto">
                            <a href="{{ url('/paket/instagram') }}" class="btn btn-outline-primary w-100 rounded-pill">Lihat
                                Paket</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 border-0 shadow-sm text-center p-4 service-card d-flex flex-column">
                        <div class="mx-auto mb-4 bg-white shadow-sm rounded-circle d-flex align-items-center justify-content-center"
                            style="width: 80px; height: 80px;">
                            <i class="fab fa-tiktok fa-3x text-dark"></i>
                        </div>
                        <h4 class="mb-3">TikTok</h4>
                        <p class="text-muted mb-4 small">Kuasai FYP, ikuti sound trending, dan tingkatkan konversi jualan
                            lewat optimasi TikTok Shop.</p>
                        <div class="mt-auto">
                            <a href="{{ url('/paket/tiktok') }}" class="btn btn-outline-dark w-100 rounded-pill">Lihat
                                Paket</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card h-100 border-0 shadow-sm text-center p-4 service-card d-flex flex-column">
                        <div class="mx-auto mb-4 bg-white shadow-sm rounded-circle d-flex align-items-center justify-content-center"
                            style="width: 80px; height: 80px;">
                            <i class="fab fa-youtube fa-3x text-danger"></i>
                        </div>
                        <h4 class="mb-3">YouTube</h4>
                        <p class="text-muted mb-4 small">Dominasi pencarian dengan video Long-form, Shorts, dan SEO mumpuni
                            untuk aset jangka panjang.</p>
                        <div class="mt-auto">
                            <a href="{{ url('/paket/youtube') }}" class="btn btn-outline-danger w-100 rounded-pill">Lihat
                                Paket</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div
                        class="card h-100 border-0 shadow text-center p-4 service-card d-flex flex-column text-white position-relative bg-primary">
                        <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-3">Diskon Bundling</span>
                        <div class="mx-auto mb-4 bg-white shadow-sm rounded-circle d-flex align-items-center justify-content-center"
                            style="width: 80px; height: 80px;">
                            <i class="fa fa-rocket fa-3x text-primary"></i>
                        </div>
                        <h4 class="mb-3 text-white">Full 360°</h4>
                        <p class="text-white-50 mb-4 small">Satu paket kuasai semua platform (IG, TikTok, YT). Harga hemat,
                            strategi terintegrasi.</p>
                        <div class="mt-auto">
                            <a href="{{ url('/paket/full') }}"
                                class="btn btn-warning text-dark fw-bold w-100 rounded-pill">Lihat Paket Full</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="mengapa-lokavira" class="container-xxl py-5 bg-light">
        <div class="container py-4">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2 class="display-6 mb-5">Kenapa Memilih <span class="text-primary">Lokavira?</span></h2>
            </div>
            <div class="row g-4">

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-card bg-white p-4 h-100 rounded shadow-sm border border-light">
                        <div class="icon-box-feature"><i class="fa fa-lightbulb fs-5"></i></div>
                        <h5 class="mb-2 fs-5 fw-bold">Desain Custom & Riset Tren</h5>
                        <p class="text-muted mb-0 small">Aset visual dirancang khusus sesuai karakter brand Anda (bukan
                            *template*
                            pasaran), dipadukan dengan riset pasar dan tren terkini agar konten selalu relevan.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-card bg-white p-4 h-100 rounded shadow-sm border border-light">
                        <div class="icon-box-feature"><i class="fa fa-layer-group fs-5"></i></div>
                        <h5 class="mb-2 fs-5 fw-bold">Layanan Terintegrasi</h5>
                        <p class="text-muted mb-0 small">Mulai dari riset tren, pembuatan ide konten, *copywriting*, desain,
                            hingga penjadwalan harian ada di dalam satu paket layanan.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="feature-card bg-white p-4 h-100 rounded shadow-sm border border-light">
                        <div class="icon-box-feature"><i class="fa fa-calendar-check fs-5"></i></div>
                        <h5 class="mb-2 fs-5 fw-bold">Disiplin Output & Jadwal</h5>
                        <p class="text-muted mb-0 small">Kami memberikan kepastian output. Jadwal *posting* konten akan
                            berjalan konsisten setiap bulan tanpa ada hari yang terlewat.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-card bg-white p-4 h-100 rounded shadow-sm border border-light">
                        <div class="icon-box-feature"><i class="fa fa-clipboard-check fs-5"></i></div>
                        <h5 class="mb-2 fs-5 fw-bold">Pengelolaan Profesional</h5>
                        <p class="text-muted mb-0 small">Setiap konten yang diunggah dipastikan telah melewati proses
                            *Quality Control* (QC) untuk menjaga kualitas visual dan teks tetap prima.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-card bg-white p-4 h-100 rounded shadow-sm border border-light">
                        <div class="icon-box-feature"><i class="fa fa-headset fs-5"></i></div>
                        <h5 class="mb-2 fs-5 fw-bold">Support Koordinasi Cepat</h5>
                        <p class="text-muted mb-0 small">Kami menyediakan grup WhatsApp khusus untuk kemudahan proses
                            *approval* konten dan revisi dengan respons cepat di hari kerja.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-card bg-white p-4 h-100 rounded shadow-sm border border-light">
                        <div class="icon-box-feature"><i class="fa fa-file-invoice fs-5"></i></div>
                        <h5 class="mb-2 fs-5 fw-bold">Laporan Kinerja Transparan</h5>
                        <p class="text-muted mb-0 small">Anda akan menerima laporan bulanan berisi data analitik performa
                            akun, *reach*, dan interaksi sebagai bahan evaluasi bersama.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-white">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="text-center mb-4">Pertanyaan Seputar Layanan Social Media</h3>
                    <div class="accordion shadow-sm" id="faqSosmed">

                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header" id="faqHeadingOne">
                                <button class="accordion-button fw-bold text-dark bg-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true"
                                    aria-controls="faqCollapseOne">
                                    Berapa lama minimal kontrak kerja sama?
                                </button>
                            </h2>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="faqHeadingOne" data-bs-parent="#faqSosmed">
                                <div class="accordion-body text-muted small">
                                    Minimal kontrak adalah <strong>1 Bulan</strong>. Namun, kami selalu menyarankan klien
                                    untuk mengamankan slot perpanjangan di akhir bulan agar proses algoritma, jadwal
                                    *posting*, dan pertumbuhan akun Anda di bulan berikutnya tidak terputus.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header" id="faqHeadingTwo">
                                <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false"
                                    aria-controls="faqCollapseTwo">
                                    Bagaimana sistem pembuatan foto atau video produk?
                                </button>
                            </h2>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo"
                                data-bs-parent="#faqSosmed">
                                <div class="accordion-body text-muted small">
                                    Jika Anda memiliki produk fisik (makanan, barang, pakaian, dll), <strong>Anda wajib
                                        mengirimkan produk tersebut ke studio kami</strong>. Tim Lokavira yang akan
                                    menyiapkan *footage* (pengambilan gambar dan video) secara profesional untuk bahan baku
                                    konten Anda.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header" id="faqHeadingThree">
                                <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false"
                                    aria-controls="faqCollapseThree">
                                    Apakah Lokavira menyediakan talent / model untuk difoto?
                                </button>
                            </h2>
                            <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree"
                                data-bs-parent="#faqSosmed">
                                <div class="accordion-body text-muted small">
                                    Untuk saat ini, <strong>klien diharapkan menyiapkan foto model atau *talent*
                                        sendiri</strong> sebagai stok aset konten. Tim kami akan mengarahkan gaya visual dan
                                    konsepnya, lalu mengedit foto/video tersebut menjadi konten yang menarik.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 text-center text-white wow fadeIn" data-wow-delay="0.1s"
        style="background: linear-gradient(135deg, #0C8C8C 0%, #085e5e 100%);">
        <div class="container">
            <h2 class="mb-4 text-white">Bingung Pilih Platform Mana yang Cocok?</h2>
            <p class="lead mb-4">Setiap bisnis punya karakteristik unik. Mari konsultasikan dengan tim ahli kami secara
                gratis!</p>
            <a href="https://wa.me/628138808690?text=Halo%20Loka,%20saya%20bingung%20menentukan%20paket%20sosmed%20yang%20cocok%20untuk%20bisnis%20saya.%20Bisa%20bantu%20konsultasi?"
                class="btn btn-light btn-lg px-5 text-primary fw-bold rounded-pill" target="_blank">Chat WA Sekarang</a>
        </div>
    </div>
@endsection
