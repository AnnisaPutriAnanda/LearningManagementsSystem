<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar scroll</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tabel Master
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="halaman_admin.php?page=kategori">kategori</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="halaman_admin.php?page=level">Level</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="halaman_admin.php?page=tipe">Tipe</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="halaman_admin.php?page=alur">Alur</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <!-- Navbar -->
</header>