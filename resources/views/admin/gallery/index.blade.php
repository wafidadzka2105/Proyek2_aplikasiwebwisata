@extends('admin.layouts.app')
@section('title', 'Galleries Travel Package')


@section('admin-content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row mb-4">
                <div class="col-6 col-md-6 order-md-1 order-first">
                    <h3>Travel Packages Galleries</h3>
                </div>
                <div class="col-6 col-md-6 order-md-2 order-last">
                    <nav class="breadcrumb-header float-end">
                        <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary"> Add New Image</a>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-12 col-md-12 col-lg-12">
                                <a href="{{ route('admin.gallery.list') }}" class="btn btn-outline-primary float-end">List
                                    Gallery</a>
                                <h5 class="pt-2">Gallery</h5>
                            </div>
                        </div>
                        @if (Session(null))
                            <div class="alert alert-info alert-dismissible fade show m-3" role="alert">
                                <strong> Catatan!</strong> Upload Gambar Mode Landscape dengan ukuran yang sama supaya
                                tampilan menjadi Rapih!
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        
                        <div class="card-body">
                            <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                {{-- @foreach ($galleries as $key => $gallery) --}}
                                    <div class="col-6 col-sm-6 col-lg-4 mt-2 mb-2">
                                        <a href="#">
                                            <img class="w-100 active" src="{{ asset('SeedingImage/Bratan/bratan2.jpeg') }}"
                                                data-bs-target="#Gallerycarousel" data-bs-slide-to="">
                                        </a>
                                    </div>
                                {{-- @endforeach --}}

                                {{-- @if ($galleries->isEmpty())
                                    <h5 class="text-center">Oops! There is no image to show, Please upload one.</h5>
                                @endif --}}


                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                {{-- @foreach ($galleries as $key => $gallery) --}}
                                    <div class="col-6 col-sm-6 col-lg-4 mt-2 mb-2">
                                        <a href="#">
                                            <img class="w-100 active" src="{{ asset('SeedingImage/Bratan/bratan3.jpeg') }}"
                                                data-bs-target="#Gallerycarousel" data-bs-slide-to="">
                                        </a>
                                    </div>
                                {{-- @endforeach --}}

                                {{-- @if ($galleries->isEmpty())
                                    <h5 class="text-center">Oops! There is no image to show, Please upload one.</h5>
                                @endif --}}


                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                {{-- @foreach ($galleries as $key => $gallery) --}}
                                    <div class="col-6 col-sm-6 col-lg-4 mt-2 mb-2">
                                        <a href="#">
                                            <img class="w-100 active" src="{{ asset('SeedingImage/Bratan/bratan4.jpeg') }}"
                                                data-bs-target="#Gallerycarousel" data-bs-slide-to="">
                                        </a>
                                    </div>
                                {{-- @endforeach --}}

                                {{-- @if ($galleries->isEmpty())
                                    <h5 class="text-center">Oops! There is no image to show, Please upload one.</h5>
                                @endif --}}


                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                {{-- @foreach ($galleries as $key => $gallery) --}}
                                    <div class="col-6 col-sm-6 col-lg-4 mt-2 mb-2">
                                        <a href="#">
                                            <img class="w-100 active" src="{{ asset('SeedingImage/Bromo/bromo1.jpeg') }}"
                                                data-bs-target="#Gallerycarousel" data-bs-slide-to="">
                                        </a>
                                    </div>
                                {{-- @endforeach --}}

                                {{-- @if ($galleries->isEmpty())
                                    <h5 class="text-center">Oops! There is no image to show, Please upload one.</h5>
                                @endif --}}


                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                {{-- @foreach ($galleries as $key => $gallery) --}}
                                    <div class="col-6 col-sm-6 col-lg-4 mt-2 mb-2">
                                        <a href="#">
                                            <img class="w-100 active" src="{{ asset('SeedingImage/Bromo/bromo2.jpeg') }}"
                                                data-bs-target="#Gallerycarousel" data-bs-slide-to="">
                                        </a>
                                    </div>
                                {{-- @endforeach --}}

                                {{-- @if ($galleries->isEmpty())
                                    <h5 class="text-center">Oops! There is no image to show, Please upload one.</h5>
                                @endif --}}


                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                {{-- @foreach ($galleries as $key => $gallery) --}}
                                    <div class="col-6 col-sm-6 col-lg-4 mt-2 mb-2">
                                        <a href="#">
                                            <img class="w-100 active" src="{{ asset('SeedingImage/Bromo/bromo3.jpeg') }}"
                                                data-bs-target="#Gallerycarousel" data-bs-slide-to="">
                                        </a>
                                    </div>
                                {{-- @endforeach --}}

                                {{-- @if ($galleries->isEmpty())
                                    <h5 class="text-center">Oops! There is no image to show, Please upload one.</h5>
                                @endif --}}


                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                {{-- @foreach ($galleries as $key => $gallery) --}}
                                    <div class="col-6 col-sm-6 col-lg-4 mt-2 mb-2">
                                        <a href="#">
                                            <img class="w-100 active" src="{{ asset('SeedingImage/Kuta/kuta1.jpeg') }}"
                                                data-bs-target="#Gallerycarousel" data-bs-slide-to="">
                                        </a>
                                    </div>
                                {{-- @endforeach --}}

                                {{-- @if ($galleries->isEmpty())
                                    <h5 class="text-center">Oops! There is no image to show, Please upload one.</h5>
                                @endif --}}


                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                {{-- @foreach ($galleries as $key => $gallery) --}}
                                    <div class="col-6 col-sm-6 col-lg-4 mt-2 mb-2">
                                        <a href="#">
                                            <img class="w-100 active" src="{{ asset('SeedingImage/Kuta/kuta2.jpeg') }}"
                                                data-bs-target="#Gallerycarousel" data-bs-slide-to="">
                                        </a>
                                    </div>
                                {{-- @endforeach --}}

                                {{-- @if ($galleries->isEmpty())
                                    <h5 class="text-center">Oops! There is no image to show, Please upload one.</h5>
                                @endif --}}


                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                {{-- @foreach ($galleries as $key => $gallery) --}}
                                    <div class="col-6 col-sm-6 col-lg-4 mt-2 mb-2">
                                        <a href="#">
                                            <img class="w-100 active" src="{{ asset('SeedingImage/Nusa/nusa1.jpeg') }}"
                                                data-bs-target="#Gallerycarousel" data-bs-slide-to="">
                                        </a>
                                    </div>
                                {{-- @endforeach --}}

                                {{-- @if ($galleries->isEmpty())
                                    <h5 class="text-center">Oops! There is no image to show, Please upload one.</h5>
                                @endif --}}


                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                {{-- @foreach ($galleries as $key => $gallery) --}}
                                    <div class="col-6 col-sm-6 col-lg-4 mt-2 mb-2">
                                        <a href="#">
                                            <img class="w-100 active" src="{{ asset('SeedingImage/Nusa/nusa2.jpeg') }}"
                                                data-bs-target="#Gallerycarousel" data-bs-slide-to="">
                                        </a>
                                    </div>
                                {{-- @endforeach --}}

                                {{-- @if ($galleries->isEmpty())
                                    <h5 class="text-center">Oops! There is no image to show, Please upload one.</h5>
                                @endif --}}


                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                {{-- @foreach ($galleries as $key => $gallery) --}}
                                    <div class="col-6 col-sm-6 col-lg-4 mt-2 mb-2">
                                        <a href="#">
                                            <img class="w-100 active" src="{{ asset('SeedingImage/TanahLot/tanahlot1.jpeg') }}"
                                                data-bs-target="#Gallerycarousel" data-bs-slide-to="">
                                        </a>
                                    </div>
                                {{-- @endforeach --}}

                                {{-- @if ($galleries->isEmpty())
                                    <h5 class="text-center">Oops! There is no image to show, Please upload one.</h5>
                                @endif --}}


                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                {{-- @foreach ($galleries as $key => $gallery) --}}
                                    <div class="col-6 col-sm-6 col-lg-4 mt-2 mb-2">
                                        <a href="#">
                                            <img class="w-100 active" src="{{ asset('SeedingImage/TanahLot/tanahlot.jpeg') }}"
                                                data-bs-target="#Gallerycarousel" data-bs-slide-to="">
                                        </a>
                                    </div>
                                {{-- @endforeach --}}

                                {{-- @if ($galleries->isEmpty())
                                    <h5 class="text-center">Oops! There is no image to show, Please upload one.</h5>
                                @endif --}}


                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                {{-- @foreach ($galleries as $key => $gallery) --}}
                                    <div class="col-6 col-sm-6 col-lg-4 mt-2 mb-2">
                                        <a href="#">
                                            <img class="w-100 active" src="{{ asset('SeedingImage/TanahLot/tanahlot4.jpeg') }}"
                                                data-bs-target="#Gallerycarousel" data-bs-slide-to="">
                                        </a>
                                    </div>
                                {{-- @endforeach --}}

                                {{-- @if ($galleries->isEmpty())
                                    <h5 class="text-center">Oops! There is no image to show, Please upload one.</h5>
                                @endif --}}


                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                {{-- @foreach ($galleries as $key => $gallery) --}}
                                    <div class="col-6 col-sm-6 col-lg-4 mt-2 mb-2">
                                        <a href="#">
                                            <img class="w-100 active" src="{{ asset('SeedingImage/TanahLot/tanahlot5.jpeg') }}"
                                                data-bs-target="#Gallerycarousel" data-bs-slide-to="">
                                        </a>
                                    </div>
                                {{-- @endforeach --}}

                                {{-- @if ($galleries->isEmpty())
                                    <h5 class="text-center">Oops! There is no image to show, Please upload one.</h5>
                                @endif --}}


                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                {{-- @foreach ($galleries as $key => $gallery) --}}
                                    <div class="col-6 col-sm-6 col-lg-4 mt-2 mb-2">
                                        <a href="#">
                                            <img class="w-100 active" src="{{ asset('SeedingImage/Nusa/nusa4.jpeg') }}"
                                                data-bs-target="#Gallerycarousel" data-bs-slide-to="">
                                        </a>
                                    </div>
                                {{-- @endforeach --}}

                                {{-- @if ($galleries->isEmpty())
                                    <h5 class="text-center">Oops! There is no image to show, Please upload one.</h5>
                                @endif --}}


                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                {{-- @foreach ($galleries as $key => $gallery) --}}
                                    <div class="col-6 col-sm-6 col-lg-4 mt-2 mb-2">
                                        <a href="#">
                                            <img class="w-100 active" src="{{ asset('SeedingImage/Kuta/kuta5.jpeg') }}"
                                                data-bs-target="#Gallerycarousel" data-bs-slide-to="">
                                        </a>
                                    </div>
                                {{-- @endforeach --}}

                                {{-- @if ($galleries->isEmpty())
                                    <h5 class="text-center">Oops! There is no image to show, Please upload one.</h5>
                                @endif --}}


                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                {{-- @foreach ($galleries as $key => $gallery) --}}
                                    <div class="col-6 col-sm-6 col-lg-4 mt-2 mb-2">
                                        <a href="#">
                                            <img class="w-100 active" src="{{ asset('SeedingImage/Bromo/bromo5.jpeg') }}"
                                                data-bs-target="#Gallerycarousel" data-bs-slide-to="">
                                        </a>
                                    </div>
                                {{-- @endforeach --}}

                                {{-- @if ($galleries->isEmpty())
                                    <h5 class="text-center">Oops! There is no image to show, Please upload one.</h5>
                                @endif --}}


                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                {{-- @foreach ($galleries as $key => $gallery) --}}
                                    <div class="col-6 col-sm-6 col-lg-4 mt-2 mb-2">
                                        <a href="#">
                                            <img class="w-100 active" src="{{ asset('SeedingImage/bratan1.jpeg') }}"
                                                data-bs-target="#Gallerycarousel" data-bs-slide-to="">
                                        </a>
                                    </div>
                                {{-- @endforeach --}}

                                {{-- @if ($galleries->isEmpty())
                                    <h5 class="text-center">Oops! There is no image to show, Please upload one.</h5>
                                @endif --}}


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="galleryModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="galleryModalTitle">Gallery Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div id="Gallerycarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach ($galleries as $key => $gallery)
                                <button type="button" data-bs-target="#Gallerycarousel"
                                    data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"
                                    aria-current="true"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach ($galleries as $key => $gallery)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <img class="d-block w-100" src="{{ asset($gallery->image) }}">
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#Gallerycarousel" role="button" type="button"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#Gallerycarousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>

                {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div> --}}
            </div>
        </div>
    </div>
@endsection

@push('addons-style')
    <link rel="stylesheet" href="{{ asset('admin/vendors/sweetalert2/sweetalert2.min.css') }}">
@endpush

@push('addons-script')
    <script src="{{ asset('admin/vendors/sweetalert2/sweetalert2.all.min.js') }}"></script>
    @if (session('success'))
        <script>
            Swal.fire(
                'Sukses!',
                'Gambar berhasil di upload!',
                'success'
            )
        </script>
    @endif
@endpush
