@extends('layout.layout')
@section('content')

<section class="privacy-hero">
    <div class="hero-content">
        <div class="hero-badge">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd" d="M12.516 2.17a.75.75 0 00-1.032 0 11.209 11.209 0 01-7.877 3.08.75.75 0 00-.722.515A12.74 12.74 0 002.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 01.374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 00-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08zm3.094 8.016a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
            </svg>
            Keamanan & Privasi
        </div>
        <h1>Privacy Policy</h1>
        <p class="hero-subtitle">ISEMA berkomitmen untuk menjaga dan melindungi data pribadi Anda saat menggunakan layanan kami.</p>
        <div class="hero-stats">
            <div class="stat-item">
                <div class="stat-number">100%</div>
                <div class="stat-label">Data Terenkripsi</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">24/7</div>
                <div class="stat-label">Monitoring Sistem</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">0%</div>
                <div class="stat-label">Data Dijual</div>
            </div>
        </div>
    </div>
    <div class="hero-graphic">
        <div class="graphic-circle"></div>
        <div class="graphic-shield">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd" d="M11.484 2.17a.75.75 0 011.032 0 11.209 11.209 0 007.877 3.08.75.75 0 01.722.515 12.74 12.74 0 01.635 3.985c0 5.942-4.064 10.933-9.563 12.348a.749.749 0 01-.374 0C5.314 20.683 1.25 15.692 1.25 9.75c0-1.39.223-2.73.635-3.985a.75.75 0 01.722-.516l.143.001c2.996 0 5.717-1.17 7.734-3.08zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zM12 15a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75v-.008a.75.75 0 00-.75-.75H12z" clip-rule="evenodd" />
            </svg>
        </div>
    </div>
</section>

<div class="privacy-container">
    <div class="privacy-sidebar">
        <div class="sidebar-sticky">
            <h3>Navigasi Kebijakan</h3>
            <nav class="sidebar-nav">
                <a href="#info-collected" class="nav-item active">
                    <span class="nav-icon">1</span>
                    Informasi yang Dikumpulkan
                </a>
                <a href="#info-usage" class="nav-item">
                    <span class="nav-icon">2</span>
                    Penggunaan Informasi
                </a>
                <a href="#data-security" class="nav-item">
                    <span class="nav-icon">3</span>
                    Keamanan Data
                </a>
                <a href="#third-party" class="nav-item">
                    <span class="nav-icon">4</span>
                    Pihak Ketiga
                </a>
                <a href="#user-rights" class="nav-item">
                    <span class="nav-icon">5</span>
                    Hak Pengguna
                </a>
                <a href="#cookies" class="nav-item">
                    <span class="nav-icon">6</span>
                    Cookie
                </a>
                <a href="#policy-changes" class="nav-item">
                    <span class="nav-icon">7</span>
                    Perubahan Kebijakan
                </a>
                <a href="#contact" class="nav-item">
                    <span class="nav-icon">8</span>
                    Hubungi Kami
                </a>
            </nav>
        </div>
    </div>

    <div class="privacy-content">
        <div class="content-intro">
            <p>Halaman ini menjelaskan bagaimana kami mengumpulkan, menggunakan, menyimpan, dan melindungi data Anda dengan transparansi dan tanggung jawab.</p>
        </div>

        <section id="info-collected" class="policy-section">
            <div class="section-header">
                <div class="section-number">01</div>
                <h2>Informasi yang Dikumpulkan</h2>
            </div>
            <div class="section-content">
                <div class="info-grid">
                    <div class="info-card">
                        <div class="info-icon personal"></div>
                        <h4>Data Pribadi</h4>
                        <ul>
                            <li>Nama lengkap</li>
                            <li>Alamat email</li>
                            <li>Nomor telepon</li>
                            <li>Alamat lengkap</li>
                        </ul>
                    </div>
                    <div class="info-card">
                        <div class="info-icon transaction"></div>
                        <h4>Data Transaksi</h4>
                        <ul>
                            <li>Riwayat pembelian</li>
                            <li>Metode pembayaran</li>
                            <li>Detail pesanan</li>
                        </ul>
                    </div>
                    <div class="info-card">
                        <div class="info-icon technical"></div>
                        <h4>Data Teknis</h4>
                        <ul>
                            <li>Alamat IP</li>
                            <li>Jenis perangkat</li>
                            <li>Aktivitas pengguna</li>
                            <li>Log sistem</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="info-usage" class="policy-section">
            <div class="section-header">
                <div class="section-number">02</div>
                <h2>Penggunaan Informasi</h2>
            </div>
            <div class="section-content">
                <div class="usage-list">
                    <div class="usage-item">
                        <div class="usage-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zM6 12a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V12zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 15a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V15zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 18a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V18zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="usage-text">
                            <h4>Memproses Pesanan</h4>
                            <p>Mengelola dan mengirim pesanan Anda dengan efisien</p>
                        </div>
                    </div>
                    <div class="usage-item">
                        <div class="usage-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.804 21.644A6.707 6.707 0 006 21.75a6.721 6.721 0 003.583-1.029c.774.182 1.584.279 2.417.279 5.322 0 9.75-3.97 9.75-9 0-5.03-4.428-9-9.75-9s-9.75 3.97-9.75 9c0 2.409 1.025 4.587 2.674 6.192.232.226.277.428.254.543a3.73 3.73 0 01-.814 1.686.75.75 0 00.44 1.223zM8.25 10.875a1.125 1.125 0 100 2.25 1.125 1.125 0 000-2.25zM10.875 12a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm4.875-1.125a1.125 1.125 0 100 2.25 1.125 1.125 0 000-2.25z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="usage-text">
                            <h4>Dukungan Pelanggan</h4>
                            <p>Memberikan bantuan dan solusi terbaik untuk masalah Anda</p>
                        </div>
                    </div>
                    <div class="usage-item">
                        <div class="usage-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M9.375 3a1.875 1.875 0 000 3.75h1.875v4.5H3.375A1.875 1.875 0 011.5 9.375v-.75c0-1.036.84-1.875 1.875-1.875h3.193A3.375 3.375 0 0112 2.753a3.375 3.375 0 015.432 3.997h3.943c1.035 0 1.875.84 1.875 1.875v.75c0 1.036-.84 1.875-1.875 1.875H12.75v-4.5h1.875a1.875 1.875 0 10-1.875-1.875V6.75h-1.5V4.875C11.25 3.839 10.41 3 9.375 3zM11.25 12.75H3v6.75a2.25 2.25 0 002.25 2.25h6v-9zM12.75 12.75v9h6.75a2.25 2.25 0 002.25-2.25v-6.75h-9z" />
                            </svg>
                        </div>
                        <div class="usage-text">
                            <h4>Notifikasi & Promo</h4>
                            <p>Mengirim update dan penawaran khusus dengan persetujuan Anda</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="data-security" class="policy-section">
            <div class="section-header">
                <div class="section-number">03</div>
                <h2>Keamanan Data</h2>
            </div>
            <div class="section-content">
                <div class="security-features">
                    <div class="security-item">
                        <h4>🔒 Enkripsi Tingkat Lanjut</h4>
                        <p>Data Anda dilindungi dengan enkripsi AES-256 bit, standar keamanan tertinggi di industri</p>
                    </div>
                    <div class="security-item">
                        <h4>🛡️ Kontrol Akses Ketat</h4>
                        <p>Hanya personel yang berwenang yang dapat mengakses data sensitif dengan autentikasi multi-faktor</p>
                    </div>
                    <div class="security-item">
                        <h4>📊 Monitoring 24/7</h4>
                        <p>Sistem kami terus dipantau untuk mendeteksi dan mencegah akses tidak sah secara real-time</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="third-party" class="policy-section">
            <div class="section-header">
                <div class="section-number">04</div>
                <h2>Pihak Ketiga</h2>
            </div>
            <div class="section-content">
                <div class="warning-card">
                    <div class="warning-icon">⚠️</div>
                    <div class="warning-content">
                        <h4>Transparansi dengan Mitra</h4>
                        <p>Kami hanya berbagi data dengan mitra terpercaya untuk keperluan pengiriman dan pembayaran. Data Anda <strong>tidak pernah dijual atau disebarluaskan</strong> kepada pihak lain untuk tujuan pemasaran.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="user-rights" class="policy-section">
            <div class="section-header">
                <div class="section-number">05</div>
                <h2>Hak Pengguna</h2>
            </div>
            <div class="section-content">
                <div class="rights-grid">
                    <div class="right-item">
                        <h4>👁️ Hak Akses</h4>
                        <p>Anda dapat mengakses dan melihat data pribadi yang kami simpan</p>
                    </div>
                    <div class="right-item">
                        <h4>✏️ Hak Perbarui</h4>
                        <p>Perbarui informasi pribadi kapan saja melalui akun Anda</p>
                    </div>
                    <div class="right-item">
                        <h4>🗑️ Hak Hapus</h4>
                        <p>Minta penghapusan data pribadi dengan menghubungi kami</p>
                    </div>
                    <div class="right-item">
                        <h4>🚫 Hak Tolak</h4>
                        <p>Tolak promosi dan notifikasi kapan saja melalui pengaturan</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="cookies" class="policy-section">
            <div class="section-header">
                <div class="section-number">06</div>
                <h2>Penggunaan Cookie</h2>
            </div>
            <div class="section-content">
                <div class="cookie-info">
                    <p>ISEMA menggunakan cookie untuk:</p>
                    <ul>
                        <li>Menyimpan preferensi dan pengaturan pengguna</li>
                        <li>Meningkatkan performa dan kecepatan situs</li>
                        <li>Analisis traffic dan perilaku pengguna</li>
                        <li>Personalisasi pengalaman browsing</li>
                    </ul>
                    <div class="cookie-note">
                        <strong>Kontrol Cookie:</strong> Anda dapat menonaktifkan cookie melalui pengaturan browser, namun beberapa fitur mungkin tidak berfungsi optimal.
                    </div>
                </div>
            </div>
        </section>

        <section id="policy-changes" class="policy-section">
            <div class="section-header">
                <div class="section-number">07</div>
                <h2>Perubahan Kebijakan</h2>
            </div>
            <div class="section-content">
                <div class="update-card">
                    <div class="update-badge">UPDATE</div>
                    <p>Kami dapat memperbarui kebijakan privasi ini secara berkala untuk mencerminkan perubahan dalam praktik kami atau untuk alasan operasional, hukum, atau regulasi lainnya.</p>
                    <p><strong>Perubahan signifikan akan dikomunikasikan melalui:</strong></p>
                    <ul>
                        <li>Pemberitahuan di halaman ini</li>
                        <li>Email kepada pengguna terdaftar</li>
                        <li>Banner notifikasi di situs web</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="contact" class="policy-section">
            <div class="section-header">
                <div class="section-number">08</div>
                <h2>Hubungi Kami</h2>
            </div>
            <div class="section-content">
                <div class="contact-card">
                    <div class="contact-info">
                        <h4>Pertanyaan tentang Privasi?</h4>
                        <p>Tim perlindungan data kami siap membantu menjawab pertanyaan Anda mengenai kebijakan privasi dan pengelolaan data.</p>
                        <div class="contact-email">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                            </svg>
                            <span>kontak@isema.co.id</span>
                        </div>
                        <p class="response-time">Biasanya merespons dalam 24 jam</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<style>
    :root {
        --primary: #7e57c2;
        --primary-light: #b39ddb;
        --primary-dark: #5e35b1;
        --secondary: #e1bee7;
        --accent: #f3e5f5;
        --text-dark: #2d3748;
        --text-light: #718096;
        --bg-light: #f7fafc;
        --border: #e2e8f0;
        --success: #48bb78;
        --warning: #ed8936;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', 'Segoe UI', sans-serif;
        background: #ffffff;
        color: var(--text-dark);
        line-height: 1.6;
    }

    .privacy-hero {
        background: linear-gradient(135deg, #7e57c2 0%, #5e35b1 100%);
        color: white;
        padding: 120px 20px 80px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        max-width: 1400px;
        margin: 0 auto;
        position: relative;
        overflow: hidden;
    }

    .hero-content {
        flex: 1;
        max-width: 600px;
        z-index: 2;
    }

    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(255, 255, 255, 0.15);
        padding: 8px 16px;
        border-radius: 20px;
        font-size: 14px;
        font-weight: 500;
        margin-bottom: 20px;
        backdrop-filter: blur(10px);
    }

    .hero-badge svg {
        width: 16px;
        height: 16px;
    }

    .privacy-hero h1 {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 16px;
        line-height: 1.2;
    }

    .hero-subtitle {
        font-size: 1.25rem;
        opacity: 0.9;
        margin-bottom: 40px;
        max-width: 500px;
    }

    .hero-stats {
        display: flex;
        gap: 40px;
    }

    .stat-item {
        text-align: center;
    }

    .stat-number {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 4px;
    }

    .stat-label {
        font-size: 0.875rem;
        opacity: 0.8;
    }

    .hero-graphic {
        flex: 0 0 300px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .graphic-circle {
        width: 200px;
        height: 200px;
        border: 2px solid rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        position: relative;
    }

    .graphic-circle::before {
        content: '';
        position: absolute;
        width: 150px;
        height: 150px;
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .graphic-shield {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80px;
        height: 80px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        backdrop-filter: blur(10px);
    }

    .graphic-shield svg {
        width: 40px;
        height: 40px;
        opacity: 0.8;
    }

    .privacy-container {
        max-width: 1400px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 300px 1fr;
        gap: 40px;
        padding: 60px 20px;
    }

    .privacy-sidebar {
        position: sticky;
        top: 100px;
        height: fit-content;
    }

    .sidebar-sticky {
        background: white;
        border-radius: 16px;
        padding: 24px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid var(--border);
    }

    .sidebar-sticky h3 {
        font-size: 1.125rem;
        font-weight: 600;
        margin-bottom: 20px;
        color: var(--primary-dark);
    }

    .sidebar-nav {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .nav-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 16px;
        text-decoration: none;
        color: var(--text-light);
        border-radius: 8px;
        transition: all 0.2s ease;
        font-weight: 500;
    }

    .nav-item:hover,
    .nav-item.active {
        background: var(--accent);
        color: var(--primary-dark);
    }

    .nav-icon {
        width: 24px;
        height: 24px;
        background: var(--primary-light);
        color: white;
        border-radius: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.75rem;
        font-weight: 600;
    }

    .nav-item.active .nav-icon {
        background: var(--primary-dark);
    }

    .privacy-content {
        background: white;
        border-radius: 16px;
        padding: 0;
    }

    .content-intro {
        background: var(--bg-light);
        padding: 40px;
        border-radius: 16px 16px 0 0;
        margin-bottom: 40px;
        font-size: 1.125rem;
        color: var(--text-light);
        text-align: center;
        border-bottom: 1px solid var(--border);
    }

    .policy-section {
        padding: 40px;
        border-bottom: 1px solid var(--border);
    }

    .policy-section:last-child {
        border-bottom: none;
    }

    .section-header {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 24px;
    }

    .section-number {
        font-size: 3rem;
        font-weight: 700;
        color: var(--primary-light);
        line-height: 1;
    }

    .policy-section h2 {
        font-size: 1.75rem;
        font-weight: 600;
        color: var(--primary-dark);
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 24px;
    }

    .info-card {
        background: var(--bg-light);
        padding: 24px;
        border-radius: 12px;
        border-left: 4px solid var(--primary);
    }

    .info-icon {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        margin-bottom: 16px;
        position: relative;
    }

    .info-icon.personal::before {
        content: '👤';
        font-size: 24px;
    }

    .info-icon.transaction::before {
        content: '💳';
        font-size: 24px;
    }

    .info-icon.technical::before {
        content: '🔧';
        font-size: 24px;
    }

    .info-card h4 {
        font-size: 1.125rem;
        font-weight: 600;
        margin-bottom: 12px;
        color: var(--text-dark);
    }

    .info-card ul {
        list-style: none;
        padding: 0;
    }

    .info-card li {
        padding: 4px 0;
        color: var(--text-light);
        position: relative;
        padding-left: 16px;
    }

    .info-card li::before {
        content: '•';
        color: var(--primary);
        position: absolute;
        left: 0;
    }

    .usage-list {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .usage-item {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        padding: 20px;
        background: var(--bg-light);
        border-radius: 12px;
        transition: transform 0.2s ease;
    }

    .usage-item:hover {
        transform: translateX(8px);
    }

    .usage-icon {
        flex-shrink: 0;
        width: 48px;
        height: 48px;
        background: var(--primary);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }

    .usage-icon svg {
        width: 24px;
        height: 24px;
    }

    .usage-text h4 {
        font-size: 1.125rem;
        font-weight: 600;
        margin-bottom: 4px;
        color: var(--text-dark);
    }

    .usage-text p {
        color: var(--text-light);
        margin: 0;
    }

    .security-features {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .security-item {
        background: var(--bg-light);
        padding: 20px;
        border-radius: 12px;
        border-left: 4px solid var(--success);
    }

    .security-item h4 {
        font-size: 1.125rem;
        font-weight: 600;
        margin-bottom: 8px;
        color: var(--text-dark);
    }

    .security-item p {
        color: var(--text-light);
        margin: 0;
    }

    .warning-card {
        background: #fffaf0;
        border: 1px solid #fed7d7;
        border-radius: 12px;
        padding: 24px;
        display: flex;
        gap: 16px;
        align-items: flex-start;
    }

    .warning-icon {
        font-size: 24px;
        flex-shrink: 0;
    }

    .warning-content h4 {
        font-size: 1.125rem;
        font-weight: 600;
        margin-bottom: 8px;
        color: #c53030;
    }

    .warning-content p {
        color: #744210;
        margin: 0;
    }

    .rights-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
    }

    .right-item {
        background: var(--bg-light);
        padding: 20px;
        border-radius: 12px;
        text-align: center;
    }

    .right-item h4 {
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 8px;
        color: var(--text-dark);
    }

    .right-item p {
        color: var(--text-light);
        font-size: 0.875rem;
        margin: 0;
    }

    .cookie-info {
        background: var(--bg-light);
        padding: 24px;
        border-radius: 12px;
    }

    .cookie-info ul {
        margin: 16px 0;
        padding-left: 20px;
    }

    .cookie-info li {
        margin-bottom: 8px;
        color: var(--text-light);
    }

    .cookie-note {
        background: white;
        padding: 16px;
        border-radius: 8px;
        border-left: 4px solid var(--warning);
        margin-top: 16px;
    }

    .update-card {
        background: var(--bg-light);
        padding: 24px;
        border-radius: 12px;
        position: relative;
    }

    .update-badge {
        position: absolute;
        top: -10px;
        right: 20px;
        background: var(--warning);
        color: white;
        padding: 4px 12px;
        border-radius: 12px;
        font-size: 0.75rem;
        font-weight: 600;
    }

    .update-card p {
        margin-bottom: 12px;
        color: var(--text-light);
    }

    .update-card ul {
        margin: 16px 0;
        padding-left: 20px;
    }

    .update-card li {
        margin-bottom: 8px;
        color: var(--text-light);
    }

    .contact-card {
        background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
        color: white;
        padding: 40px;
        border-radius: 16px;
        text-align: center;
    }

    .contact-info h4 {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 12px;
    }

    .contact-info p {
        opacity: 0.9;
        margin-bottom: 20px;
    }

    .contact-email {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(255, 255, 255, 0.1);
        padding: 12px 24px;
        border-radius: 8px;
        font-weight: 600;
        margin-bottom: 16px;
        backdrop-filter: blur(10px);
    }

    .contact-email svg {
        width: 20px;
        height: 20px;
    }

    .response-time {
        font-size: 0.875rem;
        opacity: 0.7;
    }

    @media (max-width: 1024px) {
        .privacy-container {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .privacy-sidebar {
            position: static;
        }

        .hero-stats {
            gap: 30px;
        }
    }

    @media (max-width: 768px) {
        .privacy-hero {
            flex-direction: column;
            text-align: center;
            padding: 100px 20px 60px;
        }

        .hero-content {
            max-width: 100%;
        }

        .hero-graphic {
            margin-top: 40px;
        }

        .hero-stats {
            justify-content: center;
        }

        .privacy-hero h1 {
            font-size: 2.5rem;
        }

        .policy-section {
            padding: 30px 20px;
        }

        .content-intro {
            padding: 30px 20px;
        }

        .info-grid {
            grid-template-columns: 1fr;
        }

        .rights-grid {
            grid-template-columns: 1fr;
        }

        .usage-item {
            flex-direction: column;
            text-align: center;
        }

        .usage-icon {
            align-self: center;
        }
    }

    @media (max-width: 480px) {
        .privacy-hero h1 {
            font-size: 2rem;
        }

        .hero-stats {
            flex-direction: column;
            gap: 20px;
        }

        .section-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 8px;
        }

        .section-number {
            font-size: 2rem;
        }

        .policy-section h2 {
            font-size: 1.5rem;
        }
    }
</style>

<script>
    // Smooth scrolling for navigation
    document.addEventListener('DOMContentLoaded', function() {
        const navItems = document.querySelectorAll('.nav-item');
        const sections = document.querySelectorAll('.policy-section');
        
        // Update active nav item on scroll
        function updateActiveNav() {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                if (window.scrollY >= sectionTop) {
                    current = section.getAttribute('id');
                }
            });

            navItems.forEach(item => {
                item.classList.remove('active');
                if (item.getAttribute('href') === `#${current}`) {
                    item.classList.add('active');
                }
            });
        }

        // Smooth scroll to section
        navItems.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);
                window.scrollTo({
                    top: targetSection.offsetTop - 80,
                    behavior: 'smooth'
                });
            });
        });

        window.addEventListener('scroll', updateActiveNav);
    });
</script>

@endsection