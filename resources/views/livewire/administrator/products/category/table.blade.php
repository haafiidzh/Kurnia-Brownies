<div>
    {{-- Session Flash Message --}}
    <x-flash-message></x-flash-message>

        <div class="w-full bg-slate-100 rounded-xl shadow-md">
            <div class="p-2">
                <div class="p-1 flex justify-end items-center gap-2">
                    <i class="fas fa-search text-sm"></i>
                    <input placeholder="Cari Kategori..." id="search" type="text" class="text-sm p-1 rounded-md"
                        wire:model.live="search">
                </div>
            </div>
            <table class="w-full">
                <thead class="bg-gray-300 text-sm">
                    <th class="px-1 py-2 text-center">No.</th>
                    <th class="px-4 py-2 text-left">Nama Kategori</th>
                    <th class="px-4 py-2 text-left">Deskripsi</th>
                    <th class="px-4 py-2 text-left">Gambar</th>
                    <th class="px-4 py-2 text-left">Dibuat Pada</th>
                    <th class="px-4 py-2 text-center">Action</th>
                </thead>
                <tbody class="text-sm">
                    @php
                        $i = 1;
                    @endphp
                    @if ($category->count() > 0)
                        @foreach ($category as $index => $data)
                            {{-- tanpa pagination --}}
                            {{-- <td>{{ $i++ }}</td>  --}}

                            {{-- pakai pagination --}}
                            <tr class="hover:bg-white">
                                <td class="px-1 py-2 text-center">{{ $category->firstItem() + $index }}</td>
                                <td class="px-4 py-2 text-left">{{ $data->name }}</td>
                                <td class="px-4 py-2 text-left">{{ $data->description }}</td>
                                <td class="px-4 py-2 text-left">
                                    <div x-data="{ preview: false, scrollPosition: 100 }">
                                        <div class="relative group">
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

                                <td class="px-4 py-2 text-left">{{ dateTimeTranslated($data->created_at) }}</td>
                                <td class="px-4 py-2">
                                    <div class="flex gap-2 justify-center">
                                        @can('edit-product-category')
                                            <a href="{{ route('administrator.products.category.edit', ['id' => $data->id]) }}"
                                                class="py-[0.15rem] px-[0.40rem] rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400"><i
                                                    class="fa-solid fa-eye-dropper text-xs"></i></a>
                                        @endcan
                                        @can('delete-product-category')
                                            <a onclick="confirmDelete('{{ $data->id }}')"
                                            {{-- INI PENTING --}}
                                            {{-- Jika pakai uuid pastikan untuk berikan '' sebelum  {{ $data->id }}--}}
                                            {{-- seperti ini '{{ $data->id }}'--}}
                                                class="cursor-pointer py-[0.15rem] px-[0.40rem] rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400"><i
                                                    class="fa-solid fa-trash text-xs"></i>
                                            </a>
                                        @endcan
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
            {{ $category->onEachSide(1)->links('vendor.pagination.custom') }}
        </div>
</div>


@push('scripts')
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
