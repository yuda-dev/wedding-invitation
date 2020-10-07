@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-warning">
                <div class="box-header" style="margin-top: 20px;margin-left: 2px">
                    <p>
                        <button class="btn btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    </p>
                </div>
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">{{$title}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form"method="post" action="{{ url('galery/add') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputFile">Upload Foto</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="photo[]" required multiple id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Pilih gambar</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary"> Upload</button>
                            </div>
                        </form>
                    </div>
                <div class="card">
                    <div class="card-header" style="background-color: var(--blue);color: white">
                        <h3 class="card-title"></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            @foreach ($data as $dt)
                                <div class="col-md-4">
                                    <hr> <img src="{{ url('galery', $dt->photo ) }}" alt="" style="width: 100%;">
                                    <br> <a href="{{url('galery/delete', $dt->id)}}" id="delete" class="btn btn-sm btn-flat btn-danger btn-hapus"><i class="fa fa-trash"> Hapus</i> </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

@endsection
