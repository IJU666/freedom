@extends('layout.layout')
@include('layout.navbar-user')
@section('bebas')
    <div class="container mt-5">
        <div class="row col-lg-9 mt-5 mx-auto ">
            <div class="col-lg-6 me-5">
                <img src="img/img-landing.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-5 ms-2 align-self-center ">
                <h3 class="fw-bold ">F R E E D O M</h3>
                <div class="fs-5 fw-semibold ">Layanan Aspirasi <br> dan Pengaduan Masyarakat
                    <p class="fs-6 text-secondary">Berani Melapor!</p>
                    <a href="#tentang" class="btn btn-primary col-5">Mulai</a>
                </div>
            </div>
        </div>
        <div class="container" id="tentang" style="margin-top: 13%;">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="col-lg-8 float-end">
                        <h3 class="fw-semibold">Apa itu <br> Freedom?</h3>
                        <p>Freedom adalah suatu website pelayanan masyarakat untuk membantu masyarakat menyampaikan aspirasi
                            ataupun pengaduan kepada suatu lembaga berwenang.</p>
                        <a href="#lapor" class="btn btn-primary">Lapor Sekarang</a>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <img src="img/Chat.png" class="col-lg-9  img-fluid" alt="">
                </div>
            </div>
        </div>

        {{-- form --}}
        <div class="" id="lapor" style="margin-top: 12%;">
            <h4 class="fw-semibold text-center">Sampaikan Laporan Anda</h4>
            <div class="col-lg-1 mx-auto border-top border-3 col-3"></div>
            <div id="liveAlertPlaceholder" class="col-lg-5 mx-auto mt-2"></div>
            <div class="col-lg-7 mt-5 py-4 rounded-3 mx-auto shadow-lg" style="background-color: #f5f5f5;">
                <form action="/pengaduan" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-11 mx-auto">

                        <p class="fw-semibold col-lg-10 mx-auto">Klasifikasi Laporan</p>
                        <div class="row col-lg-7 col-10 mx-auto">
                            <div class="bg-white p-3 col-lg-5 col-5 rounded-3 me-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="klasifikasi" value="Aspirasi"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Aspirasi
                                    </label>
                                </div>
                            </div>
                            <div class="bg-white col-lg-6 col-6 rounded-2 p-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="klasifikasi" value="Pengaduan"
                                        id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Pengaduan
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating my-3 col-12 mx-auto">
                            <textarea class="form-control" name="laporan" placeholder="Masukan disini" id="laporan" style="height: 120px"
                                value="{{ old('laporan') }}"></textarea>
                            <label for="laporan">Masukan laporan anda disini</label>
                        </div>



                        <div class="row">
                            <div class="form-floating col-lg-6 col-11 mx-auto">
                                <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control" placeholder="Alamat"
                                    style="height: 125px;"value="{{ old('alamat') }}">{{ old('alamat') }}</textarea>
                                <label for="alamat" class="ms-2">Masukan alamat lengkap kejadian</label>
                            </div>
                            <div class="col-lg-6">
                                <div class="col-lg-12 col-11 ">
                                    <label for="tgl" class="form-text">Masukan tanggal kejadian</label>
                                    <input type="date" name="tglkejadian" placeholder="Pilih tanggal kejadian"
                                        class="form-control" id="tgl" class="" value="{{ old('tglkejadian') }}">
                                </div>
                                <div class=" col-lg-12 col-11">
                                    <label for="formFile" class="form-text">Masukan Lampiran</label>
                                    <input class="form-control" name="lampiran" type="file" id="formFile">
                                    <label for="formFile" class="form-text float-end">*format jpg, jpeg, dan png</label>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            @if (!Auth::guard('masyarakat')->check())
                                <a class="btn btn-primary col-lg-5 col-10" id="liveAlertBtn">Kirim</a>
                            @elseif (Auth::guard('masyarakat')->check())
                                <input type="hidden" name="masyarakat_id"
                                    value="{{ Auth::guard('masyarakat')->user()->id }}">
                                <button type="submit" class="btn btn-primary col-lg-5 col-10">Kirim</button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- form --}}
    </div>
    <div class="bg-primary py-2  text-white mt-5 col-lg-12">
        <h5 class="text-center">Jumlah pengaduan saat ini</h5>
        <h2 class="text-center">12</h2>
    </div>
    @include('layout.footer-user')
@endsection
