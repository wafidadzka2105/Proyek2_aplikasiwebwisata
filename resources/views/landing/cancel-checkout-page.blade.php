@extends('landing.layouts.app')
@section('title', '- Checkout Canceled')

@section('landing-section')
<div class="section-success d-flex align-items-center">
    <div class="col text-center">
      <img src="{{ asset('landing/images/ic_mail.png') }}" alt="" />
      <h1>Oops! Gagal</h1>
      <p>
        Transaksi Anda Gagal Nich!!!
        <br />
        silakan kembali lagi nanti yahh.
      </p>
      <a href="{{ route('landing') }}" class="btn btn-home-page mt-3 px-5">
        Home Page
      </a>
    </div>
</div>
@endsection