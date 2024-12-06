@extends('front.layouts.master')

@section('title')
    Product
@endsection

@section('content')
<section id="content" class="s-content">


    <!-- pageheader -->
    <div class="s-pageheader">
        <div class="row">
            <div class="column large-12">
                <h1 class="page-title">
                    <span class="page-title__small-type">Category</span>
                    {{ $category->name }}
                </h1>
            </div>
        </div>
    </div> <!-- end s-pageheader-->


    <!--  masonry -->
    <div id="bricks" class="bricks">

        <livewire:front.products.custom-category :category="$category"/>

    </div> <!-- end bricks -->

</section> <!-- end s-content -->

@endsection