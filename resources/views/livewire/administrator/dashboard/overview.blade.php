<div>
    <div class="mt-6 flex gap-6">
        <div class="flex-grow">
            <div class="bg-white rounded-lg">
                <h2 class="px-8 pt-4 text-xl font-semibold text-slate-800 tracking-wider">Overview</h2>
                {{-- <div class="flex">
                    <div class="border-b border-slate-800/50 w-full"></div>
                </div> --}}
                <div class="p-6 grid grid-cols-2 gap-6">
                    <a href="{{ route('administrator.products') }}">
                        <div class="group cursor-pointer bg-gray-200 hover:bg-green-300 hover:shadow-sm py-3 px-5 flex gap-4 rounded-lg items-center transition-colors duration-300">
                            <div class="w-14 h-14 group-hover:bg-white bg-green-300 flex items-center justify-center rounded-md transition-colors duration-300">
                                <i class="fa-solid fa-cart-shopping fa-lg text-black"></i>
                            </div>
                            <div class="flex flex-grow justify-between">
                                <h3 class="font-semibold text-xl">Produk</h3>
                                <p class="text-lg">{{ $product }}</p>
                            </div>
                        </div>
                    </a>
                    
                    <a href="{{ route('administrator.products.category') }}">
                        <div class="group cursor-pointer bg-gray-200 hover:bg-indigo-300 hover:shadow-sm py-3 px-5 flex gap-4 rounded-lg items-center transition-colors duration-300">
                            <div class="w-14 h-14 group-hover:bg-white bg-indigo-300 flex items-center justify-center rounded-md transition-colors duration-300">
                                <i class="fa-solid fa-layer-group fa-lg text-black"></i>
                            </div>
                            <div class="flex flex-grow justify-between">
                                <h3 class="font-semibold text-xl">Kategori</h3>
                                <p class="text-lg">{{ $product_category->count() }}</p>
                            </div>
                        </div>
                    </a>
                    
        
                    <a href="{{ route('administrator.news') }}">
                        <div class="group cursor-pointer bg-gray-200 hover:bg-blue-300 hover:shadow-sm py-3 px-5 flex gap-4 rounded-lg items-center transition-colors duration-300">
                            <div class="w-14 h-14 group-hover:bg-white bg-blue-300 flex items-center justify-center rounded-md transition-colors duration-300">
                                <i class="fa-solid fa-newspaper fa-lg text-black"></i>
                            </div>
                            <div class="flex flex-grow justify-between">
                                <h3 class="font-semibold text-xl">Berita</h3>
                                <p class="text-lg">{{ $news->count() }}</p>
                            </div>
                        </div>
                    </a>
                    
                    <a href="{{ route('administrator.sliders') }}">
                        <div class="group cursor-pointer bg-gray-200 hover:bg-lime-300 hover:shadow-sm py-3 px-5 flex gap-4 rounded-lg items-center transition-colors duration-300">
                            <div class="w-14 h-14 group-hover:bg-white bg-lime-300 flex items-center justify-center rounded-md transition-colors duration-300">
                                <i class="fa-solid fa-images fa-lg text-black"></i>
                            </div>
                            <div class="flex flex-grow justify-between">
                                <h3 class="font-semibold text-xl">Slider</h3>
                                <p class="text-lg">{{ $sliders->count() }}</p>
                            </div>
                        </div>
                    </a>
                    
                    
                    {{-- <a href="{{ route('administrator.') }}">

                    </a>
                    <div class="group cursor-pointer bg-gray-200 hover:bg-orange-300 hover:shadow-sm py-3 px-5 flex gap-4 rounded-lg items-center transition-colors duration-300">
                        <div class="w-14 h-14 group-hover:bg-white bg-orange-300 flex items-center justify-center rounded-md transition-colors duration-300">
                            <i class="fa-solid fa-question fa-lg text-black"></i>
                        </div>
                        <div class="flex flex-grow justify-between">
                            <h3 class="font-semibold text-xl">FAQ</h3>
                            <p class="text-lg">{{ $faqs }}</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        
        <div class="w-1/3">
            <div class="bg-white rounded-lg">
                <h2 class="px-8 pt-4 text-xl font-semibold text-slate-800 tracking-wider">Umpan Balik</h2>
                {{-- <div class="flex">
                    <div class="border-b border-slate-800/50 w-full"></div>
                </div> --}}
                <div class="p-6">
                    @if ($feedback->count() == 0)
                    <div class="border border-slate-800 rounded-md py-2 px-3 text-sm">
                        Anda tidak memiliki pesan baru
                    </div>
                    @else
                    <div class="mb-2 text-gray-500 text-sm">Anda memiliki {{ $feedback->count() }} pesan baru</div>
                    <div class="flex flex-col gap-3 overflow-auto max-h-[155px] custom-scrollbar">
                        @foreach($feedback as $item)
                            <a href="{{ route('administrator.feedback.detail', ['id' => $item->id]) }}" 
                                wire:click="setReview('{{ $item->id }}')">
                                <div class="border border-slate-800 rounded-md px-3 py-2 hover:border-transparent hover:bg-gray-100 transition-all">
                                    <h3 class="font-medium text-slate-800">{{ $item->first_name }} {{ $item->last_name }} </h3>

                                    <div class="flex justify-between items-center text-xs">
                                        <span class=" text-slate-500 w-1/2 truncate">{{ $item->email }}</span>
                                        <span class="text-slate-500">{{ diffForHumans($item->created_at) }}</span>
                                    </div>
                                    <p class="text-sm text-slate-600 mt-1 truncate">{{ $item->message }}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
    
    {{-- <h1 class="mt-6 text-3xl text-slate-800 tracking-wider border-b border-black/45 pb-2 ps-4">Statistik</h1> --}}

    <!-- Data Kategori -->
    <div class="mt-6 grid grid-cols-3 gap-6">
        <div>
            <div class="bg-white py-4 rounded-lg">
                <h2 class="px-6 pb-4 text-lg font-semibold text-slate-800 tracking-wider">Kategori</h2>
                <div class="px-4 h-[300px] overflow-auto custom-scrollbar gap-2 flex flex-col">

                    @forelse ($product_category as $item)
                    <div class="flex flex-col rounded-md bg-gray-200 py-2 px-4 gap-1">
                        <div class="text-gray-700 text-lg">{{ $item->name }}</div>
                        <div class="text-gray-600 text-sm"><i class="fa-solid fa-cart-shopping"></i>&nbsp;&nbsp;{{ $item->product_count }} produk</div>
                   </div>     
                    @empty
                    <div class="py-2 px-4 h-full border border-slate-500 rounded-md text-sm text-gray-700">
                        Anda tidak memiliki kategori produk. Silahkan tambah atau aktifkan di menu kategori produk.
                    </div>
                    @endforelse
                   
                </div>
            </div>
        </div>

        <div>
            <div class="bg-white py-4 rounded-lg">
                <h2 class="px-6 pb-4 text-lg font-semibold text-slate-800 tracking-wider">Slider</h2>
                <div class="px-4 h-[300px] overflow-y-auto custom-scrollbar gap-2 flex flex-col">

                    @forelse ($sliders as $item)
                        <div class="flex relative rounded-md">
                            <div class=" h-[67px] w-full rounded-md overflow-hidden">
                                <img class="w-full h-full object-cover object-center" src="{{ url($item->image) }}" alt="{{ $item->title }}">
                            </div>
                            
                            <div class="absolute inset-0 overflow-hidden z-10 rounded-md">
                                <div class="flex items-end justify-end px-4 pb-1 text-gray-800 text-end w-full h-full  bg-gradient-to-tl from-gray-200 to-transparent from-0% to-65%">
                                    <span>
                                        <i class="fa-solid fa-heart text-red-500 drop-shadow-sm pe-[2px]"></i>
                                        {{ numberShortner($item->likes) }}
                                    </span>
                                </div>
                            </div>
                       </div>
                    @empty
                        <div class="py-2 px-4 h-full border border-slate-500 rounded-md text-sm text-gray-700">
                            Anda tidak memiliki slider yang aktif. Silahkan tambah atau aktifkan di menu slider.
                        </div>
                    @endforelse
                   
                </div>
            </div>
        </div>

        <div>
            <div class="bg-white py-4 rounded-lg">
                <h2 class="px-6 pb-4 text-lg font-semibold text-slate-800 tracking-wider">Berita</h2>
                <div class="px-4 h-[300px] overflow-auto custom-scrollbar gap-2 flex flex-col">

                    @forelse ($news as $item)
                    <div class="flex flex-col rounded-md bg-gray-200 py-2 px-4 gap-1">
                        <div class="text-gray-700 text-lg truncate">{{ $item->title }}</div>
                        <p class="text-gray-600 text-sm"><i class="fa-solid fa-eye"></i>&nbsp;&nbsp;{{ number_format($item->views, 0, ',', '.') }}</p>

                   </div>     
                    @empty
                    <div class="py-2 px-4 h-full border border-slate-500 rounded-md text-sm text-gray-700">
                        Berita Anda belum ada yang melihat.
                    </div>
                    @endforelse
                   
                </div>
            </div>
        </div>
    </div>
</div>
