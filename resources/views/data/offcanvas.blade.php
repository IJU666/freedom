<div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="staticBackdropLabel">Pengaduan</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="border-top border-3"></div>
    <div class="offcanvas-body">
      <div class="">
        <form action="" method="post">
            <div class="mb-3">
                <div id="laporan" class="Isi Laporan"></div>
                <textarea class="form-control" id="laporan" rows="5" disabled></textarea>
              </div>
              <div class="row">
              <div class="col-lg-6">
                <label for="alamat">Alamat kejadian</label>
                <textarea class="form-control" id="laporan" rows="6" disabled></textarea>
              </div>
              <div class="col-lg-6">
                <label for="alamat">Jenis Laporan</label>
                <input type="text" name="alamat" id="" class="form-control col-lg-5" placeholder="" disabled>
                <label for="alamat">Tanggal kejadian</label>
                <input type="text" name="alamt" id="" class="form-control col-lg-5" placeholder="" disabled>
                <label for="alamat">Lampiran</label>
                <!-- Button trigger modal -->
                <button type="button" class=" btn col-lg-12" style="background-color: #F0F0F0;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Lihat gambar
                </button>


              </div>
            </div>
        </form>
        <div class=" my-2 border-bottom border-3 col-lg-3 mx-auto">Tanggapan</div>
        @hasrole('masyarakat')
        <form action="" method="post">
            <div class="mb-3">
                <textarea class="form-control" id="laporan" rows="5" placeholder="Masukan Tanggapan" disabled></textarea>
              </div>
            <div class="row">
            <div class="col-lg-6">
                <label for="status" class="form-text">Status Pengaduan</label>
                <select name="status" id="status" class="form-select" disabled>
                    <option value="Diproses">Diproses</option>
                    <option value="Selesai">Selesai</option>
                </select>
            </div>
            <div class="border-top border-3 mt-2 pt-2 offcanvas-title">
                <button type="button" class="btn btn-danger float-end me-2" data-bs-dismiss="offcanvas">Close</button>
            </div>
        </form>
        @endhasrole

        @hasanyrole('admin|petugas')
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <textarea class="form-control" name="tanggapan" id="laporan" rows="5" placeholder="Masukan Tanggapan"></textarea>
              </div>
            <div class="row">
            <div class="col-lg-6">
                <label for="status" class="form-text">Status Pengaduan</label>
                <select name="status" id="status" class="form-select">
                    <option value="Diproses">Diproses</option>
                    <option value="Selesai">Selesai</option>
                </select>
            </div>
            <div class="border-top border-3 mt-2 pt-2 offcanvas-title">
                <button type="submit" class="btn btn-primary float-end">Simpan</button>
                <button type="button" class="btn btn-danger float-end me-2" data-bs-dismiss="offcanvas">Close</button>
            </div>
        </form>
        @endhasanyrole
      </div>
    </div>
</div>
  </div>
  @include('data.lampiran')
