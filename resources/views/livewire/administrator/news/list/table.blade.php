<div>
    {{-- Session Flash Message --}}
    <x-flash-message></x-flash-message>

    <div class="w-full">
        <div class="w-full bg-slate-100 rounded-xl shadow-md">
            <div class="p-2">
                <div class="p-1 flex justify-between ">
                    <a href="{{ route('administrator.products.archive') }}">
                        <div
                            class="px-3 py-1 bg-white flex gap-2 items-center text-sm rounded-md shadow-sm hover:bg-slate-200 transition-all active:bg-slate-400">
                            <i class="fas fa-archive fa-sm"></i>
                            <span class="font-semibold tracking-wider"> Archive</span>
                        </div>
                    </a>
                    <div class="flex gap-2 items-center">
                        <i class="fas fa-search text-sm"></i>
                        <input placeholder="Cari Produk..." id="search" type="text" class="text-sm p-1 rounded"
                            wire:model.lazy="search">
                    </div>
                </div>
            </div>
            <table class="w-full">
                <thead class="bg-gray-300 text-sm text-left">
                    <th class="px-1 py-2 w-7">No.</th>
                    <th class="px-4 py-2 w-40">Nama Berita</th>
                    <th class="px-4 py-2 w-24">Kategori</th>
                    <th class="px-4 py-2 w-48">Gambar</th>
                    <th class="px-4 py-2 w-20">Status</th>
                    <th class="px-4 py-2">Dibuat Pada</th>
                    <th class="px-4 py-2 w-14">Action</th>
                </thead>
                <tbody class="text-sm">
                    @php
                        $i = 1;
                    @endphp
                    @if ($news->count() > 0)
                        @foreach ($news as $index => $data)
                            {{-- tanpa pagination --}}
                            {{-- <td>{{ $i++ }}</td>  --}}

                            {{-- pakai pagination --}}
                            <tr class="hover:bg-gray-200 {{ $loop->last ? '' : 'border-b border-gray-200' }}">
                                <td class="px-1 py-2 text-center">{{ $news->firstItem() + $index }}</td>
                                <td class="px-4 py-2 text-left">{{ $data->title }}</td>
                                <td class="px-4 py-2 text-left">
                                    {{ $data->category->name ?? 'Belum ada kategori' }}</td>
                                <td class="px-4 py-2 text-left">
                                    <div x-data="{ preview: false, scrollPosition: 0 }">
                                        <div class=" relative group">
                                                <div
                                                    class="absolute z-30 top-20 left-19 invisible group-hover:visible transition-all">
                                                    <div class="text-white">
                                                        <a href="#" @click="preview = !preview;  if (preview) { scrollPosition = window.scrollY }"
                                                        class="py-[0.15rem] px-[0.37rem] rounded-full border-2 bg-slate-200 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent active:bg-slate-400"><i
                                                            class="fa-solid fa-eye text-xs"></i></a></div>
                                                </div>
                                                <img 
                                                    class="hover:blur-[2px] rounded transition-all duration-300" 
                                                    style="width: 200px; height: 200px; object-fit: cover"
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
                                    <div class="flex gap-2 justify-center">
                                        @can('detail-product')
                                            <a href="{{ route('administrator.products.detail', ['id' => $data->id]) }}"
                                                class="py-[0.15rem] px-[0.37rem] rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400"><i
                                                    class="fa-solid fa-eye text-xs "></i></a>
                                        @endcan
                                        @can('edit-product')
                                            <a href="{{ route('administrator.products.edit', ['id' => $data->id]) }}"
                                                class="py-[0.15rem] px-[0.40rem] rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400"><i
                                                    class="fa-solid fa-eye-dropper text-xs"></i></a>
                                        @endcan
                                        @canany(['delete-product', 'archive-product'])
                                            <div x-data="{ open: false }">
                                                <div @click="open = !open"
                                                    class="py-1 cursor-pointer px-[0.40rem] rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400">
                                                    <i class="fa-solid fa-trash text-xs"></i>
                                                </div>
                                                <div x-show="open" @click.away="open = false"
                                                    class="absolute mt-2 bg-white shadow-xl text-sm rounded-md">
                                                    @can('archive-product')
                                                        <div onclick="confirmArchive('{{ $data->id }}')"
                                                            {{-- INI PENTING --}} {{-- Jika pakai uuid pastikan untuk berikan '' sebelum  {{ $data->id }} --}} {{-- seperti ini '{{ $data->id }}' --}}
                                                            class="block px-4 py-2 text-gray-800 rounded-t-md hover:bg-gray-200 cursor-pointer">
                                                            Arsipkan</div>
                                                    @endcan

                                                    @can('delete-product')
                                                        <div onclick="confirmDelete('{{ $data->id }}')"
                                                            {{-- INI PENTING --}} {{-- Jika pakai uuid pastikan untuk berikan '' sebelum  {{ $data->id }} --}} {{-- seperti ini '{{ $data->id }}' --}}
                                                            class="block px-4 py-2 text-gray-800 rounded-b-md hover:bg-gray-200 cursor-pointer">
                                                            Hapus</div>
                                                    @endcan
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
            {{ $news->onEachSide(1)->links('vendor.pagination.custom') }}
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

        function confirmArchive(id) {
            Swal.fire({
                title: 'Yakin Bos?',
                text: "Anda yakin ingin mengarsipkan berita ini?",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Arsipkan',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.call('archive', id);
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
