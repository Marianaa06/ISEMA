<template>
  <div class="mbkm-page">
    <section class="hero-section d-flex align-items-center">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 text-left">
            <p class="tagline">Program Inovatif Kampus Merdeka</p>
            <h1 class="hero-title">
              MBKM ISEMA<br><span>Dukungan Penuh untuk Mahasiswa Berprestasi</span>
            </h1>
            <p class="hero-subtext">
              Kelola program magang, pertukaran pelajar, studi independen, dan banyak lagi dalam satu platform.
            </p>
            <ul class="hero-benefits">
              <li>Dashboard Mahasiswa dan Dosen Pembimbing</li>
              <li>Pendaftaran Kegiatan MBKM Otomatis</li>
              <li>Rekap Penilaian dan Laporan Kegiatan</li>
            </ul>
            <button class="btn btn-cta mt-3">Hubungi Kami</button>
          </div>
          <div class="col-lg-6 text-center">
            <img src="https://cdn0-production-images-kly.akamaized.net/8Vjr9BHJGdKwEYeg7b9bj-eFHDw=/1200x1200/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3584814/original/078204300_1632740776-PHOTO-2021-09-09-14-25-13.jpg" alt="Ilustrasi MBKM" class="img-fluid hero-image shadow rounded" />
          </div>
        </div>
      </div>
    </section>


<section class="why-mbkm-section">
  <div class="row g-0 align-items-center">
    <div class="col-md-5 bg-light text-dark text-center py-5 px-4 title-wrapper">
      <h2 class="why-title">MBKM ISEMA<br> Siap Mendukung Mobilitas Mahasiswa</h2>
    </div>
    <div class="col-md-7 content-wrapper p-5">
      <p class="why-desc">
        Dirancang untuk memfasilitasi semua skema Kampus Merdeka dengan alur kerja yang efisien.
      </p>
      <p class="why-desc">
        Terhubung dengan sistem akademik untuk kelancaran administrasi dan pelaporan kegiatan MBKM.
      </p>
      <p class="why-note">
        💻 Terintegrasi Sistem Akademik | 📱 Akses Fleksibel | 🔐 Proteksi Data Mahasiswa
      </p>
    </div>
  </div>
</section>


<section class="features-section py-5 bg-light">
  <div class="container">
    <div class="row mb-5 text-center">
      <div class="col">
        <h2 class="section-title">Fitur Unggulan</h2>
        <p class="section-subtitle">Satu sistem untuk semua kebutuhan akademik Anda</p>
      </div>
    </div>

    <div class="row gx-4 gy-4 justify-content-center">
      <div class="col-sm-6 col-md-4 col-lg-4" v-for="(feature, index) in features" :key="index">
        <div class="feature-card h-100">
          <div class="feature-card-header">
            <img v-if="feature.headerImage" :src="feature.headerImage" class="card-header-bg-image" alt="Card Header Background">
          </div>
          <div class="feature-card-content p-3 text-center">
            <h5 class="font-weight-bold mt-2 mb-2">{{ feature.title }}</h5>
            <p class="text-muted mb-2">{{ feature.description }}</p>
            <p class="metadata mb-1">
              <i class="fas fa-bolt me-2 text-warning"></i> {{ feature.metadata }}
            </p>
            <p class="sub-description">
              <i class="fas fa-check-circle me-2 text-success"></i> {{ feature.subDescription }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<section class="mbkm-advantages-section container-fluid py-5">
  <div class="text-center mb-5">
    <h2 class="fw-bold display-5">Mengapa Memilih MBKM ISEMA?</h2>
    <p class="lead">Dukung pengembangan karier dan kompetensi mahasiswa di luar kampus</p>
  </div>

  <div class="row text-center justify-content-center gy-4">
    <div class="col-md-4 col-sm-12">
      <div class="mbkm-feature-item">
        <i class="fas fa-user-check mb-3"></i>
        <h5 class="fw-semibold">Terverifikasi dan Terpantau</h5>
        <p>Kegiatan MBKM mahasiswa terpantau langsung oleh dosen pembimbing dan mitra melalui sistem.</p>
      </div>
    </div>

    <div class="col-md-4 col-sm-12">
      <div class="mbkm-feature-item">
        <i class="fas fa-laptop-house mb-3"></i>
        <h5 class="fw-semibold">Belajar Fleksibel</h5>
        <p>Mahasiswa bebas belajar dan mengabdi di luar kampus tanpa kehilangan hak akademik di kampus.</p>
      </div>
    </div>

    <div class="col-md-4 col-sm-12">
      <div class="mbkm-feature-item">
        <i class="fas fa-award mb-3"></i>
        <h5 class="fw-semibold">Konversi Otomatis</h5>
        <p>Setiap kegiatan terkonversi langsung ke SKS, nilai, dan dokumentasi resmi akademik.</p>
      </div>
    </div>
  </div>
</section>
<section class="cta-section py-5">
  <div class="container-container text-center">
    <h2 class="mb-3">Siap Digitalisasi Program MBKM Anda?</h2>
    <p class="mb-4">Hubungi tim kami untuk konsultasi dan demo eksklusif MBKM ISEMA</p>
    <button class="btn btn-primary px-4 py-2">Hubungi Kami</button>
  </div>
</section>

  </div>
</template>

<script>
export default {
  name: 'LmsComponent',
  data(){
    return{
features: [
  {
    title: 'Manajemen Program',
    description: 'Kelola program Kampus Merdeka seperti Magang, Studi Independen, dan Pertukaran Mahasiswa secara terpusat.',
    headerImage: '/assets/manajemen-materi-lms.png',
    metadata: 'Terstruktur & Terintegrasi',
    subDescription: 'Pengelolaan Semua Skema MBKM'
  },
  {
    title: 'Monitoring Kegiatan',
    description: 'Pantau progres mahasiswa secara berkala, termasuk logbook, presensi, dan laporan mingguan.',
    headerImage: '/assets/kuis-lms.png',
    metadata: 'Akurat & Transparan',
    subDescription: 'Pelaporan Otomatis & Dashboard Pemantauan'
  },
  {
    title: 'Kolaborasi Mitra',
    description: 'Fasilitasi komunikasi dan pelaporan antara pihak kampus, mahasiswa, dan mitra eksternal.',
    headerImage: '/assets/forum-diskusi-lms.png',
    metadata: 'Terbuka & Kolaboratif',
    subDescription: 'Integrasi Dosen, Mahasiswa, dan Industri'
  },
  {
    title: 'Validasi & Persetujuan',
    description: 'Permudah proses validasi proposal, persetujuan aktivitas, dan pengunggahan bukti kinerja.',
    headerImage: '/assets/absensi-lms.png',
    metadata: 'Cepat & Efisien',
    subDescription: 'Sirkulasi Dokumen Digital'
  },
  {
    title: 'Notifikasi Kegiatan',
    description: 'Berikan informasi tepat waktu tentang deadline, pengumuman, dan perubahan jadwal.',
    headerImage: '/assets/pengumuman-kelas-lms.png',
    metadata: 'Notifikasi Langsung',
    subDescription: 'Sistem Pemberitahuan Terpusat'
  },
  {
    title: 'Akses Fleksibel',
    description: 'Sistem MBKM dapat digunakan dari berbagai perangkat kapan saja dan di mana saja.',
    headerImage: '/assets/akses-multi-lms.png',
    metadata: 'Multi-Platform',
    subDescription: 'Laptop, Tablet, & Ponsel Cerdas'
  },
]


  }

}
}


</script>
<style scoped>

.mbkm-page {
  font-family: 'Poppins', sans-serif;
  background-color: #f8faff;
color: #16092e;
padding: 50px;

}

/* Hero Section */
.hero-section {
  /* background: linear-gradient(135deg, #006d77, #83c5be); */
  color: #16092e;
  padding: 100px 0;
}

.hero-title {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 15px;
}

.hero-title span {
  color: #ffd166;
}

.tagline {
  font-size: 1rem;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.hero-subtext {
  font-size: 1.1rem;
  margin-bottom: 20px;
}

.hero-benefits {
  list-style: none;
  padding-left: 0;
  color: #16092e;

}

.hero-benefits li {
  margin-bottom: 10px;
  padding-left: 25px;
  position: relative;
}

.hero-benefits li::before {
  content: '✔';
  position: absolute;
  left: 0;
  color: #ffd166;
  font-weight: bold;
}

.btn-cta {
  background-color: #ffd166;
  color: #333;
  padding: 10px 24px;
  border: none;
  font-weight: bold;
  border-radius: 8px;
}

/* Gambar Hero */
.hero-image {
  max-width: 100%;
  height: auto;
  border-radius: 10px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

/* Why MBKM Section */
.why-mbkm-section { 
  /* background-color: #f1f1f1; */
  font-family: 'Poppins', sans-serif;
}

.title-wrapper {
  background-color: #caf0f8;
}

.why-title {
  font-size: 2.4rem;
  font-weight: 800;
  color: #023047;
}

.content-wrapper {
  background-color: #ffffff; 
  font-size: 1.1rem;
  color: #333;
  line-height: 1.7;
  box-shadow: inset 0 0 30px rgba(0, 0, 0, 0.05);
 }

.why-desc {
  margin-bottom: 1rem;
}

.why-note {
  font-style: italic;
  color: #006d77;
  font-size: 0.95rem;
  margin-top: 1.5rem;
} 

.mbkm-advantages-section {
  background-color: #fafafa;
  color: #002b36;
  font-family: 'Poppins', sans-serif;
}

.features-section {
  font-family: 'Montserrat', 'Poppins', sans-serif;
  background-color: #ededed !important;
}

.section-title{
  font-size: 40px;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;
}
.section-subtitle{
  font-size: 20px;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;
}
.feature-card {
  background-color: whitesmoke;
  border-radius: 15px !important;
  /* box-shadow: 0 5px 20px rgba(0,0,0,0.08); */
  border: 1px solid rgb(185, 185, 185);
  overflow: hidden;
  width: 280px;
  color: rgb(81, 81, 81);
  height: 350px !important;
  
}
.feature-card-header {
  height: 150px;
  position: relative;
}
.card-header-bg-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  filter: brightness(0.9);
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 15px;
  padding: 10px;
}
.card-header-tag {
  position: relative;
  z-index: 1;
  background-color: rgba(255,255,255,0.25);
  color: #fff;
  border-radius: 5px;
  font-size: 0.85em;
  font-weight: 600;
}

.feature-card-content h5 {
  font-weight: bold;
  font-size: 1.2em;
}
.feature-card-content p {
  font-size: 0.95em;
  color: #003049;

}
.metadata, .sub-description {
  font-size: 0.9rem;
  color: #ccc;
  display: flex;
  align-items: center;
}

.metadata i,
.sub-description i {
  margin-right: 8px;
}


.cta-section {
  background: linear-gradient(45deg, #c0d4ce 0%, #7a8e86 100%);
  color: #fff;
  text-align: center;
}
.cta-section .btn {
  background-color: #fff;
  color: #E95420;
  font-weight: bold;
  border-radius: 8px;
  padding: 12px 30px;
  border: none;
}

@media (max-width: 575.98px) {

  .mbkm-page{
    padding: 0px;
  }
}

</style>