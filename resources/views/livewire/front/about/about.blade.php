<div class="flex w-full">
    <div class="w-[8%] border-r h-auto border-primary bg-gray-100"></div>
    <div class="w-[92%] relative flex flex-col items-end overflow-hidden">

        {{-- About --}}
        <div class="px-10 md:pl-20 md:pr-0 py-10 md:py-0 flex flex-col-reverse items-center md:flex-row gap-0 md:gap-10 w-full relative">
            <div class="inset-0 absolute bg-gray-100 md:bg-accent -z-20"></div>
            <div class="inset-0 absolute bg-transparent bg-gradient-to-t md:bg-gradient-to-r from-gray-100 via-transparent to-transparent from-60% via-80% to-100%" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in" data-aos-once="true"></div>

            <div class="w-full md:w-1/2 z-20 py-0 md:py-20 flex flex-col items-center mt-10 md:mt-0" >
                <h2 class="font-nunito text-3xl md:text-4xl text-primary font-bold text-center tracking-wider mb-2 italic drop-shadow-md">About Kurnia</h2>
                  <div class="border-b-2 border-primary/65 w-[50%] md:w-[30%] text-center"></div>
                <p class="w-3/4 mt-5 md:mt-10 font-poppins text-center leading-[2] text-gray-800 text-xs md:text-base" >
                    Kurnia Brownies is an FnB business that has been around since 1998, starting as a home business and growing into the iconic name it is today. From selling brownies in small pieces to selling them in their original size in 1999, Kurnia Brownies reached its peak in 2004 until 2016. Now, Kurnia Brownies expanding its business into Coffee and Eatery to provide the customer needs.
                </p>
            </div>
            <div class="h-full md:w-1/2 -z-10 rounded-xl md:rounded-none overflow-hidden"> 
                <img class="object-cover h-full w-full" src="{{ asset('assets/images/default/about/1.jpg') }}" alt="" data-aos="fade" data-aos-duration="500" data-aos-easing="ease-in" data-aos-delay="1000" data-aos-once="true">
            </div>
        </div>

        {{-- Brownie --}}
        <div class="px-10 md:pr-20 md:pl-0 py-10 md:py-0 flex flex-col-reverse items-center md:flex-row-reverse gap-0 md:gap-10 w-full relative">
            <div class="inset-0 absolute bg-gray-100 -z-20"></div>
            <div class="md:visible invisible inset-0 absolute bg-gradient-to-l from-accent via-transparent to-transparent from-60% via-80% to-100%" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in" data-aos-once="true"></div>
            <div class="visible md:invisible inset-0 absolute bg-gradient-to-t from-accent via-transparent to-transparent from-60% via-80% to-100%" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in" data-aos-once="true"></div>

            <div class="w-full md:w-1/2 z-20 py-0 md:py-20 flex flex-col items-center mt-10 md:mt-0" >
                <h2 class="font-nunito text-3xl md:text-4xl text-primary font-bold text-center tracking-wider mb-2 italic drop-shadow-md">Brownies</h2>
                  <div class="border-b-2 border-primary/65 w-[50%] md:w-[30%] text-center"></div>
                <p class="w-3/4 mt-5 md:mt-10 font-poppins text-center leading-[2] text-gray-800 text-xs md:text-base" >
                    Indulge in the perfect harmony of flavors as we unveil our signature brownies. Crafted with love and precision, each velvety square is a symphony of indulgence. The combination of premium cocoa powder and just the right amount of butter elevates our brownies to unparalleled levels of indulgence. It's a culinary dance of textures and flavors that will leave you craving for more.
                </p>
            </div>
            <div class="h-full md:w-1/2 -z-10 rounded-xl md:rounded-none overflow-hidden"> 
                <img class="object-cover h-full w-full" src="{{ asset('assets/images/default/about/2.jpg') }}" alt="" data-aos="fade" data-aos-duration="500" data-aos-easing="ease-in" data-aos-delay="1000" data-aos-once="true">
            </div>
        </div>

        {{-- Coffee --}}
        <div class="px-10 md:pl-20 md:pr-0 py-10 md:py-0 flex flex-col-reverse items-center md:flex-row gap-0 md:gap-10 w-full relative">
            <div class="inset-0 absolute bg-accent -z-20"></div>
            <div class="md:visible invisible inset-0 absolute bg-gradient-to-r from-gray-100 via-transparent to-transparent from-60% via-80% to-100%" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in" data-aos-once="true"></div>
            <div class="visible md:invisible inset-0 absolute bg-gradient-to-t from-gray-100 via-transparent to-transparent from-60% via-80% to-100%" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in" data-aos-once="true"></div>
            
            <div class="w-full md:w-1/2 z-20 py-0 md:py-20 flex flex-col items-center mt-10 md:mt-0" >
                <h2 class="font-nunito text-3xl md:text-4xl text-primary font-bold text-center tracking-wider mb-2 italic drop-shadow-md">Coffee</h2>
                  <div class="border-b-2 border-primary/65 w-[50%] md:w-[30%] text-center"></div>
                <p class="w-3/4 mt-5 md:mt-10 font-poppins text-center leading-[2] text-gray-800 text-xs md:text-base" >
                    Let us guide you through the tantalizing world of our coffee. We understand that a perfect cup of coffee starts with exceptional beans. From the smooth, velvety notes of our espresso to the rich, vibrant profiles of our single-origin pour-overs, each sip is a celebration of coffee craftsmanship. We believe that every coffee lover deserves to experience the true essence of their chosen brew, and our commitment to using premium beans ensures a transcendental coffee experience that delights the senses.
                </p>
            </div>
            <div class="h-full md:w-1/2 -z-10 rounded-xl md:rounded-none overflow-hidden"> 
                <img class="object-cover h-full w-full" src="{{ asset('assets/images/default/about/5.jpg') }}" alt="" data-aos="fade" data-aos-duration="500" data-aos-easing="ease-in" data-aos-delay="1000" data-aos-once="true">
            </div>
        </div>

        {{-- Eatery --}}
        <div class="px-10 md:pr-20 md:pl-0 py-10 md:py-0 flex flex-col-reverse items-center md:flex-row-reverse gap-0 md:gap-10 w-full relative">
            <div class="inset-0 absolute bg-gray-100 -z-20"></div>
            
            <div class="md:visible invisible inset-0 absolute bg-gradient-to-l from-accent via-transparent to-transparent from-60% via-80% to-100%" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in" data-aos-once="true"></div>
            <div class="visible md:invisible inset-0 absolute bg-gradient-to-t from-accent via-transparent to-transparent from-60% via-80% to-100%" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in" data-aos-once="true"></div>

            <div class="w-full md:w-1/2 z-20 py-0 md:py-20 flex flex-col items-center mt-10 md:mt-0" >
                <h2 class="font-nunito text-3xl md:text-4xl text-primary font-bold text-center tracking-wider mb-2 italic drop-shadow-md">Eatery</h2>
                  <div class="border-b-2 border-primary/65 w-[50%] md:w-[30%] text-center"></div>
                <p class="w-3/4 mt-5 md:mt-10 font-poppins text-center leading-[2] text-gray-800 text-xs md:text-base" >
                    Step into our eatery, where premium ingredients take center stage. We curate a menu that pays homage to locally sourced, seasonal produce, ensuring that every dish bursts with freshness and flavor. From vibrant, crisp vegetables to succulent, free-range meats, every ingredient is carefully selected to showcase its innate qualities. We believe in honoring the integrity of each component, allowing its natural flavors to shine through in our thoughtfully crafted dishes. With every bite, you embark on a culinary adventure that celebrates the essence of premium
                </p>
            </div>
            <div class="h-full md:w-1/2 -z-10 rounded-xl md:rounded-none overflow-hidden"> 
                <img class="object-cover h-full w-full" src="{{ asset('assets/images/default/about/4.jpeg') }}" alt="" data-aos="fade" data-aos-duration="500" data-aos-easing="ease-in" data-aos-delay="1000" data-aos-once="true">
            </div>
        </div>

        {{-- Ambiance --}}
        <div class="px-10 md:pl-20 md:pr-0 py-10 md:py-0 flex flex-col-reverse items-center md:flex-row gap-0 md:gap-10 w-full relative">
            <div class="inset-0 absolute bg-accent -z-20"></div>
            <div class="md:visible invisible inset-0 absolute bg-gradient-to-r from-gray-100 via-transparent to-transparent from-60% via-80% to-100%" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in" data-aos-once="true"></div>
            <div class="visible md:invisible inset-0 absolute bg-gradient-to-t from-gray-100 via-transparent to-transparent from-60% via-80% to-100%" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in" data-aos-once="true"></div>
            <div class="w-full md:w-1/2 z-20 py-0 md:py-20 flex flex-col items-center mt-10 md:mt-0" >
                <h2 class="font-nunito text-3xl md:text-4xl text-primary font-bold text-center tracking-wider mb-2 italic drop-shadow-md">Ambiance</h2>
                  <div class="border-b-2 border-primary/65 w-[50%] md:w-[30%] text-center"></div>
                <p class="w-3/4 mt-5 md:mt-10 font-poppins text-center leading-[2] text-gray-800 text-xs md:text-base" >
                    Interior design is the main aspect when it comes to a cafe, whether it's a café or a restaurant. It's important for the customers to have a good impression of the place so that they can feel comfortable and want to come back again. The interior design of Kurnia Brownies is the main aspect that will make it stand out from other cafes. The Scandinavian-style architecture with lots of wood and furnished parts will give a cozy ambiance to customers, which makes you stay longer at the café.
                </p>
            </div>
            <div class="h-full md:w-1/2 -z-10 rounded-xl md:rounded-none overflow-hidden"> 
                <img class="object-cover h-full w-full" src="{{ asset('assets/images/default/about/3.jpg') }}" alt="" data-aos="fade" data-aos-duration="500" data-aos-easing="ease-in" data-aos-delay="1000" data-aos-once="true">
            </div>
        </div>
        {{-- <div class="pl-20 pr-20 md:pr-0 flex flex-col-reverse md:flex-row gap-10 w-full relative">
            <div class="inset-0 absolute bg-accent -z-20"></div>
            <div class="inset-0 absolute bg-transparent md:bg-gradient-to-r from-gray-100 via-transparent to-transparent from-60% to-100% "data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in" data-aos-once="true"></div>

            <div class="w-full md:w-1/2 z-20 py-20">
                <h2 class="font-nunito text-4xl text-primary font-bold text-center tracking-wider mb-2 italic drop-shadow-md">Ambiance</h2>
                <div class="flex justify-center">
                  <div class="border-b-2 border-primary/65 w-[30%] md:w-[20%] text-center"></div>
                </div>
                    <p class="mt-10 font-poppins text-center leading-[2] text-gray-800">
                        Interior design is the main aspect when it comes to a cafe, whether it's a café or a restaurant. It's important for the customers to have a good impression of the place so that they can feel comfortable and want to come back again. The interior design of Kurnia Brownies is the main aspect that will make it stand out from other cafes. The Scandinavian-style architecture with lots of wood and furnished parts will give a cozy ambiance to customers, which makes you stay longer at the café.
                    </p>
            </div>
            <div class="w-full md:w-1/2 -z-10"> 
                <img class="object-cover h-full w-full" src="{{ asset('assets/images/default/about/5.jpg') }}" alt="" data-aos="fade" data-aos-duration="500" data-aos-easing="ease-in" data-aos-delay="1000" data-aos-once="true">
            </div>
        </div> --}}
        
    </div>
</div>