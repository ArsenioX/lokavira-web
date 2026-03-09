@extends('layouts.app')

{{-- SEO Meta Tags Khusus Halaman Portofolio --}}
@section('title', 'Portofolio & Project Kami - Lokavira Digital Agency')
@section('meta_description', 'Lihat hasil kerja nyata Lokavira dalam membantu bisnis tumbuh. Koleksi project social media management, desain konten, dan web development terbaik kami.')

@section('content')
        <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Our Projects</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Projects</li>
                </ol>
            </nav>
        </div>
    </div>
        <!-- Page Header End -->


        <!-- Projects Start -->
        <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Portofolio Kami</p>
                        <h1 class="display-5 mb-5">Lihat Hasil Kolaborasi & Karya Terbaik Kami</h1>
                    </div>

                    <style>
                        /* 1. Sihir Aspek Rasio 16:9 */
                        .project-carousel .project-img img {
                            width: 100%;
                            aspect-ratio: 16/9;
                            object-fit: cover;
                            border-radius: 15px;
                            transition: transform 0.5s ease;
                        }

                        /* 2. Efek Hover Layar Kaca (Overlay) */
                        .project-carousel .project-img {
                            position: relative;
                            overflow: hidden;
                            border-radius: 15px;
                            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                        }

                        .portfolio-overlay {
                            position: absolute;
                            top: 0;
                            left: 0;
                            right: 0;
                            bottom: 0;
                            background: rgba(12, 140, 140, 0.85);
                            /* Warna Teal Lokavira Transparan */
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            opacity: 0;
                            transition: all 0.4s ease;
                            border-radius: 15px;
                        }

                        .project-item:hover .portfolio-overlay {
                            opacity: 1;
                        }

                        .project-item:hover .project-img img {
                            transform: scale(1.1);
                        }

                        /* 3. FIX OVERLAP: Kartu Judul Dinamis */
                        .project-info-card {
                            background: #ffffff;
                            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
                            border-radius: 10px;
                            padding: 1.5rem;
                            margin: -40px 20px 0 20px;
                            /* Menarik kotak ke atas gambar sedikit */
                            position: relative;
                            z-index: 2;
                            text-align: center;
                            transition: all 0.3s ease;
                        }

                        .project-item:hover .project-info-card {
                            transform: translateY(-5px);
                            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
                        }
                    </style>

                    <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.3s">

                        <div class="project-item pb-5">
                            <div class="project-img">
                                <img class="img-fluid" src="img/tiktok-1.png" alt="Hai Fitcare Management">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-light btn-square rounded-circle shadow" href=""><i class="fa fa-eye"
                                            style="color: #0C8C8C;"></i></a>
                                </div>
                            </div>
                            <div class="project-info-card">
                                <span class="badge mb-2 px-3 py-2 rounded-pill"
                                    style="background-color: #0C8C8C; color: white;">Healthcare</span>
                                <h5 class="mb-0 fw-bold text-dark">Hai Fitcare Management</h5>
                            </div>
                        </div>

                        <div class="project-item pb-5">
                            <div class="project-img">
                                <img class="img-fluid" src="img/feed-2.png" alt="Herbalhealth">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-light btn-square rounded-circle shadow" href=""><i class="fa fa-eye"
                                            style="color: #0C8C8C;"></i></a>
                                </div>
                            </div>
                            <div class="project-info-card">
                                <span class="badge mb-2 px-3 py-2 rounded-pill"
                                    style="background-color: #0C8C8C; color: white;">Supplement</span>
                                <h5 class="mb-0 fw-bold text-dark">Herbalhealth</h5>
                            </div>
                        </div>

                        <div class="project-item pb-5">
                            <div class="project-img">
                                <img class="img-fluid" src="img/reels-1.png" alt="Berkatintiguna">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-light btn-square rounded-circle shadow" href=""><i class="fa fa-eye"
                                            style="color: #0C8C8C;"></i></a>
                                </div>
                            </div>
                            <div class="project-info-card">
                                <span class="badge mb-2 px-3 py-2 rounded-pill"
                                    style="background-color: #0C8C8C; color: white;">Corporate</span>
                                <h5 class="mb-0 fw-bold text-dark">Berkatintiguna</h5>
                            </div>
                        </div>

                        <div class="project-item pb-5">
                            <div class="project-img">
                                <img class="img-fluid" src="img/service-4.jpg" alt="Web Development Lokavira">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-light btn-square rounded-circle shadow" href=""><i class="fa fa-eye"
                                            style="color: #0C8C8C;"></i></a>
                                </div>
                            </div>
                            <div class="project-info-card">
                                <span class="badge mb-2 px-3 py-2 rounded-pill"
                                    style="background-color: #0C8C8C; color: white;">Digital Agency</span>
                                <h5 class="mb-0 fw-bold text-dark">Web Development Lokavira</h5>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        <!-- Projects End -->
@endsection
