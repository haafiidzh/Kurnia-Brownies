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

<section class="w-full h-[50vh] md:h-screen relative">
    <div class="swiper w-full h-full slider relative overflow-hidden" wire:ignore>
        <div class="swiper-wrapper">
            @foreach ($datas as $key => $data)
                <div class="swiper-slide relative">
                    <div class="absolute flex w-full h-full justify-center items-center">
                        <figure class="relative w-full h-full overflow-hidden">
                            <img loading="lazy" class="w-full h-full object-center object-cover" src="{{ url($data->image) }}" alt="{{ $data->title }}">
                        </figure>
                    </div>

                    <div class="absolute bottom-10 w-full flex flex-col mb-2 md:mb-0 gap-2 items-center z-30">
                        <div class="bg-transparent hover:bg-accent drop-shadow-md rounded-full h-10 w-10 md:h-14 md:w-14 flex items-center justify-center transition-all duration-300 overflow-visible">
                            <button onclick="handleLike('{{ $data->id }}')" id="like-button-{{ $data->id }}">
                                @if (in_array($data->id, $likedSliders))
                                    <i class="fa-solid fa-heart text-2xl md:text-4xl text-red-500"></i>
                                @else
                                    <i class="fa-regular fa-heart text-2xl md:text-4xl text-primary"></i>
                                @endif
                            </button>
                        </div>
                        <p class="font-poppins rounded-full bg-accent px-4 md:px-8 text-sm md:text-base" id="likes-count-{{ $data->id }}">{{ numberShortner($data->likes) }} suka</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Navigation -->
        <div class="hidden md:block" wire:ignore.self>
            <div class="absolute right-0 z-20 items-center flex h-full top-0">
                <div class="button-next mx-10 p-2 bg-transparent hover:bg-accent rounded-full cursor-pointer transition-all duration-300">
                    <svg class="h-10 w-10" width="800px" height="800px" viewBox="0 0 24 24" fill="#0000"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 5L15.57 11.6237C15.7976 11.8229 15.7976 12.1771 15.57 12.3763L8 19" stroke="#6B2E1F"
                            stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="hidden md:block" wire:ignore.self>
            <div class="absolute left-0 z-20 items-center flex h-full top-0">
                <div class="button-prev mx-10 p-2 bg-transparent hover:bg-accent rounded-full cursor-pointer transition-all duration-300">
                    <svg class="h-10 w-10 rotate-180" width="800px" height="800px" viewBox="0 0 24 24" fill="#0000"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 5L15.57 11.6237C15.7976 11.8229 15.7976 12.1771 15.57 12.3763L8 19" stroke="#6B2E1F"
                            stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="swiper-pagination visible md:invisible"></div>
    </div>
</section>

@push('scripts')
<script>
    function numberShortner(number) {
        if (number >= 0 && number < 1000) {
            return Math.floor(number);
        } else if (number >= 1000 && number < 1000000) {
            return Math.floor(number / 1000) + "K+";
        } else if (number >= 1000000 && number < 1000000000) {
            return Math.floor(number / 1000000) + "M+";
        } else if (number >= 1000000000 && number < 1000000000000) {
            return Math.floor(number / 1000000000) + "B+";
        } else {
            return Math.floor(number / 1000000000000) + "T+";
        }
    }

    function handleLike(id) {
        // Dispatch event ke Livewire
        Livewire.dispatch('toggleLike', { id: id });
    }

    document.addEventListener('livewire:initialized', () => {
        Livewire.on('likeUpdated', (data) => {
            const id = data[0];
            const newLikes = data[1];
            
            // Update icon heart
            const likeButton = document.getElementById(`like-button-${id}`);
            if (likeButton) {
                const heartIcon = likeButton.querySelector('i');
                // Toggle icon berdasarkan event dari server
                if (!heartIcon.classList.contains('fa-solid')) {
                    heartIcon.classList.remove('fa-regular', 'text-primary');
                    heartIcon.classList.add('fa-solid', 'text-red-500');
                } else {
                    heartIcon.classList.remove('fa-solid', 'text-red-500');
                    heartIcon.classList.add('fa-regular', 'text-primary');
                }
            }

            // Update jumlah likes dari database
            const likesCount = document.getElementById(`likes-count-${id}`);
            if (likesCount) {
                likesCount.textContent = `${numberShortner(newLikes)} suka`;
            }
        });
    });
</script>
@endpush