<?php

namespace App\Http\Controllers;

use App\Ucapan;
use Illuminate\Http\Request;

class UcapanController extends Controller
{
    public function index()
    {
        $title = 'Ucapan';
        $data = Ucapan::orderBy('created_at','desc')->get();
        return view('ucapan_kalian.index', compact('title','data'));
    }

    public function delete($id)
    {
        Ucapan::find($id)->delete();

        \Session::flash('sukses','Data berhasil dihapus');

        return redirect()->back();
    }
}
