@push('styles')
    <style>
        .fade-in {
            opacity: 0;
            animation: fadeIn 1s ease-out forwards;
            animation-delay: 0.5s;
        }

        .fade-up {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeUp 1s ease-out forwards;
            animation-delay: 1s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
@endpush

<section class="relative w-full flex items-center overflow-hidden">
    <div class="w-full z-10 flex items-center font-poppins pt-10 pb-[120px] px-10 lg:p-[120px] bg-white bg-opacity-50 md:bg-transparent">
        <div class="flex flex-col gap-10">
            <div class="hidden max-w-[700px] md:flex flex-col space-y-5 md:space-y-5">
                <h2 data-aos="fade-right" data-aos-duration="2000" data-aos-easing="ease-out" data-aos-once="true"
                    class="w-full sm:max-w-[400px] md:max-w-[700px] drop-shadow-md italic font-bold text-3xl md:text-6xl font-nunito text-primary">
                    {{ cache('homepage.about-title') ?: 'Welcome to Kurnia Brownies' }}
                </h2>
                <p data-aos="fade-up" data-aos-duration="2000" data-aos-easing="ease-out" data-aos-once="true" data-aos-delay="500" class="text-gray-700 start py-2 rounded text-md sm:text-lg">
                    {{ cache('homepage.about-description') ?: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste et corporis illo, neque vel sapiente dolorem nobis tenetur id officia doloremque, alias assumenda eos animi deleniti vero consectetur? Maiores mollitia reiciendis ad aperiam voluptatum a aliquid, voluptatibus at facilis! Repudiandae eos ullam, minima ad sint nobis pariatur magnam eum suscipit?' }}
                </p>
            </div>
            <div class="md:hidden max-w-[700px] flex flex-col space-y-5 md:space-y-5">
                <h2
                    class="fade-in w-full sm:max-w-[400px] md:max-w-[700px] drop-shadow-md italic font-bold text-3xl md:text-6xl font-nunito text-primary">
                    {{ cache('homepage.about-title') ?: 'Welcome to Kurnia Brownies' }}
                </h2>
                <p class="fade-up text-gray-700 start py-2 rounded text-md sm:text-lg">
                    {{ cache('homepage.about-description') ?: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste et corporis illo, neque vel sapiente dolorem nobis tenetur id officia doloremque, alias assumenda eos animi deleniti vero consectetur? Maiores mollitia reiciendis ad aperiam voluptatum a aliquid, voluptatibus at facilis! Repudiandae eos ullam, minima ad sint nobis pariatur magnam eum suscipit?' }}
                </p>
            </div>
            <a href="{{ route('about') }}"
                class="self-start px-8 py-2 bg-primary border-2 border-primary hover:bg-accent hover:text-primary text-gray-200 font-poppins tracking-wider shadow-md rounded font-semibold transition-colors duration-300">
                Tentang Kami
            </a>
        </div>
    </div>

    <div class="w-[70%] md:w-[566px] absolute h-full flex items-center justify-end right-0 z-0 drop-shadow-2xl" data-aos="fade-left" data-aos-easing="ease-out" data-aos-duration="2000" data-aos-once="false">
        <img src="{{ url(cache('homepage.about-image') ?: 'assets/images/default/bronies.png') }}" alt="{{ cache('homepage.about-image-alt') ?: cache('homepage.about-title') }}">
    </div>
</section>