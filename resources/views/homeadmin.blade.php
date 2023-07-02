<!DOCTYPE html>
<html>
@include('partials.head')

<body>
  @include('partials.hovernavbar')
  <div class="container py-5">
    <h2>Jadwal Kegiatan</h2>
    <button type="button" class="btn btn-primary float-end mb-3" data-bs-toggle="modal" data-bs-target="#addModal">Tambah Kegiatan</button>

    <div>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Kegiatan</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Tanggal</th>
            <th scope="col-md-1"></th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 0 ?>
          @foreach ($dbjadwal as $item)
          <tr>
            <td class="col-md-1">{{$loop->iteration}}</td>
            <td class="col-md-1">{{$item->nama_kegiatan}}</td>
            <td class="col-md-7">{{$item->deskripsi_kegiatan}}</td>
            <td class="col-md-1">{{$item->tanggal_kegiatan}}</td>
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
                <form action="/jadwalEdit" method="POST">
                  @csrf
                  <div class="modal-body">
                    <input type="hidden" name="id" value="{{ $item->id }}" />
                    <div class="mb-3">
                      <label for="kolomNamaKegiatan" class="form-label">Nama Kegiatan</label>
                      <input name="namaKegiatan" type="text" class="form-control" id="kolomNamaKegiatan" value="{{ $item->nama_kegiatan }}" />
                    </div>
                    <div class="mb-3">
                      <label for="kolomDeskripsiKegiatan" class="form-label">Deskripsi Kegiatan</label>
                      <input name="deskripsiKegiatan" type="text" class="form-control" id="kolomDeskripsiKegiatan" value="{{ $item->deskripsi_kegiatan }}" />
                    </div>
                    <div class="mb-3">
                      <label for="kolomTanggalKegiatan" class="form-label">Tanggal</label>
                      <div class="input-group date" id="datepicker">
                        <input name="tanggalKegiatan" type="text" class="form-control rounded" id="kolomTanggalKegiatan" autocomplete="off" />
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
                <form action="/jadwalDelete" method="POST">
                  @csrf
                  <div class="modal-body">
                    <input type="hidden" name="id" value="{{ $item->id }}" />
                    <div class="mb-3">
                      <p>Apakah anda yakin menghapus kegiatan {{ $item->nama_kegiatan }}? <br />Tindakan ini tidak dapat dibatalkan</p>
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
        <form action="/jadwalAdd" method="POST">
          @csrf
          <div class="modal-body">
            <div class="mb-3">
              <label for="kolomNamaKegiatan" class="form-label">Nama Kegiatan</label>
              <input name="namaKegiatan" type="text" class="form-control" id="kolomNamaKegiatan" placeholder="Tulis nama kegiatan disini" />
            </div>
            <div class="mb-3">
              <label for="kolomDeskripsiKegiatan" class="form-label">Deskripsi Kegiatan</label>
              <textarea name="deskripsiKegiatan" class="form-control" id="kolomDeskripsiKegiatan" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label for="kolomTanggalKegiatan" class="form-label">Tanggal</label>
              <div class="input-group date" id="datepicker">
                <input name="tanggalKegiatan" type="text" class="form-control rounded" id="kolomTanggalKegiatan" autocomplete="off" />
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