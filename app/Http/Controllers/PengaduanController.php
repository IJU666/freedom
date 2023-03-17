<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanggalAwal = date('Y-m-d', mktime(0, 0, 0, date('m'), 1, date('Y')));
        $tanggalAkhir = date('Y-m-d');
        $title1 = "Laporan Pengaduan dari $tanggalAwal s/d $tanggalAkhir";
        $pengaduan2 = Pengaduan::count();
        $pengaduans = Pengaduan::orderBy('created_at', 'desc')->get();
        return view('data.pengaduan', compact('pengaduans', 'pengaduan2', 'title1'), [
            "title" => "Pengaduan",
            'pengaduans' => Pengaduan::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "klasifikasi" => "required",
            "laporan" => "required",
            "masyarakat_id" => "required",
            "tglkejadian" => "required",
            "status" => "",
            "alamat" => "required",
            "tanggapan" => "",
            "lampiran" => "image|file|mimes:jpeg,png,jpg|max:20000"
        ]);
        if ($request->file('lampiran')) {
            $data['lampiran'] = $request->file('lampiran')->store('post-image');
        }
        Pengaduan::create($data);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $record = Pengaduan::findorfail($id);
        return view(
            'data.create-tanggapan',
            [
                "title" => "Pengaduan"
            ],
            compact('record')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $record = Pengaduan::findorfail($id);
        $record->update($request->all());
        return redirect('/hasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function periodecetak(Request $request)
    // {
    //     try {
    //         $tanggalawal = $request->tanggal_awal;
    //         $tanggalakhir = $request->tanggal_akhir;

    //         $title1 = "Laporan Pengaduan dari $tanggalawal s/d $tanggalakhir";

    //         $pengaduans  = Pengaduan::whereDate('created_at', '<=', $tanggalawal)
    //             ->whereDate('created_at', '<=', $tanggalakhir)
    //             ->orderBy('created_at', 'desc')->get();
    //         $pengaduan2 = Pengaduan::whereDate('created_at', '<=', $tanggalakhir)
    //             ->whereDate('created_at', '<=', $tanggalawal)
    //             ->orderBy('created_at', 'desc')->get();
    //         return view('data.cetak-pengaduan', compact('pengaduans ', 'pengaduan2', []));
    //     } catch (\Exception $e) {
    //         \Session::flash('gagal', $e->getMessage());

    //         return redirect('/cetak');
    //     }
    // }
}
