<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<head>
    <!--/* Required meta tags */-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--/* Bootstrap CSS */-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <!--/* link file css */-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!--/* link icon bootstrap */-->

    <title>{{$dbjadwal->nama_kegiatan}}</title>
</head>

<body style="background-color: #eeeef3;">
    @include('partials.hovernavbar')

    <!--/* Card Artikel */-->
    <div class="card mb-5 shadow-sm" style="margin-top: 100px; margin-bottom:  20px; margin: 100px auto; width: 59rem;">
        <div class="card-header bg-transparent text-center" style="margin-top: 2rem;">
            <h5 style="font-size: 25px;">ARTIKEL : REACH-ING EFFECTIVE COMMUNICATION PADA GEREJA KRISTEN JAWA</h5>
            <p class="text-muted" style="font-size: 14px; margin-bottom: 2rem;"> Dec 24, 2021 | Artikel, Info Terbaru, Umum<a style="color: #000000;"> Artikel, Berita, Info Terbaru, Lembaga, Pojok Inspirasi, Sinode</a></p>
        </div>

        <!-- <img src="https://www.sinodegkj.or.id/wp-content/uploads/2021/12/Reacing-1-1280x640.jpg" height="460px" alt="image"> -->
        <div class="text-center">
            <h4 style="margin-top: 2rem;"> <b>{{$dbjadwal->nama_kegiatan}}</b> </h4>
        </div>
        <div class="card-text text-muted" style="margin-top:14px; margin-left: 30px; margin-right: 30px; font-size: 14px; color: #000000;">
            <p>{{$dbjadwal->tanggal_kegiatan}}</p>
        </div>
        <div class="card-text text-muted" style="margin-left: 30px; margin-right: 30px; font-size: 14px; color: #000000;">
            <p>{{$dbjadwal->deskripsi_kegiatan}}</p>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

@include('partials.footer');

</html>