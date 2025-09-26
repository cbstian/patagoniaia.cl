<header class="patagonia-header fixed-top px-4">
    <nav class="navbar navbar-expand-lg navbar-dark py-3">
        <div class="container-fluid">
            <a class="navbar-brand font-bold text-patagonia-primary heading-sm" href="{{ route('home') }}">
                <img src="{{ asset('images/logo-sup-3.png') }}" class="img-fluid" style="max-height: 40px;" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link body-md text-white {{ Request::is('/') ? 'active text-patagonia-primary font-semibold' : '' }}" href="{{ route('home') }}">
                            Iniciativa Amazon IA
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link body-md text-white {{ Request::is('about*') ? 'active text-patagonia-primary font-semibold' : '' }}" href="#about">
                            Cómo utilizar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link body-md text-white {{ Request::is('services*') ? 'active text-patagonia-primary font-semibold' : '' }}" href="#services">
                            El proyecto
                        </a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <a href="https://plataforma.patagoniaia.cl/entrar" class="btn btn-primary me-3">Acceso</a>
                    <a href="https://plataforma.patagoniaia.cl/" class="btn btn-secondary">Crear una cuenta</a>
                </form>
            </div>
        </div>
    </nav>
</header>
