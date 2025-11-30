<style>
    .navbar-custom {
        background-color: white;
        border-radius: 40px;
        margin: 20px auto;
        padding: 14px 32px;
        /* Perbesar padding */
        width: 92%;
        /* Lebarkan navbar */
        max-width: 1200px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .btn-gradient {
        background: linear-gradient(to right, #a78bfa, #c084fc);
        border: none;
        border-radius: 12px;
        padding: 8px 20px;
        color: white;
        font-weight: 500;
        text-decoration: none;
    }

    .btn-gradient:hover {
        background: linear-gradient(to right, #c084fc, #a78bfa);
        color: white;
    }

    /* Sticky effect when scroll */
    .navbar-custom.scrolled {
        margin: 0 auto;
        border-radius: 0;
        width: 100%;
        max-width: 100%;
        padding: 10px 20px;
    }
</style>




<nav class="navbar navbar-expand-md navbar-custom fixed-top d-flex align-items-center justify-content-between">
    <div class="d-flex align-items-center gap-2">
        <img src="{{ asset('images/logo.png') }}" alt="ISEMA Logo" style="height: 40px;">
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav gap-4 fs-6 fw-medium">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('/') ? 'text-purple active' : 'text-dark' }}" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('about') ? 'text-purple active' : 'text-dark' }}" href="{{ url('/about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{url('/product')}}">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('contact') ? 'text-purple active' : 'text-dark' }}" href="{{ route('contact') }}">Contact</a>
            </li>
        </ul>
    </div>
    <a class="btn btn-gradient d-none d-md-block color-white" href="https://wa.me/6282299543317?text=Halo,saya ingin bertanya">
        Hubungi ISEMA
    </a>
</nav>


<script>
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar-custom');
        if (window.scrollY > 10) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>