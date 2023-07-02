<!DOCTYPE html>
<html lang="en">

@include('partials.head');
@include('partials.hovernavbar');

<body>
    @include('partials.navbar');
    <!--/* Card */-->
    <center>
        <div class="card" style="width: 78rem;">
            <div class="card-body text-start" style="margin-left: 25px; margin-right: 25px;">
                <h5 class="card-title" style="margin-top: 20px; font-size: 40px;">Lembaga Sinode dan Lembaga Kerjasama</h5>
                <!--/* Card Button */-->
                <div class="card" style="width: 71rem; margin-top: 80px; margin-left: 10px;">
                    <div class="card-header">
                        <div class="container">
                            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-4 row-cols-lg-5">
                                <div class="col">
                                    <a class="btn" href="#" role="button">Yayasan Sosial Kristen Salib Putih</a>
                                </div>
                                <div class="col">
                                    <a class="btn" href="#" role="button">Yayasan Kemakmuran Rejeki</a>
                                </div>
                                <div class="col">
                                    <a class="btn" href="#" role="button">Yayasan Kristen Trukajaya</a>
                                </div>
                                <div class="col">
                                    <a class="btn" href="#" role="button">Yayasan Taman Pustaka Kristen Indonesia</a>
                                </div>
                                <div class="col">
                                    <a class="btn" href="#" role="button">Dana Pensiun GKJ</a>
                                </div>
                                <div class="col">
                                    <a class="btn" href="#" role="button">PT. Rumeksa Mekaring Sabda</a>
                                </div>
                                <div class="col">
                                    <a class="btn" href="#" role="button">PT. Rumekar Mekaring Kaya</a>
                                </div>
                                <div class="col">
                                    <a class="btn" href="#" role="button">Pusat Kateketik Sinode GKJ (PUSKAT)</a>
                                </div>
                                <div class="col">
                                    <a class="btn" href="#" role="button">SOLOTECH University</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-muted" style="margin-left: 10px; margin-top: 18px; margin-bottom: 18px;">Data Belum tersedia</li>

                    </ul>
                </div>

                <!--/* Accordion */-->
                <div class="accordion" id="accordionExample" style="margin-left: 8px; margin-top: 20px; width: 71rem">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"></button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!--/* Menu Dropdown */-->
                <div class="dropdown" style="margin-top: 20px; margin-bottom: 40px;">
                    <button class="btn dropdown-toggle text-muted" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">BERITA</button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">SINODE</a></li>
                        <li><a class="dropdown-item" href="#">KLASIS</a></li>
                        <li><a class="dropdown-item" href="#">GEREJA</a></li>
                        <li><a class="dropdown-item" href="#">LEMBAGA</a></li>
                    </ul>

                    <button class="btn dropdown-toggle text-muted" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">PENERBITAN</button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">BUKU UTAMA</a></li>
                        <li><a class="dropdown-item" href="#">PEMBINAAN WARGA GEREJA</a></li>
                        <li><a class="dropdown-item" href="#">TEMATIK</a></li>
                    </ul>

                    <button class="btn dropdown-toggle text-muted" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">ARTIKEL</button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">POJOK INSPIRASI</a></li>
                        <li><a class="dropdown-item" href="#">UMUM</a></li>
                    </ul>

                    <button class="btn dropdown-toggle text-muted" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">AGENDA</button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">KALENDER LITURGI</a></li>
                        <li><a class="dropdown-item" href="#">AGENDA HARIAN</a></li>
                    </ul>

                    <button class="btn dropdown-toggle text-muted" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">PROFIL</button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">LAMBANG GKJ</a></li>
                        <li><a class="dropdown-item" href="#">SEJARAH GKJ</a></li>
                        <li><a class="dropdown-item" href="#">TATA GEREJA & TATA LAKSANA</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </center>

    <!--/* Footer */-->
    <div class="card mt-5">
        <div class="card-header navbar-dark text-white" style="background-color: #000000; background-size: 7cm;">
            <a style="padding: 8px; margin-right: 1rem; font-size: 10px;"><a style="color: #969595;">Designed by </a><b>Elegant Themes</b><a style="color: #969595;"> | Powered by </a><b>WordPress</b></a> <i class="bi bi-facebook" style="margin-left: 750px;"></i> <i class="bi bi-twitter" style="margin-left: 10px;"></i> <i class="bi bi-instagram" style="margin-left: 10px;"></i> <i class="bi bi-youtube" style="margin-left: 10px;"></i>
        </div>

        <div class="card-body" style="background-color: #eeeef3;"">
            <p class=" card-text" style="font-size: 14px; color: #969595;"> Notice: ob_end_flush(): failed to send buffer of zlib output compression (0) in /usr/share/nginx/www.sinodegkj.or.id/html/wp-includes/functions.php on line 5279</p>
        </div>
    </div>

    <!--/* Bootstrap */-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

@include('partials.footer');

</html>