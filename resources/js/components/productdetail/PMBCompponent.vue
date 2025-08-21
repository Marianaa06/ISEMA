<template>
  <div class="pmb-page">
    <!-- Hero Section -->
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

    <!-- Fitur Section -->
    <section class="fitur-pmb-section py-5">
      <div class="container">
        <h2 class="mb-4 text-center fitur-title">Fitur Unggulan PMB</h2>
        <div class="row g-4">
          <div class="col-md-3 col-sm-6" v-for="(item, index) in fiturPmb" :key="index">
            <div class="fitur-card text-center p-4 h-100">
              <i :class="item.icon" class="mb-3 d-block fa-2x" alt="Icon" ></i>
              <h5 class="fw-bold">{{ item.title }}</h5>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Choose -->
    <section class="why-pmb-section">
      <div class="row g-0 align-items-center">
        <div class="col-md-5 bg-light text-dark text-center py-5 px-4 title-wrapper">
          <h2 class="why-title">Why Choose <br> PMB ISEMA?</h2>
        </div>
        <div class="col-md-7 content-wrapper p-5">
          <p class="why-desc">
            Sistem PMB ISEMA mendukung alur pendaftaran mahasiswa baru secara digital dan efisien.
          </p>
          <p class="why-desc">
            Dari pengisian formulir hingga cetak kartu ujian, semua terintegrasi dan dipantau real-time oleh admin kampus.
          </p>
          <p class="why-note">
            *PMB ISEMA dapat digunakan oleh calon mahasiswa, admin kampus, hingga tim seleksi akademik.*
          </p>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
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
  {
    title: 'Periode Pendaftaran',
    icon: 'fas fa-calendar-alt' // Ikon jadwal
  },
  {
    title: 'Program Studi',
    icon: 'fas fa-university' // Ikon kampus/prodi
  },
  {
    title: 'Seleksi Pendaftaran',
    icon: 'fas fa-list-check' // Ikon proses seleksi
  },
  {
    title: 'Syarat Seleksi',
    icon: 'fas fa-file-signature' // Ikon syarat dengan tanda tangan
  },
  {
    title: 'Uang Kuliah Tunggal',
    icon: 'fas fa-coins' // Ikon uang koin
  },
  {
    title: 'Pengaturan PMB',
    icon: 'fas fa-sliders-h' // Ikon setting pengaturan horizontal
  },
  {
    title: 'Nilai Seleksi',
    icon: 'fas fa-star-half-alt' // Ikon nilai
  },
  {
    title: 'Syarat Seleksi',
    icon: 'fas fa-file-contract' // Variasi ikon dokumen syarat
  },
  {
    title: 'Pengisian Nilai',
    icon: 'fas fa-pen-nib' // Ikon menulis nilai
  },
  {
    title: 'Kelengkapan Syarat',
    icon: 'fas fa-check-double' // Ikon centang ganda
  },
  {
    title: 'UKT Pendaftar',
    icon: 'fas fa-wallet' // Ikon dompet
  },
  {
    title: 'KIP Kuliah',
    icon: 'fas fa-id-card' // Ikon kartu (untuk beasiswa KIP)
  },
  {
    title: 'Rekomendasi Prodi',
    icon: 'fas fa-thumbs-up' // Ikon rekomendasi
  },
  {
    title: 'Registrasi Ulang',
    icon: 'fas fa-undo' // Ikon ulang/daftar ulang
  },
  {
    title: 'Generate Mahasiswa',
    icon: 'fas fa-user-plus' // Ikon penambahan mahasiswa
  }
]

    }
  }
}
</script>

<style scoped>
.pmb-page {
  font-family: 'Poppins', sans-serif;
  /* background-color: #f8faff; */
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

/* Fitur */
.fitur-title {
  font-size: 2rem;
  font-weight: 700;
  color: #000000;
}
.fitur-card {
  border-radius: 16px;
  background-color: #fff;
  border: 2px solid #075E54;
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

/* Why Section */
.why-pmb-section {
  background-color: #f8f9fa;
}
.title-wrapper {
  background-color: #d4fbe7;
}
.why-title {
  font-size: 2.4rem;
  font-weight: 800;
  color: #075E54;
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
  color: #4f8b67;
  font-size: 0.95rem;
  margin-top: 1.5rem;
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
</style>
