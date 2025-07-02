<template>
  <div class="modul-page">
    <!-- Hero Section -->
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
              <!-- <li>Manajemen pembayaran dan tagihan mahasiswa</li> -->
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

    <!-- Fitur Modul Section -->
  <section class="fitur-lms-section py-5">
    <div class="container">
      <h2 class="mb-4 text-center fitur-title">Fitur Modul Repository</h2>
      <div class="row g-4">
        <div class="col-md-3 col-sm-6" v-for="(item, index) in fiturKeuangan" :key="index">
          <div class="fitur-card text-center p-4 h-100">
            <img :src="item.icon" class="fitur-icon mb-3" alt="Icon" />
            <h5 class="fw-bold">{{ item.title }}</h5>
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="why-lms-section">
  <div class="lms-section p-0">
    <div class="row g-0 align-items-center">
      <!-- Kiri: Judul -->
      <div class="col-md-5 bg-light text-dark text-center py-5 px-4 title-wrapper">
        <h2 class="why-title">Why Choose <br> Modul Repository ISEMA?</h2>
      </div>

      <!-- Kanan: Isi -->
      <div class="col-md-7 content-wrapper p-5">
        <!-- <p class="why-desc">
          Modul ISEMA dirancang untuk memudahkan pengelolaan keuangan kampus dan repository dokumen secara efisien dan terdigitalisasi.
        </p> -->
        <p class="why-desc">
          Terintegrasi langsung dengan sistem akademik dan LMS, modul ini membantu pihak kampus dalam mencatat, menyimpan, serta mengakses informasi penting dengan cepat dan aman.
        </p>
        <p class="why-note">
          *Modul ISEMA dapat digunakan oleh staf akademik untuk mendukung transparansi dan efisiensi pengelolaan data.*
        </p>
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
      fiturKeuangan: [
        // { title: 'Tagihan Otomatis', icon: '/assets/tagihan-otomatis-modul.png' },
        // { title: 'Upload Bukti Pembayaran', icon: '/assets/upload-modul.png' },
        // { title: 'Histori Pembayaran Mahasiswa', icon: '/assets/history-modul.png' },
        { title: 'Download Laporan', icon: '/assets/download-laporan-modul.png' },
        // { title: 'Validasi Keuangan', icon: '/assets/validasi-keuangan-modul.png' },
        { title: 'Manajemen Dokumen', icon: '/assets/manajemen-dokumen-modul.png' },
        { title: 'Approval Repository', icon: '/assets/approval-repository-modul.png' },
        { title: 'Filter Berdasarkan Kategori', icon: '/assets/filter-modul.png' }
      ]
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

.why-lms-section {
  background-color: #f8f9fa;
  font-family: 'Poppins', sans-serif;
}

.title-wrapper {
  background-color: #a9a8a8;
}

.why-title {
  font-size: 2.4rem;
  font-weight: 800;
  color: #003049;
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
