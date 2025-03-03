<div>
    {{-- Session Flash Message --}}
    <x-flash-message></x-flash-message>

    <div class="w-full">
        <div class="w-full bg-slate-100 rounded-xl shadow-md overflow-hidden">
            <div class="p-2">
                <div class="p-1 flex justify-end ">
                    <div class="flex gap-2 items-center">
                        <i class="fas fa-search text-sm"></i>
                        <input placeholder="Cari Berita..." id="search" type="text" class="text-sm p-1 rounded"
                            wire:model.live="search">
                    </div>
                </div>
            </div>
            <table class="w-full">
                <thead class="bg-gray-300 text-sm text-left">
                    <th class="px-1 py-2 w-7 text-center"></th>
                    <th class="px-4 py-2 w-40 text-center">Judul</th>
                    <th class="px-4 py-2 w-48 text-center">Gambar</th>
                    <th class="px-4 py-2 w-20 text-center">Status</th>
                    <th class="px-4 py-2 text-center">Dibuat Pada</th>
                    <th class="px-4 py-2 w-14 text-center">Action</th>
                </thead>
                <tbody class="text-sm">
                    @forelse ($news as $index => $data)
                        <tr class="hover:bg-gray-200 {{ $loop->last ? '' : 'border-b border-gray-200' }}">
                            <td class="px-1 py-2 text-center">{{ $news->firstItem() + $index }}</td>
                            <td class="px-4 py-2 text-left">{{ $data->title }}</td>
                            <td class="px-4 py-2 text-left">
                                <div x-data="{ preview: false, scrollPosition: 0 }">
                                    <div class="relative group rounded-lg overflow-hidden">
                                        <img class="object-cover transition-all group-hover:blur-[2px] duration-300 w-full h-[100px]"
                                            src="{{ url($data->image) }}?v={{ time() }}">
                    
                                        <div class="absolute inset-0 flex justify-center items-center group-hover:visible invisible">
                                            <a href="javascript:void(0)"
                                            @click="preview = !preview;  if (preview) { scrollPosition = window.scrollY }">
                                                <div class="h-8 w-8 flex justify-center items-center rounded-full border-2 bg-slate-200 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent active:bg-slate-400">
                                                    <i class="fa-solid fa-eye text-xs"></i>
                                                </div>
                                            </a>
                                        </div>

                                        {{-- Preview Image --}}
                                        <div x-show="preview" 
                                            x-cloak
                                            x-transition:enter="transition translate-y-0 ease-out duration-200"
                                            x-transition:enter-start="opacity-0 bottom-10" x-transition:enter-end="opacity-100 bottom-0 "
                                            x-transition:leave="transition translate-y-0 ease-in duration-200" x-transition:leave-start="opacity-100"
                                            x-transition:leave-end="opacity-0"
                                            class="fixed w-full h-screen left-0 top-0 z-50 flex justify-center items-center bg-black/10">
                                            <div class="flex flex-col bg-white shadow-md rounded-md">
                                                <div class="p-4 border-b border-gray-300 flex items-center justify-between ">
                                                    <span class="font-bold text-slate-800 text-lg">Preview Image</span>
                                                    <span @click="preview = false; window.scrollTo(0, scrollPosition)"
                                                        class="p-2 cursor-pointer hover:bg-gray-200 hover:rounded-md">
                                                        <i class="fa-solid fa-x"></i>
                                                    </span>
                                                </div>
                                                <div class="p-5">
                                                    <img class="rounded-md" src="{{ url($data->image) }}?v={{ time() }}" style="max-height: 480px;"
                                                        alt="{{ $data->name }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-2 text-left">
                                @if ($data->is_active == true)
                                    <span onclick="confirmActive('{{ $data->id }}')"
                                        class="text-green-600 cursor-pointer text-sm">
                                        <i class="fa-solid fa-circle-check"></i> Aktif
                                    </span>
                                @elseif ($data->is_active == false)
                                    <span onclick="confirmActive('{{ $data->id }}')"
                                        class="text-gray-500 cursor-pointer text-sm">
                                        <i class="fa-solid fa-circle-info"></i> Tidak Aktif
                                    </span>
                                @endif
                            </td>

                            <td class="w-28 px-4 py-2 text-left">{{ dateTimeTranslated($data->created_at) }}
                            </td>
                            <td class="px-4 py-2">
                                <div class="flex gap-1 justify-center">
                                    @can('detail-news')
                                        <a href="{{ route('administrator.news.detail', ['id' => $data->id]) }}"
                                            class="w-7 h-7 flex justify-center items-center rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400">
                                            <i class="fa-solid fa-eye text-xs "></i>
                                        </a>
                                    @endcan
                                    @can('edit-news')
                                        <a href="{{ route('administrator.news.edit', ['id' => $data->id]) }}"
                                            class="w-7 h-7 flex justify-center items-center rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400">
                                            <i class="fa-solid fa-eye-dropper text-xs"></i>
                                        </a>
                                    @endcan
                                    @can('delete-news')
                                        <div onclick="confirmDelete('{{ $data->id }}')"
                                            {{-- INI PENTING --}} {{-- Jika pakai uuid pastikan untuk berikan '' sebelum  {{ $data->id }} --}} {{-- seperti ini '{{ $data->id }}' --}}
                                            class="w-7 h-7 cursor-pointer flex justify-center items-center rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400">
                                            <i class="fa-solid fa-trash text-xs"></i>    
                                        </div>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center py-3">Data yang kamu cari tidak kami temukan</td>
                        </tr>
                        @endforelse
                    

                </tbody>
            </table>
        </div>
        <div class="my-5">
            {{ $news->onEachSide(1)->links('vendor.livewire.tailwind') }}
        </div>
    </div>

</div>


@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmActive(id) {
            Swal.fire({
                text: "Anda yakin ingin mengubah status berita ini?",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Gas',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.call('togglePublished', id);
                }
            })
        };

        function confirmDelete(id) {
            Swal.fire({
                title: 'Yakin Bos?',
                text: "Data tidak dapat dikembalikan setelah dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.call('delete', id)
                }
            })
        };
    </script>
@endpush
