<div>
    <section class="px-10 lg:px-[120px] py-10 md:py-20">
        <div class="w-full flex gap-10 flex-col md:flex-row">
            <div class="w-full md:w-1/3 flex flex-col gap-6 md:gap-10 justify-center">
                <h2 class="font-nunito text-4xl md:text-6xl text-primary font-bold italic drop-shadow-md">
                    {{ cache('contact.page-section-title') ?: 'Kurnia Brownies' }}
                </h2>
                <div class="flex flex-col gap-6">
    
                    <ul class="flex flex-col text-primary gap-3">
                        <li class="flex gap-5 items-center">
                            <div class="h-7 w-7 flex items-center self-start justify-center flex-shrink-0">
                                <i class="fa-solid fa-clock text-xl"></i>
                            </div>
    
                            <p class="font-poppins text-gray-600 tracking-wide">
                                {{ cache('contact.open-hours') . ' - ' . cache('contact.close-hours') ?: '08.00 - 24.00'}}
                            </p>
                        </li>
                        
                        <li class="flex gap-5 items-center">
                            <div class="h-7 w-7 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-envelope text-xl"></i>
                            </div>
    
                            <a href="mailto:{{ cache('contact-email') ?: 'kurnia@gmail.com' }}" target="_blank">
                                <p
                                    class="font-poppins text-gray-600 tracking-wide hover:text-gray-700 transition-colors">
                                    {{ cache('contact-email') ?: 'kurnia@gmail.com' }}
                                </p>
                            </a>
                        </li>
                        <li class="flex gap-5 items-center">
                            <div class="h-7 w-7 flex items-center justify-center flex-shrink-0">
                                <i class="fa-brands fa-square-whatsapp text-2xl"></i>
                            </div>
    
                            <a href="https://wa.me/{{ cache('contact-whatsapp') ?: '' }}?text={{ urlencode(cache('contact-whatsapp-text') ?: 'Halo, Saya mau pesan brownies.') }}" target="_blank">
                                <p
                                    class="font-poppins text-gray-600 tracking-wide hover:text-gray-700 transition-colors">
                                    {{ cache('contact-whatsapp') ?: '' }}
                                </p>
                            </a>
                        </li>
                        <li class="flex gap-5 items-center">
                            <div class="h-7 w-7 flex items-center self-start justify-center flex-shrink-0">
                                <i class="fa-solid fa-map-pin text-xl"></i>
                            </div>
    
                            <p class="font-poppins text-gray-600 tracking-wide">
                                {{ cache('contact-address') ?: 'Jl. Adi Sucipto, Gatak, Blulukan, Kec. Colomadu, Kabupaten Karanganyar, Jawa Tengah 57174' }}
                            </p>
                        </li>
                    </ul>
                    <div class="border-t border-primary w-3/4"></div>
                    <div class="flex flex-col gap-3">
                        <h3 class="font-nunito font-bold tracking-wide text-3xl text-primary">{{ cache('contact.socmed-title') ?: 'Ikuti Kami' }}</h3>
                        <ul class="flex gap-6">
                            @if (cache('social-instagram_name'))
                            <li>
                                <a href="{{ cache('social-instagram_link') ?: 'javascript:void(0)' }}"
                                class="text-primary hover:text-gray-700 transition-colors w-6 h-6 flex justify-center items-center">
                                    <i class="fa-brands fa-instagram text-2xl"></i>
                                </a>
                            </li>
                            @endif
                            @if (cache('social-tiktok_name'))
                            <li>
                                <a href="{{ cache('social-tiktok_link') ?: 'javascript:void(0)' }}"
                                    class="text-primary hover:text-gray-700 transition-colors w-6 h-6 flex justify-center items-center">
                                    <i class="fa-brands fa-tiktok text-2xl"></i>
                                </a>
                            </li>
                            @endif
                            @if (cache('social-facebook_name'))
                            <li>
                                <a href="{{ cache('social-facebook_link') ?: 'javascript:void(0)' }}"
                                    class="text-primary hover:text-gray-700 transition-colors w-6 h-6 flex justify-center items-center">
                                    <i class="fa-brands fa-facebook text-2xl"></i>
                                </a>
                            </li>
                            @endif
                            @if (cache('social-youtube_name'))
                            <li>
                                <a href="{{ cache('social-youtube_link') ?: 'javascript:void(0)' }}"
                                    class="text-primary hover:text-gray-700 transition-colors w-6 h-6 flex justify-center items-center">
                                    <i class="fa-brands fa-youtube text-2xl"></i>
                                </a>
                            </li>
                            @endif
                            @if (cache('social-twitter_name'))
                            <li>
                                <a href="{{ cache('social-twitter_link') ?: 'javascript:void(0)' }}"
                                    class="text-primary hover:text-gray-700 transition-colors w-6 h-6 flex justify-center items-center">
                                    <i class="fa-brands fa-twitter text-2xl"></i>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <figure class="flex-grow overflow-hidden border border-black/45 rounded-xl" data-aos="fade-up"
                data-aos-duration="2000" data-aos-once="true" data-aos-easing="ease-out">
                {!! updateIframeAttributes(cache('contact-embed_maps') ?: '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.3247498846904!2d110.76000737500253!3d-7.5395170924738535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a15fdbcf0e459%3A0x1312f15edb264ce1!2sKurnia%20Brownies%20Bake%20and%20Brew!5e0!3m2!1sid!2sid!4v1734979070958!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>') !!}
            </figure>
        </div>
    </section>

    <section class="px-10 lg:px-[120px] mb-20 overflow-hidden">
        <div class="flex justify-center mb-16">
            <div class=" inline-block text-center">
                <h2 class="text-center font-nunito italic text-3xl md:text-5xl text-primary font-bold drop-shadow-md pb-2 md:pb-4">
                    {{ cache('contact.merchant-title') ?: 'Our Merchant' }}
                </h2>
                <div class="border-b-2 mx-auto border-primary/65 w-[50%] text-center"></div>
            </div>
        </div>
        <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-6 place-items-center mt-16">
            <a href="{{ cache('merchant-shopeefood_link') ?: 'javascript:void(0)' }}" class="w-3/4 md:w-full flex flex-col justify-center items-center gap-1 md:gap-6 border-r-0 border-b md:border-r md:border-b-0 border-primary pb-10 md:pb-0" data-aos="fade-left" data-aos-easing="ease-out" data-aos-once="true" data-aos-duration="2000" >
                <img class="object-contain h-20 md:h-36" src="{{ url('assets/images/default/logo/shopee-food-removebg.png') }}?v={{ time() }}" alt="Logo Shopee Food">
                <p class="font-poppins text-gray-800 text-lg font-semibold">Shopee Food</p>
            </a>
            <a href="{{ cache('merchant-grabfood_link') ?: 'javascript:void(0)' }}" class="w-3/4 md:w-full flex flex-col justify-center items-center gap-1 md:gap-6 border-r-0 border-b md:border-r md:border-b-0 border-primary pb-10 md:pb-0" data-aos="fade-left" data-aos-easing="ease-out" data-aos-once="true" data-aos-duration="2000" data-aos-delay="500">
                <img class="object-contain h-20 md:h-36" src="{{ url('assets/images/default/logo/grab-food-removebg.png') }}?v={{ time() }}" alt="Logo Grab Food">
                <p class="font-poppins text-gray-800 text-lg font-semibold">Grab Food</p>
            </a>
            <a href="{{ cache('merchant-gofood_link') ?: 'javascript:void(0)' }}" class="w-3/4 md:w-full flex flex-col justify-center items-center gap-1 md:gap-6" data-aos="fade-left" data-aos-easing="ease-out" data-aos-once="true" data-aos-duration="2000" data-aos-delay="1000">
                <img class="object-contain h-20 md:h-36" src="{{ url('assets/images/default/logo/go-food-removebg.png') }}?v={{ time() }}" alt="Logo GoFood">
                <p class="font-poppins text-gray-800 text-lg font-semibold">Go Food</p>
            </a>
        </div>
    </section>
</div>