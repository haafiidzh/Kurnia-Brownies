@extends('front.layouts.master')

@section('title')
    Home
@endsection

@push('meta')
    <x-meta :title="cache('seo_judul_home')" :description="cache('seo_deskripsi_home')" :image="cache('seo_gambar_home')"/>
@endpush

@push('styles')
  <style>
      .marquee {
          overflow: hidden;
          white-space: nowrap;
          position: relative;
          width: 100%;
      }

      .track {
          display: flex;
          gap: 1rem;
          animation: marquee-left 120s linear infinite;
      }

      .track2 {
          display: flex;
          gap: 1rem;
          animation: marquee-right 120s linear infinite;
      }

      .track:hover {
          animation-play-state: paused
      }

      .track2:hover {
          animation-play-state: paused
      }

      @keyframes marquee-left {
          from {
              transform: translateX(0);
          }

          to {
              transform: translateX(-100%);
          }
      }

      @keyframes marquee-right {
          from {
              transform: translateX(-100%);
          }

          to {
              transform: translateX(0);
          }
      }


       .faq-target {
    border-bottom: 1px solid #6B2E1F;
    }

    .faq-item:nth-of-type(5) .faq-target,
    .faq-item:nth-of-type(6) .faq-target {
        border-bottom: none !important;
    }

    @media (max-width: 768px){
        .faq-item:nth-of-type(5) .faq-target{
            border-bottom: 1px solid #6B2E1F !important;
        }
        .faq-item:nth-of-type(6) .faq-target {
            border-bottom: none !important;
        }
    }

  </style>
@endpush

@section('content')
    <livewire:front.home.slider />

    <livewire:front.home.about />

    {{-- @php
    dd(config('app.env'));
@endphp --}}


    <div class="px-10 lg:px-[120px] my-[8rem] md:my-20 flex justify-center bg-accent py-0 md:py-14 relative overflow-x-clip">

        <svg class="absolute w-full h-auto top-0 -translate-y-40 md:-translate-y-64 md:scale-100 scale-[2] -z-10 "
            xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
            xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 2400 800">
            <defs>
                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="sssurf-grad">
                    <stop stop-color="#ffe89cab" stop-opacity="1" offset="0%"></stop>
                    <stop stop-color="#ffffffff" stop-opacity="1" offset="100%"></stop>
                </linearGradient>
            </defs>
            <g fill="#FFE89C" transform="matrix(1,0,0,1,9.4296875,263.44950008392334)">
                <path
                    d="M-10,10C33.75,11.458333333333334,114.58333333333334,21.375,200,17C285.41666666666663,12.625,316.66666666666663,-13.708333333333332,400,-11C483.33333333333337,-8.291666666666668,516.6666666666666,29.375,600,30C683.3333333333334,30.625,716.6666666666666,-8,800,-8C883.3333333333334,-8,916.6666666666666,27.916666666666668,1000,30C1083.3333333333333,32.083333333333336,1116.6666666666667,-1.75,1200,2C1283.3333333333333,5.75,1316.6666666666667,51.333333333333336,1400,48C1483.3333333333333,44.666666666666664,1516.6666666666667,-11.291666666666668,1600,-14C1683.3333333333333,-16.708333333333332,1716.6666666666667,32.5,1800,35C1883.3333333333333,37.5,1916.6666666666667,-6.166666666666667,2000,-2C2083.3333333333335,2.166666666666667,2116.6666666666665,54.791666666666664,2200,55C2283.3333333333335,55.208333333333336,2306.25,-72.875,2400,-1C2493.75,70.875,3254.1666666666665,212.29166666666669,2650,400C2045.8333333333335,587.7083333333333,156.25,795.8333333333334,-500,900"
                    transform="matrix(1,0,0,1,0,28)" opacity="0.05"></path>
                <path
                    d="M-10,10C33.75,11.458333333333334,114.58333333333334,21.375,200,17C285.41666666666663,12.625,316.66666666666663,-13.708333333333332,400,-11C483.33333333333337,-8.291666666666668,516.6666666666666,29.375,600,30C683.3333333333334,30.625,716.6666666666666,-8,800,-8C883.3333333333334,-8,916.6666666666666,27.916666666666668,1000,30C1083.3333333333333,32.083333333333336,1116.6666666666667,-1.75,1200,2C1283.3333333333333,5.75,1316.6666666666667,51.333333333333336,1400,48C1483.3333333333333,44.666666666666664,1516.6666666666667,-11.291666666666668,1600,-14C1683.3333333333333,-16.708333333333332,1716.6666666666667,32.5,1800,35C1883.3333333333333,37.5,1916.6666666666667,-6.166666666666667,2000,-2C2083.3333333333335,2.166666666666667,2116.6666666666665,54.791666666666664,2200,55C2283.3333333333335,55.208333333333336,2306.25,-72.875,2400,-1C2493.75,70.875,3254.1666666666665,212.29166666666669,2650,400C2045.8333333333335,587.7083333333333,156.25,795.8333333333334,-500,900"
                    transform="matrix(1,0,0,1,0,56)" opacity="0.24"></path>
                <path
                    d="M-10,10C33.75,11.458333333333334,114.58333333333334,21.375,200,17C285.41666666666663,12.625,316.66666666666663,-13.708333333333332,400,-11C483.33333333333337,-8.291666666666668,516.6666666666666,29.375,600,30C683.3333333333334,30.625,716.6666666666666,-8,800,-8C883.3333333333334,-8,916.6666666666666,27.916666666666668,1000,30C1083.3333333333333,32.083333333333336,1116.6666666666667,-1.75,1200,2C1283.3333333333333,5.75,1316.6666666666667,51.333333333333336,1400,48C1483.3333333333333,44.666666666666664,1516.6666666666667,-11.291666666666668,1600,-14C1683.3333333333333,-16.708333333333332,1716.6666666666667,32.5,1800,35C1883.3333333333333,37.5,1916.6666666666667,-6.166666666666667,2000,-2C2083.3333333333335,2.166666666666667,2116.6666666666665,54.791666666666664,2200,55C2283.3333333333335,55.208333333333336,2306.25,-72.875,2400,-1C2493.75,70.875,3254.1666666666665,212.29166666666669,2650,400C2045.8333333333335,587.7083333333333,156.25,795.8333333333334,-500,900"
                    transform="matrix(1,0,0,1,0,84)" opacity="0.43"></path>
                <path
                    d="M-10,10C33.75,11.458333333333334,114.58333333333334,21.375,200,17C285.41666666666663,12.625,316.66666666666663,-13.708333333333332,400,-11C483.33333333333337,-8.291666666666668,516.6666666666666,29.375,600,30C683.3333333333334,30.625,716.6666666666666,-8,800,-8C883.3333333333334,-8,916.6666666666666,27.916666666666668,1000,30C1083.3333333333333,32.083333333333336,1116.6666666666667,-1.75,1200,2C1283.3333333333333,5.75,1316.6666666666667,51.333333333333336,1400,48C1483.3333333333333,44.666666666666664,1516.6666666666667,-11.291666666666668,1600,-14C1683.3333333333333,-16.708333333333332,1716.6666666666667,32.5,1800,35C1883.3333333333333,37.5,1916.6666666666667,-6.166666666666667,2000,-2C2083.3333333333335,2.166666666666667,2116.6666666666665,54.791666666666664,2200,55C2283.3333333333335,55.208333333333336,2306.25,-72.875,2400,-1C2493.75,70.875,3254.1666666666665,212.29166666666669,2650,400C2045.8333333333335,587.7083333333333,156.25,795.8333333333334,-500,900"
                    transform="matrix(1,0,0,1,0,112)" opacity="0.62"></path>
                <path
                    d="M-10,10C33.75,11.458333333333334,114.58333333333334,21.375,200,17C285.41666666666663,12.625,316.66666666666663,-13.708333333333332,400,-11C483.33333333333337,-8.291666666666668,516.6666666666666,29.375,600,30C683.3333333333334,30.625,716.6666666666666,-8,800,-8C883.3333333333334,-8,916.6666666666666,27.916666666666668,1000,30C1083.3333333333333,32.083333333333336,1116.6666666666667,-1.75,1200,2C1283.3333333333333,5.75,1316.6666666666667,51.333333333333336,1400,48C1483.3333333333333,44.666666666666664,1516.6666666666667,-11.291666666666668,1600,-14C1683.3333333333333,-16.708333333333332,1716.6666666666667,32.5,1800,35C1883.3333333333333,37.5,1916.6666666666667,-6.166666666666667,2000,-2C2083.3333333333335,2.166666666666667,2116.6666666666665,54.791666666666664,2200,55C2283.3333333333335,55.208333333333336,2306.25,-72.875,2400,-1C2493.75,70.875,3254.1666666666665,212.29166666666669,2650,400C2045.8333333333335,587.7083333333333,156.25,795.8333333333334,-500,900"
                    transform="matrix(1,0,0,1,0,140)" opacity="0.81"></path>
                <path
                    d="M-10,10C33.75,11.458333333333334,114.58333333333334,21.375,200,17C285.41666666666663,12.625,316.66666666666663,-13.708333333333332,400,-11C483.33333333333337,-8.291666666666668,516.6666666666666,29.375,600,30C683.3333333333334,30.625,716.6666666666666,-8,800,-8C883.3333333333334,-8,916.6666666666666,27.916666666666668,1000,30C1083.3333333333333,32.083333333333336,1116.6666666666667,-1.75,1200,2C1283.3333333333333,5.75,1316.6666666666667,51.333333333333336,1400,48C1483.3333333333333,44.666666666666664,1516.6666666666667,-11.291666666666668,1600,-14C1683.3333333333333,-16.708333333333332,1716.6666666666667,32.5,1800,35C1883.3333333333333,37.5,1916.6666666666667,-6.166666666666667,2000,-2C2083.3333333333335,2.166666666666667,2116.6666666666665,54.791666666666664,2200,55C2283.3333333333335,55.208333333333336,2306.25,-72.875,2400,-1C2493.75,70.875,3254.1666666666665,212.29166666666669,2650,400C2045.8333333333335,587.7083333333333,156.25,795.8333333333334,-500,900"
                    transform="matrix(1,0,0,1,0,168)" opacity="1.00"></path>
            </g>
        </svg>

        <svg class="rotate-180 absolute w-full h-auto bottom-0 translate-y-40 md:translate-y-64 md:scale-100 scale-[2] -z-10 "
            xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
            xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 2400 800">
            <defs>
                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="sssurf-grad">
                    <stop stop-color="#ffe89cab" stop-opacity="1" offset="0%"></stop>
                    <stop stop-color="#ffffffff" stop-opacity="1" offset="100%"></stop>
                </linearGradient>
            </defs>
            <g fill="#FFE89C" transform="matrix(1,0,0,1,9.4296875,263.44950008392334)">
                <path
                    d="M-10,10C33.75,11.458333333333334,114.58333333333334,21.375,200,17C285.41666666666663,12.625,316.66666666666663,-13.708333333333332,400,-11C483.33333333333337,-8.291666666666668,516.6666666666666,29.375,600,30C683.3333333333334,30.625,716.6666666666666,-8,800,-8C883.3333333333334,-8,916.6666666666666,27.916666666666668,1000,30C1083.3333333333333,32.083333333333336,1116.6666666666667,-1.75,1200,2C1283.3333333333333,5.75,1316.6666666666667,51.333333333333336,1400,48C1483.3333333333333,44.666666666666664,1516.6666666666667,-11.291666666666668,1600,-14C1683.3333333333333,-16.708333333333332,1716.6666666666667,32.5,1800,35C1883.3333333333333,37.5,1916.6666666666667,-6.166666666666667,2000,-2C2083.3333333333335,2.166666666666667,2116.6666666666665,54.791666666666664,2200,55C2283.3333333333335,55.208333333333336,2306.25,-72.875,2400,-1C2493.75,70.875,3254.1666666666665,212.29166666666669,2650,400C2045.8333333333335,587.7083333333333,156.25,795.8333333333334,-500,900"
                    transform="matrix(1,0,0,1,0,28)" opacity="0.05"></path>
                <path
                    d="M-10,10C33.75,11.458333333333334,114.58333333333334,21.375,200,17C285.41666666666663,12.625,316.66666666666663,-13.708333333333332,400,-11C483.33333333333337,-8.291666666666668,516.6666666666666,29.375,600,30C683.3333333333334,30.625,716.6666666666666,-8,800,-8C883.3333333333334,-8,916.6666666666666,27.916666666666668,1000,30C1083.3333333333333,32.083333333333336,1116.6666666666667,-1.75,1200,2C1283.3333333333333,5.75,1316.6666666666667,51.333333333333336,1400,48C1483.3333333333333,44.666666666666664,1516.6666666666667,-11.291666666666668,1600,-14C1683.3333333333333,-16.708333333333332,1716.6666666666667,32.5,1800,35C1883.3333333333333,37.5,1916.6666666666667,-6.166666666666667,2000,-2C2083.3333333333335,2.166666666666667,2116.6666666666665,54.791666666666664,2200,55C2283.3333333333335,55.208333333333336,2306.25,-72.875,2400,-1C2493.75,70.875,3254.1666666666665,212.29166666666669,2650,400C2045.8333333333335,587.7083333333333,156.25,795.8333333333334,-500,900"
                    transform="matrix(1,0,0,1,0,56)" opacity="0.24"></path>
                <path
                    d="M-10,10C33.75,11.458333333333334,114.58333333333334,21.375,200,17C285.41666666666663,12.625,316.66666666666663,-13.708333333333332,400,-11C483.33333333333337,-8.291666666666668,516.6666666666666,29.375,600,30C683.3333333333334,30.625,716.6666666666666,-8,800,-8C883.3333333333334,-8,916.6666666666666,27.916666666666668,1000,30C1083.3333333333333,32.083333333333336,1116.6666666666667,-1.75,1200,2C1283.3333333333333,5.75,1316.6666666666667,51.333333333333336,1400,48C1483.3333333333333,44.666666666666664,1516.6666666666667,-11.291666666666668,1600,-14C1683.3333333333333,-16.708333333333332,1716.6666666666667,32.5,1800,35C1883.3333333333333,37.5,1916.6666666666667,-6.166666666666667,2000,-2C2083.3333333333335,2.166666666666667,2116.6666666666665,54.791666666666664,2200,55C2283.3333333333335,55.208333333333336,2306.25,-72.875,2400,-1C2493.75,70.875,3254.1666666666665,212.29166666666669,2650,400C2045.8333333333335,587.7083333333333,156.25,795.8333333333334,-500,900"
                    transform="matrix(1,0,0,1,0,84)" opacity="0.43"></path>
                <path
                    d="M-10,10C33.75,11.458333333333334,114.58333333333334,21.375,200,17C285.41666666666663,12.625,316.66666666666663,-13.708333333333332,400,-11C483.33333333333337,-8.291666666666668,516.6666666666666,29.375,600,30C683.3333333333334,30.625,716.6666666666666,-8,800,-8C883.3333333333334,-8,916.6666666666666,27.916666666666668,1000,30C1083.3333333333333,32.083333333333336,1116.6666666666667,-1.75,1200,2C1283.3333333333333,5.75,1316.6666666666667,51.333333333333336,1400,48C1483.3333333333333,44.666666666666664,1516.6666666666667,-11.291666666666668,1600,-14C1683.3333333333333,-16.708333333333332,1716.6666666666667,32.5,1800,35C1883.3333333333333,37.5,1916.6666666666667,-6.166666666666667,2000,-2C2083.3333333333335,2.166666666666667,2116.6666666666665,54.791666666666664,2200,55C2283.3333333333335,55.208333333333336,2306.25,-72.875,2400,-1C2493.75,70.875,3254.1666666666665,212.29166666666669,2650,400C2045.8333333333335,587.7083333333333,156.25,795.8333333333334,-500,900"
                    transform="matrix(1,0,0,1,0,112)" opacity="0.62"></path>
                <path
                    d="M-10,10C33.75,11.458333333333334,114.58333333333334,21.375,200,17C285.41666666666663,12.625,316.66666666666663,-13.708333333333332,400,-11C483.33333333333337,-8.291666666666668,516.6666666666666,29.375,600,30C683.3333333333334,30.625,716.6666666666666,-8,800,-8C883.3333333333334,-8,916.6666666666666,27.916666666666668,1000,30C1083.3333333333333,32.083333333333336,1116.6666666666667,-1.75,1200,2C1283.3333333333333,5.75,1316.6666666666667,51.333333333333336,1400,48C1483.3333333333333,44.666666666666664,1516.6666666666667,-11.291666666666668,1600,-14C1683.3333333333333,-16.708333333333332,1716.6666666666667,32.5,1800,35C1883.3333333333333,37.5,1916.6666666666667,-6.166666666666667,2000,-2C2083.3333333333335,2.166666666666667,2116.6666666666665,54.791666666666664,2200,55C2283.3333333333335,55.208333333333336,2306.25,-72.875,2400,-1C2493.75,70.875,3254.1666666666665,212.29166666666669,2650,400C2045.8333333333335,587.7083333333333,156.25,795.8333333333334,-500,900"
                    transform="matrix(1,0,0,1,0,140)" opacity="0.81"></path>
                <path
                    d="M-10,10C33.75,11.458333333333334,114.58333333333334,21.375,200,17C285.41666666666663,12.625,316.66666666666663,-13.708333333333332,400,-11C483.33333333333337,-8.291666666666668,516.6666666666666,29.375,600,30C683.3333333333334,30.625,716.6666666666666,-8,800,-8C883.3333333333334,-8,916.6666666666666,27.916666666666668,1000,30C1083.3333333333333,32.083333333333336,1116.6666666666667,-1.75,1200,2C1283.3333333333333,5.75,1316.6666666666667,51.333333333333336,1400,48C1483.3333333333333,44.666666666666664,1516.6666666666667,-11.291666666666668,1600,-14C1683.3333333333333,-16.708333333333332,1716.6666666666667,32.5,1800,35C1883.3333333333333,37.5,1916.6666666666667,-6.166666666666667,2000,-2C2083.3333333333335,2.166666666666667,2116.6666666666665,54.791666666666664,2200,55C2283.3333333333335,55.208333333333336,2306.25,-72.875,2400,-1C2493.75,70.875,3254.1666666666665,212.29166666666669,2650,400C2045.8333333333335,587.7083333333333,156.25,795.8333333333334,-500,900"
                    transform="matrix(1,0,0,1,0,168)" opacity="1.00"></path>
            </g>
        </svg>

        <div class=" flex flex-col justify-center items-center">
            <div class="flex justify-center mb-16">
                <div class=" inline-block text-center">
                    <h1 class="text-center font-nunito italic text-3xl md:text-5xl text-primary font-bold drop-shadow-md pb-2 md:pb-4">
                        {{ cache('homepage.why_us-title') ?: 'Kenapa Kurnia Brownies?' }}
                    </h1>
                    <div class="border-b-2 mx-auto border-primary/65 w-[50%] text-center"></div>
                </div>
            </div>

            <div class="flex md:flex-row flex-col w-full gap-8">
                <div class="flex-grow flex flex-col items-center gap-6" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-easing="ease-out" data-aos-once="true">
                    @if (cache('homepage.why_us-image.1'))
                    <div class="w-10 h-10 md:w-20 md:h-20"></div>
                        <img class="object-contain w-full h-full" src="{{ url(cache('homepage.why_us-image.1')) }}" alt="">
                    @else
                    <i class="fa-solid fa-clock-rotate-left text-3xl md:text-6xl text-primary drop-shadow-md"></i>
                    @endif
                    
                    <div class="w-full md:w-3/4">
                        <h3 class="font-nunito text-xl md:text-2xl font-semibold tracking-wider text-center mb-3">{{ cache('homepage.why_us-title.1') ?: 'Lorem' }}</h3>
                        <p class="font-poppins text-gray-800 text-center leading-relaxed">
                            {{ cache('homepage.why_us-description.1') ? :'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit inventore tempore blanditiis.' }}
                        </p>
                    </div>
                </div>
                <div class="flex-grow flex flex-col items-center gap-6" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-easing="ease-out" data-aos-once="true" data-aos-delay="300">
                    @if (cache('homepage.why_us-image.2'))
                    <div class="w-10 h-10 md:w-20 md:h-20"></div>
                        <img class="object-contain w-full h-full" src="{{ url(cache('homepage.why_us-image.2')) }}" alt="">
                    @else
                    <i class="fa-solid fa-cookie text-3xl md:text-6xl text-primary drop-shadow-md"></i>
                    @endif
                    
                    <div class="w-full md:w-3/4">
                        <h3 class="font-nunito text-xl font-semibold tracking-wider text-center mb-3">{{ cache('homepage.why_us-title.2') ?: 'Lorem' }}</h3>
                        <p class="font-poppins text-gray-800 text-center leading-relaxed">
                            {{ cache('homepage.why_us-description.1') ? :'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit inventore tempore blanditiis.' }}
                        </p>
                    </div>
                </div>
                <div class="flex-grow flex flex-col items-center gap-6" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-easing="ease-out" data-aos-once="true" data-aos-delay="700">
                    @if (cache('homepage.why_us-image.3'))
                    <div class="w-10 h-10 md:w-20 md:h-20"></div>
                        <img class="object-contain w-full h-full" src="{{ url(cache('homepage.why_us-image.3')) }}" alt="">
                    @else
                    <i class="fa-solid fa-shield-halved text-3xl md:text-6xl text-primary drop-shadow-md"></i>
                    @endif
                    
                    <div class="w-full md:w-3/4">
                        <h3 class="font-nunito text-xl font-semibold tracking-wider text-center mb-3">{{ cache('homepage.why_us-title.3') ?: 'Lorem' }}</h3>
                        <p class="font-poppins text-gray-800 text-center leading-relaxed">
                            {{ cache('homepage.why_us-description.1') ? :'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit inventore tempore blanditiis.' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex mb-0 md:mb-20"></div>
    
    @php
        $faqs = App\Models\Faq::orderBy('sort_order','asc')->where('is_active', true)->limit(6)->get();
    @endphp
    <div class="py-10 md:py-16 px-10 lg:px-[120px] ">
        <div class="flex justify-center mb-10">
            <div class=" inline-block text-center">
                <h1 class="text-center font-nunito italic text-3xl md:text-5xl text-primary font-bold drop-shadow-md pb-2 md:pb-4">{{ cache('homepage.faq-title') ?: 'Pertanyaan Umum' }}</h1>
                <div class="border-b-2 mx-auto border-primary/65 w-[50%] text-center"></div>
            </div>
        </div>
        
        <div class="flex flex-wrap" x-data="{ active: '' }">
            @foreach ($faqs as $index => $faq)
            <div class="px-3 faq-item flex flex-col {{ $faqs->count() > 4 ? 'w-full md:w-1/2' : 'w-full' }}"
                data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-easing="ease-out">
                <div class="drop-shadow-md overflow-hidden faq-target">
                    <!-- Accordion Header -->
                    <a href="javascript:void(0)"
                        @click="active === '{{ $faq->id }}' ? active = '' : active = '{{ $faq->id }}'"
                        class="flex text-lg md:text-xl font-semibold font-nunito text-primary gap-3 justify-between items-center px-7 py-5">
                        <div class=" flex gap-4 items-center">
                            <p>{{ $faq->question }}</p>
                        </div>
                        <svg :class="active === '{{ $faq->id }}' ? 'rotate-90' : ''"
                            class="h-5 w-5 transition-transform duration-300" width="800px" height="800px" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 5L15.57 11.6237C15.7976 11.8229 15.7976 12.1771 15.57 12.3763L8 19" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
        
                    <!-- Accordion Body -->
                    <div x-show="active === '{{ $faq->id }}'" 
                        x-cloak
                        x-transition:enter="ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-y-0"
                        x-transition:enter-end="opacity-100 scale-y-100"
                        x-transition:leave="ease-in duration-200"
                        x-transition:leave-start="opacity-100 scale-y-100"
                        x-transition:leave-end="opacity-0 scale-y-0"
                        class=" px-7 pb-5 text-black origin-top font-poppins">
                       <p>{!! $faq->answer !!}</p>
                   </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-4" x-data="{ active: '' }">
    @foreach ($faqs as $faq)
    <div class="faq-item p-1 md:p-3 flex flex-col">
        <div class="drop-shadow-md overflow-hidden">
            <!-- Accordion Header -->
            <a href="javascript:void(0)"
                @click="active === '{{ $faq->id }}' ? active = '' : active = '{{ $faq->id }}'"
                class="faq-target flex text-lg md:text-xl font-semibold text-primary gap-3 justify-between items-center px-7 py-5 border-b border-black">
                <p>{{ $faq->question }}</p>
                <svg :class="active === '{{ $faq->id }}' ? 'rotate-90' : ''"
                    class="h-5 w-5 transition-transform duration-300">
                    <path d="M8 5L15.57 11.6237C15.7976 11.8229 15.7976 12.1771 15.57 12.3763L8 19"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>

            <!-- Accordion Body -->
            <div x-show="active === '{{ $faq->id }}'"
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-y-0"
                x-transition:enter-end="opacity-100 scale-y-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 scale-y-100"
                x-transition:leave-end="opacity-0 scale-y-0"
                class="px-7 pb-5 text-black origin-top font-poppins">
                <p>{!! $faq->answer !!}</p>
            </div>
        </div>
    </div>
    @endforeach
</div> --}}

        
        <div class="flex items-center mt-5 gap-5 flex-col">
            <p class="text-base md:text-lg font-poppins text-gray-700">Belum menemukan jawaban?</p>
            <a href="{{ route('faq') }}"
                class="px-10 py-4 bg-primary border-2 border-primary hover:bg-accent hover:text-primary text-gray-200 font-poppins tracking-wider shadow-md rounded-full font-semibold transition-colors duration-300">
                Halaman FAQ
            </a>
        </div>
    </div>

    <livewire:front.home.best-seller />

    @php
        $data = App\Models\Product::all();
    @endphp
    <div class=" px-10 lg:px-[120px]">
        <div class="relative w-full rounded-xl drop-shadow-md border border-primary/15 flex flex-col items-end gap-8 overflow-hidden bg-accent">
            <div class="w-full md:w-1/2 z-20 px-7 md:px-20 pt-[250px] pb-10 md:py-20">
                <div class="flex justify-center  ">
                    <div class=" inline-block text-center">
                        <h1 class="text-center font-nunito italic text-3xl md:text-5xl text-primary font-bold drop-shadow-md pb-2 md:pb-4">{{ cache('homepage.product-title') ?: 'Product' }}</h1>
                        <div class="border-b-2 mx-auto border-primary/65 w-[50%] text-center"></div>
                    </div>
                </div>
              <p class="mt-6 mb-8 font-poppins text-gray-800 text-center leading-relaxed text-base">
                {{ cache('homepage.product-description') ?: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima modi odio ratione non voluptatum? Doloribus quo, obcaecati reiciendis quam eligendi, labore libero quia neque modi facere, eaque doloremque cum expedita.' }}
              </p>
              <div class="flex justify-center">
                <a href="{{ route('product') }}">
                  <span
                      class="bg-accent border-2 border-primary text-primary hover:bg-primary hover:text-gray-100 font-bold py-3 px-8 rounded-full shadow-md transition-all duration-300 tracking-wider">
                      Lihat Produk
                  </span>
                </a>
              </div>
            </div>

            <div class="inset-0 absolute z-10 bg-gradient-to-t md:bg-gradient-to-l from-accent to-transparent from-60% to-100% md:from-45% md:to-80% pointer-events-none"></div>

            <div class="absolute flex -rotate-45 translate-x-[38rem] md:translate-x-[20rem] lg:translate-x-[7rem] w-[2000px] h-auto flex-col gap-6">
                <div class="marquee">
                    <div class="track">
                        @foreach ($data as $item)
                            <div class="w-32 h-32 flex-shrink-0 overflow-hidden rounded-lg">
                                <img class="object-contain h-full hover:scale-125 transition-all duration-150" src="{{ $item->image }}" alt="">
                            </div>
                        @endforeach
                        <!-- Duplikasi elemen untuk efek infinite -->
                        @foreach ($data as $item)
                            <div class="w-32 h-32 flex-shrink-0 overflow-hidden rounded-lg">
                                <img class="object-contain h-full hover:scale-125 transition-all duration-150" src="{{ $item->image }}" alt="">
                            </div>
                        @endforeach
                      </div>
                  </div>
                <div class="marquee">
                    <div class="track2">
                        @foreach ($data as $item)
                            <div class="w-32 h-32 flex-shrink-0 overflow-hidden rounded-lg">
                                <img class="object-contain h-full hover:scale-125 transition-all duration-150" src="{{ $item->image }}" alt="">
                            </div>
                        @endforeach
                        
                        @foreach ($data as $item)
                            <div class="w-32 h-32 flex-shrink-0 overflow-hidden rounded-lg">
                                <img class="object-contain h-full hover:scale-125 transition-all duration-150" src="{{ $item->image }}" alt="">
                            </div>
                        @endforeach
                      </div>
                  </div>
                <div class="marquee">
                    <div class="track">
                        @foreach ($data as $item)
                            <div class="w-32 h-32 flex-shrink-0 overflow-hidden rounded-lg">
                                <img class="object-contain h-full hover:scale-125 transition-all duration-150" src="{{ $item->image }}" alt="">
                            </div>
                        @endforeach
                        <!-- Duplikasi elemen untuk efek infinite -->
                        @foreach ($data as $item)
                            <div class="w-32 h-32 flex-shrink-0 overflow-hidden rounded-lg">
                                <img class="object-contain h-full hover:scale-125 transition-all duration-150" src="{{ $item->image }}" alt="">
                            </div>
                        @endforeach
                      </div>
                  </div>
                <div class="marquee">
                    <div class="track2">
                        @foreach ($data as $item)
                            <div class="w-32 h-32 flex-shrink-0 overflow-hidden rounded-lg">
                                <img class="object-contain h-full hover:scale-125 transition-all duration-150" src="{{ $item->image }}" alt="">
                            </div>
                        @endforeach
                        <!-- Duplikasi elemen untuk efek infinite -->
                        @foreach ($data as $item)
                            <div class="w-32 h-32 flex-shrink-0 overflow-hidden rounded-lg">
                                <img class="object-contain h-full hover:scale-125 transition-all duration-150" src="{{ $item->image }}" alt="">
                            </div>
                        @endforeach
                      </div>
                  </div>

            </div>
        </div>
    </div>

    <livewire:front.home.latest-news/>

    <livewire:front.cta-product />

    {{-- </section> --}}
@endsection
