@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush

<div>
    <div id="about" class="p-20 md:p-56">
        <div class="flex w-full gap-10 flex-col lg:flex-row">
            <!-- Column untuk teks di kiri -->
            <div class="w-full lg:w-1/2  flex justify-center flex-col">
                <h2 class="text-orange-950 my-10 drop-shadow-md">
                    Kurnia Brownies
                </h2>
                <p class="text-md" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true">
                    Kurnia Brownies is an FnB business that has been around since 1998, starting as a home business and
                    growing into the iconic name it is today. From selling brownies in small pieces to selling them in
                    their original size in 1999, Kurnia Brownies reached its peak in 2004 until 2016. Now, Kurnia
                    Brownies expanding its business into Coffee and Eatery to provide the customer needs.
                </p>
                <div class="flex my-6 sm:gap-10 gap-5 flex-col sm:flex-row items-center sm:items-normal">
                    <div data-aos="fade-up" data-aos-duration="2000"
                    data-aos-once="true">
                    <a href="{{ route('contact') }}" class="btn" >
                        Contact Us
                    </a>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="2000"
                    data-aos-once="true">
                            
                    <a href="{{ route('about') }}" class="btn btn--primary">
                        About Us</a>  
                    </div>
                </div>

            </div>

            <!-- Column untuk gambar di kanan -->
            <div class="aboutus-swiper lg:order-last order-first w-full lg:w-1/2" data-aos="fade-left"
                data-aos-duration="2000" data-aos-once="true">
                <div class="swiper-wrapper overflow-hidden">
                    @php
                        $datas = App\Models\Product::all();
                    @endphp
                    @foreach ($datas as $data)
                    <div class="swiper-slide rounded-2xl overflow-hidden">
                        <img class="rounded-2xl shadow-lg mb-0 object-cover w-full"
                            src="{{ url($data->image) }}" alt="">
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Swiper for About Us Home
        var swiper = new Swiper(".aboutus-swiper", {
            grabCursor: true,
            effect: "creative",

            creativeEffect: {
                slideShadows: false,
                prev: {
                    shadow: true,
                    translate: [0, 0, -400],
                },
                next: {
                    translate: ["100%", 0, 0],
                },
            },
            loop: true,
            autoplay: {
                true: 3000
            }
        });
    </script>
@endpush
