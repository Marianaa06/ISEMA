<style>
    .footer-elegant {
        background-color: #f6f3fc;
        padding: 60px 0 30px;
        border-top: 2px solid rgba(111, 66, 193, 0.2);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #4b367c;
    }

    .footer-elegant h5 {
        font-weight: 600;
        font-size: 1.1rem;
        position: relative;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .footer-elegant h5::after {
        content: '';
        position: absolute;
        width: 40px;
        height: 2px;
        background-color: #c5aaff;
        bottom: -8px;
        left: 0;
    }

    .footer-elegant a {
        color: #6f42c1;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .footer-elegant a:hover {
        color: #4a2c8c;
        text-decoration: underline;
    }

    .social-icons a {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        margin-right: 10px;
        background: rgba(255, 255, 255, 0.4);
        backdrop-filter: blur(5px);
        border-radius: 50%;
        text-align: center;
        color: #6f42c1;
        font-size: 18px;
        transition: all 0.3s ease-in-out;
    }

    .social-icons a:hover {
        background: #6f42c1;
        color: #fff;
        transform: scale(1.1);
    }

    .map-frame {
        width: 100%;
        height: 220px;
        border: none;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
    }

    .footer-bottom {
        text-align: center;
        padding-top: 30px;
        border-top: 1px solid #dcd1f3;
        color: #6c5b91;
    }

    @media (max-width: 767.98px) {
        .text-center-mobile {
            text-align: center;
        }

        .social-icons {
            justify-content: center;
        }
    }
</style>

<div class="container-fluid footer-elegant">
    <div class="container">
        <div class="row gy-4">
            <!-- Kolom 1 -->
            <div class="col-md-4 text-center-mobile">
                <h5>Link Terkait</h5>
                <ul class="list-unstyled">
                    <li><a href="https://techno-celebes.com/" target="_blank">Website Techno Celebes</a></li>
                </ul>

                <h5 class="mt-4">Kontak</h5>
                <ul class="list-unstyled">
                    <li><i class="bi bi-telephone-fill me-2"></i> <a href="tel:+6282189705433">+62-822-9954-3317</a></li>
                    <li><i class="bi bi-envelope-fill me-2"></i> <a href="mailto:official@techno-celebes.com">official@techno-celebes.com</a></li>
                </ul>
            </div>

            <!-- Kolom 2 -->
            <div class="col-md-4 text-center-mobile">
                <h5>Social Media</h5>
                <div class="social-icons d-flex">
                    <a href="https://www.instagram.com/technocelebes" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/share/1Ajxosb8o7/?mibextid=wwXIfr" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <!-- <a href="#"><i class="fab fa-youtube"></i></a> -->
                    <a href="https://www.tiktok.com/@techno.celebes?_t=ZS-8xZpVSu5rfk&_r=1"><i class="fab fa-tiktok"></i></a>
                </div>

                <h5 class="mt-4">Alamat</h5>
                <p class="mb-1">Sistem Informasi Akademik <strong>ISEMA</strong></p>
                <p class="mb-0">Jalan Tadulako, Besusu Tengah, Palu Timur</p>
                <p>Sulawesi Tengah, Indonesia</p>
            </div>

            <!-- Kolom 3 -->
            <div class="col-md-4 text-center-mobile">
                <h5>Informasi</h5>
                <ul class="list-unstyled">
                    <li><a href="{{url('/tims')}}">Tims</a></li>
                    <li><a href="{{url('/credit')}}">Credit</a></li>
                    <li><a href="{{url('/privacy')}}">Privacy Policy</a></li>
                    <li><a href="{{url('/karir')}}">Karir</a></li>
                    <li><a href="/dokumentasi">Dokumentasi</a></li>
                    <li><a href="/term">Term And Condition</a></li>
                </ul>
            </div>

            <div class="footer-bottom mt-4 text-center">
                <small>© 2025 <strong>ISEMA</strong> • All rights reserved.</small>
            </div>
        </div>
    </div>