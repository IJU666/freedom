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
                    <form action="" method="post" class="">
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" name="cari" id="" placeholder="Masukan Nama Pengguna"
                                    class="form-control">
                            </div>
                            <div class="col-lg-3 ">
                                <button type="submit" name="submit" class="btn btn-primary col-lg-3">
                                    <i class="fa-solid fa-magnifying-glass my-auto"></i></button>
                            </div>
                            @if (Auth::guard('user')->check())
                                <div class=" col-lg-5">
                                    <a href="/cetakpengaduan" class="btn btn-outline-primary float-end ">
                                        Cetak Laporan
                                    </a>
                                </div>
                            @endif
                        </div>
                    </form>
                    <div class="rounded-3 mt-4 py-3 shadow" style="background-color: #f3f3f3;">
                        <table class="table table-striped">
                            <thead>
                                <tr class="">
                                    <th scope="col">No</th>
                                    <th scope="col" class="col-lg-2">Pengirim</th>
                                    <th scope="col" class="col-lg-2">Jenis Laporan</th>
                                    <th scope="col" class="col-lg-2">Isi Laporan</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col" class="col-lg-2">Tanggal</th>
                                    <th scope="col" class="text-center ">Status</th>
                                    <th scope="col" class="text-center col-lg-2">Lampiran</th>
                                    <th scope="col" colspan="2" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengaduans as $pengaduan)
                                    @if ($pengaduan)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pengaduan->masyarakat->name }}</td>
                                            <td>{{ $pengaduan->klasifikasi }}</td>
                                            <td>{{ $pengaduan->laporan }}</td>
                                            <td>{{ $pengaduan->alamat }}</td>
                                            <td>{{ $pengaduan->tglkejadian }}</td>


                                            @if ($pengaduan->status == 'Menunggu')
                                                <td class="text-primary">{{ $pengaduan->status }}</td>
                                            @elseif ($pengaduan->status == 'Ditolak')
                                                <td class="text-danger">{{ $pengaduan->status }}</td>
                                            @elseif ($pengaduan->status == 'Selesai')
                                                <td class="text-success">{{ $pengaduan->status }}</td>
                                            @elseif ($pengaduan->status == 'Diproses')
                                                <td class="text-warning">{{ $pengaduan->status }}</td>
                                            @else()
                                                <td class="text-primary">{{ $pengaduan->status }}</td>
                                            @endif

                                            <td class="text-center"><a href="" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal{{ $pengaduan->id }}"><img
                                                        src="{{ asset('/storage/' . $pengaduan->lampiran) }}"
                                                        class="col-lg-8" alt=""></a><br><small
                                                    class="col-lg-12">klik
                                                    untuk melihat</small>
                                            </td>
                                            <td class="col-1 text-end">
                                                <a class="btn btn-primary" href="/tanggapan{{ $pengaduan->id }}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                            </td>
                                            <td class="col-1">
                                                <a class="btn btn-danger" href="/tanggapan{{ $pengaduan->id }}">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                    @endif
                                    @include('data.lampiran')
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
            <footer class="">

            </footer>
        </div>
    </div>
@endsection
