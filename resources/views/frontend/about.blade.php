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
        <h1 class="breadcrumb-title mb-3">About Us</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
          </ol>
        </nav>
      </div>
    </section>
    <div class="mt-5"></div>
    @include('frontend.partials.about')

    @include('frontend.partials.gallery')

    @include('frontend.partials.services')

    @include('frontend.partials.contact')
@endsection