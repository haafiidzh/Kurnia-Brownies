<div>
    <div class="px-10 lg:px-[120px] py-20">
        <div class="flex justify-center mb-0 md:mb-20">
            <div class=" inline-block text-center">
                <h1 class="text-center font-nunito italic text-3xl md:text-5xl text-primary font-bold drop-shadow-md pb-2 md:pb-4">{{ cache('homepage.news-title') ?: 'Latest News' }}</h1>
                <div class="border-b-2 mx-auto border-primary/65 w-[50%] text-center"></div>
            </div>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 mt-10">
            @foreach ($datas as $data)
                <div class="flex flex-col gap-3" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-easing="ease-out">
                    <a class="relative overflow-hidden group " href="{{ route('news.detail', $data->slug) }}">
                        <div class="z-20 absolute inset-0 bg-white/20 hidden group-hover:block "></div>
                        <img class="aspect-video object-cover group-hover:scale-125 transition-all duration-300"
                            src="{{ url($data->image) }}" alt="">
                    </a>
                    <div>
                        <p class="font-poppins text-sm"> Dibuat oleh <span class="font-poppins font-semibold text-sm">{{ $data->author->name }}</span> </p>
                        <a href="{{ route('news.detail', $data->slug) }}">
                            <h2 class="font-poppins font-semibold text-gray-800 hover:text-primary inline">
                                {{ $data->title }}
                            </h2>
                        </a>
                    </div>
                </div>
            @endforeach   
        </div>
    </div>
</div>