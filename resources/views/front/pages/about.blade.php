@extends('front.layouts.master')

@section('title')
    About
@endsection

@section('content')
    <section id="content" class="s-content">

        <div class="absolute -z-40 top-0 w-full h-[100px] bg-primary shadow-lg"></div>

        <div class="absolute -z-50 top-[100px] w-full">
            <img class="my-0 w-full h-[320px] object-cover" src="https://picsum.photos/id/11/800" alt="">
        </div>
        
        <livewire:front.about.about />

    </section>
@endsection
