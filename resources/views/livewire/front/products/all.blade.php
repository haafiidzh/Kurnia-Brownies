<div>
    <section class="w-full bg-gradient-to-b from-accent to-transparent from-80% md:from-70% to-100% px-10 lg:px-[120px] py-10">
        <!-- Header -->
        <div class="mb-8 md:mb-4 flex flex-col md:flex-row items-center gap-3 md:gap-6 w-full md:w-3/4">
            <div class="flex justify-center">
                <img class="w-36 object-contain" src="{{ url(cache('product.filter-image') ?: 'assets/images/default/quality.png') }}?v={{ time() }}" 
                alt="{{ cache('product.filter-image-alt') ?: cache('product.filter-description') }}">
            </div>
            <h2 class="text-lg md:text-2xl font-semibold text-gray-700 font-poppins text-center md:text-left">{{ cache('product.filter-description') ?: 'Kami Menjamin Kualitas terbaik untuk setiap produk kami' }}</h2>
        </div>

        <!-- Search and Category -->
        <div class="flex flex-col md:flex-row items-center lg:items-stretch gap-3 md:gap-6">

            <!-- Category Dropdown -->
            <div class="w-full md:w-1/3 flex group">
                <label for="category" class="sr-only">Pilih Kategori</label>
                <select id="category" wire:model.live="selectedCategory"
                class="flex-grow w-full py-2 px-5 appearance-none font-poppins rounded-s-xl text-black bg-gray-200 focus:bg-white transition-colors duration-300">
                    <option class="bg-gray-100" value="">Semua</option>
                    <option class="bg-gray-100" value="best_seller">Best Seller</option>
                    @foreach ($categories as $category)
                        <option class="bg-gray-100" value="{{ $category->slug }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <div class="bg-gray-100 rounded-e-xl px-5 py-2 text-black pointer-events-none">
                    <i wire:loading.remove wire:target="selectedCategory" class="group-focus-within:rotate-180 fa-solid fa-chevron-down transition-transform duration-300"></i>
                    <i wire:loading wire:target="selectedCategory" class="fa-solid fa-spinner animate-spin"></i>
                </div>
            </div>
            <!-- Search Input -->
            <div class="flex-grow w-full md:w-2/3 items-center flex relative">
                <label for="search" class="sr-only">Cari Produk</label>
                <input class=" flex w-full sm:flex-grow px-5 py-2 font-poppins rounded-s-xl placeholder:text-gray-500 bg-gray-200 focus:bg-white transition-colors duration-300"
                    placeholder="Cari Produk" type="text" wire:model.defer="search">
                <a href="javascript:void(0)" wire:click="searchProduct" class="bg-gray-100 rounded-e-xl px-5 py-2 text-black cursor-pointer">
                    <i wire:loading.remove wire:target="search" class="fa-solid fa-magnifying-glass"></i>
                    <i wire:loading wire:target="search" class="fa-solid fa-spinner animate-spin"></i>
                </a>

                @if ($search)
                    <a href="javascript:void(0)" wire:click="resetSearch" class="absolute right-16 text-sm"><i class="fa-regular fa-x "></i></a>
                @endif
            </div>
        </div>
    </section>
    <article class="flex flex-col w-full px-10 lg:px-[120px] py-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @forelse ($datas as $data)
                <a href="{{ route('product.detail', $data->slug) }}">
                    <div class="relative rounded-3xl w-full h-[400px] group overflow-hidden drop-shadow-md">
                        <img src="{{ url($data->image) }}?v={{ time() }}" alt="{{ $data->name }}" class="w-full h-full object-contain absolute -z-10 group-hover:scale-125 transition-all duration-300"/>
                        <div class="flex flex-col p-6 w-full h-full bg-gradient-to-b from-black/30 via-black/5 to-black/70 from-15% via-60% to-100% justify-between">
                            <div class="flex">
                                <span class="text-sm font-nunito font-semibold text-accent backdrop-blur-md bg-black/10 md:bg-transparent rounded-full px-5 py-2 tracking-wider">{{ $data->category->name }}</span>
                            </div>
                            <div class="font-nunito text-xl text-accent tracking-wider w-[80%]">{{ $data->name }}</div>
                        </div>
                        @if ($data->best_seller == true)
                        <div class="absolute bottom-0 right-0 w-1/4">
                            <img src="{{ asset('assets/images/default/decoration/recommended.png') }}" alt="Ikon untuk produk best seller">
                        </div>
                        @endif
                    </div>
                </a>
            @empty
            <div class="col-span-3 px-10 py-8 flex flex-col justify-center items-center border border-black/50 rounded-lg shadow-inner gap-5">
                <img class="h-36 object-contain" src="{{ url(cache('product.notfound-image') ?: 'assets/images/default/404.png') }}?v={{ time() }}" 
                alt="{{ cache('product.notfound-image-alt') ?: cache('product.notfound-description') }}">
                <p class="font-poppins text-center md:text-left text-lg text-gray-700">
                    {{ cache('product.notfound-description') ?: 'Oops, produk yang Anda cari tidak kami temukan.' }}
                </p>
            </div>
            @endforelse
        </div>
        <div>
            {{ $datas->links('vendor.livewire.front.product') }}
        </div>
    </article>
</div>