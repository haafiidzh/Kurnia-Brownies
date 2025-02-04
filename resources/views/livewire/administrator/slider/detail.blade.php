<div class="flex gap-5 mb-5">

    <div class="w-3/4 flex flex-col gap-5 ">
        <div class="px-6 py-5 shadow-md rounded-3xl bg-white">
            <h1 class="text-2xl font-bold mb-2">{{ $data->title }}</h1>
            <div class="flex flex-col text-sm">

                <div class="flex justify-between">
                    <p>Dibuat <strong>{{ $data->created_at->format('d F Y, H.i') }}</strong></p>
                    <p class=><i class="fa-regular fa-heart"></i> {{ $data->likes }} likes</p>
                </div>

            </div>
        </div>
        <div class="px-6 py-5 shadow-md rounded-3xl bg-white">
            <div class="flex flex-col gap-5">
                <h2 class="text-lg font-bold">Deskripsi</h2>
                <p>{!! $data->description !!}</p>
            </div>
        </div>
    </div>

    <div class="w-1/4">
        <div class="px-6 py-4 shadow-md rounded-3xl bg-white">
            <h1 class="mb-3 text-xl text-center font-bold">Gambar</h1>
            <div x-data="{ preview: false, scrollPosition: 0 }">
                <div class="relative group rounded-lg overflow-hidden">
                    <img class="object-cover transition-all group-hover:blur-[2px] duration-300 w-[200px] h-[160px]"
                        src="{{ url($data->image) }}">

                    <div class="absolute inset-0 flex justify-center items-center group-hover:visible invisible">
                        <a href="javascript:void(0)"
                        @click="preview = !preview;  if (preview) { scrollPosition = window.scrollY }">
                            <div class="h-8 w-8 flex justify-center items-center rounded-full border-2 bg-slate-200 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent active:bg-slate-400">
                                <i class="fa-solid fa-eye text-xs"></i>
                            </div>
                        </a>
                    </div>

                        <div x-show="preview" x-transition:enter="transition translate-y-0 ease-out duration-200"
                            x-transition:enter-start="opacity-0 bottom-10"
                            x-transition:enter-end="opacity-100 bottom-0 "
                            x-transition:leave="transition translate-y-0 ease-in duration-200"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                            class="fixed w-full h-screen left-0 top-0 z-50 flex justify-center items-center bg-black/20">
                            <div class="flex flex-col bg-white shadow-md rounded-md">
                                <div class="p-4 border-b border-gray-300 flex items-center justify-between ">
                                    <span class="font-bold text-slate-800 text-lg">Preview Image</span>
                                    <span @click="preview = false; window.scrollTo(0, scrollPosition)"
                                        class="p-2 cursor-pointer hover:bg-gray-200 hover:rounded-md">
                                        <i class="fa-solid fa-x"></i>
                                    </span>
                                </div>
                                <div class="p-5">
                                    <img class="rounded-md max-h-[480px]" src="{{ url($data->image) }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
