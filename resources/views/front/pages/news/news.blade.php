@extends('front.layouts.master')

@section('title')
    News
@endsection

@section('content')
    <div>
        <div class="w-full relative h-[300px] md:h-[400px] overflow-hidden">
            <img class="-z-10 absolute object-cover w-full h-full object-top"
            src="{{ asset('assets/images/default/greetings.jpg') }}">
            <div class="relative w-full h-full flex flex-col justify-end p-10 lg:px-[120px] lg:py-20 gap-2 md:gap-4">
                <div class="absolute inset-0 bg-black/65"></div>
                <h1 class="z-10 text-secondary drop-shadow-md font-nunito w-auto font-bold text-2xl md:text-4xl">Our News</h1>
                <p class="z-10 text-secondary drop-shadow-md text-md md:text-xl w-3/4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>

        <livewire:front.news.all />            


        <livewire:front.cta-product />
    </div>
@endsection
