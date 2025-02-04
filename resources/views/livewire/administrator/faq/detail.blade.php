<div class="flex gap-5 mb-5">

    <div class="w-3/4 flex flex-col gap-5 ">
        <div class="px-6 py-5 shadow-md rounded-3xl bg-white">
            <h1 class="text-2xl text-center font-bold mb-1">{{ $data->name }}</h1>
            <p class="text-gray-600 text-sm text-center mb-3">{{ $data->category->name ?? 'Belum ada kategori' }}</p>
            <div class="flex flex-col text-sm">

                <div class="flex justify-between">
                    <p>Dibuat <strong>{{ $data->created_at->format('d F Y, H.i') }}</strong></p>
                    <p class="flex items-center gap-1">
                        <i
                            class="{{ $data->recommended == true ? 'text-green-600 fa-solid fa-circle-check' : 'text-gray-500 fa-solid fa-circle-info' }}"></i>
                        <span class="font-semibold">{{ $data->recommended == true ? 'Recommended' : 'Common' }}</span>
                    </p>
                </div>

            </div>
        </div>
        <div class="px-6 py-5 shadow-md rounded-3xl bg-white">
            <div class="flex flex-col gap-5">
                <img class="rounded-md"
                    src="{{ url($data->image) }}"
                    alt="">

                <p>{!! $data->description !!}</p>
            </div>
        </div>
    </div>

    <div class="w-1/4">
        <div class="px-6 py-4 shadow-md rounded-3xl bg-white">
            <h1 class="mb-3 text-xl text-center font-bold">Product Gallery</h1>
            <div class="flex flex-col gap-3 mb-3">
                @forelse ($data->detail as $item)
                    <div x-data="{ preview: false, scrollPosition: 0 }">
                        <div class="relative group">
                            <div class="absolute z-30 top-20 left-19 invisible group-hover:visible transition-all">
                                <div class="text-white">
                                    <a href="#"
                                        @click="preview = !preview;  if (preview) { scrollPosition = window.scrollY }"
                                        class="py-[0.15rem] px-[0.37rem] rounded-full border-2 bg-slate-200 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent active:bg-slate-400"><i
                                            class="fa-solid fa-eye text-xs"></i></a>
                                </div>
                            </div>
                            <img class="hover:blur-[2px] rounded transition-all duration-300"
                                style="width: 200px; height: 200px; object-fit: cover"
                                src="{{ url($item->value) }}">
                        </div>

                        {{-- Preview Image --}}
                        <div x-show="preview" x-transition:enter="transition translate-y-0 ease-out duration-200"
                            x-transition:enter-start="opacity-0 bottom-10"
                            x-transition:enter-end="opacity-100 bottom-0 "
                            x-transition:leave="transition translate-y-0 ease-in duration-200"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                            class="fixed w-full h-screen left-0 top-0 z-50 flex justify-center items-center bg-black bg-opacity-20">
                            <div class="flex flex-col bg-white shadow-md rounded-md">
                                <div class="p-4 border-b border-gray-300 flex items-center justify-between ">
                                    <span class="font-bold text-slate-800 text-lg">Preview Image</span>
                                    <span @click="preview = false; window.scrollTo(0, scrollPosition)"
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
                        <p class="text-gray-600 text-xs">Anda belum menambahkan foto ke produk ini</p>
                    </div>
                @endforelse


            </div>
        </div>
    </div>
</div>
