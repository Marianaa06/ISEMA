
<nav class="navbar navbar-expand-md navbar-custom d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center gap-2">
            <div class="circle-icon">
                <i class="fas fa-tag"></i>
            </div>
            <span class="fw-semibold fs-5 m-0 user-select-none">ISEMA</span>
        </div>
        <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
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
                    <a class="nav-link {{ request()->is('product*') ? 'text-purple active' : 'text-dark' }}" href="{{ url('/product') }}">Product</a>
                </li>
                <li class="nav-item dropdown">
                    <a aria-expanded="false" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#" role="button">Contact Us</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">Sub Info 1</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Sub Info 2</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Contact</a>
                </li>
            </ul>
        </div>
        <a class="btn btn-gradient d-none d-md-block color-white" href="https://wa.me/6282299543317?text=Halo,saya ingin bertanya"> Hubungi ISEMA</a>
    </nav>

