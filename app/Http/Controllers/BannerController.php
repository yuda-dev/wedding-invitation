<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function add($id)
    {
        $title = 'Manage Banner';
        $dt = Banner::find($id);
        return view('banner.add',compact('title','dt'));
    }

    public function update(Request $request, $id)
    {
            $data = Banner::find($id);
            $data->title = $request->title;
            $data->nama_l = $request->nama_l;
            $data->nama_p = $request->nama_p;
            $data->w_pelaksanaan = $request->w_pelaksanaan;
            $data->wkt_pelaksanaan = $request->wkt_pelaksanaan;
            $data->video_background = $request->video_background;
            
            $file = $request->file('image');
            if($file)
            {
                $nama = time().'-'. $file->getClientOriginalName();
                $file->move('image', $nama);
                $data->img_banner = $nama;
            }

            $file = $request->file('img');
            if($file)
            {
                $nama = time().'-'. $file->getClientOriginalName();
                $file->move('image', $nama);
                $data->img_undangan = $nama;
            }

            $data->save();

            \Session::flash('sukses','Data berhasil diubah');

            return redirect()->back();
            
    }

}
