@extends('layout.layout')
@section('content')

<section class="terms-hero">
    <div class="hero-content">
        <div class="hero-badge">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd" d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625zM7.5 15a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 017.5 15zm.75 2.25a.75.75 0 000 1.5h7.5a.75.75 0 000-1.5h-7.5z" clip-rule="evenodd" />
                <path d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z" />
            </svg>
            Legal & Compliance
        </div>
        <h1>Term & Condition</h1>
        <p class="hero-subtitle">Ketentuan penggunaan layanan ISEMA yang mengatur hak dan kewajiban Anda sebagai pengguna</p>
        
        <div class="hero-meta">
            <div class="meta-item">
                <div class="meta-label">Terakhir Diupdate</div>
                <div class="meta-value">15 Desember 2024</div>
            </div>
            <div class="meta-item">
                <div class="meta-label">Versi</div>
                <div class="meta-value">2.1.0</div>
            </div>
            <div class="meta-item">
                <div class="meta-label">Status</div>
                <div class="meta-value active">Aktif</div>
            </div>
        </div>
    </div>
    <div class="hero-graphic">
        <div class="graphic-doc"></div>
        <div class="graphic-seal">
            <div class="seal-content">
                <span>T&C</span>
            </div>
        </div>
    </div>
</section>

<div class="terms-container">
    <!-- Quick Navigation -->
    <aside class="terms-sidebar">
        <div class="sidebar-sticky">
            <div class="sidebar-header">
                <h3>Navigasi Cepat</h3>
                <div class="last-update">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z" clip-rule="evenodd" />
                    </svg>
                    Update: 15 Des 2024
                </div>
            </div>

            <nav class="terms-nav">
                <a href="#pengenalan" class="nav-item active">
                    <span class="nav-icon">1</span>
                    Pengenalan
                </a>
                <a href="#definisi" class="nav-item">
                    <span class="nav-icon">2</span>
                    Definisi Istilah
                </a>
                <a href="#registrasi" class="nav-item">
                    <span class="nav-icon">3</span>
                    Registrasi & Akun
                </a>
                <a href="#layanan" class="nav-item">
                    <span class="nav-icon">4</span>
                    Layanan & Fitur
                </a>
                <a href="#pembayaran" class="nav-item">
                    <span class="nav-icon">5</span>
                    Pembayaran
                </a>
                <a href="#hak-kekayaan" class="nav-item">
                    <span class="nav-icon">6</span>
                    Hak Kekayaan
                </a>
                <a href="#batasan" class="nav-item">
                    <span class="nav-icon">7</span>
                    Batasan & Larangan
                </a>
                <a href="#pertanggungjawaban" class="nav-item">
                    <span class="nav-icon">8</span>
                    Pertanggungjawaban
                </a>
                <a href="#terminasi" class="nav-item">
                    <span class="nav-icon">9</span>
                    Terminasi
                </a>
                <a href="#perubahan" class="nav-item">
                    <span class="nav-icon">10</span>
                    Perubahan Syarat
                </a>
                <a href="#hukum" class="nav-item">
                    <span class="nav-icon">11</span>
                    Hukum yang Berlaku
                </a>
            </nav>

            <div class="sidebar-actions">
                <button class="action-btn primary">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625zM7.5 15a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 017.5 15zm.75 2.25a.75.75 0 000 1.5h7.5a.75.75 0 000-1.5h-7.5z" clip-rule="evenodd" />
                    </svg>
                    Download PDF
                </button>
                <button class="action-btn secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                        <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                    </svg>
                    Print Dokumen
                </button>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="terms-content">
        <!-- Acceptance Banner -->
        <div class="acceptance-banner">
            <div class="banner-content">
                <div class="banner-icon">⚠️</div>
                <div class="banner-text">
                    <h4>Penting: Baca Dengan Teliti</h4>
                    <p>Dengan mengakses atau menggunakan layanan ISEMA, Anda menyetujui semua syarat dan ketentuan yang tercantum di bawah ini. Jika tidak setuju, harap hentikan penggunaan layanan kami.</p>
                </div>
            </div>
        </div>

        <!-- Introduction -->
        <section id="pengenalan" class="terms-section">
            <div class="section-header">
                <div class="section-number">1</div>
                <div class="section-title">
                    <h2>Pengenalan</h2>
                    <p>Latar belakang dan ruang lingkup syarat & ketentuan</p>
                </div>
            </div>

            <div class="section-content">
                <div class="content-card">
                    <h4>1.1 Tentang Dokumen Ini</h4>
                    <p>Dokumen Syarat & Ketentuan ini ("Perjanjian") mengatur penggunaan platform ISEMA ("Platform") yang disediakan oleh PT. ISEMA Digital Indonesia ("Kami", "Kami", "ISEMA").</p>
                    
                    <div class="highlight-box">
                        <div class="highlight-icon">💡</div>
                        <div class="highlight-content">
                            <strong>Penting:</strong> Dokumen ini merupakan perjanjian hukum yang mengikat antara Anda sebagai pengguna dan ISEMA sebagai penyedia layanan.
                        </div>
                    </div>
                </div>

                <div class="content-card">
                    <h4>1.2 Penerimaan Syarat</h4>
                    <p>Dengan:</p>
                    <ul class="bullet-list">
                        <li>Mengakses atau menggunakan Platform ISEMA</li>
                        <li>Mendaftar akun pengguna</li>
                        <li>Melakukan transaksi melalui Platform</li>
                    </ul>
                    <p>Anda dianggap telah membaca, memahami, dan menyetujui semua ketentuan yang tercantum dalam dokumen ini.</p>
                </div>
            </div>
        </section>

        <!-- Definitions -->
        <section id="definisi" class="terms-section">
            <div class="section-header">
                <div class="section-number">2</div>
                <div class="section-title">
                    <h2>Definisi Istilah</h2>
                    <p>Penjelasan istilah-istilah penting yang digunakan</p>
                </div>
            </div>

            <div class="section-content">
                <div class="definitions-grid">
                    <div class="definition-item">
                        <h4>Platform</h4>
                        <p>Sistem, aplikasi, dan website ISEMA termasuk semua fitur dan layanannya</p>
                    </div>
                    <div class="definition-item">
                        <h4>Pengguna</h4>
                        <p>Individu atau entitas yang mengakses atau menggunakan Platform ISEMA</p>
                    </div>
                    <div class="definition-item">
                        <h4>Konten</h4>
                        <p>Semua informasi, data, teks, gambar, dan materi lain yang tersedia di Platform</p>
                    </div>
                    <div class="definition-item">
                        <h4>Layanan</h4>
                        <p>Semua fitur dan fasilitas yang disediakan ISEMA melalui Platform</p>
                    </div>
                    <div class="definition-item">
                        <h4>Transaksi</h4>
                        <p>Aktivitas jual-beli atau pertukaran nilai yang dilakukan melalui Platform</p>
                    </div>
                    <div class="definition-item">
                        <h4>Akun</h4>
                        <p>Profil pengguna yang terdaftar dan memiliki akses ke Platform</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Registration -->
        <section id="registrasi" class="terms-section">
            <div class="section-header">
                <div class="section-number">3</div>
                <div class="section-title">
                    <h2>Registrasi & Akun Pengguna</h2>
                    <p>Ketentuan mengenai pembuatan dan pengelolaan akun</p>
                </div>
            </div>

            <div class="section-content">
                <div class="content-card">
                    <h4>3.1 Persyaratan Registrasi</h4>
                    <p>Untuk menggunakan layanan ISEMA, Anda harus:</p>
                    <ul class="bullet-list">
                        <li>Berusia minimal 18 tahun</li>
                        <li>Memiliki kapasitas hukum yang sah</li>
                        <li>Menyediakan informasi yang akurat dan lengkap</li>
                        <li>Memiliki alamat email dan nomor telepon aktif</li>
                    </ul>
                </div>

                <div class="content-card">
                    <h4>3.2 Keamanan Akun</h4>
                    <p>Anda bertanggung jawab penuh untuk:</p>
                    <div class="responsibility-list">
                        <div class="responsibility-item">
                            <div class="responsibility-icon">🔒</div>
                            <div class="responsibility-text">
                                <strong>Kerahasiaan Credentials</strong>
                                <p>Menjaga kerahasiaan username, password, dan kode akses</p>
                            </div>
                        </div>
                        <div class="responsibility-item">
                            <div class="responsibility-icon">🚨</div>
                            <div class="responsibility-text">
                                <strong>Pelaporan Penyalahgunaan</strong>
                                <p>Segera melaporkan aktivitas mencurigakan atau penggunaan tidak sah</p>
                            </div>
                        </div>
                        <div class="responsibility-item">
                            <div class="responsibility-icon">📱</div>
                            <div class="responsibility-text">
                                <strong>Keamanan Perangkat</strong>
                                <p>Memastikan keamanan perangkat yang digunakan untuk mengakses Platform</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="warning-card">
                    <div class="warning-header">
                        <div class="warning-icon">⚠️</div>
                        <h4>Peringatan: Pelanggaran Keamanan</h4>
                    </div>
                    <p>Segala aktivitas yang dilakukan melalui akun Anda dianggap sebagai aktivitas yang sah dan menjadi tanggung jawab Anda. ISEMA tidak bertanggung jawab atas kerugian akibat kelalaian dalam menjaga keamanan akun.</p>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section id="layanan" class="terms-section">
            <div class="section-header">
                <div class="section-number">4</div>
                <div class="section-title">
                    <h2>Layanan & Fitur</h2>
                    <p>Ketentuan penggunaan layanan dan fitur ISEMA</p>
                </div>
            </div>

            <div class="section-content">
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon">🛍️</div>
                        <h4>E-Commerce</h4>
                        <p>Platform jual-beli produk dengan berbagai metode pembayaran</p>
                        <ul>
                            <li>Katalog produk</li>
                            <li>Keranjang belanja</li>
                            <li>Checkout system</li>
                        </ul>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">📦</div>
                        <h4>Manajemen Pesanan</h4>
                        <p>Sistem pengelolaan dan pelacakan pesanan</p>
                        <ul>
                            <li>Status pesanan</li>
                            <li>Notifikasi</li>
                            <li>Riwayat transaksi</li>
                        </ul>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">💬</div>
                        <h4>Customer Support</h4>
                        <p>Layanan bantuan dan dukungan pelanggan</p>
                        <ul>
                            <li>Live chat</li>
                            <li>Ticket system</li>
                            <li>FAQ & panduan</li>
                        </ul>
                    </div>
                </div>

                <div class="content-card">
                    <h4>4.1 Ketersediaan Layanan</h4>
                    <p>ISEMA berusaha menjaga ketersediaan layanan 24/7, namun kami tidak dapat menjamin:</p>
                    <ul class="bullet-list">
                        <li>Layanan akan terus tersedia tanpa interupsi</li>
                        <li>Tidak ada error atau bug dalam sistem</li>
                        <li>Kecepatan akses yang konsisten</li>
                    </ul>
                    <div class="note">
                        <strong>Catatan:</strong> ISEMA berhak melakukan maintenance, update, atau improvement sistem yang mungkin menyebabkan downtime sementara.
                    </div>
                </div>
            </div>
        </section>

        <!-- Payment -->
        <section id="pembayaran" class="terms-section">
            <div class="section-header">
                <div class="section-number">5</div>
                <div class="section-title">
                    <h2>Pembayaran & Biaya</h2>
                    <p>Ketentuan mengenai transaksi keuangan</p>
                </div>
            </div>

            <div class="section-content">
                <div class="payment-info">
                    <div class="payment-methods">
                        <h4>5.1 Metode Pembayaran</h4>
                        <div class="methods-grid">
                            <div class="method-item">
                                <div class="method-icon">🏦</div>
                                <span>Transfer Bank</span>
                            </div>
                            <div class="method-item">
                                <div class="method-icon">💳</div>
                                <span>Kartu Kredit</span>
                            </div>
                            <div class="method-item">
                                <div class="method-icon">📱</div>
                                <span>E-Wallet</span>
                            </div>
                            <div class="method-item">
                                <div class="method-icon">⚡</div>
                                <span>Virtual Account</span>
                            </div>
                        </div>
                    </div>

                    <div class="payment-terms">
                        <h4>5.2 Ketentuan Pembayaran</h4>
                        <ul class="bullet-list">
                            <li>Pembayaran harus diselesaikan dalam waktu 24 jam</li>
                            <li>Transaksi yang tidak dibayar akan dibatalkan otomatis</li>
                            <li>Biaya transaksi mengikuti ketentuan payment gateway</li>
                            <li>Pajak dan biaya tambahan menjadi tanggung jawab pengguna</li>
                        </ul>
                    </div>
                </div>

                <div class="refund-policy">
                    <h4>5.3 Kebijakan Pengembalian Dana</h4>
                    <div class="refund-steps">
                        <div class="refund-step">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h5>Pengajuan Klaim</h5>
                                <p>Ajukan permohonan refund melalui dashboard dalam 7 hari</p>
                            </div>
                        </div>
                        <div class="refund-step">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h5>Verifikasi</h5>
                                <p>Tim kami akan memverifikasi kelayakan pengembalian dana</p>
                            </div>
                        </div>
                        <div class="refund-step">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h5>Proses</h5>
                                <p>Dana akan dikembalikan dalam 14 hari kerja setelah disetujui</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Additional Sections Placeholder -->
        <section class="terms-section">
            <div class="section-header">
                <div class="section-number">6-11</div>
                <div class="section-title">
                    <h2>Ketentuan Lainnya</h2>
                    <p>Bagian penting lainnya dari syarat & ketentuan</p>
                </div>
            </div>

            <div class="section-content">
                <div class="quick-links">
                    <a href="#hak-kekayaan" class="quick-link">
                        <div class="link-icon">⚖️</div>
                        <div class="link-content">
                            <h4>Hak Kekayaan Intelektual</h4>
                            <p>Ketentuan mengenai hak cipta, merek, dan properti intelektual</p>
                        </div>
                    </a>
                    <a href="#batasan" class="quick-link">
                        <div class="link-icon">🚫</div>
                        <div class="link-content">
                            <h4>Batasan & Larangan</h4>
                            <p>Aktivitas yang dilarang dalam penggunaan Platform</p>
                        </div>
                    </a>
                    <a href="#pertanggungjawaban" class="quick-link">
                        <div class="link-icon">🛡️</div>
                        <div class="link-content">
                            <h4>Pertanggungjawaban</h4>
                            <p>Batasan tanggung jawab dan ganti rugi</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Agreement -->
        <section class="agreement-section">
            <div class="agreement-card">
                <div class="agreement-header">
                    <h3>Konfirmasi Persetujuan</h3>
                    <p>Dengan melanjutkan penggunaan layanan ISEMA, Anda menyatakan:</p>
                </div>
                
                <div class="agreement-points">
                    <div class="agreement-point">
                        <div class="point-check">✓</div>
                        <span>Telah membaca dan memahami seluruh syarat & ketentuan</span>
                    </div>
                    <div class="agreement-point">
                        <div class="point-check">✓</div>
                        <span>Menyetujui semua ketentuan yang tercantum</span>
                    </div>
                    <div class="agreement-point">
                        <div class="point-check">✓</div>
                        <span>Bersedia mematuhi peraturan yang berlaku</span>
                    </div>
                </div>

                <div class="agreement-footer">
                    <div class="effective-date">
                        <strong>Tanggal Efektif:</strong> 15 Desember 2024
                    </div>
                    <button class="agree-button">
                        Saya Setuju & Memahami
                    </button>
                </div>
            </div>
        </section>
    </main>
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
        --error: #f56565;
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

    .terms-hero {
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

    .terms-hero h1 {
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

    .hero-meta {
        display: flex;
        gap: 40px;
    }

    .meta-item {
        text-align: center;
    }

    .meta-label {
        font-size: 0.875rem;
        opacity: 0.8;
        margin-bottom: 4px;
    }

    .meta-value {
        font-size: 1.125rem;
        font-weight: 600;
    }

    .meta-value.active {
        color: var(--success);
    }

    .hero-graphic {
        flex: 0 0 300px;
        position: relative;
        height: 200px;
    }

    .graphic-doc {
        width: 200px;
        height: 150px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        position: absolute;
        top: 0;
        right: 0;
        backdrop-filter: blur(10px);
    }

    .graphic-seal {
        position: absolute;
        bottom: 0;
        right: 80px;
        width: 120px;
        height: 120px;
        border: 3px dashed rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .seal-content {
        width: 80px;
        height: 80px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 1.125rem;
        backdrop-filter: blur(10px);
    }

    .terms-container {
        max-width: 1400px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 320px 1fr;
        gap: 40px;
        padding: 40px 20px;
    }

    .terms-sidebar {
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

    .sidebar-header {
        margin-bottom: 24px;
    }

    .sidebar-header h3 {
        font-size: 1.125rem;
        font-weight: 600;
        margin-bottom: 8px;
        color: var(--primary-dark);
    }

    .last-update {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 0.875rem;
        color: var(--text-light);
    }

    .last-update svg {
        width: 16px;
        height: 16px;
    }

    .terms-nav {
        display: flex;
        flex-direction: column;
        gap: 4px;
        margin-bottom: 24px;
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
        cursor: pointer;
        border: none;
        background: none;
        width: 100%;
        text-align: left;
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

    .sidebar-actions {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .action-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 12px 16px;
        border: none;
        border-radius: 8px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .action-btn.primary {
        background: var(--primary);
        color: white;
    }

    .action-btn.secondary {
        background: var(--bg-light);
        color: var(--text-dark);
        border: 1px solid var(--border);
    }

    .action-btn:hover {
        transform: translateY(-1px);
    }

    .action-btn svg {
        width: 16px;
        height: 16px;
    }

    .terms-content {
        background: white;
        border-radius: 16px;
        padding: 0;
    }

    .acceptance-banner {
        background: #fffaf0;
        border: 1px solid #fed7d7;
        border-radius: 12px;
        margin: 40px;
        padding: 24px;
    }

    .banner-content {
        display: flex;
        gap: 16px;
        align-items: flex-start;
    }

    .banner-icon {
        font-size: 24px;
        flex-shrink: 0;
    }

    .banner-text h4 {
        font-size: 1.125rem;
        font-weight: 600;
        margin-bottom: 8px;
        color: #c53030;
    }

    .banner-text p {
        color: #744210;
        margin: 0;
    }

    .terms-section {
        padding: 60px 40px;
        border-bottom: 1px solid var(--border);
    }

    .terms-section:last-child {
        border-bottom: none;
    }

    .section-header {
        display: flex;
        gap: 24px;
        margin-bottom: 40px;
        align-items: flex-start;
    }

    .section-number {
        font-size: 3rem;
        font-weight: 700;
        color: var(--primary-light);
        line-height: 1;
        flex-shrink: 0;
    }

    .section-title h2 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 8px;
        color: var(--primary-dark);
    }

    .section-title p {
        font-size: 1.125rem;
        color: var(--text-light);
    }

    .section-content {
        display: flex;
        flex-direction: column;
        gap: 32px;
    }

    .content-card {
        background: var(--bg-light);
        padding: 24px;
        border-radius: 12px;
        border-left: 4px solid var(--primary);
    }

    .content-card h4 {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 16px;
        color: var(--text-dark);
    }

    .content-card p {
        margin-bottom: 16px;
        color: var(--text-light);
    }

    .bullet-list {
        list-style: none;
        padding: 0;
    }

    .bullet-list li {
        padding: 8px 0;
        color: var(--text-light);
        position: relative;
        padding-left: 20px;
    }

    .bullet-list li::before {
        content: '•';
        color: var(--primary);
        position: absolute;
        left: 0;
        font-weight: bold;
    }

    .highlight-box {
        background: white;
        padding: 20px;
        border-radius: 8px;
        border: 1px solid var(--border);
        display: flex;
        gap: 16px;
        align-items: flex-start;
        margin: 20px 0;
    }

    .highlight-icon {
        font-size: 24px;
        flex-shrink: 0;
    }

    .highlight-content {
        flex: 1;
    }

    .definitions-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }

    .definition-item {
        background: white;
        padding: 20px;
        border-radius: 8px;
        border: 1px solid var(--border);
    }

    .definition-item h4 {
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 8px;
        color: var(--primary-dark);
    }

    .definition-item p {
        font-size: 0.875rem;
        color: var(--text-light);
        margin: 0;
    }

    .responsibility-list {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .responsibility-item {
        display: flex;
        gap: 16px;
        align-items: flex-start;
    }

    .responsibility-icon {
        font-size: 20px;
        flex-shrink: 0;
    }

    .responsibility-text strong {
        display: block;
        margin-bottom: 4px;
        color: var(--text-dark);
    }

    .responsibility-text p {
        font-size: 0.875rem;
        color: var(--text-light);
        margin: 0;
    }

    .warning-card {
        background: #fff5f5;
        border: 1px solid #fed7d7;
        border-radius: 12px;
        padding: 24px;
    }

    .warning-header {
        display: flex;
        gap: 12px;
        align-items: center;
        margin-bottom: 12px;
    }

    .warning-header h4 {
        font-size: 1.125rem;
        font-weight: 600;
        color: #c53030;
        margin: 0;
    }

    .warning-icon {
        font-size: 20px;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 24px;
        margin-bottom: 32px;
    }

    .service-card {
        background: white;
        padding: 24px;
        border-radius: 12px;
        border: 1px solid var(--border);
        text-align: center;
    }

    .service-icon {
        font-size: 3rem;
        margin-bottom: 16px;
    }

    .service-card h4 {
        font-size: 1.125rem;
        font-weight: 600;
        margin-bottom: 12px;
        color: var(--text-dark);
    }

    .service-card p {
        color: var(--text-light);
        margin-bottom: 16px;
        font-size: 0.875rem;
    }

    .service-card ul {
        list-style: none;
        padding: 0;
        font-size: 0.875rem;
    }

    .service-card li {
        padding: 4px 0;
        color: var(--text-light);
    }

    .note {
        background: #fffaf0;
        border-left: 4px solid var(--warning);
        padding: 16px;
        border-radius: 8px;
        font-size: 0.875rem;
        margin-top: 16px;
    }

    .payment-info {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        margin-bottom: 32px;
    }

    .methods-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
        margin-top: 16px;
    }

    .method-item {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 12px;
        background: var(--bg-light);
        border-radius: 8px;
        font-weight: 500;
    }

    .refund-steps {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .refund-step {
        display: flex;
        gap: 16px;
        align-items: flex-start;
    }

    .step-number {
        width: 32px;
        height: 32px;
        background: var(--primary);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        flex-shrink: 0;
    }

    .step-content h5 {
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 4px;
        color: var(--text-dark);
    }

    .step-content p {
        font-size: 0.875rem;
        color: var(--text-light);
        margin: 0;
    }

    .quick-links {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .quick-link {
        display: flex;
        gap: 16px;
        padding: 20px;
        background: var(--bg-light);
        border-radius: 12px;
        text-decoration: none;
        transition: all 0.2s ease;
    }

    .quick-link:hover {
        background: var(--accent);
        transform: translateX(8px);
    }

    .link-icon {
        font-size: 2rem;
        flex-shrink: 0;
    }

    .link-content h4 {
        font-size: 1.125rem;
        font-weight: 600;
        margin-bottom: 4px;
        color: var(--text-dark);
    }

    .link-content p {
        font-size: 0.875rem;
        color: var(--text-light);
        margin: 0;
    }

    .agreement-section {
        padding: 40px;
    }

    .agreement-card {
        background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
        color: white;
        padding: 40px;
        border-radius: 16px;
        text-align: center;
    }

    .agreement-header h3 {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 12px;
    }

    .agreement-header p {
        opacity: 0.9;
        margin-bottom: 24px;
    }

    .agreement-points {
        display: flex;
        flex-direction: column;
        gap: 16px;
        margin-bottom: 32px;
    }

    .agreement-point {
        display: flex;
        align-items: center;
        gap: 12px;
        justify-content: center;
    }

    .point-check {
        width: 24px;
        height: 24px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }

    .agreement-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;
    }

    .effective-date {
        font-weight: 500;
    }

    .agree-button {
        background: white;
        color: var(--primary-dark);
        border: none;
        padding: 12px 32px;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .agree-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    @media (max-width: 1024px) {
        .terms-container {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .terms-sidebar {
            position: static;
        }

        .payment-info {
            grid-template-columns: 1fr;
        }

        .agreement-footer {
            flex-direction: column;
            text-align: center;
        }
    }

    @media (max-width: 768px) {
        .terms-hero {
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

        .hero-meta {
            justify-content: center;
        }

        .terms-hero h1 {
            font-size: 2.5rem;
        }

        .terms-section {
            padding: 40px 20px;
        }

        .section-header {
            flex-direction: column;
            gap: 16px;
        }

        .section-number {
            font-size: 2rem;
        }

        .section-title h2 {
            font-size: 1.5rem;
        }

        .services-grid {
            grid-template-columns: 1fr;
        }

        .definitions-grid {
            grid-template-columns: 1fr;
        }

        .methods-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 480px) {
        .terms-hero h1 {
            font-size: 2rem;
        }

        .hero-meta {
            flex-direction: column;
            gap: 20px;
        }

        .acceptance-banner {
            margin: 20px;
        }

        .agreement-card {
            padding: 30px 20px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth scrolling for navigation
        const navItems = document.querySelectorAll('.nav-item');
        const sections = document.querySelectorAll('.terms-section');
        
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

        navItems.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);
                if (targetSection) {
                    window.scrollTo({
                        top: targetSection.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        window.addEventListener('scroll', updateActiveNav);

        // Download PDF functionality
        document.querySelector('.action-btn.primary').addEventListener('click', function() {
            alert('Fitur download PDF akan segera tersedia!');
        });

        // Print functionality
        document.querySelector('.action-btn.secondary').addEventListener('click', function() {
            window.print();
        });

        // Agreement button
        document.querySelector('.agree-button').addEventListener('click', function() {
            this.textContent = '✓ Disetujui';
            this.style.background = 'var(--success)';
            this.style.color = 'white';
            this.disabled = true;
            
            // Show confirmation
            const confirmation = document.createElement('div');
            confirmation.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                background: var(--success);
                color: white;
                padding: 16px 24px;
                border-radius: 8px;
                box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                z-index: 10000;
                font-weight: 500;
            `;
            confirmation.textContent = 'Terima kasih! Persetujuan telah dicatat.';
            document.body.appendChild(confirmation);
            
            setTimeout(() => {
                confirmation.remove();
            }, 3000);
        });

        // Add some interactive elements
        const highlightBoxes = document.querySelectorAll('.highlight-box');
        highlightBoxes.forEach(box => {
            box.addEventListener('mouseenter', function() {
                this.style.transform = 'translateX(8px)';
            });
            
            box.addEventListener('mouseleave', function() {
                this.style.transform = 'translateX(0)';
            });
        });
    });
</script>

@endsection