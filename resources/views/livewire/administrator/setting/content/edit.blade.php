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
                            <h2 class="text-lg font-semibold">{{ ucwords(str_replace('_',' ',$data->group)) }}</h2>
                        </div>

                        <p class="text-sm text-slate-500 tracking-wider">
                            Pengaturan terkait isi konten di halaman depan.
                        </p>
                    </div>
                </div>

                {{-- Form Role --}}
                <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white">
                    <div class="mb-2">
                        <label for="value"
                            class="block ml-1 font-semibold text-sm text-slate-700 ">{{ $data->label }}</label>
                        @switch($data->type)
                            @case('image')
                                <div class="my-2 flex flex-col gap-3 items-center justify-center w-full">
                                    <div class="w-full flex">
                                        <label for="image" class="cursor-pointer flex gap-2 items-center">
                                            <div
                                                class="text-white rounded-md bg-slate-700 px-4 py-1 text-sm tracking-widest hover:bg-green-500 transition-all uppercase">
                                                Ganti</div>
                                            <i wire:loading wire:target="newValue"
                                                class="fa-brands fa-cloudsmith animate-spin text-gray-500 text-xl"></i>
                                            <p wire:loading wire:target="newValue"
                                                class="text-sm text-gray-500 animate-pulse dark:text-gray-400">Uploading...
                                            </p>
                                            <input class="sr-only" type="file" accept="image/*" id="image"
                                                wire:model="newValue">
                                        </label>
                                    </div>

                                    <div class="border-2 border-gray-400 border-dashed rounded-2xl w-full relative">
                                        @if ($newValue)
                                            <img class="rounded-2xl" src="{{ $newValue->temporaryUrl() }}" alt="">
                                        @else
                                            <img class="rounded-2xl" src="{{ url($value) }}?v={{ time() }}" alt="">
                                        @endif
                                    </div>
                                </div>
                                @error('value')
                                    <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                                @enderror
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
                @if ($this->tip)
                <div class="w-1/4 ps-4 flex items-start">
                    <div class="p-2 border border-black/30 rounded-lg ">
                        <div class="text-xs"><i class="fa-solid fa-circle-info"></i> &nbsp;Tips</div>
                        <span class="text-[0.7rem] text-gray-600">{{ $tip }}</span>
                    </div>
                </div>
                @endif
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
@endpush
