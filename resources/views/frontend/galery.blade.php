<section class="ftco-section" id="gallery-section">
    <div class="container-fluid px-md-4">
        <div class="row justify-content-center pb-5">
      <div class="col-md-12 text-center heading-section ftco-animate">
          <span class="clone">Photos</span>
        <h2 class="mb-3">Gallery</h2>
      </div>
    </div>
    <div class="row">
        @foreach ($galery as $gl)
            <div class="col-md-3 ftco-animate">
                <a href="{{ url('galery', $gl->photo) }}" class="gallery img image-popup d-flex align-items-center justify-content-center" style="background-image: url('{{ url('galery', $gl->photo) }}');">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="ion-ios-image"></span></div>
                </a>
            </div>
        @endforeach
    </div>
    </div>
</section>