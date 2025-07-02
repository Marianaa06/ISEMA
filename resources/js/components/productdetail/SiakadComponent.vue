<template>
  <div class="siakad-page">
<section class="hero-section d-flex align-items-center">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 text-left">
        <p class="tagline">Solusi Akademik Digital Modern</p>
        <h1 class="hero-title">
          SIAKAD Terintegrasi <br><span>untuk Era Kampus Digital</span>
        </h1>
        <p class="hero-subtext">
          Bangun sistem kampus yang efisien, real-time, dan mudah diakses oleh dosen, mahasiswa, dan admin.
        </p>
        <ul class="hero-benefits">
          <li>Mengelola data akademik real-time</li>
          <li>Integrasi penuh dengan LMS, MBKM, dan Keuangan</li>
          <li>Akses fleksibel dari semua perangkat</li>
        </ul>
        <button class="btn btn-cta mt-3">Hubungi Kami</button>
      </div>
      <div class="col-lg-6 text-center">
        <img src="/assets/panel.png" alt="Ilustrasi dashboard SIAKAD" class="img-fluid hero-image shadow rounded">
      </div>
    </div>
  </div>
</section>


    <section class="features-section py-5 bg-light">
      <div class="container-fluid px-5">
        <div class="row mb-5 text-center">
          <div class="col">
            <h2 class="section-title">Fitur Admin</h2>
            <!-- <p class="section-subtitle">Satu sistem untuk semua kebutuhan akademik Anda</p> -->
          </div>
        </div>

        <div class="row gx-4 gy-4">
          <div class="col-sm-6 col-md-4 col-lg-4" v-for="(feature, index) in featuresadmin" :key="index">
            <div class="feature-card h-100  shadow rounded">
              <div class="feature-card-header">
                <img v-if="feature.headerImage" :src="feature.headerImage" class="card-header-bg-image" alt="Card Header Background">
              </div>
              <div class="feature-card-content p-3">
                <h5 class="font-weight-bold mt-2 mb-2">{{ feature.title }}</h5>
                <p class="text-muted mb-2">{{ feature.description }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    

      <div class="container-fluid px-5">
        <div class="row mb-5 text-center">
          <div class="col">
            <h2 class="section-title">Fitur Dosen</h2>
            <!-- <p class="section-subtitle">Satu sistem untuk semua kebutuhan akademik Anda</p> -->
          </div>
        </div>

        <div class="row gx-4 gy-4">
          <div class="col-sm-6 col-md-4 col-lg-4" v-for="(feature, index) in featuresdosen" :key="index">
            <div class="feature-card h-100  shadow rounded">
              <div class="feature-card-header">
                <img v-if="feature.headerImage" :src="feature.headerImage" class="card-header-bg-image" alt="Card Header Background">
              </div>
              <div class="feature-card-content p-3">
                <h5 class="font-weight-bold mt-2 mb-2">{{ feature.title }}</h5>
                <p class="text-muted mb-2">{{ feature.description }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="container-fluid px-5">
        <div class="row mb-5 text-center">
          <div class="col">
            <h2 class="section-title">Fitur Mahasiswa</h2>
            <!-- <p class="section-subtitle">Satu sistem untuk semua kebutuhan akademik Anda</p> -->
          </div>
        </div>

        <div class="row gx-4 gy-4">
          <div class="col-sm-6 col-md-4 col-lg-4" v-for="(feature, index) in featuresmahasiswa" :key="index">
            <div class="feature-card h-100  shadow rounded">
              <div class="feature-card-header">
                <img v-if="feature.headerImage" :src="feature.headerImage" class="card-header-bg-image" alt="Card Header Background">
              </div>
              <div class="feature-card-content p-3">
                <h5 class="font-weight-bold mt-2 mb-2">{{ feature.title }}</h5>
                <p class="text-muted mb-2">{{ feature.description }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<section class="keunggulan-siakad">
  <div class="container-fluid py-5">
    <div class="row g-0 align-items-stretch min-vh-100">
      <div class="col-lg-6 content p-5 h-100">
          <h2 class="headline">Gabung Bersama SIAKAD Modern, <br><em>bukan sekadar sistem</em></h2>
          <p class="subheadline">
            Dengan SIAKAD kami, Anda mendapatkan keunggulan yang mendukung transformasi digital kampus Anda:
          </p>
          <ul class="benefit-list">
            <li>Mengelola data akademik dari mana saja secara real-time.</li>
            <li>Mendukung integrasi penuh dengan sistem LMS, MBKM, dan Keuangan.</li>
            <li>Akses mudah bagi dosen, mahasiswa, dan admin kampus.</li>
            <li>Dashboard analitik untuk pelaporan akademik & performa dosen.</li>
            <li>Dirancang untuk fleksibilitas perangkat: laptop, tablet, dan smartphone.</li>
          </ul>
      </div>
      <div class="col-lg-6 image-wrapper h-100">
        <img src="https://www.shutterstock.com/image-photo/successful-caucasian-young-man-student-600nw-2141124049.jpg" class="tilted-image" />
      </div>
    </div>
  </div>
</section>

    <section class="cta-section py-5">
      <div class="container text-center">
        <h2 class="mb-3">Tertarik Menggunakan SIAKAD Kami?</h2>
        <p class="mb-4">Hubungi kami untuk demo dan penawaran khusus</p>
        <button class="btn btn-primary px-4 py-2">Hubungi Kami</button>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: 'SiakadComponent',
  data() {
    return {
      featuresadmin: [
        {
          title: 'Panel Admin Efisien',
          description: 'Admin kampus dapat mengelola seluruh data dan pengguna dari satu dashboard.',
          headerImage: '/assets/panel.png',
          metadata: 'Manajemen Data Komprehensif',
          subDescription: 'Pengelolaan Pengguna & Sistem'
        },
        {
          title: 'Laporan Otomatis',
          description: 'Laporan akademik dan kinerja dosen ter-generate otomatis untuk institusi.',
          headerImage: '/assets/report.png',
          metadata: 'Visualisasi Data Akurat',
          subDescription: 'Laporan Kinerja & Akademik'
        },
        {
          title: 'Akses Multi-Perangkat',
          description: 'Sistem dapat diakses dari laptop, tablet, maupun smartphone kapan saja.',
          headerImage: '/assets/smartphone.png',
          metadata: 'Mobile-Friendly',
          subDescription: 'Akses Dimana Saja, Kapan Saja'
        }
      ],
    featuresdosen:[
        {
          title: 'Manajemen Jadwal Akademik',
          description: 'Atur jadwal kuliah, bimbingan, dan ujian dengan sistem otomatis dan fleksibel.',
          headerImage: '/assets/jadwal-dosen.png',
          metadata: 'Terintegrasi & Cepat',
          subDescription: 'Untuk Dosen & Staf Akademik'
        },
        {
          title: 'Input dan Rekap Nilai',
          description: 'Proses penilaian cepat dan akurat, langsung terintegrasi ke data mahasiswa.',
          headerImage: '/assets/inputnilai.png',
          metadata: 'Akurat & Transparan',
          subDescription: 'Otomatisasi Laporan Nilai'
        },
        {
          title: 'Laporan Otomatis',
          description: 'Laporan akademik dan kinerja dosen ter-generate otomatis untuk institusi.',
          headerImage: '/assets/report.png',
          metadata: 'Visualisasi Data Akurat',
          subDescription: 'Laporan Kinerja & Akademik'
        },
    ],
    featuresmahasiswa:[
              {
          title: 'Layanan Mahasiswa Terpadu',
          description: 'Mahasiswa dapat mengakses data akademik, KRS, KHS, dan transkrip secara real-time.',
          headerImage: '/assets/isemaweb.png',
          metadata: '24/7 Akses Online',
          subDescription: 'KRS, KHS, Transkrip'
        },
        {
          title: 'Akses Multi-Perangkat',
          description: 'Sistem dapat diakses dari laptop, tablet, maupun smartphone kapan saja.',
          headerImage: '/assets/smartphone.png',
          metadata: 'Mobile-Friendly',
          subDescription: 'Akses Dimana Saja, Kapan Saja'
        },
        {
          title: 'Monitoring Status Akademik',
          description: 'Mahasiswa dapat melihat status aktif, cuti, beasiswa, dan progress semester berjalan.',
          headerImage: '/assets/jadwal-dosen.png',
          metadata: 'Pantauan Real-Time',
          subDescription: 'Status Aktif, Cuti, Beasiswa, IPK'
        }
    ]
    }
  }
}
</script>

<style scoped>
.siakad-page {
  font-family: 'Poppins', sans-serif;
  background-color: #f8faff;
  color: whitesmoke;
  padding: 70px;
}
.hero-section {
  background-image: url('/assets/ggreen-bg.png');
  background-size: cover;
  background-position: center;
  color: #16300c;
  min-height: 80vh;
  padding: 100px 0;
}

.hero-title {
  font-size: 2.8rem;
  font-weight: 800;
  line-height: 1.3;
  margin-bottom: 20px;
}

.hero-title span {
  color: #E95420;
}

.tagline {
  font-size: 1rem;
  font-weight: 600;
  color: #16300c;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.hero-subtext {
  font-size: 1.1rem;
  color: whitesmoke;
  margin-bottom: 20px;
}

.hero-benefits {
  list-style: none;
  color: whitesmoke;
  padding-left: 0;
}

.hero-benefits li {
  position: relative;
  padding-left: 25px;
  margin-bottom: 12px;
  font-size: 1rem;
}

.hero-benefits li::before {
  content: '✔';
  position: absolute;
  left: 0;
  color: #16300c;
  font-weight: bold;
}

.btn-cta {
  background-color: #E95420;
  color: #fff;
  border: none;
  padding: 12px 28px;
  font-size: 1rem;
  font-weight: 600;
  border-radius: 8px;
  transition: 0.3s ease;
}

.btn-cta:hover {
  background-color: #c74319;
}

.hero-image {
  max-width: 100%;
  height: auto;
  opacity: 0.9;
}

.features-section {
  color: #023516;
  font-family: 'Montserrat', 'Poppins', sans-serif;
  background-color: #fff9f9 !important;
}

.section-title{
  font-size: 40px;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;
  margin-top: 50px;
}
.section-subtitle{
  font-size: 20px;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;
}
.feature-card {
  background-color: #ebebeb;
  border-radius: 0 0  20px 20px !important;
  box-shadow: 0 5px 20px rgba(0,0,0,0.08);
  overflow: hidden;
  width: 80%;
  color: rgb(81, 81, 81);
  
}
.feature-card-header {
  height: 150px;
  position: relative;
}
.card-header-bg-image {
  border-radius: 0px !important;
  width: 100%;
  height: 100%;
  object-fit: cover;
  filter: brightness(0.9);
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 25px;
  padding: 2px;
}
.card-header-tag {
  position: relative;
  z-index: 1;
  background-color: rgba(255,255,255,0.25);
  color: #fff;
  border-radius: 5px;
  font-size: 0.85em;
  font-weight: 600;
}

.feature-card-content h5 {
  font-weight: bold;
  font-size: 1.2em;
}
.feature-card-content p {
  font-size: 0.95em;
  color: whitesmoke;
}
.cta-section {
  background: linear-gradient(45deg, #8b8b8b 0%, #8c8c8c 100%);
  color: #fff;
  text-align: center;
}
.cta-section .btn {
  background-color: #fff;
  color: #E95420;
  font-weight: bold;
  border-radius: 8px;
  padding: 12px 30px;
  border: none;
}
.keunggulan-siakad {
  background: #fff;
  overflow: hidden;
}

.keunggulan-siakad .container-fluid {
  margin: 0 auto;
}

.keunggulan-siakad .content {
  background: #fcfdff;
  border-radius: 15px;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
  display: flex;
  flex-direction: column;
  justify-content: center;
  height: 100%;
}

.keunggulan-siakad .headline {
  font-size: 2.5em;
  font-weight: 700;
  color: #16300c;
  line-height: 1.2;
  margin-bottom: 20px;
}

.keunggulan-siakad .headline em {
  font-style: normal;
  color: #E95420;
  font-weight: 800;
}

.keunggulan-siakad .subheadline {
  font-size: 1.2em;
  color: #555;
  line-height: 1.7;
  margin-bottom: 2px;
}

.keunggulan-siakad .benefit-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.keunggulan-siakad .benefit-list li {
  font-size: 1.1em;
  color: #343a40;
  margin-bottom: 18px;
  position: relative;
  padding-left: 35px;
  line-height: 1.5;
}

.keunggulan-siakad .benefit-list li::before {
  content: '\f00c';
  font-family: "Font Awesome 6 Free";
  font-weight: 900;
  position: absolute;
  left: 0;
  top: 2px;
  color: #16300c;
  font-size: 1.2em;
}

.keunggulan-siakad .image-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  background: #eaf7ff;
}

.image-wrapper img{
  height: 538px !important;
}
.keunggulan-siakad .tilted-image {
  width: 100%;
  height: 100%; 
  object-fit: cover; 
  border-radius: 20px;
  box-shadow: 0 20px 30px rgba(0, 0, 0, 0.35);
  display: block;
}
.keunggulan-siakad .row {
  display: flex;
  min-height: 100%;
  height: 100%;
}

@media (max-width: 768px) {

  .siakad-page{
    padding: 20px;
  }
  .hero-section {
    padding: 50px 20px;
    text-align: center;
  }

  .hero-title {
    font-size: 2rem;
    text-align: center;
  }

  .tagline,
  .hero-subtext,
  .hero-benefits {
    text-align: center;
    font-size: 1rem;
  }

  .hero-benefits li {
    padding-left: 20px;
    font-size: 0.95rem;
  }

  .hero-benefits li::before {
    left: 5px;
  }

  .btn-cta {
    width: 100%;
    padding: 12px 0;
    font-size: 1rem;
  }

  .hero-image {
    transform: none;
    margin-top: 30px;
  }

  .feature-card {
    width: 100%;
  }

  .keunggulan-siakad .content {
    padding: 20px;
  }

  .keunggulan-siakad .headline {
    font-size: 1.8em;
    text-align: center;
  }

  .keunggulan-siakad .subheadline {
    text-align: center;
    font-size: 1em;
    margin-bottom: 20px;
  }

  .keunggulan-siakad .benefit-list li {
    font-size: 1rem;
    padding-left: 28px;
  }

  .keunggulan-siakad .benefit-list li::before {
    font-size: 1rem;
    left: 0;
  }

  .keunggulan-siakad .image-wrapper {
    padding: 15px;
    height: auto;
  }

  .keunggulan-siakad .tilted-image {
    height: auto;
    border-radius: 10px;
  }

  .cta-section h2 {
    font-size: 1.8rem;
  }

  .cta-section p {
    font-size: 1rem;
  }

  .cta-section .btn {
    width: 100%;
    padding: 12px;
  }

  .section-title {
    font-size: 1.8rem;
  }

  .section-subtitle {
    font-size: 1rem;
  }
}


</style>
