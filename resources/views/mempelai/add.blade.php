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
                <form role="form"method="post" action="{{ url('mempelai/update', $dt->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Manage Profil Mempelai Pria</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Mempelai Pria</label>
                                            <input type="text" class="form-control" name="nama_l" id="exampleInputEmail1" value="{{ $dt->nama_l }}" placeholder="Masukan Judul Banner">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Deskripsi</label>
                                            <textarea name="deskripsi_l" id="" class="form-control" cols="100%" rows="10">{{ $dt->deskripsi_l }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Foto Profil Mempelai Pria</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default btn-file">
                                                        Browse… <input type="file" id="imgInp" name="image">
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control" value="Pilih thumbnail" readonly>
                                            </div><hr>
                                            <img src="{{ url('image', $dt->photo_pria) }}" id='img-upload' style="width: 100%"/> <center><p>Image Preview</p></center>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Manage Profil Mempelai Wanita</h3>
                                </div>
    
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Mempelai Pria</label>
                                        <input type="text" class="form-control" name="nama_p" id="exampleInputEmail1" value="{{ $dt->nama_p }}" placeholder="Masukan Judul Banner">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Deskripsi</label>
                                        <textarea name="deskripsi_p" id="" class="form-control" cols="100%" rows="10">{{ $dt->deskripsi_p }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Foto Profil Mempelai Wanita</label>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <span class="btn btn-default btn-file">
                                                    Browse… <input type="file" id="imginp" name="img">
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" value="Pilih thumbnail" readonly>
                                        </div><hr>
                                        <img src="{{ url('image', $dt->photo_wanita) }}" id='imgupload' style="width: 100%"/> <center><p>Image Preview</p></center>
                                    </div>
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

