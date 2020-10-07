<?php

namespace App\Http\Controllers;

use App\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index()
    {
        $title ='Tambah Foto Galery';
        $data = Galery::all();
        return view('galeries.index', compact('title','data'));
    }

    public function add(Request $request)
    {
        if($request->file('photo')){
            foreach($request->file('photo') as $photo)
            {
                $file = $photo;
                $nama = date('His'). '-'. $photo->getClientOriginalName();

                $file->move('galery', $nama);
                $postArray = ['photo' => $nama, ];

                Galery::insert($postArray);
            }

            \Session::flash('sukses', 'Photo berhasil di Upload');
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        Galery::find($id)->delete();

        \Session::flash('sukses', 'Photo berhasil dihapus');

        return redirect()->back();
    }
}
