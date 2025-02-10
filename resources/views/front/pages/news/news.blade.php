@extends('front.layouts.master')

@section('title')
    News
@endsection

@push('meta')
    <x-meta :title="cache('seo_judul_berita')" :description="cache('seo_deskripsi_berita')" :image="cache('seo_gambar_berita')"/>
@endpush

@section('content')
    <div>
        <div class="w-full relative h-[300px] md:h-[400px] overflow-hidden">
            <img class="-z-10 absolute object-cover w-full h-full object-center"
            src="{{ url(cache('news.page-background-image') ?: 'assets/images/default/greetings.jpg') }}">
            <div class="relative w-full h-full flex flex-col justify-end backdrop-blur-sm p-10 lg:px-[120px] lg:py-20 gap-2 md:gap-4">
                <div class="absolute inset-0 bg-black/65"></div>
                <h1 class="z-10 text-secondary drop-shadow-md font-nunito w-auto font-bold text-2xl md:text-4xl">{{ cache('news.page-title') ?: 'Our News' }}</h1>
                <p class="z-10 text-secondary drop-shadow-md text-md md:text-xl w-full md:w-3/4">
                    {{ cache('news.page-description') ?: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' }}
                </p>
            </div>
        </div>

        <livewire:front.news.all />

        <livewire:front.cta-product />
    </div>
@endsection
