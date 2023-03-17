<!-- Modal -->
<div class="modal fade" id="example" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Pilih tanggal yang akan dicetak</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form role="form" action="/cetak" method="get">
                    {{-- @csrf --}}
                    <div class="row">
                        <div class="col-lg-12 mt-3">
                            <label for="label">Tanggal Awal</label>
                            <input type="date" name="tanggal_awal" id="tglAwal" class="form-control"
                                value="{{ date('Y-m-d', mktime(0, 0, 0, date('m'), 1, date('Y'))) }}"
                                autocomplete="off">
                        </div>
                        <div class="col-lg-12 mt-3">
                            <label for="label">Tanggal Akhir</label>
                            <input type="date" name="tanggal_akhir" id="tglAkhir" class="form-control"
                                value="{{ date('Y-m-d') }}" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="d-grid gap-2">
                            <a href=""
                                onclick="this.href='/cetak/'+document.getElementById('tglAwal').value + '/' + document.getElementById('tglAkhir').value"
                                type="submit" target="_blank" class="btn btn-primary me-1 mb-1">Kirim</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
