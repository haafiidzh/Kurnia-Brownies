@extends('front.layouts.master')

@section('title')
    Product
@endsection

@section('content')
    <section id="content" class="s-content">

        <div class="absolute -z-40 top-0 w-full h-[100px] bg-primary shadow-lg"></div>

        <div class="absolute -z-50 top-[100px] w-full">
            <img class="object-cover my-0 w-full aspect-[16/9] h-[400px] sm:h-[450px]" src="{{ url($category->image) }}" alt="">
        </div>
        
        <div class="py-20">
            <div class="flex flex-col items-center">
                <span class="text-black bg-gray-200 px-5">Category</span>
                <h1 class="mt-3 bg-secondary drop-shadow-md p-10">{{ $category->name }}</h1>
            </div>
        </div>

        <!--  masonry -->
        <div id="bricks" class="bricks">

            <livewire:front.products.custom-category :category="$category" />

        </div> <!-- end bricks -->

        <livewire:front.cta-product/>

    </section> <!-- end s-content -->
@endsection
