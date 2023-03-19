@extends('layout.layout')
@include('layout.navbar-user')
@section('bebas')
    <div class="container col-lg-8">
        <h5 class="text-center my-5">Detail Pengaduan</h5>
        <div class="p-4 rounded-3" style="background-color: #F3F3F3;">

            <div class="accordion" id="accordionExample">
                {{-- foreach --}}
                @foreach ($pengaduans as $pengaduan)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne{{ $pengaduan->id }}">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne{{ $pengaduan->id }}" aria-expanded="false"
                                aria-controls="collapseOne">
                                {{ $loop->iteration }}. {{ $pengaduan->klasifikasi }}
                            </button>
                        </h2>
                        <div id="collapseOne{{ $pengaduan->id }}" class="accordion-collapse collapse "
                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="col-lg-10 mx-auto">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h6 class="fw-semibold">{{ $pengaduan->masyarakat->name }}</h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6 class="text-end text-secondary">Tanggal Laporan :
                                                {{ $pengaduan->created_at }}</h6>
                                        </div>
                                    </div>
                                    <div class="mt-5 col-lg-10 mx-auto ">

                                        <label for="isi" class="form-label">Isi Pengaduan</label>
                                        <textarea name="" id="isi" class="form-control text-center bg-white" placeholder="isi pengaduan" disabled>{{ $pengaduan->laporan }}</textarea>
                                        <label for="tanggal"></label>
                                    </div>
                                    <div class=" col-lg-10 mb-3 mt-2 mx-auto">
                                        <label for="alamat" class="form-label">Alamat Kejadian</label>
                                        <textarea name="" id="alamat" class="form-control bg-white text-center" disabled>{{ $pengaduan->alamat }}</textarea>
                                    </div>
                                    <div class="row col-lg-12 mx-auto justify-content-center">
                                        <div class="row  col-lg-7">
                                            <div class="col-lg-3 my-auto">
                                                <p class="col-lg-6 me-2 fw-semibold">Status</p>
                                            </div>
                                            <div class="col-lg-6 my-auto">
                                                @if ($pengaduan->status == 'Belum Selesai')
                                                    <p class="btn btn-primary" disabled>{{ $pengaduan->status }}</p>
                                                @elseif ($pengaduan->status == 'Selesai')
                                                    <p class="btn btn-success" disabled>{{ $pengaduan->status }}</p>
                                                @elseif ($pengaduan->status == 'Ditolak')
                                                    <p class="btn btn-danger" disabled>{{ $pengaduan->status }}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row  col-lg-5">
                                            <div class="col-lg-4 my-auto ">
                                                <p class="col-lg-6 me-2 my-auto fw-semibold">Lampiran</p>
                                            </div>
                                            <div class="col-lg-7 ">
                                                <a href="" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal{{ $pengaduan->id }}"><img
                                                        src="{{ asset('/storage/' . $pengaduan->lampiran) }}"
                                                        class="col-lg-8 rounded-3" alt=""></a><br><small
                                                    class="col-lg-12">klik
                                                    untuk melihat</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center my-4 col-lg-3 mx-auto fs-6 border-bottom border-3">
                                        Tanggapan
                                    </div>
                                    <div class="col-lg-10 mx-auto">
                                        <textarea name="" id="" placeholder="Belum ada tanggapan" class="bg-white form-control " disabled>{{ $pengaduan->tanggapan }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('data.lampiran')
                @endforeach
                {{-- endforeach --}}
            </div>

        </div>
    </div>
    @include('layout.footer-user')
@endsection
