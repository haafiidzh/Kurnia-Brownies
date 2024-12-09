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
                    <i class="fa-solid fa-shield p-2"></i>
                    <div class="w-48 flex flex-col gap-2">

                        <div class="flex flex-row">
                            <h2 class="text-lg font-semibold">Name</h2>
                            <p class="text-lg"> &nbsp;| Nama</p>
                        </div>

                        <p class="text-sm text-slate-500 tracking-wider">Nama Produk dalam sebuah sistem sesuai
                            dengan
                            kewenangannya</p>
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
                                <label for="recommended" class="block mb-2 font-semibold text-sm text-slate-700 ">
                                    Rekomendasi
                                </label>
                                <p class="text-xs leading-tight text-gray-600">Produk ini direkomendasikan?</p>
                                <div class="flex items-center gap-2">
                                    <span class="text-xs text-gray-800 font-bold">Biasa Saja</span>
                                    <div class="flex">
                                        <label class="mt-2 relative inline-flex cursor-pointer">
                                            <input type="checkbox" class="sr-only peer" wire:model="recommended"
                                                {{ $this->recommended == true ? 'checked' : '' }}>
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

        {{-- Start Description --}}
        <div class="w-full">
            <div class="mb-5 flex">
                {{-- Deskripsi Tentang Produk --}}
                <div class="w-1/4 flex flex-row gap-2">
                    <i class="fa-solid fa-shield p-2"></i>
                    <div class="w-48 flex flex-col gap-2">

                        <div class="flex flex-row">
                            <h2 class="text-md font-semibold">Description</h2>
                            <p class="text-md"> &nbsp;| Deskripsi</p>
                        </div>

                        <p class="text-sm text-slate-500 tracking-wider">Nama peran dalam sebuah sistem sesuai
                            dengan
                            kewenangannya</p>
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
                    <i class="fa-solid fa-shield p-2"></i>
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
                <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white">
                    <div class="my-2 flex items-center justify-center w-full">
                        <label for="dropzone-file"
                            class="dropzone flex flex-col items-center justify-center w-full h-25 border-2 border-gray-300 border-dashed rounded-3xl cursor-pointer bg-gray-50 hover:bg-gray-100">
                            {{-- Input Image --}}
                            <input id="dropzone-file" type="file" class="sr-only" wire:model="image" accept="image/*"
                                onchange="previewImage(event)" />

                            {{-- Image Preview --}}
                            <div wire:ignore id="image-preview-container" class="">
                                @if ($data->image && is_string($data->image))
                                    <img src="{{ asset('storage/' . $data->image) }}" alt="Current Image"
                                        class="rounded-3xl object-contain">
                                @else
                                    <div class="w-full pt-5 pb-6 flex flex-col items-center justify-center ">
                                        <i class="fa-solid fa-cloud-arrow-up py-2 text-gray-500 text-xl"></i>
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                class="font-semibold">Click to upload</span> or drag and drop</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF
                                            (MAX. 800x400px)</p>
                                    </div>
                                @endif
                                <img id="preview-image" alt="Image Preview"
                                    class="hidden rounded-3xl blur-md h-24 object-contain" />
                            </div>
                        </label>
                        @error('image')
                            <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End Form Image --}}
            </div>
        </div>
        {{-- End Image --}}

        {{-- Start Galeri --}}
        <div class="w-full">
            <div class="mb-5 flex">
                {{-- Deskripsi Galeri --}}
                <div class="w-1/4 flex flex-row gap-2">
                    <i class="fa-solid fa-shield p-2"></i>
                    <div class="w-48 flex flex-col gap-2">

                        <div class="flex flex-row">
                            <h2 class="text-lg font-semibold">Gallery</h2>
                            <p class="text-lg"> &nbsp;| Galeri</p>
                        </div>

                        <p class="text-sm text-slate-500 tracking-wider">Nama Produk dalam sebuah sistem sesuai
                            dengan
                            kewenangannya</p>
                    </div>
                </div>
                {{-- End Deskripsi Image --}}

                {{-- Form Galeri --}}
                <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white flex flex-col">
                    <div
                        class="{{ $newGallery ? 'gap-4' : '' }} my-2 p-4 flex flex-col items-center justify-center w-full bg-gray-300 rounded-3xl border-2 border-dashed border-gray-400 ">
                        <div class="flex flex-wrap justify-center gap-4">
                            @foreach ($currentGallery as $item)
                                <div class="w-48 flex flex-col gap-2">
                                    <img class="rounded-md" src="{{ Storage::url($item->value) }}">
                                    <div class="flex justify-center">
                                        <span
                                            class="text-xs p-2 bg-red-500 rounded-md hover:bg-red-600 transition-all duration-300 text-white cursor-pointer"
                                            wire:click="deleteCurrentItem({{ $item->id }})">
                                            Hapus
                                        </span>
                                    </div>

                                </div>
                            @endforeach
                        </div>

                        <div class="w-full flex flex-wrap justify-center gap-4 {{ $currentGallery->count() == 0 ? '' : 'mt-4 pt-4 border-dashed border-t-2 border-gray-400' }}">
                            <div class="w-full flex justify-center">
                                <label for="gallery" class="cursor-pointer">
                                    <p
                                        class="p-3 tracking-wider bg-slate-800 text-white uppercase text-sm rounded-md hover:bg-green-500 transition-all duration-300">
                                        Click to Upload {{ $currentGallery->count() == 0 ? '' : 'New' }} Files</p>
                                </label>
                                <input class="hidden" id="gallery" type="file" wire:model="newGallery" multiple>
                            </div>
                            @foreach ($newGallery as $item)
                                <div class="w-48 flex flex-col gap-2">
                                    <img class="rounded-md" src="{{ $item->temporaryUrl() }}">
                                    <div class="flex justify-center">
                                        <span
                                            class="text-xs p-2 bg-red-500 rounded-md hover:bg-red-600 transition-all duration-300 text-white cursor-pointer"
                                            wire:click="deleteItem({{ $loop->index }})">
                                            Hapus
                                        </span>
                                    </div>

                                </div>
                            @endforeach
                        </div>

                    </div>
                    {{-- End Form Galeri --}}
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

    {{-- Script untuk drag n drop image --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropzone = document.querySelector('.dropzone'); // Menggunakan class .dropzone
            const fileInput = document.getElementById('dropzone-file');
            const imagePreview = document.getElementById('image-preview');

            dropzone.addEventListener('dragover', function(e) {
                e.preventDefault();
                dropzone.classList.add('border-indigo-600'); // Tambah efek border saat drag
            });

            dropzone.addEventListener('dragleave', function(e) {
                e.preventDefault();
                dropzone.classList.remove('border-indigo-600'); // Hilangkan efek border saat drag leave
            });

            dropzone.addEventListener('drop', function(e) {
                e.preventDefault();
                dropzone.classList.remove('border-indigo-600'); // Hilangkan efek border saat drop
                const files = e.dataTransfer.files;
                fileInput.files = files; // Set file input dengan file yang di-drop
                fileInput.dispatchEvent(new Event('change', {
                    'bubbles': true
                })); // Trigger event change
                previewImage(files[0]); // Preview gambar setelah file di-drop
            });

            dropzone.addEventListener('click', function() {
                fileInput.click(); // Buka file explorer saat klik dropzone
            });

            fileInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    previewImage(file); // Preview gambar saat file di-upload
                }
            });

            function previewImage(file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result; // Set src dari image preview
                    imagePreview.classList.remove('hidden'); // Tampilkan image preview
                };
                reader.readAsDataURL(file); // Baca file gambar
            }
        });

        function previewImage(event) {
            const input = event.target;
            const container = document.getElementById('image-preview-container');
            const preview = document.getElementById('preview-image');
            const file = input.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    // Ganti konten div dengan gambar baru
                    container.innerHTML =
                        `<img src="${e.target.result}" alt="Image Preview" class="rounded-3xl" />`;
                }
                reader.readAsDataURL(file);
            } else {
                // Jika tidak ada file, kembalikan konten div awal
                container.innerHTML = `
                <div class="w-full pt-5 pb-6 flex flex-col items-center justify-center ">
                    <i class="fa-solid fa-cloud-arrow-up py-2 text-gray-500 text-xl"></i>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                            class="font-semibold">Click to upload</span> or drag and drop</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                        800x400px)</p>
                </div>`;
            }
        }
    </script>
@endpush
