@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-warning">
                <div class="box-header" style="margin-top: 20px;margin-left: 10px">
                    <p>
                        <a href="" class="btn btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</a>
                        <a href="{{url('family')}}" class="btn btn-primary"><i class="fa fa-backward"></i> Kembali</a>
                    </p>
                </div>
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">{{$title}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="{{ url('family/update', $dt->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama</label>
                                            <input type="text" class="form-control" name="nama" id="exampleInputEmail1" value="{{ $dt->nama }}" placeholder="Masukan Nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Status Keluarga</label>
                                            <input type="text" class="form-control" name="status" value="{{ $dt->status }}" id="exampleInputEmail1" placeholder="Masukan Status Keluarga">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default btn-file">
                                                        Browse… <input type="file" id="imginp" name="foto">
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control" value="Pilih thumbnail" readonly>
                                            </div><hr>
                                            <img src="{{ url('image', $dt->foto) }}" id='imgupload' style="width: 100%"/> <center><p>Image Preview</p></center>
                                        </div><hr>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

