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
                <h3>Data Pengaduan</h3>
            </div>
<div class="page-content container">
    <section class="row" >
        <div class="rounded-3 mt-4 py-3 shadow" style="background-color: #f3f3f3;">
            <table class="table table-striped">
                <thead>
                  <tr class="">
                    <th scope="col">No</th>
                    <th scope="col" class="">Jenis Laporan</th>
                    <th scope="col" class="">Isi Laporan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col" class="">Tanggal</th>
                    <th scope="col" class="">Asal Pelapor</th>
                    <th scope="col" class="text-center">Lampiran</th>
                    <th scope="col">tanggapan</th>
                    <th scope="col">status</th>
                  </tr>
                </thead>
                <tbody>
                {{-- @foreach ($pengaduans as $pengaduan) --}}
                {{-- @if ($pengaduan) --}}
                  <tr>

                  </tr>
                {{-- @endif --}}
                {{-- @endforeach --}}
                </tbody>
              </table>
               </section>
</div>


            <footer class="">

            </footer>
        </div>
    </div>

    @endsection
