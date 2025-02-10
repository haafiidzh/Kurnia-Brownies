@push('meta')
    <x-meta :title="$data->name" :description="$data->short_description" :image="$data->image" />
@endpush

@push('styles')
    <style>
        .swiper-slide-thumb-active {
        opacity: 0.7;
        }
    </style>
@endpush

<div x-data="{ detail: false, detailChild: false, selectedImage:'' }" class="relative">
    <div class="absolute -z-10 w-full h-full justify-end flex">
        <img class="opacity-30 transform scale-x-[-1] h-full object-cover" src="{{ asset('assets/images/default/icon/water.png') }}" alt="">
    </div>
    <div class="px-10 lg:px-[120px] py-16 relative">
        <div class="flex gap-10 mb-10 flex-col md:flex-row">
            <div class="w-full md:w-1/3 flex flex-col items-center gap-5">
                <div class="h-[400px] overflow-hidden relative drop-shadow-xl">
                    <img class="object-contain rounded-lg object-center h-full w-auto " src="{{ url($data->image) }}"
                        alt="{{ $data->name }}">

                    <a @click="detail = true" href="javascript:void(0)" title="Fullscreen"
                        class="absolute bottom-5 right-5 h-12 w-12 text-primary drop-shadow-md flex justify-center items-center hover:bg-accent bg-accent/70 transition-colors duration-300 text-2xl rounded-full  border border-primary">
                        <i class="fa-solid fa-expand"></i>
                    </a>
                </div>
            </div>
            <div class="w-full md:w-2/3 flex items-center">
                <div class="flex flex-col gap-6">
                    <div class="flex flex-col gap-3">
                        <h1 class="font-nunito text-4xl md:text-6xl font-semibold text-primary drop-shadow-md">
                            {{ $data->name }}</h1>
                        <div class="flex gap-3 ">
                            <span
                                class="bg-accent px-4 py-1 rounded-full font-nunito text-sm font-semibold shadow-inner text-gray-800">
                                {{ $data->category->name }}
                            </span>
                            @if ($data->best_seller == true)
                            <span
                                class="bg-secondary px-4 py-1 rounded-full font-nunito text-sm font-semibold shadow-inner text-primary-dark">
                                <i class="fa-solid fa-thumbs-up"></i>&nbsp;Terlaris
                            </span>
                            @endif
                        </div>
                    </div>


                    <!-- Deskripsi -->
                    <div class="text-base md:text-lg text-gray-800 leading-relaxed font-poppins">
                        {!! $data->description !!}
                    </div>
                </div>
            </div>
        </div>

        @if ($gallery->count() > 0)
        <div class="flex flex-col">
            <div class="font-nunito font-semibold mb-6 text-primary text-2xl drop-shadow-md">
                Galeri Produk
            </div>

            <div class="gallery swiper w-full h-[200px] md:h-[400px] relative shadow-inner border border-black/15 rounded-md overflow-hidden">
                <div class="swiper-wrapper ">
                    @foreach ($gallery as $key => $item)
                        <div class="swiper-slide relative">
                            <div class="absolute h-full w-full bg-white">
                                <div class="relative flex h-full justify-center items-center ">
                                    <img class="h-full object-cover md:object-contain object-center" src="{{ url($item->value) }}"
                                        alt="">
                                    <a @click="detailChild = true; selectedImage = '{{ url($item->value) }}'" href="javascript:void(0)" title="Fullscreen"
                                        class="absolute bottom-5 h-12 w-12 text-primary  flex justify-center items-center hover:bg-accent bg-accent/70 transition-colors duration-300 text-2xl rounded-full  border border-primary">
                                        <i class="fa-solid fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="invisible md:visible absolute left-0 z-20 items-center flex h-full top-0">
                    <div
                        class="button-prev mx-5 md:mx-10 p-2 bg-transparent hover:bg-accent rounded-full cursor-pointer transition-all duration-300">
                        <svg class="h-10 w-10 rotate-180" width="800px" height="800px" viewBox="0 0 24 24" fill="#0000"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 5L15.57 11.6237C15.7976 11.8229 15.7976 12.1771 15.57 12.3763L8 19" stroke="#6B2E1F"
                                stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
                <div class="invisible md:visible absolute right-0 z-20 items-center flex h-full top-0">
                    <div
                        class="button-next mx-5 md:mx-10 p-2 bg-transparent hover:bg-accent rounded-full cursor-pointer transition-all duration-300">
                        <svg class="h-10 w-10" width="800px" height="800px" viewBox="0 0 24 24" fill="#0000"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 5L15.57 11.6237C15.7976 11.8229 15.7976 12.1771 15.57 12.3763L8 19" stroke="#6B2E1F"
                                stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>

            <div thumbsSlider="" class="gallery-child swiper mt-6 w-full overflow-hidden rounded-lg shadow-inner border border-black/15 h-36">
                <div class="swiper-wrapper">
                    @foreach ($gallery as $key => $item)
                     <div class="swiper-slide cursor-pointer h-36">
                        <img class="h-full w-full object-cover" src="{{ url($item->value) }}" />
                      </div>   
                    @endforeach
                </div>
            </div>
        </div>

        <div x-cloak x-show="detailChild" x-transition:enter="transition translate-y-0 ease-out duration-200"
            x-transition:enter-start="opacity-0 bottom-10" x-transition:enter-end="opacity-100 bottom-0 "
            x-transition:leave="transition translate-y-0 ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-black bg-opacity-80 z-50 transition-opacity duration-300">
            <div class="p-5 md:p-16 w-full h-full flex items-center justify-center relative">
                <img class="object-contain rounded-lg object-center h-full w-auto" :src="selectedImage"/>
                <a @click="detailChild = false" href="javascript:void(0)" title="Exit Fullscreen"
                    class="absolute right-5 top-8 md:right-8 h-10 w-10 text-primary drop-shadow-md flex justify-center items-center bg-accent hover:bg-accent/70 transition-colors duration-300 text-xl rounded-full  border border-primary">
                    <i class="fa-solid fa-x"></i>
                </a>
            </div>
        </div>
        @else
        <div class="flex flex-col">
            <div class="font-nunito font-semibold mb-6 text-primary text-2xl drop-shadow-md">
                Galeri Produk
            </div>

            <div class="w-full border border-black/15 rounded-md shadow-inner py-6 px-10">
                <p class="font-poppins text-center text-gray-700">Upss, mohon maaf produk ini belum memiliki galeri 🙏</p>
            </div>
        </div>
        @endif
        
        <div class="w-full flex mt-6">
            <div class="flex gap-2 md:gap-3 rounded-lg bg-black/20 p-2 shadow-inner">
                <!-- WhatsApp -->
            <a title="Bagikan ke Whatsapp" href="https://api.whatsapp.com/send?text={{ urlencode('Cek produk ini: ' . url()->current()) }}" 
                target="_blank" 
                class="bg-green-500 text-white w-8 h-8 p-2 md:w-10 md:h-10 md:p-2 flex justify-center items-center rounded-md shadow-md hover:bg-green-600 transition">
                 <i class="fa-brands fa-whatsapp"></i>
             </a>
         
             <!-- Facebook -->
             <a title="Bagikan ke Facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" 
                target="_blank" 
                class="bg-blue-600 text-white w-8 h-8 p-2 md:w-10 md:h-10 md:p-2 flex justify-center items-center rounded-md shadow-md hover:bg-blue-700 transition">
                 <i class="fa-brands fa-facebook"></i>
             </a>
         
             <!-- Twitter (X) -->
             <a title="Bagikan ke Twitter" href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode('Lihat produk ini!') }}" 
                target="_blank" 
                class="bg-blue-400 text-white w-8 h-8 p-2 md:w-10 md:h-10 md:p-2 flex justify-center items-center rounded-md shadow-md hover:bg-blue-500 transition">
                 <i class="fa-brands fa-twitter"></i>
             </a>
         
             <!-- Telegram -->
             <a title="Bagikan ke Telegram" href="https://t.me/share/url?url={{ urlencode(url()->current()) }}&text={{ urlencode('Cek produk ini!') }}" 
                target="_blank" 
                class="bg-blue-500 text-white w-8 h-8 p-2 md:w-10 md:h-10 md:p-2 flex justify-center items-center rounded-md shadow-md hover:bg-blue-600 transition">
                 <i class="fa-brands fa-telegram"></i>
             </a>

             <button onclick="copyToClipboard()" title="Salin Tautan"
                class="relative bg-gray-700 text-white w-8 h-8 p-2 md:w-10 md:h-10 md:p-2 flex justify-center items-center rounded-md shadow-md hover:bg-gray-900 transition">
                 <i class="fa-solid fa-link text-sm"></i>

                 <div id="copied" class="opacity-0 transition-opacity duration-300 absolute -bottom-10 bg-gray-600 text-gray-200 p-2 text-xs rounded-xl">Disalin!</div>
             </button>
            </div>
        </div>

        <div class="w-full border-t border-primary my-10"></div>

        <div>
            <h1 class="font-nunito text-3xl md:text-5xl mb-10 text-center font-semibold text-primary drop-shadow-md leading-relaxed">{{ cache('product.other_priduct-title') ?: 'Produk Lainnya' }}</h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach ($relatedProducts as $item)
                <a href="{{ route('product.detail', $item->slug) }}">
                    <div class="relative rounded-3xl w-full h-[400px] group overflow-hidden drop-shadow-md">
                        <img src="{{ url($item->image) }}" alt="{{ $item->name }}" class="w-full h-full object-contain absolute -z-10 group-hover:scale-125 transition-all duration-300"/>
                        {{-- <div class="flex flex-col p-6 w-full h-full bg-gradient-to-b from-black/45 via-transparent to-black/80 from-10% via-40% to-100% justify-between"> --}}
                            <div class="flex flex-col p-6 w-full h-full bg-gradient-to-b from-black/30 via-black/5 to-black/70 from-15% via-60% to-100% justify-between">
                            <div class="flex">
                                <span class="text-sm font-nunito font-semibold text-accent backdrop-blur-md rounded-full px-5 py-2 tracking-wider">{{ $item->category->name }}</span>
                            </div>
                            <div class="font-nunito text-xl text-accent tracking-wider w-[80%]">{{ $item->name }}</div>
                        </div>
                        @if ($item->best_seller == true)
                        <div class="absolute bottom-0 right-0 w-1/4">
                            <img src="{{ asset('assets/images/default/decoration/recommended.png') }}" alt="">
                        </div>
                        @endif
                    </div>
                </a>
                @endforeach

        </div>

        <div x-cloak x-show="detail" x-transition:enter="transition translate-y-0 ease-out duration-200"
            x-transition:enter-start="opacity-0 bottom-10" x-transition:enter-end="opacity-100 bottom-0 "
            x-transition:leave="transition translate-y-0 ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-black bg-opacity-80 z-50 transition-opacity duration-300">
            <div class="p-5 md:p-16 w-full h-full flex items-center justify-center relative">
                <img class="object-contain rounded-lg object-center h-full w-auto" src="{{ url($data->image) }}" />
                <a @click="detail = false" href="javascript:void(0)" title="Exit Fullscreen"
                    class="absolute right-5 top-8 md:right-8 h-10 w-10 text-primary drop-shadow-md flex justify-center items-center bg-accent hover:bg-accent/70 transition-colors duration-300 text-xl rounded-full  border border-primary">
                    <i class="fa-solid fa-x"></i>
                </a>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function copyToClipboard() {
        // Ambil URL saat ini
        var url = window.location.href;
    
        // Buat elemen input sementara
        var tempInput = document.createElement("input");
        tempInput.value = url;
        document.body.appendChild(tempInput);
    
        // Pilih dan salin ke clipboard
        tempInput.select();
        tempInput.setSelectionRange(0, 99999); // Untuk mobile support
        document.execCommand("copy");
    
        // Hapus input sementara
        document.body.removeChild(tempInput);

        var copiedTooltip = document.querySelector("#copied");

        // Tampilkan notifikasi
        copiedTooltip.classList.remove("opacity-0","drop-shadow-md");

        // Sembunyikan setelah 2 detik
        setTimeout(() => {
            copiedTooltip.classList.add("opacity-0","drop-shadow-md");
        }, 2000);
        }
    </script>    
@endpush