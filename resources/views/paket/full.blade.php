@extends('layouts.app')

@section('content')
    <style>
        html {
            scroll-behavior: smooth;
        }

        .pricing-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 15px;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
        }

        .pricing-list li {
            margin-bottom: 12px;
            display: flex;
            align-items: flex-start;
        }

        .pricing-list i {
            margin-top: 4px;
        }

        .portfolio-item {
            overflow: hidden;
            border-radius: 15px;
        }

        /* CSS PORTOFOLIO SERAGAM  */
        .portfolio-item img {
            width: 100%;
            aspect-ratio: 16/9;
            /* Memaksa kotak memanjang 16:9 */
            object-fit: cover;
            /* Mencegah gambar gepeng */
            border-radius: 15px;
            transition: transform 0.5s ease;
        }

        .portfolio-item:hover img {
            transform: scale(1.1);
        }

        .step-icon {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(12, 140, 140, 0.1);
            /* Teal Transparan Lokavira */
            color: #0C8C8C;
            /* Teal Lokavira */
            font-size: 1.5rem;
            margin: 0 auto 1rem;
        }
    </style>

    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown text-black">Paket Full 360°</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/paket') }}">Paket Sosial Media</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Full 360°</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container py-4">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3 mb-3"><i
                            class="fa fa-gem me-2"></i>Layanan Omnichannel</p>
                    <h1 class="display-4 mb-4">Satu Paket, Kuasai Semua Platform Digital!</h1>
                    <p class="lead mb-4 text-muted">Mengapa repot mencari tim berbeda untuk Instagram, TikTok, dan YouTube?
                        Tim ahli Lokavira meramu semuanya menjadi satu strategi terpadu. Lebih efisien, lebih hemat
                        anggaran, dan hasilkan konversi masif dengan konsistensi brand 100%.</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="#harga-paket" class="btn btn-primary py-3 px-4 fw-bold rounded-pill text-white">Lihat Harga
                            Bundling</a>
                        <a href="#cara-kerja" class="btn btn-outline-dark py-3 px-4 fw-bold rounded-pill">Cara Kami
                            Bekerja</a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img src="{{ asset('img/fullpkt.png') }}" class="img-fluid rounded shadow-lg w-100"
                        alt="Full 360 Omnichannel Lokavira" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>

    <div id="cara-kerja" class="container-xxl py-5 bg-light mt-5">
        <div class="container py-4">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h2 class="display-6 mb-5">Sinergi <span class="text-primary">Omnichannel</span> Lokavira</h2>
            </div>
            <div class="row g-4 text-center">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="step-icon"><i class="fa fa-project-diagram"></i></div>
                    <h5 class="fw-bold">1. Grand Strategy</h5>
                    <p class="text-muted small">Satu perencanaan besar (content calendar) yang dirancang khusus untuk
                        memayungi semua platform Anda.</p>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="step-icon"><i class="fa fa-camera-retro"></i></div>
                    <h5 class="fw-bold">2. Produksi Efisien</h5>
                    <p class="text-muted small">Shooting satu kali, diolah menjadi berbagai format (Reels, TikTok, Shorts,
                        dan Feed) secara profesional.</p>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="step-icon"><i class="fa fa-sync-alt"></i></div>
                    <h5 class="fw-bold">3. Crossposting Cerdas</h5>
                    <p class="text-muted small">Mendistribusikan konten dengan caption dan hashtag yang disesuaikan dengan
                        algoritma masing-masing aplikasi.</p>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="step-icon"><i class="fa fa-chart-bar"></i></div>
                    <h5 class="fw-bold">4. Laporan Terpadu</h5>
                    <p class="text-muted small">Anda tidak perlu pusing membaca banyak data. Kami satukan laporannya dalam
                        satu dashboard evaluasi yang mudah dipahami.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="harga-paket" class="container-xxl py-5 mt-4 border-top border-bottom">
        <div class="container py-4">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <p class="fs-5 fw-bold text-primary">Instagram + TikTok + YouTube</p>
                <h2 class="display-5 mb-5">Pilihan Investasi Ekosistem Digital</h2>
            </div>
            <div class="row g-4 justify-content-center align-items-center">

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card pricing-card h-100 border border-light shadow-sm p-4 p-xl-5 bg-white">
                        <div class="text-center mb-4">
                            <h4 class="fw-bold mb-3 text-dark">Ignite 360</h4>
                            <p class="text-muted small">Hadirkan brand Anda di semua platform utama</p>
                            <h2 class="text-primary display-6 fw-bold mb-0">Rp 2.800.000</h2>
                            <span class="text-muted small">/bulan</span>
                        </div>
                        <hr class="mb-4">
                        <ul class="list-unstyled pricing-list text-muted small mb-4">
                            <li><i class="fa fa-check text-primary me-3"></i><span>12 Desain Feed & 5 Story IG</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>10 Video Pendek (Bisa Crosspost ke
                                    TikTok/Reels/Shorts)</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>Optimasi Profil & Bio di 3
                                    Platform</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>Riset Tren & Keyword Dasar</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>Admin Posting & Penjadwalan
                                    Terpadu</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>1x Laporan Terpadu Bulanan</span></li>
                        </ul>
                        <div class="mt-auto pt-4">
                            <a href="https://wa.me/628138808690?text=Halo%20Loka,%20saya%20tertarik%20pesan%20Paket%20Ignite%20360"
                                class="btn btn-outline-primary w-100 py-3 rounded-pill fw-bold" target="_blank">Pilih Ignite
                                360</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card pricing-card h-100 border-0 shadow-lg p-4 p-xl-5 position-relative bg-primary"
                        style="background: linear-gradient(135deg, #0C8C8C 0%, #085e5e 100%); transform: scale(1.05); z-index: 1;">
                        <div class="position-absolute top-0 start-50 translate-middle">
                            <span
                                class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold border border-white">Paling
                                Diminati</span>
                        </div>
                        <div class="text-center mb-4 mt-3">
                            <h4 class="fw-bold mb-3 text-white">Boost 360</h4>
                            <p class="text-white-50 small">Dominasi algoritma & tingkatkan konversi jualan</p>
                            <h2 class="text-warning display-6 fw-bold mb-0">Rp 6.500.000</h2>
                            <span class="text-white-50 small">/bulan</span>
                        </div>
                        <hr class="border-light mb-4 opacity-50">
                        <ul class="list-unstyled pricing-list text-white small mb-4">
                            <li><i class="fa fa-check text-warning me-3"></i><span>18 Desain Feed & 12 Story IG</span></li>
                            <li><i class="fa fa-check text-warning me-3"></i><span>15 Video Pendek (Fokus Jualan &
                                    Hook)</span></li>
                            <li><i class="fa fa-check text-warning me-3"></i><span>2 Video YouTube Long-Form + Custom
                                    Thumbnail</span></li>
                            <li><i class="fa fa-check text-warning me-3"></i><span>Desain & Setup TikTok Shop (Maks 15
                                    SKU)</span></li>
                            <li><i class="fa fa-check text-warning me-3"></i><span>Manajemen Audiens & Balas Komen
                                    Interaktif</span></li>
                            <li><i class="fa fa-check text-warning me-3"></i><span>Grup WhatsApp Prioritas</span></li>
                            <li><i class="fa fa-check text-warning me-3"></i><span>2x Laporan & Evaluasi Kinerja
                                    Bulanan</span></li>
                        </ul>
                        <div class="mt-auto pt-4">
                            <a href="https://wa.me/628138808690?text=Halo%20Loka,%20saya%20tertarik%20pesan%20Paket%20Boost%20360"
                                class="btn btn-warning text-dark fw-bold w-100 py-3 rounded-pill shadow"
                                target="_blank">Pilih Boost 360</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card pricing-card h-100 border border-light shadow-sm p-4 p-xl-5 bg-white">
                        <div class="text-center mb-4">
                            <h4 class="fw-bold mb-3 text-dark">Accelerate 360</h4>
                            <p class="text-muted small">Scale-up bisnis secara autopilot & masif</p>
                            <h2 class="text-primary display-6 fw-bold mb-0">Rp 12.000.000</h2>
                            <span class="text-muted small">/bulan</span>
                        </div>
                        <hr class="mb-4">
                        <ul class="list-unstyled pricing-list text-muted small mb-4">
                            <li><i class="fa fa-check text-primary me-3"></i><span>24 Desain Feed & 20 Story IG
                                    Premium</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>25 Video Pendek Dinamis (Siap
                                    Crosspost)</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>4 Video YouTube Long-Form +
                                    Thumbnail</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>Full 30 Hari Manajemen Aktif & Support
                                    Komen</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>Optimasi TikTok Shop Lanjutan</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>Setup Ads IG/TikTok/YT Dasar (Saldo
                                    Klien)</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>Laporan Lengkap 4x + Konsultasi
                                    Zoom</span></li>
                        </ul>
                        <div class="mt-auto pt-4">
                            <a href="https://wa.me/628138808690?text=Halo%20Loka,%20saya%20tertarik%20pesan%20Paket%20Accelerate%20360"
                                class="btn btn-outline-primary w-100 py-3 rounded-pill fw-bold" target="_blank">Pilih
                                Accelerate 360</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-light">
        <div class="container py-4">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2 class="display-6 mb-5">Portofolio</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-item shadow-sm text-center">
                        <img src="https://placehold.co/1280x720/E1306C/ffffff?text=Instagram+Feed" class="img-fluid w-100"
                            alt="Instagram Portfolio">
                        <p class="mt-3 fw-bold text-dark">Visual Branding (Instagram)</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-item shadow-sm text-center">
                        <img src="https://placehold.co/1280x720/212529/ffffff?text=TikTok+Video" class="img-fluid w-100"
                            alt="TikTok Portfolio">
                        <p class="mt-3 fw-bold text-dark">Viral & Konversi (TikTok)</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-item shadow-sm text-center">
                        <img src="https://placehold.co/1280x720/cc0000/ffffff?text=YouTube+Thumbnail"
                            class="img-fluid w-100" alt="YouTube Portfolio">
                        <p class="mt-3 fw-bold text-dark">SEO & Edukasi (YouTube)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-white">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="text-center mb-4">Pertanyaan Seputar Layanan 360°</h3>
                    <div class="accordion shadow-sm" id="faqAccordion">
                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button fw-bold text-dark bg-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Apakah kontennya akan diposting sama persis di semua platform?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted small">
                                    Tidak selalu. Meskipun aset videonya sama, kami akan menyesuaikan copywriting (caption),
                                    lagu/sound, dan hashtag sesuai dengan gaya audiens dan algoritma masing-masing platform
                                    (IG, TikTok, atau YouTube Shorts) agar performanya maksimal.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Apakah ada diskon tambahan jika kontrak langsung 6 bulan atau 1 tahun?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted small">
                                    Tentu saja! Kami sangat menyukai kolaborasi jangka panjang. Silakan hubungi tim kami
                                    melalui tombol WhatsApp di bawah untuk mendapatkan penawaran khusus dan bonus setup awal
                                    untuk kontrak di atas 6 bulan.
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
            <h2 class="mb-4 text-white">Butuh Penyesuaian Fitur Khusus Korporasi?</h2>
            <p class="lead mb-4">Tim kami sangat fleksibel. Mari jadwalkan rapat untuk menyesuaikan isi paket dengan
                kebutuhan spesifik perusahaan Anda.</p>
            <a href="https://wa.me/628138808690?text=Halo%20Loka,%20saya%20mau%20konsultasi%20Custom%20Paket%20360%20Lokavira"
                class="btn btn-warning text-dark btn-lg px-5 fw-bold rounded-pill shadow" target="_blank">Jadwalkan
                Konsultasi Gratis</a>
        </div>
    </div>
@endsection
