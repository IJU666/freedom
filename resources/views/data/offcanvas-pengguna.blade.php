<div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="pengguna" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="staticBackdropLabel">Data Pengguna</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="border-top border-3"></div>
    <div class="offcanvas-body">
      <div class="">
        <form action="" method="post">
            <div class="mb-3">
                <div id="laporan" class="">Nama</div>
                <input class="form-control" id="laporan" placeholder="Fauzi Maulana Akbar" >
              </div>
              <div class="row">
              <div class="mb-3">
                <label for="alamat">NIK</label>
                <input class="form-control" id="laporan" placeholder="320405123123120005" >
              </div>
              <div class="mb-3">
                <label for="alamat">Tanggal Lahir</label>
                <input type="text" name="alamat" id="" class="form-control col-lg-5" placeholder="Pengaduan" >

              </div>
              <div class="mb-3">
                <label for="alamat">Jenis Kelamin</label>
                <input type="date" name="alamt" id="" class="form-control col-lg-5" >
              </div>
              <div class="mb-3">
                <label for="alamat">No Telepon</label>
                <input type="number" name="telepon" id="" placeholder="08571289847" class="form-control col-lg-5" >
              </div>
              <div class="mb-4">
                <label for="alamat">Pekerjaan</label>
                <input type="text" class="form-control text-dark col-lg-12" placeholder="Pengusaha" >
            </div>
              </div>
              <div class="border-top border-2 py-3">
                <button type="submit" name="submit" class="btn btn-primary float-end">Simpan</button>
                <button type="submit" class="btn btn-danger float-end mx-2" data-bs-dismiss="offcanvas" aria-label="Close">Batal</button>
              </div>
        </form>
</div>
  </div>
  @include('data.lampiran')

