@extends('layouts.app')

@section('content')
        <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
        <!-- Page Header End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4 align-items-end mb-4">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="img/about.jpg" alt="Tentang Lokavira">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Tentang Kami</p>
                        <h1 class="display-5 mb-4">Mitra Digital Terbaik untuk Pertumbuhan Bisnis Anda</h1>
                        <p class="mb-4">
                            Lokavira hadir sebagai solusi lengkap kebutuhan digital marketing Anda.
                            Kami memadukan kreativitas konten, strategi media sosial yang jitu,
                            dan pengelolaan iklan yang efisien untuk memastikan brand Anda tidak hanya dilihat,
                            tapi juga diingat dan dipilih oleh pelanggan.
                        </p>
                        <div class="border rounded p-4">
                            <nav>
                                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                    <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                        aria-selected="true">Siapa Kami</button>
                                    <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"
                                        aria-selected="false">Misi</button>
                                    <button class="nav-link fw-semi-bold" id="nav-vision-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision"
                                        aria-selected="false">Visi</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                                    aria-labelledby="nav-story-tab">
                                    <p>Lokavira adalah agensi digital marketing yang berdedikasi membantu UMKM dan perusahaan
                                        korporat beradaptasi di era digital.</p>
                                    <p class="mb-0">Kami percaya setiap bisnis memiliki cerita unik. Tugas kami adalah mengemas
                                        cerita tersebut menjadi konten yang menarik dan menjual.</p>
                                </div>
                                <div class="tab-pane fade" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                                    <p>Membantu klien mencapai target penjualan melalui strategi digital yang terukur dan
                                        efisien.</p>
                                    <p class="mb-0">Memberikan layanan pengelolaan media sosial yang responsif, kreatif, dan
                                        inovatif.</p>
                                </div>
                                <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                                    <p>Menjadi agensi digital marketing nomor satu yang paling dipercaya dalam menumbuhkan
                                        ekosistem bisnis digital di Indonesia.</p>
                                    <p class="mb-0">Selalu berinovasi dengan tren teknologi pemasaran terbaru.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-4">

                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                        <i class="fa fa-bolt text-white"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h4>Respon Cepat</h4>
                                        <span>Kami menghargai waktu Anda. Tim kami siap merespons kebutuhan dan revisi dengan
                                            kilat.</span>
                                    </div>
                                    <div class="border-end d-none d-lg-block"></div>
                                </div>
                                <div class="border-bottom mt-4 d-block d-lg-none"></div>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="h-100">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                        <i class="fa fa-users text-white"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h4>Tim Profesional</h4>
                                        <span>Dikerjakan oleh ahli strategi, konten kreator, dan desainer grafis
                                            berpengalaman.</span>
                                    </div>
                                    <div class="border-end d-none d-lg-block"></div>
                                </div>
                                <div class="border-bottom mt-4 d-block d-lg-none"></div>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                        <i class="fa fa-headset text-white"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h4>Support 24 Jam</h4>
                                        <span>Dunia digital tidak pernah tidur. Kami siap memantau performa kampanye Anda setiap
                                            saat.</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

@endsection