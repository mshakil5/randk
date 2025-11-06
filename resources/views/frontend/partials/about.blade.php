            <section id="services" class="services section mb-5">

                @php
                    $about = App\Models\Master::firstOrCreate(['name' => 'about']);
                @endphp

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="services-content" data-aos="fade-left" data-aos-duration="900">
                                <span class="subtitle">{{ $about->short_title ?? '' }}</span>
                                <h2>{{ $about->long_title ?? '' }}</h2>
                                <p data-aos="fade-right" data-aos-duration="800">{!! $about->long_description ?? '' !!}</p>
                                <div class="mt-4" data-aos="fade-right" data-aos-duration="1100">
                                    <a href="{{ route('contact') }}" class="btn-consultation"><span>Get In Touch</span><i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-image" data-aos="fade-left" data-aos-delay="200">
                                <img src="{{ asset('images/meta_image/' . $about->meta_image) }}" class="img-fluid"
                                    alt="{{ $about->short_title ?? '' }}">
                                <div class="shape-circle"></div>
                                <div class="shape-accent"></div>
                            </div>
                        </div>
                    </div>

                </div>

            </section>