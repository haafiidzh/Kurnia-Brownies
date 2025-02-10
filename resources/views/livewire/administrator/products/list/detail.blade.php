<div class="flex gap-5 mb-5">

    <div class="w-2/3 gap-5 flex flex-col">
        <div class="py-3 shadow-md rounded-xl bg-white">
            <h3 class="px-6 font-semibold text-xl pb-3">Gambar Produk</h3>
            <div class="border-b border-slate-700"></div>
            <div class="pt-3 px-6 mb-1">
                <div x-data="{ preview: false, scrollPosition: 0 }">
                    <div class="relative group rounded-lg overflow-hidden">
                        <img class="object-cover transition-all group-hover:blur-[2px] duration-300 w-full h-[250px]"
                            src="{{ url($data->image) }}">
    
                        <div class="absolute bottom-5 right-5 flex justify-center items-center group-hover:visible invisible">
                            <a href="javascript:void(0)"
                            @click="preview = !preview;  if (preview) { scrollPosition = window.scrollY }">
                                <div class="h-8 w-8 flex justify-center items-center rounded-full border-2 bg-slate-200 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent active:bg-slate-400">
                                    <i class="fa-solid fa-eye text-xs"></i>
                                </div>
                            </a>
                        </div>

                        {{-- Preview Image --}}
                        <div x-show="preview" 
                            x-cloak
                            x-transition:enter="transition translate-y-0 ease-out duration-200"
                            x-transition:enter-start="opacity-0 bottom-10" x-transition:enter-end="opacity-100 bottom-0 "
                            x-transition:leave="transition translate-y-0 ease-in duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            class="fixed w-full h-screen left-0 top-0 z-50 flex justify-center items-center bg-black/10">
                            <div class="flex flex-col bg-white shadow-md rounded-md">
                                <div class="p-4 border-b border-gray-300 flex items-center justify-between ">
                                    <span class="font-bold text-slate-800 text-lg">Preview Image</span>
                                    <span @click="preview = false; window.scrollTo(0, scrollPosition)"
                                        class="p-2 cursor-pointer hover:bg-gray-200 hover:rounded-md">
                                        <i class="fa-solid fa-x"></i>
                                    </span>
                                </div>
                                <div class="p-5">
                                    <img class="rounded-md" src="{{ url($data->image) }}" style="max-height: 480px;"
                                        alt="{{ $data->name }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3 shadow-md rounded-xl bg-white">
            <h3 class="px-6 font-semibold text-xl pb-3">Deskripsi Singkat</h3>
            <div class="border-b border-slate-700"></div>
            <h1 class=" py-3 px-6">{{ $data->short_description }}</h1>
        </div>
        <div class="py-3 shadow-md rounded-xl bg-white">
            <h3 class="px-6 font-semibold text-xl pb-3">Deskripsi</h3>
            <div class="border-b border-slate-700"></div>
            <h1 class=" py-3 px-6">{!! $data->description !!}</h1>
        </div>
    </div>

    <div class="w-1/3 gap-5 flex flex-col">
        <div class="py-3 shadow-md rounded-xl bg-white">
            <h3 class="px-6 font-semibold text-xl pb-3">Informasi</h3>
            <div class="border-b border-slate-700"></div>
            <h1 class="text-lg py-3 px-6 font-semibold">{{ $data->name }}</h1>

            <div class="px-6 pb-2">
                <div class="flex flex-col gap-1 text-sm p-2 border border-slate-700 rounded">
                    <p>Kategori <span class="font-semibold">{{ $data->category->name }}</span></p>
                    <p>Dibuat <span class="font-semibold">{{ getFullDateTime($data->created_at) }}</span></p>
                    <p class="flex items-center gap-1">
                        <i class="{{ $data->best_seller == true ? 'text-green-600 fa-solid fa-circle-check' : 'text-gray-500 fa-solid fa-circle-info' }}"></i>
                        <span>{{ $data->best_seller == true ? 'Best Seller' : 'Common' }}</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="py-3 shadow-md rounded-xl bg-white">
            <h3 class="px-6 font-semibold text-xl pb-3">Galeri Produk</h3>
            <div class="border-b border-slate-700"></div>
            <div class="flex flex-col mt-3 px-6 {{ $data->detail->count() > 1 ? 'h-[295px] overflow-y-scroll' : '' }}">
                @forelse ($data->detail as $item)
                    <div x-data="{ detail: false, scrollPosition: 0 }">
                        <div class="relative group {{ $loop->last ? '' : 'mb-3' }} rounded-lg overflow-hidden border border-slate-700">
                            <img class="object-cover transition-all group-hover:blur-[2px] duration-300 w-full h-[200px]"
                                src="{{ url($item->value) }}">
        
                            <div class="absolute bottom-5 right-5 flex justify-center items-center group-hover:visible invisible">
                                <a href="javascript:void(0)"
                                @click="detail = !detail;  if (detail) { scrollPosition = window.scrollY }">
                                    <div class="h-8 w-8 flex justify-center items-center rounded-full border-2 bg-slate-200 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent active:bg-slate-400">
                                        <i class="fa-solid fa-eye text-xs"></i>
                                    </div>
                                </a>
                            </div>

                        <div x-show="detail" x-transition:enter="transition translate-y-0 ease-out duration-200"
                            x-transition:enter-start="opacity-0 bottom-10"
                            x-transition:enter-end="opacity-100 bottom-0 "
                            x-transition:leave="transition translate-y-0 ease-in duration-200"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                            class="fixed w-full h-screen left-0 top-0 z-50 flex justify-center items-center bg-black bg-opacity-20">
                            <div class="flex flex-col bg-white shadow-md rounded-md">
                                <div class="p-4 border-b border-gray-300 flex items-center justify-between ">
                                    <span class="font-bold text-slate-800 text-lg">Preview Image</span>
                                    <span @click="detail = false; window.scrollTo(0, scrollPosition)"
                                        class="p-2 cursor-pointer hover:bg-gray-200 hover:rounded-md">
                                        <i class="fa-solid fa-x"></i>
                                    </span>
                                </div>
                                <div class="p-5">
                                    <img class="rounded-md"
                                        src="{{ url($item->value) }}"
                                        style="max-height: 480px;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="flex justify-center py-2">
                        <p class="text-gray-600 text-sm">Anda belum menambahkan foto ke produk ini</p>
                    </div>
                @endforelse


            </div>
        </div>
        
    </div>
</div>
