@extends('front.layouts.master')

@push('meta')
    <x-meta :title="cache('seo_judul_tentang')" :description="cache('seo_deskripsi_tentang')" :image="cache('seo_gambar_tentang')" :keywords="cache('seo_keyword_tentang')"/>
@endpush

@push('schema')
    <script type="application/ld+json">
        {
        "@context": "https://schema.org/", 
        "@type": "BreadcrumbList", 
        "itemListElement": [{
            "@type": "ListItem", 
            "position": 1, 
            "name": "Beranda",
            "item": "{{ route('home') }}"  
        },{
            "@type": "ListItem", 
            "position": 2, 
            "name": "Tentang Kami",
            "item": "{{ route('about') }}"
        }]
        }
    </script>
@endpush

@section('content')

    <section class="w-full relative h-[300px] md:h-[400px] overflow-hidden ">
        <img loading="lazy" class="-z-10 absolute object-cover w-full h-full object-center"
        src="{{ url(cache('about.page-background-image') ?: 'assets/images/default/greetings.jpg') }}?v={{ time() }}"
        alt="{{ cache('about.page-background-image-alt') ?: cache('about.page-title') }}">
        <div class="relative w-full h-full flex flex-col justify-end backdrop-blur-sm p-10 lg:px-[120px] lg:py-20 gap-2 md:gap-4">
            <div class="absolute inset-0 bg-black/65"></div>
            <h1 class="z-10 text-secondary drop-shadow-md font-nunito w-auto font-bold text-2xl md:text-4xl">{{ cache('about.page-title') ?: 'About Us' }}</h1>
            <p class="z-10 text-secondary drop-shadow-md text-base md:text-lg sm:text-xl w-full md:w-3/4">{{ cache('about.page-description') ?: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' }}</p>
        </div>
    </section>

    <livewire:front.about.about />
    
    <livewire:front.cta-product />
@endsection