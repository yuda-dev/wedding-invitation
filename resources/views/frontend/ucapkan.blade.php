<section class="ftco-section bg-secondary" id="rsvp-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="clone">Ucapkan Sesuatu</span>
                <h2 class="mb-3">Ucapkan Sesuatu?</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
                @if($message = Session::get('success'))
                    <div class="row">
                        <div class="col">
                            <div class="alert alert-warning">
                                <strong>Sukses !</strong> {{ $message }}.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                        </div>
                    </div>
                @endif
                <form action="{{ url('ucapan/add') }}#rsvp-section" method="POST" enctype="multipart/form-data" class="rsvp-form ftco-animate">
                    @csrf
                        <div class="">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nama" placeholder="Nama">
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group">
                                <input type="file" class="form-control" placeholder="Nama" name="photo">
                                <p style="color: red">* Masukan Foto Kamu</p>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group">
                            <textarea id="" cols="30" rows="4" class="form-control" name="pesan" placeholder="Pesan"></textarea>
                            </div>
                            <div class="form-group">
                            <input type="submit" value="Ucapkan" class="btn btn-primary py-3 px-4">
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</section>