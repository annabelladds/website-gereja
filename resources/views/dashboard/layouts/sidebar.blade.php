<div class="sidebar col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary sidebar-dashboard" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h4 class="offcanvas-title" id="sidebarMenuLabel">HKBP Sultan Mazmur Pancawati</h4>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item sidebar-nav-item">
                    <a class="nav-link sidebar-nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                        <svg class="bi" data-feather="home"></svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item sidebar-nav-item">
                    <a class="nav-link sidebar-nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/warta*') ? 'active' : '' }}" href="/dashboard/warta">
                        <svg class="bi" data-feather="file-text"></svg>
                        Warta Jemaat
                    </a>
                </li>
                <li class="nav-item sidebar-nav-item">
                    <a class="nav-link sidebar-nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/berita*') ? 'active' : '' }}" href="/dashboard/berita">
                        <svg class="bi" data-feather="info"></svg>
                        Berita
                    </a>
                </li>
                <li class="nav-item sidebar-nav-item">
                    <a class="nav-link sidebar-nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/galeri*') ? 'active' : '' }}" href="/dashboard/galeri">
                        <svg class="bi" data-feather="image"></svg>
                        Galeri
                    </a>
                </li>
                <li class="nav-item sidebar-nav-item">
                    <a class="nav-link sidebar-nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/layanan*') ? 'active' : '' }}" href="/dashboard/layanan">
                        <svg class="bi" data-feather="user-plus"></svg>
                        Jemaat Baru
                    </a>
                </li>
            </ul>
            <hr class="my-2">
            <h6 class="sidebar-heading- d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted"><span>Administrator</span></h6>
            <ul class="nav flex-column mb-auto">
                <li class="nav-item sidebar-nav-item">
                    <a class="nav-link sidebar-nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/kategori*') ? 'active' : '' }}" href="/dashboard/kategori">
                        <svg class="bi" data-feather="grid"></svg>
                        Kategori Berita
                    </a>
                </li>
            </ul>
            <ul class="nav flex-column mb-auto">
                <li class="nav-item sidebar-nav-item">
                    <a class="nav-link sidebar-nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/user*') ? 'active' : '' }}" href="/dashboard/user">
                        <svg class="bi" data-feather="users"></svg>
                        Data User
                    </a>
                </li>
            </ul>
            <hr class="my-3">
            <ul class="nav flex-column mb-auto">
                <li class="nav-item sidebar-nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="nav-link sidebar-nav-link d-flex align-items-center gap-2"><svg class="bi" data-feather="log-out"></svg>Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

<style>
    .sidebar-dashboard {
        font-family: 'Nunito';
        height: 100vh;
    }

    .sidebar-nav-link {
        color: #AAC5FF;
        font-size: 18px;
    }

    .sidebar-nav-link.active {
        color: #00397D !important;
    }

    .btn-close {
        font-size: 1.2rem;
    }

    @media (max-width: 575.98px) {
        .sidebar-dashboard {
            font-size: 16px !important;
        }

        .sidebar-nav-item {
            padding: 2% !important;
            font-size: 16px !important;
            margin-left: 2% !important;
        }

        .sidebar-nav-link {
            font-size: 16px !important;
        }

        .offcanvas-header {
            font-size: 18px;
        }

        .btn-close {
            font-size: 1rem;
        }
    }

    @media (min-width: 576px) and (max-width: 767.98px) {
        .sidebar-dashboard {
            font-size: 16px;
        }

        .sidebar-nav-link {
            font-size: 16px;
        }

        .offcanvas-header {
            font-size: 18px;
        }

        .btn-close {
            font-size: 1.1rem;
        }
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
        .sidebar-dashboard {
            font-size: 18px;
        }

        .sidebar-nav-link {
            font-size: 18px;
        }

        .offcanvas-header {
            font-size: 19px;
        }

        .btn-close {
            font-size: 1.15rem;
        }
    }

    @media (min-width: 992px) {
        .sidebar-dashboard {
            font-size: 18px;
        }

        .sidebar-nav-link {
            font-size: 18px;
        }

        .offcanvas-header {
            font-size: 20px;
        }

        .btn-close {
            font-size: 1.2rem;
        }
    }
</style>

<script>
    feather.replace();
</script>
