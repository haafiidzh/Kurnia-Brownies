<div>
    <div class="bg-orange-900 p-20 lg:p-56">

        <!-- Title -->
        <div class="w-full flex justify-center mb-40">
            <h1 class="text-yellow-400 my-0 drop-shadow-md">
                Berita Terbaru
            </h1>
        </div>

        <!-- Foreach -->
        <div class="w-full flex justify-center mb-20">
            <div class="grid grid-cols-1 lg:grid-cols-3 sm:grid-cols-2 gap-20">
                @foreach ($datas as $data)
                    <div class="col-span-1" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true">
                        <div class="overflow-hidden rounded-2xl shadow-md hover:translate-y-7 transition-all">
                            <a href="{{ route('product.category', $data->slug) }}">
                                <img class="object-cover aspect-[1/1] mb-0"
                                    src="{{ url($data->image) }}" alt="">
                            </a>
                            <div class="w-full p-6 bg-white">
                                <h5 class="my-0">{{ $data->title }}</h5>
                            </div>
                        </div>

                        {{-- <div class="text-center text-gray-200">
                            <h2 class="my-3 text-yellow-400 drop-shadow-md">{{ $data->title }}</h2>
                            <p>{!! $data->description !!}</p>
                        </div> --}}
                    </div>
                @endforeach
            </div>
        </div>
        <div class="w-full">
            <div class="column lg-6 tab-12 u-flexitem-center">
                <a class="btn btn--primary u-fullwidth" href="{{ route('news') }}">Lihat Berita Lainnya</a>
            </div>
        </div> 
        
    </div>
</div>
