<template>
  <div class="alumni-page">
    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 text-left">
            <p class="tagline">Jejak Karier Alumni dalam Satu Sistem</p>
            <h1 class="hero-title">
              Tracer Alumni<br><span>Menjembatani Masa Lalu dan Masa Depan</span>
            </h1>
            <p class="hero-subtext">
              Platform ini memudahkan pelacakan alumni, pemetaan karier, dan keterlibatan mereka dalam pengembangan institusi.
            </p>
            <button class="btn btn-cta mt-3">Hubungi Kami</button>
          </div>
          <div class="col-lg-6 text-center">
            <img src="https://wpcdn.us-midwest-1.vip.tn-cloud.net/www.charlotteparent.com/content/uploads/data-import/a86308ab/shutterstock_658847998.jpg" alt="Ilustrasi alumni" class="img-fluid hero-image shadow rounded">
          </div>
        </div>
      </div>
    </section>

 <section class="treasure-advantages-section container-fluid py-5">
    <div class="text-center mb-5">
      <h2 class="fw-bold display-6">Mengapa Memilih Tracer Alumni ISEMA?</h2>
      <p class="lead fs-4">Pantau perkembangan karier lulusan dan optimalkan hubungan kampus dengan alumni</p>
    </div>

    <div class="row text-center justify-content-center gy-4">
      <div
        class="col-md-4 col-sm-12"
        v-for="(item, index) in advantages"
        :key="index"
      >
        <div class="treasure-feature-item">
          <i :class="item.icon + ' mb-3 fs-3'"></i>
          <h5 class="fw-semibold">{{ item.title }}</h5>
          <p>{{ item.description }}</p>
        </div>
      </div>
    </div>
  </section>

  <section class="treasure-alumni-benefit-section">
    <div class="container-fluid d-flex flex-wrap align-items-center">
      <!-- Kiri: Tulisan -->
      <div class="text-content col-lg-6 px-5">
        <h2 class="headline mb-3">Gabung dengan Sistem Tracer Alumni,<br><em>lebih dari sekadar pelacakan</em></em></h2>
        <p class="lead fw-semibold">Tracer Alumni ISEMA membantu Anda memahami dampak lulusan dan meningkatkan akreditasi institusi dengan data yang akurat.</p>
        <ul class="benefit-list mt-4">
          <li>Pelacakan status pekerjaan dan pendidikan lanjutan alumni</li>
          <li>Survei alumni otomatis dan analisis data karier</li>
          <li>Partisipasi alumni dalam feedback dan evaluasi kurikulum</li>
          <li>Integrasi data alumni dengan sistem akademik dan eksternal</li>
          <li>Dashboard statistik penyebaran dan tren karier lulusan</li>
        </ul>
      </div>

      <!-- Kanan: Gambar -->
      <div class="image-content col-lg-6 text-center">
        <img src="https://drupal.uts.edu.au/sites/default/files/styles/wysiwyg_generic_large_x1/public/2020-11/ADV-TOWER-2020-Alumni-Explained.jpg?itok=9kO1O0Ur" alt="Tampilan Treasure Alumni" class="img-fluid rounded shadow" />
      </div>
    </div>
  </section>

    <section class="cta-section py-5">
      <div class="container-container text-center">
          <h2 class="mb-3 fw-bold fs-2">Ingin Lacak Alumni Anda secara Efektif?</h2>
          <p class="mb-4 fw-bold fs-4">Hubungi kami untuk demo dan implementasi Tracer Alumni ISEMA</p>
          <button class="btn px-4 py-2">Hubungi Kami</button>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: "AlumniComponent",
  data() {
    return {
      advantages: [
  {
    icon: "fas fa-id-badge",
    title: "Jejaring Alumni Luas",
    description:
      "Bangun koneksi profesional antar alumni lintas angkatan untuk peluang kerja dan kolaborasi.",
  },
  {
    icon: "fas fa-briefcase",
    title: "Peluang Karier & Magang",
    description:
      "Akses informasi lowongan pekerjaan, program magang, dan rekrutmen langsung dari mitra kampus.",
  },
  {
    icon: "fas fa-database",
    title: "Database Alumni Terpusat",
    description:
      "Pengelolaan data alumni yang rapi dan terpusat untuk pelacakan lulusan dan akreditasi institusi.",
  },
],

    };
  },
};
</script>

<style scoped>
.alumni-page {
  font-family: 'Poppins', sans-serif;
  background-color: #f9f9f9;
  color: #333;
  padding: 50px;
}

/* Hero Section */
.hero-section {
  background: linear-gradient(135deg, #4a2c6b, #7b3e9e); /* Ungu ISEMA */
  color: #fff;
  padding: 80px 0;
}

.tagline {
  font-size: 1rem;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: #ffd700;
  font-weight: 500;
}

.hero-title {
  font-size: 2.7rem;
  font-weight: 800;
  margin: 20px 0 15px;
}

.hero-title span {
  color: #ffdd57;
}

.hero-subtext {
  font-size: 1.1rem;
  line-height: 1.6;
  color: #f0f0f0;
  margin-bottom: 20px;
}

.hero-benefits {
  list-style: none;
  padding-left: 0;
  color: #fff;
  margin-bottom: 20px;
}

.hero-benefits li {
  position: relative;
  padding-left: 24px;
  margin-bottom: 12px;
  font-size: 1rem;
}

.hero-benefits li::before {
  content: '✔';
  position: absolute;
  left: 0;
  color: #ffd700;
  font-weight: bold;
}

/* CTA Button */
.btn-cta {
  background-color: #ffd700;
  color: #4a2c6b;
  padding: 12px 28px;
  border: none;
  font-weight: 600;
  font-size: 1rem;
  border-radius: 8px;
  transition: 0.3s ease;
}

.btn-cta:hover {
  background-color: #f4c400;
  color: #fff;
}

/* Hero Image */
.hero-image {
  max-width: 100%;
  height: auto;
  border-radius: 12px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
}

.treasure-advantages-section {
  background-color: #fafafa;
  color: #002b36;
  font-family: 'Poppins', sans-serif;
}



.cta-section {
  background: linear-gradient(45deg, #4c006f 0%, #8530d4 100%);
  color: #fff;
  text-align: center;
}
.cta-section .btn {
  background-color: #fff;
  color: #000000;
  font-weight: bold;
  border-radius: 8px;
  padding: 12px 30px;
  border: none;
}


.treasure-alumni-benefit-section {
  background-color: #e4e4e4;
  padding: 80px 0;
  font-family: 'Poppins', sans-serif;
  margin-bottom: 20px;
}

.headline {
  font-size: 2.5rem;
  font-weight: 700;
  color: #4a2c6b;
}

.headline em {
  font-style: normal;
  color: #f4c400;
}

.benefit-list {
  list-style-type: disc;
  padding-left: 20px;
  color: #444;
  font-size: 1.05rem;
}

.benefit-list li {
  margin-bottom: 12px;
  line-height: 1.6;
}

.image-content img {
  max-width: 95%;
  border-radius: 12px;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
}

@media (max-width: 991.98px) {
  .hero-title {
    font-size: 2rem;
  }

  .hero-subtext {
    font-size: 1rem;
  }

  .btn-cta {
    font-size: 0.95rem;
    padding: 10px 24px;
  }

  .image-content img {
    max-width: 100%;
    margin-top: 20px;
  }

  .headline {
    font-size: 2rem;
    text-align: center;
  }

  .benefit-list {
    font-size: 1rem;
    padding-left: 16px;
  }

  .treasure-alumni-benefit-section .container-fluid {
    flex-direction: column;
    text-align: center;
  }

  .text-content,
  .image-content {
    padding: 20px !important;
  }
}

@media (max-width: 575.98px) {

  .alumni-page{
    padding: 0px;
  }
  .hero-title {
    font-size: 1.7rem;
  }

  .headline {
    font-size: 1.5rem;
  }

  .benefit-list li {
    font-size: 0.95rem;
  }

  .btn-cta {
    padding: 10px 20px;
    font-size: 0.9rem;
  }

  .hero-subtext {
    font-size: 0.95rem;
  }

  .treasure-alumni-benefit-section {
    padding: 50px 0;
  }

  .cta-section .btn {
    padding: 10px 24px;
    font-size: 0.95rem;
  }
}

</style>
