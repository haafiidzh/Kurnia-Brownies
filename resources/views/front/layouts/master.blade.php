<!DOCTYPE html>
<html lang="en" class="js" >
<head>

    @php
        $icon = App\Models\AppSetting::where('key','small_logo')->get()->first();
        $app_name = App\Models\AppSetting::where('key','app_name')->get()->first();
    @endphp
    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - {{ $app_name->value ?: 'Wonderful Website' }}</title>

    {{-- <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script> --}}

    {{-- {!!htmlScriptTagJsApi()!!} --}}
    
    @vite([
        'resources/css/app.css',
        'resources/css/vendor.css',
        // 'resources/css/styles.css',
        'resources/js/plugins.js',
        // 'resources/js/main.js',
        'resources/js/app.js',
    ])

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/ico" sizes="32x32" href="{{ url($icon->value ?: "assets/images/default/brand_logo_square.png") }}">
    <link rel="icon" type="image/ico" sizes="16x16" href="{{ url($icon->value ?: "assets/images/default/brand_logo_square.png") }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/d89a21a1ce.js" crossorigin="anonymous"></script>
    @stack('styles')
    @livewireStyles
</head>

<body id="top">

    <!-- preloader
    ================================================== -->
    {{-- <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> --}}


    <!-- page wrap
    ================================================== -->
    {{-- <div id="page" class="s-pagewrap {{ request()->routeIs('home') ? 'ss-home' : '' }}"> --}}
    <div id="page" class="">

        <!-- # site header
        ================================================== -->
        <livewire:front.layouts.navbar/>
        <!-- end s-header -->

        <!-- # site-content
        ================================================== -->
        @yield('content')
        <!-- end s-content -->


        @if (request()->routeIs('contact'))
        <!-- # site-footer
        ================================================== -->
        <livewire:front.layouts.footer-contact/>
        <!-- end s-footer -->
        @else
        <livewire:front.layouts.footer/>
        @endif

    </div>
    
    @stack('scripts')
    @livewireScripts
</body>
</html>