@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
@endpush

<div class="flex gap-5 mb-5">
    
    <div class="w-1/4">
        <div class="bg-white py-6 rounded-xl shadow-lg">
            <div class="pb-3 px-6">
                <h1 class="font-semibold text-xl tracking-wider">Identitas</h1>
            </div>
            <div class="w-full border-slate-700 border-b"></div>
            <div class="px-6 pt-3">
                <div class="pb-3 ">
                    <h3 class="font-semibold">Nama Depan</h3>
                    <p class="">{{ $data->first_name }}</p>
                </div>
                <div class="pb-3 ">
                    <h3 class="font-semibold">Nama Belakang</h3>
                    <p class="">{{ $data->last_name }}</p>
                </div>
                <div class="pb-3 ">
                    <h3 class="font-semibold">Email</h3>
                    <p class="break-words">{{ $data->email }}</p>
                </div>
                <div class="">
                    <h3 class="font-semibold">No. Telepon</h3>
                    <p class="">{{ $data->phone }}</p>
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="w-3/4 flex flex-col gap-6">
        <div class="bg-white py-6 rounded-xl shadow-lg">
            <div class="pb-3 px-6">
                <h1 class="font-semibold text-xl tracking-wider">Balas</h1>
            </div>
            <div class="w-full border-slate-700 border-b"></div>
            <div class="pt-3 px-6">
                <div class="relative">
                    <form wire:submit.prevent="sendReply">
                        <div wire:ignore >
                            <textarea rows="7" id="summernote"
                                class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                                type="text" name="description" placeholder="Deskripsi Produk" wire:model="reply">
                                    </textarea>
                        </div>
                        <button type="submit" wire:target="sendReply" wire:loading.class="pointer-events-none" class="cursor-pointer absolute -bottom-10 border-2 border-slate-700 text-sm right-4 px-3 py-2 rounded-lg bg-white drop-shadow-md hover:bg-gray-100 hover:border-transparent transition-colors duration-300 active:bg-gray-300">
                            Kirim &nbsp;<i wire:target="sendReply" wire:loading.class="fa-solid fa-circle-notch animate-spin" wire:loading.class.remove="fa-regular fa-paper-plane" class="fa-regular fa-paper-plane"></i>
                        </button>
                    </form>
                    
                </div>
                
            </div>
        </div>
        <div class="bg-white py-6 rounded-xl shadow-lg">
            <div class="pb-3 px-6">
                <h1 class="font-semibold text-xl tracking-wider">Pesan</h1>
            </div>
            <div class="w-full border-slate-700 border-b"></div>
            <div class="pt-3 px-6">
                <p class="leading-relaxed">{{ $message }}</p>
            </div>
        </div>
    </div>

    
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
                    @this.set('reply', contents);
                }
            }

        });
    </script>
@endpush