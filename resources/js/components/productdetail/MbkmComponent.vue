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

<section class="fitur-mbkm-section py-5">
    <div class="container">
      <h2 class="mb-4 text-center fitur-title">Fitur MBKM ISEMA</h2>
      <div class="row g-4">
        <div class="col-md-3 col-sm-6" 
     v-for="(feature, index) in features" 
     :key="index">
  <div class="fitur-card text-center p-4 h-100"
       @click="showFeature(feature)">
    <i :class="feature.icon" class="mb-3 d-block fa-2x"></i>
    <h5 class="fw-bold">{{ feature.title }}</h5>
    <p class="text-muted mb-2">{{ feature.subDescription }}</p>
  </div>
</div>

      </div>
    </div>
<div class="modal fade" id="featureModal" tabindex="-1" role="dialog" aria-labelledby="featureModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content shadow-lg border-0 rounded-4">
      
      <!-- HEADER -->
      <div class="modal-header text-white border-0 rounded-top-4">
        <h5 class="modal-title fw-bold d-flex align-items-center text-dark" id="featureModalLabel">
          <i :class="selectedFeature.icon + ' me-2 fa-lg'"></i>
          {{ selectedFeature.title }}
        </h5>
        <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <div class="row g-4" v-if="selectedFeature.subfeatures && selectedFeature.subfeatures.length">
          <div 
            class="col-md-4 col-sm-6"
            v-for="(sub, idx) in selectedFeature.subfeatures" 
            :key="idx"
          >
            <div class="fitur-card text-center p-4 h-100">
              <i :class="sub.icon + ' fa-2x mb-3 text-dark'"></i>
              <h5 class="fw-bold">{{ sub.title }}</h5>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
  </section>
<!-- <section class="features-section py-5 bg-light">
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
 -->



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
    <h2 class="mb-3 fw-bold fs-2">Siap Digitalisasi Program MBKM Anda?</h2>
    <p class="mb-4 fs-3">Hubungi tim kami untuk konsultasi dan demo eksklusif MBKM ISEMA</p>
    <button class="btn px-4 py-2">Hubungi Kami</button>
  </div>
</section>

  </div>
</template>

<script>
export default {
  name: 'MBKMComponent',
  data(){
    return{
features: [
  {
    title: 'Lowongan',
    icon: 'fas fa-briefcase', // Ikon lowongan kerja
    subDescription: 'Peluang magang, riset, dan proyek real industri'
  },
  {
    title: 'Jenis Aktivitas',
    icon: 'fas fa-stream', // Ikon jenis/stream
    subDescription: 'Beragam skema MBKM: Magang, Studi Independen, dll'
  },
  {
    title: 'Syarat Unggah Aktivitas Akhir',
    icon: 'fas fa-upload', // Ikon unggah
    subDescription: 'Panduan dan checklist dokumen penyelesaian aktivitas'
  },
  {
    title: 'Perguruan Tinggi Luar',
    icon: 'fas fa-university', // Ikon kampus lain
    subDescription: 'Kolaborasi lintas kampus dan sistem konversi otomatis'
  },
  {
    title: 'Mitra',
    icon: 'fas fa-handshake', // Ikon kerja sama/mitra
    subDescription: 'Daftar mitra aktif dan status kerja sama MBKM',
    subfeatures: [
      { title: 'Daftar Mitra', icon: 'fas fa-university' },
      { title: 'Jenis Mitra', icon: 'fas fa-calendar-alt' },
      { title: 'Jenis Industri', icon: 'fas fa-calendar-alt' },
      { title: 'Ukuran Mitra', icon: 'fas fa-calendar-alt' },
      { title: 'Posisi Pekerjaan', icon: 'fas fa-calendar-alt' },
      { title: 'Posisi Pekerjaan Mitra', icon: 'fas fa-calendar-alt'}
    ]
  },
  {
    title: 'Rekomendasi Mata Kuliah',
    icon: 'fas fa-book-open', // Ikon mata kuliah
    subDescription: 'Daftar mata kuliah pengganti hasil konversi MBKM'
  }
],
selectedFeature: {}
};
},
methods: {
  showFeature(feature) {
    if (feature.subfeatures && feature.subfeatures.length) {
      this.selectedFeature = feature;
      $('#featureModal').modal('show'); // buka modal
    } else {
      console.log("Fitur ini tidak punya cabang.");
      // Bisa juga diarahkan ke halaman lain atau abaikan saja
    }
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
    background: linear-gradient(135deg, #4e727d, #45818c);
  color: #ffd166;
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
  color: #ffd166;

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
    background: linear-gradient(135deg, #4e727d, #45818c);

  color: #ffd166;
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


.fitur-title {
  font-size: 1.8rem;
  font-weight: 700;
  color: #003049;
}

.fitur-card {
  border-radius: 16px;
  background-color: #fafafa;
  border: 1px solid #ddd;
  transition: 0.3s ease;
}

.fitur-card:hover {
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.07);
  transform: translateY(-4px);
}

.fitur-icon {
  width: 48px;
  height: 48px;
}
@media (max-width: 575.98px) {

  .mbkm-page{
    padding: 10px;
  }
}

</style>