@extends('front.layouts.master')

@push('meta')
    <x-meta :title="cache('seo_judul_produk')" :description="cache('seo_deskripsi_produk')" :image="cache('seo_gambar_produk')" :keywords="cache('seo_keyword_produk')"/>
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
            "name": "Produk",
            "item": "{{ route('product') }}"
        }]
        }
    </script>
@endpush

@section('content')

    <section class="w-full relative h-[300px] md:h-[400px] overflow-hidden">
        <img loading="lazy" class="-z-10 absolute object-cover w-full h-full object-center"
        src="{{ url( cache('product.page-background-image') ?: 'assets/images/default/greetings.jpg') }}"
        alt="{{ cache('product.page-background-image-alt') ?: cache('product.page-title') }}">
        <div class="relative w-full h-full flex flex-col justify-end p-10 backdrop-blur-sm lg:px-[120px] lg:py-20 gap-2 md:gap-4">
            <div class="absolute inset-0 bg-black/65"></div>
            <h1 class="z-10 text-secondary drop-shadow-md font-nunito w-auto font-bold text-2xl md:text-4xl">{{ cache('product.page-title') ?: 'Our Product' }}</h1>
            <p class="z-10 text-secondary drop-shadow-md text-base md:text-lg sm:text-xl w-full md:w-3/4">
                {{ cache('product.page-description') ?: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' }}
            </p>
        </div>
    </section>

    <livewire:front.products.all />            

    <livewire:front.cta-product />
@endsection
