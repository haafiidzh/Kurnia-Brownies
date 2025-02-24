@push('schema')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "name": "FAQ",
            "mainEntity": {!! $faqJson !!}
        }
    </script>
@endpush

<article>
    <ul class="py-10 px-10 lg:px-[120px] flex flex-col gap-4" x-data="{ active: '' }">
        @foreach ($datas as $index => $faq)
            <li class="relative w-full flex flex-col rounded-2xl drop-shadow-md overflow-hidden ">
                <!-- Accordion Header -->
                <a href="javascript:void(0)"
                    @click="active === '{{ $faq->id }}' ? active = '' : active = '{{ $faq->id }}'"
                    class="flex text-lg md:text-xl font-semibold font-nunito text-gray-200 gap-3 justify-between items-center bg-primary px-6 py-7 sm:py-7">
                    <div class=" flex gap-4 items-center">
                        <span class="rounded-full bg-secondary text-primary h-5 w-5 flex-shrink-0 text-sm md:text-md flex justify-center items-center">
                            {{ $index + 1 }}
                        </span>
                        <h2>{{ $faq->question }}</h2>
                    </div>
                    <svg :class="active === '{{ $faq->id }}' ? 'rotate-90' : ''"
                        class="h-5 w-5 transition-transform duration-300" width="800px" height="800px" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 5L15.57 11.6237C15.7976 11.8229 15.7976 12.1771 15.57 12.3763L8 19" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
    
                <!-- Accordion Body -->
                <div x-show="active === '{{ $faq->id }}'" 
                    x-cloak
                    x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-y-0"
                    x-transition:enter-end="opacity-100 scale-y-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 scale-y-100"
                    x-transition:leave-end="opacity-0 scale-y-0"
                    class="bg-accent px-10 py-5 text-black origin-top font-poppins">
                   <p>{!! $faq->answer !!}</p>
               </div>
            </li>
        @endforeach
    </ul>
</article>