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
                margin-top: 4px; 
            }
            .step-card {
                transition: all 0.3s ease;
                border-bottom: 3px solid transparent;
            }
            .step-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0,0,0,0.08)!important;
                border-bottom: 3px solid #0d6efd;
            }
            .step-icon {
                width: 70px; height: 70px;
                display: flex; align-items: center; justify-content: center;
                border-radius: 50%;
                background: rgba(13, 110, 253, 0.1); 
                color: #0d6efd;
                margin: 0 auto 1.5rem;
            }
            .tech-banner h5 { font-size: 1.1rem; color: #495057; }
        </style>

        <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <h1 class="display-3 mb-4 animated slideInDown">Web Development</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/service') }}">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Web Development</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3 mb-3"><i class="fa fa-laptop-code me-2"></i>Spesialis Pembuatan Website</p>
                        <h1 class="display-5 mb-4">Website Profesional, Kredibilitas Meningkat</h1>
                        <p class="lead mb-4 text-muted">Miliki "kantor digital" yang buka 24 jam nonstop. Kami membangun website yang cepat, responsif di semua perangkat, dan didesain khusus untuk mengubah pengunjung menjadi pelanggan setia bisnis Anda.</p>
                        <div class="d-flex gap-3 flex-wrap">
                            <a href="#harga-paket" class="btn btn-primary py-3 px-4 fw-bold rounded-pill">Lihat Paket Website</a>
                            <a href="#alur-kerja" class="btn btn-outline-dark py-3 px-4 fw-bold rounded-pill">Cara Kami Bekerja</a>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <img src="https://placehold.co/800x600/0b1121/eab308?text=Mockup+Website+Responsive" class="img-fluid rounded shadow-lg w-100" alt="Jasa Pembuatan Website Lokavira" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-light py-4 border-top border-bottom wow fadeIn" data-wow-delay="0.1s">
            <div class="container text-center">
                <p class="text-muted small fw-bold mb-3 text-uppercase" style="letter-spacing: 2px;">Dibangun dengan Teknologi Terbaik</p>
                <div class="d-flex justify-content-center flex-wrap gap-4 gap-md-5 tech-banner opacity-75">
                    <h5 class="m-0 d-flex align-items-center"><i class="fab fa-laravel me-2 text-danger"></i>Laravel</h5>
                    <h5 class="m-0 d-flex align-items-center"><i class="fab fa-php me-2 text-primary"></i>PHP</h5>
                    <h5 class="m-0 d-flex align-items-center"><i class="fab fa-wordpress me-2 text-info"></i>WordPress</h5>
                    <h5 class="m-0 d-flex align-items-center"><i class="fab fa-bootstrap me-2" style="color: #7952b3;"></i>Bootstrap</h5>
                </div>
            </div>
        </div>

        <div id="harga-paket" class="container-xxl py-5 mt-4">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h2 class="display-5 mb-5">Pilihan Paket Pembuatan Website</h2>
                </div>
        <div class="row g-4 justify-content-center align-items-stretch">

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card pricing-card h-100 border border-light shadow-sm p-4 p-xl-5 bg-white d-flex flex-column">
                    <div class="text-center mb-4">
                        <h4 class="fw-bold mb-3 text-dark">Web Starter</h4>
                        <p class="text-muted small">Landing Page instan untuk UMKM & Personal Branding</p>
                        <h2 class="text-primary display-6 fw-bold mb-0">Rp 999.000</h2>
                    </div>
                    <hr class="mb-4">
                    <ul class="list-unstyled pricing-list text-muted small mb-4 flex-grow-1">
                        <li><i class="fa fa-check text-primary me-3"></i><span>Desain Template Premium</span></li>
                        <li><i class="fa fa-check text-primary me-3"></i><span>Gratis Domain (.my.id / .biz.id) 1 Thn</span>
                        </li>
                        <li><i class="fa fa-check text-primary me-3"></i><span>Gratis Hosting Standard 1 Thn</span></li>
                        <li><i class="fa fa-check text-primary me-3"></i><span>Integrasi Tombol WhatsApp</span></li>
                        <li><i class="fa fa-info-circle text-info me-3"></i><span class="text-dark">Maintenance
                                (Opsional)</span></li>
                    </ul>
                    <div class="mt-auto pt-4">
                        <a href="https://wa.me/628138808690?text=Halo%20Loka,%20saya%20tertarik%20Paket%20Starter"
                            class="btn btn-outline-primary w-100 py-3 rounded-pill" target="_blank">Pilih Paket</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="card pricing-card h-100 border-0 shadow-lg p-4 p-xl-5 position-relative bg-primary d-flex flex-column"
                    style="background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%); transform: scale(1.05); z-index: 1;">
                    <div class="position-absolute top-0 start-50 translate-middle">
                        <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold border border-white">Paling
                            Diminati</span>
                    </div>
                    <div class="text-center mb-4 mt-3">
                        <h4 class="fw-bold mb-3 text-white">Company Profile</h4>
                        <p class="text-white-50 small">Desain custom eksklusif untuk tingkatkan trust</p>
                        <h2 class="text-white display-6 fw-bold mb-0">Rp 2.500.000</h2>
                    </div>
                    <hr class="border-light mb-4 opacity-50">
                    <ul class="list-unstyled pricing-list text-white small mb-4 flex-grow-1">
                        <li><i class="fa fa-check text-warning me-3"></i><span>Desain UI/UX Custom Eksklusif</span></li>
                        <li><i class="fa fa-check text-warning me-3"></i><span>Gratis Domain (.com/.id) 1 Thn</span></li>
                        <li><i class="fa fa-check text-warning me-3"></i><span>Gratis Hosting Bisnis & SSL</span></li>
                        <li><i class="fa fa-check text-warning me-3"></i><span>Email Bisnis Profesional</span></li>
                        <li><i class="fa fa-info-circle text-warning me-3"></i><span class="fw-bold">Maintenance
                                (Opsional/Add-on)</span></li>
                    </ul>
                    <div class="mt-auto pt-4">
                        <a href="https://wa.me/628138808690?text=Halo%20Loka,%20saya%20tertarik%20Paket%20Company%20Profile"
                            class="btn btn-warning text-dark fw-bold w-100 py-3 rounded-pill shadow" target="_blank">Pilih
                            Paket</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="card pricing-card h-100 border border-light shadow-sm p-4 p-xl-5 bg-white d-flex flex-column">
                    <div class="text-center mb-4">
                        <h4 class="fw-bold mb-3 text-dark">Custom Web App</h4>
                        <p class="text-muted small">Sistem Kompleks (Laravel/POS/Rumah Sakit)</p>
                        <h2 class="text-primary display-6 fw-bold mb-0">Rp 8.000.000+</h2>
                    </div>
                    <hr class="mb-4">
                    <ul class="list-unstyled pricing-list text-muted small mb-4 flex-grow-1">
                        <li><i class="fa fa-check text-primary me-3"></i><span>Full Custom Framework Laravel</span></li>
                        <li><i class="fa fa-check text-primary me-3"></i><span>Multi-Level User & Database</span></li>
                        <li><i class="fa fa-check text-primary me-3"></i><span>Gratis Domain & Setup Cloud Server</span></li>
                        <li><i class="fa fa-check text-primary me-3"></i><span
                                class="fw-bold text-dark text-decoration-underline">Free Maintenance 1 Tahun (Full)</span></li>
                        <li><i class="fa fa-check text-primary me-3"></i><span>Technical Support Prioritas</span></li>
                    </ul>
                    <div class="mt-auto pt-4">
                        <a href="https://wa.me/628138808690?text=Halo%20Loka,%20saya%20ingin%20konsultasi%20Custom%20Web%20App"
                            class="btn btn-outline-dark w-100 py-3 rounded-pill" target="_blank">Hubungi Developer</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="alur-kerja" class="container-xxl py-5 bg-light">
            <div class="container py-4">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h2 class="display-6 mb-5">Alur Pembuatan <span class="text-primary">Website</span></h2>
                </div>
                <div class="row g-4 text-center justify-content-center">
                    <div class="col-lg-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-white rounded p-4 h-100 shadow-sm step-card border-light">
                            <i class="fa fa-comments fa-3x text-primary mb-3"></i>
                            <h5 class="fw-bold">1. Diskusi</h5>
                            <p class="text-muted mb-0 small">Analisa kebutuhan & pemilihan nama domain.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="bg-white rounded p-4 h-100 shadow-sm step-card border-light">
                            <i class="fa fa-paint-brush fa-3x text-primary mb-3"></i>
                            <h5 class="fw-bold">2. UI/UX</h5>
                            <p class="text-muted mb-0 small">Pembuatan layout & penyusunan materi web.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="bg-white rounded p-4 h-100 shadow-sm step-card border-light">
                            <i class="fa fa-code fa-3x text-primary mb-3"></i>
                            <h5 class="fw-bold">3. Coding</h5>
                            <p class="text-muted mb-0 small">Proses *development* & pemrograman oleh tim ahli.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="bg-white rounded p-4 h-100 shadow-sm step-card border-light">
                            <i class="fa fa-bug fa-3x text-primary mb-3"></i>
                            <h5 class="fw-bold">4. Testing</h5>
                            <p class="text-muted mb-0 small">Uji coba responsivitas (*Mobile/PC*) & fungsionalitas.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="bg-white rounded p-4 h-100 shadow-sm step-card border-light">
                            <i class="fa fa-rocket fa-3x text-primary mb-3"></i>
                            <h5 class="fw-bold">5. Launching</h5>
                            <p class="text-muted mb-0 small">Website mengudara dan siap menerima pengunjung!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="container-xxl py-5 bg-white">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="text-center mb-4">Pertanyaan Seputar Website</h3>
                    <div class="accordion shadow-sm" id="faqAccordion">

                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button fw-bold text-dark bg-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Apakah biaya di atas sudah termasuk Domain dan Hosting?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted small">
                                    Ya! Semua paket di atas sudah termasuk sewa <strong>Domain</strong> dan
                                    <strong>Hosting</strong> berkualitas tinggi untuk 1 tahun pertama. Untuk tahun kedua dan
                                    seterusnya, Anda cukup membayar biaya perpanjangan server/hosting tahunan agar website
                                    tetap aktif.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Apakah harga tersebut sudah termasuk biaya Maintenance?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted small">
                                    Untuk Paket <strong>Starter</strong> dan <strong>Company Profile</strong>, biaya
                                    maintenance bersifat opsional (add-on). Namun untuk <strong>Paket Custom Web
                                        App</strong>, kami sudah menyertakan layanan <strong>Full Maintenance selama 1 tahun
                                        penuh</strong> untuk menjamin sistem Anda berjalan tanpa kendala.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Apakah website saya aman dari hacker?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted small">
                                    Kami memberikan <strong>Gratis SSL Security</strong> (gembok hijau/HTTPS) untuk setiap
                                    paket website. SSL berfungsi mengenkripsi data antara server dan pengunjung, sehingga
                                    website Anda lebih kredibel di mata Google dan aman dari pencurian data dasar.
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
                <h2 class="mb-4 text-white">Punya Ide Website Impian Anda?</h2>
                <p class="lead mb-4">Mari wujudkan menjadi nyata bersama tim developer ahli kami. Dapatkan penawaran harga terbaik hari ini.</p>
                <a href="https://wa.me/628138808690?text=Halo%20Loka,%20saya%20ingin%20konsultasi%20mengenai%20kebutuhan%20pembuatan%20website" class="btn btn-light btn-lg px-5 text-primary fw-bold rounded-pill" target="_blank">Mulai Konsultasi Gratis</a>
            </div>
        </div>
@endsection