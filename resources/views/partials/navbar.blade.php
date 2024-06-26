<nav class="navbar navbar-expand-xl fixed-top">
  <div class="container-fluid">
      <span class="navbar-brand">HKBP Sultan Mazmur Pancawati</span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" data-feather="menu"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                  <a class="nav-link {{ ($active === 'beranda') ? 'active' : '' }}" aria-current="page" href="/">Beranda</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ ($active === 'parhalado') ? 'active' : '' }}" href="/parhalado">Parhalado</a>
              </li>
              <li class="nav-item dropdown">
                  <span class="nav-link {{ ($active === 'koinonia') ? 'active' : '' }}" id="koinoniaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Koinonia <i class="bi bi-chevron-down"></i>
                  </span>
                  <ul class="dropdown-menu" aria-labelledby="koinoniaDropdown">
                      <li><a class="dropdown-item" href="/sekolahminggu">Sekolah Minggu</a></li>
                      <li><a class="dropdown-item" href="/remaja">Remaja</a></li>
                      <li><a class="dropdown-item" href="/naposo">Naposo</a></li>
                      <li><a class="dropdown-item" href="/parompuan">Parompuan</a></li>
                      <li><a class="dropdown-item" href="/ama">Ama</a></li>
                  </ul>
              </li>
              <li class="nav-item dropdown">
                  <span class="nav-link {{ ($active === 'marturia') ? 'active' : '' }}" id="marturiaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Marturia <i class="bi bi-chevron-down"></i>
                  </span>
                  <ul class="dropdown-menu" aria-labelledby="marturiaDropdown">
                      <li><a class="dropdown-item" href="/zending">Zending</a></li>
                      <li><a class="dropdown-item" href="/musik">Musik</a></li>
                  </ul>
              </li>
              <li class="nav-item dropdown">
                  <span class="nav-link {{ ($active === 'diakonia') ? 'active' : '' }}" id="diakoniaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Diakonia <i class="bi bi-chevron-down"></i>
                  </span>
                  <ul class="dropdown-menu" aria-labelledby="diakoniaDropdown">
                      <li><a class="dropdown-item" href="/sosial">Sosial</a></li>
                      <li><a class="dropdown-item" href="/pendidikan">Pendidikan</a></li>
                      <li><a class="dropdown-item" href="/kesehatan">Kesehatan</a></li>
                      <li><a class="dropdown-item" href="/kemasyarakatan">Kemasyarakatan</a></li>
                  </ul>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ ($active === 'berita') ? 'active' : '' }}" href="/berita">Berita</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ ($active === 'galeri') ? 'active' : '' }}" href="/galeri">Galeri</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ ($active === 'layanan') ? 'active' : '' }}" href="/layanan">Layanan</a>
              </li>
          </ul>
      </div>
  </div>
</nav>

<style>
  .feather {
            stroke: #FFFFFF !important;
        }

        .navbar {
            width: 100%;
            background: #00397D;
            font-family: 'Nunito';
            height: 70px;
            padding-left: 4% !important;
            padding-right: 4% !important;
        }

        .navbar-brand, .navbar-brand:hover {
            color: #FFFFFF;
            font-weight: 500 !important;
            font-size: 22px !important;
            margin-right: 50px !important;
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-toggler-icon {
            width: 30px;
            height: 30px;
        }

        .nav-link {
            color: #AAC5FF !important;
            font-weight: 400;
            font-size: 18px !important;
            padding-right: 6px !important;
        }

        .nav-link:hover,
        .nav-link.active,
        .nav-item.dropdown:hover .nav-link {
            color: #FFFFFF !important;
            font-weight: 500 !important;
        }

        .nav-item.dropdown .nav-link i {
            font-size: 14px !important;
        }

        .nav-item.dropdown .nav-link.active i,
        .nav-item.dropdown .nav-link:hover i {
            color: #FFFFFF !important;
        }

        .dropdown-menu {
            background: #ffffff !important;
            color: #00397D !important;
            font-weight: 500 !important;
            font-size: 18px !important;
        }

        .dropdown-item {
            color: #00397D !important;
            font-weight: 500;
            background: #ffffff !important;
        }

        .dropdown-item:hover,
        .dropdown-item:focus {
            background: #00397D !important;
            color: #ffffff !important;
        }

        @media (max-width: 575.98px) {
            .navbar {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 10px 15px;
                height: auto;
            }

            .navbar-toggler {
                width: 30px !important;
                height: 30px !important;
                margin: 0 !important;
                padding: 0 !important;
            }

            .navbar-toggler-icon {
                width: 20px !important;
                height: 20px !important;
                margin: 0 !important;
                padding: 0 !important;
            }

            .navbar-brand, .navbar-brand:hover {
                font-size: 16px !important;
                margin: 0 !important;
                padding: 0 !important;
            }

            .navbar-collapse {
                background: #00397D;
                width: 100% !important;
                margin-top: 4% !important;
                padding-right: 0 !important;
                padding-left: 0 !important;
                margin-right: 0 !important;
                margin-left: 0 !important;
            }

            .nav-link {
                font-size: 16px !important;
                padding: 8px 10px;
                display: block;
                color: #ffffff !important;
            }

            .dropdown-menu {
                margin-top: 0;
                min-width: auto;
                background: #ffffff;
                color: #00397D;
                font-weight: 500;
                font-size: 16px !important;
            }

            .dropdown-item {
                background: #ffffff;
                color: #00397D;
            }

            .dropdown-item:hover,
            .dropdown-item:focus {
                background: #00397D;
                color: #ffffff;
            }
        }

        @media (min-width: 576px) and (max-width: 991.98px) {
            .navbar-brand, .navbar-brand:hover {
                font-size: 18px !important;
            }

            .navbar-collapse {
                background: #00397D;
                width: 100% !important;
                padding-right: 0 !important;
                padding-left: 0 !important;
                margin-right: 0 !important;
                margin-left: 0 !important;
            }

            .nav-link {
                font-size: 15px;
                color: #ffffff !important;
            }

            .dropdown-menu {
                background: #ffffff;
                color: #00397D;
                font-weight: 500;
                font-size: 16px;
            }

            .dropdown-item {
                background: #ffffff;
                color: #00397D;
            }

            .dropdown-item:hover,
            .dropdown-item:focus {
                background: #00397D;
                color: #ffffff;
            }
        }

        @media (min-width: 992px) {
            .navbar-brand, .navbar-brand:hover {
                font-size: 20px !important;
            }

            .navbar-collapse {
                background: #00397D;
                width: 100% !important;
                padding-right: 0 !important;
                padding-left: 0 !important;
                margin-right: 0 !important;
                margin-left: 0 !important;
            }

            .nav-link {
                font-size: 16px;
            }

            .dropdown-menu {
                background: #ffffff;
                color: #00397D;
                font-weight: 500;
                font-size: 16px;
            }

            .dropdown-item {
                background: #ffffff;
                color: #00397D;
            }

            .dropdown-item:hover,
            .dropdown-item:focus {
                background: #00397D;
                color: #ffffff;
            }
        }
</style>

<script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dropdowns = document.querySelectorAll('.nav-item.dropdown');
            dropdowns.forEach(function(dropdown) {
                dropdown.addEventListener('mouseenter', function() {
                    const link = dropdown.querySelector('.nav-link');
                    const menu = dropdown.querySelector('.dropdown-menu');
                    const chevron = link.querySelector('i');
                    menu.classList.add('show');
                    chevron.classList.add('active');
                });
                dropdown.addEventListener('mouseleave', function() {
                    const link = dropdown.querySelector('.nav-link');
                    const menu = dropdown.querySelector('.dropdown-menu');
                    const chevron = link.querySelector('i');
                    menu.classList.remove('show');
                    chevron.classList.remove('active');
                });
            });
        });
    </script>