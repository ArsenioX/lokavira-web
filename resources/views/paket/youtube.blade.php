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
            background: rgba(220, 53, 69, 0.1); /* Red tone for YouTube */
            color: #dc3545;
            font-size: 1.5rem;
            margin: 0 auto 1rem;
        }
    </style>

    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">YouTube Management</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
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
                    <p class="d-inline-block border rounded text-danger fw-semi-bold py-1 px-3 mb-3"><i class="fab fa-youtube me-2"></i>Spesialis YouTube SEO</p>
                    <h1 class="display-5 mb-4">Dominasi Pencarian & Bangun Aset Digital Anda</h1>
                    <p class="lead mb-4 text-muted">YouTube adalah mesin pencari terbesar kedua di dunia. Kami meracik SEO, mendesain *thumbnail* yang memancing klik (CTR tinggi), dan memproduksi video yang menahan penonton agar *channel* Anda terus berkembang.</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="#harga-paket" class="btn btn-danger py-3 px-4 fw-bold rounded-pill">Lihat Harga Paket</a>
                        <a href="#portofolio" class="btn btn-outline-dark py-3 px-4 fw-bold rounded-pill">Lihat Portofolio</a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img src="https://placehold.co/600x600/cc0000/ffffff?text=Mockup+Channel+YouTube+Klien" class="img-fluid rounded shadow-lg w-100" alt="YouTube Management Lokavira" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-light mt-5">
        <div class="container py-4">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2 class="display-6 mb-5">Cara Kerja <span class="text-danger">Channel Berkembang</span></h2>
            </div>
            <div class="row g-4 text-center">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="step-icon"><i class="fa fa-search"></i></div>
                    <h5 class="fw-bold">1. Riset Keyword SEO</h5>
                    <p class="text-muted small">Mencari kata kunci yang sering diketik target pasar Anda agar video mudah ditemukan.</p>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="step-icon"><i class="fa fa-film"></i></div>
                    <h5 class="fw-bold">2. Produksi & Editing</h5>
                    <p class="text-muted small">Pengeditan video profesional untuk *Long-form* maupun *Shorts* demi retensi penonton tinggi.</p>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="step-icon"><i class="fa fa-image"></i></div>
                    <h5 class="fw-bold">3. Desain Thumbnail</h5>
                    <p class="text-muted small">Pembuatan desain *thumbnail* khusus dan judul (*copywriting*) yang memicu rasa penasaran.</p>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="step-icon"><i class="fa fa-upload"></i></div>
                    <h5 class="fw-bold">4. Optimasi Upload</h5>
                    <p class="text-muted small">Memasukkan *tags*, deskripsi SEO, *end screen*, dan penjadwalan publikasi video.</p>
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
                            <h4 class="fw-bold mb-3 text-dark">Shorts Essential</h4>
                            <p class="text-muted small">Bangun *awareness* instan lewat algoritma video vertikal</p>
                            <h2 class="text-danger display-6 fw-bold mb-0">Rp 1.500.000</h2>
                            <span class="text-muted small">/bulan</span>
                        </div>
                        <hr class="mb-4">
                        <ul class="list-unstyled pricing-list text-muted small mb-4">
                            <li><i class="fa fa-check text-danger me-3"></i><span>15 Video YouTube Shorts (Maks 60 dtk)</span></li>
                            <li><i class="fa fa-check text-danger me-3"></i><span>Gratis *Repurpose* (Bisa diposting ke TikTok/IG)</span></li>
                            <li><i class="fa fa-check text-danger me-3"></i><span>Merapikan Tampilan Banner & Foto Profil</span></li>
                            <li><i class="fa fa-check text-danger me-3"></i><span>Riset Keyword & SEO Dasar</span></li>
                            <li><i class="fa fa-check text-danger me-3"></i><span>Admin Posting & Penjadwalan</span></li>
                            <li><i class="fa fa-check text-danger me-3"></i><span>1x Revisi per Video</span></li>
                            <li><i class="fa fa-check text-danger me-3"></i><span>Laporan Kinerja Bulanan</span></li>
                        </ul>
                        <div class="mt-auto pt-4">
                            <a href="https://wa.me/628138808690?text=Halo%20Loka,%20saya%20tertarik%20pesan%20Paket%20YouTube%20Shorts%20Essential" class="btn btn-outline-danger w-100 py-3 rounded-pill" target="_blank">Pilih Paket Essential</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card pricing-card h-100 border-0 shadow-lg p-4 p-xl-5 position-relative bg-danger" style="transform: scale(1.05); z-index: 1;">
                        <div class="position-absolute top-0 start-50 translate-middle">
                            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold border border-white">Recommended</span>
                        </div>
                        <div class="text-center mb-4 mt-3">
                            <h4 class="fw-bold mb-3 text-white">Creator Pro</h4>
                            <p class="text-white-50 small">Standar kreator profesional untuk edukasi market</p>
                            <h2 class="text-white display-6 fw-bold mb-0">Rp 3.500.000</h2>
                            <span class="text-white-50 small">/bulan</span>
                        </div>
                        <hr class="border-light mb-4 opacity-50">
                        <ul class="list-unstyled pricing-list text-white small mb-4">
                            <li><i class="fa fa-check text-warning me-3"></i><span>4 Video Long-Form (Maks 10 menit)</span></li>
                            <li><i class="fa fa-check text-warning me-3"></i><span>4 Desain Custom Thumbnail Keren</span></li>
                            <li><i class="fa fa-check text-warning me-3"></i><span>Bonus: 8 Video Shorts (Potongan dari video panjang)</span></li>
                            <li><i class="fa fa-check text-warning me-3"></i><span>Riset Ide, Kompetitor & *Content Calendar*</span></li>
                            <li><i class="fa fa-check text-warning me-3"></i><span>Optimasi SEO Lengkap (Tags, End Screen, Cards)</span></li>
                            <li><i class="fa fa-check text-warning me-3"></i><span>2x Revisi per Video</span></li>
                            <li><i class="fa fa-check text-warning me-3"></i><span>Laporan Kinerja & Evaluasi Bulanan</span></li>
                        </ul>
                        <div class="mt-auto pt-4">
                            <a href="https://wa.me/628138808690?text=Halo%20Loka,%20saya%20tertarik%20pesan%20Paket%20YouTube%20Creator%20Pro" class="btn btn-warning text-dark fw-bold w-100 py-3 rounded-pill shadow" target="_blank">Pilih Paket Creator Pro</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card pricing-card h-100 border border-light shadow-sm p-4 p-xl-5 bg-white">
                        <div class="text-center mb-4">
                            <h4 class="fw-bold mb-3 text-dark">Authority</h4>
                            <p class="text-muted small">Dominasi ceruk pasar Anda dan jadilah pakar</p>
                            <h2 class="text-danger display-6 fw-bold mb-0">Rp 6.500.000</h2>
                            <span class="text-muted small">/bulan</span>
                        </div>
                        <hr class="mb-4">
                        <ul class="list-unstyled pricing-list text-muted small mb-4">
                            <li><i class="fa fa-check text-danger me-3"></i><span>8 Video Long-Form (Maks 15 menit)</span></li>
                            <li><i class="fa fa-check text-danger me-3"></i><span>8 Desain Custom Thumbnail Premium</span></li>
                            <li><i class="fa fa-check text-danger me-3"></i><span>Bonus: 15 Video Shorts (Siap sebar ke Sosmed lain)</span></li>
                            <li><i class="fa fa-check text-danger me-3"></i><span>Riset Tren, SEO & *Scripting* Mendalam</span></li>
                            <li><i class="fa fa-check text-danger me-3"></i><span>Optimasi SEO Tingkat Lanjut</span></li>
                            <li><i class="fa fa-check text-danger me-3"></i><span>2x Revisi per Video</span></li>
                            <li><i class="fa fa-check text-danger me-3"></i><span>Laporan Kinerja & Konsultasi Strategi</span></li>
                        </ul>
                        <div class="mt-auto pt-4">
                            <a href="https://wa.me/628138808690?text=Halo%20Loka,%20saya%20tertarik%20pesan%20Paket%20YouTube%20Authority" class="btn btn-outline-danger w-100 py-3 rounded-pill" target="_blank">Pilih Paket Authority</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="portofolio" class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2 class="display-6 mb-5">Format Video & Thumbnail Kami</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-item shadow-sm text-center">
                        <img src="https://placehold.co/800x450/282828/ffffff?text=Contoh+Thumbnail+High+CTR" class="img-fluid w-100" alt="Format Thumbnail YouTube">
                        <p class="mt-3 fw-bold text-dark">Desain Thumbnail Custom (Long-Form)</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-item shadow-sm text-center">
                        <img src="https://placehold.co/400x711/cc0000/ffffff?text=Video+Shorts" class="img-fluid w-100" alt="Format YouTube Shorts">
                        <p class="mt-3 fw-bold text-dark">Format Vertikal (Shorts)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-light">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="text-center mb-4">Pertanyaan Seputar YouTube</h3>
                    <div class="accordion shadow-sm" id="faqAccordion">
                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Apakah bisa dibantu jika saya belum punya channel sama sekali?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted small">
                                    Tentu bisa! Kami akan membantu membuatkan *channel* dari nol, mendesain *banner*, foto profil, hingga merapikan deskripsi *channel* Anda sesuai kaidah SEO agar siap mengudara.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Kapan video saya bisa muncul di pencarian teratas?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted small">
                                    Algoritma SEO YouTube bekerja secara bertahap. Biasanya hasil yang signifikan (lonjakan penonton organik) mulai terlihat setelah bulan ke-3 atau ke-4 jika *upload* dilakukan secara konsisten dan teroptimasi. Ini adalah investasi jangka panjang untuk bisnis Anda.
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
            <h2 class="mb-4 text-white">Siap Mendominasi Pencarian YouTube?</h2>
            <p class="lead mb-4">Jangan biarkan kompetitor merebut audiens Anda. Mari bangun aset digital yang menghasilkan.</p>
            <a href="https://wa.me/628138808690?text=Halo%20Loka,%20saya%20mau%20konsultasi%20gratis%20untuk%20YouTube%20Marketing" class="btn btn-light btn-lg px-5 text-primary fw-bold rounded-pill" target="_blank">Konsultasi Gratis Sekarang</a>
        </div>
    </div>
@endsection