<!DOCTYPE html>
<html lang="en" class="js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Kurnia Brownies</title>

    {{-- <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script> --}}
    
    @vite([
        'resources/css/app.css',
        'resources/css/vendor.css',
        'resources/css/styles.css',
        'resources/js/plugins.js',
        'resources/js/main.js',
    ])

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    
    <script src="https://kit.fontawesome.com/d89a21a1ce.js" crossorigin="anonymous"></script>
    @stack('styles')
    @livewireStyles
</head>

<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap {{ request()->routeIs('home') ? 'ss-home' : '' }}">

        <!-- # site header
        ================================================== -->
        <livewire:front.layouts.navbar/>
        <!-- end s-header -->

        <!-- # site-content
        ================================================== -->
        @yield('content')
        <!-- end s-content -->


        @if (!request()->routeIs('contact'))
        <!-- # site-footer
        ================================================== -->
        <livewire:front.layouts.footer/>
        <!-- end s-footer -->
        @endif

    </div>
    
    @stack('scripts')
    @livewireScripts
</body>
</html>