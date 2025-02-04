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

@push('scripts')
    {{-- Drag N Drop image
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropzone = document.querySelector('.dropzones'); // Menggunakan class .dropzone-
            const fileInput = document.getElementById('dropzone-primary-image');
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
            const preview = document.getElementById('preview-image-primary');
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
    </script> --}}
@endpush
