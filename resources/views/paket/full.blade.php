@extends('layouts.app')

@section('content')
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-4 mb-4 animated slideInDown">Paket Full Management (360°)</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/service') }}">Services</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/paket') }}">Paket Sosial Media</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Paket Full 360</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-xxl py-5" style="background: linear-gradient(135deg, #0b1121 0%, #0f4c5c 100%);">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-bold text-warning mb-2">Omnichannel Marketing</p>
                    <h1 class="display-5 text-white mb-4">Satu Paket, Kuasai Semua Platform Digital!</h1>
                    <p class="mb-4 text-white-50">Mengapa repot mengurus Instagram, TikTok, dan YouTube secara terpisah jika
                        tim Lokavira bisa meramunya menjadi satu strategi yang terpadu? Lebih efisien, lebih hemat, dan
                        hasil konversi yang jauh lebih masif untuk brand Anda.</p>

                    <ul class="list-unstyled text-white mb-4">
                        <li class="mb-2"><i class="fa fa-check text-warning me-3"></i>Harga Bundling Jauh Lebih Hemat</li>
                        <li class="mb-2"><i class="fa fa-check text-warning me-3"></i>Strategi Konten Saling Terintegrasi
                            (Crossposting)</li>
                        <li class="mb-2"><i class="fa fa-check text-warning me-3"></i>Satu Laporan Terpadu untuk Semua
                            Platform</li>
                    </ul>

                    <a href="#pilihan-paket" class="btn btn-warning py-3 px-5 mt-3 text-dark fw-bold">Lihat Paket
                        Bundling</a>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img src="https://placehold.co/600x600/eab308/0b1121?text=Ilustrasi+Full+Management+360"
                        class="img-fluid rounded shadow-lg w-100" alt="Ilustrasi Paket Full Lokavira"
                        style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>

    <div id="pilihan-paket" class="container-xxl py-5">
        <div class="container">
            <div class="text-center mb-5 wow fadeInUp">
                <p class="fs-5 fw-bold text-primary">Paket Terpadu (Instagram + TikTok + YouTube)</p>
                <h2 class="display-5">Pilihan Paket Lokavira 360</h2>
            </div>

            <div class="row g-5 justify-content-center">

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card h-100 shadow border-0 text-center p-4">
                        <h4 class="fw-bold mb-3">Ignite 360</h4>
                        <h3 class="text-primary display-6 mb-2">Rp 2.800.000</h3>
                        <p class="text-muted mb-4">/bulan – Hadir di semua platform utama</p>
                        <hr>
                        <ul class="list-unstyled text-start mb-4">
                            <li><i class="fa fa-check text-primary me-2"></i>12 Desain Feed & 5 Story IG</li>
                            <li><i class="fa fa-check text-primary me-2"></i>10 Video Pendek (TikTok/Reels/Shorts)</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Optimasi Profil di 3 Platform</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Admin Posting & Penjadwalan</li>
                            <li><i class="fa fa-check text-primary me-2"></i>1x Laporan Terpadu Bulanan</li>
                        </ul>
                        <div class="mt-auto">
                            <a href="https://wa.me/6281234567890?text=Halo%20Lokavira,%20saya%20tertarik%20dengan%20Paket%20Ignite%20360"
                                class="btn btn-outline-primary w-100 py-3">Pesan Ignite 360</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow border-0 bg-primary text-white text-center p-4 position-relative"
                        style="background: linear-gradient(180deg, #0f4c5c 0%, #0b1121 100%);">
                        <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-3">Paling Diminati</span>
                        <h4 class="fw-bold mb-3 text-white">Boost 360</h4>
                        <h3 class="text-warning display-6 mb-2">Rp 6.500.000</h3>
                        <p class="text-white-50 mb-4">/bulan – Dominasi algoritma & konversi</p>
                        <hr class="bg-light">
                        <ul class="list-unstyled text-start mb-4">
                            <li><i class="fa fa-check text-warning me-2"></i>18 Desain Feed & 12 Story IG</li>
                            <li><i class="fa fa-check text-warning me-2"></i>15 Video Pendek (Fokus Jualan)</li>
                            <li><i class="fa fa-check text-warning me-2"></i>2 Video YouTube Long-Form + Thumbnail</li>
                            <li><i class="fa fa-check text-warning me-2"></i>Setup TikTok Shop Dasar (10-15 SKU)</li>
                            <li><i class="fa fa-check text-warning me-2"></i>Manajemen Audiens & Balas Komen</li>
                            <li><i class="fa fa-check text-warning me-2"></i>2x Laporan & Evaluasi Bulanan</li>
                        </ul>
                        <div class="mt-auto">
                            <a href="https://wa.me/6281234567890?text=Halo%20Lokavira,%20saya%20tertarik%20dengan%20Paket%20Boost%20360"
                                class="btn btn-warning w-100 py-3 text-dark fw-bold">Pesan Boost 360</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card h-100 shadow border-0 text-center p-4">
                        <h4 class="fw-bold mb-3">Accelerate 360</h4>
                        <h3 class="text-primary display-6 mb-2">Rp 12.000.000</h3>
                        <p class="text-muted mb-4">/bulan – Scale-up bisnis secara autopilot</p>
                        <hr>
                        <ul class="list-unstyled text-start mb-4">
                            <li><i class="fa fa-check text-primary me-2"></i>24 Desain Feed & 20 Story IG</li>
                            <li><i class="fa fa-check text-primary me-2"></i>25 Video Pendek Premium (TikTok/Reels)</li>
                            <li><i class="fa fa-check text-primary me-2"></i>4 Video YouTube Long-Form + Thumbnail</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Full 30 Hari Manajemen Aktif & Support</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Optimasi TikTok Shop & Strategi Affiliate</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Support Ads IG/TT/YT (Saldo Klien)</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Laporan Lengkap 4x + Konsultasi</li>
                        </ul>
                        <div class="mt-auto">
                            <a href="https://wa.me/6281234567890?text=Halo%20Lokavira,%20saya%20tertarik%20dengan%20Paket%20Accelerate%20360"
                                class="btn btn-outline-primary w-100 py-3">Pesan Accelerate 360</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid py-5 text-center text-dark" style="background-color: #eab308;">
        <div class="container">
            <h2 class="mb-4">Butuh Penyesuaian Fitur untuk Paket 360?</h2>
            <p class="lead mb-4">Tim kami sangat fleksibel. Mari diskusi untuk menyesuaikan isi paket dengan kebutuhan
                spesifik dan budget perusahaan Anda.</p>
            <a href="https://wa.me/6281234567890?text=Halo,%20saya%20mau%20konsultasi%20Custom%20Paket%20360%20Lokavira"
                class="btn btn-dark btn-lg px-5 fw-bold">Jadwalkan Konsultasi Gratis</a>
        </div>
    </div>
@endsection