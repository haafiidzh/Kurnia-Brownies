@push('meta')
    <x-meta :title="$data->title" :description="$data->subject" :image="$data->image" :keywords="$data->keywords" />
@endpush

@push('schema')    
    <script type="application/ld+json">
        {
        "@context": "https://schema.org/", 
        "@type": "BreadcrumbList", 
        "itemListElement": [{
            "@type": "ListItem", 
            "position": 1, 
            "name": "Beranda",
            "item": "{{ route('home') }}"  
        },{
            "@type": "ListItem", 
            "position": 2, 
            "name": "Berita",
            "item": "{{ route('news') }}"
        },{
            "@type": "ListItem", 
            "position": 3, 
            "name": "{{ $data->title }}",
            "item": "{{ request()->url() }}"
        }]
        }
    </script>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "NewsArticle",
          "headline": "{{ $data->title }}",
          "image": "{{ url($data->image) }}",  
          "author": {
            "@type": "Person",
            "name": "{{ $data->author->name }}"
          },  
          "publisher": {
            "@type": "Organization",
            "name": "{{ cache('app_name') }}",
            "logo": {
              "@type": "ImageObject",
              "url": "{{ url(cache('logo')) }}"
            }
          },
          "datePublished": "{{ $data->created_at }}"
        }
        </script>
@endpush

<div class="relative overflow-hidden">

    <div class="absolute -z-10 top-0 right-0 scale-90 md:scale-150 translate-x-52 -translate-y-48 flex flex-col">
        <div class="relative h-[400px] w-[400px]">
            <img class="w-full h-full" src="{{ url('assets/images/default/decoration/circle.svg') }}" alt="">
            <div class="absolute h-[400px] w-[400px] bottom-0 right-0 translate-x-14 translate-y-32">
                <img class="w-full h-full" src="{{ url('assets/images/default/decoration/circle.svg') }}" alt="">
            </div>
        </div>
    </div>
    <div class="px-10 md:px-[120px] py-10 md:py-20 flex flex-col md:flex-row gap-10 ">
        <div class="w-full md:w-3/4 flex flex-col">
            <div class="mb-5 md:mb-10">
                <h1 class="font-nunito drop-shadow-md text-4xl text-primary font-semibold mb-3 ">{{ $data->title }}</h1>
                <p class="font-poppins text-sm md:text-base text-gray-500"><span class="font-semibold">{{ $data->author->name }}</span> {{ getFullDate($data->published_at) }}</p>
                <p class="font-poppins text-base md:text-lg text-primary-dark">{{ $data->subject ?: ''  }}</p>
            </div>
            
            <img class="h-auto w-full object-center md:max-h-[600px] object-contain" src="{{ url($data->image) }}" alt="{{ $data->title }}">
            
            <div class="mt-6 flex flex-col w-full gap-5">
                <div class="font-poppins text-gray-800 text-base md:text-lg leading-relaxed">
                    {!! $data->description ?: 'Tidak ada deskripsi' !!}
                </div>
            </div>
    
            <div class="mt-6 flex flex-col-reverse md:flex-row justify-between gap-5 md:gap-0 md:items-center">
                <div class="">
                    <span class="shadow-inner bg-black/20 px-3 py-2 md:py-3 md:px-4 md:text-base text-sm rounded-lg font-poppins font-semibold text-gray-600"><i class="fa-solid fa-eye text-sm"></i>&nbsp;&nbsp;Dilihat {{ formatNumber($data->views) }} kali</span>
                </div>
                
                <div class="flex">
                    <div class="flex gap-2 md:gap-3 rounded-lg bg-black/20 p-2 shadow-inner">
                        <!-- WhatsApp -->
                    <a title="Bagikan ke Whatsapp" href="https://api.whatsapp.com/send?text={{ urlencode(url()->current()) }}" 
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
                
            </div>
            
        </div>

        <div class="w-full sm:w-1/4 drop-shadow-md">
            <h2 class="text-xl font-nunito text-primary font-semibold tracking-wider border-b-2 border-primary inline">{{ cache('news.popular-title') ?: 'Berita Terpopuler' }}</h2>
            <div class="mt-4 grid grid-cols-1 gap-4">

                @foreach ($otherNews as $item)
                    <div class="flex flex-col gap-3">
                        <a class="relative overflow-hidden group rounded-md" href="{{ route('news.detail', $item->slug) }}">
                            <div class="z-20 absolute inset-0 bg-white/20 hidden group-hover:block "></div>
                            <img class="aspect-video object-cover group-hover:scale-125 transition-all duration-300"
                            src="{{ url($item->image) }}" alt="">
                        </a>
                        <div>
                            <p class="font-poppins text-sm">Dibuat oleh <span class="font-poppins font-bold text-sm">{{ $item->author->name }}</span> </p>
                            <a href="{{ route('news.detail', $item->slug) }}">
                                <h2 class="font-poppins font-semibold text-gray-800 hover:text-primary inline">
                                    {{ $item->title }}
                                </h2>
                            </a>
                        </div>
                    </div>
                @endforeach
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