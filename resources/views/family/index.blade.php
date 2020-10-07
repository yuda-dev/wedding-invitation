@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-warning">
                <div class="box-header" style="margin-top: 20px;margin-left: 2px">
                    <p>
                        <button class="btn btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                        <a href="{{url('family/add')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                        <p style="color: red"> Keterangan : Minimal Memasukan 5 Nama Keluarga !! Max : 8-10 ( Recomendasi )</p>
                        <hr>
                    </p>
                </div>

                <div class="card">
                    <div class="card-header" style="background-color: var(--blue);color: white">
                        <h3 class="card-title">{{$title}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Photo</th>
                                    <th>Status Keluarga</th>
                                    <th>action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $key=>$dt)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$dt->nama}}</td>
                                    <td>
                                        <center><img src="{{ url('image', $dt->foto) }}" style="width: 100px" height="110px" alt=""></center>
                                    </td>
                                    <td>{{ $dt->status }}</td>
                                    <td>
                                        <a href="{{url('family/edit',$dt->id)}}" id="edit" class="btn btn-sm btn-flat btn-success"><i class="fa fa-edit"></i> </a>
                                        <a href="{{url('family/delete', $dt->id)}}" id="delete" class="btn btn-sm btn-flat btn-danger btn-hapus"><i class="fa fa-trash"></i> </a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Photo</th>
                                    <th>Status Keluarga</th>
                                    <th>action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

@endsection
