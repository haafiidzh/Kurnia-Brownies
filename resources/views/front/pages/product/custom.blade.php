@extends('front.layouts.master')

@section('title')
    Product
@endsection

@section('content')
<section id="content" class="s-content">

    <div class="bg-gradient-to-t from-orange-900 from-30% to-white to-70% flex flex-col gap-10 shadow-lg py-20 ">
        <div class="flex justify-center">
            <img class="object-cover rounded-xl aspect-[16/9] shadow-md" src="{{ url($category->image) }}" alt="">
        </div>
    
        <div class="text-center ">
            <span class="text-gray-200">Category</span>
            <h1 class="mt-3 text-yellow-400 drop-shadow-md">{{ $category->name }}</h1>
        </div>
    </div>
    

        <!-- pageheader -->
    {{-- <div class="s-pageheader">
        <div class="row">
            <div class="column large-12">
                <h1 class="page-title">
                    <span class="page-title__small-type mb-6">Category</span>
                    {{ $category->name }}
                </h1>
            </div>
        </div>
    </div> <!-- end s-pageheader--> --}}

    <!--  masonry -->
    <div id="bricks" class="bricks">

        <livewire:front.products.custom-category :category="$category"/>

    </div> <!-- end bricks -->

</section> <!-- end s-content -->

@endsection