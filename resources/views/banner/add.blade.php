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
                <form role="form"method="post" action="{{ url('banner/update', $dt->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title">{{$title}}</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Judul</label>
                                            <input type="text" class="form-control" name="title" id="exampleInputEmail1" value="{{ $dt->title }}" placeholder="Masukan Judul Banner">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nama Laki-laki</label>
                                                    <input type="text" class="form-control" name="nama_l" id="exampleInputEmail1" value="{{ $dt->nama_l }}" placeholder="Masukan Nama Mempelai Pria">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nama Perempuan</label>
                                                    <input type="text" class="form-control" name="nama_p" value="{{ $dt->nama_p }}" id="exampleInputEmail1" placeholder="Masukan Nama Mempelai Pria">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Tanggal : <strong style="color: royalblue">{{ date('d F Y', strtotime($dt->w_pelaksanaan)) }}</strong></label>
                                                    <input type="date" value="{{ $dt->w_pelaksanaan }}" class="form-control" name="w_pelaksanaan" id="exampleInputEmail1">
                                                    <p style="color: red"> Format : Bulan/Tanggal/Tahun</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Waktu : <strong style="color: royalblue">{{ $dt->wkt_pelaksanaan }}</strong></label>
                                                    <input type="time" class="form-control" value="08:00:00" name="wkt_pelaksanaan" id="exampleInputEmail1">
                                                    <p style="color: red"> Keterangan : AM : 00:00 - 11:59 | <br> PM : 12:00 - 23:59 </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Video Background</label>
                                            <input type="text" class="form-control" name="video_background" id="exampleInputEmail1" value="{{ $dt->video_background }}" placeholder="Masukan link Video Youtube">
                                            <p style="color: red"> Ket : Tidak Wajib di isi | Open Jasa Pembuatan Foto Video</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar Background Banner</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default btn-file">
                                                        Browse… <input type="file" id="imgInp" name="image">
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control" value="Pilih thumbnail" readonly>
                                            </div><hr>
                                            <img src="{{ url('image', $dt->img_banner) }}" id='img-upload' style="width: 100%"/> <center><p>Image Preview</p></center>
                                        </div><hr>
                                        <center><p style="color: red"> Disarankan Upload Gambar dengan ukuran 1920x1280 Pixel, <br>
                                        Dan Foto Anda beserta pasangan tepat berada di tengah-tengah. </p></center>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title"></h3>
                                </div>
    
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Gambar Undangan</label>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <span class="btn btn-default btn-file">
                                                    Browse… <input type="file" id="imginp" name="img">
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" value="Pilih thumbnail" readonly>
                                        </div><hr>
                                        <img src="{{ url('image', $dt->img_undangan) }}" id='imgupload' style="width: 100%"/> <center><p>Image Preview</p></center>
                                    </div><hr>
                                    <center><p style="color: red"> Disarankan Upload Gambar dengan ukuran 1000x1500 Pixel, <br>
                                    Dan Foto Anda beserta pasangan tepat berada di tengah-tengah. </p></center> <hr>
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

@section('scripts')
    <script type="text/javascript">
        $(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});
    </script>

    <script type="text/javascript">
        $(document).ready( function() {
        $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
        });

        $('.btn-file :file').on('fileselect', function(event, label) {
            
            var input = $(this).parents('.input-group').find(':text'),
                log = label;
            
            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            }
        
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#imgupload').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imginp").change(function(){
            readURL(this);
        }); 	
    });
    </script>
@endsection

