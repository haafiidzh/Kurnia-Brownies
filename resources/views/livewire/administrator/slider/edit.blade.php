<div>
    <div>
        <form wire:submit="update">
            <div class="w-full">
                {{-- Title --}}
                <div class="mb-5 flex">
                    {{-- Deskripsi Title --}}
                    <div class="w-1/4 flex flex-row gap-2">
                        <div class="h-6 w-6 flex justify-center items-center">
                            <i class="fa-solid fa-heading "></i>
                        </div>
                        <div class="w-48 flex flex-col gap-2">

                            <div class="flex flex-row">
                                <h2 class="text-md font-semibold">Title</h2>
                                <p class="text-md"> &nbsp;| Judul</p>
                            </div>

                            <p class="text-sm text-slate-500 tracking-wider">
                                Judul slider untuk mengidentifikasi.
                            </p>
                        </div>
                    </div>

                    {{-- Form Title --}}
                    <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white">
                        <div class="mb-5">
                            <label for="title" class="block ml-1 font-semibold text-sm text-slate-700 ">
                                Judul
                            </label>
                            <input
                                class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                                type="text" name="title" placeholder="Judul Slider" wire:model.lazy="title">
                            @error('title')
                                <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="w-full mb-2 flex gap-4">
                            <div class="flex-grow">
                                <label for="slug"
                                    class="block ml-1 font-semibold text-sm text-slate-700 ">Slug</label>
                                <input
                                    class="disabled w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                                    type="text" slug="slug" placeholder="Slug akan digenerate otomatis"
                                    wire:model="slug" disabled>
                                @error('slug')
                                    <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-grow">
                                    <label for="is_active" class="block mb-2 font-semibold text-sm text-slate-700 ">
                                        Status
                                    </label>
                                    <p class="text-xs leading-tight text-gray-600">Aktifkan Slider?</p>
                                    <div class="flex items-center gap-2 mt-2">
                                        <span class="text-xs text-gray-800 font-bold">Tidak</span>
                                        <div class="flex items-center">
                                            <label class="relative inline-flex items-center cursor-pointer">
                                                <input type="checkbox" class="sr-only peer" wire:model="is_active"
                                                {{ $this->is_active == true ? 'checked' : '' }}>
                                                <div
                                                    class="w-9 h-5 bg-gray-400 hover:bg-gray-500 peer-focus:outline-0 peer-focus:ring-transparent rounded-full peer transition-all ease-in-out duration-500 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-indigo-800 hover:peer-checked:bg-indigo-900">
                                                </div>
                                            </label>
                                        </div>
                                        <span class="text-xs text-gray-800 font-bold">Ya</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-1/4 ps-4 pt-3 flex items-start">
                        <div class="p-2 border border-black/30 rounded-lg ">
                            <div class="text-xs"><i class="fa-solid fa-circle-info"></i> &nbsp;Penting</div>
                            <span class="text-[0.7rem] text-gray-600">Perhatikan judul slider karena juga digunakan dalam alt text untuk meningkatkan SEO gambar nya di halaman depan.</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Start Image --}}
            <div class="w-full">
                <div class="mb-5 flex">
                    {{-- Deskripsi Image --}}
                    <div class="w-1/4 flex flex-row gap-2">
                        <div class="h-6 w-6 flex justify-center items-center">
                            <i class="fa-solid fa-image"></i>
                        </div>
                        <div class="w-48 flex flex-col gap-2">

                            <div class="flex flex-row">
                                <h2 class="text-md font-semibold">Image</h2>
                                <p class="text-md"> &nbsp;| Gambar</p>
                            </div>

                            <p class="text-sm text-slate-500 tracking-wider">
                                Gambar menarik terkait slider.
                            </p>
                        </div>
                    </div>
                    {{-- End Deskripsi Image --}}

                    {{-- Form Image --}}
                    <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white flex flex-col">
                        <div class="my-2 flex flex-col gap-3 items-center justify-center w-full">
                            <div class="w-full flex">
                                <label for="image" class="cursor-pointer flex gap-2 items-center">
                                    <div
                                        class="text-white rounded-md bg-slate-700 px-4 py-1 text-sm tracking-widest hover:bg-green-500 transition-all uppercase">
                                        Ganti</div>
                                    <i wire:loading wire:target="newImage"
                                        class="fa-brands fa-cloudsmith animate-spin text-gray-500 text-xl"></i>
                                    <p wire:loading wire:target="newImage"
                                        class="text-sm text-gray-500 animate-pulse dark:text-gray-400">Uploading...
                                    </p>
                                    <input class="sr-only" type="file" accept="image/*" id="image"
                                        wire:model="newImage">
                                </label>
                            </div>
                            <div class="border-2 border-gray-400 border-dashed rounded-2xl w-full relative">
                                @if ($newImage)
                                    <img class="rounded-2xl" src="{{ $newImage->temporaryUrl() }}" alt="">
                                @else
                                    <img class="rounded-2xl" src="{{ url($image) }}" alt="">
                                @endif
                            </div>
                        </div>
                        @error('image')
                            <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- End Form Image --}}
                    <div class="w-1/4 ps-4 pt-3 flex items-start">
                        <div class="p-2 border border-black/30 rounded-lg ">
                            <div class="text-xs"><i class="fa-solid fa-circle-info"></i> &nbsp;Penting</div>
                            <span class="text-[0.7rem] text-gray-600">Gambar slider harus dengan format aspect ratio 1:1</span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Image --}}

            <div class="pb-14 w-1/2 flex justify-center mx-auto">
                <button type="submit"
                    class="w-1/2 px-6 py-3 rounded-lg border-2 text-lg font-medium text-slate-700 border-black hover:text-black hover:border-transparent hover:bg-white hover:shadow-md active:bg-slate-300 transition-all">
                    <span wire:loading.remove wire:target="store">
                        Simpan <i class="text-xs fa-solid fa-arrow-right"></i>
                    </span>

                    <span wire:loading wire:target="store">
                        Loading <i class="fa-solid fa-circle-notch fa-spin"></i>
                    </span>
            </div>
        </form>
    </div>
</div>