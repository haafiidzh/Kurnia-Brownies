@extends('front.layouts.master')

@section('title')
    Contact
@endsection

@push('meta')
    <x-meta :title="cache('seo_judul_hubungi')" :description="cache('seo_deskripsi_hubungi')" :image="cache('seo_gambar_hubungi')"/>
@endpush

@section('content')
<div>
    <div class="w-full relative h-[300px] md:h-[400px] overflow-hidden">
        <img class="-z-10 absolute object-cover w-full h-full object-center"
        src="{{ url(cache('contact.page-background-image') ?: 'assets/images/default/greetings.jpg') }}">
        <div class="relative w-full h-full flex flex-col justify-end backdrop-blur-sm p-10 lg:px-[120px] lg:py-20 gap-2 md:gap-4">
            <div class="absolute inset-0 bg-black/65"></div>
            <h1 class="z-10 text-secondary drop-shadow-md font-nunito w-auto font-bold text-2xl md:text-4xl">{{ cache('contact.page-title') ?: 'Contact Us' }}</h1>
            <p class="z-10 text-secondary drop-shadow-md text-base md:text-lg sm:text-xl w-full md:w-3/4">
                {{ cache('contact.page-description') ?: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' }}
            </p>
        </div>
    </div>

    <div class="relative">
        <div class="absolute -z-10 w-full h-full justify-end flex">
            <img class="opacity-30 transform scale-x-[-1] h-full object-cover" src="{{ asset('assets/images/default/icon/water.png') }}" alt="">
        </div>
        <livewire:front.contact.contact />
        <livewire:front.contact.feedback />
    </div>
    
</div>
@endsection