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
                    
                </div>
                {{-- End Form Nama Produk --}}
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
                            <h2 class=" font-semibold">Description</h2>
                            <p class=""> &nbsp;| Deskripsi</p>
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
            </div>
        </div>
        {{-- End Image --}}

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
