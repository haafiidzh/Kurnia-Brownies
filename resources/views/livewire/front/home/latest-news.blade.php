<div>
    <div class="px-10 lg:px-[120px] py-20">
        <h1 class="mb-4 text-4xl md:text-5xl text-center font-nunito text-primary italic font-bold">Latest News</h1>
        <div class="flex justify-center">
            <div class="border-b-2 border-primary/65 w-[40%] md:w-[20%] text-center"></div>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 mt-10">
            @foreach ($datas as $data)
                    <div class="flex flex-col gap-3">
                        <a class="relative overflow-hidden group " href="{{ route('news.detail', $data->slug) }}">
                            <div class="z-20 absolute inset-0 bg-white/20 hidden group-hover:block "></div>
                            <img class="aspect-video object-cover group-hover:scale-125 transition-all duration-300"
                             src="{{ url($data->image) }}" alt="">
                        </a>
                        <div>
                            <p class="font-poppins text-sm"> Posted by <span class="font-poppins font-bold text-sm">{{ $data->author->name }}</span> </p>
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