@extends('layouts.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Jasa Social Media Management</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/service') }}">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Paket Sosial Media</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Intro / Promo Section -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Sosial Media Management Profesional</p>
                <h1 class="display-5 mb-4">Partner Kelola Media Sosial Terbaik</h1>
                <p class="lead mb-4">Sosial media bukan lagi sekadar posting, tapi senjata utama untuk branding, engagement, dan penjualan. Kami bantu kelola dengan strategi profesional, konten viral, dan hasil terukur.</p>
            </div>

            <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.3s">
                <img src="{{ asset('img/social-media-dashboard.jpg') }}" class="img-fluid rounded shadow" alt="Dashboard Social Media Management" style="max-height: 500px;">
                <!-- Contoh gambar analytics dashboard seperti ini: -->
                <!-- 

<grok-card data-id="f893b7" data-type="image_card" data-plain-type="render_searched_image"  data-arg-size="LARGE" ></grok-card>

 -->
                <!-- Atau pakai [image:6] untuk Instagram-focused dashboard -->
            </div>
        </div>
    </div>

    <!-- Pilihan Social Media Cards -->
    <div class="container-xxl py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5 wow fadeInUp">Pilihan Social Media</h2>
            <p class="text-center mb-5 wow fadeInUp" data-wow-delay="0.2s">Pilih platform yang paling cocok untuk bisnis Anda. Klik "Selengkapnya" untuk lihat paket & harga detail.</p>

            <div class="row g-4">
                <!-- Instagram Card -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card h-100 border-0 shadow text-center p-4">
                        <i class="fab fa-instagram fs-1 text-primary mb-3" style="font-size: 4rem;"></i>
                        <h4 class="mb-3">Jasa Kelola Instagram</h4>
                        <p class="text-muted mb-4">Feed estetik, Reels viral, Stories interaktif, Ads targeted untuk brand awareness & sales maksimal.</p>
                        <a href="{{ url('/paket/instagram') }}" class="btn btn-outline-primary">Selengkapnya >></a>
                    </div>
                </div>

                <!-- TikTok Card -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 border-0 shadow text-center p-4">
                        <i class="fab fa-tiktok fs-1 text-primary mb-3" style="font-size: 4rem;"></i>
                        <h4 class="mb-3">Jasa Kelola TikTok</h4>
                        <p class="text-muted mb-4">Konten viral, iklan For You Page, trend hopping, growth follower organik + ads performa tinggi.</p>
                        <a href="{{ url('/paket/tiktok') }}" class="btn btn-outline-primary">Selengkapnya >></a>
                    </div>
                </div>

                <!-- YouTube Card -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card h-100 border-0 shadow text-center p-4">
                        <i class="fab fa-youtube fs-1 text-primary mb-3" style="font-size: 4rem;"></i>
                        <h4 class="mb-3">Jasa Kelola YouTube</h4>
                        <p class="text-muted mb-4">Optimasi channel, video editing pro, SEO YouTube, thumbnail eye-catching, & growth subscriber cepat.</p>
                        <a href="{{ url('/paket/youtube') }}" class="btn btn-outline-primary">Selengkapnya >></a>
                    </div>
                </div>

                <!-- Full Media Sosial Card -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="card h-100 border-0 shadow text-center p-4">
                        <i class="fa fa-share-alt fs-1 text-primary mb-3" style="font-size: 4rem;"></i>
                        <h4 class="mb-3">Full Social Media</h4>
                        <p class="text-muted mb-4">Kelola semua platform sekaligus (IG + TikTok + YT + lainnya). Hemat biaya, strategi terintegrasi, hasil maksimal.</p>
                        <a href="{{ url('/paket/full') }}" class="btn btn-outline-primary">Selengkapnya >></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Promo -->
    <div class="container-fluid bg-primary text-white py-5 text-center wow fadeIn">
        <div class="container">
            <h2 class="mb-4">Siap Tingkatkan Penjualan Lewat Sosmed?</h2>
            <p class="lead mb-4">Konsultasi gratis + custom paket. Hubungi sekarang!</p>
            <a href="https://wa.me/6281234567890?text=Konsultasi%20Gratis%20Paket%20Sosmed" class="btn btn-light btn-lg px-5">Hubungi Kami</a>
        </div>
    </div>
@endsection