<section class="ftco-section bg-light" id="greeting-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
      <div class="col-md-12 text-center heading-section ftco-animate">
          <span class="clone">Ucapan Kalian</span>
        <h2 class="mb-3">Ucapan Kalian</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel ftco-owl">
          @foreach ($sweet as $ucp)
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="text">
                <p class="mb-4">{{ $ucp->pesan }}</p>
                <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url('{{ url('ucapan', $ucp->photo) }}')"></div>
                    <div class="pl-3">
                        <p class="name">{{ $ucp->nama }}</p>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    </div>
</section>