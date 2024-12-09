@extends('front.layouts.master')

@section('title')
    Product
@endsection

@section('content')
    <section id="content" class="s-content">

        @php
            $datas = App\Models\Categories::where('group', 'product')->get();
        @endphp
        <div class="bg-gradient-to-t from-orange-900 from-30% to-white to-70% flex flex-col gap-10 shadow-lg py-20 ">
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
        </div>
        

        <!-- pageheader -->
        {{-- <div class="s-pageheader">
        <div class="row">
            <div class="column large-12">
                <h1 class="page-title">
                    Our Product
                </h1>
            </div>
        </div>
    </div> --}}
        <!-- end s-pageheader-->

        


        <!--  masonry -->
        <div id="bricks" class="bricks">

            <livewire:front.products.all />

        </div> <!-- end bricks -->

    </section> <!-- end s-content -->
@endsection
