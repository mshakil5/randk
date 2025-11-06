@extends('frontend.master')

@section('content')
    @foreach ($sections as $section)
        @if ($section->name == 'slider')
            <section id="hero" class="hero section dark-background">
                <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                    <div class="carousel-inner">
                        @foreach ($sliders as $key => $slider)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <img src="{{ asset('images/slider/' . $slider->image) }}" class="d-block w-100"
                                    alt="{{ $slider->title ?? 'Slider Image' }}">
                            </div>
                        @endforeach
                    </div>

                    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                    </a>

                    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                    </a>
                </div>
            </section>
        @endif

        @if ($section->name == 'welcome')
            @php
                $welcome = App\Models\Master::firstOrCreate(['name' => 'welcome']);
            @endphp

            <section id="call-to-action" class="call-to-action section">

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row align-items-center">

                        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                            <div class="cta-content">
                                <div class="badge mb-3">
                                    <i class="bi bi-rocket-takeoff"></i>
                                    {{ $welcome->short_title ?? '' }}
                                </div>
                                <h2>{{ $welcome->long_title ?? '' }}</h2>
                                <p class="lead">{!! $welcome->short_description ?? '' !!}</p>
                            </div>
                        </div>

                        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                            <div class="features-list mb-4">
                                {!! $welcome->long_description ?? '' !!}
                            </div>

                            <div class="cta-buttons">
                                <a href="{{ route('contact') }}" class="btn btn-primary">Get In Touch</a>
                                <a href="{{ route('services') }}" class="btn btn-outline">Services</a>
                            </div>
                        </div>

                    </div>

                </div>

            </section>
        @endif

        @if ($section->name == 'about')
            @include('frontend.partials.about')
        @endif

        @if ($section->name == 'service')
            @include('frontend.partials.services')
        @endif

        @if ($section->name == 'contact')
             @include('frontend.partials.contact')
        @endif
    @endforeach
@endsection