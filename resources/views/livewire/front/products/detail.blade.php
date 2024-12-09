<div>
    <article class="entry format-standard">

        <header class="entry__header">

            <h1 class="entry__title">
                {{ $data->name }}
            </h1>

            <div class="entry__meta">
                <div class="entry__meta-cat">
                    <span class="cat-links">
                        Category :
                        <a href="{{ route('product.category', $data->category->slug) }}">{{ $data->category->name }}</a>
                    </span>
                </div>
            </div>
        </header>

        <div class="entry__media">
            <figure class="featured-image" style="display: flex; justify-content: center;">
                <img src="{{ url($data->image) }}"
                    style="width: 80%" alt="">
            </figure>
        </div>

        <div class="content-primary">

            <div class="entry__content">

                <p class="drop-cap">
                    {!! $data->description !!}
                </p>


                <h2>Product Gallery</h2>

                <div x-data="{
                    currentIndex: 0,
                    slides: [
                        @foreach ($gallery as $item)
                        '{{ url($item->value) }}',
                        @endforeach
                    ]
                }" class="relative w-full expand-container mx-auto overflow-hidden">

                    <!-- Slides -->
                    <div class="flex transition-transform duration-500 ease-out w-full"
                        :style="'transform: translateX(-' + currentIndex * 100 + '%)'">
                        <template x-for="(slide, index) in slides" :key="index">
                            <div class="w-full flex justify-center flex-shrink-0 ">
                                <img :src="slide" alt="Slide" class="w-full md:h-[48rem] object-contain ">
                            </div>
                        </template>
                    </div>

                    <!-- Navigation Buttons -->
                    <div @click="currentIndex = (currentIndex === 0) ? slides.length - 1 : currentIndex - 1"
                        class="w-16 h-16 flex justify-center items-center cursor-pointer absolute left-10 md:left-80 top-1/2 transform -translate-y-1/2 bg-slate-900 text-white border border-transparent hover:border-slate-900 active:bg-slate-700 hover:bg-slate-500 transition-all duration-300 rounded-full">
                        <i class="fa-solid fa-arrow-left"></i>
                    </div>
                    <div @click="currentIndex = (currentIndex === slides.length - 1) ? 0 : currentIndex + 1"
                        class="w-16 h-16 flex justify-center items-center cursor-pointer absolute right-10 md:right-80 top-1/2 transform -translate-y-1/2 bg-slate-900 text-white border border-transparent hover:border-slate-900 active:bg-slate-700 hover:bg-slate-500 transition-all duration-300 rounded-full">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>

                    <!-- Indicators -->
                    <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2">
                        <template x-for="(slide, index) in slides" :key="index">
                            <button @click="currentIndex = index"
                                :class="{ 'bg-gray-800': currentIndex === index, 'bg-gray-300': currentIndex !== index }"
                                class="w-3 h-3 rounded-full"></button>
                        </template>
                    </div>
                </div>

                <div class="tab-12 py-5">
                    <div class="column lg-6 tab-12 u-flexitem-center">
                        <a class="btn btn--primary u-fullwidth" href="{{ route('product') }}">Order Now</a>
                    </div>
                </div>


            </div> <!-- end entry-content -->

            <div class="post-nav flex">
                <div class="post-nav__prev">
                    <a href="{{ route('product.detail', $prevProduct->slug) }}" rel="prev">
                        <span>Prev</span>
                        {{ $prevProduct->name }}
                    </a>
                </div>
                <div class="post-nav__next">
                    <a href="{{ route('product.detail', $nextProduct->slug) }}" rel="next">
                        <span>Next</span>
                        {{ $nextProduct->name }}
                    </a>
                </div>
            </div>

        </div> <!-- end content-primary -->

    </article> <!-- end entry -->
</div>

@push('scripts')
@endpush
