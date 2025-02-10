@extends('front.layouts.master')

@section('title')
    Pricelist
@endsection

@push('meta')
    <x-meta :title="cache('seo_judul_pricelist')" :description="cache('seo_deskripsi_pricelist')" :image="cache('seo_gambar_pricelist')"/>
@endpush

@section('content')
    <div>
        <div class="w-full relative h-[300px] md:h-[400px] overflow-hidden">
            <img class="-z-10 absolute object-cover w-full h-full object-top"
            src="{{ url(cache('pricelist.page-background-image') ?: 'assets/images/default/greetings.jpg') }}">
            <div class="relative w-full h-full flex flex-col justify-end p-10 lg:px-[120px] lg:py-20 gap-2 md:gap-4">
                <div class="absolute inset-0 bg-black/65"></div>
                <h1 class="z-10 text-secondary drop-shadow-md font-nunito w-auto font-bold text-2xl md:text-4xl">{{ cache('pricelist.page-title') ?: 'Our Pricelist' }}</h1>
                <p class="z-10 text-secondary drop-shadow-md text-md md:text-xl w-full md:w-3/4">
                    {{ cache('pricelist.page-description') ?: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' }}
                </p>
            </div>
        </div>

        <div class="relative">
            <div class="absolute -z-10 w-full h-full justify-end flex">
                <img class="opacity-30 transform scale-x-[-1] h-full object-cover" src="{{ asset('assets/images/default/icon/water.png') }}" alt="">
            </div>
            <div class="px-10 md:px-[120px] py-10 w-full h-[600px] overflow-hidden">
                <iframe class="rounded-md border border-black/45 w-full h-full" src="{{ cache('pricelist.link') ?: 'https://drive.google.com/file/d/12XOq7pUYquYeOGtK4pV1C6nxJUEbhCxv/preview' }}" frameborder="0"></iframe>
            </div>
        </div>

        <livewire:front.cta-product />
    </div>
@endsection
