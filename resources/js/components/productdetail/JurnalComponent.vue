<template>
  <div class="jurnal-page">
    <section class="hero-section d-flex align-items-center">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 text-left">
            <p class="tagline">Publikasi Ilmiah Digital</p>
            <h1 class="hero-title">
              Jurnal Online<br><span>untuk Dosen & Mahasiswa</span>
            </h1>
            <p class="hero-subtext">
              Platform manajemen jurnal ilmiah yang terintegrasi, efisien, dan mudah digunakan untuk publikasi ilmiah di kampus Anda.
            </p>
            <ul class="hero-benefits">
              <li>Submit artikel secara online</li>
              <li>Proses peer-review terstruktur</li>
              <li>Integrasi OJS & DOI</li>
            </ul>
            <button class="btn btn-cta mt-3">Hubungi Kami</button>
          </div>
          <div class="col-lg-6 text-center">
            <img src="https://detakpublisher.com/wp-content/uploads/2025/05/Ketahui-Cara-Mengakses-Junal-Ilmiah-Dengan-Mudah_20250521_102435_0001.png" alt="Jurnal Ilmiah" class="img-fluid hero-image shadow rounded">
          </div>
        </div>
      </div>
    </section>

    <section class="why-and-features-section py-5 bg-light">
      <div class="container px-5">
        <div class="row g-4 justify-content-center align-items-stretch">
          <div class="col-lg-6 d-flex">
            <div class="why-container p-4 h-100">
              <div class="text-center">
                <h2 class="why-title">Why Choose Jurnal ISEMA?</h2>
                <hr class="hr-border" />
                <p class="why-desc mb-3">
                  Jurnal ISEMA menyediakan solusi komprehensif untuk mengelola publikasi ilmiah, dari submisi hingga penerbitan.
                </p>
                <p class="why-desc mb-3">
                  Mendukung peningkatan kualitas dan visibilitas penelitian di kampus Anda dengan fitur-fitur terdepan.
                </p>
                <p class="why-note">
                  <i class="fas fa-file-upload"></i> Submisi Mudah | <i class="fas fa-check-double"></i> Review Efisien | <i class="fas fa-globe"></i> Akses Global
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex">
            <div class="feature-container h-100">
              <div class="feature-head">
                <h2 class="feature-title text-center">Fitur Unggulan Jurnal ISEMA</h2>
                <p class="feature-subtitle">Publikasikan karya ilmiah Anda dengan mudah</p>
                <hr class="hr-border" />
                <ul class="features-item">
                  <li v-for="(feature, index) in displayedFeatures" :key="'jurnal-' + index">
                    <div class="list-feature d-flex align-items-center">
                      <i :class="['mb-1', 'fa-1x', feature.icon]"></i>
                      <h5 class="mt-1 mb-1">{{ feature.title }}</h5>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="see-more-wrapper text-center" v-if="featuresJurnal.length > visibleFeatures">
                <button class="see-more-btn" @click="toggleFeatures">
                  {{ showAllFeatures ? 'Sembunyikan' : 'Lihat Selengkapnya' }}
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta-section py-5">
      <div class="container text-center">
        <h2 class="mb-3 fw-bold fs-2">Publikasikan Karya Ilmiah Anda dengan Mudah</h2>
        <p class="mb-4 fw-bold fs-6">Jurnal Digital ISEMA mendukung visibilitas dan kredibilitas akademik institusi Anda.</p>
        <button class="btn btn-primary px-4 py-2">Hubungi Kami</button>
      </div>
    </section>
  </div>
</template>
<script>
export default {
  name: "JurnalComponent",
  data() {
    return {
      featuresJurnal: [
        { icon: "fas fa-upload", title: "Submission Online" },
        { icon: "fas fa-comments", title: "Peer Review Terstruktur" },
        { icon: "fas fa-link", title: "Integrasi DOI & OJS" },
        { icon: "fas fa-database", title: "Manajemen Artikel Terpusat" },
        { icon: "fas fa-chart-line", title: "Statistik & Pelaporan Jurnal" },
        { icon: "fas fa-globe", title: "Akses Global & Indeksasi" }
      ],
      showAllFeatures: false,
      visibleFeatures: 6 // Menampilkan 3 fitur utama di awal
    };
  },
  computed: {
    displayedFeatures() {
      return this.showAllFeatures ? this.featuresJurnal : this.featuresJurnal.slice(0, this.visibleFeatures);
    }
  },
  methods: {
    toggleFeatures() {
      this.showAllFeatures = !this.showAllFeatures;
    }
  },
};
</script>
<style scoped>
.jurnal-page {
  font-family: 'Poppins', sans-serif;
  background-color: #f7f9fc;
  color: #333;
  padding: 80px;
}

/* Hero Section */
.hero-section {
  background-image: url(/assets/bg-jurnall.png);
  background-size: cover;
  padding: 100px 0;
  color: rgb(0, 0, 0);
}

.hero-title {
  font-size: 2.8rem;
  font-weight: 700;
}

.hero-benefits {
  list-style: none;
  padding-left: 0;
}

.hero-benefits li {
  padding-left: 25px;
  position: relative;
  margin-bottom: 10px;
}

.hero-benefits li::before {
  content: "✔";
  position: absolute;
  left: 0;
  color: #fcbf49; /* Warna kuning dari hero asli */
}

.btn-cta {
  background-color: #6b0000;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-weight: bold;
  border-radius: 6px;
}

/* --- CSS BARU UNTUK WHY & FEATURES --- */
.why-and-features-section {
  background-color: #f8f9fa;
  font-family: 'Poppins', sans-serif;
}
.why-and-features-section .row {
  display: flex;
  align-items: stretch;
}
.why-container {
  background: #fff;
  border: 1px solid #ddd;
  border-radius: 8px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
  border-color: #6b0000; /* Warna merah dari hero asli */
}
.why-title {
  font-size: 2rem;
  font-weight: 800;
  color: #6b0000; /* Warna merah dari hero asli */
}
.why-desc {
  font-size: 1.1rem;
  color: #333;
  line-height: 1.7;
}
.why-note {
  font-style: italic;
  color: #6b0000; /* Warna merah dari hero asli */
  font-size: 0.95rem;
  margin-top: 1.5rem;
}
.feature-container {
  background: #fff;
  border: 1px solid #ddd;
  border-radius: 8px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
  border-color: #6b0000; /* Warna merah dari hero asli */
}
.feature-head {
  padding: 20px;
  text-align: center;
}
.feature-title {
  font-size: 1.5rem;
  font-weight: 600;
  color: #6b0000; /* Warna merah dari hero asli */
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
  color: #6b0000; /* Warna merah dari hero asli */
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
  background-color: #6b0000; /* Warna merah dari hero asli */
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
  background-color: #8e1c1c; /* Warna hover yang sedikit lebih gelap */
}

/* CTA */
.cta-section {
  background: linear-gradient(90deg, #6b0000, #8e1c1c);
  color: #fff;
  padding: 60px 0;
}

.container-cta {
  max-width: 800px;
  margin: 0 auto;
}

.cta-text {
  color: #fff;
  font-family: 'Poppins', sans-serif;
}

.cta-section .btn-primary {
  background-color: #ffffff;
  border: none;
  color: #6b0000;
  font-weight: bold;
  border-radius: 8px;
  padding: 12px 30px;
  transition: background-color 0.3s ease;
}

.cta-section .btn-primary:hover {
  background-color: #e6a828;
  color: #fff;
}

/* Responsive CSS */
@media (max-width: 768px) {
  .hero-section {
    padding: 60px 0;
  }
  
  .hero-title {
    font-size: 2rem;
  }

  .features-list {
    grid-template-columns: 1fr;
  }

  .feature-list-container {
    padding: 1rem;
  }
}

@media (max-width: 576px) {
  .jurnal-page {
    padding: 0;
  }
  .hero-title {
    font-size: 1.8rem;
  }

  .cta-text {
    font-size: 1.5rem !important;
  }

  .cta-section .btn-primary {
    padding: 8px 20px;
  }
}
</style>