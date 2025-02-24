@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
@endpush

<div>
    <form wire:submit="store">
        {{-- Start Name --}}
        <div class="w-full">
            <div class="mb-5 flex">
                {{-- Deskripsi Nama Produk --}}
                <div class="w-1/4 flex flex-row gap-2">
                    <div class="h-6 w-6 flex justify-center items-center">
                        <i class="fa-solid fa-newspaper"></i>
                    </div>
                    <div class="w-48 flex flex-col gap-2">

                        <div class="flex flex-row">
                            <h2 class=" font-semibold">About</h2>
                            <p class=""> &nbsp;| Tentang</p>
                        </div>

                        <p class="text-sm text-slate-500 tracking-wider">
                            Penjelasan singkat tentang berita terkait.
                        </p>
                    </div>
                </div>
                {{-- End Deskripsi Nama Produk --}}

                {{-- Form Nama Produk --}}
                <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white">
                    <div class="mb-5">
                        <label for="title" class="block ml-1 font-semibold text-sm text-slate-700 ">Judul</label>
                        <input
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="text" name="title" placeholder="Judul Berita" wire:model.lazy="title">
                        @error('title')
                            <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="slug" class="block ml-1 font-semibold text-sm text-slate-700 ">Slug</label>
                        <input
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl text-slate-600 placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="text" name="slug" placeholder="Slug akan digenerate secara otomatis"
                            wire:model="slug" disabled>
                        @error('slug')
                            <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="subject" class="block ml-1 font-semibold text-sm text-slate-700 ">Subject</label>
                        <input
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl text-slate-600 placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="text" name="subject" placeholder="Subjek Berita"
                            wire:model="subject" >
                        @error('subject')
                            <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label for="keywords" class="block ml-1 font-semibold text-sm text-slate-700 ">Kata Kunci</label>
                        <input
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl text-slate-600 placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="text" name="keywords" placeholder="Kata Kunci Berita (Keywords)"
                            wire:model="keywords" >
                        @error('keywords')
                            <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End Form Nama Produk --}}

                <div class="w-1/4 ps-4 flex items-start overflow-hidden">
                    <div class="p-2 h-[390px] overflow-auto custom-scrollbar border border-black/30 rounded-lg">
                        <div class="text-xs"><i class="fa-solid fa-circle-info"></i> &nbsp;Penting</div>
                        <span class="text-[0.7rem] text-gray-600">
                            <span class="font-semibold">Judul</span> buatlah semenarik mungkin dan pastikan judul mengandung kata kunci atau sebaliknya.
                            <br>
                            cth: 
                            <br> Judul : Lezat & Lumer! 10 Menu Brownies Kurnia Paling Favorit
                            <br> Kata Kunci : brownies kurnia, brownies, brownies lezat, brownies lumer
                            <br>
                            <span class="font-semibold">Kata Kunci</span> diperlukan untuk optimasi SEO berita Anda. Gunakan kata kunci yang paling berkaitan dengan berita Anda. Format penulisan harus huruf kecil semua (lowercase) dan dipisahkan dengan koma (,) dan spasi.
                            <br>
                            cth: resep brownies, cara membuat, resep diy, brownies
                        </span>
                        <div class="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Name --}}

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
                            Isi dari berita.
                        </p>
                    </div>
                </div>

                {{-- Form Deskripsi Produk --}}
                <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white">
                    <div wire:ignore>
                        <label for="description" class="block ml-1 font-semibold text-sm text-slate-700 ">Tentang
                            Berita</label>
                        <textarea rows="7" id="summernote"
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="text" name="description" placeholder="Deskripsi Produk" wire:model="description">
                        </textarea>
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
                        <i class="fa-solid fa-image "></i>
                    </div>
                    <div class="w-48 flex flex-col gap-2">

                        <div class="flex flex-row">
                            <h2 class=" font-semibold">Image</h2>
                            <p class=""> &nbsp;| Gambar</p>
                        </div>

                        <p class="text-sm text-slate-500 tracking-wider">
                            Gambar untuk media dalam berita terkait.
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

        {{-- Start Button Submit --}}
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
