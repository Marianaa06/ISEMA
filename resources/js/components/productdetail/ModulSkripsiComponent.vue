<template>
  <div class="modul-page">
    <section class="hero-section d-flex align-items-center">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 text-left">
            <p class="tagline">Solusi Terpadu Modul Kampus</p>
            <h1 class="hero-title">
              Modul Repository Digital
            </h1>
            <p class="hero-subtext">
              Atur pengelolaan dokumen akademik dengan sistem modern yang terintegrasi.
            </p>
            <ul class="hero-benefits">
              <li>Repository dokumen: skripsi, jurnal, dan arsip</li>
              <li>Dashboard real-time</li>
            </ul>
            <button class="btn btn-cta mt-3">Jadwalkan Demo</button>
          </div>
          <div class="col-lg-6 text-center">
            <img src="/assets/modul.png" alt="Ilustrasi Modul Keuangan" class="img-fluid hero-image shadow rounded">
          </div>
        </div>
      </div>
    </section>

    <section class="why-and-features-section py-5 bg-light">
      <div class="container px-5">
        <div class="row g-4 justify-content-center ">
          <div class="col-lg-6 d-flex">
            <div class="why-container p-4 h-100" style="border-color: #365486;">
              <div class="text-center">
                <h2 class="why-title" style="color: #365486;">Why Choose Modul Repository ISEMA?</h2>
                <hr class="hr-border" />
                <p class="why-desc mb-3">
                  Modul ISEMA dirancang untuk memudahkan pengelolaan dokumen akademik secara efisien dan terdigitalisasi.
                </p>
                <p class="why-desc mb-3">
                  Terintegrasi langsung dengan sistem akademik dan LMS, modul ini membantu pihak kampus dalam mencatat, menyimpan, serta mengakses informasi penting dengan cepat dan aman.
                </p>
                <p class="why-note">
                  *Modul ISEMA dapat mendukung transparansi dan efisiensi pengelolaan data.*
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex">
            <div class="feature-container h-100" style="border-color: #365486;">
              <div class="feature-head">
                <h2 class="feature text-center" style="color: #365486;">Fitur Modul Repository</h2>
                <p>Semua fitur yang Anda butuhkan untuk manajemen dokumen yang efektif</p>
                <hr class="hr-border" />
                <ul class="features-item">
                  <li v-for="(feature, index) in displayedFeatures" :key="'repo-' + index">
                    <div class="list-feature d-flex align-items-center">
                      <i :class="['mb-1', 'fa-1x', feature.icon]"></i>
                      <h5 class="mt-1 mb-1">{{ feature.title }}</h5>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="see-more-wrapper text-center">
                <button class="see-more-btn" @click="toggleFeatures" style="background-color: #365486;">
                  {{ showAllFeatures ? 'See Less' : 'See More' }}
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="combined-sections container-fluid p-0">
      <div class="row g-0 justify-content-center align-items-center min-vh-50">
        <div class="col-lg-6 contact-section text-center">
          <div class="contact-content">
            <h2 class="contact-title">Tertarik dengan Sistem Kami?</h2>
            <p class="contact-subtitle">Kami siap membantu Anda memulai!</p>
            <button class="btn-contact-us">Hubungi Kami</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: 'ModulComponent',
  data() {
    return {
      featuresRepository: [
        { icon: 'fas fa-download', title: 'Download Laporan' },
        { icon: 'fas fa-folder-open', title: 'Manajemen Dokumen' },
        { icon: 'fas fa-check-square', title: 'Approval Repository' },
        { icon: 'fas fa-filter', title: 'Filter Berdasarkan Kategori' },
        { icon: 'fas fa-search', title: 'Pencarian Cepat' },
        { icon: 'fas fa-shield-alt', title: 'Keamanan Data' },
        { icon: 'fas fa-file-upload', title: 'Upload Dokumen Massal' },
        { icon: 'fas fa-file-alt', title: 'Versi Dokumen' }
      ],
      showAllFeatures: false,
      visibleFeatures: 6 // Jumlah fitur yang ditampilkan di awal
    };
  },
  computed: {
    displayedFeatures() {
      return this.showAllFeatures ? this.featuresRepository : this.featuresRepository.slice(0, this.visibleFeatures);
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
.modul-page {
  font-family: 'Poppins', sans-serif;
  background-color: #f8faff;
  padding: 50px;
}

.hero-section {
  background: linear-gradient(135deg, #365486, #29374A);
  color: #fff;
  padding: 100px 0;
}

.hero-title {
  font-size: 2.5rem;
  font-weight: 700;
}

.hero-title span {
  color: #FFD54F;
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
  color: #FFD54F;
}

.btn-cta {
  background-color: #FFD54F;
  border: none;
  padding: 10px 20px;
  color: #333;
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
  box-shadow: 0 2px 6px rgba(0,0,0,0.05);
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

.feature-head h2.feature {
  font-size: 1.5rem;
  font-weight: 600;
  color: inherit;
  margin-bottom: 5px;
}

.feature-head p {
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
  color: #365486;
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
  background-color: #365486;
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
  background-color: #4b6a9e;
}

.text-tittle{
  width: 100%;
  font-size: 1.5rem;
  font-weight: 800;
  color: #003049;
  font-family: 'Poppins', sans-serif;

}


.lms-benefit-section {
  background-color: #f8f9fa;
  padding: 80px 0;
}

.text-tittle {
  font-size: 2rem;
  color: #003049;
  font-weight: 600;
}

.lms-benefit-section .rounded {
  border: 2px solid #dee2e6;
  transition: 0.3s ease;
}

.lms-benefit-section .rounded:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  border-color: #F9A825;
}

.lms-benefit-section i {
  color: #003049;
}

.combined-sections {
  background: linear-gradient(135deg,#29374A, #365486);
  padding: 60px 0;
}

.contact-section {
  padding: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.contact-content {
  max-width: 600px;
}

.contact-title {
  font-size: 2rem;
  font-weight: 700;
  color: whitesmoke;
  margin-bottom: 20px;
}

.contact-subtitle {
  font-size: 1.1rem;
  color: whitesmoke;
  margin-bottom: 30px;
}

.btn-contact-us {
  background-color: #E95420;
  color: #fff;
  padding: 12px 30px;
  font-weight: 600;
  border-radius: 8px;
  border: none;
  transition: 0.3s ease;
}

.btn-contact-us:hover {
  background-color: #c74319;
}

.mbkm-features-section .section-title {
  font-size: 2rem;
  font-weight: 700;
  color: #023516;
}

.mbkm-features-section .section-subtitle {
  font-size: 1.1rem;
  color: #555;
}

.feature-box i {
  color: #2a7b55;
}

.feature-box {
  border: 1px solid #eee;
  transition: transform 0.3s ease;
}

.feature-box:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}
@media (max-width: 575.98px) {

  .modul-page{
    padding: 0px;
  }
}
</style>
