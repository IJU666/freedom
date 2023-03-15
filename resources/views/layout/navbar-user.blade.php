<nav class="navbar navbar-expand-lg sticky-top container" style="backdrop-filter: blur(32px);">
    <div class="container-fluid">
        <a class="navbar-brand fw-semibold" href="#">Freedom</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav col-lg-7  justify-content-end">
                <a class="nav-link fw-semibold" aria-current="page" href="/#tentang">Tentang Freedom</a>
                <a class="nav-link fw-semibold me-2" href="/rincian">Pengaduan</a>
            </div>
            <div class="navbar-nav col-lg-5 justify-content-end">
                @if (!Auth::guard('user')->check() && !Auth::guard('masyarakat')->check() && !Auth::guard('petugas')->check())
                    <a class="btn fw-semibold" href="{{ 'login' }}">Masuk</a>
                    <a class="btn btn-primary fw-semibold" href="{{ 'daftar' }}">Daftar</a>
                @elseif (Auth::guard('masyarakat')->check())
                    <div class="d-flex">
                        <div class="my-auto fw-semibold">
                            {{ Auth::guard('masyarakat')->user()->name }}
                        </div>
                        <form action="/keluar" method="post">
                            @csrf
                            <div>
                                <button type="submit" class="btn btn-danger mt-3 ms-2"
                                    onclick="return confirm('Yakin untuk keluar?')">Keluar</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
        @endif
    </div>
    </div>
</nav>
