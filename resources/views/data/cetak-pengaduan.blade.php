@extends('data.layout')
@section('admin')
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
                <th scope="col" class="text-center col-lg-2">Tanggapan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengaduans as $pengaduan)
                @if ($pengaduan->tanggapan)
                    <tr>
                        <td>{{ $pengaduan->created_at }}</td>
                        <td>{{ $pengaduan->masyarakat->name }}</td>
                        <td>{{ $pengaduan->klasifikasi }}</td>
                        <td>{{ $pengaduan->laporan }}</td>
                        <td>{{ $pengaduan->alamat }}</td>
                        <td>{{ $pengaduan->tglkejadian }}</td>


                        @if ($pengaduan->status == 'Belum Selesai')
                            <td class="text-primary">{{ $pengaduan->status }}</td>
                        @elseif ($pengaduan->status == 'Ditolak')
                            <td class="text-danger">{{ $pengaduan->status }}</td>
                        @elseif ($pengaduan->status == 'Selesai')
                            <td class="text-success">{{ $pengaduan->status }}</td>
                        @else()
                            <td class="text-primary">{{ $pengaduan->status }}</td>
                        @endif

                        <td class="text-center"><img src="{{ asset('/storage/' . $pengaduan->lampiran) }}" width="100px"
                                alt="">
                        </td>
                        <td>{{ $pengaduan->tanggapan }}</td>

                    </tr>
                @endif
            @endforeach

        </tbody>
    </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
@endsection
