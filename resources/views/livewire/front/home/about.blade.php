<div class="relative w-full flex items-center overflow-hidden">
    <div class="w-full z-10 flex items-center font-poppins pt-10 pb-[120px] px-10 lg:p-[120px] bg-white bg-opacity-50 md:bg-transparent">
        <div class="flex flex-col gap-10">
            <div class="max-w-[700px] flex flex-col space-y-5 md:space-y-5">
                <h1 data-aos="fade-right" data-aos-duration="2000" data-aos-easing="ease-out" data-aos-once="true"
                    class="w-full sm:max-w-[400px] md:max-w-[700px] drop-shadow-md italic font-bold text-3xl md:text-6xl font-nunito text-primary">
                    Welcome to Kurnia Brownies
                </h1>
                <p data-aos="fade-up" data-aos-duration="2000" data-aos-easing="ease-out" data-aos-once="true" data-aos-delay="500" class="text-gray-700 start py-2 rounded text-md sm:text-lg">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste et corporis illo, neque vel sapiente dolorem nobis tenetur id officia doloremque, alias assumenda eos animi deleniti vero consectetur? Maiores mollitia reiciendis ad aperiam voluptatum a aliquid, voluptatibus at facilis! Repudiandae eos ullam, minima ad sint nobis pariatur magnam eum suscipit?
                </p>
            </div>
            <a href="{{ route('about') }}"
                class="self-start px-8 py-2 bg-primary border-2 border-primary hover:bg-accent hover:text-primary text-gray-200 font-poppins tracking-wider shadow-md rounded font-semibold transition-colors duration-300">
                Tentang Kami
            </a>
        </div>
    </div>

    <div class="absolute right-0 z-0 drop-shadow-2xl" data-aos="fade-left" data-aos-easing="ease-out" data-aos-duration="2000" data-aos-once="false">
        <img src="{{ url('assets/images/default/bronies.png') }}" alt="">
    </div>
</div>