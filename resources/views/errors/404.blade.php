@extends('front.layouts.master')

@push('meta')
    <x-meta :title="cache('seo_judul_not_found')" :description="cache('seo_deskripsi_not_found')" :image="cache('seo_gambar_not_found')" :keywords="cache('seo_keyword_not_found')"/>
@endpush

@section('content')
<div>
    <div class="px-10 py-10 lg:px-[120px]">
        <div class="relative p-0 md:px-20 md:py-10 flex justify-center items-center flex-col">
            <img class="w-full md:w-1/2 h-full object-contain" src="{{ url(cache('error.404-image') ?: 'assets/images/default/404.png') }}" alt="">

            <h1 class="my-6 text-primary font-nunito font-bold italic text-3xl text-center md:text-6xl drop-shadow-md">{{ cache('error.404-title') ?: 'Oops! Error 404 Not Found Page' }}</h1>
            

            <p class="font-poppins text-gray-800 text-base lg:text-lg text-center mb-10">
                {{ cache('error.404-description') ?: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur dolor laudantium quo pariatur atque quam magnam. Debitis recusandae sit eius quidem ab, cupiditate obcaecati quia temporibus cumque magnam mollitia est molestias placeat tenetur asperiores alias aut excepturi non quos esse?' }}
            </p>
            

            <a href="{{ route('home') }}">
                <span
                    class="bg-accent border-2 border-primary text-primary hover:bg-primary hover:text-gray-100 font-bold py-3 px-8 rounded-full shadow-md transition-all duration-300 tracking-wider">
                    Kembali ke Beranda
                </span>
              </a>
        </div>
    </div>

</div>
@endsection