@extends('layout.layout')
@section('bebas')
    {{-- Email --}}
    <div class="bg-white col-lg-6 p-5 rounded-3 mx-auto shadow-lg">
        <div class="row">
            <div class="fw-semibold fs-4 col-lg-6">
                Freedom
            </div>
            <div class="col-lg-6 my-auto text-end">
                Sudah mempunyai akun? <a href="/login" class="text-decoration-none">Masuk</a>
            </div>
        </div>
        <div class="fs-3 mt-3 fw-semibold text-center">
            Daftar Akun
        </div>
        <div class="col-lg-11 mt-3 mx-auto">
            <h5 class="fw-semibold">Data Diri</h5>
            <form method="POST" action="/regis">
                @csrf
                <div class="row">
                    {{-- nama --}}
                    <div class="col-lg-6">
                        <label for="nama" class="form-text">Nama Lengkap</label>
                        <input type="text" name="name" id="nama" placeholder="Masukan Nama Lengkap"
                            class="form-control" required autofocus value="{{ old('name') }}">
                    </div>
                    <div class="col-lg-6">
                        <label for="nik" class="form-text">Nomor Induk Keluarga (NIK)</label>
                        <input type="number" name="nik" id="nik" required placeholder="Masukan NIK"
                            class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label for="tglahir" class="form-text">Tanggal Lahir</label>
                        <input type="date" name="tglahir" id="nik" required class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label for="kelamin" class="form-text">Pilih jenis kelamin</label>
                        <select name="kelamin" id="kelamin" class="form-select">
                            <option value="Laki - Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label for="telp" class="form-text">No telepon aktif</label>
                        <input type="number" name="telp" id="telp" class="form-control"
                            placeholder="Masukan no telepon">
                    </div>
                    <div class="col-lg-6 mb-2">
                        <label for="pekerjaan" class="form-text">Pekerjaan saat ini</label>
                        <input type="text" name="pekerjaan" id="telp" class="form-control"
                            placeholder="Masukan Nama Pekerjaan">
                    </div>
                </div>
                <h5>Akun</h5>
                <div class="row">
                    <div class="col-lg-6">
                        <label for="username" class="form-text">Nama Pengguna</label>
                        <input type="text" name="username" class="form-control" placeholder="Masukan Nama Pengguna"
                            id="">
                    </div>
                    <div class="col-lg-6">
                        <label for="email" class="form-text">Nama Email Aktif</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukan Email" id=""
                            required>
                    </div>
                    <div class="col-lg-6">
                        <label for="password" class="form-text">Masukan Kata Sandi</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukan Email"
                            id="" required required autocomplete="new-password">
                    </div>
                    <div class="col-lg-6">
                        <label for="password_confirmation" class="form-text">Ulangi Kata Sandi</label>
                        <input type="password" placeholder="Masukan Kata Sandi" id="password_confirmation"
                            class="form-control" type="password" name="password_confirmation" required>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Data yang dimasukan sudah benar
                            </label>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-primary col-lg-7">Kirim</button>
                </div>
        </div>
    </div>
    </form>
@endsection
