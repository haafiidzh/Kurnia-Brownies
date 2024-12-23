<div>
    <div>
        <form wire:submit="update">
            <div class="w-full">
                {{-- Role --}}
                <div class="mb-5 flex">
                    {{-- Deskripsi Role --}}
                    <div class="w-1/4 flex flex-row gap-2">
                        <i class="fa-solid fa-shield p-2"></i>
                        <div class="w-48 flex flex-col gap-2">

                            <div class="flex flex-row">
                                {{-- <h2 class="text-lg font-semibold">{{ ucfirst($data->group) }}</h2> --}}
                                <p class="text-lg"> &nbsp;| Peran</p>
                            </div>

                            <p class="text-sm text-slate-500 tracking-wider">Nama peran dalam sebuah sistem sesuai dengan
                                kewenangannya</p>
                        </div>
                    </div>

                    {{-- Form Role --}}
                    <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white">
                        <div class="mb-5">
                            <label for="name" class="block ml-1 font-semibold text-sm text-slate-700 ">Nama
                                Kategori</label>
                            <input
                                class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                                type="text" name="name" placeholder="Nama Kategori Produk" wire:model.lazy="name">
                            @error('name')
                                <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="w-full mb-2 flex gap-4">
                            <div class="flex-grow">
                                <label for="slug"
                                    class="block ml-1 font-semibold text-sm text-slate-700 ">Slug</label>
                                <input
                                    class="disabled w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                                    type="text" slug="slug" placeholder="Slug" wire:model="slug" disabled>
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
                        <i class="fa-solid fa-shield p-2"></i>
                        <div class="w-48 flex flex-col gap-2">

                            <div class="flex flex-row">
                                <h2 class="text-sm font-semibold">Description</h2>
                                <p class="text-sm"> &nbsp;| Deskripsi</p>
                            </div>

                            <p class="text-sm text-slate-500 tracking-wider">Nama peran dalam sebuah sistem sesuai
                                dengan
                                kewenangannya</p>
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
                        <i class="fa-regular fa-image p-2"></i>
                        <div class="w-48 flex flex-col gap-2">

                            <div class="flex flex-row">
                                <h2 class="text-lg font-semibold">Image</h2>
                                <p class="text-lg"> &nbsp;| Gambar</p>
                            </div>

                            <p class="text-sm text-slate-500 tracking-wider">Nama Produk dalam sebuah sistem sesuai
                                dengan
                                kewenangannya</p>
                        </div>
                    </div>
                    {{-- End Deskripsi Image --}}

                    {{-- Form Image --}}
                    <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white flex flex-col">
                        <div class="my-2 flex flex-col gap-3 items-center justify-center w-full">
                            {{-- @if ($image) --}}
                                <label for="image" class="cursor-pointer flex gap-2 items-center w-full">
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
                            {{-- @endif --}}
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
                </div>
            </div>
            {{-- End Image --}}

            <div class="pb-14 w-1/2 flex justify-center mx-auto">
                <button type="submit"
                    class="w-1/2 px-6 py-3 rounded-lg border-2 text-lg font-medium text-slate-700 border-black hover:text-black hover:border-transparent hover:bg-white hover:shadow-md active:bg-slate-300 transition-all">
                    <span wire:loading.remove wire:target="update">
                        Simpan <i class="text-xs fa-solid fa-arrow-right"></i>
                    </span>

                    <span wire:loading wire:target="update">
                        Loading <i class="fa-solid fa-circle-notch fa-spin"></i>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>
