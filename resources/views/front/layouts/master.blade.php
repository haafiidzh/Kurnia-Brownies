<!DOCTYPE html>
<html lang="en" class="js" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('meta')

    <title>@yield('title') - {{ cache('app_name') ?: 'Wonderful Website' }}</title>

    @vite([
        'resources/css/app.css',
        'resources/css/vendor.css',
        // 'resources/css/styles.css',
        'resources/js/plugins.js',
        // 'resources/js/main.js',
        'resources/js/app.js',
    ])
    
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/ico" sizes="32x32" href="{{ url(cache('favicon') ?: "assets/images/default/brand_logo_square.png") }}">
    <link rel="icon" type="image/ico" sizes="16x16" href="{{ url(cache('favicon') ?: "assets/images/default/brand_logo_square.png") }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/d89a21a1ce.js" crossorigin="anonymous"></script>
    @stack('styles')
    @livewireStyles
</head>

<body id="top">

    <div id="page" class="">

        <livewire:front.layouts.navbar/>

        @yield('content')

        @if (request()->routeIs('contact'))
        <livewire:front.layouts.footer-contact/>
        @else
        <livewire:front.layouts.footer/>
        @endif

        <a href="https://wa.me/{{ cache('contact_whatsapp') ?: '' }}" target="_blank" class="fixed bottom-8 right-5 md:bottom-10 md:right-10 z-30 w-14 h-14 border-2 border-transparent bg-[#25D366] text-white hover:border-[#25D366] hover:bg-white hover:text-[#25D366] active:bg-gray-200 transition-colors rounded-full flex justify-center items-center drop-shadow-md text-2xl">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
    </div>
    
    @stack('scripts')
    @livewireScripts
</body>
</html>