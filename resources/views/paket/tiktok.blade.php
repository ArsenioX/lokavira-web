@extends('layouts.app')

@section('content')
        <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <h1 class="display-4 mb-4 animated slideInDown">Paket Jasa Kelola TikTok</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/service') }}">Services</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/paket') }}">Paket Sosial Media</a></li>
                        <li class="breadcrumb-item active" aria-current="page">TikTok</li>
                    </ol>
                </nav>
            </div>
        </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img src="https://placehold.co/600x600/1e293b/ffffff?text=Ilustrasi+TikTok+Marketing"
                        class="img-fluid rounded shadow-lg w-100" alt="Ilustrasi TikTok Marketing Lokavira"
                        style="object-fit: cover;">
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="fs-5 fw-bold text-primary mb-2">Mengapa pilih Lokavira?</p>
                    <h1 class="display-5 mb-4">Kuasai FYP & Tingkatkan Penjualan Anda di TikTok</h1>
                    <p class="mb-4 text-muted">Dari ide konten viral, riset sound trending, hingga setup TikTok Shop. Kami
                        bantu brand Anda bersinar di platform paling dinamis saat ini. Tim ahli kami tidak hanya mengejar
                        views, tapi juga konversi nyata untuk bisnis Anda.</p>

                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fa fa-check text-primary me-3"></i>Riset Algoritma & Sound Trending
                            Update</li>
                        <li class="mb-2"><i class="fa fa-check text-primary me-3"></i>Strategi Hook Video yang Menahan
                            Audiens</li>
                        <li class="mb-2"><i class="fa fa-check text-primary me-3"></i>Optimasi TikTok Shop & Konversi Jualan
                        </li>
                    </ul>

                    <a href="#pilihan-paket" class="btn btn-primary py-3 px-5 mt-3">Lihat Paket Kami</a>
                </div>
            </div>
        </div>
    </div>

        <div id="pilihan-paket" class="container-xxl py-5">
            <div class="container">
                <h2 class="text-center mb-5 wow fadeInUp">Pilihan Paket Bundle TikTok LokaVira</h2>
                <div class="row g-5 justify-content-center">

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card h-100 shadow border-0 text-center p-4">
                            <h4 class="fw-bold mb-3">TikTok Essential</h4>
                            <h3 class="text-primary display-6 mb-2">Rp 1.500.000</h3>
                            <p class="text-muted mb-4">/bulan – Mulai bangun eksistensi brand Anda</p>
                            <ul class="list-unstyled text-start mb-4">
                                <li><i class="fa fa-check text-primary me-2"></i>10 Video Konten (15-60 detik)</li>
                                <li><i class="fa fa-check text-primary me-2"></i>Optimasi Profil & Bio TikTok</li>
                                <li><i class="fa fa-check text-primary me-2"></i>Pembuatan Ide & Scripting Dasar</li>
                                <li><i class="fa fa-check text-primary me-2"></i>Riset Tren & Sound Viral</li>
                                <li><i class="fa fa-check text-primary me-2"></i>Admin Posting & Penjadwalan</li>
                                <li><i class="fa fa-check text-primary me-2"></i>1x Revisi per Video (Minor)</li>
                                <li><i class="fa fa-check text-primary me-2"></i>Laporan Kinerja Bulanan</li>
                            </ul>
                            <div class="mt-auto">
                                <a href="https://wa.me/6281234567890?text=Halo%20Lokavira,%20saya%20tertarik%20dengan%20Paket%20TikTok%20Essential"
                                    class="btn btn-outline-primary w-100 py-3">Pesan Paket Essential</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="card h-100 shadow border-0 bg-primary text-white text-center p-4 position-relative">
                            <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-3">Recommended</span>
                            <h4 class="fw-bold mb-3 text-white">TikTok FYP</h4>
                            <h3 class="text-white display-6 mb-2">Rp 3.500.000</h3>
                            <p class="text-white-50 mb-4">/bulan – Fokus pada jualan dan konversi</p>
                            <ul class="list-unstyled text-start mb-4">
                                <li><i class="fa fa-check text-light me-2"></i>15 Video Konten (Fokus jualan/hook)</li>
                                <li><i class="fa fa-check text-light me-2"></i>Setup TikTok Shop Dasar (10-15 SKU)</li>
                                <li><i class="fa fa-check text-light me-2"></i>Optimasi Profil & SEO TikTok</li>
                                <li><i class="fa fa-check text-light me-2"></i>Pembuatan Ide, Content Pillar & Scripting</li>
                                <li><i class="fa fa-check text-light me-2"></i>Riset Tren & Sound Viral</li>
                                <li><i class="fa fa-check text-light me-2"></i>Admin Posting & Manajemen Audiens</li>
                                <li><i class="fa fa-check text-light me-2"></i>2x Revisi per Video (Minor)</li>
                                <li><i class="fa fa-check text-light me-2"></i>Laporan Kinerja & Evaluasi Bulanan</li>
                            </ul>
                            <div class="mt-auto">
                                <a href="https://wa.me/6281234567890?text=Halo%20Lokavira,%20saya%20tertarik%20dengan%20Paket%20TikTok%20FYP"
                                    class="btn btn-light w-100 py-3">Pesan Paket FYP</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card h-100 shadow border-0 text-center p-4">
                            <h4 class="fw-bold mb-3">TikTok Scale-Up</h4>
                            <h3 class="text-primary display-6 mb-2">Rp 7.500.000</h3>
                            <p class="text-muted mb-4">/bulan – Ekspansi maksimal dengan Ads & Live</p>
                            <ul class="list-unstyled text-start mb-4">
                                <li><i class="fa fa-check text-primary me-2"></i>25 Video Konten</li>
                                <li><i class="fa fa-check text-primary me-2"></i>Setup TikTok Shop Lengkap</li>
                                <li><i class="fa fa-check text-primary me-2"></i>Bonus: Pendampingan Live (Klien Mandiri)</li>
                                <li><i class="fa fa-check text-primary me-2"></i>Setup TikTok Ads Dasar (Saldo dari klien)</li>
                                <li><i class="fa fa-check text-primary me-2"></i>Manajemen Komen & DM</li>
                                <li><i class="fa fa-check text-primary me-2"></i>2x Revisi per Video</li>
                                <li><i class="fa fa-check text-primary me-2"></i>Laporan Mingguan & Evaluasi Bulanan</li>
                            </ul>
                            <div class="mt-auto">
                                <a href="https://wa.me/6281234567890?text=Halo%20Lokavira,%20saya%20tertarik%20dengan%20Paket%20TikTok%20Scale-Up"
                                    class="btn btn-outline-primary w-100 py-3">Pesan Paket Scale-Up</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="text-center mt-5 pt-5 wow fadeInUp">
                    <h3 class="mb-4">Contoh Format Video TikTok yang Kami Buat</h3>
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-4">
                            <img src="https://placehold.co/300x500/0f4c5c/ffffff?text=Konten+Edukasi"
                                class="img-fluid rounded shadow" alt="Contoh Video Edukasi">
                        </div>
                        <div class="col-md-4">
                            <img src="https://placehold.co/300x500/0b1121/ffffff?text=Konten+Produk/Jualan"
                                class="img-fluid rounded shadow" alt="Contoh Video Produk">
                        </div>
                        <div class="col-md-4">
                            <img src="https://placehold.co/300x500/eab308/ffffff?text=Konten+Hiburan/Tren"
                                class="img-fluid rounded shadow" alt="Contoh Video Tren">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-info py-5 text-center text-white"
            style="background: linear-gradient(90deg, #0f4c5c 0%, #0b1121 100%);">
            <div class="container">
                <h2 class="mb-4 text-white">Ingin Cepat FYP & Closing?</h2>
                <p class="lead mb-4">Mari diskusi dengan tim ahli kami untuk menentukan strategi TikTok yang paling pas dengan
                    produk Anda.</p>
                <a href="https://wa.me/6281234567890?text=Halo,%20saya%20mau%20konsultasi%20gratis%20untuk%20TikTok%20Marketing"
                    class="btn btn-warning btn-lg px-5 text-dark fw-bold">Konsultasi Gratis Sekarang</a>
            </div>
        </div>
@endsection