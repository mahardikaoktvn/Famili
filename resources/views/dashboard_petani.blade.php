@extends('layouts.main_petani')

@section('petani')
  @include('partial.carousel_petani')

  <div class="about">
    <div class="container">
      <div class="row">

        <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
          <div class="about_box">
            <h2>FAMILI<br><strong class="black"> Langkah-Langkah Budidaya Komoditas Vanili</strong></h2>
            <p>a.  	Persiapan Bibit<br>
              b.  	Persiapan Lahan<br>
              c.   Penanaman<br>
              d.  	Perawatan<br>
              e.  	Pemanenan</p>
            <a href="{{$mou->file_mou}}" download>Download MOU</a>
          </div>
        </div>
        <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
          <div class="about_img">
            <figure><img src="./assets/img/panen-van-1.jpg" alt="img" /></figure>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="about">
    <div class="container">
      <div class="row">

        <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
          <div class="about_box">
            <h2>FAMILI<br><strong class="black">Prediksi bagi hasil</strong></h2>
            <form action="/simulasi" method="post">
            @csrf
            <input class="mt-4 form-control rounded shadow-xs" placeholder="Luas Lahan meter persegi" type="type" name="luaslahan" required>
            <div>
            @error('luaslahan')
              <label class="text-sm text-red-700 dark:text-red-400" >{{ $message }}</label>
            @enderror
            </div>
            <a>
              <button type="submit">
                Lihat Prediksi
              </button>
            </a>
            </form>
          </div>
        </div>
        <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
          <div class="about_img">
            <figure><img src="./assets/img/panen-van-1.jpg" alt="img" /></figure>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection