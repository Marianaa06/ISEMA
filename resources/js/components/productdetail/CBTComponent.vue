<template>
  <div class="cbt-page">
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

    <section class="why-and-features-section py-5 bg-light">
      <div class="container px-5">
        <div class="row g-4 justify-content-center align-items-stretch">
          <div class="col-lg-6 d-flex">
            <div class="why-container p-4 h-100">
              <div class="text-center">
                <h2 class="why-title">Why Choose CBT ISEMA?</h2>
                <hr class="hr-border" />
                <p class="why-desc mb-3">
                  CBT ISEMA dirancang untuk mempermudah proses ujian di kampus Anda, mulai dari pembuatan soal hingga penilaian.
                </p>
                <p class="why-note">
                  <i class="fas fa-lock"></i> Ujian Aman | <i class="fas fa-chart-line"></i> Analisis Cepat | <i class="fas fa-cogs"></i> Integrasi Mudah
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex">
            <div class="feature-container h-100">
              <div class="feature-head">
                <h2 class="feature-title text-center">Fitur Unggulan CBT</h2>
                <p class="feature-subtitle">Maksimalkan proses ujian dan penilaian</p>
                <hr class="hr-border" />
                <ul class="features-item">
                  <li v-for="(feature, index) in displayedFeatures" :key="'cbt-' + index">
                    <div class="list-feature d-flex align-items-center">
                      <i :class="['mb-1', 'fa-1x', feature.icon]"></i>
                      <h5 class="mt-1 mb-1">{{ feature.title }}</h5>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta-section py-5">
      <div class="container text-center">
        <h2 class="mb-3 fw-bold fs-2">Siap Tingkatkan Efisiensi Ujian Kampus Anda?</h2>
        <p class="mb-4 fw-bold fs-6">Hubungi tim kami untuk konsultasi dan demo eksklusif CBT ISEMA</p>
        <button class="btn btn-primary px-4 py-2">Hubungi Kami</button>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: "CBTComponent",
  data() {
    return {
      featuresCBT: [
        { icon: "fas fa-tv", title: "Dashboard Ujian" },
        { icon: "fas fa-door-open", title: "Entrance Test" },
        { icon: "fas fa-file-alt", title: "Custom Test" },
      ],
      showAllFeatures: false,
      visibleFeatures: 3 // Menampilkan 3 fitur utama di awal
    };
  },
  computed: {
    displayedFeatures() {
      return this.showAllFeatures ? this.featuresCBT : this.featuresCBT.slice(0, this.visibleFeatures);
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
.cbt-page {
  font-family: 'Poppins', sans-serif;
  background-color: #f7f9fc;
  color: #333;
  padding: 50px;
}

/* Hero Section */
.hero-section {
  background: linear-gradient(135deg, #4e727d, #45818c);
  padding: 100px 0;
  color: #ffffff;
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
  color: #ffffff;
}

.btn-cta {
  background-color: #ffffff;
  color: #45818c;
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
  border-color: #4e727d; /* Menggunakan warna yang sudah ada dari hero */
}
.why-title {
  font-size: 2rem;
  font-weight: 800;
  color: #4e727d; /* Menggunakan warna yang sudah ada dari hero */
}
.why-desc {
  font-size: 1.1rem;
  color: #333;
  line-height: 1.7;
}
.why-note {
  font-style: italic;
  color: #4e727d; /* Menggunakan warna yang sudah ada dari hero */
  font-size: 0.95rem;
  margin-top: 1.5rem;
}
.feature-container {
  background: #fff;
  border: 1px solid #ddd;
  border-radius: 8px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
  border-color: #4e727d; /* Menggunakan warna yang sudah ada dari hero */
}
.feature-head {
  padding: 20px;
  text-align: center;
}
.feature-title {
  font-size: 1.5rem;
  font-weight: 600;
  color: #4e727d; /* Menggunakan warna yang sudah ada dari hero */
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
  color: #4e727d; /* Menggunakan warna yang sudah ada dari hero */
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


/* CTA */
.cta-section {
  background: linear-gradient(135deg, #4e727d, #45818c);
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
  color: #45818c;
  font-weight: bold;
  border-radius: 8px;
  padding: 12px 30px;
  transition: background-color 0.3s ease;
}

.cta-section .btn-primary:hover {
  background-color: #45818c;
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
  .cbt-page {
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