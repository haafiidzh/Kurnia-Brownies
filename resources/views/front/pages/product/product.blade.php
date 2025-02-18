@extends('front.layouts.master')

@section('title')
    Product
@endsection

@push('meta')
    <x-meta :title="cache('seo_judul_produk')" :description="cache('seo_deskripsi_produk')" :image="cache('seo_gambar_produk')"/>
@endpush

@section('content')
    <div>
        <div class="w-full relative h-[300px] md:h-[400px] overflow-hidden">
            <img class="-z-10 absolute object-cover w-full h-full object-center"
            src="{{ url( cache('product.page-background-image') ?: 'assets/images/default/greetings.jpg') }}">
            <div class="relative w-full h-full flex flex-col justify-end p-10 backdrop-blur-sm lg:px-[120px] lg:py-20 gap-2 md:gap-4">
                <div class="absolute inset-0 bg-black/65"></div>
                <h1 class="z-10 text-secondary drop-shadow-md font-nunito w-auto font-bold text-2xl md:text-4xl">{{ cache('product.page-title') ?: 'Our Product' }}</h1>
                <p class="z-10 text-secondary drop-shadow-md text-base md:text-lg sm:text-xl w-full md:w-3/4">
                    {{ cache('product.page-description') ?: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' }}
                </p>
            </div>
        </div>

        <livewire:front.products.all />            


        <livewire:front.cta-product />
    </div>
@endsection
