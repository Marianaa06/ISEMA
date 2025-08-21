<template>
  <div class="cbt-page">
    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 text-left">
            <p class="tagline">Ujian Digital Terstruktur</p>
            <h1 class="hero-title">
              CBT Terintegrasi<br><span>untuk Ujian Aman dan Akurat</span>
            </h1>
            <p class="hero-subtext">
              Platform ujian berbasis komputer yang mendukung evaluasi akademik secara efisien dan real-time.
            </p>
            <ul class="hero-benefits">
              <li>Anti-kecurangan dengan fitur acak soal & timer</li>
              <li>Soal objektif dan esai</li>
              <li>Rekap nilai otomatis</li>
            </ul>
            <button class="btn btn-cta mt-3">Jadwalkan Demo</button>
          </div>
          <div class="col-lg-6 text-center">
            <img src="https://media.istockphoto.com/id/1397678880/photo/closeup-of-a-black-businesswoman-typing-on-a-laptop-keyboard-in-an-office-alone.jpg?s=612x612&w=0&k=20&c=Qj9WWpAoKB0W7k-c68Y-8neN6c1mCExnEO9UKG-eoXY=" alt="Ilustrasi CBT" class="img-fluid hero-image shadow rounded">
          </div>
        </div>
      </div>
    </section>

    <!-- Why Choose CBT -->
    <section class="why-section">
      <div class="container-fluid p-0">
        <div class="row g-0 align-items-center">
          <div class="col-md-5 text-center bg-light py-5 title-wrapper">
            <h2 class="why-title">Why Choose<br>CBT ISEMA?</h2>
          </div>
          <div class="col-md-7 content-wrapper p-5">
            <p class="why-desc">
              CBT ISEMA memastikan proses ujian yang modern dan efisien, baik untuk ujian tengah semester, akhir semester, maupun seleksi kampus.
            </p>
            <p class="why-desc">
              Dilengkapi fitur keamanan ujian, bank soal, dan integrasi dengan SIAKAD untuk hasil otomatis.
            </p>
            <p class="why-note">
              Dapat diakses di laboratorium maupun perangkat pribadi mahasiswa.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Fitur Unggulan -->
    <section class="fitur-section py-5">
      <div class="container">
        <h2 class="text-center text-dark mb-5">Fitur Unggulan CBT</h2>
        <div class="row gy-4">
          <div class="col-md-4" v-for="(feature, index) in features" :key="index">
            <div class="bg-white shadow rounded p-4 h-100">
              <i :class="feature.icon + ' fa-2x mb-3 text-dark'"></i>
              <h5 class="fw-bold text-dark">{{ feature.title }}</h5>
              <p class="text-muted">{{ feature.description }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta-cbt-section py-5">
  <div class="container-container text-center">
    <h2 class="mb-3">Ingin Mempunyai sistem yang cepat?</h2>
    <p class="mb-4 fw-bold fs-5">Hubungi kami untuk demo CBT ISEMA</p>
    <button class="btn-cbt px-4 py-2">Hubungi Kami</button>
  </div>
</section>
  </div>
</template>

<script>
export default {
  name: 'CbtComponent',
  data() {
    return {
features: [
  {
    title: 'Dashboard',
    description: 'Pusat kontrol untuk memantau jadwal ujian, jumlah peserta, dan status tes secara real-time.',
    icon: 'fas fa-tv'
  },
  {
    title: 'Entrance Test',
    description: 'Digunakan untuk seleksi awal mahasiswa baru dengan sistem ujian berbasis komputer.',
    icon: 'fas fa-door-open'
  },
  {
    title: 'TOEFL Test',
    description: 'Ujian kemampuan bahasa Inggris dengan sesi Listening, Structure, dan Reading.',
    icon: 'fas fa-headphones-alt'
  },
  {
    title: 'TOAFL Test',
    description: 'Tes kemampuan bahasa Arab lengkap dengan timer dan sistem koreksi otomatis.',
    icon: 'fas fa-language'
  },
  {
    title: 'SAT Test',
    description: 'Evaluasi potensi akademik calon mahasiswa berbasis standar nasional.',
    icon: 'fas fa-file-alt'
  },
  {
    title: 'Logout',
    description: 'Sistem logout otomatis setelah tes selesai untuk keamanan dan validasi data.',
    icon: 'fas fa-sign-out-alt'
  },
]
    }
  }
}
</script>
<style scoped>
.cbt-page {
  font-family: 'Poppins', sans-serif;
  color: #ffffff;
  background-color: #f8f9fa;
  padding: 50px;
}

/* Hero Section */
.hero-section {
  background: linear-gradient(135deg, #4e727d, #45818c);
  padding: 20px;
}
.hero-title {
  font-size: 2.5rem;
  font-weight: 800;
  margin-bottom: 15px;
  color: #ffffff;
}
.hero-title span {
  color: #ffffff;
}
.tagline {
  text-transform: uppercase;
  font-size: 0.9rem;
  color: #ffffff;
  font-weight: 600;
}
.hero-subtext {
  font-size: 1.1rem;
  margin-bottom: 20px;
  color: #ffffff;
}
.hero-benefits {
  list-style: none;
  padding-left: 0;
  color: #ffffff;
}
.hero-benefits li {
  position: relative;
  padding-left: 25px;
  margin-bottom: 10px;
}
.hero-benefits li::before {
  content: '✔';
  color: #ffffff;
  font-weight: bold;
  position: absolute;
  left: 0;
}
.btn-cta {
  background-color: rgb(255, 255, 255) ;
  color: rgb(0, 0, 0);
  border: none;
  padding: 12px 30px;
  border-radius: 8px;
  font-weight: bold;
  transition: 0.3s ease;
}
.btn-cta:hover {
  background-color: #218838;
}

/* Why Choose Section */
.why-section {
  background-color: #ffffff;
  color: #45818c;
}
.title-wrapper {
  background-color: #e8f5e9;
}
.why-title {
  font-size: 2.2rem;
  font-weight: 800;
  color: #000000;
}
.content-wrapper {
  background-color: #ffffff;
  font-size: 1.1rem;
  line-height: 1.8;
}
.why-desc {
  margin-bottom: 1rem;
}
.why-note {
  font-style: italic;
  color: #45818c;
}

/* Fitur Section */
/* .fitur-section {
  background-color: #f1fdf4;
} */
.fitur-section h2 {
  font-size: 2rem;
  font-weight: 700;
  color:#45818c;
}
.fitur-section .bg-white {
  border-left: 5px solid #45818c;
  transition: transform 0.3s ease;
}
.fitur-section .bg-white:hover {
  transform: translateY(-5px);
}

.cta-cbt-section {
  background: linear-gradient(135deg, #4e727d, #45818c);


  color: #fff;
}

.cta-cbt-section h2 {
  font-weight: 700;
  font-size: 2rem;
}

.cta-cbt-section p {
  font-size: 1.1rem;
}

.btn-cbt {
  background-color: rgb(255, 255, 255) ;
  color: #45818c;
  font-weight: 600;
  border: none;
  border-radius: 8px;
  transition: 0.3s ease;
}

.btn-cbt:hover {
    background-color: #000000;
  color: rgb(255, 255, 255) 
}

@media (max-width: 575.98px) {

  .cbt-page{
    padding: 0px;
  }
}
</style>