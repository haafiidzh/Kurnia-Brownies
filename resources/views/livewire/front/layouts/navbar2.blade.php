<header id="masthead" class="s-header">

    <div class="s-header__branding">
        <p class="site-title">
            <a href="{{ route('home') }}" rel="home">
                <img src="{{ asset('assets/images/default/brand_logo_long.png') }}" style="height: 50px" alt="">
            </a>
        </p>
    </div>

    <div class="row s-header__navigation">

        <nav class="s-header__nav-wrap">

            <h3 class="s-header__nav-heading">Navigate to</h3>

            <ul class="s-header__nav home-color">
            {{-- <ul class="s-header__nav {{ request()->routeIs(['home','news','contact']) ? 'home-color' : 'all-color' }}"> --}}
                @foreach ($menu as $item)
                    @if ($item['has-child'] == true)
                    <li class="has-children {{ $item['active'] ? 'current-menu-item' : '' }} drop-shadow-md tracking-widest">
                        <a href="#" title="">{{ $item['name'] }}</a>
                        <ul class="sub-menu">
                            <li><a href="{{ $item['route'] }}">All</a></li>
                            @foreach ($item['childs'] as $child)
                                <li><a href="{{ $child['route'] }}">{{ $child['name'] }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @else
                    <li class="{{ $item['active'] ? 'current-menu-item' : '' }} drop-shadow-md tracking-widest">
                        <a href="{{ $item['route'] }}" title="">{{ $item['name'] }}</a>
                    </li>
                    @endif
                @endforeach
            </ul> <!-- end s-header__nav -->

        </nav> <!-- end s-header__nav-wrap -->

    </div> <!-- end s-header__navigation -->

    {{-- <div class="s-header__search">

        <div class="s-header__search-inner">
            <div class="row">

                <form role="search" method="get" class="s-header__search-form" action="#">
                    <label>
                        <span class="u-screen-reader-text">Search for:</span>
                        <input type="search" class="s-header__search-field" placeholder="Search for..." value=""
                            name="s" title="Search for:" autocomplete="off">
                    </label>
                    <input type="submit" class="s-header__search-submit" value="Search">
                </form>

                <a href="#0" title="Close Search" class="s-header__search-close">Close</a>

            </div> <!-- end row -->
        </div> <!-- s-header__search-inner -->

    </div> <!-- end s-header__search --> --}}

    <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
    {{-- <a class="s-header__search-trigger" href="#">
        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M19.25 19.25L15.5 15.5M4.75 11C4.75 7.54822 7.54822 4.75 11 4.75C14.4518 4.75 17.25 7.54822 17.25 11C17.25 14.4518 14.4518 17.25 11 17.25C7.54822 17.25 4.75 14.4518 4.75 11Z">
            </path>
        </svg>
    </a> --}}

</header>
