@extends('front.layouts.master')

@push('meta')
    <x-meta :title="cache('seo_judul_faq')" :description="cache('seo_deskripsi_faq')" :image="cache('seo_gambar_faq')" :keywords="cache('seo_keyword_faq')"/>
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
            "name": "FAQ",
            "item": "{{ route('faq') }}"
        }]
        }
    </script>
@endpush

@section('content')

    <section class="w-full relative h-[300px] md:h-[400px] overflow-hidden">
        <img loading="lazy" class="-z-10 absolute object-cover w-full h-full object-top"
            src="{{ url(cache('faq.page-background-image') ?: 'assets/images/default/greetings.jpg') }}?v={{ time() }}"
            alt="{{ cache('faq.page-background-image-alt') ?: cache('faq.page-title') }}">
        <div class="relative w-full h-full flex flex-col justify-end p-10 lg:px-[120px] lg:py-20 gap-2 md:gap-4">
            <div class="absolute inset-0 bg-black/65"></div>
            <h1 class="z-10 text-secondary drop-shadow-md font-nunito w-auto font-bold text-2xl md:text-4xl">{{ cache('faq.page-title') ?: 'Frequently Ask Question' }}</h1>
            <p class="z-10 text-secondary drop-shadow-md text-md md:text-xl w-full md:w-3/4">
                {{ cache('faq.page-description') ?: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' }}
            </p>
        </div>
    </section>
    
    <div class="relative">
        <div class="absolute -z-10 w-full h-full justify-end flex">
            <img class="opacity-30 transform scale-x-[-1] h-full object-cover" src="{{ asset('assets/images/default/icon/water.png') }}" alt="">
        </div>
        <livewire:front.extras.faq />
    </div>

    <livewire:front.cta-product />
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.0.0/dist/flowbite.min.js"></script>
@endpush
