@extends('layout.layout')
@section('content')

  <header>
    <h1>Kebijakan Privasi</h1>
    <p>ISEMA berkomitmen untuk menjaga dan melindungi data pribadi Anda saat menggunakan layanan kami.</p>
  </header>

  <div class="container">
    <div class="section">
      <p>Halaman ini menjelaskan bagaimana kami mengumpulkan, menggunakan, menyimpan, dan melindungi data Anda.</p>
    </div>

    <div class="section">
      <h2>1. Informasi yang Dikumpulkan</h2>
      <ul>
        <li>Nama, email, nomor telepon, alamat</li>
        <li>Riwayat transaksi dan metode pembayaran</li>
        <li>Alamat IP, perangkat, dan aktivitas pengguna</li>
      </ul>
    </div>

    <div class="section">
      <h2>2. Penggunaan Informasi</h2>
      <ul>
        <li>Memproses dan mengirim pesanan Anda</li>
        <li>Memberikan dukungan dan layanan pelanggan</li>
        <li>Mengirim notifikasi dan promo (jika disetujui)</li>
      </ul>
    </div>

    <div class="section">
      <h2>3. Keamanan Data</h2>
      <p>Kami menggunakan sistem enkripsi dan kontrol akses ketat untuk melindungi informasi pribadi Anda dari akses tidak sah.</p>
    </div>

    <div class="section">
      <h2>4. Pihak Ketiga</h2>
      <p>Kami hanya membagikan data dengan mitra terpercaya untuk pengiriman dan pembayaran. Tidak dijual atau disebarluaskan.</p>
    </div>

    <div class="section">
      <h2>5. Hak Pengguna</h2>
      <ul>
        <li>Mengakses dan memperbarui informasi pribadi</li>
        <li>Meminta penghapusan data</li>
        <li>Menolak promosi kapan saja</li>
      </ul>
    </div>

    <div class="section">
      <h2>6. Cookie</h2>
      <p>ISEMA menggunakan cookie untuk menyimpan preferensi pengguna dan meningkatkan performa situs. Anda dapat menonaktifkan cookie di pengaturan browser.</p>
    </div>

    <div class="section">
      <h2>7. Perubahan Kebijakan</h2>
      <p>Kami dapat memperbarui kebijakan ini secara berkala. Perubahan signifikan akan diinformasikan melalui halaman ini.</p>
    </div>

    <div class="section">
      <h2>8. Hubungi Kami</h2>
      <p>Jika Anda memiliki pertanyaan, silakan hubungi kami di <strong>kontak@isema.co.id</strong>.</p>
    </div>
  </div>


  <style>
    :root {
      --primary: #7e57c2;
      --primary-soft: #f3efff;
      --text-dark: #2b2b2b;
      --text-light: #666;
    }

    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background: linear-gradient(to bottom, #f3efff, #ffffff);
      color: var(--text-dark);
      line-height: 1.8;
    }

    header {
      background: #ede7f6;
      padding: 150px 20px;
      text-align: center;
    }

    header h1 {
      font-size: 42px;
      /* color: var(--primary); */
      color:  #7e57c2;
      margin-bottom: 10px;
    }

    header p {
      font-size: 18px;
      color: var(--text-light);
      max-width: 700px;
      margin: 0 auto;
    }

    .container {
      max-width: 900px;
      margin: 0 auto;
      padding: 40px 30px 60px;
    }

    .section {
      margin-bottom: 40px;
    }

    .section h2 {
      font-size: 20px;
      color: var(--primary);
      margin-bottom: 10px;
      border-left: 4px solid var(--primary);
      padding-left: 12px;
    }

    .section p, .section ul {
      font-size: 15px;
      color: var(--text-light);
    }



    @media (max-width: 768px) {
      header h1 {
        font-size: 30px;
      }

      .container {
        padding: 30px 20px;
      }
    }
  </style>

@endsection