<div class="relative">
    <div class="bg-primary md:p-36 px-20 py-40 lg:p-56 shadow-inner">

        <!-- Title -->
        <div class="w-full flex justify-center mb-40">
            <h1 class="text-yellow-400 my-0 drop-shadow-md hidden sm:block">
                Berita Terbaru
            </h1>
            <h2 class="text-yellow-400 my-0 drop-shadow-md sm:hidden block">
                Berita Terbaru
            </h2>
        </div>

        <!-- Foreach -->
        <div class="w-full flex justify-center mb-20">
            <div class="grid grid-cols-1 lg:grid-cols-3 sm:grid-cols-2 gap-20">
                @foreach ($datas as $data)
                    <div class="col-span-1" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true">
                        <div class="overflow-hidden rounded-2xl shadow-md">
                            <a href="{{ route('news.detail', $data->slug) }}" class="group block overflow-hidden relative">
                                <img class="object-cover group-hover:scale-125 transition-all duration-300 aspect-[1/1] mb-0"
                                    src="{{ url($data->image) }}" alt="">
                                <div class="absolute bottom-0 left-0 flex flex-col">
                                    <div
                                        class="h-40 bg-white bg-opacity-65 flex flex-col justify-center items-center px-10">
                                        <h3 class="my-0">{{ $data->created_at->format('d') }}</h3>
                                        <h5 class="my-0 text-[15px]">{{ $data->created_at->format('M') }}</h5>
                                        <h5 class="my-0 text-[15px]">{{ $data->created_at->format('Y') }}</h5>
                                    </div>
                                    <div
                                        class="bg-secondary uppercase text-[12px] px-10 text-black text-center font-bold group-hover:py-5 transition-all">
                                        Baca</div>
                                </div>
                            </a>
                            <div class="w-full p-6 bg-white">
                                <h5 class="my-0">{{ $data->title }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    </div>
    <div class="w-full absolute lg:bottom-20 bottom-10">
        <div class="column w-full lg-6 tab-12 u-flexitem-center">
            <a class="btn btn--primary u-fullwidth" href="{{ route('news') }}">Lihat Berita Lainnya</a>
        </div>
    </div>
</div>
