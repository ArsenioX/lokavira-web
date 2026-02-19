@extends('layouts.app')

@section('content')
        <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Our Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
        <!-- Page Header End -->


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
                                            <img class="position-absolute rounded w-100 h-100" src="img/service-1.jpg"
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
                                        <a href="#" class="btn btn-primary py-3 px-5 mt-3">Lihat Pilihan Paket</a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-web" role="tabpanel" aria-labelledby="nav-web-tab">
                                <div class="row g-4">
                                    <div class="col-md-6" style="min-height: 350px;">
                                        <div class="position-relative h-100">
                                            <img class="position-absolute rounded w-100 h-100" src="img/service-2.jpg"
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
                                        <a href="#" class="btn btn-primary py-3 px-5 mt-3">Cek Fitur Website</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

@endsection