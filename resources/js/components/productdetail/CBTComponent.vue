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
        <h2 class="text-center mb-5">Fitur Unggulan CBT</h2>
        <div class="row gy-4">
          <div class="col-md-4" v-for="(feature, index) in features" :key="index">
            <div class="bg-white shadow rounded p-4 h-100">
              <i :class="feature.icon + ' fa-2x mb-3 text-primary'"></i>
              <h5 class="fw-bold">{{ feature.title }}</h5>
              <p class="text-muted">{{ feature.description }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta-cbt-section py-5">
  <div class="container-container text-center">
    <h2 class="mb-3">Ingin Bangun Relasi Alumni yang Kuat?</h2>
    <p class="mb-4">Hubungi kami untuk demo dan implementasi Treasure Alumni ISEMA</p>
    <button class="btn-cbt  px-4 py-2">Hubungi Kami</button>
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
          title: 'Bank Soal Terstruktur',
          description: 'Dosen dapat mengelola soal berdasarkan kategori, mata kuliah, dan bobot nilai.',
          icon: 'fas fa-layer-group'
        },
        {
          title: 'Randomisasi Soal & Jawaban',
          description: 'Menghindari kecurangan dengan pengacakan otomatis soal dan jawaban.',
          icon: 'fas fa-random'
        },
        {
          title: 'Waktu Otomatis & Countdown',
          description: 'Timer hitung mundur untuk tiap sesi ujian guna memastikan ketertiban.',
          icon: 'fas fa-clock'
        },
        {
          title: 'Multi-Tipe Soal',
          description: 'Mendukung pilihan ganda, esai, dan isian singkat.',
          icon: 'fas fa-tasks'
        },
        {
          title: 'Analisis Hasil Ujian',
          description: 'Laporan nilai dan statistik soal otomatis untuk analisis cepat.',
          icon: 'fas fa-chart-bar'
        },
        {
          title: 'Integrasi dengan SIAKAD',
          description: 'Nilai langsung masuk ke sistem akademik setelah ujian selesai.',
          icon: 'fas fa-link'
        },
      ]
    }
  }
}
</script>
<style scoped>
.cbt-page {
  font-family: 'Poppins', sans-serif;
  color: #343a40;
  background-color: #f8f9fa;
  padding: 50px;
}

/* Hero Section */
.hero-section {
  background: linear-gradient(135deg, #eef4ed, #dce7dc);
  padding: 20px;
}
.hero-title {
  font-size: 2.5rem;
  font-weight: 800;
  margin-bottom: 15px;
}
.hero-title span {
  color: #28a745;
}
.tagline {
  text-transform: uppercase;
  font-size: 0.9rem;
  color: #6c757d;
  font-weight: 600;
}
.hero-subtext {
  font-size: 1.1rem;
  margin-bottom: 20px;
}
.hero-benefits {
  list-style: none;
  padding-left: 0;
}
.hero-benefits li {
  position: relative;
  padding-left: 25px;
  margin-bottom: 10px;
}
.hero-benefits li::before {
  content: '✔';
  color: #28a745;
  font-weight: bold;
  position: absolute;
  left: 0;
}
.btn-cta {
  background-color: rgb(211, 180, 8) ;
  color: white;
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
}
.title-wrapper {
  background-color: #e8f5e9;
}
.why-title {
  font-size: 2.2rem;
  font-weight: 800;
  color: #1b5e20;
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
  color: #388e3c;
}

/* Fitur Section */
/* .fitur-section {
  background-color: #f1fdf4;
} */
.fitur-section h2 {
  font-size: 2rem;
  font-weight: 700;
  color: #1b5e20;
}
.fitur-section .bg-white {
  border-left: 5px solid #28a745;
  transition: transform 0.3s ease;
}
.fitur-section .bg-white:hover {
  transform: translateY(-5px);
}

.cta-cbt-section {
    background: linear-gradient(135deg, #5b7756, #dce7dc);

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
  background-color: rgb(211, 180, 8) ;
  color: #ffffff;
  font-weight: 600;
  border: none;
  border-radius: 8px;
  transition: 0.3s ease;
}

.btn-cbt:hover {
    background-color: #ffffff;
  color: darkorange 
}

@media (max-width: 575.98px) {

  .cbt-page{
    padding: 0px;
  }
}
</style>