@foreach ($baner as $bn)
<section id="home" class="video-hero js-fullheight" style="height: 700px; background-image: url('{{ url('image', $bn->img_banner) }}'); background-size:cover; background-position: top center;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
      <a class="player" data-property="{videoURL:'{{ $bn->video_background }}',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:1080,optimizeDisplay:true}"></a>
      <div class="container">
          <div class="row js-fullheight justify-content-center d-flex align-items-center">
              <div class="col-md-12">
                  <div class="text text-center">
                      <div class="icon">
                          <span class="flaticon-rose-outline-variant-with-vines-and-leaves"></span>
                      </div>
                      <span class="subheading">{{ $bn->title }}</span>
                      <h1>{{ $bn->nama_l }} &amp; {{ $bn->nama_p }}</h1>
                      <div id="timer" class="d-flex">
                        <div class="time" id="days"></div>
                        <div class="time pl-3" id="hours"></div>
                        <div class="time pl-3" id="minutes"></div>
                        <div class="time pl-3" id="seconds"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</section>

<section class="ftco-section ftco-about ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wrap">
                    <div class="row d-flex">
                        <div class="col-md-6 d-flex">
                            <div class="img d-flex align-self-stretch align-items-center" style="background-image:url('{{ url('image', $bn->img_undangan) }}');with:100%:height:1500px">
                            </div>
                        </div>
                        <div class="col-md-6 py-md-5 text">
                            <div class="py-md-4">
                                <div class="row justify-content-start pb-3">
                              <div class="col-md-12 ftco-animate p-4 p-lg-5 text-center">
                                    <div class="icon">
                                        <span class="flaticon-rose-outline-variant-with-vines-and-leaves"></span>
                                    </div>
                                    <span class="subheading" style="margin-top: -40px;margin-bottom: 30px">{{ $bn->title }}</span>
                                    <h2 class="mb-3">{{ $bn->nama_l }} <span> &amp; </span> <br> {{ $bn->nama_p }}</h2>
                                    <span class="subheading">Akan dilaksanakan pada :</span>
                                    <p class="time mb-4"><span>{{ date('d | F | Y', strtotime($bn->w_pelaksanaan)) }}</span></p>
                                    <span class="subheading mb-5">Dimulai Pukul {{ date('H:i', strtotime($bn->wkt_pelaksanaan)) }} <br> s/d Selesai </span>
                                    <span class="subheading mb-5">Subang <br> Jawabarat</span>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
          </div>
        </div>
    </div>
</section>
@endforeach
