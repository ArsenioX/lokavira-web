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
            background: rgba(33, 37, 41, 0.1); /* Dark tone for TikTok */
            color: #212529;
            font-size: 1.5rem;
            margin: 0 auto 1rem;
        }
    </style>

    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">TikTok Management</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
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
                    <p class="d-inline-block border rounded text-dark fw-semi-bold py-1 px-3 mb-3"><i class="fab fa-tiktok me-2"></i>Spesialis TikTok</p>
                    <h1 class="display-5 mb-4">Kuasai FYP & Tingkatkan Konversi Penjualan</h1>
                    <p class="lead mb-4 text-muted">Dari ide konten yang menahan perhatian (*hook*), riset *sound trending*, hingga optimasi katalog produk di Keranjang Kuning. Kami bantu brand Anda bersinar di platform paling dinamis saat ini.</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="#harga-paket" class="btn btn-dark py-3 px-4 fw-bold rounded-pill">Lihat Harga Paket</a>
                        <a href="#portofolio" class="btn btn-outline-dark py-3 px-4 fw-bold rounded-pill">Lihat Portofolio</a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img src="https://placehold.co/600x600/212529/ffffff?text=Mockup+Feed+TikTok+Klien" class="img-fluid rounded shadow-lg w-100" alt="TikTok Management Lokavira" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-light mt-5">
        <div class="container py-4">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2 class="display-6 mb-5">Cara Kerja <span class="text-dark">Anti-Ribet</span></h2>
            </div>
            <div class="row g-4 text-center">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="step-icon"><i class="fa fa-music"></i></div>
                    <h5 class="fw-bold">1. Riset Tren & Hook</h5>
                    <p class="text-muted small">Mencari *sound* viral dan merancang *script* video yang menarik sejak 3 detik pertama.</p>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="step-icon"><i class="fa fa-video"></i></div>
                    <h5 class="fw-bold">2. Produksi Video</h5>
                    <p class="text-muted small">Proses editing dinamis dengan transisi, teks berjalan (*caption*), dan ritme yang disukai audiens.</p>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="step-icon"><i class="fa fa-store"></i></div>
                    <h5 class="fw-bold">3. Optimasi Keranjang</h5>
                    <p class="text-muted small">Mendesain poster produk yang rapi agar etalase TikTok Shop Anda memancing klik.</p>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="step-icon"><i class="fa fa-rocket"></i></div>
                    <h5 class="fw-bold">4. Posting di Jam FYP</h5>
                    <p class="text-muted small">Penjadwalan konten di jam-jam prime time beserta evaluasi *views* dan interaksi.</p>
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
                            <h4 class="fw-bold mb-3 text-dark">Essential</h4>
                            <p class="text-muted small">Mulai bangun eksistensi brand Anda di TikTok</p>
                            <h2 class="text-dark display-6 fw-bold mb-0">Rp 1.500.000</h2>
                            <span class="text-muted small">/bulan</span>
                        </div>
                        <hr class="mb-4">
                        <ul class="list-unstyled pricing-list text-muted small mb-4">
                            <li><i class="fa fa-check text-dark me-3"></i><span>10 Video Konten (15-60 detik)</span></li>
                            <li><i class="fa fa-check text-dark me-3"></i><span>Riset Tren & Sound Viral Mingguan</span></li>
                            <li><i class="fa fa-check text-dark me-3"></i><span>Pembuatan Ide & Scripting Dasar</span></li>
                            <li><i class="fa fa-check text-dark me-3"></i><span>Merapikan Tampilan Profil & Bio TikTok</span></li>
                            <li><i class="fa fa-check text-dark me-3"></i><span>Admin Posting & Penjadwalan</span></li>
                            <li><i class="fa fa-check text-dark me-3"></i><span>1x Revisi per Video (Minor)</span></li>
                            <li><i class="fa fa-check text-dark me-3"></i><span>Laporan Kinerja Bulanan</span></li>
                        </ul>
                        <div class="mt-auto pt-4">
                            <a href="https://wa.me/628138808690?text=Halo%20Loka,%20saya%20tertarik%20pesan%20Paket%20TikTok%20Essential" class="btn btn-outline-dark w-100 py-3 rounded-pill" target="_blank">Pilih Paket Essential</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card pricing-card h-100 border-0 shadow-lg p-4 p-xl-5 position-relative bg-dark" style="transform: scale(1.05); z-index: 1;">
                        <div class="position-absolute top-0 start-50 translate-middle">
                            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold border border-white">Recommended</span>
                        </div>
                        <div class="text-center mb-4 mt-3">
                            <h4 class="fw-bold mb-3 text-white">TikTok FYP</h4>
                            <p class="text-white-50 small">Fokus pada interaksi dan menarik audiens baru</p>
                            <h2 class="text-white display-6 fw-bold mb-0">Rp 3.500.000</h2>
                            <span class="text-white-50 small">/bulan</span>
                        </div>
                        <hr class="border-secondary mb-4 opacity-50">
                        <ul class="list-unstyled pricing-list text-white small mb-4">
                            <li><i class="fa fa-check text-warning me-3"></i><span>15 Video Konten (Fokus *Hook* Penjualan)</span></li>
                            <li><i class="fa fa-check text-warning me-3"></i><span>Riset Tren & Sound Viral Premium</span></li>
                            <li><i class="fa fa-check text-warning me-3"></i><span>Optimasi TikTok Shop (Pembuatan Desain Poster Etalase Keranjang Kuning)</span></li>
                            <li><i class="fa fa-check text-warning me-3"></i><span>Pembuatan *Content Pillar* & Scripting</span></li>
                            <li><i class="fa fa-check text-warning me-3"></i><span>Admin Posting di Jam *Prime Time*</span></li>
                            <li><i class="fa fa-check text-warning me-3"></i><span>2x Revisi per Video</span></li>
                            <li><i class="fa fa-check text-warning me-3"></i><span>Laporan Kinerja & Evaluasi Bulanan</span></li>
                        </ul>
                        <div class="mt-auto pt-4">
                            <a href="https://wa.me/628138808690?text=Halo%20Loka,%20saya%20tertarik%20pesan%20Paket%20TikTok%20FYP" class="btn btn-warning text-dark fw-bold w-100 py-3 rounded-pill shadow" target="_blank">Pilih Paket FYP</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card pricing-card h-100 border border-light shadow-sm p-4 p-xl-5 bg-white">
                        <div class="text-center mb-4">
                            <h4 class="fw-bold mb-3 text-dark">Scale-Up</h4>
                            <p class="text-muted small">Ekspansi maksimal dengan konten intens & Ads</p>
                            <h2 class="text-dark display-6 fw-bold mb-0">Rp 7.500.000</h2>
                            <span class="text-muted small">/bulan</span>
                        </div>
                        <hr class="mb-4">
                        <ul class="list-unstyled pricing-list text-muted small mb-4">
                            <li><i class="fa fa-check text-dark me-3"></i><span>25 Video Konten Dinamis</span></li>
                            <li><i class="fa fa-check text-dark me-3"></i><span>Desain Full Etalase TikTok Shop</span></li>
                            <li><i class="fa fa-check text-dark me-3"></i><span>Setup TikTok Ads Dasar (Saldo dari klien)</span></li>
                            <li><i class="fa fa-check text-dark me-3"></i><span>Riset & Scripting Lanjutan</span></li>
                            <li><i class="fa fa-check text-dark me-3"></i><span>Manajemen Komen & Balas DM Cepat</span></li>
                            <li><i class="fa fa-check text-dark me-3"></i><span>2x Revisi per Video</span></li>
                            <li><i class="fa fa-check text-dark me-3"></i><span>Laporan Mingguan & Evaluasi Strategi</span></li>
                        </ul>
                        <div class="mt-auto pt-4">
                            <a href="https://wa.me/628138808690?text=Halo%20Loka,%20saya%20tertarik%20pesan%20Paket%20TikTok%20Scale-Up" class="btn btn-outline-dark w-100 py-3 rounded-pill" target="_blank">Pilih Paket Scale-Up</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="portofolio" class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2 class="display-6 mb-5">Format Video Andalan Kami</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-item shadow-sm text-center">
                        <img src="https://placehold.co/400x600/212529/ffffff?text=Video+Edukasi" class="img-fluid w-100" alt="Format Video Edukasi TikTok">
                        <p class="mt-3 fw-bold text-dark">Konten Edukasi / Storytelling</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-item shadow-sm text-center">
                        <img src="https://placehold.co/400x600/eab308/ffffff?text=Video+Review" class="img-fluid w-100" alt="Format Video Review TikTok">
                        <p class="mt-3 fw-bold text-dark">Konten Review & Showcase Produk</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-item shadow-sm text-center">
                        <img src="https://placehold.co/400x600/0d6efd/ffffff?text=Video+Trending" class="img-fluid w-100" alt="Format Video Tren TikTok">
                        <p class="mt-3 fw-bold text-dark">Konten Mengikuti Tren Viral</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-light">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="text-center mb-4">Pertanyaan Seputar TikTok</h3>
                    <div class="accordion shadow-sm" id="faqAccordion">
                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Apakah saya/karyawan saya harus joget-joget di depan kamera?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted small">
                                    Tentu tidak! Algoritma TikTok sekarang sangat menyukai konten edukasi, *voice over* (suara latar belakang), hingga estetika produk. Kami akan menyesuaikan *style* video dengan wibawa dan identitas *brand* Anda.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Apa maksudnya Optimasi Keranjang Kuning (TikTok Shop)?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted small">
                                Kami akan membantu mengelola tampilan toko online Anda. Tim kami fokus pada desain visual, mulai dari membuat cover
                                poster produk hingga merapikan katalog di etalase Keranjang Kuning Anda agar terlihat profesional, jelas, dan memancing
                                audiens untuk menekan tombol checkout.
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
            <h2 class="mb-4 text-white">Ingin Cepat Tembus FYP & Closing?</h2>
            <p class="lead mb-4">Mari diskusi dengan tim ahli kami untuk menentukan strategi TikTok yang paling pas dengan produk Anda.</p>
            <a href="https://wa.me/628138808690?text=Halo%20Loka,%20saya%20mau%20konsultasi%20gratis%20untuk%20TikTok%20Marketing" class="btn btn-light btn-lg px-5 text-primary fw-bold rounded-pill" target="_blank">Konsultasi Gratis Sekarang</a>
        </div>
    </div>
@endsection