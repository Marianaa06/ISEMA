@extends('layout.layout')

@section('content')
<!-- Navbar -->

<!-- Hero Section -->
<!-- <html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Payze
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
 </head> -->
<!-- Hero Section -->
<section class="container mt-5 d-md-flex align-items-center justify-content-between px-3 px-md-0">
  <div class="w-100 w-md-50 position-relative z-10 pe-md-5">
    <p class="text-purple fs-7 d-flex align-items-center gap-2 mb-2">
      <span class="border border-purple rounded-circle d-inline-block" style="width: 10px; height: 10px">
      </span>
      ISEMA
    </p>
    <h1 class="fw-semibold fs-3 mb-3 lh-base">
      Integrasi Sistem Akademik Kampus Anda
      <br>
      Untuk Tingkatkan Efektivitas Pembelajaran
    </h1>
    <p class="text-secondary fs-7 mb-4" style="max-width: 400px">
      Kami menyediakan solusi sistem akademik ISEMA yang lengkap untuk mendukung manajemen kampus Anda
      mulai dari pemesanan produk hingga layanan purna jual yang andal.
    </p>
    <div class="d-flex gap-3">
      <button class="btn btn-gradient btn-sm px-4">
        Pesan Sekarang
      </button>
      <button class="btn btn-white-rounded btn-sm px-4">
        Pelajari Selengkapnya
      </button>
    </div>
  </div>
  <div class="w-100 w-md-50 position-relative">
    <div class="position-absolute top-0 end-0 h-100 d-none d-md-block rounded-tr-4 rounded-br-4" style="
          width: 50%;
          background: linear-gradient(45deg, #a77fff, #7a4fff);
          clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%, 20% 50%);
          opacity: 0.9;
          border-top-right-radius: 40px;
          border-bottom-right-radius: 40px;
          z-index: 1;
        ">
    </div>
    <img alt="Smiling woman wearing white shirt holding multiple credit cards in her right hand, standing with left hand in pocket" class="position-relative rounded-tr-4 rounded-br-4 mx-auto mx-md-0" height="400" src="https://storage.googleapis.com/a1aa/image/87cd3051-e600-44be-a318-8f177f14f3e2.jpg" style="width: 280px; max-width: 100%; z-index: 2" width="400" />
  </div>
</section>
<!-- Email & Info Cards Section -->
<section class="container mt-5 d-flex flex-column flex-md-row gap-4 gap-md-5 px-3 px-md-0">
  <form aria-label="Always Update Every Day subscription form" class="bg-purple-gradient rounded-3 p-4 flex-grow-1 flex-md-grow-0 flex-md-shrink-0" style="max-width: 380px">
    <h3 class="text-white fw-semibold fs-5 mb-3">
      Update setiap hari
    </h3>
    <p class="text-white fs-7 mb-4">
      Kami menyediakan solusi sistem akademik ISEMA yang lengkap untuk mendukung manajemen kampus Anda — mulai dari pemesanan produk hingga layanan purna jual yang andal.
    </p>
    <div class="d-flex gap-2">
      <input class="form-control rounded-pill text-white bg-white bg-opacity-25 border-0 fs-7" placeholder="Your Email" required="" style="flex-grow: 1" type="email" />
      <button class="btn btn-white-rounded btn-sm px-4 text-purple fw-semibold" type="submit">
        Request
      </button>
    </div>
  </form>
  <div class="bg-white rounded-3 p-4 flex-grow-1 d-flex flex-column flex-md-row justify-content-between align-items-center" style="gap: 1rem">
    <ul class="list-unstyled text-secondary fs-7 mb-3 mb-md-0" style="flex:1">
      <li class="d-flex align-items-center gap-2 mb-2">
        <i class="fas fa-check text-purple fs-6">
        </i>
        Dukungan Penuh Platform
      </li>
      <li class="d-flex align-items-center gap-2 mb-2">
        <i class="fas fa-check text-purple fs-6">
        </i>
        Transaksi Aman Dan Mudah
      </li>
      <li class="d-flex align-items-center gap-2 mb-2">
        <i class="fas fa-check text-purple fs-6">
        </i>
        Aplikasi Web Responsif
      </li>
      <li class="d-flex align-items-center gap-2 mb-2">
        <i class="fas fa-check text-purple fs-6">
        </i>
        Kemudahan Kelola Pesanan
      </li>
      <li class="d-flex align-items-center gap-2 mb-2">
        <i class="fas fa-check text-purple fs-6">
        </i>
        Perlindungan Data & Layanan Purna Jual
      </li>
      <!-- <li class="d-flex align-items-center gap-2">
        <i class="fas fa-check text-purple fs-6">
        </i>
        Lock Protection
      </li> -->
    </ul>
    <div class="text-secondary fs-7" style="flex:1">
      <h4 class="fw-semibold text-dark fs-6 mb-2">
        How Can I Help You?
      </h4>
      <p class="mb-3">
        We are ready to assist you in every step of ISEMA sales
        from product consultation and order processing to after-sales service.
      </p>
      <a class="text-purple fs-7 fw-semibold text-decoration-none d-inline-flex align-items-center gap-1" href="#">
        Read More
        <i class="fas fa-arrow-right fs-7">
        </i>
      </a>
    </div>
  </div>
</section>
<!-- Trusted Section -->
<section class="container mt-5 d-flex flex-column flex-md-row align-items-center gap-4 gap-md-5 px-3 px-md-0">
  <div class="position-relative w-100 w-md-50">
    <img alt="Smiling man in black suit holding a card in his right hand, standing outside" class="rounded-3 w-100" height="320" src="https://storage.googleapis.com/a1aa/image/c3322e5f-606d-421a-850b-b565127ea204.jpg" width="320" />
    <img alt="Woman sitting on a couch with laptop on lap, waving with right hand" class="position-absolute rounded-3 border border-white shadow" height="140" src="https://storage.googleapis.com/a1aa/image/6de1fa90-c84e-47c9-2b62-ff15e98b657d.jpg" style="top: 2.5rem; left: 0; width: 140px; height: 140px; object-fit: cover" width="140" />
    <!-- <div class="position-absolute bottom-0 start-50 translate-middle-x bg-purple-gradient text-white fs-7 fw-semibold rounded-pill px-3 py-2 shadow" style="min-width: 100px">
      1,485 +
      <br />
      Trusted Clients
    </div> -->
  </div>
  <div class="w-100 w-md-50 text-secondary fs-7">
    <p class="text-purple d-flex align-items-center gap-2 mb-2">
      <span class="border border-purple rounded-circle d-inline-block" style="width: 10px; height: 10px">
      </span>
      About Company
    </p>
    <h3 class="fw-semibold text-dark fs-5 mb-3 lh-base">
      Kami hadir sebagai solusi terpercaya untuk penjualan ISEMA
      <br />
      Dengan komitmen menghadirkan produk unggulan dan kepuasan pelanggan.
    </h3>
    <p class="mb-4">
      Kami siap mendampingi Anda dalam setiap langkah penjualan ISEMA, mulai dari konsultasi, pemesanan, hingga layanan purna jual. Kami berkomitmen memberikan produk berkualitas dengan proses yang aman dan transparan.

    </p>
    <div class="d-flex flex-column gap-4">
      <div class="d-flex gap-3 align-items-start">
        <div class="circle-purple">
          <i class="fas fa-user-friends fs-5">
          </i>
        </div>
        <div>
          <h5 class="fw-semibold text-dark mb-1">
            Mitra Terpercaya
          </h5>
          <p class="fs-7 text-secondary mb-0">
            Kami adalah mitra yang dapat Anda andalkan untuk mendapatkan produk ISEMA terbaik dan original.


          </p>
        </div>
      </div>
      <div class="d-flex gap-3 align-items-start">
        <div class="circle-purple-border">
          <i class="fas fa-laptop-code fs-5">
          </i>
        </div>
        <div>
          <h5 class="fw-semibold text-dark mb-1">
            Platform Cepat
          </h5>
          <p class="fs-7 text-secondary mb-0">
            Kami menyediakan platform penjualan ISEMA yang memudahkan Anda dalam memilih dan memesan produk dengan cepat.


          </p>
        </div>
      </div>
      <div class="d-flex gap-3 align-items-start">
        <div class="circle-purple-border">
          <i class="fas fa-shield-alt fs-5">
          </i>
        </div>
        <div>
          <h5 class="fw-semibold text-dark mb-1">
            Keandalan teruji
          </h5>
          <p class="fs-7 text-secondary mb-0">
            Kami menjamin kualitas produk dan layanan kami melalui pengalaman serta testimoni pelanggan yang telah puas.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Stats Section -->
<section class="container mt-5 d-flex flex-wrap justify-content-between text-center text-secondary fw-semibold fs-7 px-3 px-md-0">
  <div class="flex-fill min-w-25">
    <span class="text-dark fs-4 fw-bold">
      25
      <sup>
        +
      </sup>
    </span>
    <p class="mb-0">
      Years Of Experience
    </p>
  </div>
  <div class="flex-fill min-w-25">
    <span class="text-dark fs-4 fw-bold">
      3,452
      <sup>
        +
      </sup>
    </span>
    <p class="mb-0">
      Total Transaction
    </p>
  </div>
  <div class="flex-fill min-w-25">
    <span class="text-dark fs-4 fw-bold">
      751
      <sup>
        +
      </sup>
    </span>
    <p class="mb-0">
      Active User
    </p>
  </div>
  <div class="flex-fill min-w-25">
    <span class="text-dark fs-4 fw-bold">
      592
      <sup>
        +
      </sup>
    </span>
    <p class="mb-0">
      Positive Reviews
    </p>
  </div>
</section>
<!-- Services Section -->
<section class="container mt-5 rounded-3 py-5 px-3 px-md-0">
  <p class="text-purple fs-7 mb-2 d-flex justify-content-center align-items-center gap-2">
    <span class="border border-purple rounded-circle d-inline-block" style="width: 10px; height: 10px">
      </span>
      Layanan Kami  
  </p>
  <h2 class="text-center fw-semibold fs-4 mb-3" style="max-width: 600px; margin: 0 auto">
    Kami Memprioritaskan Keamanan dan Kepuasan dalam Penjualan ISEMA

  </h2>
  <p class="text-center text-secondary fs-7 mb-5" style="max-width: 600px; margin: 0 auto">
    Kami berkomitmen memberikan pengalaman penjualan ISEMA yang aman, transparan, dan berkualitas untuk semua pelanggan.
  </p>
  <div class="row g-4 justify-content-center" style="max-width: 900px; margin: 0 auto">
    <div class="col-12 col-sm-6 col-md-4">
      <div class="bg-white rounded-3 p-4 h-100 shadow-sm">
        <div class="circle-purple d-flex justify-content-center align-items-center mb-3" style="width: 40px; height: 40px">
          <i class="fas fa-lock fs-5">
          </i>
        </div>
        <h4 class="fw-semibold fs-6 mb-2">
          Produk Berkualitas

        </h4>
        <p class="text-secondary fs-7 mb-3">
          Kami hanya menyediakan produk ISEMA asli dan terjamin kualitasnya untuk memenuhi kebutuhan Anda.

        </p>
        <a class="text-purple fs-7 fw-semibold d-inline-flex align-items-center gap-1 text-decoration-none" href="#">
          Read More
          <i class="fas fa-arrow-right fs-7">
          </i>
        </a>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4">
      <div class="bg-white rounded-3 p-4 h-100 shadow-sm">
        <div class="circle-purple d-flex justify-content-center align-items-center mb-3" style="width: 40px; height: 40px">
          <i class="fas fa-clock fs-5">
          </i>
        </div>
        <h4 class="fw-semibold fs-6 mb-2">
          Fitur Penjualan Fleksibel

        </h4>
        <p class="text-secondary fs-7 mb-3">
          Nikmati kemudahan dalam memilih, memesan, dan mengelola produk ISEMA sesuai kebutuhan Anda, dengan proses yang cepat dan efisien.

        </p>
        <a class="text-purple fs-7 fw-semibold d-inline-flex align-items-center gap-1 text-decoration-none" href="#">
          Read More
          <i class="fas fa-arrow-right fs-7">
          </i>
        </a>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4">
      <div class="bg-white rounded-3 p-4 h-100 shadow-sm">
        <div class="circle-purple d-flex justify-content-center align-items-center mb-3" style="width: 40px; height: 40px">
          <i class="fas fa-thumbs-up fs-5">
          </i>
        </div>
        <h4 class="fw-semibold fs-6 mb-2">
          Tanpa Biaya Tersembunyi
        </h4>
        <p class="text-secondary fs-7 mb-3">
          Seluruh harga produk ISEMA kami transparan tanpa ada biaya tambahan di luar yang diinformasikan.

        </p>
        <a class="text-purple fs-7 fw-semibold d-inline-flex align-items-center gap-1 text-decoration-none" href="#">
          Read More
          <i class="fas fa-arrow-right fs-7">
          </i>
        </a>
      </div>
    </div>
  </div>
  <div class="row g-4 justify-content-center mt-3" style="max-width: 900px; margin: 0 auto">
    <div class="col-12 col-sm-6 col-md-4">
      <div class="bg-purple-gradient rounded-3 p-4 text-white h-100">
        <h4 class="fw-semibold fs-6 mb-2">
          Explore More Services
        </h4>
        <p class="fs-7 mb-0">
          Temukan berbagai layanan tambahan untuk mendukung pembelian dan distribusi produk ISEMA Anda.

        </p>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4">
      <div class="bg-white rounded-3 p-4 h-100 shadow-sm">
        <div class="circle-purple d-flex justify-content-center align-items-center mb-3" style="width: 40px; height: 40px">
          <i class="fas fa-headset fs-5">
          </i>
        </div>
        <h4 class="fw-semibold fs-6 mb-2">
          Dukungan Profesional

        </h4>
        <p class="text-secondary fs-7 mb-3">
          Tim kami siap membantu Anda dalam setiap tahap penjualan, mulai dari konsultasi hingga layanan purna jual.
        </p>
        <a class="text-purple fs-7 fw-semibold d-inline-flex align-items-center gap-1 text-decoration-none" href="#">
          Read More
          <i class="fas fa-arrow-right fs-7">
          </i>
        </a>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4">
      <div class="bg-white rounded-3 p-4 h-100 shadow-sm">
        <div class="circle-purple d-flex justify-content-center align-items-center mb-3" style="width: 40px; height: 40px">
          <i class="fas fa-clipboard-list fs-5">
          </i>
        </div>
        <h4 class="fw-semibold fs-6 mb-2">
          Akun Pelanggan

        </h4>
        <p class="text-secondary fs-7 mb-3">
          Nikmati fitur akun pelanggan untuk memudahkan pengelolaan pesanan dan riwayat pembelian ISEMA Anda.

        </p>
        <a class="text-purple fs-7 fw-semibold d-inline-flex align-items-center gap-1 text-decoration-none" href="#">
          Read More
          <i class="fas fa-arrow-right fs-7">
          </i>
        </a>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</script>
</section>

@endsection