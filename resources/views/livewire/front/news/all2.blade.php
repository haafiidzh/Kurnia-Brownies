<div class="w-full px-36 mb-36">
    <div class="mb-36 flex space-x-5 items-center">
        <a href="{{ route('home') }}">
            <h3 class="my-0"><i class='bx bxs-home text-secondary'></i></h3>
        </a>
        <i class="fa-solid fa-chevron-right"></i>
        <h3 class="my-0 py-0">News</h3>
    </div>
    <div class="flex flex-grow flex-wrap md:flex-row flex-col gap-x-20 gap-y-20 justify-beetwen mb-20">
        @foreach ($datas as $data)
            <div class="w-full md:w-[45%]" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true">
                <div class="overflow-hidden rounded-2xl shadow-md ">
                    <a href="{{ route('news.detail', $data->slug) }}" class="group block overflow-hidden relative">
                        <img class="object-cover group-hover:scale-125 transition-all duration-300 aspect-[16/9] mb-0"
                            src="{{ url($data->image) }}" alt="">
                        <div class="absolute bottom-0 left-0 flex flex-col">
                            <div class="h-40 bg-white bg-opacity-65 flex flex-col justify-center items-center px-10">
                                <h3 class="my-0">{{ $data->created_at->format('d') }}</h3>
                                <h5 class="my-0 text-[15px]">{{ $data->created_at->format('M') }}</h5>
                                <h5 class="my-0 text-[15px]">{{ $data->created_at->format('Y') }}</h5>
                            </div>
                            <div class="bg-secondary uppercase text-[12px] px-10 text-black text-center font-bold group-hover:py-5 transition-all">Baca</div>
                        </div>
                    </a>
                    <div class="w-full p-6 bg-white">
                        <h5 class="my-0">{{ $data->title }}</h5>
                        <p class="my-0 font-thin text-gray-500">{{ $data->subject }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div>
        {{ $datas->links('vendor.pagination.front') }}
    </div>
</div>
