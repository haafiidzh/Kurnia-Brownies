@push('styles')
    <style>
        .categories .swiper-slide-active {
            transform: translateY(-100px) !important;
        }
    </style>
@endpush

<div class="relative">
    <div class="py-16 my-0 md:mt-32 md:mb-20 ">
        <h1 class="text-center font-nunito italic text-4xl md:text-5xl text-primary font-bold drop-shadow-md pb-4">Our Categories</h1>
        <div class="flex justify-center">
            <div class="border-b-2 border-primary/65 w-[30%] md:w-[15%] text-center"></div>
        </div>
        <div class="px-10 lg:px-[120px] flex flex-col md:flex-row overflow-hidden md:overflow-visible md:gap-8">
            <div class="w-full md:w-2/3 swiper categories relative h-[400px] translate-y-20 overflow-visible md:overflow-hidden">
                <div class="swiper-wrapper">
                    @foreach ($datas as $data)
                    <div class="swiper-slide w-1/2 h-[200px] flex items-center justify-center relative">
                        <div class="absolute h-[200px] justify-center flex items-center">
                            <img class="h-40 w-full drop-shadow-md object-contain" src="{{ $data->image }}" alt="">
                        </div>
                    </div>    
                    @endforeach
                </div>
                
                <div class="invisible md:visible">
                    <div class="absolute left-0 z-40 items-center flex w-full h-20 bottom-10 justify-between md:justify-center gap-10">
                        <div class="category-button-prev p-2 bg-accent hover:bg-primary text-primary hover:text-accent rounded-full cursor-pointer transition-all duration-300">
                            <svg class="h-10 w-10 rotate-180" width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 5L15.57 11.6237C15.7976 11.8229 15.7976 12.1771 15.57 12.3763L8 19" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="category-button-next p-2 bg-accent hover:bg-primary text-primary hover:text-accent rounded-full cursor-pointer transition-all duration-300">
                            <svg class="h-10 w-10" width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 5L15.57 11.6237C15.7976 11.8229 15.7976 12.1771 15.57 12.3763L8 19" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div> 
                    </div>
                </div>
                
            </div>
    
            <div class="w-full md:w-1/3 flex justify-center items-center flex-col py-10 gap-8 z-20">
                <h1 id="category-name" class="font-nunito text-center text-primary drop-shadow-md font-bold text-4xl"></h1>
                <p id="category-description" class="font-poppins text-gray-800 tracking-wider text-center"></p>
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
        document.getElementById('category-description').textContent = firstCategory.description;
    });
</script>
{{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        var swiper = new Swiper('.category-slider', {
            loop: true,
            navigation: {
                nextEl: ".button-next",
                prevEl: ".button-prev",
            },
            on: {
                slideChange: function() {
                    let activeSlide = document.querySelector('.category-slider .swiper-slide-active');
                    let categoryName = activeSlide.getAttribute('data-name');
                    let categoryDescription = activeSlide.getAttribute('data-description');
                    
                    document.getElementById('category-name').textContent = categoryName;
                    document.getElementById('category-description').textContent = categoryDescription;
                }
            }
        });
    });
</script> --}}
@endpush
