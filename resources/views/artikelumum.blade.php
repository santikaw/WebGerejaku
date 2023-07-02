<!doctype html>
<html lang="en">
@include('partials.head');
@include('partials.hovernavbar');

<body style="background-color: #eeeef3;">
    @include('partials.navbar');
    <div class="container mt-5" style="padding: 6px;">
        <!--/* mengatur jarak sisi atas page dgn text/card */-->

        <h4 style="margin-left: 1.5rem;"><b>ARTIKEL: UMUM</b></h4>
        <section class="d-flex justify-content-center">
            <div class="container">
                <!-- <div class="row g-4"> -->
                <div class="row g-4">
                    @foreach ($dbartikel as $brita)
                    <div class="col-md-4">
                        <div class="card h-95 shadow-sm">
                            <img src="https://www.sinodegkj.or.id/wp-content/uploads/2022/02/teo-627x376.jpg" height="180px" class="card-img-top" alt="image">
                            <div class="card-body">
                                <h5 class="card-title" style="color: #3EC2C3;"><b>{{$brita->judul_artikel}}</b></h5>
                                <p class="card-text text-muted" style="font-size: 13px;">by {{$brita->author_artikel}} | {{$brita->tanggal_artikel}} | Artikel, Info Terbaru, Umum | 0 <i class="bi bi-chat-fill"></i></p>
                                <p class="text-muted-isiartikel" id="isiartikel"> {{$brita->isi_artikel}}</p>
                                <a href="#" class="btn mt-2" style="background-color: #e1e1e1; color: #5b5b5b"><b> READ MORE </b></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- </div> -->
            </div>
        </section>


        <!--/* Button Page 1-2-3 */-->
        <div class="d-grid gap-1 d-sm-flex justify-content-sm-end">
            <button class="btn me-sm-2" type="button" style="background-color: #068de1; color: #ffffff"><b> 1 </b></button>
            <button class="btn me-sm-2" type="button" style="background-color: #e1e1e1; color: #5b5b5b"><b> 2 </b></button>
            <button class="btn me-sm-2" type="button" style="background-color: #e1e1e1; color: #5b5b5b"><b> 3 </b></button>
            <button class="btn me-sm-2" type="button" style="background-color: #e1e1e1; color: #5b5b5b"><b> > </b></button>
        </div>
    </div>


    <!--/* Button up to top */-->
    <a class="gotopbtn" href="#"><i class="bi bi-chevron-up"></i></a>

    <!-- /* Footer */
        <div class="card mt-3">
            <div class="card-header navbar-dark text-white" style="background-color: #000000; background-size: 7cm;">
                <a style="padding: 8px; margin-right: 1rem;" style="font-size: 10px;"><a style="color: #969595;">Designed by </a><b>Elegant Themes</b><a style="color: #969595;"> | Powered by </a><b>WordPress</b></a> <i class="bi bi-facebook"></i> <i class="bi bi-twitter"></i> <i class="bi bi-instagram"></i> <i class="bi bi-youtube"></i>
            </div>

            <div class="card-body" style="background-color: #eeeef3;"">
                <p class="card-text" style="font-size: 14px; color: #969595;"> Notice: ob_end_flush(): failed to send buffer of zlib output compression (0) in /usr/share/nginx/www.sinodegkj.or.id/html/wp-includes/functions.php on line 5279</p>
            </div>
        </div> -->

    <!--/* Bootstrap */-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

@include('partials.footer');

</html>