<div>
    <div>
        <form wire:submit="store">
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
                                Judul slider unik yang menarik.
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
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full">
                {{-- Description --}}
                <div class="mb-5 flex">
                    {{-- Deskripsi Description --}}
                    <div class="w-1/4 flex flex-row gap-2">
                        <div class="h-6 w-6 flex justify-center items-center">
                            <i class="fa-solid fa-audio-description"></i>
                        </div>
                        <div class="w-48 flex flex-col gap-2">

                            <div class="flex flex-row">
                                <h2 class="text-md font-semibold">Description</h2>
                                <p class="text-md"> &nbsp;| Deskripsi</p>
                            </div>

                            <p class="text-sm text-slate-500 tracking-wider">
                                Deskripsi slider untuk keterangan singkat.
                            </p>
                        </div>
                    </div>

                    {{-- Form Description --}}
                    <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white">
                        <label for="description" class="block ml-1 font-semibold text-sm text-slate-700 ">
                            Deskripsi
                        </label>
                        <textarea
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            name="description" placeholder="Deskripsi Slider" wire:model="description">
                        </textarea>
                        @error('description')
                            <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                        @enderror
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
                            @if ($image)
                                    <label for="image" class="cursor-pointer flex gap-2 items-center w-full">
                                        <div
                                            class="text-white rounded-md bg-slate-700 px-4 py-1 text-sm tracking-widest hover:bg-green-500 transition-all uppercase">
                                            Ganti</div>
                                        <i wire:loading wire:target="image"
                                            class="fa-brands fa-cloudsmith animate-spin text-gray-500 text-xl"></i>
                                        <p wire:loading wire:target="image"
                                            class="text-sm text-gray-500 animate-pulse dark:text-gray-400">Uploading...
                                        </p>
                                        <input class="sr-only" type="file" accept="image/*" id="image"
                                            wire:model="image">
                                    </label>
                            @endif
                            <div class="border-2 border-gray-400 border-dashed rounded-2xl w-full relative">
                                @if ($image)
                                    <img class="rounded-2xl" src="{{ $image->temporaryUrl() }}" alt="">
                                @else
                                    <input class="sr-only" type="file" accept="image/*" id="image"
                                        wire:model="image">
                                    <label for="image"
                                        class="flex flex-col items-center rounded-2xl bg-gray-200 hover:bg-gray-300 transition-all py-5 cursor-pointer">
                                        {{-- Upload --}}
                                        <i wire:loading.remove wire:target="image"
                                            class="fa-solid fa-cloud-arrow-up py-2 text-gray-500 text-xl"></i>
                                        <p wire:loading.remove wire:target="image"
                                            class="text-sm text-gray-500 dark:text-gray-400">Klik untuk upload gambar
                                        </p>
                                        {{-- Loading --}}
                                        <i wire:loading wire:target="image"
                                            class="fa-brands fa-cloudsmith animate-spin py-2 text-gray-500 text-xl"></i>
                                        <p wire:loading wire:target="image"
                                            class="text-sm text-gray-500 animate-pulse dark:text-gray-400">Uploading...
                                        </p>
                                    </label>
                                @endif
                            </div>
                        </div>
                        @error('image')
                            <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- End Form Image --}}
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
                </button>
            </div>
        </form>
    </div>
</div>
