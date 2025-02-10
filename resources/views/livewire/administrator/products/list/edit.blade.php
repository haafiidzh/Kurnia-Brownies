@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
@endpush

<div>
    <form wire:submit="update">
        {{-- Start Name --}}
        <div class="w-full">
            <div class="mb-5 flex">
                {{-- Deskripsi Nama Produk --}}
                <div class="w-1/4 flex flex-row gap-2">
                    <div class="h-6 w-6 flex justify-center items-center">
                        <i class="fa-solid fa-heading"></i>
                    </div>
                    
                    <div class="w-48 flex flex-col gap-2">

                        <div class="flex flex-row">
                            <h2 class="text-lg font-semibold">Name</h2>
                            <p class="text-lg"> &nbsp;| Nama</p>
                        </div>

                        <p class="text-sm text-slate-500 tracking-wider">
                            Nama produk Anda.

                        </p>
                    </div>
                </div>
                {{-- End Deskripsi Nama Produk --}}

                {{-- Form Nama Produk --}}
                <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white">
                    <div class="mb-5">
                        <label for="name" class="block ml-1 font-semibold text-sm text-slate-700 ">Nama
                            Produk</label>
                        <input
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="text" name="name" placeholder="Nama Produk" wire:model.lazy="name">
                        @error('name')
                            <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="slug" class="block ml-1 font-semibold text-sm text-slate-700 ">Slug</label>
                        <input
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl text-slate-600 placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="text" slug="slug" placeholder="Slug akan digenerate secara otomatis"
                            wire:model="slug" disabled>
                        @error('slug')
                            <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-full flex gap-4">
                        <div class="w-3/5 mb-2 flex gap-4">
                            <div class="flex-grow">
                                <label for="category_id"
                                    class="block ml-1 font-semibold text-sm text-slate-700 ">Kategori</label>
                                <select
                                    class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                                    name="category_id" wire:model="category_id">
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="w-2/5 mb-2 flex gap-4">
                            <div class="flex-grow">
                                <label for="best_seller" class="block mb-2 font-semibold text-sm text-slate-700 ">
                                    Best Seller
                                </label>
                                <p class="text-xs leading-tight text-gray-600">Produk ini Best Seller?</p>
                                <div class="flex items-center gap-2 mt-2">
                                    <span class="text-xs text-gray-800 font-bold">Biasa Saja</span>
                                    <div class="flex">
                                        <label class="relative inline-flex cursor-pointer">
                                            <input type="checkbox" class="sr-only peer" wire:model="best_seller"
                                                {{ $this->best_seller == true ? 'checked' : '' }}>
                                            <div {{-- ini TARGET  --}}
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
                {{-- End Form Nama Produk --}}
            </div>
        </div>
        {{-- End Name --}}

        {{-- Start Short Description --}}
        <div class="w-full">
            <div class="mb-5 flex">
                {{-- Deskripsi Tentang Produk --}}
                <div class="w-1/4 flex flex-row gap-2">
                    <div class="h-6 w-6 flex justify-center items-center">
                        <i class="fa-solid fa-comment"></i>
                    </div>
                    <div class="w-48 flex flex-col gap-2">

                        <div class="flex flex-col">
                            <h2 class="text-base font-semibold">Short Description</h2>
                            <div class="border-t border-black w-[75%]"></div>
                            <p class="text-base">Deskripsi Singkat</p>
                        </div>

                        <p class="text-sm text-slate-500 tracking-wider">
                            Deskripsi singkat mengenai produk Anda.
                        </p>
                    </div>
                </div>

                {{-- Form Short Deskripsi Produk --}}
                <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white">
                    <div>
                        <label for="description" class="block ml-1 font-semibold text-sm text-slate-700 ">Deskripsi Singkat
                            Produk</label>
                        <textarea rows="3"
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="text" name="description" placeholder="Deskripsi Singkat" wire:model="short_description">
                        </textarea>
                    </div>
                    @error('short_description')
                        <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                    @enderror
                </div>
                {{-- End Form Short Deskripsi Produk --}}
            </div>
        </div>
        {{-- End Short Description --}}

        {{-- Start Description --}}
        <div class="w-full">
            <div class="mb-5 flex">
                {{-- Deskripsi Tentang Produk --}}
                <div class="w-1/4 flex flex-row gap-2">
                    <div class="h-6 w-6 flex justify-center items-center">
                        <i class="fa-solid fa-message"></i>
                    </div>
                    <div class="w-48 flex flex-col gap-2">

                        <div class="flex flex-row">
                            <h2 class="text-md font-semibold">Description</h2>
                            <p class="text-md"> &nbsp;| Deskripsi</p>
                        </div>

                        <p class="text-sm text-slate-500 tracking-wider">
                            Deskripsi singkat mengenai produk Anda.
                        </p>
                    </div>
                </div>

                {{-- Form Deskripsi Produk --}}
                <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white">
                    <div wire:ignore>
                        <label for="description" class="block ml-1 font-semibold text-sm text-slate-700 ">Tentang
                            Produk</label>
                        <textarea rows="7" id="summernote"
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="text" name="description" placeholder="Deskripsi Produk" wire:model="description">
                            {!! $data->description !!}</textarea>
                    </div>
                    @error('description')
                        <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                    @enderror
                </div>
                {{-- End Form Deskripsi Produk --}}
            </div>
        </div>
        {{-- End Description --}}

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
                            <h2 class="text-lg font-semibold">Image</h2>
                            <p class="text-lg"> &nbsp;| Gambar</p>
                        </div>

                        <p class="text-sm text-slate-500 tracking-wider">
                            Gambar terkait produk Anda.
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

                <div class="w-1/4 ps-4 flex items-start">
                    <div class="p-2 border border-black/30 rounded-lg ">
                        <div class="text-xs"><i class="fa-solid fa-circle-info"></i> &nbsp;Penting</div>
                        <span class="text-[0.7rem] text-gray-600">Upload gambar dengan format .png (disarankan menggunakan aspect ratio 1:1 atau 9:16/potrait)</span>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Image --}}

        {{-- Start Galeri --}}
        <div class="w-full">
            <div class="mb-5 flex">
                {{-- Deskripsi Galeri --}}
                <div class="w-1/4 flex flex-row gap-2">
                    <div class="h-6 w-6 flex justify-center items-center">
                        <i class="fa-solid fa-images"></i>
                    </div>
                    <div class="w-48 flex flex-col gap-2">

                        <div class="flex flex-row">
                            <h2 class="text-lg font-semibold">Gallery</h2>
                            <p class="text-lg"> &nbsp;| Galeri</p>
                        </div>

                        <p class="text-sm text-slate-500 tracking-wider">
                            Galeri adalah tempat untuk menampilkan foto-foto yang menarik dari produk Anda.
                        </p>
                    </div>
                </div>
                {{-- End Deskripsi Image --}}

                {{-- Form Galeri --}}
                <div class="w-1/2 px-6 py-4 shadow-md rounded-2xl bg-white flex flex-col">
                    <div
                        class="{{ $newGallery ? 'gap-4' : '' }} my-2 p-4 flex flex-col items-center justify-center w-full bg-gray-300 rounded-3xl border-2 border-dashed border-gray-400 ">
                        <div class="flex flex-wrap justify-center gap-4">
                            @foreach ($currentGallery as $item)
                                @php
                                    $isDeleted = in_array($item->id, $deletedGallery);
                                @endphp
                                <div class="w-48 flex flex-col gap-2 relative" wire:loading.class="cursor-wait">
                                    <img class="rounded-md {{ $isDeleted ? 'opacity-50' : '' }}"
                                        src="{{ url($item->value) }}">

                                    @if ($isDeleted)
                                        <div title="Batal Hapus" wire:click="restoreOldItem('{{ $item->id }}')"
                                            class="absolute top-2 right-2 h-6 w-6 bg-green-500 hover:bg-green-600 transition-all duration-300 flex justify-center items-center rounded-full text-gray-200 text-xs shadow-sm active:text-gray-400 cursor-pointer">
                                            <i class="fa-solid fa-angles-up"></i>
                                        </div>
                                    @else
                                        <div title="Hapus" wire:click="deleteOldItem('{{ $item->id }}')"
                                            class="absolute top-2 right-2 h-6 w-6 bg-red-500 hover:bg-red-600 transition-all duration-300 flex justify-center items-center rounded-full text-gray-200 text-xs shadow-sm active:text-gray-400 cursor-pointer">
                                            <i class="fa-solid fa-x"></i>
                                        </div>
                                    @endif

                                </div>
                            @endforeach
                        </div>

                        <div
                            class="w-full flex flex-wrap justify-center gap-4 {{ $currentGallery->count() == 0 ? '' : 'mt-4 pt-4 border-dashed border-t-2 border-gray-400' }}">
                            <div class="w-full flex justify-center">
                                <label for="gallery" class="cursor-pointer">
                                    <p
                                        class="p-3 tracking-wider bg-slate-800 text-white uppercase text-sm rounded-md hover:bg-green-500 transition-all duration-300">
                                        Click to Upload {{ $currentGallery->count() == 0 ? '' : 'New' }} Files</p>
                                </label>
                                <input class="hidden" id="gallery" type="file" wire:model="newGallery"
                                    multiple>
                            </div>
                            @foreach ($newGallery as $item)
                                <div class="w-48 flex flex-col gap-2 relative">
                                    <img class="rounded-md" src="{{ $item->temporaryUrl() }}">
                                    <div title="Hapus" wire:click="deleteNewItem({{ $loop->index }})"
                                        class="absolute top-2 right-2 h-6 w-6 bg-red-500 hover:bg-red-600 transition-all duration-300 flex justify-center items-center rounded-full text-gray-200 text-xs shadow-sm active:text-gray-400 cursor-pointer">
                                        <i class="fa-solid fa-x"></i>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                {{-- End Form Galeri --}}

                <div class="w-1/4 ps-4 flex items-start">
                    <div class="p-2 border border-black/30 rounded-lg ">
                        <div class="text-xs"><i class="fa-solid fa-circle-info"></i> &nbsp;Penting</div>
                        <span class="text-[0.7rem] text-gray-600">Upload gambar dengan format .png (disarankan menggunakan aspect ratio 1:1 atau 16:9/landscape)</span>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Galeri --}}

        {{-- Start Button Submit --}}
        <div class="pb-14 w-1/2 flex justify-center mx-auto">
            <button type="submit"
                class="w-1/2 px-6 py-3 rounded-lg border-2 text-lg font-medium text-slate-700 border-black hover:text-black hover:border-transparent hover:bg-white hover:shadow-md active:bg-slate-300 transition-all">
                <span wire:loading.remove wire:target="update">
                    Simpan <i class="text-xs fa-solid fa-arrow-right"></i>
                </span>

                <span wire:loading wire:target="update">
                    Loading <i class="fa-solid fa-circle-notch fa-spin"></i>
                </span>
        </div>
        {{-- End Button Submit --}}
    </form>
</div>


@push('scripts')
    {{-- Text Editor --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
    <script>
        $('#summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
            ],
            callbacks: {
                onChange: function(contents, $editable) {
                    @this.set('description', contents);
                }
            }

        });
    </script>
@endpush
