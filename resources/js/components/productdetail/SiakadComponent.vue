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

  <!-- <section class="features-section py-5">
  <div class="container">
    <h2 class="mb-4 text-center section-title" style="color: green;">Fitur SIAKAD Admin</h2>
    <div class="row g-4">
      <div class="col-md-3 col-sm-6" v-for="(feature, index) in featuresadmin" :key="index">
        <div 
          class="fitur-card text-center p-4 h-100" 
          style="border: 2px solid green; cursor: pointer;"
          @click="showFeature(feature)"
        >
          <i :class="feature.icon" class="mb-3 d-block fa-2x" alt="Icon"></i>
          <h5 class="font-weight-bold mt-2 mb-2">{{ feature.title }}</h5>
          <p class="text-muted mb-2">{{ feature.description }}</p>
        </div>
      </div>
    </div>
  </div>
<div class="modal fade" id="featureModal" tabindex="-1" role="dialog" aria-labelledby="featureModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content shadow-lg border-0 rounded-4">
  
      <div class="modal-header text-white border-0 rounded-top-4">
        <h5 class="modal-title fw-bold d-flex align-items-center" id="featureModalLabel">
          <i :class="selectedFeature.icon + ' me-2 fa-lg'"></i>
          {{ selectedFeature.title }}
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <div class="row g-4" v-if="selectedFeature.subfeatures && selectedFeature.subfeatures.length">
          <div 
            class="col-md-4 col-sm-6"
            v-for="(sub, idx) in selectedFeature.subfeatures" 
            :key="idx"
          >
            <div class="fitur-card text-center p-4 h-100">
              <i :class="sub.icon + ' fa-2x mb-3 text-dark'"></i>
              <h5 class="fw-bold">{{ sub.title }}</h5>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

</section> -->
<!-- 

    <section class="features-section py-5">
      <div class="container">
        <h2 class="mb-4 text-center section-title" style="color: purple;">Fitur SIAKAD Dosen</h2>
        <div class="row g-4">
          <div class="col-md-3 col-sm-6" v-for="(feature, index) in featuresdosen" :key="index">
            <div class="fitur-card text-center p-4 h-100" style="border: 3px solid purple;">
              <i :class="feature.icon" class="mb-3 d-block fa-2x" alt="Icon" ></i>
              <h5 class="font-weight-bold mt-2 mb-2">{{ feature.title }}</h5>
              <p class="text-muted mb-2">{{ feature.description }}</p>
            </div>
          </div>
        </div>
      </div>
      
    </section> -->

<!-- <section class="features-section py-5 ">
  <div class="container">
    <div class="row mb-5 text-center">
      <div class="col">
        <h2 class="section-title">Fitur SIAKAD Mahasiswa</h2>
      </div>
    </div>

    <div class="row gx-4 gy-4 justify-content-center">
      <div class="col-sm-6 col-md-4 col-lg-4" v-for="(feature, index) in featuresmahasiswa" :key="index">
        <div class="feature-card h-100">
          <div class="feature-card-header">
            <img v-if="feature.headerImage" :src="feature.headerImage" class="card-header-bg-image" alt="Card Header Background">
          </div>
          <div class="feature-card-content p-3 text-center">
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
</section> -->
 <div class="features-section d-flex">
      <!-- ADMIN -->
<div class="feature-container" style="border-color: darkgreen;">
  <div class="feature-head">
    <h2 class="feature text-center" style="color: darkgreen;">Fitur SIAKAD Admin</h2>
    <p>Mempermudah pengelolaan data kampus</p>
    <hr class="hr-border" />
    <ul class="features-item" :class="{ 'expanded': showAllAdmin }">
      <li v-for="(feature, index) in limitedFeaturesAdmin" :key="'admin-' + (feature.title || index)">
        <div 
          class="list-feature d-flex"
          :class="{ 'has-subfeatures': feature.subfeatures }"
          @click="toggleSubfeatures(feature)"
        >
          <i :class="['mb-1','fa-1x', feature.icon]"></i>
          <h5 class="mt-1 mb-1">{{ feature.title }}</h5>
          <i v-if="feature.subfeatures" class="fa-solid fa-angle-right ms-auto toggle-icon" :class="{ 'rotated': isSubfeatureOpen(feature) }"></i>
        </div>
        <ul 
          class="sub-features-list" 
          v-show="isSubfeatureOpen(feature)"
        >
          <li v-for="(sub, subIdx) in feature.subfeatures" :key="'sub-' + subIdx">
            <div class="sub-feature-item d-flex">
              <i :class="['fa-2x','mb-1','fa-1x', sub.icon]"></i>
              <h5 class="mt-1 mb-1">{{ sub.title }}</h5>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="see-more-wrapper text-center">
    <button class="see-more-btn" @click="toggleFeatures('admin')">
      {{ showAllAdmin ? 'See less' : 'See more' }}
    </button>
  </div>
</div>

<div class="feature-container" style="border-color: darkmagenta;">
  <div class="feature-head">
    <h2 class="feature text-center" style="color: darkmagenta;">Fitur SIAKAD Dosen</h2>
    <p>Membantu dosen dalam mengelola perkuliahan</p>
    <hr class="hr-border" />
    <ul class="features-item" :class="{ 'expanded': showAllDosen }">
      <li v-for="(feature, index) in limitedFeaturesDosen" :key="'dosen-' + (feature.title || index)">
        <div 
          class="list-feature d-flex"
          :class="{ 'has-subfeatures': feature.subfeatures }"
          @click="toggleSubfeatures(feature)"
        >
          <i :class="['mb-1','fa-1x', feature.icon]"></i>
          <h5 class="mt-1 mb-1">{{ feature.title }}</h5>
          <i v-if="feature.subfeatures" class="fa-solid fa-angle-right ms-auto toggle-icon" :class="{ 'rotated': isSubfeatureOpen(feature) }"></i>
        </div>
        <ul 
          class="sub-features-list" 
          v-show="isSubfeatureOpen(feature)"
        >
          <li v-for="(sub, subIdx) in feature.subfeatures" :key="'sub-' + subIdx">
            <div class="sub-feature-item d-flex">
              <i :class="['fa-2x','mb-1','fa-1x', sub.icon]"></i>
              <h5 class="mt-1 mb-1">{{ sub.title }}</h5>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="see-more-wrapper text-center">
    <button class="see-more-btn" @click="toggleFeatures('dosen')">
      {{ showAllDosen ? 'See less' : 'See more' }}
    </button>
  </div>
</div>

<div class="feature-container" style="border-color: darkslateblue;">
  <div class="feature-head">
    <h2 class="feature text-center" style="color: darkslateblue;">Fitur SIAKAD Mahasiswa</h2>
    <p>Memberikan akses mudah bagi mahasiswa</p>
    <hr class="hr-border" />
    <ul class="features-item" :class="{ 'expanded': showAllMahasiswa }">
      <li v-for="(feature, index) in limitedFeaturesMahasiswa" :key="'mahasiswa-' + (feature.title || index)">
        <div 
          class="list-feature d-flex"
          :class="{ 'has-subfeatures': feature.subfeatures }"
          @click="toggleSubfeatures(feature)"
        >
          <i :class="['mb-1','fa-1x', feature.icon]"></i>
          <h5 class="mt-1 mb-1">{{ feature.title }}</h5>
          <i v-if="feature.subfeatures" class="fa-solid fa-angle-right ms-auto toggle-icon" :class="{ 'rotated': isSubfeatureOpen(feature) }"></i>
        </div>
        <ul 
          class="sub-features-list" 
          v-show="isSubfeatureOpen(feature)"
        >
          <li v-for="(sub, subIdx) in feature.subfeatures" :key="'sub-' + subIdx">
            <div class="sub-feature-item d-flex">
              <i :class="['fa-2x','mb-1','fa-1x', sub.icon]"></i>
              <h5 class="mt-1 mb-1">{{ sub.title }}</h5>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="see-more-wrapper text-center">
    <button class="see-more-btn" @click="toggleFeatures('mahasiswa')">
      {{ showAllMahasiswa ? 'See less' : 'See more' }}
    </button>
  </div>
</div>
    </div>
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
        <h2 class="mb-3 fw-bold fs-2">Tertarik Menggunakan SIAKAD Kami?</h2>
        <p class="mb-4 fs-3">Hubungi kami untuk demo dan penawaran khusus</p>
        <button class="btn px-4 py-2">Hubungi Kami</button>
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
        { title: 'Mahasiswa', icon: 'fas fa-user-graduate' },
        { title: 'Pegawai', icon: 'fas fa-users-cog' },
        {
          title: 'Kegiatan',
          icon: 'fas fa-calendar-check',
          subfeatures: [
            { title: 'Kegiatan Akademik', icon: 'fas fa-university' },
            { title: 'Kalender Akademik', icon: 'fas fa-calendar-alt' }
          ]
        },
        {
          title: 'Data Kurikulum',
          icon: 'fas fa-book',
          subfeatures: [
            { title: 'Mata Kuliah', icon: 'fas fa-book' },
            { title: 'Kurikulum Prodi', icon: 'fas fa-graduation-cap' },
            { title: 'Prasyarat Mata Kuliah', icon: 'fas fa-clipboard-list' },
            { title: 'Ekavalensi Mata Kuliah', icon: 'fas fa-exchange-alt' },
            { title: 'Tahun Kurikulum', icon: 'fas fa-calendar' },
            { title: 'Batas SKS', icon: 'fas fa-hourglass-half' },
            { title: 'Skala Nilai', icon: 'fas fa-chart-line' },
            { title: 'Komposisi Nilai', icon: 'fas fa-percentage' },
            { title: 'Kurikulum Konsentrasi', icon: 'fas fa-project-diagram' }
          ]
        },
        {
          title: 'Data Kelas',
          icon: 'fas fa-chalkboard-teacher',
          subfeatures: [
            { title: 'Kelas Kuliah', icon: 'fas fa-chalkboard' },
            { title: 'Jadwal & Presentasi', icon: 'fas fa-calendar-day' },
            { title: 'Tahun Ajaran', icon: 'fas fa-calendar' },
            { title: 'Monitoring Ruang (Jadwal)', icon: 'fas fa-door-open' }
          ]
        },
        {
          title: 'Administrasi',
          icon: 'fas fa-file-alt',
          subfeatures: [
            { title: 'Transfer Mahasiswa', icon: 'fas fa-random' },
            { title: 'Pengajuan Status Mahasiswa', icon: 'fas fa-user-edit' }
          ]
        },
        {
          title: 'Proposal/Tugas Akhir',
          icon: 'fas fa-file-signature',
          subfeatures: [
            { title: 'Daftar Proposal', icon: 'fas fa-file-alt' },
            { title: 'Daftar Tugas Akhir', icon: 'fas fa-scroll' }
          ]
        },
        {
          title: 'Data Yudisium',
          icon: 'fas fa-certificate',
          subfeatures: [
            { title: 'Daftar Yudisium', icon: 'fas fa-list' },
            { title: 'Penomoran Dokumen', icon: 'fas fa-sort-numeric-up' },
            { title: 'Periode Yudisium', icon: 'fas fa-calendar-check' }
          ]
        },
        {
          title: 'Kegiatan Pendukung',
          icon: 'fas fa-calendar-alt',
          subfeatures: [
            { title: 'Kegiatan Akademik', icon: 'fas fa-users' },
            { title: 'Kalender Akademik', icon: 'fas fa-calendar-alt' }
          ]
        },
        {
          title: 'Data Wisuda',
          icon: 'fas fa-user-graduate',
          subfeatures: [
            { title: 'Periode Wisuda', icon: 'fas fa-calendar-day' },
            { title: 'Peserta Wisuda', icon: 'fas fa-user-friends' }
          ]
        },
        {
          title: 'Institut',
          icon: 'fas fa-university',
          subfeatures: [
            { title: 'Informasi Perguruan Tinggi', icon: 'fas fa-info-circle' },
            { title: 'Fakultas', icon: 'fas fa-building' },
            { title: 'Jurusan', icon: 'fas fa-sitemap' },
            { title: 'Prodi', icon: 'fas fa-graduation-cap' },
            { title: 'Fokus', icon: 'fas fa-bullseye' },
            { title: 'Skala Pendidikan', icon: 'fas fa-ruler' },
            { title: 'Skala Pendidikan Universitas', icon: 'fas fa-university' },
            { title: 'Sistem Pembelajaran', icon: 'fas fa-laptop' },
            { title: 'Gedung Pembelajaran', icon: 'fas fa-school' },
            { title: 'Ruang Pembelajaran', icon: 'fas fa-door-open' },
            { title: 'Aktivitas Akademik', icon: 'fas fa-tasks' },
            { title: 'Kalender Akademik', icon: 'fas fa-calendar-alt' },
            { title: 'Universitas Lain', icon: 'fas fa-globe' }
          ]
        },
        {
          title: 'Studi',
          icon: 'fas fa-book-open',
          subfeatures: [
            { title: 'Jenis Mata Kuliah', icon: 'fas fa-book' },
            { title: 'Kelompok Mata Kuliah', icon: 'fas fa-layer-group' },
            { title: 'Bidang Keahlian', icon: 'fas fa-lightbulb' },
            { title: 'Komponen Penilaian', icon: 'fas fa-percentage' },
            { title: 'Sesi Perkuliahan', icon: 'fas fa-clock' },
            { title: 'Sesi Pembelajaran', icon: 'fas fa-laptop-house' },
            { title: 'Catatan Kehadiran', icon: 'fas fa-clipboard-check' },
            { title: 'Kategori Pertemuan', icon: 'fas fa-list-ul' },
            { title: 'Kategori Aktivitas Pendukung', icon: 'fas fa-people-carry' }
          ]
        },
        {
          title: 'Identitas',
          icon: 'fas fa-id-card-alt',
          subfeatures: [
            { title: 'Agama', icon: 'fas fa-praying-hands' },
            { title: 'Pekerjaan', icon: 'fas fa-briefcase' },
            { title: 'Pendapatan', icon: 'fas fa-money-bill-wave' }
          ]
        },
        {
          title: 'Tugas Akhir',
          icon: 'fas fa-scroll',
          subfeatures: [
            { title: 'Pengaturan Tugas Akhir', icon: 'fas fa-cogs' },
            { title: 'Unsur Nilai', icon: 'fas fa-percentage' },
            { title: 'Pengaturan Nilai', icon: 'fas fa-cog' }
          ]
        },
        {
          title: 'Data Mahasiswa',
          icon: 'fas fa-database',
          subfeatures: [
            { title: 'Status Mahasiswa', icon: 'fas fa-user-check' },
            { title: 'Kategori Hunian', icon: 'fas fa-home' },
            { title: 'Transportasi', icon: 'fas fa-bus' },
            { title: 'Kebutuhan Khusus', icon: 'fas fa-wheelchair' },
            { title: 'Jenis Dokumen Tambahan Biodata', icon: 'fas fa-file-alt' },
            { title: 'Dokumen Tambahan Biodata', icon: 'fas fa-folder-open' }
          ]
        },
        {
          title: 'Pegawai',
          icon: 'fas fa-briefcase',
          subfeatures: [
            { title: 'Klasifikasi Pegawai', icon: 'fas fa-id-badge' },
            { title: 'Kategori/Jabatan', icon: 'fas fa-user-tie' },
            { title: 'Peran Khusus', icon: 'fas fa-star' },
            { title: 'Status Pegawai', icon: 'fas fa-user' },
            { title: 'Peran Struktural', icon: 'fas fa-sitemap' },
            { title: 'Status Keaktifan', icon: 'fas fa-toggle-on' }
          ]
        },
        {
          title: 'Wilayah',
          icon: 'fas fa-map-marked-alt',
          subfeatures: [
            { title: 'Negara', icon: 'fas fa-flag' },
            { title: 'Provinsi', icon: 'fas fa-map' },
            { title: 'Kota', icon: 'fas fa-city' },
            { title: 'Kecamatan', icon: 'fas fa-map-pin' }
          ]
        },
        {
          title: 'Arsip Dosen',
          icon: 'fas fa-archive',
          subfeatures: [
            { title: 'Rekap Jadwal Mengajar Dosen', icon: 'fas fa-clipboard' }
          ]
        },
        {
          title: 'Arsip Mahasiswa',
          icon: 'fas fa-folder-open',
          subfeatures: [
            { title: 'KHS', icon: 'fas fa-file-alt' },
            { title: 'KRS', icon: 'fas fa-file-alt' },
            { title: 'Daftar Mahasiswa Keseluruhan', icon: 'fas fa-users' },
            { title: 'Daftar Mahasiswa Per Periode', icon: 'fas fa-user-clock' },
            { title: 'Daftar Yudisium', icon: 'fas fa-list' }
          ]
        },
        { title: 'Periode Akademik', icon: 'fas fa-calendar-alt' }
      ],

      featuresdosen: [
        { title: 'Daftar Proposal', icon: 'fas fa-file-signature' },
        { title: 'Daftar Skripsi', icon: 'fas fa-book-open' },
        { title: 'Jadwal Sidang', icon: 'fas fa-calendar-check' },
        { title: 'Kelas Saya', icon: 'fas fa-chalkboard-teacher' },
        { title: 'Kalender Akademik', icon: 'fas fa-calendar-alt' },
        { title: 'RPS', icon: 'fas fa-tasks' }
      ],

      featuresmahasiswa: [
        { title: 'Dashboard Mahasiswa', icon: 'fas fa-tachometer-alt' },
        { title: 'Biodata', icon: 'fas fa-address-card' },
        { title: 'Kalender Akademik', icon: 'fas fa-calendar-alt' },
        { title: 'Kelas Saya', icon: 'fas fa-chalkboard-teacher' },
        { title: 'KRS', icon: 'fas fa-file-alt' },
        { title: 'Kurikulum Program Studi', icon: 'fas fa-book-open' },
        { title: 'Transkrip Nilai', icon: 'fas fa-scroll' },
        { title: 'Daftar Pengajuan', icon: 'fas fa-file-signature' },
        { title: 'Formulir Pengajuan', icon: 'fas fa-wpforms' },
        { title: 'Proposal', icon: 'fas fa-lightbulb' },
        { title: 'Tugas Akhir', icon: 'fas fa-graduation-cap' }
      ],

      showAllAdmin: false,
      showAllDosen: false,
      showAllMahasiswa: false,
      openSubfeatures: {}
    }
  },
  computed: {
    limitedFeaturesAdmin() {
      return this.showAllAdmin ? this.featuresadmin : this.featuresadmin.slice(0, 6)
    },
    limitedFeaturesDosen() {
      return this.showAllDosen ? this.featuresdosen : this.featuresdosen.slice(0, 6)
    },
    limitedFeaturesMahasiswa() {
      return this.showAllMahasiswa ? this.featuresmahasiswa : this.featuresmahasiswa.slice(0, 6)
    }
  },
  methods: {
    toggleFeatures(group) {
      if (group === 'admin') this.showAllAdmin = !this.showAllAdmin
      else if (group === 'dosen') this.showAllDosen = !this.showAllDosen
      else if (group === 'mahasiswa') this.showAllMahasiswa = !this.showAllMahasiswa
    },
    toggleSubfeatures(feature) {
      if (feature.subfeatures) {
        this.$set(this.openSubfeatures, feature.title, !this.openSubfeatures[feature.title])
      }
    },
    isSubfeatureOpen(feature) {
      return this.openSubfeatures[feature.title]
    }
  }
}
</script>


<style scoped>
.siakad-page {
  font-family: 'Poppins', sans-serif;
  background-color: #f8faff;
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
  background-color: #16300c;
  color: #fff;
  border: none;
  padding: 12px 28px;
  font-size: 1rem;
  font-weight: 600;
  border-radius: 8px;
  transition: 0.3s ease;
}

.btn-cta:hover {
  background-color: #0a7366;
}

.hero-image {
  max-width: 100%;
  height: auto;
  opacity: 0.9;
}
.features-section {
  display: flex;
  justify-content: center;
  gap: 20px;
  flex-wrap: wrap;
  padding: 40px 20px;
  background: #f8f9fb;
}

.feature-container {
  flex: 1 1 300px;
  max-width: 350px;
  background: #fff;
  border: 2px solid #e5e8ec;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.05);
  transition: all 0.3s ease;
  display: flex;
  flex-direction: column;
  align-items: stretch;
  /* * Ini adalah perbaikan utamanya
  * Membuat setiap kolom memiliki tinggi mandiri
  */
  align-self: flex-start; 
}

.hr-border{
  border: 1px solid #000000;
  padding: 0;
  margin-bottom:20px ;
}
.feature-container:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 24px rgba(0,0,0,0.1);
}

.feature-head {
  padding: 20px;
  /* border-bottom: 1px solid #e5e8ec; */
  text-align: center;
}

.feature-head h2.feature {
  font-size: 25px;
  font-weight: 600;
  margin-bottom: 5px;
  color: #222;
  margin-bottom: 10px ;
}

.feature-head p {
  font-size: 0.9rem;
  color: #666;
  margin-bottom: 10px;
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
/* Gaya untuk daftar sub-fitur */
.sub-features-list {
  list-style: none;
  padding-left: 50px; /* Indentasi agar terlihat sebagai sub-item */
  padding-top: 10px;
  border-top: 1px dashed #e0e0e0;
  margin-top: 10px;
}

.sub-features-list li {
  padding: 5px 0;
}

.sub-feature-item i {
  font-size: 0.8rem !important;
  margin-right: 10px;
  color: #6c757d;
   line-height: 1.5; /* Sesuaikan nilai ini */
   text-align: center;
}

.sub-feature-item h5 {
  font-size: 0.85rem;
  font-weight: 500;
  color: #555;
  margin: 0;
   line-height: 1.5; /* Sesuaikan nilai ini */
}

/* Transisi untuk ikon panah */
.toggle-icon {
  transition: transform 0.3s ease;
}

.toggle-icon.rotated {
  transform: rotate(90deg);
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


.cta-section {
  background: linear-gradient(45deg, #263f28 0%, #28451e 100%);
  color: #ffffff;
  font-weight: bold;
  text-align: center;
}
.cta-section .btn {
  background-color: #ffffff;
  color: #0c3b0e;
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
