@push('styles')
    <style>
        .slider .swiper-pagination-bullet {
            width: 25px;
            height: 25px;
            text-align: center;
            line-height: 25px;
            font-size: 15px;
            color: #000;
            opacity: 1;
            background: rgba(0, 0, 0, 0.2);
        }

        .slider .swiper-pagination-bullet-active {
            color: #5E2205;
            background: #FFE89C;
            font-weight: bold
        }
    </style>
@endpush

<div>
    <div class="w-full h-[75vh] md:h-screen relative">
        
        <div class="swiper w-full h-full slider relative overflow-hidden" wire:ignore>
            <div class="swiper-wrapper">
                @foreach ($datas as $key => $data)
                    <div class="swiper-slide relative">
                        <div class="absolute flex w-full h-full justify-center items-center">
                            <div class="relative w-full h-full overflow-hidden">
                                <img class="w-full h-full object-center object-cover" src="{{ url($data->image) }}" alt="">
        
                                
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Navigation and pagination -->
            <div class="hidden md:block" wire:ignore.self>
                <div class="absolute right-0 z-20  items-center flex h-full  top-0">
                    <div
                        class="button-next mx-10 p-2 bg-transparent hover:bg-accent rounded-full cursor-pointer transition-all duration-300">
                        <svg class="h-10 w-10" width="800px" height="800px" viewBox="0 0 24 24" fill="#0000"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 5L15.57 11.6237C15.7976 11.8229 15.7976 12.1771 15.57 12.3763L8 19" stroke="#6B2E1F"
                                stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>
        
            <div class="hidden md:block" wire:ignore.self>
                <div class="absolute left-0 z-20  items-center flex h-full  top-0">
                    <div
                        class="button-prev mx-10 p-2 bg-transparent hover:bg-accent rounded-full cursor-pointer transition-all duration-300">
                        <svg class="h-10 w-10 rotate-180" width="800px" height="800px" viewBox="0 0 24 24" fill="#0000"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 5L15.57 11.6237C15.7976 11.8229 15.7976 12.1771 15.57 12.3763L8 19" stroke="#6B2E1F"
                                stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>
        
            <div class="swiper-pagination md:invisible visible"></div>
        </div>

        <div class="absolute bottom-10 w-full flex flex-col gap-2 items-center z-30">
            <div
                class="bg-transparent hover:bg-accent drop-shadow-md rounded-full p-3 transition-all duration-300">
                <a href="javascript:void(0)" id="like-button">
                    {{-- @if (in_array($key, $likedSliders))
                        <i class="fa-solid fa-heart text-4xl text-red-500"></i>aowko
                        @else
                        <i class="fa-regular fa-heart text-4xl text-primary"></i>akawo
                        @endif --}}
                    <i id="like-icon" class="fa-solid fa-heart text-4xl text-red-500"></i>
                </a>
            </div>
            <p class="font-poppins rounded-full bg-accent px-8"><span id="count-likes"></span> likes</p>
        </div>
    </div>
    
</div>


@push('scripts')
<script>
    var sliders = @json($datas);
    var likedSliders = Object.values(@json($likedSliders));
    console.log(likedSliders);

    
    document.addEventListener('DOMContentLoaded', () => {
        var likee = sliders[0];
        // document.getElementById('category-name').textContent = likes.name;
        document.getElementById('count-likes').textContent = likee.likes;
    });

    document.addEventListener("DOMContentLoaded", function () {
    Livewire.on("likeUpdated", (id, newLikes) => {
        var likedSliders = Object.values(@json($likedSliders));
        console.log(likedSliders);
        let activeSlide = sliders.find(slide => slide.id === id);
        if (activeSlide) {
            activeSlide.likes = newLikes; // Update jumlah likes di slider
        }

        // Jika slide aktif sedang di-like, update tampilan jumlah likes
        let countLikes = document.getElementById("count-likes");
        if (countLikes) {
            countLikes.textContent = newLikes;
        }
    });
});
</script>
@endpush