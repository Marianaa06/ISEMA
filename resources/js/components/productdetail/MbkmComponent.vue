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

    <section class="why-and-features-section py-5 bg-light">
      <div class="container px-5">
        <div class="row g-4 justify-content-center">
          <div class="col-lg-6 d-flex">
            <div class="why-container p-4 h-100" style="border-color: #4e727d;">
              <div class="text-center">
                <h2 class="why-title" style="color: #4e727d;">Mengapa Memilih MBKM ISEMA?</h2>
                <hr class="hr-border" />
                <p class="why-desc mb-3">
                  Dirancang untuk memfasilitasi semua skema Kampus Merdeka dengan alur kerja yang efisien.
                </p>
                <p class="why-desc mb-3">
                  Terhubung dengan sistem akademik untuk kelancaran administrasi dan pelaporan kegiatan MBKM.
                </p>
                <p class="why-note">
                  <i class="fas fa-laptop-house"></i> Terintegrasi Sistem Akademik | <i class="fas fa-sync-alt"></i> Akses Fleksibel | <i class="fas fa-award"></i> Konversi Otomatis
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex">
            <div class="feature-container h-100" style="border-color: #4e727d;">
              <div class="feature-head">
                <h2 class="feature-title text-center" style="color: #4e727d;">Fitur MBKM ISEMA</h2>
                <p class="feature-subtitle">Dukung pengembangan karier mahasiswa di luar kampus</p>
                <hr class="hr-border" />
                <ul class="features-item">
                  <li v-for="(feature, index) in displayedFeatures" :key="'mbkm-' + index">
                    <div class="list-feature d-flex align-items-center">
                      <i :class="['mb-1', 'fa-1x', feature.icon]"></i>
                      <h5 class="mt-1 mb-1">{{ feature.title }}</h5>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="see-more-wrapper text-center">
                <button class="see-more-btn" @click="toggleFeatures" style="background-color: #4e727d;">
                  {{ showAllFeatures ? 'See Less' : 'See More' }}
                </button>
              </div>
            </div>
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
  data() {
    return {
      featuresMbkm: [
        { icon: 'fas fa-briefcase', title: 'Lowongan' },
        { icon: 'fas fa-stream', title: 'Jenis Aktivitas' },
        { icon: 'fas fa-upload', title: 'Syarat Unggah Aktivitas Akhir' },
        { icon: 'fas fa-university', title: 'Perguruan Tinggi Luar' },
        { icon: 'fas fa-handshake', title: 'Mitra' },
        { icon: 'fas fa-book-open', title: 'Rekomendasi Mata Kuliah' },
        { icon: 'fas fa-user-check', title: 'Terverifikasi & Terpantau' },
        { icon: 'fas fa-laptop-house', title: 'Belajar Fleksibel' },
        { icon: 'fas fa-award', title: 'Konversi Otomatis' }
      ],
      showAllFeatures: false,
      visibleFeatures: 6 // Jumlah fitur yang ditampilkan di awal
    };
  },
  computed: {
    displayedFeatures() {
      return this.showAllFeatures ? this.featuresMbkm : this.featuresMbkm.slice(0, this.visibleFeatures);
    }
  },
  methods: {
    toggleFeatures() {
      this.showAllFeatures = !this.showAllFeatures;
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
  color: #fff;
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
  color: #fff;
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

/* --- CSS BARU UNTUK WHY & FEATURES --- */
.why-and-features-section {
  background-color: #f8f9fa;
  font-family: 'Poppins', sans-serif;
}

.why-and-features-section .row {
  display: flex;
  align-items: flex-start;
}

.why-container {
  background: #fff;
  border: 1px solid #e5e8ec;
  border-radius: 8px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.05);
  min-height: 490px;
}

.why-title {
  font-size: 2rem;
  font-weight: 800;
  color: #003049;
}

.why-desc {
  font-size: 1.1rem;
  color: #333;
  line-height: 1.7;
}

.why-note {
  font-style: italic;
  color: #006d77;
  font-size: 0.95rem;
  margin-top: 1.5rem;
}

.feature-container {
  background: #fff;
  border: 1px solid #e5e8ec;
  border-radius: 8px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.05);
}

.feature-head {
  padding: 20px;
  text-align: center;
}

.feature-title {
  font-size: 1.5rem;
  font-weight: 600;
  color: inherit;
  margin-bottom: 5px;
}

.feature-subtitle {
  font-size: 0.9rem;
  color: #666;
}

.hr-border {
  border-top: 1px solid #ccc;
  margin: 15px 0;
}

.features-item {
  list-style: none;
  padding: 0;
  margin: 0;
}

.features-item li {
  padding: 10px 20px;
  border-bottom: 1px solid #f0f0f0;
}

.features-item li:last-child {
  border-bottom: none;
}

.features-item .list-feature {
  gap: 15px;
}

.features-item .list-feature i {
  color: #4e727d;
  font-size: 1rem;
  width: 20px;
  text-align: center;
}

.features-item .list-feature h5 {
  font-size: 1rem;
  font-weight: 400;
  color: #333;
  margin: 0;
}

.see-more-wrapper {
  padding: 15px;
}

.see-more-btn {
  background-color: #4e727d;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 0.9rem;
  transition: background-color 0.3s ease;
  width: 100%;
  display: block;
  box-sizing: border-box;
}

.see-more-btn:hover {
  background-color: #5d8c97;
}

/* --- AKHIR CSS BARU --- */

.cta-section {
  background: linear-gradient(135deg, #4e727d, #45818c);
  color: #fff;
  text-align: center;
}
.cta-section .btn {
  background-color: #fff;
  color: #4e727d;
  font-weight: bold;
  border-radius: 8px;
  padding: 12px 30px;
  border: none;
}
</style>