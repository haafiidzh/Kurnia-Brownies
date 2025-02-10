<header x-cloak x-data="{ open: false, scrolled: false, }"
    @if (request()->routeIs(['home', 'product', 'news', 'pricelist', 'about', 'contact'])) @scroll.window="scrolled = window.scrollY > 50"

:class="{
    'h-screen bg-primary text-secondary': open,
    'bg-primary text-secondary shadow-lg': scrolled && !open,
    'bg-transparent text-secondary': !scrolled && !open 
}" 
@endif
    @click="open ? document.body.classList.add('overflow-hidden') : document.body.classList.remove('overflow-hidden')"
    :class="open ? 'h-screen' : ''"
    class="{{ request()->routeIs(['home', 'product', 'news', 'about', 'pricelist', 'contact']) ? 'fixed' : 'sticky bg-primary text-secondary' }} z-40 top-0 w-full transition-colors duration-300">
    <div class="flex items-center justify-between px-10 lg:px-[120px] py-5">
        <div class="flex items-center">
            <a href="{{ route('home') }}" rel="home">
                <img class="h-[50px] m-0"
                    src="{{ url(cache('logo') ?: 'assets/images/default/brand_logo_long.png') }}"alt="">
            </a>
        </div>

        <nav>
            <button
                class="md:hidden relative flex justify-center items-center text-gray-300 hover:text-white focus:outline-none transition-colors duration-300"
                @click="open = !open">
                <!-- Hamburger Icon -->
                <svg x-cloak x-show="!open" x-transition:enter="opacity-0" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="opacity-100"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="#FACC15" class="h-8 w-8 transition-opacity duration-200 absolute ease-in-out">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 7.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                </svg>

                <!-- Close Icon -->
                <svg x-cloak x-show="open" x-transition:enter="opacity-0" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="opacity-100"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="#FACC15" class="h-8 w-8 transition-opacity duration-200 absolute ease-in-out">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <ul class="hidden md:flex space-x-8 font-semibold drop-shadow-md">
                @foreach ($menu as $item)
                    <li
                        class="{{ $item['active'] ? 'border-b border-secondary' : '' }}  drop-shadow-md tracking-widest font-semibold font-nunito">
                        <a href="{{ $item['route'] }}" title="">{{ $item['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>

    <div x-cloak :class="open ? 'block' : 'hidden'" class=" h-full overflow-y-auto">
        <ul class="flex flex-col space-y-2 font-semibold px-10">
            @foreach ($menu as $item)
                <li class="font-nunito">
                    <a href="{{ $item['route'] }}"
                        :class="{
                            'border-b border-secondary': {{ $item['active'] ? 'true' : 'false' }},
                            'drop-shadow-md font-semibold': true
                        }"
                        class="hover:text-gray-100 text-2xl">{{ $item['name'] }}</a>
                </li>
            @endforeach
        </ul>

        <div class="bg-accent rounded-xl mt-20 p-6 mx-7 relative z-0 overflow-hidden">

            <div class="absolute inset-0 top-0 left-3 -z-20 ">
                <svg class="w-full h-full object-contain rotate-45 scale-[1.7] opacity-20"
                    xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 800 800" opacity="1" width="800"
                    height="800">
                    <g stroke-width="10" stroke="#000000ff" fill="none">
                        <circle r="12.5" cx="0" cy="0" fill="#000000ff" stroke="none"></circle>
                        <circle r="12.5" cx="88.88888888888889" cy="0" fill="#000000ff" stroke="none"></circle>
                        <circle r="12.5" cx="177.77777777777777" cy="0" fill="#000000ff" stroke="none">
                        </circle>
                        <circle r="12.5" cx="266.66666666666663" cy="0" fill="#000000ff" stroke="none">
                        </circle>
                        <circle r="12.5" cx="355.55555555555554" cy="0" fill="#000000ff" stroke="none">
                        </circle>
                        <circle r="12.5" cx="444.44444444444446" cy="0" fill="#000000ff" stroke="none">
                        </circle>
                        <circle r="12.5" cx="533.3333333333334" cy="0" fill="#000000ff" stroke="none"></circle>
                        <circle r="12.5" cx="622.2222222222223" cy="0" fill="#000000ff" stroke="none"></circle>
                        <circle r="12.5" cx="711.1111111111112" cy="0" fill="#000000ff" stroke="none"></circle>
                        <circle r="12.5" cx="800.0000000000001" cy="0" fill="#000000ff" stroke="none">
                        </circle>
                        <circle r="12.5" cx="0" cy="72.72727272727273" fill="#000000ff" stroke="none">
                        </circle>
                        <circle r="12.5" cx="88.88888888888889" cy="72.72727272727273" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="177.77777777777777" cy="72.72727272727273" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="266.66666666666663" cy="72.72727272727273" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="355.55555555555554" cy="72.72727272727273" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="444.44444444444446" cy="72.72727272727273" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="533.3333333333334" cy="72.72727272727273" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="622.2222222222223" cy="72.72727272727273" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="711.1111111111112" cy="72.72727272727273" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="800.0000000000001" cy="72.72727272727273" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="0" cy="145.45454545454547" fill="#000000ff" stroke="none">
                        </circle>
                        <circle r="12.5" cx="88.88888888888889" cy="145.45454545454547" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="177.77777777777777" cy="145.45454545454547" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="266.66666666666663" cy="145.45454545454547" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="355.55555555555554" cy="145.45454545454547" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="444.44444444444446" cy="145.45454545454547" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="533.3333333333334" cy="145.45454545454547" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="622.2222222222223" cy="145.45454545454547" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="711.1111111111112" cy="145.45454545454547" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="800.0000000000001" cy="145.45454545454547" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="0" cy="218.1818181818182" fill="#000000ff" stroke="none">
                        </circle>
                        <circle r="12.5" cx="88.88888888888889" cy="218.1818181818182" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="177.77777777777777" cy="218.1818181818182" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="266.66666666666663" cy="218.1818181818182" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="355.55555555555554" cy="218.1818181818182" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="444.44444444444446" cy="218.1818181818182" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="533.3333333333334" cy="218.1818181818182" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="622.2222222222223" cy="218.1818181818182" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="711.1111111111112" cy="218.1818181818182" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="800.0000000000001" cy="218.1818181818182" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="0" cy="290.90909090909093" fill="#000000ff" stroke="none">
                        </circle>
                        <circle r="12.5" cx="88.88888888888889" cy="290.90909090909093" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="177.77777777777777" cy="290.90909090909093" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="266.66666666666663" cy="290.90909090909093" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="355.55555555555554" cy="290.90909090909093" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="444.44444444444446" cy="290.90909090909093" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="533.3333333333334" cy="290.90909090909093" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="622.2222222222223" cy="290.90909090909093" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="711.1111111111112" cy="290.90909090909093" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="800.0000000000001" cy="290.90909090909093" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="0" cy="363.6363636363637" fill="#000000ff" stroke="none">
                        </circle>
                        <circle r="12.5" cx="88.88888888888889" cy="363.6363636363637" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="177.77777777777777" cy="363.6363636363637" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="266.66666666666663" cy="363.6363636363637" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="355.55555555555554" cy="363.6363636363637" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="444.44444444444446" cy="363.6363636363637" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="533.3333333333334" cy="363.6363636363637" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="622.2222222222223" cy="363.6363636363637" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="711.1111111111112" cy="363.6363636363637" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="800.0000000000001" cy="363.6363636363637" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="0" cy="436.36363636363643" fill="#000000ff" stroke="none">
                        </circle>
                        <circle r="12.5" cx="88.88888888888889" cy="436.36363636363643" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="177.77777777777777" cy="436.36363636363643" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="266.66666666666663" cy="436.36363636363643" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="355.55555555555554" cy="436.36363636363643" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="444.44444444444446" cy="436.36363636363643" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="533.3333333333334" cy="436.36363636363643" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="622.2222222222223" cy="436.36363636363643" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="711.1111111111112" cy="436.36363636363643" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="800.0000000000001" cy="436.36363636363643" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="0" cy="509.0909090909092" fill="#000000ff" stroke="none">
                        </circle>
                        <circle r="12.5" cx="88.88888888888889" cy="509.0909090909092" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="177.77777777777777" cy="509.0909090909092" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="266.66666666666663" cy="509.0909090909092" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="355.55555555555554" cy="509.0909090909092" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="444.44444444444446" cy="509.0909090909092" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="533.3333333333334" cy="509.0909090909092" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="622.2222222222223" cy="509.0909090909092" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="711.1111111111112" cy="509.0909090909092" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="800.0000000000001" cy="509.0909090909092" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="0" cy="581.8181818181819" fill="#000000ff" stroke="none">
                        </circle>
                        <circle r="12.5" cx="88.88888888888889" cy="581.8181818181819" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="177.77777777777777" cy="581.8181818181819" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="266.66666666666663" cy="581.8181818181819" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="355.55555555555554" cy="581.8181818181819" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="444.44444444444446" cy="581.8181818181819" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="533.3333333333334" cy="581.8181818181819" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="622.2222222222223" cy="581.8181818181819" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="711.1111111111112" cy="581.8181818181819" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="800.0000000000001" cy="581.8181818181819" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="0" cy="654.5454545454546" fill="#000000ff" stroke="none">
                        </circle>
                        <circle r="12.5" cx="88.88888888888889" cy="654.5454545454546" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="177.77777777777777" cy="654.5454545454546" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="266.66666666666663" cy="654.5454545454546" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="355.55555555555554" cy="654.5454545454546" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="444.44444444444446" cy="654.5454545454546" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="533.3333333333334" cy="654.5454545454546" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="622.2222222222223" cy="654.5454545454546" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="711.1111111111112" cy="654.5454545454546" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="800.0000000000001" cy="654.5454545454546" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="0" cy="727.2727272727274" fill="#000000ff" stroke="none">
                        </circle>
                        <circle r="12.5" cx="88.88888888888889" cy="727.2727272727274" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="177.77777777777777" cy="727.2727272727274" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="266.66666666666663" cy="727.2727272727274" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="355.55555555555554" cy="727.2727272727274" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="444.44444444444446" cy="727.2727272727274" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="533.3333333333334" cy="727.2727272727274" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="622.2222222222223" cy="727.2727272727274" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="711.1111111111112" cy="727.2727272727274" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="800.0000000000001" cy="727.2727272727274" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="0" cy="800.0000000000001" fill="#000000ff" stroke="none">
                        </circle>
                        <circle r="12.5" cx="88.88888888888889" cy="800.0000000000001" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="177.77777777777777" cy="800.0000000000001" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="266.66666666666663" cy="800.0000000000001" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="355.55555555555554" cy="800.0000000000001" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="444.44444444444446" cy="800.0000000000001" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="533.3333333333334" cy="800.0000000000001" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="622.2222222222223" cy="800.0000000000001" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="711.1111111111112" cy="800.0000000000001" fill="#000000ff"
                            stroke="none"></circle>
                        <circle r="12.5" cx="800.0000000000001" cy="800.0000000000001" fill="#000000ff"
                            stroke="none"></circle>
                    </g>
                </svg>
            </div>
            <div class="absolute inset-0 -z-10 bg-gradient-to-br from-accent to-transparent from-45% to-100%"></div>

            <div class="flex flex-col z-10">
                <h2 class="font-nunito text-primary italic text-2xl drop-shadow-md font-bold">Lokasi Kami</h2>
                <div class="border-b-2 w-full border-primary mb-4 mt-2"></div>

                <h3 class="text-gray-800 font-poppins text-sm">{{ cache('contact-address') }}</h3>
                <a href="https://wa.me/{{ cache('contact-whatsapp') }}" target="_blank"
                class="mt-4 p-4 border rounded-lg border-primary bg-primary active:bg-transparent transition-colors duration-150 text-gray-100 shadow-md font-poppins font-semibold flex items-center justify-center">
                        <i class="fa-brands fa-whatsapp text-xl me-2"></i>
                        <span class="decoration-transparent">{{ cache('contact-whatsapp') }}</span>
                </a>
            </div>
        </div>
    </div>

</header>