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
                <h3>Tambah Pengguna</h3>
            </div>
            <div class="page-content">
                <section class="row col-lg-10 mx-auto">
                    <form method="post" action="/daftarkeun">
                        @csrf
                        <div class=" col-lg-12 mx-auto">
                            <div class="row mx-auto">
                                <div class="col-lg-6">
                                    <label for="name" class="form-text">Nama Lengkap</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Masukan Nama Lengkap" value="{{ old('name') }}" required autofocus>
                                </div>
                                <div class="col-lg-6 my-2">
                                    <label for="jk" class="form-text">Jenis Kelamin</label>
                                    <select name="jk" id="jk" class="form-select" value="{{ old('jk') }}">
                                        <option value="Laki - laki">Laki - laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label for="notelp" class="form-text">Nomor Telepon Aktif</label>
                                    <input type="number" name="telp" id="notelp" class="form-control col-lg-5"
                                        value="{{ old('telp') }}" placeholder="Masukan Nomor Telepon" required>
                                </div>
                                <div class="col-lg-6 my-2">
                                    <label for="email" class="form-text">Masukan Email Pengguna</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="{{ old('email') }}" placeholder="Masukan Email Aktif" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="password" class="form-text">Masukan Kata Sandi</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="Masukan Kata Sandi" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="password_confirmation" class="form-text">Ulang Kata Sandi</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="form-control" placeholder="Ulang Kata Sandi" required>
                                </div>
                                <div class="border-top border-2 py-3">
                                    <button type="submit" class="btn btn-primary float-end">Tambah</button>
                                </div>
                    </form>
                </section>
            </div>
            <footer class="">

            </footer>
        </div>
    </div>
@endsection
