<template>
  <div class="reporting-page">
    <section class="hero-section d-flex align-items-center">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 text-left">
            <p class="tagline">Laporan Akademik Modern</p>
            <h1 class="hero-title">
              Reporting ISEMA<br><span>Visualisasi Data Kampus</span>
            </h1>
            <p class="hero-subtext">
              Akses laporan real-time dengan grafik interaktif, rekap nilai, kehadiran, dan performa institusi dalam satu dashboard.
            </p>
            <ul class="hero-benefits">
              <li>Visualisasi Data Akademik & Keuangan</li>
              <li>Rekap Nilai & Kehadiran Otomatis</li>
              <li>Dashboard Interaktif & Dinamis</li>
            </ul>
            <button class="btn btn-cta mt-3">Lihat Demo</button>
          </div>
          <div class="col-lg-6 text-center">
            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEijDQA5zK5_xquT67CNx58a8c7PUdE1hE9226FZQglLLe_Lv3_jgFX37AroQFAfq_n1XKE9KJzCXH5PWqVaXzLZ4Fnxv83ud4ZH9zb7VOBuGQhTmjl5IFOGo9krOTEE77BtU5DA0tKP6Emz/w1200-h630-p-k-no-nu/report+writing.jpg" alt="Dashboard Reporting" class="img-fluid hero-image shadow rounded" />
          </div>
        </div>
      </div>
    </section>

    <section class="why-and-features-section py-5 bg-light">
      <div class="container px-5">
        <div class="row g-4 justify-content-center ">
          <div class="col-lg-6 d-flex">
            <div class="why-container p-4 h-100">
              <div class="text-center">
                <h2 class="why-title">Why Choose Reporting ISEMA?</h2>
                <hr class="hr-border" />
                <p class="why-desc mb-3">
                  Akses laporan real-time dengan grafik interaktif, rekap nilai, kehadiran, dan performa institusi dalam satu dashboard.
                </p>
                <p class="why-desc mb-3">
                  Membuat pengambilan keputusan berbasis data menjadi lebih mudah dan cepat bagi tim kepemimpinan di kampus.
                </p>
                <p class="why-note">
                  <i class="fas fa-chart-line"></i> Data Visualisasi | <i class="fas fa-sync-alt"></i> Laporan Real-Time | <i class="fas fa-database"></i> Integrasi Otomatis
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex">
            <div class="feature-container h-100">
              <div class="feature-head">
                <h2 class="feature-title text-center">Fitur Unggulan Reporting</h2>
                <p class="feature-subtitle">Membantu pengambilan keputusan berbasis data</p>
                <hr class="hr-border" />
                <ul class="features-item">
                  <li v-for="(feature, index) in displayedFeatures" :key="'reporting-' + index">
                    <div class="list-feature d-flex align-items-center">
                      <i :class="['mb-1', 'fa-1x', feature.icon]"></i>
                      <h5 class="mt-1 mb-1">{{ feature.title }}</h5>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="see-more-wrapper text-center">
                <button class="see-more-btn" @click="toggleFeatures">
                  {{ showAllFeatures ? 'See Less' : 'See More' }}
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta-section py-5">
      <div class="container text-center">
        <h2 class="mb-3 fw-bold fs-3">Siap Meningkatkan Efisiensi Pelaporan Kampus?</h2>
        <p class="mb-4 fw-bold fs-5 text-dark">Hubungi kami untuk demo sistem Reporting ISEMA dan lihat bagaimana data bisa menjadi keputusan cerdas.</p>
        <button class="btn px-4 py-2">Hubungi Kami</button>
      </div>
    </section>
  </div>
</template>
<script>
export default {
  name: 'ReportingComponent',
  data() {
    return {
      features: [
        { title: 'Dashboard Statistik', icon: 'fas fa-chart-pie' },
        { title: 'Laporan Akademik', icon: 'fas fa-graduation-cap' },
        { title: 'Laporan Kepemimpinan', icon: 'fas fa-user-tie' },
        { title: 'Ekspor Data', icon: 'fas fa-file-export' },
        { title: 'Notifikasi Otomatis', icon: 'fas fa-bell' },
        { title: 'Sinkronisasi Real-Time', icon: 'fas fa-sync-alt' },
        { title: 'Laporan Keuangan', icon: 'fas fa-chart-bar' },
        { title: 'Analisis Prediktif', icon: 'fas fa-brain' },
        { title: 'Integrasi Sistem', icon: 'fas fa-plug' }
      ],
      showAllFeatures: false,
      visibleFeatures: 6 // Jumlah fitur yang ditampilkan di awal
    };
  },
  computed: {
    displayedFeatures() {
      return this.showAllFeatures ? this.features : this.features.slice(0, this.visibleFeatures);
    }
  },
  methods: {
    toggleFeatures() {
      this.showAllFeatures = !this.showAllFeatures;
    }
  }
};
</script>

<style scoped>
.reporting-page {
  font-family: 'Poppins', sans-serif;
  background-color: #f7f9fc;
  color: #333;
  padding: 50px;
}

.hero-section {
  background-image: url(/assets/reporting-bg.png);
  background-size: cover;
  color: #000000;
  padding: 100px 0;
}

.hero-title {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 15px;
}

.hero-title span {
  color: #8d0202;
}

.hero-benefits {
  list-style: none;
  padding-left: 0;
  margin-top: 15px;
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
  color: #8d0202;
  font-weight: bold;
}

.btn-cta {
  background-color: #8d0202;
  color: #fff;
  padding: 12px 28px;
  border-radius: 8px;
  font-weight: 600;
  border: none;
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
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
  border-color: #8d0202;
  min-height: 490px;
}
.why-title {
  font-size: 2rem;
  font-weight: 800;
  color: #8d0202;
}
.why-desc {
  font-size: 1.1rem;
  color: #333;
  line-height: 1.7;
}
.why-note {
  font-style: italic;
  color: #8d0202;
  font-size: 0.95rem;
  margin-top: 1.5rem;
}
.feature-container {
  background: #fff;
  border: 1px solid #e5e8ec;
  border-radius: 8px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
  border-color: #8d0202;
}
.feature-head {
  padding: 20px;
  text-align: center;
}
.feature-title {
  font-size: 1.5rem;
  font-weight: 600;
  color: #8d0202;
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
  color: #8d0202;
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
  background-color: #8d0202;
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
  background-color: #a30202;
}

/* CTA */
.cta-section {
  background: linear-gradient(45deg, #b5b5b5 0%, #858585 100%);
  color: #8d0202;
  text-align: center;
}
.cta-section .btn {
  background-color: #fff;
  color: #8d0202;
  font-weight: bold;
  border-radius: 8px;
  padding: 12px 30px;
  border: none;
}
@media (max-width: 575.98px) {
  .reporting-page{
    padding: 0px;
  }
}
</style>