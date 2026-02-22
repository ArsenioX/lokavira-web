@extends('layouts.app')

@section('content')
    <style>
        html { scroll-behavior: smooth; }
        .pricing-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 15px;
        }
        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1)!important;
        }
        .pricing-list li {
            margin-bottom: 12px;
            display: flex;
            align-items: flex-start;
        }
        .pricing-list i {
            margin-top: 4px; /* Biar centang sejajar dengan baris pertama teks */
        }
        .portfolio-item {
            overflow: hidden;
            border-radius: 15px;
        }
        .portfolio-item img {
            transition: transform 0.5s ease;
        }
        .portfolio-item:hover img {
            transform: scale(1.1);
        }
        .step-icon {
            width: 60px; height: 60px;
            display: flex; align-items: center; justify-content: center;
            border-radius: 50%;
            background: rgba(13, 110, 253, 0.1);
            color: #0d6efd;
            font-size: 1.5rem;
            margin: 0 auto 1rem;
        }
    </style>

    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Instagram Management</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/paket') }}">Paket Sosial Media</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Instagram</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3 mb-3"><i class="fab fa-instagram me-2"></i>Spesialis Instagram</p>
                    <h1 class="display-5 mb-4">Ubah Followers Menjadi Pelanggan Setia</h1>
                    <p class="lead mb-4 text-muted">Bukan sekadar *feed* yang cantik. Kami merancang strategi visual, *Reels* yang relevan, dan *copywriting* persuasif untuk mendominasi algoritma Instagram dan meningkatkan konversi bisnis Anda.</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="#harga-paket" class="btn btn-primary py-3 px-4 fw-bold rounded-pill">Lihat Harga Paket</a>
                        <a href="#portofolio" class="btn btn-outline-dark py-3 px-4 fw-bold rounded-pill">Lihat Portofolio</a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img src="https://placehold.co/600x600/0b1121/eab308?text=Mockup+Feed+Instagram+Klien" class="img-fluid rounded shadow-lg w-100" alt="Instagram Management Lokavira" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-light mt-5">
        <div class="container py-4">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2 class="display-6 mb-5">Cara Kerja <span class="text-primary">Anti-Ribet</span></h2>
            </div>
            <div class="row g-4 text-center">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="step-icon"><i class="fa fa-search"></i></div>
                    <h5 class="fw-bold">1. Riset & Strategi</h5>
                    <p class="text-muted small">Analisis kompetitor dan pembuatan *content plan* bulanan.</p>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="step-icon"><i class="fa fa-pen-nib"></i></div>
                    <h5 class="fw-bold">2. Produksi Konten</h5>
                    <p class="text-muted small">Desain feed, editing reels, dan penulisan caption oleh tim ahli.</p>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="step-icon"><i class="fa fa-check-double"></i></div>
                    <h5 class="fw-bold">3. Review Klien</h5>
                    <p class="text-muted small">Proses revisi dan *approval* desain via grup WhatsApp khusus.</p>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="step-icon"><i class="fa fa-paper-plane"></i></div>
                    <h5 class="fw-bold">4. Posting & Laporan</h5>
                    <p class="text-muted small">Penjadwalan otomatis dan penyerahan analitik di akhir bulan.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="harga-paket" class="container-xxl py-5 mt-4">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h2 class="display-5 mb-5">Pilihan Investasi Bisnis Anda</h2>
            </div>
            <div class="row g-4 justify-content-center align-items-center">

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card pricing-card h-100 border border-light shadow-sm p-4 p-xl-5 bg-white">
                        <div class="text-center mb-4">
                            <h4 class="fw-bold mb-3 text-dark">Ignite</h4>
                            <p class="text-muted small">Cocok untuk bisnis pemula yang ingin mulai eksis</p>
                            <h2 class="text-primary display-6 fw-bold mb-0">Rp 1.000.000</h2>
                            <span class="text-muted small">/bulan</span>
                        </div>
                        <hr class="mb-4">
                        <ul class="list-unstyled pricing-list text-muted small mb-4">
                            <li><i class="fa fa-check text-primary me-3"></i><span>14 Feed (termasuk 2 Carousel – efektif 10 single + 2 multi)</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>1 Reels (15-30 detik)</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>5 Story</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>1x revisi per konten</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>Admin Posting & Scheduling</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>Optimasi Akun Dasar</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>Private Group Komunikasi</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>Laporan 1x (edukasi saja)</span></li>
                        </ul>
                        <div class="mt-auto pt-4">
                            <a href="https://wa.me/628138808690?text=Halo%20Loka,%20saya%20mau%20pesan%20Paket%20Instagram%20Ignite" class="btn btn-outline-primary w-100 py-3 rounded-pill" target="_blank">Pilih Paket Ignite</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card pricing-card h-100 border-0 shadow-lg p-4 p-xl-5 position-relative bg-primary" style="transform: scale(1.05); z-index: 1;">
                        <div class="position-absolute top-0 start-50 translate-middle">
                            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold border border-white">Most Popular</span>
                        </div>
                        <div class="text-center mb-4 mt-3">
                            <h4 class="fw-bold mb-3 text-white">Boost</h4>
                            <p class="text-white-50 small">Untuk bisnis yang ingin pertumbuhan stabil</p>
                            <h2 class="text-white display-6 fw-bold mb-0">Rp 2.500.000</h2>
                            <span class="text-white-50 small">/bulan</span>
                        </div>
                        <hr class="border-light mb-4 opacity-50">
                        <ul class="list-unstyled pricing-list text-white small mb-4">
                            <li><i class="fa fa-check text-warning me-3"></i><span>18 Feed + 5 Carousel (total 23 template konten)</span></li>
                            <li><i class="fa fa-check text-warning me-3"></i><span>3 Reels (15-30 detik)</span></li>
                            <li><i class="fa fa-check text-warning me-3"></i><span>12 Story</span></li>
                            <li><i class="fa fa-check text-warning me-3"></i><span>1x revisi per konten</span></li>
                            <li><i class="fa fa-check text-warning me-3"></i><span>Admin Posting & Scheduling</span></li>
                            <li><i class="fa fa-check text-warning me-3"></i><span>Optimasi Akun Dasar</span></li>
                            <li><i class="fa fa-check text-warning me-3"></i><span>Private Group Komunikasi</span></li>
                            <li><i class="fa fa-check text-warning me-3"></i><span>Laporan 3x (hasil kinerja, minggu 1 tanpa laporan)</span></li>
                        </ul>
                        <div class="mt-auto pt-4">
                            <a href="https://wa.me/628138808690?text=Halo%20Loka,%20saya%20mau%20pesan%20Paket%20Instagram%20Boost" class="btn btn-warning text-dark fw-bold w-100 py-3 rounded-pill shadow" target="_blank">Pilih Paket Boost</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card pricing-card h-100 border border-light shadow-sm p-4 p-xl-5 bg-white">
                        <div class="text-center mb-4">
                            <h4 class="fw-bold mb-3 text-dark">Accelerate</h4>
                            <p class="text-muted small">Paket premium untuk *scale up* bisnis cepat</p>
                            <h2 class="text-primary display-6 fw-bold mb-0">Rp 5.000.000</h2>
                            <span class="text-muted small">/bulan</span>
                        </div>
                        <hr class="mb-4">
                        <ul class="list-unstyled pricing-list text-muted small mb-4">
                            <li><i class="fa fa-check text-primary me-3"></i><span>24 Feed (custom Carousel)</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>5 Reels + 1 Reels bonus</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>20 Story</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>3x revisi konten pilar + 2x revisi per konten</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>Admin Posting & Scheduling</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>Optimasi Akun Lanjutan</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>Private Grup Konsultasi</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>Full Laporan 4x (edukasi + kinerja + solusi)</span></li>
                            <li><i class="fa fa-check text-primary me-3"></i><span>Support Ads 3%</span></li>
                        </ul>
                        <div class="mt-auto pt-4">
                            <a href="https://wa.me/628138808690?text=Halo%20Loka,%20saya%20mau%20pesan%20Paket%20Instagram%20Accelerate" class="btn btn-outline-primary w-100 py-3 rounded-pill" target="_blank">Pilih Paket Accelerate</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="portofolio" class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2 class="display-6 mb-5">Karya Kami</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-item shadow-sm">
                        <img src="https://placehold.co/400x500/e9ecef/495057?text=Portofolio+Feed+1" class="img-fluid w-100" alt="Portofolio IG Lokavira">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-item shadow-sm">
                        <img src="https://placehold.co/400x500/e9ecef/495057?text=Portofolio+Reels" class="img-fluid w-100" alt="Portofolio IG Lokavira">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-item shadow-sm">
                        <img src="https://placehold.co/400x500/e9ecef/495057?text=Portofolio+Feed+2" class="img-fluid w-100" alt="Portofolio IG Lokavira">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-light">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="text-center mb-4">Pertanyaan Seputar Layanan</h3>
                    <div class="accordion shadow-sm" id="faqAccordion">
                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Apakah ada kontrak minimal?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted small">
                                    Tidak ada. Kami menggunakan sistem *pay-as-you-go* bulanan. Namun kami sangat menyarankan komitmen minimal 3 bulan agar algoritma dan hasil optimasi dapat terlihat secara maksimal.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Apakah saya harus menyiapkan aset foto/video sendiri?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted small">
                                    Sangat disarankan Anda menyediakan aset mentah (foto produk/video pabrik). Tim kami yang akan mengedit, menambahkan teks, *sound*, dan merangkainya menjadi konten siap *posting*.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 text-center text-white wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);">
        <div class="container">
            <h2 class="mb-4 text-white">Butuh Custom Paket Instagram?</h2>
            <p class="lead mb-4">Fitur di atas bisa disesuaikan dengan kebutuhan spesifik dan budget marketing Anda.</p>
            <a href="https://wa.me/628138808690?text=Halo%20Loka,%20saya%20ingin%20diskusi%20custom%20paket%20Instagram" class="btn btn-light btn-lg px-5 text-primary fw-bold rounded-pill" target="_blank">Konsultasi Gratis Sekarang</a>
        </div>
    </div>
@endsection