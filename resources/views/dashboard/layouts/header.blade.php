<header class="navbar sticky-top flex-md-nowrap p-0 shadow navbar-dashboard">
  <a class="navbar-brand col-md-3 col-lg-2 px-3 text-white">HKBP Sultan Mazmur Pancawati</a>
  <ul class="navbar-nav flex-row d-md-none">
    <li class="nav-item text-nowrap">
      <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span data-feather="menu"></span>
      </button>
    </li>
  </ul>
</header>

<style>
.navbar-dashboard {
  font-family: 'Nunito';
  color: #FFFFFF;
  font-style: normal;
  font-weight: 600 !important;
  background-color: black !important;
  height: 70px;
  border: none !important;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.navbar-brand, .navbar-nav .nav-item .nav-link {
  background-color: black !important;
  border: none !important;
}

.navbar {
  border: none !important;
}

@media (max-width: 575.98px) {
  .navbar-dashboard {
    justify-content: space-between;
    padding-left: 1% !important;
    padding-right: 0 !important;
  }

  .navbar-brand {
    flex-grow: 1;
    text-align: center;
    padding: 0 !important;
    font-size: 18px !important;
  }

  .navbar-nav {
    margin-left: auto;
  }

  .nav-link {
    padding: 0;
  }
}
</style>
