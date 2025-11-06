<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">
      <a href="{{ route('home') }}" class="logo d-flex align-items-center text-decoration-none">
          <img src="{{ asset('images/company/' . $company->company_logo) }}" 
              alt="{{ $company->company_name ?? '' }}" class="img-fluid me-2">
          <div class="d-flex flex-column">
              <h1 class="sitename mb-0">{{ $company->company_name ?? '' }}</h1>
              <p class="mb-0 small text-muted">{{ $company->business_name ?? '' }}</p>
          </div>
      </a>

        <nav id="navmenu" class="navmenu">
        <ul>
            <li>
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            </li>
            @php
              use App\Models\Product;

              $industrialProducts = Product::where('category', 'Industrial Cleaning')
                  ->whereNull('deleted_at')
                  ->orderBy('title')
                  ->get();

              $commercialProducts = Product::where('category', 'Commercial Cleaning')
                  ->whereNull('deleted_at')
                  ->orderBy('title')
                  ->get();
            @endphp
            <li class="dropdown">
                <a href="#"><span>Commercial Cleaning</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                    @foreach($commercialProducts as $commercialProduct)
                        <li><a href="{{ route('service.show', $commercialProduct->slug) }}">{{ $commercialProduct->title }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="dropdown">
                <a href="#"><span>Industrial Cleaning</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                    @foreach($industrialProducts as $industrialProduct)
                        <li><a href="{{ route('service.show', $industrialProduct->slug) }}">{{ $industrialProduct->title }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            </li>

            <li>
                <a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a>
            </li>

            <li>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
            </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>
<div style="padding: 56px"></div>