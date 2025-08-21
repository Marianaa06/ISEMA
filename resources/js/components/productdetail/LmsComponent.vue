<!-- <template>
  <div class="lms-promo">
    <div class="promo-header">
      <h1 class="promo-title" data-aos="fade-down">LMS Dosen</h1>
      <p class="promo-subtitle" data-aos="fade-up">Solusi Cerdas Perkuliahan Digital</p>
    </div>

    <div class="promo-features">
      <div class="feature-card" data-aos="fade-right">
        <img src="http://localhost:8000/assets/upload.png" alt="Upload Materi" />
        <h4>Upload Materi Mudah</h4>
        <p>Materi perkuliahan tersusun rapi dan mudah diakses oleh mahasiswa.</p>
      </div>
      <div class="feature-card" data-aos="fade-up">
        <img src="http://localhost:8000/assets/tugas.png" alt="Tugas Online" />
        <h4>Manajemen Tugas</h4>
        <p>Berikan tugas dengan deadline yang terjadwal dan pantau progres mahasiswa.</p>
      </div>
      <div class="feature-card" data-aos="fade-left">
        <img src="http://localhost:8000/assets/diskusi.png" alt="Forum Diskusi" />
        <h4>Forum Diskusi Interaktif</h4>
        <p>Diskusi langsung dengan mahasiswa kapan saja dan di mana saja.</p>
      </div>
      <div class="feature-card" data-aos="fade-right">
        <img src="http://localhost:8000/assets/nilai.png" alt="Penilaian Otomatis" />
        <h4>Penilaian Otomatis</h4>
        <p>Proses penilaian tugas mahasiswa lebih cepat dan akurat.</p>
      </div>
    </div>

    <div class="promo-action" data-aos="zoom-in">
      <button class="promo-button">Hubungi Kami Sekarang</button>
    </div>
  </div>
</template>

<script>
export default {
  name: 'LMSSiakadPromo',
  mounted() {
    AOS.init();
  }
};
</script>

<style scoped>
.lms-promo {
  max-width: 1200px;
  margin: 0 auto;
  padding: 40px 20px;
}

.promo-header {
  text-align: center;
  margin-bottom: 50px;
}

.promo-title {
  font-size: 50px;
  font-weight: bold;
}

.promo-subtitle {
  font-size: 24px;
  color: #555;
}

.promo-features {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
}

.feature-card {
  background-color: #a77fff;
  color: white;
  padding: 30px 20px;
  border-radius: 20px;
  text-align: center;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.feature-card img {
  width: 100px;
  height: 100px;
  object-fit: contain;
  margin-bottom: 15px;
}

.feature-card h4 {
  font-size: 20px;
  margin-bottom: 10px;
}

.feature-card p {
  font-size: 16px;
}

.promo-action {
  text-align: center;
  margin-top: 50px;
}

.promo-button {
  background-color: #2563eb;
  color: white;
  padding: 15px 30px;
  border: none;
  border-radius: 10px;
  font-size: 18px;
  cursor: pointer;
}

.promo-button:hover {
  background-color: #1d4ed8;
}
</style> -->


<template>

  <div class="lms-page">
    <section class="hero-section d-flex align-items-center">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 text-left">
            <p class="tagline">Pembelajaran Digital Tanpa Batas</p>
            <h1 class="hero-title">
              LMS Terintegrasi<br><span>untuk Pembelajaran Modern</span>
            </h1>
            <p class="hero-subtext">
              Mempermudah interaksi dosen dan mahasiswa, akses materi, tugas, dan penilaian dalam satu sistem.
            </p>
            <ul class="hero-benefits">
              <li>Mendukung pembelajaran daring & hybrid</li>
              <li>Upload materi, video, dan tugas</li>
              <li>Fitur forum diskusi dan kuis interaktif</li>
            </ul>
            <button class="btn btn-cta mt-3">Jadwalkan Demo</button>
          </div>
          <div class="col-lg-6 text-center">
            <img src="https://www.shutterstock.com/image-photo/successful-caucasian-young-man-student-600nw-2141124049.jpg" alt="LMS Dashboard" class="img-fluid hero-image shadow rounded">
          </div>
        </div>
      </div>
    </section>


    <section class="why-lms-section">
    <div class="lms-section p-0">
      <div class="row g-0 align-items-center">
        <!-- Kiri: Judul -->
        <div class="col-md-5 bg-light text-dark text-center py-5 px-4 title-wrapper">
          <h2 class="why-title">Why Choose <br> LMS ISEMA?</h2>
        </div>

        <!-- Kanan: Isi -->
        <div class="col-md-7 content-wrapper p-5">
          <p class="why-desc">
            LMS ISEMA dirancang untuk mendukung proses pembelajaran digital secara menyeluruh — dari akses materi hingga interaksi dengan dosen.
          </p>
          <p class="why-desc">
            Platform ini mudah digunakan, terintegrasi dengan sistem akademik, dan mendukung aktivitas belajar yang fleksibel, kolaboratif, serta real-time.
          </p>
          <p class="why-note">
            *LMS ISEMA dapat diakses melalui laptop dan smartphone kapan saja, di mana saja.*
          </p>
        </div>
      </div>
    </div>
  </section>


  
<section class="lms-benefit-section py-5">
  <div class="container-fluid">
    <h2 class="text-center mb-5 text-tittle">Apa saja yang Anda Dapatkan ketika Menggunakan LMS?</h2>
    <div class="row gx-4 gy-4">
      <div class="col-md-6 col-lg-4" v-for="(benefit, index) in benefits" :key="index">
        <div class="p-4 bg-white shadow rounded h-100 d-flex">
          <i :class="benefit.icon + ' fa-2x me-3 text-grey'"></i>
          <div>
            <strong>{{ benefit.title }}</strong><br>
            <span>{{ benefit.desc }}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <section class="features-section py-5 bg-light">
      <div class="container-fluid px-5">
        <div class="row mb-5 text-center">
          <div class="col">
            <h2 class="section-title">Fitur Unggulan</h2>
            <p class="section-subtitle">Satu sistem untuk semua kebutuhan akademik Anda</p>
          </div>
        </div>

        <div class="row gx-4 gy-4">
          <div class="col-sm-6 col-md-4 col-lg-3" v-for="(feature, index) in features" :key="index">
            <div class="feature-card h-100  ">
              <div class="feature-card-header">
                <img v-if="feature.headerImage" :src="feature.headerImage" class="card-header-bg-image" alt="Card Header Background">
              </div>
              <div class="feature-card-content p-3">
                <h5 class="font-weight-bold mt-2 mb-2">{{ feature.title }}</h5>
                <p class="text-muted mb-2">{{ feature.description }}</p>
                <p class="metadata mb-1">
                <i class="fas fa-bolt me-2 text-warning"></i> {{ feature.metadata }}
                </p>
                <p class="sub-description">
                  <i class="fas fa-check-circle me-2 text-success"></i> {{ feature.subDescription }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta-section py-5">
      <div class="container-container text-center">
        <h2 class="mb-3 fw-bold fs-2">Tertarik Menggunakan LMS Kami?</h2>
        <p class="mb-4 fw-bold fs-3">Hubungi kami untuk demo dan penawaran khusus</p>
        <button class="btn btn-success px-4 py-2">Hubungi Kami</button>
      </div>
    </section>
    </div>

    

</template>
<script>
export default {
  name: 'LmsComponent',
  data() {
    return {
      benefits: [
        { icon: 'fas fa-mobile-alt', title: 'Akses Mobile', desc: 'Sistem dapat diakses dari mana saja, kapan saja, melalui alat digital.' },
        { icon: 'fas fa-clock', title: 'Notifikasi Real-Time', desc: 'Informasi jadwal, nilai, dan pengumuman langsung ke perangkat Anda.' },
        { icon: 'fas fa-tasks', title: 'KRS Mudah Online', desc: 'Pengisian KRS menjadi cepat dan efisien, tanpa antrian panjang.' },
        { icon: 'fas fa-graduation-cap', title: 'Transparansi Nilai', desc: 'Nilai langsung terinput dan dapat dicek secara berkala oleh mahasiswa.' },
        { icon: 'fas fa-bell', title: 'Update Informasi Cepat', desc: 'Perubahan jadwal atau pengumuman kampus selalu ter-update secara otomatis.' },
        { icon: 'fas fa-shield-alt', title: 'Keamanan Data', desc: 'Data mahasiswa terjamin keamanannya dengan sistem terenkripsi.' }
      ],
features: [
  {
    title: 'Dashboard',
    description: 'Ringkasan aktivitas belajar, progres kelas, dan statistik akun dalam satu tampilan.',
    headerImage: '/assets/dashboard-lms.png',
    metadata: 'Pusat Kendali Akademik',
    subDescription: 'Data Kelas, Aktivitas, Notifikasi'
  },
  {
    title: 'My Class',
    description: 'Akses seluruh kelas aktif, materi perkuliahan, dan partisipasi mahasiswa.',
    headerImage: '/assets/myclass-lms.png',
    metadata: 'Kelola Kelas Digital',
    subDescription: 'Materi, Kehadiran, Forum'
  },
  {
    title: 'Question',
    description: 'Manajemen soal ujian, kuis, dan latihan yang dapat disesuaikan untuk setiap kelas.',
    headerImage: '/assets/question-lms.png',
    metadata: 'Bank Soal Interaktif',
    subDescription: 'Kuis, Ujian, Latihan Harian'
  },
  {
    title: 'Edit Article',
    description: 'Fitur untuk membuat dan menyunting artikel atau modul pembelajaran digital.',
    headerImage: '/assets/article-lms.png',
    metadata: 'Editor Konten',
    subDescription: 'Artikel, Modul, Materi Multimedia'
  },
  {
    title: 'Assessment',
    description: 'Pengelolaan evaluasi pembelajaran seperti tugas, kuis, dan ujian semester.',
    headerImage: '/assets/assessment-lms.png',
    metadata: 'Evaluasi Terstruktur',
    subDescription: 'Nilai, Feedback, Rubrik Penilaian'
  },
  {
    title: 'Payment',
    description: 'Monitoring dan notifikasi tagihan akademik serta riwayat pembayaran mahasiswa.',
    headerImage: '/assets/payment-lms.png',
    metadata: 'Integrasi Keuangan',
    subDescription: 'SPP, Tagihan Kuliah, Riwayat Pembayaran'
  },
  {
    title: 'Event',
    description: 'Manajemen kegiatan kampus seperti seminar, webinar, dan pelatihan daring.',
    headerImage: '/assets/event-lms.png',
    metadata: 'Kegiatan Akademik',
    subDescription: 'Workshop, Webinar, Guest Lecture'
  },
  {
    title: 'Calendar',
    description: 'Menampilkan jadwal akademik dalam format kalender yang mudah dibaca dan interaktif.',
    headerImage: '/assets/kalender-lms.png',
    metadata: 'Agenda Akademik',
    subDescription: 'Kelas, Ujian, Libur Nasional'
  }
]

    }
  }
}
</script>


<style scoped>

.lms-page {
  font-family: 'Poppins', sans-serif;
  /* padding: 70px; */
}

.hero-section {
  background: linear-gradient(135deg, #a0b1b5, #2e3131);
  color: #fff;
  padding: 100px 0;
}

.hero-title {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 15px;
}

.hero-title span {
  color: #F9A825;
}

.tagline {
  font-size: 1rem;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.hero-subtext {
  font-size: 1.1rem;
  margin-bottom: 20px;
}

.hero-benefits {
  list-style: none;
  padding-left: 0;
}

.hero-benefits li {
  margin-bottom: 10px;
  padding-left: 20px;
  position: relative;
}

.hero-benefits li::before {
  content: '✔';
  position: absolute;
  left: 0;
  color: #F9A825;
}


.btn-cta {
  background-color: #F9A825;
  color: #fff;
  padding: 10px 24px;
  border: none;
  font-weight: bold;
  border-radius: 8px;
}


.container{
  background-color: #2e3131;
  border-radius: 20px;
  padding: 20px;
}

.container-fluid{
  padding: 80px;
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

.cta-section {
  background: linear-gradient(45deg, #424141 0%, #8c8c8c 100%);
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

.features-section {
  font-family: 'Montserrat', 'Poppins', sans-serif;
  background-color: #ededed !important;
}

.section-title{
  font-size: 40px;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;
}
.section-subtitle{
  font-size: 20px;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;
}
.feature-card {
  background-color: whitesmoke;
  border-radius: 15px !important;
  /* box-shadow: 0 5px 20px rgba(0,0,0,0.08); */
  border: 1px solid rgb(185, 185, 185);
  overflow: hidden;
  width: 280px;
  color: rgb(81, 81, 81);
  height: 350px !important;
  
}
.feature-card-header {
  height: 150px;
  position: relative;
}
.card-header-bg-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  filter: brightness(0.9);
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 15px;
  padding: 10px;
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
  color: #003049;

}
.metadata, .sub-description {
  font-size: 0.9rem;
  color: #ccc;
  display: flex;
  align-items: center;
}

.metadata i,
.sub-description i {
  margin-right: 8px;
}

@media (max-width: 575.98px) {

  .lms-page{
    padding: 0px;
  }
}
</style>