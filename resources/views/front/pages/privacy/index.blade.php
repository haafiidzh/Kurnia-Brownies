@extends('front.layouts.master')

@section('title')
    Kebijakan Privasi
@endsection

@push('meta')
    <x-meta :title="cache('seo_judul_privacy_policy')" :description="cache('seo_deskripsi_privacy_policy')" :image="cache('seo_gambar_privacy_policy')"/>
@endpush

@section('content')
    <div>
        <div class="w-full relative h-[300px] md:h-[400px] overflow-hidden">
            <img class="-z-10 absolute object-cover w-full h-full object-top"
                src="{{ url(cache('privacy_policy.page-background-image') ?: 'assets/images/default/greetings.jpg') }}">
            <div class="relative w-full h-full flex flex-col justify-end p-10 lg:px-[120px] lg:py-20 gap-2 md:gap-4">
                <div class="absolute inset-0 bg-black/65"></div>
                <h1 class="z-10 text-secondary drop-shadow-md font-nunito w-auto font-bold text-2xl md:text-4xl">
                    {{ cache('privacy_policy.page-title') ?: 'Kebijakan Privasi' }}
                </h1>
                <p class="z-10 text-secondary drop-shadow-md text-md md:text-xl w-full md:w-3/4">
                    {{ cache('privacy_policy.page-description') ?: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' }}
                </p>
            </div>
        </div>
        
        <div class="relative">
            <div class="absolute -z-10 w-full h-full justify-end flex">
                <img class="opacity-30 transform scale-x-[-1] h-full object-cover" src="{{ asset('assets/images/default/icon/water.png') }}" alt="">
            </div>
            <div class="px-10 md:px-[120px] py-10 text-sm md:text-base text-gray-700 font-poppins">
                {!! cache('privacy_policy.content') ?: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur cumque quidem reprehenderit ducimus non recusandae, quibusdam sequi totam? Debitis cumque commodi adipisci fugit officiis voluptatem voluptatibus ducimus non veniam libero eum accusamus deleniti odit maxime quaerat corporis, repudiandae voluptas placeat?' !!}
            </div>
        </div>

        <livewire:front.cta-product />
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.0.0/dist/flowbite.min.js"></script>
@endpush
