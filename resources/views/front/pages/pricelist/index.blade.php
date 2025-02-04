@extends('front.layouts.master')

@section('title')
    Pricelist
@endsection

@section('content')
    <div>
        <div class="w-full relative h-[300px] md:h-[400px] overflow-hidden">
            <img class="-z-10 absolute object-cover w-full h-full object-top"
            src="{{ asset('assets/images/default/greetings.jpg') }}">
            <div class="relative w-full h-full flex flex-col justify-end p-10 lg:px-[120px] lg:py-20 gap-2 md:gap-4">
                <div class="absolute inset-0 bg-black/65"></div>
                <h1 class="z-10 text-secondary drop-shadow-md font-nunito w-auto font-bold text-2xl md:text-4xl">Our Pricelist</h1>
                <p class="z-10 text-secondary drop-shadow-md text-md md:text-xl w-3/4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>

        <div class="px-10 md:px-[120px] py-10 w-full h-[600px] overflow-hidden">
            <iframe class="rounded-md border border-black/45 w-full h-full" src="https://drive.google.com/file/d/12XOq7pUYquYeOGtK4pV1C6nxJUEbhCxv/preview" frameborder="0"></iframe>
        </div>

        <livewire:front.cta-product />
    </div>
@endsection
