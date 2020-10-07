<?php

namespace App\Http\Controllers;

use App\Mempelai;
use Illuminate\Http\Request;

class MempelaiController extends Controller
{
    public function add($id)
    {
        $title = 'Manage Mempelai';
        $dt = Mempelai::find($id);
        return view('mempelai.add',compact('title','dt'));
    }

    public function update(Request $request, $id)
    {
            $data = Mempelai::find($id);
            $data->nama_l = $request->nama_l;
            $data->nama_p = $request->nama_p;
            $data->deskripsi_l = $request->deskripsi_l;
            $data->deskripsi_p = $request->deskripsi_p;
            
            $file = $request->file('image');
            if($file)
            {
                $nama = time().'-'. $file->getClientOriginalName();
                $file->move('image', $nama);
                $data->photo_pria = $nama;
            }

            $file = $request->file('img');
            if($file)
            {
                $nama = time().'-'. $file->getClientOriginalName();
                $file->move('image', $nama);
                $data->photo_wanita = $nama;
            }

            $data->save();

            \Session::flash('sukses','Data berhasil diubah');

            return redirect()->back();
            
    }
}
