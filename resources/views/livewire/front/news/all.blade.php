<section class="w-full px-10 lg:px-[120px] py-10">
    <div>
        <div class="w-full flex flex-col sm:flex-row gap-10">
            <article class="w-full sm:w-3/4"> 
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @foreach ($datas as $data)
                    <div class="flex flex-col gap-3">
                        <a class="relative overflow-hidden group " href="{{ route('news.detail', $data->slug) }}">
                            <div class="z-20 absolute inset-0 bg-white/20 hidden group-hover:block "></div>
                            <img class="aspect-video object-cover group-hover:scale-125 transition-all duration-300"
                             src="{{ url($data->image) }}?v={{ time() }}" alt="{{ $data->title }}">
                        </a>
                        <div>
                            <p class="font-poppins text-sm"> Dibuat Oleh <span class="font-poppins font-semibold text-sm">{{ $data->author->name }}</span> </p>
                            <a href="{{ route('news.detail', $data->slug) }}">
                                <h2 class="font-poppins font-semibold text-gray-800 hover:text-primary inline">
                                    {{ $data->title }}
                                </h2>
                            </a>
                        </div>
                    </div>
                    @endforeach            
                </div>
            </article>
            <aside class="w-full sm:w-1/4 drop-shadow-md">
                <h2 class="text-xl font-nunito text-primary font-semibold tracking-wider border-b-2 border-primary inline">{{ cache('news.popular-title') ?: 'Berita Terpopuler' }}</h2>
                <div class="mt-4 grid grid-cols-1 gap-4 overflow-y-auto">
                    @foreach ($otherNews as $item)
                        <div class="flex flex-col gap-3">
                            <a class="relative overflow-hidden group rounded-md" href="{{ route('news.detail', $item->slug) }}">
                                <div class="z-20 absolute inset-0 bg-white/20 hidden group-hover:block "></div>
                                <img class="aspect-video object-cover group-hover:scale-125 transition-all duration-300"
                                src="{{ url($item->image) }}?v={{ time() }}" alt="{{ $data->title }}">
                            </a>
                            <div>
                                <p class="font-poppins text-sm">Dibuat oleh <span class="font-poppins font-bold text-sm">{{ $item->author->name }}</span> </p>
                                <a href="{{ route('news.detail', $item->slug) }}">
                                    <h2 class="font-poppins font-semibold text-gray-800 hover:text-primary inline">
                                        {{ $item->title }}
                                    </h2>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </aside>
        </div>
        <div>
            {{ $datas->links('vendor.livewire.front.news') }}    
        </div>    
    </div>
</section>