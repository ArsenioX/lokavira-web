@extends('layouts.app')

@section('content')
        <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
        <!-- Page Header End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">

                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Hubungi Kami</p>
                        <h1 class="display-5 mb-4">Siap Meningkatkan Bisnis Anda ke Level Berikutnya?</h1>
                        <h4 class="mb-4 fw-normal text-secondary">
                            Jangan ragu untuk berdiskusi dengan kami. Tim Lokavira siap memberikan solusi digital terbaik yang
                            sesuai dengan target dan anggaran Anda.
                        </h4>

                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Nama Lengkap">
                                        <label for="name">Nama Lengkap</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Alamat Email">
                                        <label for="email">Alamat Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subjek / Keperluan">
                                        <label for="subject">Subjek / Keperluan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Tulis pesan Anda di sini" id="message"
                                            style="height: 100px"></textarea>
                                        <label for="message">Pesan Anda</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary py-3 px-5" type="submit">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                        <div class="position-relative rounded overflow-hidden h-100">
                            <iframe class="position-relative w-100 h-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.666465355602!2d106.9147444!3d-6.175392399999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698b31a89c4d2d%3A0x6a16223e75e538c2!2sGriya%20Lestari%2C%20Pegangsaan%20Dua%2C%20Kec.%20Klp.%20Gading%2C%20Jkt%20Utara%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1709228812345!5m2!1sid!2sid"
                                frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                                tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

@endsection