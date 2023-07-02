<!DOCTYPE html>
<html>
@include('partials.head')

<body>
    @include('partials.hovernavbar')
    <div class="container py-3">
        <h2>Artikel</h2>
        <button type="button" class="btn btn-primary float-end mb-3" data-bs-toggle="modal" data-bs-target="#addModal">Tambah Artikel</button>

        <div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Artikel</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Author</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col-md-1"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0 ?>
                    @foreach ($dbartikel as $brita)
                    <tr>
                        <td class="col-md-1">{{$loop->iteration}}</td>
                        <td class="col-md-1">{{$brita->judul_artikel}}</td>
                        <td class="col-md-6">{{$brita->isi_artikel}}</td>
                        <td class="col-md-1">{{$brita->author_artikel}}</td>
                        <td class="col-md-1">{{$brita->tanggal_artikel}}</td>
                        <td class="col-md-2">
                            <div class="float-end">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?= $i ?>"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $i ?>"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </div>
                        </td>
                    </tr>

                    <!-- Modal Edit -->
                    <div class="modal fade" id="editModal<?= $i ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="editModalLabel">Modal Edit</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="/artikelEdit" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <input type="hidden" name="id" value="{{ $brita->id }}" />
                                        <div class="mb-3">
                                            <label for="kolomJudulArtikel" class="form-label">Judul Artikel</label>
                                            <input name="judulArtikel" type="text" class="form-control" id="kolomJudulArtikel" value="{{ $brita->judul_artikel }}" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="kolomIsiArtikel" class="form-label">Isi Artikel</label>
                                            <input name="isiArtikel" type="text" class="form-control" id="IsiArtikel" value="{{ $brita->isi_artikel }}" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="kolomAuthorArtikel" class="form-label">Author Artikel</label>
                                            <input name="authorArtikel" type="text" class="form-control" id="authorArtikel" value="{{ $brita->author_artikel }}" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="kolomTanggalArtikel" class="form-label">Tanggal</label>
                                            <div class="input-group date" id="datepicker">
                                                <input name="tanggalArtikel" type="text" class="form-control rounded" id="kolomTanggalKegiatan" autocomplete="off" />
                                                <span class="input-group-append"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Delete -->
                    <div class="modal fade" id="deleteModal<?= $i ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="deleteModalLabel">Modal Edit</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="/artikelDelete" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <input type="hidden" name="id" value="{{ $brita->id }}" />
                                        <div class="mb-3">
                                            <p>Apakah anda yakin menghapus artikel {{ $brita->judul_artikel }}? <br />Tindakan ini tidak dapat dibatalkan</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php $i++ ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Add -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addModalLabel">Modal Add</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/artikelAdd" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="kolomJudulArtikel" class="form-label">Judul Artikel</label>
                            <input name="judulArtikel" type="text" class="form-control" id="kolomJudulArtikel" />
                        </div>
                        <div class="mb-3">
                            <label for="kolomIsiArtikel" class="form-label">Isi Artikel</label>
                            <input name="isiArtikel" type="text" class="form-control" id="kolomIsiArtikel" />
                        </div>
                        <div class="mb-3">
                            <label for="kolomAuthorArtikel" class="form-label">Author Artikel</label>
                            <input name="authorArtikel" type="text" class="form-control" id="kolomAuthorArtikel" />
                        </div>
                        <div class="mb-3">
                            <label for="kolomTanggalArtikel" class="form-label">Tanggal</label>
                            <div class="input-group date" id="datepicker">
                                <input name="tanggalArtikel" type="text" class="form-control rounded" id="kolomTanggalKegiatan" autocomplete="off" />
                                <span class="input-group-append"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <a href="/dashboard" class="text-decoration: none; float-end mb-5" style="padding:2rem mb-5">
            <button type="submit" class="btn btn-primary"> Yaqueen? </button>
        </a>
    </div>

    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>
</body>

</html>