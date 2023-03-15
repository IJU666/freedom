@extends('layout.layout')
@section('bebas')
    <form method="POST" action="/masuk">
        @csrf

        {{-- Email --}}
        <div class="bg-white col-lg-6 p-5 my-5 rounded-3 mx-auto shadow-lg">
            <div class="row">
                <div class="fw-semibold fs-4 col-lg-6 col-6">
                    Freedom
                </div>
                <div class="col-lg-6 col-6 my-auto text-end">
                    Belum mempunyai akun? <a href="/daftar" class="text-decoration-none">Daftar</a>
                </div>
            </div>
            <div class="fs-3 mt-5 fw-semibold text-center">
                Selamat Datang
            </div>
            <div class="col-lg-7 mt-5 mx-auto">
                {{-- email --}}
                <div class="form-floating mb-3">
                    <input type="email" id="email" name="email" placeholder="email" class="form-control">
                    <label for="email" class="form-">Masukan Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" id="pass" class="form-control" placeholder="Kata Sandi"
                        required autocomplete="current-password">
                    <label for="pass">Masukan Kata Sandi</label>
                </div>
                <div class="row ms-1">
                    <div class="form-check col-lg-5 col-5 ">
                        <input class="form-check-input " name="remember" type="checkbox" value=""
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Ingat Saya
                        </label>
                    </div>
                    <div class="col-lg-7 col-7 text-end mb-3">

                        <a class="text-decoration-none text-danger" href="">
                            Lupa kata sandi?
                        </a>

                    </div>
                    <div class="mx-auto col-lg-10 mt-4" style="height: 12vh;">
                        <button type="submit" class="btn btn-primary col-lg-12 col-10">Masuk</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
