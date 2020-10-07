@foreach ($mempelai as $mp)
<section class="ftco-section bg-section"  id="groom-bride-section">
    <div class="overlay-top" style="background-image: url(images/top-bg.jpg);"></div>
    <div class="overlay-bottom" style="background-image: url(images/bottom-bg.jpg);"></div>
    <div class="container">
        <div class="row justify-content-center pb-5">
      <div class="col-md-12 text-center heading-section ftco-animate">
          <span class="clone">Profil Pengantin</span>
        <h2 class="mb-3">Profil Pengantin</h2>
      </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-6 text-center d-flex align-items-stretch">
                    <div class="bride-groom ftco-animate">
                        <div class="img" style="background-image: url('{{ url('image', $mp->photo_pria) }}');"></div>
                        <div class="text mt-4 px-4">
                            <h2>{{ $mp->nama_l }}</h2>
                            <p>{{ $mp->deskripsi_l }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center d-flex align-items-stretch">
                    <div class="bride-groom ftco-animate">
                        <div class="img" style="background-image: url('{{ url('image', $mp->photo_wanita) }}');"></div>
                        <div class="text mt-4 px-4">
                            <h2>{{ $mp->nama_p }}</h2>
                            <p>{{ $mp->deskripsi_p }}</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
    </div>
</section>
@endforeach
