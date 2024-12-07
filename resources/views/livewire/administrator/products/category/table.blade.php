<div>
    {{-- Session Flash Message --}}
    <x-flash-message></x-flash-message>

        <div class="w-3/5 bg-slate-100 rounded-xl shadow-md">
            <div class="p-2">
                <div class="p-1 flex justify-end items-center gap-2">
                    <i class="fas fa-search text-sm"></i>
                    <input placeholder="Cari Kategori..." id="search" type="text" class="text-sm p-1 rounded-md"
                        wire:model.lazy="search">
                </div>
            </div>
            <table class="w-full">
                <thead class="bg-gray-300 text-sm">
                    <th class="px-1 py-2 text-center">No.</th>
                    <th class="px-4 py-2 text-left">Nama Kategori</th>
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

                                <td class="px-4 py-2 text-left">{{ dateTimeTranslated($data->created_at) }}</td>
                                <td class="px-4 py-2">
                                    <div class="flex gap-2 justify-center">
                                        @can('edit-product-category')
                                            <a href="{{ route('administrator.products.category.edit', ['id' => $data->id]) }}"
                                                class="py-[0.15rem] px-[0.40rem] rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400"><i
                                                    class="fa-solid fa-eye-dropper text-xs"></i></a>
                                        @endcan
                                        @can('delete-product-category')
                                            <a onclick="confirmDelete({{ $data->id }})"
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
