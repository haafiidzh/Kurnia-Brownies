@extends('front.layouts.master')

@section('title')
    Detail
@endsection

@section('content')
<section id="content" class="s-content s-content--blog">

    <div class="absolute -z-40 top-0 w-full h-[100px] bg-primary shadow-lg"></div>

    <div class="row entry-wrap">
        <div class="column lg-12">

            <livewire:front.products.detail :slug="$slug"/>

        </div>
    </div> <!-- end entry-wrap -->

    <livewire:front.cta-product />
</section> <!-- end s-content -->
@endsection