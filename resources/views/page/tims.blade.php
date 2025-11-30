@extends('layout.layout')
@section('content')

    <section class="team-section">
        <h2>Tim Kami</h2>
        <p>Kenali orang-orang hebat di balik kesuksesan ISEMA</p>

        <div class="team-grid">
            <div class="team-member">
                <img src="https://picsum.photos/300/260?random=1" alt="CEO" class="team-photo">
                <div class="team-info">
                    <h3 class="member-name">Amanda Putri</h3>
                    <p class="member-role">CEO & Founder</p>
                    <p class="member-bio">Pemimpin utama dengan visi besar untuk ISEMA.</p>
                </div>
            </div>

            <div class="team-member">
                <img src="https://picsum.photos/300/260?random=2" alt="Developer" class="team-photo">
                <div class="team-info">
                    <h3 class="member-name">Rizal Ahmad</h3>
                    <p class="member-role">Lead Developer</p>
                    <p class="member-bio">Membangun sistem penjualan yang cepat dan handal.</p>
                </div>
            </div>

            <div class="team-member">
                <img src="https://picsum.photos/300/260?random=3" alt="Marketing" class="team-photo">
                <div class="team-info">
                    <h3 class="member-name">Sarah Wijaya</h3>
                    <p class="member-role">Marketing Manager</p>
                    <p class="member-bio">Membawa strategi pemasaran kreatif ke tingkat selanjutnya.</p>
                </div>
            </div>

            <div class="team-member">
                <img src="https://picsum.photos/300/260?random=4" alt="UI Designer" class="team-photo">
                <div class="team-info">
                    <h3 class="member-name">Ilham Pratama</h3>
                    <p class="member-role">UI/UX Designer</p>
                    <p class="member-bio">Desain antarmuka yang elegan dan ramah pengguna.</p>
                </div>
            </div>

            <div class="team-member">
                <img src="https://picsum.photos/300/260?random=5" alt="Support" class="team-photo">
                <div class="team-info">
                    <h3 class="member-name">Citra Lestari</h3>
                    <p class="member-role">Customer Support</p>
                    <p class="member-bio">Memberikan bantuan cepat dan ramah kepada pelanggan.</p>
                </div>
            </div>

            <div class="team-member">
                <img src="https://picsum.photos/300/260?random=6" alt="Keuangan" class="team-photo">
                <div class="team-info">
                    <h3 class="member-name">Andi Kurniawan</h3>
                    <p class="member-role">Finance Manager</p>
                    <p class="member-bio">Menangani keuangan dengan transparansi dan akurasi.</p>
                </div>
            </div>

            <div class="team-member">
                <img src="https://picsum.photos/300/260?random=7" alt="Logistik" class="team-photo">
                <div class="team-info">
                    <h3 class="member-name">Maya Sari</h3>
                    <p class="member-role">Logistics Coordinator</p>
                    <p class="member-bio">Mengatur pengiriman dan stok dengan efisiensi tinggi.</p>
                </div>
            </div>

            <div class="team-member">
                <img src="https://picsum.photos/300/260?random=8" alt="Analis Data" class="team-photo">
                <div class="team-info">
                    <h3 class="member-name">Dimas Nugroho</h3>
                    <p class="member-role">Data Analyst</p>
                    <p class="member-bio">Mengolah data untuk strategi bisnis yang lebih tajam.</p>
                </div>
            </div>
        </div>
    </section>



    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #f7f3fc;
        }
        
        .team-section {
            padding: 150px 20px;
            background-color: #ede7f6;
            /* ungu pastel kalem */
            text-align: center;
        }

        .team-section h2 {
            font-size: 42px;
            font-weight: 700;
            color: #5e35b1;
            margin-bottom: 10px;
        }

        .team-section p {
            font-size: 18px;
            color: #7e57c2;
            margin-bottom: 50px;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 10px;
        }

        .team-member {
            background: white;
            color: #333;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .team-member:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.1);
        }

        .team-photo {
            width: 100%;
            height: 260px;
            object-fit: cover;
        }

        .team-info {
            padding: 20px;
        }

        .member-name {
            font-size: 20px;
            font-weight: 600;
            margin: 10px 0 5px;
        }

        .member-role {
            font-size: 14px;
            font-weight: 500;
            color: #8e24aa;
            margin-bottom: 10px;
        }

        .member-bio {
            font-size: 14px;
            color: #555;
        }

        @media (max-width: 768px) {
            .team-section h2 {
                font-size: 32px;
            }
        }
    </style>

@endsection