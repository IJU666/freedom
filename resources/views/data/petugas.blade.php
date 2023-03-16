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
                <h3>Data Petugas</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <form action="" method="post" class="">
                        {{-- <div class="row float-end border col-lg-12">
                            <div class="col-lg-2">
                                <a href="/cetakpengguna" class="btn btn-outline-primary">
                                    Cetak Laporan
                                </a>
                            </div> --}}
                        <div class="d-flex float-end">
                            <a href="/cetakpengguna" class="btn btn-outline-primary me-2">
                                Cetak Laporan
                            </a>

                            <a href="/tambah" class="btn btn-primary {{ $title === 'Cetak Pengguna' ? 'active' : '' }}">
                                Tambah Pengguna
                            </a>

                        </div>
            </div>
            </form>
            <div class="rounded-3 mt-4 py-3 shadow" style="background-color: #f3f3f3;">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr class="">
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">email</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">NIK</th>
                            <th scope="col">No telp</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($petugas as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->jk }}</td>
                                <td>{{ $item->nik }}</td>
                                <td>{{ $item->notelp }}</td>
                            </tr>
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
