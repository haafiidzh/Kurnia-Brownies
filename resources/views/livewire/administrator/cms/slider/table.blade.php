
<div>
    {{-- Session Flash Message --}}
    <x-flash-message></x-flash-message>

    <div class="w-full">
        <div class="w-full bg-slate-100 rounded-xl shadow-md">
            <div class="p-2">
                    <div class="flex gap-2 items-center justify-end">
                        <i class="fas fa-search text-sm"></i>
                        <input placeholder="Cari Slider..." id="search" type="text" class="text-sm p-1 rounded"
                            wire:model.live="search">
                    </div>
            </div>
            <table class="w-full">
                <thead class="bg-gray-300 text-sm">
                    <th class="px-1 py-2 text-center w-10"></th>
                    <th class="px-1 py-2 text-center w-5">Pos.</th>
                    <th class="px-4 py-2 text-center w-24">Judul</th>
                    <th class="px-4 py-2 text-center w-40">Deskripsi</th>
                    <th class="px-4 py-2 text-center w-48">Gambar</th>
                    <th class="px-4 py-2 text-center">Dibuat Pada</th>
                    <th class="px-4 py-2 text-center w-14">Action</th>
                </thead>
                <tbody class="text-sm" wire:sortable="updateTaskOrder">
                    @php
                        $i = 1;
                    @endphp
                    @if ($datas->count() > 0)
                        @foreach ($datas as $index => $data)
                            {{-- tanpa pagination --}}
                            {{-- <td>{{ $i++ }}</td>  --}}

                            {{-- pakai pagination --}}
                            <tr wire:sortable.item="{{ $data->id }}" wire:key="slider-{{ $data->id }}" class="sortable-drag hover:bg-gray-200 last:border-b">
                                
                                <td class="px-1 py-2 text-center" >
                                    <i class="fas fa-bars sortable-handle" wire:sortable.handle title="Tekan & tahan untuk memindah posisi"></i>
                                </td>
                                <td class="px-1 py-2 text-center">{{ $datas->firstItem() + $index }}</td>
                                <td class="px-4 py-2 text-left">{{ $data->title }}</td>
                                <td class="px-4 py-2 text-left">{{ $data->description }}</td>
                                <td class="px-4 py-2 text-center">
                                    <div x-data="{ preview: false, scrollPosition: 0 }">
                                        <div class=" relative group">
                                                <div
                                                    class="absolute z-30 top-9 left-21 invisible group-hover:visible transition-all">
                                                    <div class="text-white">
                                                        <a href="#" @click="preview = !preview;  if (preview) { scrollPosition = window.scrollY }"
                                                        class="py-[0.15rem] px-[0.37rem] rounded-full border-2 bg-slate-200 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent active:bg-slate-400"><i
                                                            class="fa-solid fa-eye text-xs"></i></a></div>
                                                </div>
                                                <img title="{{ $data->title }}"
                                                    class="hover:blur-[2px] rounded transition-all duration-300" 
                                                    style="width: 200px; height: 100px; object-fit: cover" 
                                                    src="{{ url($data->image) }}">
                                        </div>

                                        {{-- Preview Image --}}
                                        <div x-show="preview"
                                            x-transition:enter="transition translate-y-0 ease-out duration-200"
                                            x-transition:enter-start="opacity-0 bottom-10"
                                            x-transition:enter-end="opacity-100 bottom-0 "
                                            x-transition:leave="transition translate-y-0 ease-in duration-200"
                                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                            class="fixed w-full h-screen left-0 top-0 z-50 flex justify-center items-center bg-black bg-opacity-20">
                                            <div class="flex flex-col bg-white shadow-md rounded-md">
                                                <div
                                                    class="p-4 border-b border-gray-300 flex items-center justify-between ">
                                                    <span class="font-bold text-slate-800 text-lg">Preview Image</span>
                                                    <span @click="preview = false; window.scrollTo(0, scrollPosition)"
                                                        class="p-2 cursor-pointer hover:bg-gray-200 hover:rounded-md">
                                                        <i class="fa-solid fa-x"></i>
                                                    </span>
                                                </div>
                                                <div class="p-5">
                                                    <img 
                                                        class="rounded-md" src="{{ url($data->image) }}" 
                                                        style="max-height: 480px;" 
                                                        alt="{{ $data->name }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="w-28 px-4 py-2 text-left">{{ $data->created_at->format('H.i , d M Y') }}
                                </td>

                                <td class="px-4 py-2">
                                    <div class="flex gap-2 justify-center">
                                        {{-- @can('detail-slider')
                                            <a href="{{ route('administrator.sliders.detail', ['id' => $data->id]) }}"
                                                class="py-[0.15rem] px-[0.37rem] rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400" title="Detail Slider">
                                                <i class="fa-solid fa-eye text-xs"></i></a>
                                        @endcan --}}
                                        @can('edit-slider')
                                            <a href="{{ route('administrator.sliders.edit', ['id' => $data->id]) }}"
                                                class="py-[0.15rem] px-[0.40rem] rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400" title="Edit Slider"><i
                                                    class="fa-solid fa-eye-dropper text-xs"></i></a>
                                        @endcan
                                        @canany(['delete-slider', 'archive-slider'])
                                            <div>
                                                <div onclick="confirmDelete({{ $data->id }})"
                                                    class="py-1 cursor-pointer px-[0.40rem] rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400" title="Hapus Slider">
                                                    <i class="fa-solid fa-trash text-xs"></i>
                                                </div>
                                            </div>
                                        @endcanany
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7" class="text-center py-3">Data yang kamu cari tidak kami temukan</td>
                        </tr>
                    @endif

                </tbody>
            </table>
        </div>
        <div class="my-5">
            {{ $datas->onEachSide(1)->links('vendor.pagination.custom') }}
        </div>
    </div>


</div>


@push('scripts')
    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v1.x.x/dist/livewire-sortable.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            console.log("Livewire Sortable Loaded:", !!window.LivewireSortable);
        });
    </script>
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
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
