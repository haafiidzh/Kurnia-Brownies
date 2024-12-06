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
                    {{-- <span class="page-title__small-type"></span> --}}
                    Our Product
                </h1>
            </div>
        </div>
    </div> <!-- end s-pageheader-->


    <!--  masonry -->
    <div id="bricks" class="bricks">

        <livewire:front.products.all/>

    </div> <!-- end bricks -->

</section> <!-- end s-content -->

@endsection