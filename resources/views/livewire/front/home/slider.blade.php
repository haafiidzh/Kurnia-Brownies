 <!-- hero -->
 <div class="hero">

    <div class="hero__slider swiper-container">

        <div class="swiper-wrapper">
            @foreach ($datas as $data)
            <article class="hero__slide swiper-slide">
                <div class="hero__entry-image" style="background-image: url({{ Str::startsWith($data->image, 'https://') ? $data->image : Storage::url($data->image) }});"></div>

                <div class="hero__entry-text">
                    <div class="hero__entry-text-inner">
                        {{-- <div class="hero__entry-meta">
                            <span class="cat-links">
                                <a href="category.html">Inspiration</a>
                            </span>
                        </div> --}}
                        <h2 class="hero__entry-title">
                            {{-- <a href="single-standard.html"> --}}
                                {{ $data->title }}
                            {{-- </a> --}}
                        </h2>
                        <p class="hero__entry-desc">
                        {{ $data->description }}
                        </p>
                        {{-- <a class="hero__more-link" href="single-standard.html">Read More</a> --}}
                    </div>
                </div>
            </article>
            @endforeach

        </div> <!-- swiper-wrapper -->

        <div class="swiper-pagination"></div>

    </div> <!-- end hero slider -->

    <a href="#bricks" class="hero__scroll-down smoothscroll">
        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.25 6.75L4.75 12L10.25 17.25"></path>
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 12H5"></path>
        </svg>
        <span>Scroll</span>
    </a>

</div> <!-- end hero -->