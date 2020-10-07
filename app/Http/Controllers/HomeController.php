<?php

namespace App\Http\Controllers;

use App\Akad;
use App\Banner;
use App\Family;
use App\Galery;
use App\Mempelai;
use App\Ucapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
   public function index()
   {
       $judul = 'My Wedding';
       $baner = Banner::all();
       $mempelai = Mempelai::all();
       $family = Family::all();
       $akad = Akad::all();
       $sweet = Ucapan::all();
       $galery = Galery::all();
       return view('index',compact('judul','baner','mempelai','family','akad','sweet','galery'));
   }

   public function store(Request $request)
   {
       $data = new Ucapan();
       $data->nama = $request->nama;
       $data->pesan = $request->pesan;

       $file = $request->file('photo');
       if($file)
       {
           $nama = time().'-'. $file->getClientOriginalName();
           $file->move('ucapan', $nama);
           $data->photo = $nama;
       }

       //dd($data);
       $data->save();

       Session::flash('success','Terimakasih atas ucapan nya !');

       return redirect()->back();


   }
}
