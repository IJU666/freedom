<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $pengaduan->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Lampiran</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <center>
                    <div class="col-lg-11 mx-auto">
                        <img src="{{ asset('/storage/' . $pengaduan->lampiran) }}" class="img-fluid" alt=""
                            style="max-height: 500px;">
                    </div>
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
