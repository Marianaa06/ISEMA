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
      <div class="feature-container" style="border-color: darkgreen; border: 2px solid darkgreen;">
        <div class="feature-head">
          <h2 class="feature text-center" style="color: darkgreen;">Fitur SIAKAD Admin</h2>
          <p>Membantu Admin untuk mengelola akademik</p>
          <hr class="hr-border" />
          <ul class="features-item">
            <li
              class="list-feature d-flex"
              v-for="(feature, index) in limitedFeaturesAdmin"
              :key="'admin-' + (feature.title || index)"
            >
              <i :class="['mb-1','fa-1x', feature.icon]"></i>
              <h5 class="mt-1 mb-1">{{ feature.title }}</h5>
            </li>
          </ul>
        </div>
        <div class="see-more-wrapper text-center">
          <button class="see-more-btn" @click="toggleFeatures('admin')">
            {{ showAllAdmin ? 'See less' : 'See more' }}
          </button>
        </div>
      </div>

      <!-- DOSEN -->
      <div class="feature-container" style="border-color: darkmagenta; border: 2px solid darkmagenta;">
        <div class="feature-head">
          <h2 class="feature text-center" style="color: darkmagenta;">Fitur SIAKAD Dosen</h2>
          <p>Membantu Dosen mengelola akademik</p>
          <hr class="hr-border" />
          <ul class="features-item">
            <li
              class="list-feature d-flex"
              v-for="(feature, index) in limitedFeaturesDosen"
              :key="'dosen-' + (feature.title || index)"
            >
              <i :class="['mb-1','fa-1x', feature.icon]"></i>
              <h5 class="mt-1 mb-1">{{ feature.title }}</h5>
            </li>
          </ul>
        </div>
        <div class="see-more-wrapper text-center">
          <button class="see-more-btn" @click="toggleFeatures('dosen')">
            {{ showAllDosen ? 'See less' : 'See more' }}
          </button>
        </div>
      </div>

      <!-- MAHASISWA -->
      <div class="feature-container" style="border-color: darkslateblue; border: 2px solid darkslateblue;">
        <div class="feature-head">
          <h2 class="feature text-center" style="color: darkslateblue;">Fitur SIAKAD Mahasiswa</h2>
          <p>Membantu Mahasiswa mengelola akademik</p>
          <hr class="hr-border" />
          <ul class="features-item">
            <li
              class="list-feature d-flex"
              v-for="(feature, index) in limitedFeaturesMahasiswa"
              :key="'mahasiswa-' + (feature.title || index)"
            >
              <i :class="['mb-1','fa-1x', feature.icon]"></i>
              <h5 class="mt-1 mb-1">{{ feature.title }}</h5>
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

<!-- <script>
export default {
  name: 'SiakadComponent',
  data() {
    return {
featuresadmin: [
  {
    title: 'Mahasiswa',
    // description: 'Kelola data mahasiswa secara lengkap, mulai dari biodata hingga riwayat akademik.',
    icon: 'fas fa-user-graduate'
  },
  {
    title: 'Pegawai',
    // description: 'Atur data dosen dan tenaga kependidikan termasuk jabatan dan riwayat kerja.',
    icon: 'fas fa-users-cog'
  },
  {
    title: 'Kegiatan',
    // description: 'Manajemen kegiatan akademik seperti seminar, pelatihan, dan organisasi kemahasiswaan.',
    icon: 'fas fa-calendar-check',
    subfeatures: [
      { title: 'Kegiatan Akademik', icon: 'fas fa-university' },
      { title: 'Kalender Akademik', icon: 'fas fa-calendar-alt' }
    ]
  },
  {
    title: 'Data Kurikulum',
    // description: 'Mengelola mata kuliah, kurikulum prodi, prasyarat, ekivalensi, dan aturan akademik lainnya.',
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
    // description: 'Pengaturan kelas kuliah, jadwal, tahun ajaran, dan monitoring ruang.',
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
    // description: 'Pengelolaan administrasi akademik seperti transfer dan pengajuan status mahasiswa.',
    icon: 'fas fa-file-alt',
    subfeatures: [
      { title: 'Transfer Mahasiswa', icon: 'fas fa-random' },
      { title: 'Pengajuan Status Mahasiswa', icon: 'fas fa-user-edit' }
    ]
  },
  {
    title: 'Proposal/Tugas Akhir',
    // description: 'Manajemen proposal penelitian dan tugas akhir mahasiswa.',
    icon: 'fas fa-file-signature',
    subfeatures: [
      { title: 'Daftar Proposal', icon: 'fas fa-file-alt' },
      { title: 'Daftar Tugas Akhir', icon: 'fas fa-scroll' }
    ]
  },
  {
    title: 'Data Yudisium',
    // description: 'Pengaturan data yudisium, penomoran dokumen, dan periode pelaksanaan.',
    icon: 'fas fa-certificate',
    subfeatures: [
      { title: 'Daftar Yudisium', icon: 'fas fa-list' },
      { title: 'Penomoran Dokumen', icon: 'fas fa-sort-numeric-up' },
      { title: 'Periode Yudisium', icon: 'fas fa-calendar-check' }
    ]
  },
  {
    title: 'Kegiatan Pendukung',
    // description: 'Pengelolaan kegiatan akademik tambahan dan kalender kampus.',
    icon: 'fas fa-calendar-alt',
    subfeatures: [
      { title: 'Kegiatan Akademik', icon: 'fas fa-users' },
      { title: 'Kalender Akademik', icon: 'fas fa-calendar-alt' }
    ]
  },
  {
    title: 'Data Wisuda',
    // description: 'Pengaturan periode wisuda dan daftar peserta yang lulus.',
    icon: 'fas fa-user-graduate',
    subfeatures: [
      { title: 'Periode Wisuda', icon: 'fas fa-calendar-day' },
      { title: 'Peserta Wisuda', icon: 'fas fa-user-friends' }
    ]
  },
  {
    title: 'Institut',
    // description: 'Pengaturan profil institusi termasuk logo, nama kampus, dan informasi resmi lainnya.',
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
    // description: 'Kelola program studi, kurikulum, mata kuliah, dan jenjang pendidikan.',
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
    // description: 'Manajemen identitas kampus dan unit akademik secara administratif.',
    icon: 'fas fa-id-card-alt',
    subfeatures: [
      { title: 'Agama', icon: 'fas fa-praying-hands' },
      { title: 'Pekerjaan', icon: 'fas fa-briefcase' },
      { title: 'Pendapatan', icon: 'fas fa-money-bill-wave' }
    ]
  },
  {
    title: 'Tugas Akhir',
    // description: 'Monitoring dan pengelolaan proses skripsi, tesis, dan disertasi.',
    icon: 'fas fa-scroll',
    subfeatures: [
      { title: 'Pengaturan Tugas Akhir', icon: 'fas fa-cogs' },
      { title: 'Unsur Nilai', icon: 'fas fa-percentage' },
      { title: 'Pengaturan Nilai', icon: 'fas fa-cog' }
    ]
  },
  {
    title: 'Data Mahasiswa',
    // description: 'Kelola seluruh database mahasiswa aktif dan non-aktif dengan mudah.',
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
    // description: 'Pengelolaan data pegawai untuk kepentingan administrasi dan akademik.',
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
    // description: 'Manajemen wilayah domisili mahasiswa untuk keperluan statistik dan zonasi.',
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
    // description: 'Penyimpanan data riwayat aktivitas dan dokumen dosen secara digital.',
    icon: 'fas fa-archive',
    subfeatures: [
      { title: 'Rekap Jadwal Mengajar Dosen', icon: 'fas fa-clipboard' }
    ]
  },
  {
    title: 'Arsip Mahasiswa',
    // description: 'Manajemen dokumen penting mahasiswa: ijazah, sertifikat, transkrip.',
    icon: 'fas fa-folder-open',
    subfeatures: [
      { title: 'KHS', icon: 'fas fa-file-alt' },
      { title: 'KRS', icon: 'fas fa-file-alt' },
      { title: 'Daftar Mahasiswa Keseluruhan', icon: 'fas fa-users' },
      { title: 'Daftar Mahasiswa Per Periode', icon: 'fas fa-user-clock' },
      { title: 'Daftar Yudisium', icon: 'fas fa-list' }
    ]
  },
  {
    title: 'Periode Akademik',
    description: 'Atur semester aktif dan jadwal akademik tahunan kampus.',
    icon: 'fas fa-calendar-alt'
  }
],
featuresdosen: [
  {
    title: 'Daftar Proposal',
    description: 'Kelola pengajuan proposal mahasiswa secara digital, termasuk pemantauan status dan komentar pembimbing.',
    icon: 'fas fa-file-signature'
  },
  {
    title: 'Daftar Skripsi',
    // description: 'Pantau seluruh proses skripsi dari pendaftaran, bimbingan, hingga penilaian akhir secara efisien.',
    icon: 'fas fa-book-open'
  },
  {
    title: 'Jadwal Sidang',
    // description: 'Atur dan tinjau jadwal sidang mahasiswa secara otomatis dan terintegrasi dengan kalender akademik.',
    icon: 'fas fa-calendar-check'
  },
  {
    title: 'Kelas Saya',
    // description: 'Kelola perkuliahan Anda dengan daftar kelas, presensi, dan materi yang terdokumentasi rapi.',
    icon: 'fas fa-chalkboard-teacher'
  },
  {
    title: 'Kalender Akademik',
    // description: 'Lihat kegiatan akademik, ujian, dan cuti bersama dalam tampilan kalender interaktif.',
    icon: 'fas fa-calendar-alt'
  },
  {
    title: 'RPS',
    // description: 'Unggah dan perbarui Rencana Pembelajaran Semester (RPS) secara daring dengan format yang sesuai standar.',
    icon: 'fas fa-tasks'
  }
],
featuresmahasiswa: [
  {
    title: 'Dashboard Mahasiswa',
    // description: 'Pusat kontrol mahasiswa untuk memantau akademik, keuangan, dan kegiatan secara real-time.',
    // metadata: 'Info Terintegrasi',
    // subDescription: 'KRS, KHS, Transkrip, Pembayaran'
  },
  {
    title: 'Biodata',
    // description: 'Update dan kelola data pribadi, kontak darurat, serta informasi penting lainnya.',
    // metadata: 'Editable & Tersimpan Aman',
    // subDescription: 'Nama, Alamat, NIK, Kontak'
  },
  {
    title: 'Kalender Akademik',
    // description: 'Lihat jadwal akademik lengkap mulai dari perkuliahan hingga cuti dan ujian.',
    // metadata: 'Terjadwal & Terupdate',
    // subDescription: 'Kuliah, Ujian, Libur, Cuti'
  },
  {
    title: 'Kelas Saya',
    // description: 'Pantau jadwal kelas, dosen pengajar, materi perkuliahan, dan presensi.',
    // metadata: 'Tersinkronisasi Otomatis',
    // subDescription: 'Daftar Mata Kuliah & Absensi'
  },
  {
    title: 'KRS',
    // description: 'Ambil mata kuliah sesuai semester aktif dan kuota kelas secara mandiri.',
    // metadata: 'Pengisian Mandiri',
    // subDescription: 'Mata Kuliah, Syarat, Validasi'
  },
  {
    title: 'Kurikulum Program Studi',
    // description: 'Lihat struktur kurikulum program studi lengkap dengan sks dan prasyaratnya.',
    // metadata: 'Struktur Akademik',
    // subDescription: 'Daftar MK, Semester, SKS'
  },
  {
    title: 'Transkrip Nilai',
    // description: 'Akses nilai lengkap seluruh semester dan rekap IPK secara otomatis.',
    // metadata: 'Akurat & Transparan',
    // subDescription: 'Nilai Semester & IPK'
  },
  {
    title: 'Daftar Pengajuan',
    // description: 'Lihat semua riwayat pengajuan surat, cuti, dan permohonan akademik lainnya.',
    // metadata: 'Riwayat Lengkap',
    // subDescription: 'Surat Aktif, Cuti, Validasi'
  },
  {
    title: 'Formulir Pengajuan',
    // description: 'Isi dan ajukan berbagai keperluan administratif kampus secara digital.',
    // metadata: 'Form Online',
    // subDescription: 'Keterangan, Cuti, Beasiswa'
  },
  {
    title: 'Proposal',
    // description: 'Ajukan proposal kegiatan, penelitian, atau tugas akhir dengan sistem pelacakan status.',
    // metadata: 'Tracking Proposal',
    // subDescription: 'Status, Catatan, Revisi'
  },
  {
    title: 'Tugas Akhir',
    // description: 'Kelola proses tugas akhir mulai dari bimbingan, unggah dokumen, hingga sidang.',
    // metadata: 'Monitoring Lengkap',
    // subDescription: 'Bimbingan, Upload, Nilai'
  }
],
selectedFeature: {},
    showAll: false
}
},
 computed: {
    limitedFeatures() {
      return this.showAll ? this.featuresadmin : this.featuresadmin.slice(0, 7);
    },
      limitedFeaturesdosen() {
      return this.showAll ? this.featuresdosen : this.featuresdosen.slice(0, 7);
    }
  },
methods: {
      toggleFeatures() {
      this.showAll = !this.showAll;
    },

}



};
</script> -->

<script>
export default {
  name: 'SiakadComponent',
  data() {
    return {
      // isi data lengkapmu di sini
featuresadmin: [
  {
    title: 'Mahasiswa',
    // description: 'Kelola data mahasiswa secara lengkap, mulai dari biodata hingga riwayat akademik.',
    icon: 'fas fa-user-graduate'
  },
  {
    title: 'Pegawai',
    // description: 'Atur data dosen dan tenaga kependidikan termasuk jabatan dan riwayat kerja.',
    icon: 'fas fa-users-cog'
  },
  {
    title: 'Kegiatan',
    // description: 'Manajemen kegiatan akademik seperti seminar, pelatihan, dan organisasi kemahasiswaan.',
    icon: 'fas fa-calendar-check',
    subfeatures: [
      { title: 'Kegiatan Akademik', icon: 'fas fa-university' },
      { title: 'Kalender Akademik', icon: 'fas fa-calendar-alt' }
    ]
  },
  {
    title: 'Data Kurikulum',
    // description: 'Mengelola mata kuliah, kurikulum prodi, prasyarat, ekivalensi, dan aturan akademik lainnya.',
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
    // description: 'Pengaturan kelas kuliah, jadwal, tahun ajaran, dan monitoring ruang.',
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
    // description: 'Pengelolaan administrasi akademik seperti transfer dan pengajuan status mahasiswa.',
    icon: 'fas fa-file-alt',
    subfeatures: [
      { title: 'Transfer Mahasiswa', icon: 'fas fa-random' },
      { title: 'Pengajuan Status Mahasiswa', icon: 'fas fa-user-edit' }
    ]
  },
  {
    title: 'Proposal/Tugas Akhir',
    // description: 'Manajemen proposal penelitian dan tugas akhir mahasiswa.',
    icon: 'fas fa-file-signature',
    subfeatures: [
      { title: 'Daftar Proposal', icon: 'fas fa-file-alt' },
      { title: 'Daftar Tugas Akhir', icon: 'fas fa-scroll' }
    ]
  },
  {
    title: 'Data Yudisium',
    // description: 'Pengaturan data yudisium, penomoran dokumen, dan periode pelaksanaan.',
    icon: 'fas fa-certificate',
    subfeatures: [
      { title: 'Daftar Yudisium', icon: 'fas fa-list' },
      { title: 'Penomoran Dokumen', icon: 'fas fa-sort-numeric-up' },
      { title: 'Periode Yudisium', icon: 'fas fa-calendar-check' }
    ]
  },
  {
    title: 'Kegiatan Pendukung',
    // description: 'Pengelolaan kegiatan akademik tambahan dan kalender kampus.',
    icon: 'fas fa-calendar-alt',
    subfeatures: [
      { title: 'Kegiatan Akademik', icon: 'fas fa-users' },
      { title: 'Kalender Akademik', icon: 'fas fa-calendar-alt' }
    ]
  },
  {
    title: 'Data Wisuda',
    // description: 'Pengaturan periode wisuda dan daftar peserta yang lulus.',
    icon: 'fas fa-user-graduate',
    subfeatures: [
      { title: 'Periode Wisuda', icon: 'fas fa-calendar-day' },
      { title: 'Peserta Wisuda', icon: 'fas fa-user-friends' }
    ]
  },
  {
    title: 'Institut',
    // description: 'Pengaturan profil institusi termasuk logo, nama kampus, dan informasi resmi lainnya.',
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
    // description: 'Kelola program studi, kurikulum, mata kuliah, dan jenjang pendidikan.',
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
    // description: 'Manajemen identitas kampus dan unit akademik secara administratif.',
    icon: 'fas fa-id-card-alt',
    subfeatures: [
      { title: 'Agama', icon: 'fas fa-praying-hands' },
      { title: 'Pekerjaan', icon: 'fas fa-briefcase' },
      { title: 'Pendapatan', icon: 'fas fa-money-bill-wave' }
    ]
  },
  {
    title: 'Tugas Akhir',
    // description: 'Monitoring dan pengelolaan proses skripsi, tesis, dan disertasi.',
    icon: 'fas fa-scroll',
    subfeatures: [
      { title: 'Pengaturan Tugas Akhir', icon: 'fas fa-cogs' },
      { title: 'Unsur Nilai', icon: 'fas fa-percentage' },
      { title: 'Pengaturan Nilai', icon: 'fas fa-cog' }
    ]
  },
  {
    title: 'Data Mahasiswa',
    // description: 'Kelola seluruh database mahasiswa aktif dan non-aktif dengan mudah.',
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
    // description: 'Pengelolaan data pegawai untuk kepentingan administrasi dan akademik.',
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
    // description: 'Manajemen wilayah domisili mahasiswa untuk keperluan statistik dan zonasi.',
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
    // description: 'Penyimpanan data riwayat aktivitas dan dokumen dosen secara digital.',
    icon: 'fas fa-archive',
    subfeatures: [
      { title: 'Rekap Jadwal Mengajar Dosen', icon: 'fas fa-clipboard' }
    ]
  },
  {
    title: 'Arsip Mahasiswa',
    // description: 'Manajemen dokumen penting mahasiswa: ijazah, sertifikat, transkrip.',
    icon: 'fas fa-folder-open',
    subfeatures: [
      { title: 'KHS', icon: 'fas fa-file-alt' },
      { title: 'KRS', icon: 'fas fa-file-alt' },
      { title: 'Daftar Mahasiswa Keseluruhan', icon: 'fas fa-users' },
      { title: 'Daftar Mahasiswa Per Periode', icon: 'fas fa-user-clock' },
      { title: 'Daftar Yudisium', icon: 'fas fa-list' }
    ]
  },
  {
    title: 'Periode Akademik',
    description: 'Atur semester aktif dan jadwal akademik tahunan kampus.',
    icon: 'fas fa-calendar-alt'
  }
],
featuresdosen: [
  {
    title: 'Daftar Proposal',
    description: 'Kelola pengajuan proposal mahasiswa secara digital, termasuk pemantauan status dan komentar pembimbing.',
    icon: 'fas fa-file-signature'
  },
  {
    title: 'Daftar Skripsi',
    // description: 'Pantau seluruh proses skripsi dari pendaftaran, bimbingan, hingga penilaian akhir secara efisien.',
    icon: 'fas fa-book-open'
  },
  {
    title: 'Jadwal Sidang',
    // description: 'Atur dan tinjau jadwal sidang mahasiswa secara otomatis dan terintegrasi dengan kalender akademik.',
    icon: 'fas fa-calendar-check'
  },
  {
    title: 'Kelas Saya',
    // description: 'Kelola perkuliahan Anda dengan daftar kelas, presensi, dan materi yang terdokumentasi rapi.',
    icon: 'fas fa-chalkboard-teacher'
  },
  {
    title: 'Kalender Akademik',
    // description: 'Lihat kegiatan akademik, ujian, dan cuti bersama dalam tampilan kalender interaktif.',
    icon: 'fas fa-calendar-alt'
  },
  {
    title: 'RPS',
    // description: 'Unggah dan perbarui Rencana Pembelajaran Semester (RPS) secara daring dengan format yang sesuai standar.',
    icon: 'fas fa-tasks'
  }
],
featuresmahasiswa: [
  {
    title: 'Dashboard Mahasiswa',
    // description: 'Pusat kontrol mahasiswa untuk memantau akademik, keuangan, dan kegiatan secara real-time.',
    // metadata: 'Info Terintegrasi',
    // subDescription: 'KRS, KHS, Transkrip, Pembayaran'
  },
  {
    title: 'Biodata',
    // description: 'Update dan kelola data pribadi, kontak darurat, serta informasi penting lainnya.',
    // metadata: 'Editable & Tersimpan Aman',
    // subDescription: 'Nama, Alamat, NIK, Kontak'
  },
  {
    title: 'Kalender Akademik',
    // description: 'Lihat jadwal akademik lengkap mulai dari perkuliahan hingga cuti dan ujian.',
    // metadata: 'Terjadwal & Terupdate',
    // subDescription: 'Kuliah, Ujian, Libur, Cuti'
  },
  {
    title: 'Kelas Saya',
    // description: 'Pantau jadwal kelas, dosen pengajar, materi perkuliahan, dan presensi.',
    // metadata: 'Tersinkronisasi Otomatis',
    // subDescription: 'Daftar Mata Kuliah & Absensi'
  },
  {
    title: 'KRS',
    // description: 'Ambil mata kuliah sesuai semester aktif dan kuota kelas secara mandiri.',
    // metadata: 'Pengisian Mandiri',
    // subDescription: 'Mata Kuliah, Syarat, Validasi'
  },
  {
    title: 'Kurikulum Program Studi',
    // description: 'Lihat struktur kurikulum program studi lengkap dengan sks dan prasyaratnya.',
    // metadata: 'Struktur Akademik',
    // subDescription: 'Daftar MK, Semester, SKS'
  },
  {
    title: 'Transkrip Nilai',
    // description: 'Akses nilai lengkap seluruh semester dan rekap IPK secara otomatis.',
    // metadata: 'Akurat & Transparan',
    // subDescription: 'Nilai Semester & IPK'
  },
  {
    title: 'Daftar Pengajuan',
    // description: 'Lihat semua riwayat pengajuan surat, cuti, dan permohonan akademik lainnya.',
    // metadata: 'Riwayat Lengkap',
    // subDescription: 'Surat Aktif, Cuti, Validasi'
  },
  {
    title: 'Formulir Pengajuan',
    // description: 'Isi dan ajukan berbagai keperluan administratif kampus secara digital.',
    // metadata: 'Form Online',
    // subDescription: 'Keterangan, Cuti, Beasiswa'
  },
  {
    title: 'Proposal',
    // description: 'Ajukan proposal kegiatan, penelitian, atau tugas akhir dengan sistem pelacakan status.',
    // metadata: 'Tracking Proposal',
    // subDescription: 'Status, Catatan, Revisi'
  },
  {
    title: 'Tugas Akhir',
    // description: 'Kelola proses tugas akhir mulai dari bimbingan, unggah dokumen, hingga sidang.',
    // metadata: 'Monitoring Lengkap',
    // subDescription: 'Bimbingan, Upload, Nilai'
  }
],
      showAllAdmin: false,
      showAllDosen: false,
      showAllMahasiswa: false
    };
  },
  computed: {
    limitedFeaturesAdmin() {
      return this.showAllAdmin ? this.featuresadmin : this.featuresadmin.slice(0, 7);
    },
    limitedFeaturesDosen() {
      return this.showAllDosen ? this.featuresdosen : this.featuresdosen.slice(0, 7);
    },
    limitedFeaturesMahasiswa() {
      return this.showAllMahasiswa ? this.featuresmahasiswa : this.featuresmahasiswa.slice(0, 7);
    }
  },
  methods: {
    toggleFeatures(group) {
      if (group === 'admin') {
        this.showAllAdmin = !this.showAllAdmin;
      } else if (group === 'dosen') {
        this.showAllDosen = !this.showAllDosen;
      } else if (group === 'mahasiswa') {
        this.showAllMahasiswa = !this.showAllMahasiswa;
      }
    }
  }
};
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
  background-color: #c74319;
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
  border: 1px solid #e5e8ec;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.05);
  transition: all 0.3s ease;
  display: flex;
  flex-direction: column;
  align-items: stretch;
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
  border-bottom: 1px solid #e5e8ec;
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

/* Daftar fitur */
.features-item {
  list-style: none;
  margin: 0;
}

.list-feature {
  display: flex;
  align-items: flex-start;
  gap: 10px;
  padding: 10px 0;
  padding-left: 30px;
}

.list-feature:last-child {
  border-bottom: none;
}

.list-feature i {
  color: #000000;
  font-size: 1rem;
  margin-top: 4px;
}

.list-feature h5 {
  font-size: 0.95rem;
  margin: 0;
  font-weight: 400;
  color: #333;
  text-align: left;
  min-width: 200px;
}
.see-more-wrapper {
  margin-top: 15px;
}

.see-more-btn {
  background-color: darkgreen;  /* warna dasar */
  color: #fff;                  /* warna tulisan */
  border: none;                 /* hilangkan border */
  padding: 10px 20px;           /* ruang dalam */
  border-radius: 25px;          /* bikin rounded */
  font-size: 14px;
  font-weight: bold;
  cursor: pointer;              /* pointer pas hover */
  transition: all 0.3s ease;    /* animasi halus */
}

.see-more-btn:hover {
  background-color: #0b5c0b;    /* warna saat hover */
  transform: translateY(-2px);  /* sedikit naik */
  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

.see-more-btn:active {
  transform: translateY(0);     /* kembali normal saat ditekan */
  box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}

/*  
.section-title{
  font-size: 40px;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;
  margin-top: 50px;
  color: #57075e;
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
} */

.cta-section {
  background: linear-gradient(45deg, #8b8b8b 0%, #8c8c8c 100%);
  color: #023516;
  font-weight: bold;
  text-align: center;
}
.cta-section .btn {
  background-color: #023516;
  color: #fff;
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
/* .fitur-title {
  font-size: 1.8rem;
  font-weight: 700;
  color: #075E54;
}

.modal-content {
  background-color: #fff;
  transition: all 0.3s ease;
}

.modal-header {
  padding: 1rem 1.5rem;
  background-color: green;
}
.fitur-card {
  border-radius: 16px;
  background-color: #fff;
  border: 2px solid  #075E54;;
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
  border: 2px solid #57075e;;
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
} */


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
