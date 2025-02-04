@extends('front.layouts.master')

@section('title')
    Product
@endsection

@section('content')
    <section id="content" class="s-content">

        <div class="absolute -z-40 top-0 w-full h-[100px] bg-primary shadow-lg"></div>

        <div class="lg:h-[300px] shadow-xl relative"
            style="background: #782d07;
background: linear-gradient(0deg, #782d07 40%, #98735424 64%, rgba(255,255,255,0) 90%);">

            <div class="w-full z-10 bottom-0 flex items-end sm:px-20 px-10 md:pt-32 md:pb-20 pt-32 pb-10 absolute "
                style="background: #782d07;
background: linear-gradient(5deg, #782d07 25%, rgba(255,255,255,0) 65%);">
                <h1 class="my-0 text-[40px] sm:text-[50px] md:text-[60px] text-yellow-400 drop-shadow-xl">All Product</h1>
            </div>

            <div class="flex justify-end">
                <div class="lg:w-1/2 flex justify-center lg:px-52 md:px-36 px-20 py-10">

                    <div class="product-categories-swiper w-full">
                        <div class="swiper-wrapper ">
                            @foreach ($datas as $data)
                                <div class="swiper-slide flex justify-center">
                                    <img class="mb-0 rounded-xl object-cover aspect-[16/9]" src="{{ url($data->image) }}" />
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

        </div>

        {{-- <div class="categories-swiper">
            <div class="swiper-wrapper">
                @foreach ($datas as $data)
                    <div class="swiper-slide ">
                        <img class="" src="{{ url($data->image) }}" alt="">
                    </div>
                @endforeach

                <div class="swiper-button-prev bg-black scale-50 text-white w-21 h-21 p-6 rounded full flex justify-center items-center"></div>
                    <div class="swiper-button-next"></div>

            </div>
        </div> --}}

        {{-- <div class="bg-gradient-to-t from-orange-900 from-50% to-white to-100% flex flex-col gap-10 shadow-lg py-20 ">
            <div class=" w-full flex justify-center">
                <div x-data="{
                    currentIndex: 0,
                    slides: [
                        @foreach ($datas as $item)
                        '{{ url($item->image) }}', @endforeach
                    ]
                }" class="relative w-full expand-container">

                    <!-- Slides -->
                    <div class="flex transition-transform duration-500 ease-out w-full"
                        :style="'transform: translateX(-' + currentIndex * 100 + '%)'">
                        <template x-for="(slide, index) in slides" :key="index">
                            <div class="w-full flex justify-center flex-shrink-0 ">
                                <img :src="slide" alt="Slide"
                                    class="rounded-xl shadow-xl object-cover aspect-[16/9] ">
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
                                :class="{ 'bg-yellow-400': currentIndex === index, 'bg-gray-300': currentIndex !== index }"
                                class="w-3 h-3 rounded-full"></button>
                        </template>
                    </div>
                </div>
            </div>
            <div class="text-center py-10 ">
                <h1 class="my-0 text-yellow-400 drop-shadow-md">All Product</h1>
            </div>
        </div> --}}

        <!--  masonry -->
        <div id="bricks" class="bricks">

            <livewire:front.products.all />

        </div> <!-- end bricks -->

        <livewire:front.cta-product/>
    </section> <!-- end s-content -->
@endsection
