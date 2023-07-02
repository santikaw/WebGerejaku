<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary text-white p-2">
  <div class="container-fluid">
    <a href="/home"><img src="asset/logoGKJnav.png" style="height: 35px;"></a>
    <a class="navbar-brand" style="padding: 8px; margin-right: 2rem;" href="/home">Sinode GKJ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class=" collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto ">
        <li class="nav-item dropdown ">
          <a class="nav-link mx-2 dropdown-toggle text-white" href="/berita" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Berita
          </a>
          <ul class="dropdown-menu ms-auto" aria-labelledby="navbarDropdownMenuLink">
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="/kategorisinode">Sinode</a></li>
            <li><a class="dropdown-item" href="/kategoriklasis">Klasis</a></li>
            <li><a class="dropdown-item" href="/kategorigereja">Gereja</a></li>
            <li><a class="dropdown-item" href="/kategorilembaga">Lembaga</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
          </ul>
        </li>
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item dropdown">
              <a class="nav-link mx-2 dropdown-toggle text-white" href="/artikelpojok" id="navbarPrimaryDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Artikel
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="/artikelpojok">Pojok Inspirasi</a></li>
                <li><a class="dropdown-item" href="/artikel">Umum</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
              </ul>
            </li>
            <ul class="navbar-nav ms-auto "></ul>
            <li class="nav-item dropdown">
              <a class="nav-link mx-2 dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Agenda
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="/kalender">Kalender Liturgi</a></li>
                <li><a class="dropdown-item" href="/jadwal">Agenda Harian</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link mx-2 dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profil
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="/profilGKJ">Lambang GKJ</a></li>
                <li><a class="dropdown-item" href="#arsyillapunya">Sejarah GKJ</a></li>
                <li><a class="dropdown-item" href="/tatagereja">Tata Gereja & Tata Laksana</a></li>
                <li><a class="dropdown-item" href="/pokokajaran">Pokok-Pokok Ajaran GKJ</a></li>
                <li><a class="dropdown-item" href="/profillembaga">Lembaga Sinode dan Lembaga Kerjasama</a></li>
                <li><a class="dropdown-item" href="/profilstrukturgereja">Bapelsin & Bawasin GKJ</a></li>
                <li><a class="dropdown-item" href="/profilKlasis">Profil Klasis GKJ</a></li>
                <li><a class="dropdown-item" href="/profilmars">Mars & Hymne GKJ</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
              </ul>
            </li>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="{{ request('search') }}">
              <button class="btn btn-outline-info text-white" type="submit">Search</button>
            </form>
        </div>
    </div>
    <iframe hidden width="560" height="315" src="https://www.youtube.com/watch?v=HZxiW5EhLtE?autoplay=1" allow="autoplay" title="Lagu GKJ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
             </iframe>
</nav>