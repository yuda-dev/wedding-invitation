<section class="ftco-section" id="people-section">
    <div class="container-fluid px-md-5">
        <div class="row justify-content-center pb-5">
      <div class="col-md-12 text-center heading-section ftco-animate">
          <span class="clone">Keluagra</span>
        <h2 class="mb-3">Keluarga</h2>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="carousel-friends owl-carousel ftco-owl ftco-animate">
                @foreach ($family as $fm)
                <div class="item">
                    <div class="people text-center">
                        <div class="img" style="background-image: url('{{ url('image', $fm->foto) }}');"></div>
                            <div class="text">
                                 <h3>{{ $fm->nama }}</h3>
                                <span>{{ $fm->status }}</span>
                            </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</section>