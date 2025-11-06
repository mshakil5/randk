<section id="features" class="services section my-5">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        @php
            $service = App\Models\Master::firstOrCreate(['name' => 'service']);
            $products = App\Models\Product::where('status', 1)
                ->select('id', 'title', 'icon', 'sub_title', 'slug')
                ->orderByRaw('sl = 0, sl ASC')
                ->orderBy('id', 'desc')
                ->get();
        @endphp

        <div class="row align-items-center">
            <div class="col-lg-12" data-aos="fade-right" data-aos-delay="200">
                <div class="features-content">
                    <h1>{{ $service->long_title ?? '' }}</h1>
                    <p>{{ $service->short_description ?? '' }}</p>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div
                        class="service-card h-100 d-flex align-items-start p-3 rounded shadow-sm position-relative overflow-hidden">

                        <!-- Icon on left -->
                        <div class="icon-box me-3">
                            @if ($product->icon)
                                <i class="{{ $product->icon ?? 'bi bi-lightbulb-fill' }} fs-2"></i>
                            @endif
                        </div>

                        <div class="flex-grow-1">
                            <h5 class="service-title mb-1">
                                <a href="{{ route('service.show', $product->slug) }}"
                                    class="stretched-link text-dark">{{ $product->title }}</a>
                            </h5>
                            <p class="service-desc text-muted mb-0">{{ $product->sub_title ?? '' }}</p>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

    </div>

</section>
