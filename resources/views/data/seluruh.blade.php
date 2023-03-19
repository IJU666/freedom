@extends('data.layout')
@include('layout.navbar-user')
@section('admin')
    <div class="container">
        <div class="col-lg-10 mx-auto my-4">
            <div class="border-bottom border-3 fs-4 fw-semibold">
                Hasil Pengaduan
            </div>

            <div class="col-lg-12 mx-auto mt-3 shadow p-5">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr class="">
                            <th scope="col" class="">Nama Pelapor</th>
                            <th scope="col" class="">Jenis Laporan</th>
                            <th scope="col" class="">Isi Laporan</th>
                            <th scope="col">Alamat</th>
                            <th scope="col" class="text-center col-lg-2">Lampiran</th>
                            <th scope="col">status</th>
                            {{-- <th scope="col">Lampiran Tanggapan</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengaduans as $pengaduan)
                            @if ($pengaduan->status == 'Selesai')
                                <tr>
                                    <td>{{ $pengaduan->masyarakat->name }}</td>
                                    <td>{{ $pengaduan->klasifikasi }}</td>
                                    <td>{{ $pengaduan->laporan }}</td>
                                    <td>{{ $pengaduan->alamat }}</td>
                                    <td class="text-center"><a href="" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal{{ $pengaduan->id }}"><img
                                                src="{{ asset('/storage/' . $pengaduan->lampiran) }}" class="col-lg-8"
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
                                    {{-- <td class="text-center"><img src="{{ asset('/storage/' . $pengaduan->fototanggapan) }}"
                                        class="col-lg-4" alt="">
                                </td> --}}
                                </tr>
                                @include('data.lampiran')
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </div>
    @include('layout.footer-user')
@endsection
