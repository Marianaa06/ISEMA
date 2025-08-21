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

<section class="reporting-slider-section py-5">
  <div class="container-fluid">
    <div class="text-center mb-4">
      <h2 class="fw-bold section-title fs-2">Fitur Unggulan Reporting</h2>
      <p class="section-subtitle fw-bold fs-5">Membantu pengambilan keputusan berbasis data</p>
    </div>

    <div class="scroll-container d-flex flex-nowrap overflow-auto px-4">
      <div
        class="reporting-slide-card me-3 flex-shrink-0 text-center bg-white shadow-sm"
        v-for="(feature, index) in features"
        :key="index"
      >
        <img :src="feature.image" alt="icon" class="img-fluid mb-2" />
        <h6 class="fw-semibold">{{ feature.title }}</h6>
      </div>
    </div>
  </div>
</section>

<section class="cta-section py-5">
  <div class="container-container text-center">
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
  {
    image: 'https://assets-a1.kompasiana.com/items/album/2020/04/10/whatsapp-image-2020-04-10-at-01-09-28-5e8f674e097f360a8d69e443.jpeg',
    title: 'Dashboard Statistik'
  },
  {
    image: 'https://statik.tempo.co/data/2024/03/06/id_1285164/1285164_720.jpg',
    title: 'Laporan Akademik'
  },
  {
    image: 'https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/06/03/pexels-tracy-le-blanc-607812-2349088402.jpg',
    title: 'Laporan Kepemimpinan'
  },
  {
    image: 'https://cdn0-production-images-kly.akamaized.net/JdvySvdqsVwq9ailosUQSkn7460=/800x450/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/668602/original/aplikasi%20mobile.jpg',
    title: 'Ekspor Data'
  },
  {
    image: 'https://cdn1-production-images-kly.akamaized.net/XfTGAaBboHDMpoB_q_jkSHE-Mg0=/800x450/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/1543146/original/026949400_1490095734-komputer.jpg',
    title: 'Notifikasi Otomatis'
  },
  {
    image: 'https://www.nesabamedia.com/wp-content/uploads/2020/12/Perbedaan-Software-dan-Aplikasi.jpg',
    title: 'Sinkronisasi Real-Time'
  }
]

    }
  }
}
</script>
<style scoped>
.reporting-page {
  font-family: 'Poppins', sans-serif;
  background-color: #f7f9fc;
  color: #333;
  padding: 50px;
}

.hero-section {
  /* background: linear-gradient(135deg, #083b66, #0f4c75); */
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

.reporting-slider-section {
  background-color: #f8f9fa;
  font-family: 'Poppins', sans-serif;
}

.section-title {
  color: #000000;
}

.reporting-slide-card {
  width: 160px;
  padding: 10px 12px;
  border-radius: 12px;
  border: 1px solid #ddd;
  transition: all 0.3s ease;
}

.reporting-slide-card:hover {
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
  transform: translateY(-3px);
}

.reporting-slide-card img {
  width: 100%;
  height: 100px;
  object-fit: cover;
  border-radius: 6px;
}



.cta-section {
  background: linear-gradient(45deg, #b5b5b5 0%, #858585 100%);
  color: #8d0202;;
  text-align: center;
}
.cta-section .btn {
  background-color: #fff;
  color: #8d0202;;
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