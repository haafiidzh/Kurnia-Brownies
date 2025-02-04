<header x-cloak x-data="{ open: false, scrolled: false,}" 
@if (request()->routeIs(['home','product','news','pricelist', 'about','contact']))
@scroll.window="scrolled = window.scrollY > 50"

:class="{
    'h-screen bg-primary text-secondary': open,
    'bg-primary text-secondary shadow-lg': scrolled && !open,
    'bg-transparent text-secondary': !scrolled && !open 
}"
@endif
@click="open ? document.body.classList.add('overflow-hidden') : document.body.classList.remove('overflow-hidden')"
    :class="open ? 'h-screen' : ''"
    class="{{ request()->routeIs(['home','product','news', 'about','pricelist','contact']) ? 'fixed' : 'sticky bg-primary text-secondary' }} z-40 top-0 w-full transition-colors duration-300">
    <div class="flex items-center justify-between px-10 lg:px-[120px] py-5">
        <div class="flex items-center">
            <a href="{{ route('home') }}" rel="home">
                <img class="h-[50px] m-0" src="{{ url($logo->value ?: "assets/images/default/brand_logo_long.png") }}"alt="">
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
            <ul class="hidden md:flex space-x-8 tracking-widest font-semibold drop-shadow-md">
                @foreach ($menu as $item)
                        <li class="{{ $item['active'] ? 'border-b border-secondary' : '' }}  drop-shadow-md tracking-widest font-semibold">
                            <a href="{{ $item['route'] }}" title="">{{ $item['name'] }}</a>
                        </li>
                @endforeach
            </ul>
        </nav>
    </div>

    <ul x-cloak :class="open ? 'block' : 'hidden'" class="md:hidden flex flex-col space-y-4 px-10 tracking-widest drop-shadow-md font-semibold">
        @foreach ($menu as $item)
                <li class="pb-2">
                <a href="{{ $item['route'] }}" 
                :class="{
                    'border-b border-secondary': {{ $item['active'] ? 'true' : 'false' }},
                    'drop-shadow-md tracking-widest font-semibold': true
                }"
                class="hover:text-gray-100 text-4xl">{{ $item['name'] }}</a></li>
        @endforeach
    </ul>
</header>