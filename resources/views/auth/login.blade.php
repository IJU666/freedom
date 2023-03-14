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
            <!-- Session Status -->


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

                        <a class="text-decoration-none" href="">
                            {{ __('Lupa kata sandi?') }}
                        </a>

                    </div>
                    <div class="text-center mt-4  ">
                        <button type="submit" class="btn btn-primary col-lg-8 col-10">Masuk</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div> --}}
    </form>
@endsection
