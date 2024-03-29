@extends('landing.layouts.app')

@section('title', '- Detail Wisata')

@section('landing-section')
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0 pl-3 pl-lg-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" aria-current="page">
                                Paket Travel
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>{{ $travel->title }}</h1>
                        <p>
                            {{ $travel->location }}
                        </p>
                        <div class="gallery">
                            <div class="xzoom-container">
                              {{-- validasi jika tidak ada gambar --}}
                              @if ($travel->galleries->isNotEmpty())
                              <div class="xzoom-container">
                                  <img class="xzoom" id="xzoom-default"
                                      src="{{ Storage::url($travel->Galleries->first()->image) }}"
                                      xoriginal="{{ Storage::url($travel->Galleries->first()->image) }}" />
                                  <div class="xzoom-thumbs">
                                      @foreach ($travel->galleries as $gallery)
                                          <a href="{{ Storage::url($gallery->image) }}"><img class="xzoom-gallery"
                                                  width="128" src="{{ Storage::url($gallery->image) }}"
                                                  xpreview="{{ Storage::url($gallery->image) }}" /></a>
                                      @endforeach
                                  </div>
                              </div>
                          @else
                              <p class="text-center">Gambar tidak tersedia</p>
                          @endif
                              {{-- --}}
                            </div>
                            <h2>Tentang Wisata</h2>
                            {!! $travel->about !!}
                            <div class="features row pt-3">
                                <div class="col-md-4">
                                    <img src="{{ asset('landing/images/ic_event.png') }}" alt=""
                                        class="features-image" />
                                    <div class="description">
                                        <h3>Featured Ticket</h3>
                                        <p>{{ $travel->featured_event }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img src="{{ asset('landing/images/ic_bahasa.png') }}" alt=""
                                        class="features-image" />
                                    <div class="description">
                                        <h3>Language</h3>
                                        <p>{{ $travel->language }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img src="{{ asset('landing/images/ic_foods.png') }}" alt=""
                                        class="features-image" />
                                    <div class="description">
                                        <h3>Foods</h3>
                                        <p>{{ $travel->foods }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Members are going</h2>
                        <div class="members my-2">
                            <img src="{{ asset('landing/images/members.png') }}" alt="" class="w-75" />
                        </div>
                        <hr />
                        <h2>Trip Informations</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Tanggal Keberangkatan</th>
                                <td width="50%" class="text-right">
                                    {{ \Carbon\Carbon::create($travel->departured_date)->format('F n, Y') }}</td>
                            </tr>
                            <tr>
                                <th width="50%">Durasi</th>
                                <td width="50%" class="text-right">{{ $travel->duration }}</td>
                            </tr>
                            <tr>
                                <th width="50%">Type</th>
                                <td width="50%" class="text-right">{{ $travel->type }}</td>
                            </tr>
                            <tr>
                                <th width="50%">Pajak Visa</th>
                                <td width="50%" class="text-right">Rp{{ $travel->additional_visa }} / orang</td>
                            </tr>
                            <tr>
                                <th width="50%">Harga</th>
                                <td width="50%" class="text-right">Rp{{ $travel->price }} / orang</td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        <form action="{{ route('customer.in_cart', $travel->id) }}" method="POST">
                            @csrf
                            <button class="btn btn-block btn-join-now mt-3 py-2">
                                Join Now
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('addon-style')
    <link rel="stylesheet" href="{{ asset('landing/libraries/xzoom/dist/xzoom.css') }}" />
@endpush

@push('addon-script')
    <script src="{{ asset('landing/libraries/xzoom/dist/xzoom.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15
            });
        });
    </script>
@endpush
