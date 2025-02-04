@extends('front.layouts.master')

@section('title')
    News
@endsection

@section('content')
    <section id="content" class="s-content">

        <div class="absolute -z-40 top-0 w-full h-[100px] bg-primary shadow-lg"></div>

        <livewire:front.news.all />

        <livewire:front.cta-product/>

    </section> <!-- end s-content -->
@endsection
