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
                    <th class="px-1 py-2 text-center w-10"></th>
                    <th class="px-1 py-2 w-7 text-center">No.</th>
                    <th class="px-4 py-2 w-40">Pertanyaan</th>
                    <th class="px-4 py-2 w-48">Jawaban</th>
                    <th class="px-4 py-2">Dibuat Pada</th>
                    <th class="px-4 py-2 text-center">Status</th>
                    <th class="px-4 py-2 text-center w-14">Action</th>
                </thead>
                <tbody class="text-sm" wire:sortable="updateTaskOrder">
                    @php
                        $i = 1;
                    @endphp
                    @forelse ($faqs as $index => $data)
                        <tr wire:sortable.item="{{ $data->id }}" wire:key="faq-{{ $data->id }}"
                        class="hover:bg-gray-200 {{ $loop->last ? '' : 'border-b border-gray-200' }}">

                        <td class="px-1 py-2 text-center">
                            <i class="fas fa-bars sortable-handle" wire:sortable.handle
                                title="Tekan & tahan untuk memindah posisi"></i>
                        </td>
                            <td class="px-1 py-2 text-center">{{ $faqs->firstItem() + $index }}</td>
                            <td class="px-4 py-2 text-left">{{ $data->question }}</td>
                            <td class="px-4 py-2 text-left">{!! $data->answer !!}</td>

                            <td class="w-28 px-4 py-2 text-left">{{ dateTimeTranslated($data->created_at) }}
                            <td class="w-28 px-4 py-2 text-center text-sm">
                                @if ($data->is_active == true)
                                    <span onclick="confirmActive('{{ $data->id }}')"
                                        class="text-green-600 cursor-pointer text-sm">
                                        <i class="fa-solid fa-circle-check"></i> Aktif
                                    </span>
                                @elseif ($data->is_active == false)
                                    <span onclick="confirmActive('{{ $data->id }}')"
                                        class="text-red-500 cursor-pointer text-sm">
                                        <i class="fa-solid fa-circle-xmark"></i> Tidak Aktif
                                    </span>
                                @endif
                            </td>
                            <td class="px-4 py-2">
                                <div class="flex gap-2 justify-center">
                                    @can('edit-faq')
                                        <a href="{{ route('administrator.faq.edit', ['id' => $data->id]) }}"
                                            class="py-[0.15rem] px-[0.40rem] rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400"><i
                                                class="fa-solid fa-eye-dropper text-xs"></i></a>
                                    @endcan
                                    @can('delete-faq')
                                        <div onclick="confirmDelete('{{ $data->id }}')"
                                            class="py-1 cursor-pointer px-[0.40rem] rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400">
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
            {{ $faqs->onEachSide(1)->links('vendor.livewire.tailwind') }}
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
        function confirmActive(id) {
            Swal.fire({
                text: "Anda yakin ingin mengubah status FAQ ini?",
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
