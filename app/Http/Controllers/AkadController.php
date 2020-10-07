<?php

namespace App\Http\Controllers;

use App\Akad;
use Illuminate\Http\Request;

class AkadController extends Controller
{
    public function add($id)
    {
        $title = 'Manage Tanggal akad';
        $dt = Akad::find($id);
        return view('akad.add', compact('title','dt'));
    }

    public function updateakad(Request $request, $id)
    {
        $data = Akad::find($id);
        $data->tgl_akad = $request->tgl_akad;
        $data->w_akad_awal = $request->w_akad_awal;
        $data->w_akad_akhir = $request->w_akad_akhir;
        $data->alamat_akad = $request->alamat_akad;
        $data->tgl_resepsi = $request->tgl_resepsi;
        $data->w_resepsi_awal = $request->w_resepsi_awal;
        $data->alamat_resepsi = $request->alamat_resepsi;
        $data->tgl_hiburan = $request->tgl_hiburan;
        $data->w_hiburan_awal = $request->w_hiburan_awal;
        $data->hiburan = $request->hiburan;
        $data->peta = $request->peta;

        $data->save();

        \Session::flash('sukses','Data berhasil diubah');
        return redirect()->back();
    }
}
