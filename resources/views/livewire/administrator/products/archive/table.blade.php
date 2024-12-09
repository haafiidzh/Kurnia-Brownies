<div>
    {{-- Session Flash Message --}}
    <x-flash-message></x-flash-message>

    <div class="w-full">
        <div class="w-full bg-slate-100 rounded-xl shadow-md">
            <div class="p-2">
                <div class="p-1 flex justify-end items-center gap-2">
                        <i class="fas fa-search text-sm"></i>
                        <input placeholder="Cari Arsip Produk..." id="search" type="text" class="text-sm p-1 rounded"
                            wire:model.live="search">
                    </div>
            </div>
            <table class="w-full">
                <thead class="bg-gray-300 text-sm">
                    <th class="px-1 py-2 text-center">No.</th>
                    <th class="px-4 py-2 text-left">Nama Produk</th>
                    <th class="px-4 py-2 text-left">Kategori</th>
                    <th class="w-32 px-4 py-2 text-left">Gambar</th>
                    <th class="px-4 py-2 text-left">Recommended</th>
                    <th class="px-4 py-2 text-left">Dihapus Pada</th>
                    <th class="px-4 py-2 text-center">Action</th>
                </thead>
                <tbody class="text-sm">
                    @php
                        $i = 1;
                    @endphp
                    @if ($products->count() > 0)
                        @foreach ($products as $index => $product)
                            {{-- tanpa pagination --}}
                            {{-- <td>{{ $i++ }}</td>  --}}

                            {{-- pakai pagination --}}
                            <tr class="hover:bg-white">
                                <td class="px-1 py-2 text-center">{{ $products->firstItem() + $index }}</td>
                                <td class="w-36 px-4 py-2 text-left">{{ $product->name }}</td>
                                <td class="w-24 px-4 py-2 text-left">
                                    {{ $product->category->name ?? 'Belum ada kategori' }}</td>
                                {{-- <td class="px-4 py-2 text-left">{{ $product->id }}</td> --}}
                                <td class="px-4 py-2 text-left">
                                    <img src="{{ Storage::url($product->image) }}" alt="{{ $product->image }}"
                                        style="width: 120px; object-fit: contain">
                                </td>

                                <td class="px-4 py-2 text-left">
                                    @if ($product->recommended == true)
                                        <span onclick="confirmRecommended('{{ $product->id }}')"
                                            class="text-green-600 cursor-pointer text-sm">
                                            <i class="fa-solid fa-circle-check"></i> Recommended
                                        </span>
                                    @elseif ($product->recommended == false)
                                        <span onclick="confirmRecommended('{{ $product->id }}')"
                                            class="text-gray-500 cursor-pointer text-sm">
                                            <i class="fa-solid fa-circle-info"></i> Common
                                        </span>
                                    @endif
                                </td>

                                <td class="w-24 px-4 py-2 text-left">{{ $product->deleted_at->format('H.i , d M Y') }}
                                </td>
                                <td class="px-4 py-2">
                                    <div class="flex gap-2 justify-center">
                                        @can('restore-product')
                                            <a onclick="confirmRestore('{{ $product->id }}')"
                                                class="py-1 cursor-pointer px-[0.40rem] rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400"><i
                                                    class="fa-solid fa-upload text-xs"></i></a>
                                        @endcan
                                        @can('delete-product')
                                            <a onclick="confirmDelete('{{ $product->id }}')"
                                                class="py-1 cursor-pointer px-[0.40rem] rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400"><i
                                                    class="fa-solid fa-trash text-xs"></i>
                                            </a>
                                        @endcan
                                    </div>
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
            {{ $products->onEachSide(1)->links('vendor.pagination.custom') }}
        </div>
    </div>
</div>

@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmRecommended(id) {
            Swal.fire({
                title: 'Info',
                text: "Anda harus mempublish produk ini terlebih dahulu untuk merubah status.",
                icon: 'info',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
            })
        };

        function confirmRestore(id) {
            Swal.fire({
                title: 'Yakin Bos?',
                text: "Anda yakin ingin memulihkan berita ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Pulihkan',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.call('restore', id)
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