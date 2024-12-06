@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
@endpush

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
                            <h2 class="text-lg font-semibold">{{ ucfirst($data->group) }}</h2>
                            <p class="text-lg"> &nbsp;| Peran</p>
                        </div>

                        <p class="text-sm text-slate-500 tracking-wider">Nama peran dalam sebuah sistem sesuai dengan
                            kewenangannya</p>
                    </div>
                </div>

                {{-- Form Role --}}
                <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white">
                    <div class="mb-2">
                        <label for="value"
                            class="block ml-1 font-semibold text-sm text-slate-700 ">{{ $data->label }}</label>
                        @switch($data->type)
                            @case('image')
                                <div class="my-2 flex items-center justify-center w-full">
                                    <label for="dropzone-file"
                                        class="dropzone flex flex-col items-center justify-center w-full h-25 border-2 border-gray-300 border-dashed rounded-3xl cursor-pointer bg-gray-50 hover:bg-gray-100">
                                        {{-- Input Image --}}
                                        <input id="dropzone-file" type="file" class="sr-only" wire:model="value"
                                            accept="image/*" onchange="previewImage(event)" />

                                        {{-- Image Preview --}}
                                        <div wire:ignore id="image-preview-container" class="">
                                            @if ($data->value && is_string($data->value))
                                                <img src="{{ asset('storage/' . $data->value) }}" alt="Current Image"
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
                                    @error('value')
                                        <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                                    @enderror
                                </div>
                            @break

                            @case('input')
                                <input
                                    class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                                    type="text" id="value" name="value" placeholder="web" wire:model="value">
                                @error('value')
                                    <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                                @enderror
                            @break

                            @case('textarea')
                                <div wire:ignore>
                                <textarea rows="7" id="summernote"
                                    class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                                    type="text" id="value" name="value" placeholder="web" wire:model="value">{{ $data->value }}</textarea>
                                </div>   
                                @error('value')
                                    <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                                @enderror
                            @break

                            @default
                        @endswitch

                    </div>
                </div>
            </div>
        </div>

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
                    @this.set('value', contents);
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