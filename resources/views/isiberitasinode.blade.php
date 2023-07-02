<!DOCTYPE html>
<html lang="en">
@include('partials.head');
@include('partials.hovernavbar');

<body style="background-color: #eeeef3;">
    @include('partials.navbar');

    <!--/* Card Artikel */-->
    <div class="card mb-5 shadow-sm" style="margin-top: 120px; margin-bottom:  20px; margin: 100px auto; width: 59rem;">
        <div class="card-header bg-transparent text-center" style="margin-top: 4rem;">
            <h5 style="font-size: 25px;">PERMEN DENOMINASI</h5>
            <p class="text-muted" style="font-size: 14px; margin-bottom: 4rem;"> Sep 6, 2022 | <a style="color: #000000;"> Artikel, Berita, Info Terbaru, Lembaga, Pojok Inspirasi, Sinode</a></p>
        </div>

        <img src="https://www.sinodegkj.or.id/wp-content/uploads/2022/09/img_20220831_0926406381655892003852465-1280x640.jpg" height="460px" alt="image">

        <div class="card-body text-success">
            <p class="card-text text-muted" style="margin-top: 8px; margin-left: 30px; margin-right: 30px; font-size: 14px; color: #000000;">Di Networking Zone Sidang WCC, ada satu pameran yang menarik. Pameran itu dari Dewan Gereja-gereja di Jerman (ACK).
                Mereka menyajikan berstoples-stoples permen. Uniknya, permen itu diberi nama berdasarkan denominasi gereja yang ada di Jerman.
                Masing-masing denominasi diwakili oleh satu jenis/bentuk permen, dengan nama masing-masing. Contohnya, Happy Independent dan Methodist Vampire.
                Mengapa dibuat demikian? Harapan mereka, kehidupan gereja dan relasi gereja-gereja menjadi manis, seperti permen yang manis.
                Unik dan kreatif, bukan? Jadi… permen apakah gerejamu?
            </p>
        </div>

        <!--/* Foto */-->
        <div class="container">
            <div class="row row-cols-1 g-2 g-lg-3" style="margin-left: 30px; margin-right: 30px;">
                <div class="col">
                    <img src="https://thie36.files.wordpress.com/2022/09/img_20220906_0609591719341731022944601.jpg?w=461" height="960px" alt="img">
                </div>
                <div class="col">
                    <img src="https://thie36.files.wordpress.com/2022/09/img_20220906_0610108758758022229087009.jpg?w=461" height="960px" alt="img">
                </div>
                <div class="col">
                    <img src="https://thie36.files.wordpress.com/2022/09/img_20220831_0926406381655892003852465.jpg?w=768" height="380px" alt="img">
                </div>
                <div class="col">
                    <img src="https://thie36.files.wordpress.com/2022/09/img_20220831_092957962019518367386868.jpg?w=768" height="448px" alt="img">
                </div>
                <div class="col">
                    <img src="https://thie36.files.wordpress.com/2022/09/img-20220831-wa00329176240016763928164.jpg?w=768" height="698px" alt="img">
                </div>
                <div class="col">
                    <img src="https://thie36.files.wordpress.com/2022/09/img-20220831-wa00403006761019426573063.jpg?w=768" height="698px" alt="img">
                </div>
            </div>

            <p class="text-muted mt-2" style="font-size: 10px; margin-left: 35px; margin-right: 30px;"> Sponsored Content </p>
        </div>

        <div class="card-footer bg-transparent text-center">
            <p class="text-muted" style="margin-top: 2px;"><b style=" font-size: 10px;"> SHARE: </b><i class="bi bi-facebook" style="font-size: 25px; margin-left: 10px;"></i> <i class="bi bi-linkedin" style="font-size: 25px; margin-left: 5px;"></i> <i class="bi bi-envelope-fill" style="font-size: 25px; margin-left: 5px;"></i></p>
        </div>
    </div>


    <!--/* Button */-->

    <div class="btnstandart">
        <button type="button" class="btn btn-sm" style="font-size: 10px; width: 80px; background-color: #c9c9c9; color: #5b5b5b; margin-left: 188px;"><b><i class="bi bi-chevron-left"></i> PREVIOUS </b></button>
        <button type="button" class="btn btn-sm" style="font-size: 10px; background-color: #c9c9c9; color: #5b5b5b; margin-left: 51rem;"><b> NEXT <i class="bi bi-chevron-right"></i></b></button>
    </div>


    <!--/* Button Teks*/-->
    <div class="btnteks">
        <button type="button" class="btn text-start" style="font-size: 10px; width: 130px; padding: 0px; margin-left: 188px;"> Presiden WCC 2022-2030 </button>
        <button type="button" class="btn text-end" style="font-size: 10px; width: 240px; padding: 0px; margin-left: 36.5rem;"> karo wong sugih lumebu ing Kratoning Allah (Lukas 18:25)–klik disini untuk membaca renungan </button>
    </div>


    <!--/* Button up to top */-->
    <a class="gotopbtn" href="#"><i class="bi bi-chevron-up"></i></a>

    <!--/* Footer */-->
    <div class="card mt-3">
        <div class="card-header navbar-dark text-white" style="background-color: #000000; background-size: 7cm;">
            <a style="padding: 8px; margin-right: 1rem; font-size: 10px;"><a style="color: #969595;">Designed by </a><b>Elegant Themes</b><a style="color: #969595;"> | Powered by </a><b>WordPress</b></a> <i class="bi bi-facebook" style="margin-left: 450px;"></i> <i class="bi bi-twitter" style="margin-left: 10px;"></i> <i class="bi bi-instagram" style="margin-left: 10px;"></i> <i class="bi bi-youtube" style="margin-left: 10px;"></i>
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