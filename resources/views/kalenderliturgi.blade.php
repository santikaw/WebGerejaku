<!DOCTYPE html>
<html lang="en">
@include('partials.head') @include('partials.hovernavbar')

<body>

    @include('partials.navbar')
    <section class="position-relative" style="margin-top: 6rem" once="menu" id="menu01-4k">
        <h4 style="margin-left: 4.5rem;"><b>Kalender Liturgi</b></h4>
        <div class="container">
            <div class="row g-4">
                @foreach ($dbjadwal as $item)
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://asset.kompas.com/crops/TMKa1jBfNAB52BIHSYb3huZF7lk=/0x0:640x427/750x500/data/photo/2021/11/25/619f82faeda6c.jpg" class="card-img-top" alt="natal" />
                        <div class="card-body">
                            <h5 class="card-title" style="color: #3EC2C3;"><b>{{$item->nama_kegiatan}}</b></h5>
                            <p class=" card-text"><small class="text-muted">{{$item->tanggal_kegiatan}}</small></p>
                            <p class="card-text desc">{{$item->deskripsi_kegiatan}}</p>
                            <a href="kalenderDetail/{{$item->id}}">Baca lebih lanjut</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- </section> -->

</body>

@include('partials.footer');

</html>