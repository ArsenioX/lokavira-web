@extends('layouts.app')

@section('content')
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown text-black">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Hubungi Kami</p>
                    <h1 class="display-5 mb-4">Siap Meningkatkan Bisnis Anda ke Level Berikutnya?</h1>
                    <p class="mb-4">
                        Jangan ragu untuk berdiskusi dengan kami. Tim Lokavira siap memberikan solusi digital terbaik yang sesuai dengan target dan anggaran Anda.
                    </p>

                    <form id="waFormLokavira">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="waName" placeholder="Nama Lengkap" required>
                                    <label for="waName">Nama Lengkap</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" name="phone" id="waPhone" placeholder="08xxxxxxxxxx" pattern="^08[0-9]{8,11}$" title="Nomor WhatsApp harus diawali dengan 08" required>
                                    <label for="waPhone">No. WhatsApp (Awali: 08)</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" placeholder="Tulis pesan Anda di sini" id="waMessage" style="height: 120px" required></textarea>
                                    <label for="waMessage">Pesan Anda</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5 rounded-pill w-100 fw-bold" type="submit">
                                    <i class="fab fa-whatsapp me-2 fs-5 align-middle"></i> Kirim Pesan via WhatsApp
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100 shadow-sm">
                        <iframe class="position-relative w-100 h-100"
                            src="https://maps.google.com/maps?q=Jl.+Gading+Griya+Lestari+H1+No.39,+Cilincing,+Jakarta+Utara&t=&z=15&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('waFormLokavira');

            if (!form) return;

            form.addEventListener('submit', function(e) {
                e.preventDefault();

                // Alert Loading
                Swal.fire({
                    title: 'Mengirim Pesan',
                    text: 'Mohon tunggu sebentar...',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                const data = new FormData(form);

                // Kirim data ke route Laravel
                fetch("{{ route('send.message') }}", {
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json'
                    },
                    body: data
                })
                .then(res => {
                    if (!res.ok) throw res;
                    return res.json();
                })
                .then(res => {
                    Swal.close();

                    if (res.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Pesan Terkirim',
                            text: res.message,
                            confirmButtonText: 'OK',
                            confirmButtonColor: '#0C8C8C'
                        });

                        form.reset();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal Mengirim',
                            text: res.message || 'Terjadi kesalahan, silakan coba lagi.',
                            confirmButtonText: 'Coba Lagi',
                            confirmButtonColor: '#0C8C8C'
                        });
                    }
                })
                .catch(async err => {
                    Swal.close();

                    let message = 'Gagal menghubungi server.';
                    if (err.json) {
                        try {
                            const errorData = await err.json();
                            if (errorData.message) message = errorData.message;
                        } catch(e) {}
                    }

                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: message,
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#0C8C8C'
                    });
                });
            });
        });
    </script>
@endsection