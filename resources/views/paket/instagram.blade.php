@extends('layouts.app')

@section('content')
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-4 mb-4 animated slideInDown">Paket Jasa Kelola Instagram</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/service') }}">Services</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/paket') }}">Paket Sosial Media</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Instagram</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-xxl py-5 bg-primary text-white">
        <div class="container text-center">
            <h1 class="display-5 fw-bold wow fadeInUp">Kelola Instagram Anda Secara Profesional</h1>
            <p class="lead wow fadeInUp" data-wow-delay="0.3s">Feed estetik, Reels viral, Stories engaging, dan Ads targeted
                – kami urus semuanya agar brand Anda makin dikenal dan orderan lancar.</p>
            <img src="{{ asset('img/instagram-feed-carousel.jpg') }}" class="img-fluid rounded shadow mt-4"
                alt="Contoh Feed Instagram Carousel" style="max-height: 500px;">
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <h2 class="text-center mb-5 wow fadeInUp">Pilihan Paket Instagram Management</h2>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card h-100 shadow border-0 text-center p-4">
                        <h4 class="fw-bold mb-3">Ignite</h4>
                        <h3 class="text-primary display-6 mb-2">Mulai dari Rp 1.000.000</h3>
                        <p class="text-muted mb-4">/bulan – Cocok untuk bisnis pemula yang ingin mulai eksis</p>
                        <ul class="list-unstyled text-start mb-4">
                            <li><i class="fa fa-check text-primary me-2"></i>14 Feed (termasuk 2 Carousel – efektif 10
                                single + 2 multi)</li>
                            <li><i class="fa fa-check text-primary me-2"></i>1 Reels (15-30 detik)</li>
                            <li><i class="fa fa-check text-primary me-2"></i>5 Story</li>
                            <li><i class="fa fa-check text-primary me-2"></i>1x revisi per konten</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Admin Posting & Scheduling</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Optimasi Akun Dasar</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Private Group Komunikasi</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Laporan 1x (edukasi saja)</li>
                        </ul>
                        <a href="https://wa.me/6281234567890?text=Pesan%20Paket%20Ignite%20Instagram"
                            class="btn btn-primary w-100 py-3">Pesan Paket Ini</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow border-0 bg-primary text-white text-center p-4 position-relative">
                        <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-3">Most Popular</span>
                        <h4 class="fw-bold mb-3">Boost</h4>
                        <h3 class="display-6 mb-2">Mulai dari Rp 2.500.000</h3>
                        <p class="mb-4">/bulan – Untuk bisnis yang ingin pertumbuhan stabil</p>
                        <ul class="list-unstyled text-start mb-4">
                            <li><i class="fa fa-check me-2"></i>18 Feed + 5 Carousel (total 23 template konten)</li>
                            <li><i class="fa fa-check me-2"></i>3 Reels (15-30 detik)</li>
                            <li><i class="fa fa-check me-2"></i>12 Story</li>
                            <li><i class="fa fa-check me-2"></i>1x revisi per konten</li>
                            <li><i class="fa fa-check me-2"></i>Admin Posting & Scheduling</li>
                            <li><i class="fa fa-check me-2"></i>Optimasi Akun</li>
                            <li><i class="fa fa-check me-2"></i>Private Grup</li>
                            <li><i class="fa fa-check me-2"></i>Laporan 3x (hasil kinerja, minggu 1 tanpa laporan)</li>
                        </ul>
                        <a href="https://wa.me/6281234567890?text=Pesan%20Paket%20Boost%20Instagram"
                            class="btn btn-light w-100 py-3">Pesan Paket Ini</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card h-100 shadow border-0 text-center p-4">
                        <h4 class="fw-bold mb-3">Accelerate</h4>
                        <h3 class="text-primary display-6 mb-2">Mulai dari Rp 5.000.000</h3>
                        <p class="text-muted mb-4">/bulan – Paket premium untuk scale up bisnis cepat</p>
                        <ul class="list-unstyled text-start mb-4">
                            <li><i class="fa fa-check text-primary me-2"></i>24 Feed (custom Carousel)</li>
                            <li><i class="fa fa-check text-primary me-2"></i>5 Reels + 1 Reels bonus</li>
                            <li><i class="fa fa-check text-primary me-2"></i>20 Story</li>
                            <li><i class="fa fa-check text-primary me-2"></i>3x revisi konten pilar + 2x revisi per konten
                            </li>
                            <li><i class="fa fa-check text-primary me-2"></i>Admin Posting & Scheduling</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Optimasi Akun Lanjutan</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Private Grup Konsultasi</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Full Laporan 4x (edukasi + hasil kinerja +
                                solusi)</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Support Ads 3%</li>
                        </ul>
                        <a href="https://wa.me/6281234567890?text=Pesan%20Paket%20Accelerate%20Instagram"
                            class="btn btn-primary w-100 py-3">Pesan Paket Ini</a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5 wow fadeInUp">
                <h3 class="mb-4">Contoh Reels yang Kami Produksi</h3>
                <img src="{{ asset('img/instagram-reels-thumbnail.jpg') }}" class="img-fluid rounded shadow"
                    alt="Contoh Thumbnail Reels Instagram" style="max-height: 400px;">
            </div>
        </div>
    </div>

    <div class="container-fluid bg-warning py-5 text-center">
        <div class="container">
            <h2 class="mb-4">Mau Mulai Sekarang?</h2>
            <p class="lead mb-4">Konsultasi gratis + penyesuaian paket sesuai budget bisnis Anda.</p>
            <a href="https://wa.me/6281234567890?text=Konsultasi%20Paket%20Instagram" class="btn btn-dark btn-lg px-5">Chat
                WA Sekarang</a>
        </div>
    </div>
@endsection