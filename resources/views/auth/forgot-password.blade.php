@extends('layout.layout')
@section('bebas')
    {{-- Email --}}
    <div class="bg-white col-lg-6 p-5 my-5 rounded-3 mx-auto shadow-lg" style="height: 80vh;">
        <div class="row">
            <div class="fw-semibold fs-4 col-lg-6 col-6">
                Freedom
            </div>
            <div class="col-lg-6 col-6 my-auto text-end">
                Belum mempunyai akun? <a href="/daftar" class="text-decoration-none">Daftar</a>
            </div>
        </div>
        <div class="fs-3 mt-5 fw-semibold text-center">
            Lupa Kata Sandi
        </div>
        <div class="col-lg-7 mt-5 mx-auto">
            {{-- email --}}
            <div class="form-floating mb-3">
                <input type="email" id="email" name="email" placeholder="email" class="form-control">
                <label for="email" class="form-">Masukan Email</label>
            </div>
            <div class="row ms-1">
                <div class="mx-auto col-lg-10 mt-4" style="height: 12vh;">
                    <button type="submit" class="btn btn-primary col-lg-12 col-10">Kirim Tautan</button>
                </div>
            </div>
        </div>
    </div>
@endsection
