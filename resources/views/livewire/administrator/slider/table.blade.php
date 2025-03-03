<div>
    {{-- Session Flash Message --}}
    <x-flash-message></x-flash-message>

    <div class="w-full">
        <div class="w-full bg-slate-100 rounded-xl shadow-md overflow-hidden">
            <div class="p-2">
                <div class="flex gap-2 items-center justify-end">
                    <i class="fas fa-search text-sm"></i>
                    <input placeholder="Cari Slider..." id="search" type="text" class="text-sm p-1 rounded"
                        wire:model.lazy="search">
                </div>
            </div>
            <table class="w-full">
                <thead class="bg-gray-300 text-sm">
                    <th class="px-1 py-2 text-center w-10"></th>
                    <th class="px-1 py-2 text-center w-5">Pos.</th>
                    <th class="px-4 py-2 text-center w-24">Judul</th>
                    <th class="px-4 py-2 text-center w-48">Gambar</th>
                    <th class="px-4 py-2 text-center w-10">Suka</th>
                    <th class="px-4 py-2 text-center w-10">Status</th>
                    <th class="px-4 py-2 text-center">Dibuat Pada</th>
                    <th class="px-4 py-2 text-center w-14">Action</th>
                </thead>
                <tbody class="text-sm" wire:sortable="updateTaskOrder">
                    @forelse ($datas as $index => $data)
                        <tr wire:sortable.item="{{ $data->id }}" wire:key="slider-{{ $data->id }}"
                            class="sortable-drag hover:bg-gray-200 last:border-b">

                            <td class="px-1 py-2 text-center">
                                <i class="fas fa-bars sortable-handle" wire:sortable.handle
                                    title="Tekan & tahan untuk memindah posisi"></i>
                            </td>
                            <td class="px-1 py-2 text-center">{{ $data->position }}</td>
                            <td class="px-4 py-2 text-left">{{ $data->title }}</td>
                            <td class="px-4 py-2 text-center">
                                <div x-data="{ preview: false, scrollPosition: 100 }">
                                    <div class="relative group">
                                        <div
                                            class="absolute z-30 top-0 left-0 w-full h-full flex justify-center items-center transition-all invisible group-hover:visible">
                                            <div class="text-white">
                                                <a href="javascript:void(0)"
                                                    @click="preview = !preview;  if (preview) { scrollPosition = window.scrollY }"
                                                    class="py-[0.15rem] px-[0.37rem] rounded-full border-2 bg-slate-200 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent active:bg-slate-400"><i
                                                        class="fa-solid fa-eye text-xs"></i></a>
                                            </div>
                                        </div>
                                        <img title="{{ $data->title }}"
                                            class="group-hover:blur-[2px] rounded aspect-[2/1] object-cover transition-all duration-300"
                                            src="{{ url($data->image) }}?v={{ time() }}">

                                        {{-- Preview Image --}}
                                        <div x-show="preview" x-cloak
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
                                                    <img class="rounded-md" src="{{ url($data->image) }}?v={{ time() }}"
                                                        style="max-height: 480px;" alt="{{ $data->name }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-4 py-2 text-center">{{ formatNumber($data->likes) }}
                            </td>

                            <td class="px-4 py-2 text-center">
                                @if ($data->is_active == true)
                                    <span onclick="confirmActive('{{ $data->id }}')"
                                        class="text-green-600 cursor-pointer text-sm">
                                        <i class="fa-solid fa-circle-check"></i> Aktif
                                    </span>
                                @elseif ($data->is_active == false)
                                    <span onclick="confirmActive('{{ $data->id }}')"
                                        class="text-gray-500 cursor-pointer text-sm">
                                        <i class="fa-solid fa-circle-info"></i> Nonaktif
                                    </span>
                                @endif
                            </td>

                            <td class="w-28 px-4 py-2 text-center">{{ dateHour($data->created_at) }}
                            </td>

                            <td class="px-4 py-2">
                                <div class="flex gap-2 justify-center">
                                    {{-- @can('detail-slider')
                                        <a href="{{ route('administrator.sliders.detail', ['id' => $data->id]) }}" title="Detail Slider"
                                            class="w-7 h-7 flex justify-center items-center rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400">
                                            <i class="fa-solid fa-eye text-xs "></i>
                                        </a>
                                    @endcan --}}
                                    @can('edit-slider')
                                        <a href="{{ route('administrator.sliders.edit', ['id' => $data->id]) }}" title="Edit Slider"
                                            class="w-7 h-7 flex justify-center items-center rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400">
                                            <i class="fa-solid fa-eye-dropper text-xs"></i>
                                        </a>
                                    @endcan
                                    @can('delete-slider')
                                        <div>
                                            <div onclick="confirmDelete('{{ $data->id }}')"
                                                class="cursor-pointer w-7 h-7 flex justify-center items-center rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400"
                                                title="Hapus Slider">
                                                <i class="fa-solid fa-trash text-xs"></i>
                                            </div>
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
        <div class="my-5 flex">
            {{-- {{ $datas->onEachSide(1)->links('vendor.livewire.tailwind') }} --}}
        </div>
    </div>
</div>


@push('scripts')
    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v1.x.x/dist/livewire-sortable.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmActive(id) {
            Swal.fire({
                text: "Anda yakin ingin mengubah status slider ini?",
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
