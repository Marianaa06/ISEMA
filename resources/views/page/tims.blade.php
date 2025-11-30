@extends('layout.layout')
@section('content')

<section class="team-section">
    <div class="team-header">
        <h2>Our Team</h2>
        <p>Get to Know the Great People Behind ISEMA'S Success</p>
        <div class="header-decoration">
            <div class="decoration-circle"></div>
            <div class="decoration-circle"></div>
            <div class="decoration-circle"></div>
        </div>
    </div>

    <div class="team-grid">
        <!-- CEO & Founder -->
        <div class="team-member featured">
            <div class="member-image">
                <img src="https://picsum.photos/300/300?random=1" alt="CEO" class="team-photo">
                <div class="member-overlay">
                    <div class="social-links">
                        <a href="#" class="social-link">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-link">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="member-info">
                <h3 class="member-name">Amanda Putri</h3>
                <p class="member-role">CEO & Founder</p>
                <p class="member-bio">Pemimpin utama dengan visi besar untuk ISEMA.</p>
            </div>
        </div>

        <!-- Lead Developer -->
        <div class="team-member">
            <div class="member-image">
                <img src="https://picsum.photos/300/300?random=2" alt="Developer" class="team-photo">
                <div class="member-overlay">
                    <div class="social-links">
                        <a href="#" class="social-link">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-link">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="member-info">
                <h3 class="member-name">Rizal Ahmad</h3>
                <p class="member-role">Lead Developer</p>
                <p class="member-bio">Membangun sistem penjualan yang cepat dan handal.</p>
            </div>
        </div>

        <!-- Marketing Manager -->
        <div class="team-member">
            <div class="member-image">
                <img src="https://picsum.photos/300/300?random=3" alt="Marketing" class="team-photo">
                <div class="member-overlay">
                    <div class="social-links">
                        <a href="#" class="social-link">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-link">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.042-3.441.219-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001 12.017 0z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="member-info">
                <h3 class="member-name">Sarah Wijaya</h3>
                <p class="member-role">Marketing Manager</p>
                <p class="member-bio">Membawa strategi pemasaran kreatif ke tingkat selanjutnya.</p>
            </div>
        </div>

        <!-- UI/UX Designer -->
        <div class="team-member">
            <div class="member-image">
                <img src="https://picsum.photos/300/300?random=4" alt="UI Designer" class="team-photo">
                <div class="member-overlay">
                    <div class="social-links">
                        <a href="#" class="social-link">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-link">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm4.441 16.892c-2.102.144-6.784.144-8.883 0C5.282 16.736 5.017 15.622 5 12c.017-3.629.285-4.736 2.558-4.892 2.099-.144 6.782-.144 8.883 0C18.718 7.264 18.982 8.378 19 12c-.018 3.629-.285 4.736-2.559 4.892zM10 9.658l4.917 2.338L10 14.342V9.658z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="member-info">
                <h3 class="member-name">Ilham Pratama</h3>
                <p class="member-role">UI/UX Designer</p>
                <p class="member-bio">Desain antarmuka yang elegan dan ramah pengguna.</p>
            </div>
        </div>

        <!-- Additional Team Members -->
        <div class="team-member">
            <div class="member-image">
                <img src="https://picsum.photos/300/300?random=5" alt="Support" class="team-photo">
                <div class="member-overlay">
                    <div class="social-links">
                        <a href="#" class="social-link">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm.256 2.313c2.47.005 5.116 2.008 5.898 2.962l.244.3c1.64 1.994 3.569 4.34 3.569 6.966 0 3.719-2.98 5.808-6.158 5.808-1.877 0-3.47-1.091-4.512-1.091-.927 0-2.103.965-2.103 2.097 0 1.022 1.529 2.512 2.41 2.512.49 0 .735-.05.896-.05 1.708-.333 3.715-1.386 4.834-2.294.744.36 1.807.692 2.796.692 4.524 0 8.361-3.215 8.361-8.299 0-5.798-4.103-9.374-8.235-9.374-2.778 0-4.7 1.288-6.784 2.555-.914.56-2.364 1.851-2.489 1.851-.215 0-.509-.996-.509-1.651 0-1.403 1.311-2.65 2.674-3.438.965-.557 2.351-1.208 3.486-1.208z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="member-info">
                <h3 class="member-name">Citra Lestari</h3>
                <p class="member-role">Customer Support</p>
                <p class="member-bio">Memberikan bantuan cepat dan ramah kepada pelanggan.</p>
            </div>
        </div>

        <div class="team-member">
            <div class="member-image">
                <img src="https://picsum.photos/300/300?random=6" alt="Keuangan" class="team-photo">
                <div class="member-overlay">
                    <div class="social-links">
                        <a href="#" class="social-link">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="member-info">
                <h3 class="member-name">Andi Kurniawan</h3>
                <p class="member-role">Finance Manager</p>
                <p class="member-bio">Menangani keuangan dengan transparansi dan akurasi.</p>
            </div>
        </div>

        <div class="team-member">
            <div class="member-image">
                <img src="https://picsum.photos/300/300?random=7" alt="Logistik" class="team-photo">
                <div class="member-overlay">
                    <div class="social-links">
                        <a href="#" class="social-link">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm.256 2.313c2.47.005 5.116 2.008 5.898 2.962l.244.3c1.64 1.994 3.569 4.34 3.569 6.966 0 3.719-2.98 5.808-6.158 5.808-1.877 0-3.47-1.091-4.512-1.091-.927 0-2.103.965-2.103 2.097 0 1.022 1.529 2.512 2.41 2.512.49 0 .735-.05.896-.05 1.708-.333 3.715-1.386 4.834-2.294.744.36 1.807.692 2.796.692 4.524 0 8.361-3.215 8.361-8.299 0-5.798-4.103-9.374-8.235-9.374-2.778 0-4.7 1.288-6.784 2.555-.914.56-2.364 1.851-2.489 1.851-.215 0-.509-.996-.509-1.651 0-1.403 1.311-2.65 2.674-3.438.965-.557 2.351-1.208 3.486-1.208z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="member-info">
                <h3 class="member-name">Maya Sari</h3>
                <p class="member-role">Logistics Coordinator</p>
                <p class="member-bio">Mengatur pengiriman dan stok dengan efisiensi tinggi.</p>
            </div>
        </div>

        <div class="team-member">
            <div class="member-image">
                <img src="https://picsum.photos/300/300?random=8" alt="Analis Data" class="team-photo">
                <div class="member-overlay">
                    <div class="social-links">
                        <a href="#" class="social-link">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="member-info">
                <h3 class="member-name">Dimas Nugroho</h3>
                <p class="member-role">Data Analyst</p>
                <p class="member-bio">Mengolah data untuk strategi bisnis yang lebih tajam.</p>
            </div>
        </div>
    </div>
</section>

<style>
    :root {
        --primary-color: #5e35b1;
        --primary-light: #7e57c2;
        --secondary-color: #8e24aa;
        --accent-color: #e1bee7;
        --text-color: #333;
        --text-light: #666;
        --bg-color: #f7f3fc;
        --card-bg: #fff;
        --shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        --transition: all 0.3s ease;
    }

    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background: var(--bg-color);
        color: var(--text-color);
        line-height: 1.6;
    }

    .team-section {
        padding: 120px 20px 80px;
        position: relative;
    }

    .team-header {
        text-align: center;
        margin-bottom: 70px;
        position: relative;
    }

    .team-header h2 {
        font-size: 42px;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
    }

    .team-header h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
        border-radius: 2px;
    }

    .team-header p {
        font-size: 18px;
        color: var(--primary-light);
        max-width: 600px;
        margin: 30px auto 0;
    }

    .header-decoration {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: -1;
    }

    .decoration-circle {
        position: absolute;
        border-radius: 50%;
        opacity: 0.1;
    }

    .decoration-circle:nth-child(1) {
        width: 100px;
        height: 100px;
        background-color: var(--primary-color);
        top: 10%;
        left: 10%;
    }

    .decoration-circle:nth-child(2) {
        width: 150px;
        height: 150px;
        background-color: var(--secondary-color);
        bottom: 10%;
        right: 10%;
    }

    .decoration-circle:nth-child(3) {
        width: 70px;
        height: 70px;
        background-color: var(--primary-light);
        top: 50%;
        right: 15%;
    }

    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .team-member {
        background: var(--card-bg);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: var(--shadow);
        transition: var(--transition);
        position: relative;
    }

    .team-member:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .team-member.featured {
        grid-column: 1 / -1;
        max-width: 400px;
        margin: 0 auto;
    }

    .team-member.featured .member-image {
        height: 280px;
    }

    .member-image {
        position: relative;
        height: 250px;
        overflow: hidden;
    }

    .team-photo {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: var(--transition);
    }

    .team-member:hover .team-photo {
        transform: scale(1.05);
    }

    .member-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, transparent, rgba(94, 53, 177, 0.8));
        display: flex;
        align-items: flex-end;
        justify-content: center;
        opacity: 0;
        transition: var(--transition);
        padding: 20px;
    }

    .team-member:hover .member-overlay {
        opacity: 1;
    }

    .social-links {
        display: flex;
        gap: 15px;
        margin-bottom: 20px;
    }

    .social-link {
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color);
        text-decoration: none;
        transition: var(--transition);
    }

    .social-link:hover {
        background: white;
        transform: translateY(-3px);
    }

    .social-link svg {
        width: 18px;
        height: 18px;
    }

    .member-info {
        padding: 25px;
        text-align: center;
    }

    .member-name {
        font-size: 20px;
        font-weight: 700;
        color: var(--text-color);
        margin: 0 0 8px;
    }

    .member-role {
        font-size: 14px;
        font-weight: 600;
        color: var(--secondary-color);
        margin: 0 0 12px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .member-bio {
        font-size: 14px;
        color: var(--text-light);
        margin: 0;
        line-height: 1.5;
    }

    @media (min-width: 768px) {
        .team-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .team-member.featured {
            grid-column: span 2;
        }
    }

    @media (min-width: 1024px) {
        .team-grid {
            grid-template-columns: repeat(3, 1fr);
        }
        
        .team-member.featured {
            grid-column: span 1;
            max-width: 100%;
        }
    }

    @media (max-width: 767px) {
        .team-section {
            padding: 100px 15px 60px;
        }

        .team-header h2 {
            font-size: 32px;
        }

        .team-header p {
            font-size: 16px;
        }

        .team-grid {
            grid-template-columns: 1fr;
        }

        .team-member.featured {
            max-width: 100%;
        }
    }

    @media (max-width: 480px) {
        .team-header h2 {
            font-size: 28px;
        }

        .member-info {
            padding: 20px;
        }
    }
</style>

@endsection