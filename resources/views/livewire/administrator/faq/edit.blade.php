@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
@endpush

<div>
    <form wire:submit="update">
        {{-- Start Question --}}
        <div class="w-full">
            <div class="mb-5 flex">
                {{-- Deskripsi Question --}}
                <div class="w-1/4 flex flex-row gap-2">
                    <div class="h-6 w-6 flex justify-center items-center">
                        <i class="fa-solid fa-question "></i>
                    </div>
                    <div class="w-48 flex flex-col gap-2">

                        <div class="flex flex-row">
                            <h2 class="text-md font-semibold">Question</h2>
                            <p class="text-md"> &nbsp;| Pertanyaan</p>
                        </div>

                        <p class="text-sm text-slate-500 tracking-wider">
                            Pertanyaan yang sering ditanyakan.
                        </p>
                    </div>
                </div>
                {{-- End Deskripsi Question --}}

                {{-- Form Question --}}
                <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white">
                    <div class="mb-5">
                        <label for="title" class="block ml-1 font-semibold text-sm text-slate-700 ">Pertanyaan</label>
                        <input
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="text" name="title" placeholder="Pertanyaan" wire:model.lazy="question">
                        @error('question')
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
                </div>
                {{-- End Form Question --}}
            </div>
        </div>
        {{-- End Name --}}

        {{-- Start Answer --}}
        <div class="w-full">
            <div class="mb-5 flex">
                {{-- Deskripsi Answer --}}
                <div class="w-1/4 flex flex-row gap-2">
                    <div class="h-6 w-6 flex justify-center items-center">
                        <i class="fa-solid fa-comment "></i>
                    </div>
                    <div class="w-48 flex flex-col gap-2">

                        <div class="flex flex-row">
                            <h2 class="text-md font-semibold">Answer</h2>
                            <p class="text-md"> &nbsp;| Jawaban</p>
                        </div>

                        <p class="text-sm text-slate-500 tracking-wider">
                            Jawaban dari pertanyaan terkait.
                        </p>
                    </div>
                </div>

                {{-- Form Answer --}}
                <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white">
                    <div wire:ignore>
                        <label for="answer" class="block ml-1 font-semibold text-sm text-slate-700 ">
                            Jawaban
                        </label>
                        <textarea rows="7" id="summernote"
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="text" name="answer" placeholder="Jawaban dari pertanyaan di atas" wire:model="answer">
                            {!! $data->answer !!}</textarea>
                    </div>
                    @error('answer')
                        <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                    @enderror
                </div>
                {{-- End Form Answer --}}
            </div>
        </div>
        {{-- End Answer --}}

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
                    @this.set('answer', contents);
                }
            }
        });
    </script>
@endpush
