@extends('layout.layout')
@section('content')

<section class="documentation-hero">
    <div class="hero-content">
        <div class="hero-badge">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M11.25 4.533A9.707 9.707 0 006 3a9.735 9.735 0 00-3.25.555.75.75 0 00-.5.707v14.25a.75.75 0 001 .707A8.237 8.237 0 016 18.75c1.995 0 3.823.707 5.25 1.886V4.533zM12.75 20.636A8.214 8.214 0 0118 18.75c.966 0 1.89.166 2.75.47a.75.75 0 001-.708V4.262a.75.75 0 00-.5-.707A9.735 9.735 0 0018 3a9.707 9.707 0 00-5.25 1.533v16.103z" />
            </svg>
            User Guide
        </div>
        <h1>ISEMA Documentation</h1>
        <p class="hero-subtitle">Pelajari cara menggunakan semua fitur ISEMA dengan panduan lengkap dan mudah diikuti</p>
        <div class="search-box">
            <input type="text" placeholder="Cari panduan, fitur, atau masalah..." class="search-input">
            <button class="search-btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </div>
    <div class="hero-graphic">
        <div class="graphic-element doc"></div>
        <div class="graphic-element code"></div>
        <div class="graphic-element guide"></div>
    </div>
</section>

<div class="docs-container">
    <!-- Sidebar Navigation -->
    <aside class="docs-sidebar">
        <div class="sidebar-sticky">
            <div class="sidebar-section">
                <h3>Mulai Cepat</h3>
                <nav class="sidebar-nav">
                    <a href="#getting-started" class="nav-item active">
                        <span class="nav-icon">🚀</span>
                        Memulai
                    </a>
                    <a href="#registration" class="nav-item">
                        <span class="nav-icon">📝</span>
                        Registrasi Akun
                    </a>
                </nav>
            </div>

            <div class="sidebar-section">
                <h3>Fitur Utama</h3>
                <nav class="sidebar-nav">
                    <a href="#products" class="nav-item">
                        <span class="nav-icon">🛍️</span>
                        Produk
                    </a>
                    <a href="#orders" class="nav-item">
                        <span class="nav-icon">📦</span>
                        Pesanan
                    </a>
                </nav>
            </div>


            <div class="sidebar-section">
                <h3>Bantuan</h3>
                <nav class="sidebar-nav">
                    <a href="#faq" class="nav-item">
                        <span class="nav-icon">❓</span>
                        FAQ
                    </a>
                    <a href="#support" class="nav-item">
                        <span class="nav-icon">💬</span>
                        Dukungan
                    </a>
                </nav>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="docs-content">
        <!-- Getting Started Section -->
        <section id="getting-started" class="docs-section">
            <div class="section-header">
                <h2>🚀 Memulai dengan ISEMA</h2>
                <p>Panduan langkah demi langkah untuk memulai menggunakan platform ISEMA</p>
            </div>

            <div class="content-grid">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h4>Registrasi Akun</h4>
                        <p>Buat akun ISEMA baru dengan mengisi formulir registrasi</p>
                        <ul>
                            <li>Masukkan email dan password</li>
                            <li>Verifikasi email Anda</li>
                            <li>Lengkapi profil toko</li>
                        </ul>
                    </div>
                </div>

                <div class="step-card">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h4>Setup Toko</h4>
                        <p>Konfigurasi toko online Anda</p>
                        <ul>
                            <li>Upload logo toko</li>
                            <li>Atur informasi kontak</li>
                            <li>Konfigurasi metode pembayaran</li>
                        </ul>
                    </div>
                </div>

                <div class="step-card">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h4>Tambah Produk</h4>
                        <p>Mulai tambahkan produk ke katalog toko</p>
                        <ul>
                            <li>Upload gambar produk</li>
                            <li>Tulis deskripsi menarik</li>
                            <li>Atur harga dan stok</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Registration Section -->
        <section id="registration" class="docs-section">
            <div class="section-header">
                <h2>📝 Registrasi Akun</h2>
                <p>Proses pendaftaran dan verifikasi akun ISEMA</p>
            </div>

            <div class="feature-card">
                <div class="feature-content">
                    <h4>Formulir Registrasi</h4>
                    <p>Isi data berikut untuk membuat akun baru:</p>
                    
                    <div class="form-example">
                        <div class="form-field">
                            <label>Nama Lengkap</label>
                            <div class="fake-input">John Doe</div>
                        </div>
                        <div class="form-field">
                            <label>Email</label>
                            <div class="fake-input">john@example.com</div>
                        </div>
                        <div class="form-field">
                            <label>Password</label>
                            <div class="fake-input password">••••••••</div>
                        </div>
                    </div>

                    <div class="note">
                        <strong>Catatan:</strong> Pastikan email yang digunakan aktif untuk proses verifikasi
                    </div>
                </div>
                <div class="feature-visual">
                    <div class="mockup-form">
                        <div class="mockup-header">Daftar ISEMA</div>
                        <div class="mockup-field"></div>
                        <div class="mockup-field"></div>
                        <div class="mockup-field"></div>
                        <div class="mockup-button">Daftar Sekarang</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Products Section -->
        <section id="products" class="docs-section">
            <div class="section-header">
                <h2>🛍️ Manajemen Produk</h2>
                <p>Cara menambah, mengedit, dan mengelola produk di toko Anda</p>
            </div>

            <div class="tabs-container">
                <div class="tabs-header">
                    <button class="tab-btn active" data-tab="add-product">Tambah Produk</button>
                    <button class="tab-btn" data-tab="edit-product">Edit Produk</button>
                    <button class="tab-btn" data-tab="categories">Kategori</button>
                </div>

                <div class="tab-content active" id="add-product">
                    <h4>Menambahkan Produk Baru</h4>
                    <ol class="numbered-list">
                        <li>
                            <strong>Buka halaman Produk</strong>
                            <p>Dari dashboard, klik menu "Produk" lalu "Tambah Produk"</p>
                        </li>
                        <li>
                            <strong>Isi informasi produk</strong>
                            <p>Masukkan nama, deskripsi, harga, dan stok produk</p>
                        </li>
                        <li>
                            <strong>Upload gambar</strong>
                            <p>Tambahkan foto produk yang menarik (max 5 gambar)</p>
                        </li>
                        <li>
                            <strong>Pilih kategori</strong>
                            <p>Kategorikan produk untuk memudahkan pencarian</p>
                        </li>
                    </ol>
                </div>

                <div class="tab-content" id="edit-product">
                    <h4>Mengedit Produk</h4>
                    <p>Untuk mengedit produk yang sudah ada:</p>
                    <ul>
                        <li>Buka halaman "Produk"</li>
                        <li>Klik produk yang ingin diubah</li>
                        <li>Edit informasi yang diperlukan</li>
                        <li>Simpan perubahan</li>
                    </ul>
                </div>

                <div class="tab-content" id="categories">
                    <h4>Manajemen Kategori</h4>
                    <p>Kelola kategori produk untuk organisasi yang lebih baik:</p>
                    <div class="category-example">
                        <div class="category-tree">
                            <div class="category-item">Elektronik</div>
                            <div class="category-sub">
                                <div class="category-item">Smartphone</div>
                                <div class="category-item">Laptop</div>
                                <div class="category-item">Aksesori</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Orders Section -->
        <section id="orders" class="docs-section">
            <div class="section-header">
                <h2>📦 Manajemen Pesanan</h2>
                <p>Proses dan kelola pesanan dari pelanggan</p>
            </div>

            <div class="workflow">
                <div class="workflow-step">
                    <div class="step-icon">1</div>
                    <div class="step-info">
                        <h5>Pesanan Masuk</h5>
                        <p>Pesanan baru akan muncul di dashboard</p>
                    </div>
                </div>
                <div class="workflow-arrow">→</div>
                <div class="workflow-step">
                    <div class="step-icon">2</div>
                    <div class="step-info">
                        <h5>Konfirmasi</h5>
                        <p>Verifikasi ketersediaan stok dan data</p>
                    </div>
                </div>
                <div class="workflow-arrow">→</div>
                <div class="workflow-step">
                    <div class="step-icon">3</div>
                    <div class="step-info">
                        <h5>Proses</h5>
                        <p>Kemas produk dan siapkan pengiriman</p>
                    </div>
                </div>
                <div class="workflow-arrow">→</div>
                <div class="workflow-step">
                    <div class="step-icon">4</div>
                    <div class="step-info">
                        <h5>Kirim</h5>
                        <p>Input nomor resi dan update status</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section id="faq" class="docs-section">
            <div class="section-header">
                <h2>❓ Pertanyaan Umum</h2>
                <p>Jawaban untuk pertanyaan yang sering diajukan</p>
            </div>

            <div class="faq-list">
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Bagaimana cara reset password?</span>
                        <svg class="faq-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="faq-answer">
                        <p>Klik "Lupa Password" di halaman login, masukkan email Anda, dan ikuti instruksi yang dikirim ke email Anda.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <span>Bagaimana cara update stok produk?</span>
                        <svg class="faq-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="faq-answer">
                        <p>Buka halaman Produk → Klik produk yang ingin diupdate → Edit kolom stok → Simpan perubahan.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <span>Apakah ada biaya berlangganan?</span>
                        <svg class="faq-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="faq-answer">
                        <p>ISEMA menawarkan paket gratis dengan fitur dasar dan paket premium dengan fitur tambahan. Lihat halaman Pricing untuk detail lengkap.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Support Section -->
        <section id="support" class="docs-section">
            <div class="section-header">
                <h2>💬 Dukungan Teknis</h2>
                <p>Butuh bantuan lebih lanjut? Hubungi tim support kami</p>
            </div>

            <div class="support-cards">
                <div class="support-card">
                    <div class="support-icon">📧</div>
                    <h4>Email Support</h4>
                    <p>support@isema.co.id</p>
                    <small>Respon dalam 24 jam</small>
                </div>

                <div class="support-card">
                    <div class="support-icon">💬</div>
                    <h4>Live Chat</h4>
                    <p>Buka 09:00 - 18:00 WIB</p>
                    <small>Senin - Jumat</small>
                </div>

                <div class="support-card">
                    <div class="support-icon">📚</div>
                    <h4>Video Tutorial</h4>
                    <p>Panduan visual lengkap</p>
                    <small>YouTube Channel</small>
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

    .documentation-hero {
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

    .documentation-hero h1 {
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

    .search-box {
        position: relative;
        max-width: 500px;
    }

    .search-input {
        width: 100%;
        padding: 16px 50px 16px 20px;
        border: none;
        border-radius: 12px;
        font-size: 1rem;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
    }

    .search-btn {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        background: var(--primary);
        border: none;
        border-radius: 8px;
        width: 36px;
        height: 36px;
        color: white;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .search-btn svg {
        width: 18px;
        height: 18px;
    }

    .hero-graphic {
        flex: 0 0 300px;
        position: relative;
        height: 200px;
    }

    .graphic-element {
        position: absolute;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
    }

    .graphic-element.doc {
        width: 120px;
        height: 160px;
        top: 0;
        right: 0;
    }

    .graphic-element.code {
        width: 100px;
        height: 140px;
        bottom: 0;
        right: 140px;
        transform: rotate(-10deg);
    }

    .graphic-element.guide {
        width: 80px;
        height: 120px;
        bottom: 20px;
        right: 60px;
        transform: rotate(5deg);
    }

    .docs-container {
        max-width: 1400px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 300px 1fr;
        gap: 40px;
        padding: 40px 20px;
    }

    .docs-sidebar {
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

    .sidebar-section {
        margin-bottom: 32px;
    }

    .sidebar-section:last-child {
        margin-bottom: 0;
    }

    .sidebar-section h3 {
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 16px;
        color: var(--primary-dark);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 0.875rem;
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
        cursor: pointer;
    }

    .nav-item:hover,
    .nav-item.active {
        background: var(--accent);
        color: var(--primary-dark);
    }

    .nav-icon {
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
    }

    .docs-content {
        background: white;
        border-radius: 16px;
        padding: 0;
    }

    .docs-section {
        padding: 60px 40px;
        border-bottom: 1px solid var(--border);
    }

    .docs-section:last-child {
        border-bottom: none;
    }

    .section-header {
        margin-bottom: 40px;
    }

    .section-header h2 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 12px;
        color: var(--primary-dark);
    }

    .section-header p {
        font-size: 1.125rem;
        color: var(--text-light);
    }

    .content-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 24px;
    }

    .step-card {
        display: flex;
        gap: 20px;
        padding: 24px;
        background: var(--bg-light);
        border-radius: 12px;
        border-left: 4px solid var(--primary);
    }

    .step-number {
        width: 40px;
        height: 40px;
        background: var(--primary);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        flex-shrink: 0;
    }

    .step-content h4 {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 8px;
        color: var(--text-dark);
    }

    .step-content p {
        color: var(--text-light);
        margin-bottom: 12px;
    }

    .step-content ul {
        list-style: none;
        padding: 0;
    }

    .step-content li {
        padding: 4px 0;
        color: var(--text-light);
        position: relative;
        padding-left: 16px;
    }

    .step-content li::before {
        content: '•';
        color: var(--primary);
        position: absolute;
        left: 0;
    }

    .feature-card {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: start;
    }

    .form-example {
        background: white;
        padding: 24px;
        border-radius: 12px;
        border: 1px solid var(--border);
        margin: 20px 0;
    }

    .form-field {
        margin-bottom: 16px;
    }

    .form-field label {
        display: block;
        font-weight: 600;
        margin-bottom: 8px;
        color: var(--text-dark);
    }

    .fake-input {
        padding: 12px 16px;
        background: var(--bg-light);
        border: 1px solid var(--border);
        border-radius: 8px;
        font-family: monospace;
    }

    .fake-input.password {
        letter-spacing: 2px;
    }

    .note {
        background: #fffaf0;
        border-left: 4px solid var(--warning);
        padding: 16px;
        border-radius: 8px;
        font-size: 0.875rem;
    }

    .mockup-form {
        background: white;
        border: 1px solid var(--border);
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .mockup-header {
        text-align: center;
        font-weight: 600;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 1px solid var(--border);
    }

    .mockup-field {
        height: 40px;
        background: var(--bg-light);
        border-radius: 6px;
        margin-bottom: 16px;
    }

    .mockup-button {
        height: 44px;
        background: var(--primary);
        color: white;
        border-radius: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        margin-top: 20px;
    }

    .tabs-container {
        background: white;
        border: 1px solid var(--border);
        border-radius: 12px;
        overflow: hidden;
    }

    .tabs-header {
        display: flex;
        background: var(--bg-light);
        border-bottom: 1px solid var(--border);
    }

    .tab-btn {
        flex: 1;
        padding: 16px 24px;
        background: none;
        border: none;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .tab-btn.active {
        background: white;
        color: var(--primary-dark);
        border-bottom: 2px solid var(--primary);
    }

    .tab-content {
        padding: 30px;
        display: none;
    }

    .tab-content.active {
        display: block;
    }

    .numbered-list {
        list-style: none;
        padding: 0;
    }

    .numbered-list li {
        margin-bottom: 24px;
        padding-left: 40px;
        position: relative;
    }

    .numbered-list li::before {
        content: counter(list-item);
        counter-increment: list-item;
        position: absolute;
        left: 0;
        top: 0;
        width: 30px;
        height: 30px;
        background: var(--primary);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
    }

    .numbered-list li strong {
        display: block;
        margin-bottom: 4px;
        color: var(--text-dark);
    }

    .category-tree {
        background: var(--bg-light);
        padding: 20px;
        border-radius: 8px;
    }

    .category-item {
        padding: 8px 12px;
        margin: 4px 0;
        background: white;
        border-radius: 6px;
        border: 1px solid var(--border);
    }

    .category-sub {
        margin-left: 20px;
        margin-top: 8px;
    }

    .workflow {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
    }

    .workflow-step {
        flex: 1;
        text-align: center;
        padding: 20px;
        background: var(--bg-light);
        border-radius: 12px;
    }

    .step-icon {
        width: 50px;
        height: 50px;
        background: var(--primary);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        margin: 0 auto 12px;
    }

    .step-info h5 {
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 4px;
    }

    .step-info p {
        font-size: 0.875rem;
        color: var(--text-light);
    }

    .workflow-arrow {
        color: var(--primary);
        font-weight: 700;
        font-size: 1.5rem;
    }

    .faq-list {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .faq-item {
        border: 1px solid var(--border);
        border-radius: 12px;
        overflow: hidden;
    }

    .faq-question {
        padding: 20px;
        background: var(--bg-light);
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        font-weight: 600;
    }

    .faq-arrow {
        width: 20px;
        height: 20px;
        transition: transform 0.3s ease;
    }

    .faq-item.active .faq-arrow {
        transform: rotate(180deg);
    }

    .faq-answer {
        padding: 0 20px;
        max-height: 0;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .faq-item.active .faq-answer {
        padding: 20px;
        max-height: 200px;
    }

    .support-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 24px;
    }

    .support-card {
        text-align: center;
        padding: 30px 20px;
        background: var(--bg-light);
        border-radius: 12px;
        border: 1px solid var(--border);
        transition: transform 0.2s ease;
    }

    .support-card:hover {
        transform: translateY(-5px);
    }

    .support-icon {
        font-size: 3rem;
        margin-bottom: 16px;
    }

    .support-card h4 {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .support-card p {
        color: var(--text-light);
        margin-bottom: 4px;
    }

    .support-card small {
        color: var(--text-light);
        font-size: 0.75rem;
    }

    @media (max-width: 1024px) {
        .docs-container {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .docs-sidebar {
            position: static;
        }

        .feature-card {
            grid-template-columns: 1fr;
        }

        .workflow {
            flex-direction: column;
        }

        .workflow-arrow {
            transform: rotate(90deg);
        }
    }

    @media (max-width: 768px) {
        .documentation-hero {
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

        .documentation-hero h1 {
            font-size: 2.5rem;
        }

        .docs-section {
            padding: 40px 20px;
        }

        .content-grid {
            grid-template-columns: 1fr;
        }

        .tabs-header {
            flex-direction: column;
        }

        .tab-btn {
            text-align: left;
        }
    }

    @media (max-width: 480px) {
        .documentation-hero h1 {
            font-size: 2rem;
        }

        .section-header h2 {
            font-size: 1.5rem;
        }

        .step-card {
            flex-direction: column;
            text-align: center;
        }

        .step-number {
            align-self: center;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Tab functionality
        const tabBtns = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const tabId = btn.getAttribute('data-tab');
                
                // Remove active class from all tabs
                tabBtns.forEach(b => b.classList.remove('active'));
                tabContents.forEach(c => c.classList.remove('active'));
                
                // Add active class to current tab
                btn.classList.add('active');
                document.getElementById(tabId).classList.add('active');
            });
        });

        // FAQ accordion
        const faqItems = document.querySelectorAll('.faq-item');
        
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            
            question.addEventListener('click', () => {
                // Close all other items
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                    }
                });
                
                // Toggle current item
                item.classList.toggle('active');
            });
        });

        // Smooth scrolling for navigation
        const navItems = document.querySelectorAll('.nav-item');
        const sections = document.querySelectorAll('.docs-section');
        
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
                window.scrollTo({
                    top: targetSection.offsetTop - 80,
                    behavior: 'smooth'
                });
            });
        });

        window.addEventListener('scroll', updateActiveNav);

        // Search functionality
        const searchInput = document.querySelector('.search-input');
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            // Implement search logic here
            console.log('Searching for:', searchTerm);
        });
    });
</script>

@endsection