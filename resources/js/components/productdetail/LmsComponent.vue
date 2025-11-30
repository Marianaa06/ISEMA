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

    <section class="why-and-features-section py-5 bg-light">
      <div class="container-fluid px-5">
        <div class="row g-4 justify-content-center align-items-start">
          <div class="col-lg-6">
            <div class="why-container h-100 p-4" style="border-color: #2e3131;">
              <div class="text-center">
                <h2 class="why-title">Why Choose LMS ISEMA?</h2>
                <hr class="hr-border" />
                <p class="why-desc mb-3">
                  LMS ISEMA dirancang untuk mendukung proses pembelajaran digital secara menyeluruh — dari akses materi hingga interaksi dengan dosen.
                </p>
                <p class="why-desc mb-3">
                  Platform ini mudah digunakan, terintegrasi dengan sistem akademik, dan mendukung aktivitas belajar yang fleksibel, kolaboratif, serta real-time.
                </p>
                <p class="why-note">
                  *LMS ISEMA dapat diakses melalui laptop dan smartphone kapan saja, di mana saja.*
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="feature-container h-100" style="border-color: #2e3131;">
              <div class="feature-head">
                <h2 class="feature text-center" style="color: #2e3131;">Fitur LMS</h2>
                <p>Semua fitur yang Anda butuhkan untuk pembelajaran yang efektif</p>
                <hr class="hr-border" />
                <ul class="features-item">
                  <li v-for="(feature, index) in displayedFeatures" :key="'lms-' + index">
                    <div class="list-feature d-flex align-items-center">
                      <i :class="['mb-1', 'fa-1x', feature.icon]"></i>
                      <h5 class="mt-1 mb-1">{{ feature.title }}</h5>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="see-more-wrapper text-center">
                <button class="see-more-btn" @click="toggleFeatures">
                  {{ showAllFeatures ? 'See Less' : 'See More' }}
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="lms-benefit-section py-5">
      <div class="container-fluid">
        <h2 class="text-center mb-4 text-tittle">Apa saja yang Anda Dapatkan ketika Menggunakan LMS?</h2>
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

    <section class="cta-section py-5">
      <div class="container-container text-center">
        <h2 class="mb-3 fw-bold fs-2">Tertarik Menggunakan LMS Kami?</h2>
        <p class="mb-4 fw-bold fs-3">Hubungi kami untuk demo dan penawaran khusus</p>
        <button class="btn btn-success px-4 py-2">Hubungi Kami</button>
      </div>
    </section>
  </div>
</template>
<!-- <script>
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
 -->
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
      featuresLms: [
        { icon: 'fas fa-desktop', title: 'Dashboard' },
        { icon: 'fas fa-book-open', title: 'My Class' },
        { icon: 'fas fa-question-circle', title: 'Question' },
        { icon: 'fas fa-edit', title: 'Edit Article' },
        { icon: 'fas fa-clipboard-check', title: 'Assessment' },
        { icon: 'fas fa-credit-card', title: 'Payment' },
        { icon: 'fas fa-calendar-alt', title: 'Event' },
        { icon: 'fas fa-calendar', title: 'Calendar' },
        { icon: 'fas fa-users', title: 'User Management' },
        { icon: 'fas fa-chart-bar', title: 'Reports & Analytics' },
        { icon: 'fas fa-envelope', title: 'Messaging System' },
        { icon: 'fas fa-cog', title: 'System Settings' }
      ],
      showAllFeatures: false,
      visibleFeatures: 6 // Jumlah fitur yang ditampilkan di awal
    };
  },
  computed: {
    displayedFeatures() {
      return this.showAllFeatures ? this.featuresLms : this.featuresLms.slice(0, this.visibleFeatures);
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
.lms-page {
  font-family: 'Poppins', sans-serif;
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


.container {
  background-color: #2e3131;
  border-radius: 20px;
  padding: 20px;
}

/* Bagian Gabungan Why & Features */
.why-and-features-section {
  background-color: #f8f9fa;
  font-family: 'Poppins', sans-serif;
}

.why-container {
  background: #fff;
  border: 2px solid #e5e8ec;
  border-radius: 8px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.05);
  min-height: 480px;
}

.why-title {
  font-size: 2.4rem;
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

.text-tittle {
  width: 100%;
  font-size: 1.5rem;
  font-weight: 800;
  color: #003049;
  font-family: 'Poppins', sans-serif;
}

.lms-benefit-section {
  background-color: #f8f9fa;
  padding: 40px 0;
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

.feature-container {
  background: #fff;
  border: 2px solid #e5e8ec;
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
  color: #2e3131;
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
  padding: 10px;
}

.see-more-btn {
  background-color: #2e3131;
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
  background-color: #3d4242;
}

.btn-success:hover{
  background-color: #3d4242;
}
@media (max-width: 991.98px) {
  .why-and-features-section .col-lg-6 {
    margin-bottom: 20px;
  }
}
</style>