@extends('frontend.master')

@section('content')
    @php
        $bgImage = $banner && $banner->feature_image
            ? asset('images/banner/' . $banner->feature_image)
            : asset('page-banner.png');
    @endphp


  <section class="breadcrumb-section text-center text-white d-flex align-items-center justify-content-center"
      style="background-image: url('{{ $bgImage }}');">
    <div class="container d-none">
      <h1 class="breadcrumb-title mb-3">Services</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center mb-0">
          <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
          <li class="breadcrumb-item active text-white" aria-current="page">Services</li>
        </ol>
      </nav>
    </div>
  </section>
  
  <div class="mt-5"></div>

  <section class="about section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row g-5 align-items-center">
        <div class="col-lg-6 position-relative">
          <div class="about-img" data-aos="fade-right">
            <img src="{{ asset('images/products/' . $service->image) }}" alt="{{ $service->title ?? '' }}" class="img-fluid">
          </div>
        </div>

        <div class="col-lg-6" data-aos="fade-left">
          <h2 class="display-4 fw-bold mb-4">{{ $service->title }}</h2>
          <p class="lead mb-4">{!! $service->long_description !!}</p>
        </div>
      </div>

    </div>

  </section>

  @include('frontend.partials.gallery')

  @include('frontend.partials.contact')

@endsection