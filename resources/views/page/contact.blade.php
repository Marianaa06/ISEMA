@extends('layout.layout')
@section('content')

<!-- Hero Section -->
<section class="about-hero position-relative text-white text-center d-flex align-items-center justify-content-center mb-5">
  <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
  <div class="container position-relative z-2 py-5">
    <h1 class="display-4 fw-bold mb-3">Hubungi Kami</h1>
    <h4 class="lead"><span class="text-emphasize text-purple">Techno Celebes</span> & <span class="text-emphasize text-purple">ISEMA</span></h4>
  </div>
</section>
<!-- Kontak Section -->
<section class="contact-section py-5">
  <div class="container px-4 px-md-5">
    <div class="row g-5 align-items-stretch justify-content-center">
      <div class="col-lg-5">
        <div class="bg-white p-4 p-lg-5 h-100 rounded shadow-lg border-start border-4 border-purple">
          <h4 class="text-purple fw-bold mb-4 fs-3">Informasi Kontak</h4>
          <p class="mb-3 fs-6">
            <i class="fas fa-map-marker-alt me-2 text-purple"></i>
            Jalan Tadulako, Besusu Tengah, Palu Timur
            Sulawesi Tengah, Indonesia
          </p>
          <p class="mb-3 fs-6">
            <i class="fas fa-envelope me-2 text-purple"></i>
            official@techno-celebes.com
          </p>
          <p class="mb-4 fs-6">
            <i class="fas fa-phone-alt me-2 text-purple"></i>
            +62 822-9954-3317
          </p>
          <div>
            <h6 class="fw-semibold mb-3 fs-6">Ikuti Kami:</h6>
            <div class="d-flex gap-3">
              <a href="https://www.facebook.com/share/1Ajxosb8o7/?mibextid=wwXIfr" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://www.instagram.com/technocelebes" class="social-icon">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://www.tiktok.com/@techno.celebes?_t=ZS-8xZpVSu5rfk&_r=1" class="social-icon">
                <i class="fab fa-tiktok"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Form Kontak -->
      <div class="col-lg-7">
        <div class="bg-white p-4 p-lg-5 rounded shadow-lg">
          <h4 class="text-purple fw-bold mb-4">Kirim Pesan</h4>
          <form method="POST" action="{{ route('kontak.kirim') }}">
            @csrf
            <div class="mb-4">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="text" name="name" class="form-control form-control-lg" id="name" placeholder="Masukkan nama Anda">
            </div>
            <div class="mb-4">
              <label for="email" class="form-label">Email Aktif</label>
              <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Masukkan email">
            </div>
            <div class="mb-4">
              <label for="message" class="form-label">Pesan</label>
              <textarea name="message" class="form-control form-control-lg" id="message" rows="5" placeholder="Tulis pesan Anda..."></textarea>
            </div>
            <button type="submit" class="btn btn-lg btn-primary px-5 rounded-pill">Kirim Pesan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CSS Tambahan -->
<style>
  .about-hero {
    height: 340px;
    background-image: url('/images/example.jpg');
    background-size: cover;
    background-position: center;
    position: relative;
  }

  .about-hero .overlay {
    background: rgba(30, 29, 31, 0.85);
    backdrop-filter: blur(3px);
  }

  .text-emphasize {
    color: #f5d142;
    font-weight: 700;
  }

  .social-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 42px;
    height: 42px;
    background-color: #f7f6fc;
    color: #6f42c1;
    border-radius: 50%;
    font-size: 1.1rem;
    transition: all 0.3s ease;
    text-decoration: none;
  }

  .social-icon:hover {
    background-color: #6f42c1;
    color: #fff;
    transform: scale(1.1);
    box-shadow: 0 4px 10px rgba(111, 66, 193, 0.3);
  }

  .text-purple {
    color: #6f42c1;
  }

  .btn-primary {
    background-color: #6f42c1;
    border: none;
  }

  .btn-primary:hover {
    background-color: #5934a1;
  }

  .form-label {
    font-weight: 600;
    color: #333;
  }

  .form-control {
    border-radius: 0.6rem;
    padding: 0.75rem 1rem;
  }

  .contact-section {
    background-color: #f7f6fc;
  }

  .border-purple {
    border-color: #6f42c1 !important;
  }
</style>

@endsection