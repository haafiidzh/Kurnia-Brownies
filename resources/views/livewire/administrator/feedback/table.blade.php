<div>
    {{-- Session Flash Message --}}
    <x-flash-message></x-flash-message>

    <div class="w-full">
        <div class="w-full bg-slate-100 rounded-xl shadow-md overflow-hidden">
            <div class="p-2">
                <div class="p-1 flex justify-between ">
                    <div class="flex px-3 gap-3">
                        <div title="Semua" wire:click="setStatus('')"
                         class="relative px-5 border-2 rounded-full cursor-pointer {{ $status === '' ? 'bg-transparent border-slate-700 shadow-inner' : 'bg-white border-transparent drop-shadow-md' }}">
                            <i class="fa-solid fa-bars-staggered"></i>
                        </div>
                        <div title="Belum Dibaca" wire:click="setStatus('pending')"
                         class="relative px-5 border-2 rounded-full cursor-pointer {{ $status === 'pending' ? 'bg-transparent border-slate-700 shadow-inner' : 'bg-white border-transparent drop-shadow-md' }}">
                            <i class="fa-solid fa-envelope"></i>
                            @if ($pending->count() > 0 )
                            <div class="absolute -top-1 right-0 rounded-full size-3 bg-red-700"></div>    
                            @endif
                        </div>
                        <div title="Sudah Dibaca" wire:click="setStatus('reviewed')"
                         class="px-5 border-2 rounded-full cursor-pointer {{ $status === 'reviewed' ? 'bg-transparent border-slate-700 shadow-inner' : 'bg-white border-transparent drop-shadow-md' }}">
                            <i class="fa-solid fa-envelope-open-text"></i>
                        </div>
                        <div title="Dibalas" wire:click="setStatus('resolved')"
                         class="px-5 border-2 rounded-full cursor-pointer {{ $status === 'resolved' ? 'bg-transparent border-slate-700 shadow-inner' : 'bg-white border-transparent drop-shadow-md' }}">
                            <i class="fa-solid fa-envelope-circle-check"></i>
                        </div>
                    </div>
                    <div class="flex gap-2 items-center">
                        <i class="fas fa-search text-sm"></i>
                        <input placeholder="Cari Feedback..." id="search" type="text" class="text-sm p-1 rounded"
                            wire:model.live="search">
                    </div>
                </div>
            </div>
            <table class="w-full">
                <thead class="bg-gray-300 text-sm text-left">
                    <th class="px-1 py-2 text-center w-10"></th>
                    <th class="px-4 py-2 w-40">Nama</th>
                    <th class="px-4 py-2 w-48">Email</th>
                    <th class="px-4 py-2">Pesan</th>
                    <th class="px-4 py-2">Dikirim</th>
                    <th class="px-4 py-2 text-center">Status</th>
                    <th class="px-4 py-2 text-center w-14">Action</th>
                </thead>
                <tbody class="text-sm">
                    @php
                        $i = 1;
                    @endphp
                    @forelse ($datas as $index => $data)
                        <tr wire:loading.remove wire:target="setStatus"
                        class="hover:bg-gradient-to-b hover:from-gray-200 hover:to-gray-200 {{ $loop->last ? '' : 'border-b border-gray-200' }}
                        {{ $data->status == 'pending' ? 'bg-gradient-to-b from-transparent via-white to-transparent' : 'bg-gray-200' }}
                        ">
                            <td class="px-1 py-2 text-center">{{ $datas->firstItem() + $index }}</td>
                            <td class="px-4 py-2 text-left">{{ $data->first_name }} {{ $data->last_name }}</td>
                            <td class="px-4 py-2 text-left">{{ $data->email }}</td>

                            <td class="px-4 py-2 text-left truncate max-w-[300px]">{{ $data->message }}</td>
                            <td class="w-28 px-4 py-2 text-left">{{ dateTimeTranslated($data->created_at) }}</td>
                            <td class="w-28 px-4 py-2 text-center text-lg">
                                @if ($data->status == 'pending')
                                    <span class="text-yellow-500">
                                        <i class="fa-solid fa-envelope"></i>
                                    </span>
                                @elseif ($data->status == 'reviewed')
                                    <span class="text-green-500">
                                        <i class="fa-solid fa-envelope-open-text"></i>
                                    </span>
                                
                                @elseif ($data->status == 'resolved')
                                    <span class="text-blue-500">
                                        <i class="fa-solid fa-envelope-circle-check"></i>
                                    </span>
                                @endif
                            </td>
                            <td class="px-4 py-2">
                                <div class="flex gap-2 justify-center items-center">
                                    @can('detail-feedback')
                                        <a href="{{ route('administrator.feedback.detail', ['id' => $data->id]) }}" 
                                            wire:click="setReview('{{ $data->id }}')"
                                            class="w-7 h-7 flex justify-center items-center rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400">
                                            <i class="fa-solid fa-eye text-xs"></i>
                                        </a>
                                    @endcan
                                    @can('delete-feedback')
                                        <div onclick="confirmDelete('{{ $data->id }}')"
                                            class="cursor-pointer w-7 h-7 flex justify-center items-center rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400">
                                            <i class="fa-solid fa-trash text-xs"></i>
                                        </div>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr wire:loading.remove wire:target="setStatus">
                            <td colspan="6" class="text-center py-3">Data yang kamu cari tidak kami temukan</td>
                        </tr>
                        @endforelse
                        <tr wire:loading wire:target="setStatus">
                            <td colspan="6" class="text-center  py-3">
                                <div class="pl-20">Loading...</div>
                            </td>
                        </tr>

                </tbody>
            </table>
        </div>
        <div class="my-5">
            {{ $datas->onEachSide(1)->links('vendor.livewire.tailwind') }}
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
