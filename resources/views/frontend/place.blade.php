<section class="ftco-section bg-light" id="when-where-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
      <div class="col-md-12 text-center heading-section ftco-animate">
          <span class="clone">Kapan & Dimana?</span>
        <h2 class="mb-3">Kapan &amp; Dimana?</h2>
      </div>
    </div>
    <div class="row">
        @foreach ($akad as $akd)
        <div class="col-md-4 ftco-animate">
            <div class="place img" style="background-image: url(images/place-2.jpg);">
                <div class="text text-center">
                    <span class="icon flaticon-wedding-kiss"></span>
                    <h3>Akad Nikah</h3>
                    <p><span>Tanggal : <br> {{ date('d F Y ', strtotime($akd->tgl_akad )) }}</span><br><span>Jam : <br>{{ date('H:i', strtotime($akd->w_akad_awal)) }} - {{ date('H:i', strtotime($akd->w_akad_akhir))}}</span></p>
                    <p><span>Bertempat : <br> {{ $akd->alamat_akad }}</span></p>
                    <p><a target="_blank" href="{{ $akd->peta }}" class="btn-custom">lihat Map</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 ftco-animate">
            <div class="place img" style="background-image: url(images/place-1.jpg);">
                <div class="text text-center">
                    <span class="icon flaticon-reception-bell"></span>
                    <h3>Resepsi</h3>
                    <p><span>Tanggal : <br> {{ date('d F Y ', strtotime($akd->tgl_resepsi )) }}</span><br><span>Jam : <br>{{ date('H:i', strtotime($akd->w_akad_awal)) }} s/d Selesai </span></p>
                    <p><span>Bertempat : <br> {{ $akd->alamat_resepsi }}</span></p>
                    <p><a href="#" class="btn-custom">lihat Map</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 ftco-animate">
            <div class="place img" style="background-image: url(images/place-3.jpg);">
                <div class="text text-center">
                    <span class="icon flaticon-cake"></span>
                    <h3>Hiburan</h3>
                    <p><span>Tanggal : <br> {{ date('d F Y ', strtotime($akd->hiburan )) }}</span><br><span>Jam : <br>{{ date('H:i', strtotime($akd->w_hiburan_awal)) }} s/d Selesai</span></p>
                    <p><span>Acara : <br> {{ $akd->hiburan }}</span></p>
                    <p><a href="#" class="btn-custom">lihat Map</a></p>
                </div>
            </div>
        </div>
        @endforeach
       
    </div>
    </div>
</section>