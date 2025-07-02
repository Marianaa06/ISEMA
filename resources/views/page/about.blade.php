@extends('layout.layout')
@section('content')
<section class="about-hero position-relative text-white text-center d-flex align-items-center justify-content-center">
  <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
  <div class="container position-relative z-2">
    <h1 class="display-4 fw-bold mb-2">Tentang Kami</h1>
    <h3 class="lead">Kenali lebih dekat <span class="text-emphasize text-purple">Techno Celebes</span> & <span class="text-emphasize text-purple">ISEMA</span></h3>
  </div>
</section>
<!-- Konten -->
<section class="who-we-are position-relative py-5 bg-light">
  <div class="container">
    <!-- Siapa Kami -->
    <div class="row align-items-center g-5">
      <!-- Teks di Kiri -->
      <div class="col-lg-6">
        <h3 class="text-brand fw-bold fs-3 mb-4">
          <i class="fas fa-users me-2"></i> Siapa Kami?
        </h3>
        <p class="fs-5 text-muted">
          <strong>Techno Celebes</strong> adalah perusahaan teknologi dari <strong>Indonesia Timur</strong> yang berfokus pada solusi digital inovatif. Kami membangun produk seperti <strong>ISEMA</strong> untuk membantu pelaku usaha berkembang lewat teknologi modern dan efisien.
        </p>
        <ul class="list-check fs-6 mt-4">
          <li>Membantu UMKM Go-Digital</li>
          <li>Fokus pada efisiensi & kemudahan</li>
          <li>Berbasis teknologi lokal berkualitas</li>
        </ul>
      </div>
      <!-- Gambar di Kanan -->
      <div class="col-lg-6 text-center">
        <div class="image-wrapper position-relative">
          <img src="{{ asset('images/example.jpg') }}" alt="Ilustrasi Kami" class="img-fluid rounded shadow-lg" style="max-height: 350px; object-fit: cover;">
        </div>
      </div>
    </div>
    <!-- Apa itu ISEMA -->
    <div class="row align-items-center g-5 py-5">
      <!-- Gambar di Kiri -->
      <div class="col-lg-6 text-center">
        <div class="image-wrapper position-relative">
          <img src="{{ asset('images/example.jpg') }}" alt="Ilustrasi ISEMA" class="img-fluid rounded shadow-lg" style="max-height: 350px; object-fit: cover;">
        </div>
      </div>
      <!-- Teks di Kanan -->
      <div class="col-lg-6">
        <h3 class="text-brand fw-bold fs-3 mb-4">
          <i class="fas fa-lightbulb me-2"></i> Apa itu ISEMA?
        </h3>
        <p class="fs-5 text-muted">
          <strong>ISEMA</strong> adalah platform pengelolaan penjualan digital yang efisien dan fleksibel. Dirancang untuk mendukung pertumbuhan usaha dari UMKM hingga perusahaan besar.
        </p>
        <ul class="list-check fs-6 mt-4">
          <li>Manajemen penjualan & stok</li>
          <li>Statistik real-time & laporan otomatis</li>
          <li>Akses multi-device — kapan saja, di mana saja</li>
        </ul>
      </div>
    </div>
    <!-- Visi & Misi -->
    <div class="row g-4 py-5">
      <!-- VISI -->
      <div class="col-md-6">
        <div class="card shadow-lg border-0 h-100 bg-light-purple position-relative">
          <div class="card-body p-4">
            <div class="d-flex align-items-center mb-3">
              <div class="icon-circle bg-purple text-white me-3">
                <i class="fas fa-bullseye"></i>
              </div>
              <h4 class="text-purple fw-bold m-0">Visi Kami</h4>
            </div>
            <blockquote class="fs-5 fst-italic text-muted mb-0">
              “Menjadi solusi teknologi penjualan terpercaya yang mendorong pertumbuhan bisnis di seluruh Indonesia.”
            </blockquote>
          </div>
        </div>
      </div>
      <!-- MISI -->
      <div class="col-md-6">
        <div class="card shadow-lg border-0 h-100 bg-white position-relative">
          <div class="card-body p-4">
            <div class="d-flex align-items-center mb-3">
              <div class="icon-circle bg-purple text-white me-3">
                <i class="fas fa-rocket"></i>
              </div>
              <h4 class="text-purple fw-bold m-0">Misi Kami</h4>
            </div>
            <ul class="list-step ps-3 mb-0">
              <li>Menyediakan platform teknologi yang mudah digunakan</li>
              <li>Memberikan dukungan terbaik bagi pelaku usaha</li>
              <li>Mendorong adopsi digital untuk bisnis lokal</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- FAQ -->
    <div class="py-5">
      <h4 class="text-center fw-bold mb-4">Pertanyaan yang Sering Ditanyakan</h4>
      <div class="accordion" id="faqAccordion">
        <div class="accordion-item mb-3">
          <h2 class="accordion-header" id="faq1">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
              Apakah ISEMA gratis?
            </button>
          </h2>
          <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              ISEMA menyediakan versi gratis terbatas dan versi premium dengan fitur lengkap.
            </div>
          </div>
        </div>
        <div class="accordion-item mb-3">
          <h2 class="accordion-header" id="faq2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
              Bisa dipakai di HP?
            </button>
          </h2>
          <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Bisa. ISEMA berjalan baik di desktop, tablet, dan smartphone.
            </div>
          </div>
        </div>
        <div class="accordion-item mb-3">
          <h2 class="accordion-header" id="faq3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
              Apakah ada dukungan pelanggan?
            </button>
          </h2>
          <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Ya! Tim kami siap membantu 24/7 melalui WhatsApp dan email.
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CTA / AJAKAN -->
    <div class="py-5 text-center">
      <h3 class="fw-bold mb-3">Siap Membawa Bisnis Anda ke Level Selanjutnya?</h3>
      <p class="text-muted mb-4">Gabung bersama ratusan pelaku usaha yang sudah merasakan manfaat ISEMA.</p>
      <a href="#" class="btn btn-lg btn-primary rounded-pill px-4">Coba ISEMA Sekarang</a>
    </div>
  </div>
  </div>
</section>


<style>
  /* Hero section */
  .about-hero {
    height: 320px;
    background-image: url('/images/example.jpg');
    /* ganti dengan gambar kamu */
    background-size: cover;
    background-position: center;
    position: relative;
  }

  .about-hero .overlay {
    background: rgba(30, 29, 31, 0.85);
    backdrop-filter: blur(2px);
  }

  .text-emphasize {
    color: #f5d142;
    font-weight: 700;
  }

  .who-we-are {
    background: #f7f6fc;
    border-top: 1px solid #e4dcfa;
    border-bottom: 1px solid #e4dcfa;
  }

  .image-wrapper {
    position: relative;
    z-index: 1;
    overflow: hidden;
    border-radius: 0.75rem;
  }

  .border-decor {
    border: 3px dashed rgba(142, 89, 209, 0.2);
    border-radius: 0.75rem;
    z-index: -1;
    transform: scale(1.05);
  }

  .list-check {
    list-style: none;
    padding-left: 0;
  }

  .list-check li::before {
    content: "✓ ";
    color: #8e59d1;
    font-weight: bold;
    margin-right: 6px;
  }


  .text-brand {
    color: #8e59d1;
    font-weight: 600;
  }

  .card-custom {
    border: none;
    border-radius: 0.75rem;
  }

  .list-check {
    list-style: none;
    padding-left: 0;
  }

  .list-check li::before {
    content: "✔ ";
    color: #6f42c1;
    margin-right: 6px;
  }

  .bg-light-purple {
    background: linear-gradient(135deg, #f7f2ff, #fdfdff);
  }

  .icon-circle {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    font-size: 1.2rem;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
  }

  .bg-purple {
    background-color: #8e59d1;
  }

  .text-purple {
    color: #8e59d1;
  }

  .list-step {
    list-style: none;
    padding-left: 0;
    color: #555;
  }

  .list-step li {
    margin-bottom: 0.75rem;
    position: relative;
    padding-left: 1.8rem;
  }

  .list-step li::before {
    content: "✓";
    position: absolute;
    left: 0;
    top: 2px;
    color: #8e59d1;
    font-weight: bold;
  }


  .testimonial-card {
    background: linear-gradient(145deg, #ffffff, #f7f3ff);
    transition: all 0.3s ease;
    border: 1px solid #eee;
  }

  .testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.07);
  }


  .accordion-button {
    background-color: #f7f6fc;
    color: #333;
    font-weight: 500;
  }
</style>

@endsection