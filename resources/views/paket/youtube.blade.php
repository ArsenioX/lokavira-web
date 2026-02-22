@extends('layouts.app')

@section('content')
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-4 mb-4 animated slideInDown">Paket Jasa Kelola YouTube</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/service') }}">Services</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/paket') }}">Paket Sosial Media</a></li>
                    <li class="breadcrumb-item active" aria-current="page">YouTube</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img src="https://placehold.co/600x600/cc0000/ffffff?text=Ilustrasi+YouTube+Marketing"
                        class="img-fluid rounded shadow-lg w-100" alt="Ilustrasi YouTube Marketing Lokavira"
                        style="object-fit: cover;">
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="fs-5 fw-bold text-danger mb-2">Mengapa pilih Lokavira?</p>
                    <h1 class="display-5 mb-4">Dominasi Pencarian & Bangun Aset Digital di YouTube</h1>
                    <p class="mb-4 text-muted">YouTube bukan sekadar media sosial, tapi mesin pencari terbesar kedua di
                        dunia. Kami bantu meracik SEO, mendesain thumbnail yang mengundang klik (CTR tinggi), hingga
                        memproduksi video yang membuat penonton betah berlama-lama (High Retention).</p>

                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fa fa-check text-danger me-3"></i>Riset Keyword & SEO YouTube Mendalam
                        </li>
                        <li class="mb-2"><i class="fa fa-check text-danger me-3"></i>Desain Custom Thumbnail (High CTR)</li>
                        <li class="mb-2"><i class="fa fa-check text-danger me-3"></i>Strategi Repurpose Konten (Long-form ke
                            Shorts)</li>
                    </ul>

                    <a href="#pilihan-paket" class="btn btn-danger py-3 px-5 mt-3">Lihat Paket Kami</a>
                </div>
            </div>
        </div>
    </div>

    <div id="pilihan-paket" class="container-xxl py-5">
        <div class="container">
            <h2 class="text-center mb-5 wow fadeInUp">Pilihan Paket YouTube LokaVira</h2>
            <div class="row g-5 justify-content-center">

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card h-100 shadow border-0 text-center p-4">
                        <h4 class="fw-bold mb-3">YouTube Shorts Essential</h4>
                        <h3 class="text-danger display-6 mb-2">Rp 1.500.000</h3>
                        <p class="text-muted mb-4">/bulan – Bangun awareness instan lewat Shorts</p>
                        <ul class="list-unstyled text-start mb-4">
                            <li><i class="fa fa-check text-danger me-2"></i>15 Video YouTube Shorts (Maks 60 dtk)</li>
                            <li><i class="fa fa-check text-danger me-2"></i>Bisa repurpose dari TikTok/IG</li>
                            <li><i class="fa fa-check text-danger me-2"></i>Optimasi Profil (Banner & Foto)</li>
                            <li><i class="fa fa-check text-danger me-2"></i>Riset Keyword & SEO Dasar</li>
                            <li><i class="fa fa-check text-danger me-2"></i>Admin Posting & Penjadwalan</li>
                            <li><i class="fa fa-check text-danger me-2"></i>Laporan Kinerja Bulanan</li>
                        </ul>
                        <div class="mt-auto">
                            <a href="https://wa.me/6281234567890?text=Halo%20Lokavira,%20saya%20tertarik%20dengan%20Paket%20YouTube%20Shorts%20Essential"
                                class="btn btn-outline-danger w-100 py-3">Pesan Paket Ini</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 shadow border-0 bg-danger text-white text-center p-4 position-relative">
                        <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-3">Recommended</span>
                        <h4 class="fw-bold mb-3 text-white">YouTube Creator Pro</h4>
                        <h3 class="text-white display-6 mb-2">Rp 3.500.000</h3>
                        <p class="text-white-50 mb-4">/bulan – Standar kreator profesional</p>
                        <ul class="list-unstyled text-start mb-4">
                            <li><i class="fa fa-check text-light me-2"></i>4 Video Long-Form (Maks 10 menit)</li>
                            <li><i class="fa fa-check text-light me-2"></i>4 Custom Thumbnail Keren</li>
                            <li><i class="fa fa-check text-warning me-2"></i>Bonus: 8 Video Shorts (Potongan video)</li>
                            <li><i class="fa fa-check text-light me-2"></i>Riset Ide & Content Calendar</li>
                            <li><i class="fa fa-check text-light me-2"></i>Optimasi SEO Lengkap (Tags, End Screen, Cards)
                            </li>
                            <li><i class="fa fa-check text-light me-2"></i>2x Revisi per Video (Minor)</li>
                            <li><i class="fa fa-check text-light me-2"></i>Laporan & Evaluasi Bulanan</li>
                        </ul>
                        <div class="mt-auto">
                            <a href="https://wa.me/6281234567890?text=Halo%20Lokavira,%20saya%20tertarik%20dengan%20Paket%20YouTube%20Creator%20Pro"
                                class="btn btn-light text-danger w-100 py-3 fw-bold">Pesan Paket Ini</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card h-100 shadow border-0 text-center p-4">
                        <h4 class="fw-bold mb-3">YouTube Authority</h4>
                        <h3 class="text-danger display-6 mb-2">Rp 6.500.000</h3>
                        <p class="text-muted mb-4">/bulan – Dominasi ceruk pasar Anda</p>
                        <ul class="list-unstyled text-start mb-4">
                            <li><i class="fa fa-check text-danger me-2"></i>8 Video Long-Form (Maks 15 menit)</li>
                            <li><i class="fa fa-check text-danger me-2"></i>8 Custom Thumbnail Premium</li>
                            <li><i class="fa fa-check text-warning me-2"></i>Bonus: 15 Video Shorts (Potongan video)</li>
                            <li><i class="fa fa-check text-danger me-2"></i>Riset Ide, Kompetitor & Scripting</li>
                            <li><i class="fa fa-check text-danger me-2"></i>Optimasi SEO Tingkat Lanjut</li>
                            <li><i class="fa fa-check text-danger me-2"></i>Setup YT Ads Dasar (Opsional)</li>
                            <li><i class="fa fa-check text-danger me-2"></i>2x Revisi per Video</li>
                            <li><i class="fa fa-check text-danger me-2"></i>Laporan & Konsultasi Strategi</li>
                        </ul>
                        <div class="mt-auto">
                            <a href="https://wa.me/6281234567890?text=Halo%20Lokavira,%20saya%20tertarik%20dengan%20Paket%20YouTube%20Authority"
                                class="btn btn-outline-danger w-100 py-3">Pesan Paket Ini</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="text-center mt-5 pt-5 wow fadeInUp">
                <h3 class="mb-4">Contoh Thumbnail & Format YouTube Kami</h3>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6">
                        <img src="https://placehold.co/600x338/282828/ffffff?text=Contoh+Thumbnail+Long-Form+High+CTR"
                            class="img-fluid rounded shadow" alt="Contoh Thumbnail YouTube">
                        <p class="mt-3 text-muted">Desain Thumbnail Custom (Long-Form)</p>
                    </div>
                    <div class="col-md-3">
                        <img src="https://placehold.co/300x533/cc0000/ffffff?text=Contoh+YT+Shorts"
                            class="img-fluid rounded shadow" alt="Contoh YouTube Shorts">
                        <p class="mt-3 text-muted">Format Vertical (Shorts)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 text-center text-white"
        style="background: linear-gradient(90deg, #990000 0%, #0b1121 100%);">
        <div class="container">
            <h2 class="mb-4 text-white">Siap Mendominasi Pencarian YouTube?</h2>
            <p class="lead mb-4">Jangan biarkan kompetitor mengambil audiens Anda. Mari bangun channel YouTube yang
                menghasilkan.</p>
            <a href="https://wa.me/6281234567890?text=Halo,%20saya%20mau%20konsultasi%20gratis%20untuk%20YouTube%20Marketing"
                class="btn btn-light btn-lg px-5 text-danger fw-bold">Konsultasi Gratis Sekarang</a>
        </div>
    </div>
@endsection