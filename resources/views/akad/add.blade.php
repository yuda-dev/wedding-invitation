@extends('layouts.master')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-warning">
                <div class="box-header" style="margin-top: 20px;margin-left: 10px">
                    <p>
                        <a href="" class="btn btn-warning btn-refresh"><i class="fa fa-sync"></i></a>
                    </p>
                </div><hr>
                <form role="form" method="post" action="{{ url('akad/updateakad', $dt->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-4">
                            <!-- general form elements -->
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Akad</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tanggal : <strong style="color: royalblue">{{ date('d F Y', strtotime($dt->tgl_akad)) }}</strong></label>
                                            <input type="date" value="{{ $dt->tgl_akad }}" class="form-control" name="tgl_akad" id="exampleInputEmail1">
                                            <p style="color: red"> Format : Bulan/Tanggal/Tahun</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Dari : <strong style="color: royalblue">{{ $dt->w_akad_awal }}</strong></label>
                                                    <input type="time" class="form-control" value="08:00:00" name="w_akad_awal" id="exampleInputEmail1">
                                                    <p style="color: red">AM : 00:00 - 11:59 | PM : 12:00 - 23:59 </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Sampai : <strong style="color: royalblue">{{ $dt->w_akad_akhir }}</strong></label>
                                                    <input type="time" class="form-control" value="08:00:00" name="w_akad_akhir" id="exampleInputEmail1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Alamat</label>
                                           <textarea name="alamat_akad" class="form-control" id="" cols="100%" rows="3">{{ $dt->alamat_akad }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Peta Lokasi</label>
                                           <textarea name="peta" class="form-control" id="" cols="100%" rows="2">{{ $dt->peta }}</textarea>
                                           <p style="color: red"> Petunjuk : <a href="https://spektaweb.com/posts/cara-setting-lokasi-undangan-di-google-maps"> Lihat</a></p>
                                        </div><hr>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <!-- general form elements -->
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Resepsi</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tanggal : <strong style="color: royalblue">{{ date('d F Y', strtotime($dt->tgl_resepsi)) }}</strong></label>
                                            <input type="date" value="{{ $dt->tgl_resepsi }}" class="form-control" name="tgl_resepsi" id="exampleInputEmail1">
                                            <p style="color: red"> Format : Bulan/Tanggal/Tahun</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Dari : <strong style="color: royalblue">{{ $dt->w_resepsi_awal }} s/d Selesai</strong></label>
                                            <input type="time" class="form-control" value="08:00:00" name="w_resepsi_awal" id="exampleInputEmail1">
                                            <p style="color: red">AM : 00:00 - 11:59 | PM : 12:00 - 23:59 </p>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Alamat</label>
                                           <textarea name="alamat_resepsi" class="form-control" id="" cols="100%" rows="3">{{ $dt->alamat_akad }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Peta Lokasi</label>
                                           <textarea name="peta" class="form-control" id="" cols="100%" rows="2">{{ $dt->peta }}</textarea>
                                           
                                           <p style="color: red"> Petunjuk : <a href="https://spektaweb.com/posts/cara-setting-lokasi-undangan-di-google-maps"> Lihat</a></p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <!-- general form elements -->
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Hiburan</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tanggal : <strong style="color: royalblue">{{ date('d F Y', strtotime($dt->tgl_hiburan)) }}</strong></label>
                                            <input type="date" value="{{ $dt->tgl_hiburan }}" class="form-control" name="tgl_hiburan" id="exampleInputEmail1">
                                            <p style="color: red"> Format : Bulan/Tanggal/Tahun</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Dari : <strong style="color: royalblue">{{ $dt->w_hiburan_awal }} s/d Selesai</strong></label>
                                            <input type="time" class="form-control" value="08:00:00" name="w_hiburan_awal" id="exampleInputEmail1">
                                            <p style="color: red">AM : 00:00 - 11:59 | PM : 12:00 - 23:59 </p>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Hiburan</label>
                                           <textarea name="hiburan" class="form-control" id="" cols="100%" rows="3">{{ $dt->hiburan }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Peta Lokasi</label>
                                           <textarea name="peta" class="form-control" id="" cols="100%" rows="2">{{ $dt->peta }}</textarea>
                                           
                                           <p style="color: red"> Petunjuk : <a href="https://spektaweb.com/posts/cara-setting-lokasi-undangan-di-google-maps"> Lihat</a></p>
                                        </div><hr>
                                        <button type="submit" class="btn btn-success btn-block"><i class="fa fa-save"> Simpan</i></button>
                                    </div>
                            </div>
                        </div>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>

@endsection


