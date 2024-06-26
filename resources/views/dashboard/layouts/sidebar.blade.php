<div class="sidebar col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary sidebar-dashboard" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">HKBP Sultan Mazmur Pancawati</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                        <svg class="bi" data-feather="home"></svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/warta*') ? 'active' : '' }}" href="/dashboard/warta">
                        <svg class="bi" data-feather="file-text"></svg>
                        Warta Jemaat
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/berita*') ? 'active' : '' }}" href="/dashboard/berita">
                        <svg class="bi" data-feather="info"></svg>
                        Berita
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/galeri*') ? 'active' : '' }}" href="/dashboard/galeri">
                        <svg class="bi" data-feather="image"></svg>
                        Galeri
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/layanan*') ? 'active' : '' }}" href="/dashboard/layanan">
                        <svg class="bi" data-feather="user-plus"></svg>
                        Jemaat Baru
                    </a>
                </li>
            </ul>
            <hr class="my-3">
            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="nav-link d-flex align-items-center gap-2"><svg class="bi" data-feather="log-out"></svg>Logout</i></button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

<style>
    .sidebar-dashboard {
        font-family: 'Nunito';
        height: 100vh !important;
        border: none !important;
    }

    .nav-link {
        color: #AAC5FF;
    }

    .nav-link.active {
        color: #00397D !important;
    }

    .sidebar, .offcanvas-header, .offcanvas-body, .nav-item, .nav-link, .btn-close, .hr {
        border: none !important;
    }
</style>
