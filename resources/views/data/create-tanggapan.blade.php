@extends('data.layout')
@section('admin')
    <div id="app">
        @include('data.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Data Tanggapan</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-lg-10 mx-auto">
                        <form action="/create-tanggapan{{ $record->id }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <textarea class="form-control" name="tanggapan" id="laporan" rows="5" placeholder="Masukan Tanggapan"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="status" class="form-text">Status Pengaduan</label>
                                    <select name="status" id="status" class="form-select">
                                        <option value="{{ $record->status }}">{{ $record->status }}</option>
                                        <option value="Menunggu">Menunggu</option>
                                        <option value="Diproses">Diproses</option>
                                        <option value="Selesai">Selesai</option>
                                        <option value="Ditolak">Ditolak</option>
                                    </select>
                                </div>
                                <div class="border-top border-3 mt-2 pt-2 offcanvas-title">
                                    <button type="submit" class="btn btn-primary float-end">Simpan</button>
                                    <a href="/pengaduan" class="btn btn-danger float-end me-2">Batal</a>
                                </div>
                        </form>
                    </div>
                </section>
            </div>
            <footer class="">

            </footer>
        </div>
    </div>
@endsection
