<template>
  <div class="jurnal-page">
    <!-- Hero Section -->
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

    <!-- Fitur Unggulan -->
    <section class="fitur-jurnal py-5 bg-light">
      <div class="container-container">
        <h2 class="text-center mb-4 fw-bold fs-2">Fitur Unggulan Jurnal ISEMA</h2>
        <div class="row">
          <div class="col-md-4 mb-4" v-for="(fitur, index) in features" :key="index">
            <div class="card h-100 shadow-sm">
              <div class="card-body">
                <i :class="fitur.icon" class="mb-3 d-block fa-2x"></i>
                <h5 class="card-title">{{ fitur.title }}</h5>
                <p class="card-text">{{ fitur.desc }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="cta-section py-5">
      <div class="container-cta text-center">
        <h2 class="cta-text mb-3 fw-bold fs-2">Publikasikan Karya Ilmiah Anda dengan Mudah</h2>
        <p class="cta-text mb-4 fw-bold fs-6">Jurnal Digital ISEMA mendukung visibilitas dan kredibilitas akademik institusi Anda.</p>
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
      features: [
        {
          icon: "fas fa-upload",
          title: "Submission Online",
          desc: "Proses submit artikel secara daring oleh dosen maupun mahasiswa.",
        },
        {
          icon: "fas fa-comments",
          title: "Peer Review Otomatis",
          desc: "Sistem mendukung proses review double-blind oleh mitra bebestari.",
        },
        {
          icon: "fas fa-link",
          title: "Integrasi DOI",
          desc: "Artikel yang dipublikasikan dapat memiliki DOI dan indeksasi.",
        },
        {
          icon: "fas fa-database",
          title: "Manajemen Terpusat",
          desc: "Semua jurnal kampus dikelola dalam satu dashboard terintegrasi.",
        },
        {
          icon: "fas fa-chart-line",
          title: "Statistik & Pelaporan",
          desc: "Lacak statistik artikel terpopuler, reviewer aktif, dan lainnya.",
        },
        {
          icon: "fas fa-globe",
          title: "Tampilan Multibahasa",
          desc: "Dukung publikasi berbahasa Inggris, Arab, dan Indonesia.",
        },
      ],
    };
  },
};
</script>

<style scoped>
.jurnal-page {
  padding: 50px;
}

.jurnal-page .hero-title {
  font-size: 2.8rem;
  font-weight: 700;

}

.jurnal-page .hero-benefits {
  list-style: none;
  padding-left: 0;
}

.jurnal-page .hero-benefits li {
  padding-left: 25px;
  position: relative;
  margin-bottom: 10px;
}

.jurnal-page .hero-benefits li::before {
  content: "✔";
  position: absolute;
  left: 0;
  color: #fcbf49;
}

.fitur-jurnal .card-title {
  font-size: 1.2rem;
  font-weight: 600;
}

.card{
    background-color: #003049;
    padding: 2px;
}
.card-body{
    background-color: rgb(248, 248, 242);
}

.hero-section{
    background-image: url(/assets/bg-jurnall.png);
    background-size: cover;
    padding: 30px;
    border-radius: 10px;
    color: rgb(0, 0, 0);
}

.container-container{
    padding: 50px;
}

.cta-section {
  background: linear-gradient(90deg, #6b0000, #8e1c1c); /* gradasi maroon */
  color: #fff;
  padding: 60px 0;
}

.container-cta {
  max-width: 800px;
  margin: 0 auto;
}

.btn-cta{
  background-color: #6b0000;
  color:  #fff;
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

@media (max-width: 575.98px) {

  .jurnal-page{
    padding: 0px;
  }
}
</style>