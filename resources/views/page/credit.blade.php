@extends('layout.layout')
@section('content')

<section class="credit-container">
    <div class="credit-header">
        <h2>Credit & Penghargaan</h2>
        <p>Kami menghargai setiap kontribusi yang membangun Techno Celebes</p>
    </div>

    <div class="credit-columns">
        <div class="credit-box">
            <h3 class="credit-title">Kontributor Tim ISEMA</h3>
            <ul class="credit-list">
                <li>Ilham Pratama – Desain UI/UX (2024 – 2025)</li>
                <li>Rizal Ahmad – Backend & Frontend (2023 – 2025)</li>
                <li>Ani Rahmawati – Dokumentasi & Konten (2024)</li>
                <li>Dina Putri – Marketing & Komunikasi (2025)</li>
                <li>Yusuf Ali – Quality Assurance (2025)</li>
                <li>Farhan Hadi – Project Management</li>
                <li>Nadya Salsabila – Riset Pengguna</li>
                <li>Indra Kurniawan – DevOps</li>
                <li>Agus Saputra – Integrasi API</li>
                <li>Shinta Ayu – Legal & Compliance</li>
                <li>Bagus Firmansyah – Maintenance Server</li>
                <li>Retno Wulandari – Customer Support</li>
                <li>Andi Maulana – Pelatihan Pengguna</li>
                <li>Siti Nurhaliza – Data Analyst</li>
                <li>Reza Pratama – Test Automation</li>
            </ul>
        </div>

        <div class="credit-box">
            <h3 class="credit-title">Kontributor Teknologi & Asset</h3>
            <ul class="credit-list">
                <li>Laravel – Framework backend utama</li>
                <li>Vue.js – Framework frontend modern</li>
                <li>Bootstrap – Sistem grid & UI components</li>
                <li>FontAwesome – Ikon navigasi</li>
                <li>Heroicons – Ikon visual tambahan</li>
                <li>Freepik – Ilustrasi desain</li>
                <li>Unsplash – Gambar bebas lisensi</li>
                <li>Google Fonts – Poppins & Roboto</li>
                <li>Github – Kolaborasi pengembangan</li>
                <li>Figma – Desain antarmuka</li>
                <li>Cloudflare – CDN & Keamanan</li>
                <li>MySQL – Basis data utama</li>
                <li>Postman – Testing API</li>
                <li>DigitalOcean – Hosting VPS</li>
                <li>Canva – Desain cepat untuk konten visual</li>
            </ul>
        </div>
    </div>
</section>

<style>
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background-color: #f4f2fa;
        color: #333;
    }

    .credit-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 150px 20px;
    }

    .credit-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .credit-header h2 {
        font-size: 42px;
        font-weight: 700;
        color: #6a1b9a;
        margin-bottom: 10px;
    }

    .credit-header p {
        font-size: 18px;
        color: #7e57c2;
    }

    .credit-columns {
        display: flex;
        gap: 40px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .credit-box {
        flex: 1 1 400px;
        background: #fff;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
    }

    .credit-title {
        font-size: 22px;
        font-weight: 700;
        color: #8e24aa;
        margin-bottom: 15px;
    }

    .credit-list {
        list-style: none;
        padding-left: 0;
    }

    .credit-list li {
        margin-bottom: 10px;
        color: #555;
        font-size: 15px;
    }

    @media (max-width: 768px) {
        .credit-columns {
            flex-direction: column;
        }

        .credit-header h2 {
            font-size: 30px;
        }
    }
</style>

@endsection
