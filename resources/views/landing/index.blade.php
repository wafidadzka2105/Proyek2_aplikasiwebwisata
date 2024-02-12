@extends('landing.layouts.app')

@section('landing-section')
<div class="container">
  <section class="section-stats row justify-content-center" id="stats">
    <div class="col-3 col-md-2 stats-detail">
      <h2>20K</h2>
      <p>Members</p>
    </div>
    <div class="col-3 col-md-2 stats-detail">
      <h2>12</h2>
      <p>Countries</p>
    </div>
    <div class="col-3 col-md-2 stats-detail">
      <h2>3K</h2>
      <p>Hotels</p>
    </div>
    <div class="col-3 col-md-2 stats-detail">
      <h2>72</h2>
      <p>Partners</p>
    </div>
  </section>
</div>
<section class="section-popular" id="paket-travel">
  <div class="container">
    <div class="row">
      <div class="col text-center section-popular-heading">
        <h2>Wisata Popular</h2>
        <p>
          Something that you never try
          <br />
          before in this world
        </p>
      </div>
    </div>
  </div>
</section>
<section class="section-popular-content" id="popularContent">
  <div class="container">
    <div class="section-popular-travel row justify-content-center">
      @foreach ($travels as $travel)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div
            class="card-travel text-center d-flex flex-column"
          >
            <div class="travel-country text-dark">{{$travel->title}}</div>
            <div class="travel-location text-dark">{{$travel->location}}</div>
            <div class="travel-button mt-auto">
              <a href="{{route('detail', $travel->slug)}}" class="btn btn-travel-details px-4">
                View Details
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
<section class="section-networks" id="networks">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h2>Our Networks</h2>
        <p>
          Companies are trusted us
          <br />
          more than just a trip
        </p>
      </div>
      <div class="col-md-8 text-center">
        <img src="{{asset('landing/images/partner.png')}}" class="img-patner" />
      </div>
    </div>
  </div>
</section>
<section class="section-testimonials-heading" id="testimonial">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h2>They Are Loving Us</h2>
        <p>
          Moments were giving them
          <br />
          the best experience
        </p>
      </div>
    </div>
  </div>
</section>
<section class="section-testimonials-content" id="testimonialsContent">
  <div class="container">
    <div
      class="section-popular-travel row justify-content-center match-height"
    >
      <div class="col-sm-6 col-md-6 col-lg-4">
        <div class="card card-testimonial text-center">
          <div class="testimonial-content">
            <img
              src="{{asset('landing/images/avatar-1.png')}}"
              alt=""
              class="mb-4 rounded-circle"
            />
            <h3 class="mb-4">Gilang</h3>
            <p class="testimonials">
              “ Sangat Luar Biasa “
            </p>
          </div>
          <hr />
          <p class="trip-to mt-2">Trip to Kuta</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-4">
        <div class="card card-testimonial text-center">
          <div class="testimonial-content">
            <img
              src="{{asset('landing/images/avatar-2.png')}}"
              alt=""
              class="mb-4 rounded-circle"
            />
            <h3 class="mb-4">KIBO</h3>
            <p class="testimonials">
              “ Liburan yg Sangat Menyenangkan “
            </p>
          </div>
          <hr />
          <p class="trip-to mt-2">Trip to Tanah Lot</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-4">
        <div class="card card-testimonial text-center">
          <div class="testimonial-content mb-auto">
            <img
              src="{{asset('landing/images/avatar-3.png')}}"
              alt=""
              class="mb-4 rounded-circle"
            />
            <h3 class="mb-4">Putri</h3>
            <p class="testimonials">
              “ Ahh senang sekali“
            </p>
          </div>
          <hr />
          <p class="trip-to mt-2">Trip to Karimun Jawa</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <a href="#" class="btn btn-secondary px-4 mt-4 mx-1">
           Butuh Bantuan
        </a>
        <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
          Ayo Mulai
        </a>
      </div>
    </div>
  </div>
</section>
@endsection