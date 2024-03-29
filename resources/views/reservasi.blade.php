<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PKP-RI Kab. Bangkalan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    </head>

<body>
    <!-- Navbar  -->
    @include('template.nav')

    <!-- Content -->
    <section class="container-fluid">
        <div class="container mx-auto mt-3 py-1">
            <h4 class="fw-bold mb-4">Informasi Cara Reservasi</h4>
            <div class="container p-0">
                <div class="row g-0 mb-5">
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" class="bi bi-person-plus-fill bg-primary rounded-circle p-1" viewBox="0 0 16 16">
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
                        </svg>
                    </div>
                    <div class="col-11">
                        <div class="container">
                            <p class="fw-bold mt-0" style="font-size: 20px;">Mendaftarkan Diri</p>
                            <p class="mt-4">Untuk melakukan reservasi aula gedung PKPRI, anda harus terlebih dahulu terdaftar sebagai member kami</p>
                            <a class="btn btn-info rounded px-3" data-bs-toggle="modal" data-bs-target="#exampleModal2" href="#">Daftar</a>
                        </div>
                    </div>
                </div>
                <div class="row g-0 mb-5">
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" class="bi bi-lock-fill bg-warning rounded-circle p-1" viewBox="0 0 16 16">
                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2"/>
                          </svg>
                    </div>
                    <div class="col-11">
                        <div class="container">
                            <p class="fw-bold mt-0" style="font-size: 20px;">Login sebagai anggota</p>
                            <p class="mt-4">Setelah mendaftar dan memiliki akun member PKPRI, untuk dapat reservasi gedung aula anda harus login terlebih dahulu.
                                Klik menu login dibagian menu diatas atau klik tombol dibawah ini</p>
                            <a class="btn btn-info rounded px-3" data-bs-toggle="modal" data-bs-target="#exampleModal1" href="#">Login</a>
                        </div>
                    </div>
                </div>
                <div class="row g-0 mb-5">
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" class="bi bi-house-add-fill bg-danger rounded-circle p-1" viewBox="0 0 16 16">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 1 1-1 0v-1h-1a.5.5 0 1 1 0-1h1v-1a.5.5 0 0 1 1 0"/>
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                            <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                        </svg>
                    </div>
                    <div class="col-11">
                        <div class="container">
                            <p class="fw-bold mt-0" style="font-size: 20px;">Tentukan Gedung Aula yang ingin Anda pilih!</p>
                            <p class="mt-4">Sebelum memilih aula gedung pastikan untuk melihat ketersediaan gedung aula dengan mengatur pilih gedung aula yang ingin Anda pesan dan kapan tanggal yang tersedia pada halaman utama. Kemudian pilih aula gedung dan paket yang diinginkan.</p>
                            <a class="btn btn-info rounded px-3"  href="/">Reservasi</a>
                        </div>
                    </div>
                </div>
                <div class="row g-0 mb-5">
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" class="bi bi-card-checklist bg-info rounded-circle p-1" viewBox="0 0 16 16">
                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                            <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
                          </svg>
                    </div>
                    <div class="col-11">
                        <div class="container">
                            <p class="fw-bold mt-0" style="font-size: 20px;">Lakukan Reservasi dengan mengisi Form!</p>
                            <p class="mt-4">setelah memilih gedung aula, selanjutnya Anda akan di arahkan untuk mengisi form pemesanan untuk detail acara yang akan diadakan nantinya.</p>
                        </div>
                    </div>
                </div>
                <div class="row g-0 mb-5">
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" class="bi bi-cash-coin bg-success rounded-circle p-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
                            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z"/>
                            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567"/>
                          </svg>
                    </div>
                    <div class="col-11">
                        <div class="container">
                            <p class="fw-bold mt-0" style="font-size: 20px;">Melakukan Pembayaran Awal!</p>
                            <p class="mt-4">Ketika telah melakukan Reservasi, Anda bisa melakukan pembayaran awal (DP) sebesar Rp. 400.000 atau juga bisa melakukan pembayaran lunas dengan melakukan transfer pada metode pembayaran Kami.</p>
                            <p class="mt-4 text-danger">note: Setelah melakukan Reservasi, wajib melakukan pembayaran sebelum 24 jam, lebih dari itu dibatalkan.</p>
                            <a class="btn btn-info rounded px-3"  href="{{ route('info_pembayaran') }}">Pembayaran</a>
                        </div>
                    </div>
                </div>
                <div class="row g-0 mb-5">
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg"width="40" height="40" fill="#ffffff" class="bi bi-cloud-upload-fill bg-dark rounded-circle p-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0m-.5 14.5V11h1v3.5a.5.5 0 0 1-1 0"/>
                          </svg>
                    </div>
                    <div class="col-11">
                        <div class="container">
                            <p class="fw-bold mt-0" style="font-size: 20px;">Upload Bukti Pembayaran!</p>
                            <p class="mt-4">Setelah melakukan Transfer, jangan lupa Screenshot dan Upload bukti pembayaran pada halaman data pemesanan yang Anda Reservasi tadinya.</p>
                            <a class="btn btn-info rounded px-3"  href="{{ route('riwayat') }}">Data Pemesanan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    @include('template.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
