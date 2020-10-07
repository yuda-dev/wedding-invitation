<?php

namespace App\Http\Controllers;

use App\Family;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    public function index()
    {
        $title = 'Manage Data Keluarga';
        $data = Family::all();
        return view('family.index',compact('title','data'));
    }

    public function add()
    {
        $title = 'Tambah Data Keluarga';
        return view('family.add',compact('title'));
    }

    public function store(Request $request)
    {
        $data = new Family();
        $data->nama = $request->nama;
        $data->status = $request->status;

        $file = $request->file('foto');
        if($file)
        {
            $nama = time().'-'. $file->getClientOriginalName();
            $file->move('image', $nama);
            $data->foto = $nama; 
        }

        $data->save();

        \Session::flash('sukses','Data berhasil ditambahkan');

        return redirect('family');
    }

    public function edit($id)
    {
        $title = 'Edit data familly';
        $dt = Family::find($id);
        return view('family.edit', compact('title','dt'));
    }

    public function update(Request $request, $id)
    {
        $data = Family::find($id);
        $data->nama = $request->nama;
        $data->status = $request->status;

        $file = $request->file('foto');
        if($file)
        {
            $nama = time().'-'. $file->getClientOriginalName();
            $file->move('image', $nama);
            $data->foto = $nama; 
        }

        $data->save();

        \Session::flash('sukses','Data berhasil diubah');

        return redirect('family');
    }

    public function delete($id)
    {
        $family = Family::find($id);
        if(file_exists('image/'. $family->foto))
        {
            unlink('image/'. $family->foto);
        }

        $family->delete();

        \Session::flash('sukses','Data berhasil dihapus');

        return redirect()->back();
    }
}
