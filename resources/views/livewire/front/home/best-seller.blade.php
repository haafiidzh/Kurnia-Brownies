@push('styles')
    <style>
        .categories .swiper-slide-active {
            transform: translateY(-100px) !important;
        }
    </style>
@endpush

<div class="relative">
    <div class="py-10 md:py-16 my-0 md:mb-20 ">
        <div class="flex justify-center  ">
            <div class=" inline-block text-center">
                <h1
                    class="text-center font-nunito italic text-3xl md:text-5xl text-primary font-bold drop-shadow-md pb-2 md:pb-4">
                    {{ cache('homepage.best_seller-title') ?: 'Our Best Seller' }}</h1>
                <div class="border-b-2 mx-auto border-primary/65 w-[50%] text-center"></div>
            </div>
        </div>
        <div class="relative px-10 lg:px-[120px] flex flex-col md:flex-row overflow-hidden md:overflow-visible md:gap-8">
            <div
                class="inset-0 absolute bg-gradient-to-t md:bg-gradient-to-l from-white/70 to-transparent from-50% to-70% md:from-40% md:to-60% z-10 pointer-events-none">
            </div>
            <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" data-aos-easing="ease-out"
                class=" w-full md:w-2/3 swiper categories  relative h-[300px]  md:h-[400px]  overflow-visible md:overflow-hidden responsive-aos-slider">
                <div class="swiper-wrapper " >
                    @foreach ($datas as $data)
                        <div class="swiper-slide w-1/2 h-full flex items-center justify-center relative ">
                            <div class="absolute bottom-0 h-[200px] justify-center flex items-center ">
                                <img class="h-40 w-full drop-shadow-md object-contain" src="{{ $data->image }}"
                                    alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="invisible md:visible">
                <div
                    class="absolute left-0 z-20 items-center flex px-10  lg:mx-[120px] w-1/2 h-20 -bottom-0  justify-between md:justify-center gap-10">
                    <div
                        class="category-button-prev p-2 bg-accent hover:bg-primary text-primary hover:text-accent rounded-full cursor-pointer transition-all duration-300">
                        <svg class="h-10 w-10 rotate-180" width="800px" height="800px" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 5L15.57 11.6237C15.7976 11.8229 15.7976 12.1771 15.57 12.3763L8 19"
                                stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div
                        class="category-button-next p-2 bg-accent hover:bg-primary text-primary hover:text-accent rounded-full cursor-pointer transition-all duration-300">
                        <svg class="h-10 w-10" width="800px" height="800px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 5L15.57 11.6237C15.7976 11.8229 15.7976 12.1771 15.57 12.3763L8 19"
                                stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/3 flex justify-center items-center flex-col py-10 gap-5 md:gap-8 z-20 responsive-aos-text"
                data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" data-aos-easing="ease-out">
                <h1 id="category-name" class="font-nunito text-center text-primary drop-shadow-md font-bold text-3xl">
                </h1>
                <p id="category-description"
                    class="text-sm md:text-base font-poppins text-gray-800 tracking-wider text-center"></p>
            </div>
        </div>

    </div>
</div>

@push('scripts')
    <script>
        const categories = @json($datas);
        console.log(categories);


        document.addEventListener('DOMContentLoaded', () => {
            const firstCategory = categories[0];
            document.getElementById('category-name').textContent = firstCategory.name;
            document.getElementById('category-description').textContent = firstCategory.short_description;
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let sliderElement = document.querySelector(".responsive-aos-slider");
            let textElement = document.querySelector(".responsive-aos-text");

            if (window.innerWidth < 768) {
                sliderElement.setAttribute("data-aos", "fade-up");
                textElement.setAttribute("data-aos", "fade-up");
            } else {
                sliderElement.setAttribute("data-aos", "fade-right");
                textElement.setAttribute("data-aos", "fade-left");
            }
        });
    </script>
@endpush
