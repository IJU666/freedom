<div id="sidebar" class="active" style="background-color: #f5f5f5;">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="" class="text-decoration-none text-secondary">ASPERA</a>
                </div>
                <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                    <div class="form-check fs-6">
                        <i id="toggle-dark"></i>
                        <label class="form-check-label"></label>
                    </div>
                </div>
                <div class="sidebar-toggler  x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu" style="height: 65vh;">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ $title === 'Pengaduan' ? 'active' : '' }}">
                    <a href="/pengaduan" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Data Pengaduan</span>
                    </a>
                </li>
                @if (Auth::guard('user')->check())
                    <li class="sidebar-item {{ $title === 'Pengguna' ? 'active' : '' }} ">
                        <a href="/pengguna" class='sidebar-link'>
                            <i class="bi bi-person-badge-fill"></i>
                            <span>Data Pengguna</span>
                        </a>
                    </li>
                @endif
                <li class="sidebar-item {{ $title === 'Hasil Pengaduan' ? 'active' : '' }} ">
                    <a href="/hasil" class='sidebar-link'>
                        <i class="fa-solid fa-check"></i>
                        <span>Hasil Pengaduan</span>
                    </a>
                </li>

            </ul>
            <ul class="menu float-bottom">
                <form method="POST" action="/keluar">
                    @csrf

                    {{-- <button type="submit" class="btn">
                        <i class="fa-solid fa-door-open"></i>
                        <span>Keluar</span>
                    </button> --}}

                    <li class="sidebar-item ">
                    <li class="sidebar-link">
                        <button class="btn" type="submit" onclick="return confirm('yakin untuk keluar?')">
                            <i class="fa-solid fa-door-open"></i>
                            <span class="fw-semibold">
                                Keluar
                            </span>
                        </button>
                    </li>
                    </li>
                </form>
            </ul>
        </div>
    </div>
</div>
