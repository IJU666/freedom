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
                <section class="row">

                    @if (Auth::guard('user')->check())
                        <div class="text-end">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#example">
                                Cetak Pengaduan
                            </button>
                        </div>
                    @endif
            </div>
            <div class="rounded-3 mt-4 py-3 shadow" style="background-color: #f3f3f3;">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr class="">
                            <th scope="col">No</th>
                            <th scope="col" class="">Nama Pelapor</th>
                            <th scope="col" class="">Jenis Laporan</th>
                            <th scope="col" class="">Isi Laporan</th>
                            <th scope="col">Alamat</th>
                            <th scope="col" class="">Tanggal laporan</th>
                            <th scope="col" class="">Tanggal Kejadian</th>
                            <th scope="col" class="text-center">Lampiran</th>
                            <th scope="col">status</th>
                            <th scope="col">tanggapan</th>
                            {{-- <th scope="col">Lampiran Tanggapan</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengaduans as $pengaduan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pengaduan->masyarakat->name }}</td>
                                <td>{{ $pengaduan->klasifikasi }}</td>
                                <td>{{ $pengaduan->laporan }}</td>
                                <td>{{ $pengaduan->alamat }}</td>
                                <td>{{ $pengaduan->created_at }}</td>
                                <td>{{ $pengaduan->tglkejadian }}</td>
                                <td class="text-center"><a href="" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $pengaduan->id }}"><img
                                            src="{{ asset('/storage/' . $pengaduan->lampiran) }}" class="col-lg-4"
                                            alt=""></a><br><small class="col-lg-12">klik
                                        untuk melihat</small>
                                </td>
                                @if ($pengaduan->status == 'Belum Selesai')
                                    <td class="text-primary">{{ $pengaduan->status }}</td>
                                @elseif ($pengaduan->status == 'Ditolak')
                                    <td class="text-danger">{{ $pengaduan->status }}</td>
                                @elseif ($pengaduan->status == 'Selesai')
                                    <td class="text-success">{{ $pengaduan->status }}</td>
                                @else()
                                    <td class="text-primary">{{ $pengaduan->status }}</td>
                                @endif
                                <td>{{ $pengaduan->tanggapan }}</td>
                                {{-- <td class="text-center"><img src="{{ asset('/storage/' . $pengaduan->fototanggapan) }}"
                                        class="col-lg-4" alt="">
                                </td> --}}
                            </tr>
                            @include('data.lampiran')
                        @endforeach
                    </tbody>
                </table>
                </section>
            </div>

            @include('data.modal-cetak')
            <footer class="">

            </footer>
        </div>
    </div>
@endsection
