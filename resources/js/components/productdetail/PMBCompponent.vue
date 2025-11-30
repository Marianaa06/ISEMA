<template>
  <div class="pmb-page">
    <section class="hero-section d-flex align-items-center">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 text-left">
            <p class="tagline">Proses Penerimaan Lebih Mudah</p>
            <h1 class="hero-title">
              PMB ISEMA<br><span>Digital dan Terintegrasi</span>
            </h1>
            <p class="hero-subtext">
              Kelola seluruh alur penerimaan mahasiswa baru, dari pendaftaran hingga pengumuman hasil seleksi, dalam satu platform.
            </p>
            <ul class="hero-benefits">
              <li>Pendaftaran Online & Validasi Data</li>
              <li>Seleksi Ujian Digital & Rekomendasi Otomatis</li>
              <li>Dashboard Monitoring Proses PMB</li>
            </ul>
            <button class="btn btn-cta mt-3">Hubungi Kami</button>
          </div>
          <div class="col-lg-6 text-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/74/Belajar_Bersama.jpg" alt="Ilustrasi PMB" class="img-fluid hero-image shadow rounded">
          </div>
        </div>
      </div>
    </section>

    <section class="why-and-features-section py-5 bg-light">
      <div class="container px-5">
        <div class="row g-4 justify-content-center ">
          <div class="col-lg-6 d-flex">
            <div class="why-container p-4 h-100" style="border-color: #075E54;">
              <div class="text-center">
                <h2 class="why-title" style="color: #075E54;">Why Choose PMB ISEMA?</h2>
                <hr class="hr-border" />
                <p class="why-desc mb-3">
                  Sistem PMB ISEMA mendukung alur pendaftaran mahasiswa baru secara digital dan efisien.
                </p>
                <p class="why-desc mb-3">
                  Dari pengisian formulir hingga cetak kartu ujian, semua terintegrasi dan dipantau real-time oleh admin kampus.
                </p>
                <p class="why-note">
                  *PMB ISEMA dapat digunakan oleh calon mahasiswa, admin kampus, hingga tim seleksi akademik.*
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex">
            <div class="feature-container h-100" style="border-color: #075E54;">
              <div class="feature-head">
                <h2 class="feature-title text-center" style="color: #075E54;">Fitur Unggulan PMB</h2>
                <p class="feature-subtitle">Kelola seluruh alur penerimaan dengan mudah</p>
                <hr class="hr-border" />
                <ul class="features-item">
                  <li v-for="(feature, index) in displayedFeatures" :key="'pmb-' + index">
                    <div class="list-feature d-flex align-items-center">
                      <i :class="['mb-1', 'fa-1x', feature.icon]"></i>
                      <h5 class="mt-1 mb-1">{{ feature.title }}</h5>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="see-more-wrapper text-center">
                <button class="see-more-btn" @click="toggleFeatures" style="background-color: #075E54;">
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
        <h2 class="mb-3 fw-bold fs-3">Siap Menyambut Mahasiswa Baru dengan Sistem Digital?</h2>
        <p class="mb-4 fw-bold fs-5">Hubungi kami untuk demo dan aktivasi PMB ISEMA</p>
        <button class="btn btn-primary px-4 py-2">Hubungi Kami</button>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: 'PmbComponent',
  data() {
    return {
      fiturPmb: [
        { title: 'Periode Pendaftaran', icon: 'fas fa-calendar-alt' },
        { title: 'Program Studi', icon: 'fas fa-university' },
        { title: 'Seleksi Pendaftaran', icon: 'fas fa-list-check' },
        { title: 'Syarat Seleksi', icon: 'fas fa-file-signature' },
        { title: 'Uang Kuliah Tunggal', icon: 'fas fa-coins' },
        { title: 'Pengaturan PMB', icon: 'fas fa-sliders-h' },
        { title: 'Nilai Seleksi', icon: 'fas fa-star-half-alt' },
        { title: 'Syarat Seleksi', icon: 'fas fa-file-contract' },
        { title: 'Pengisian Nilai', icon: 'fas fa-pen-nib' },
        { title: 'Kelengkapan Syarat', icon: 'fas fa-check-double' },
        { title: 'UKT Pendaftar', icon: 'fas fa-wallet' },
        { title: 'KIP Kuliah', icon: 'fas fa-id-card' },
        { title: 'Rekomendasi Prodi', icon: 'fas fa-thumbs-up' },
        { title: 'Registrasi Ulang', icon: 'fas fa-undo' },
        { title: 'Generate Mahasiswa', icon: 'fas fa-user-plus' }
      ],
      showAllFeatures: false,
      visibleFeatures: 6 // Jumlah fitur yang ditampilkan di awal
    };
  },
  computed: {
    displayedFeatures() {
      return this.showAllFeatures ? this.fiturPmb : this.fiturPmb.slice(0, this.visibleFeatures);
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
.pmb-page {
  font-family: 'Poppins', sans-serif;
  background-color: #f8faff;
  padding: 50px;
}

/* Hero */
.hero-section {
  background: linear-gradient(135deg, #075E54, #25D366);
  color: #fff;
  padding: 100px 0;
}
.hero-title {
  font-size: 2.8rem;
  font-weight: 700;
}
.hero-title span {
  color: #eafaf1;
}
.tagline {
  font-size: 0.9rem;
  text-transform: uppercase;
}
.hero-benefits {
  list-style: none;
  padding: 0;
}
.hero-benefits li {
  position: relative;
  padding-left: 25px;
  margin-bottom: 10px;
}
.hero-benefits li::before {
  content: '✔';
  position: absolute;
  left: 0;
  color: #c8f8dd;
}
.btn-cta {
  background-color: #c8f8dd;
  border: none;
  padding: 10px 20px;
  color: #075E54;
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
  align-items: flex-start;
}
.why-container {
  background: #fff;
  border: 1px solid #e5e8ec;
  border-radius: 8px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
  min-height: 490px;
}
.why-title {
  font-size: 2rem;
  font-weight: 800;
  color: #075E54;
}
.why-desc {
  font-size: 1.1rem;
  color: #333;
  line-height: 1.7;
}
.why-note {
  font-style: italic;
  color: #4f8b67;
  font-size: 0.95rem;
  margin-top: 1.5rem;
}
.feature-container {
  background: #fff;
  border: 1px solid #e5e8ec;
  border-radius: 8px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
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
  color: #075E54;
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
  background-color: #075E54;
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
  background-color: #0a7366;
}

/* CTA */
.cta-section {
  background-color: #075E54;
  color: #fff;
}
.cta-section .btn {
  background-color: #c8f8dd;
  color: #075E54;
  font-weight: bold;
  border: none;
  border-radius: 8px;
  padding: 12px 30px;
}

.cta-section .btn-primary:hover{
  background-color: #4f8b67;
}
</style>