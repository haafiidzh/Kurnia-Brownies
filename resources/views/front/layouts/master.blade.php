<!DOCTYPE html>
<html lang="en" class="js" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('meta')

    @php
        $favicon = \App\Models\AppSetting::where('key', 'favicon')->value('value') ?: 'assets/images/default/brand_logo_square.png';
    @endphp
    <link rel="canonical" href="{{ config('app_url') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/ico" sizes="32x32" href="{{ $favicon }}">
    <link rel="icon" type="image/ico" sizes="16x16" href="{{ $favicon }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    {{-- <link rel="canonical" href="{{ config('app_url') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/ico" sizes="32x32" href="{{ (cache('favicon') ?: url('assets/images/default/brand_logo_square.png')) }}">
    <link rel="icon" type="image/ico" sizes="16x16" href="{{ (cache('favicon') ?: url('assets/images/default/brand_logo_square.png')) }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}"> --}}

    @php
        $coordinateLat = getCoordinate(cache('coordinate'),0);
        $coordinateLong = getCoordinate(cache('coordinate'),1);
    @endphp

    @php
        $production = app()->environment('production');
        $path = $production ? '../public_html/build/manifest.json' : public_path('build/manifest.json');
    @endphp
    
    @if ($production && file_exists($path))
      @php
          $manifest = json_decode(file_get_contents($path), true);
      @endphp
      <link rel="stylesheet" href="{{ config('app.url') }}/build/{{ $manifest['resources/css/app.css']['file'] }}">
      <link rel="stylesheet" href="{{ config('app.url') }}/build/{{ $manifest['resources/css/vendor.css']['file'] }}">
      <script type="module" src="{{ config('app.url') }}/build/{{ $manifest['resources/js/plugins.js']['file'] }}"></script>
      <script type="module" src="{{ config('app.url') }}/build/{{ $manifest['resources/js/app.js']['file'] }}"></script>
    @else
    @vite([
      'resources/css/app.css',
      'resources/css/vendor.css',
      'resources/js/plugins.js',
      'resources/js/app.js',
    ])
    @endif
    
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "LocalBusiness",
          "name": "{{ cache('app_name') }}",
          "image": "{{ url(cache('homepage.location-image')) }}",
          "logo": "{{ url(cache('logo')) }}",
          "@id": "{{ env('APP_URL') }}",
          "url": "{{ env('APP_URL') }}",
          "telephone": "{{ cache('contact-whatsapp') }}",
          "contactPoint": [
            {
                "@type": "ContactPoint",
                "telephone": "{{ cache('contact-whatsapp') }}",
                "contactType": "Customer Service",
                "areaServed": "ID",
                "availableLanguage": "Indonesian"
            },
            {
                "@type": "ContactPoint",
                "email": "{{ cache('contact-email') }}",
                "contactType": "Customer Service",
                "areaServed": "ID",
                "availableLanguage": "Indonesian"
            }
        ],
          "priceRange": "{{ 'IDR ' . cache('low_price_range') . ' - ' . cache('high_price_range') }}",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "{{ cache('street_name') }}",
            "addressLocality": "{{ cache('local_address') }}",
            "addressRegion": "{{ cache('region_address') }}",
            "postalCode": "{{ cache('postal_code') }}",
            "addressCountry": "ID"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": {{ $coordinateLat }},
            "longitude": {{ $coordinateLong }}
          },
          "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
              "Monday",
              "Tuesday",
              "Wednesday",
              "Thursday",
              "Friday",
              "Saturday",
              "Sunday"
            ],
            "opens": "{{ cache('contact.open-hours') }}",
            "closes": "{{ cache('contact.close-hours') }}"
          },
          "sameAs": [
              @php
                  $links = [
                      cache('social-instagram_link'),
                      cache('social-facebook_link'),
                      cache('social-tiktok_link'),
                      cache('social-twitter_link'),
                      cache('social-youtube_link'),
                  ];
                  $links = array_filter($links); // Hapus link yang kosong/null
                  echo '"' . implode('","', $links) . '"';
              @endphp
            ]
          }
    </script>

    @stack('schema')


    {{-- @vite([
        'resources/css/app.css',
        'resources/css/vendor.css',
        'resources/js/plugins.js',
        'resources/js/app.js',
    ]) --}}
    
    <!-- Defer Font Awesome -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"></noscript>

    <!-- Defer Boxicons -->
    <link rel="preload" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet"></noscript>

    {{-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/d89a21a1ce.js" crossorigin="anonymous"></script> --}}
    @stack('styles')
    @livewireStyles
</head>

<body>
    <livewire:front.layouts.navbar/>
    
    <main class="relative">
        <div class="absolute inset-0 bg-white -z-50"></div>
        @yield('content')
    </main>
    @if (request()->routeIs('contact'))
    <livewire:front.layouts.footer-contact/>
    @else
    <livewire:front.layouts.footer/>
    @endif
    <a alt="WhatsApp Icon" aria-label="Hubungi Kami di WhatsApp" href="https://wa.me/{{ cache('contact-whatsapp') ?: '' }}?text={{ urlencode(cache('contact-whatsapp-text') ?: 'Halo, Saya mau pesan brownies.') }}" target="_blank" class="fixed bottom-8 right-5 md:bottom-10 md:right-10 z-30 w-20 h-20 border-2 border-transparent bg-[#25D366] text-white hover:border-[#25D366] hover:bg-white hover:text-[#25D366] active:bg-gray-200 transition-colors rounded-full flex justify-center items-center drop-shadow-md text-4xl">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
    @stack('scripts')
    @livewireScripts
</body>
</html>