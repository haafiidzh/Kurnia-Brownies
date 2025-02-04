<div>
    <div class="row entry-wrap">
        <div class="column lg-12">

            <article class="entry">

                {{-- <header class="entry__header entry__header--narrow"> --}}

                    <div class="flex flex-col items-center pb-20">
                        <span class="my-0 px-5 bg-gray-300">About Us</span>
                        <h1 class="mt-3 bg-secondary drop-shadow-md p-10">
                            Kurnia Brownies Solo
                        </h1>
                    </div>


                {{-- </header> --}}

                {{-- <div class="entry__media">
                    <figure class="featured-image">
                        <img src="{{ asset('assets/images/default/aded.jpg') }}">
                    </figure>
                </div> --}}

                <div class="content-primary border border-black">

                    <div class="entry__content">

                        <div class="row block-lg-one-half block-tab-whole">

                            <p>
                                Kurnia Brownies is an FnB business that has been around since 1998, starting as a home
                                business and growing into the iconic name it is today. From selling brownies in small
                                pieces to selling them in their original size in 1999, Kurnia Brownies reached its peak
                                in 2004 until 2016. Now, Kurnia Brownies expanding its business into Coffee and Eatery
                                to provide the customer needs.
                            </p>

                        </div>

                    </div> <!-- end content-primary -->

            </article> <!-- end entry -->

            <article class="entry about-parallax about-spacing"
                style="background-image: url('https://picsum.photos/id/88/900');">

                <h1 class="text-center" data-aos="fade-down" data-aos-duration="2000" style="color: white">Ambience</h1>

                <div class="content-primary">

                    <div class="entry__content">

                        <div class="row block-lg-one-half block-tab-whole">
                            <p data-aos="fade-up" data-aos-duration="2000" class="px-10">
                                Interior design is the main aspect when it comes to a cafe, whether it's a café or a
                                restaurant. It's important for the customers to have a good impression of the place so
                                that they can feel comfortable and want to come back again. The interior design of
                                Kurnia Brownies is the main aspect that will make it stand out from other cafes. The
                                Scandinavian-style architecture with lots of wood and furnished parts will give a cozy
                                ambiance to customers, which makes you stay longer at the café.
                            </p>
                        </div>

                    </div> <!-- end content-primary -->

            </article> <!-- end entry -->


            <article class="entry about">

                <h1 class="text-center" data-aos="fade-down" data-aos-duration="2000">Brownies</h1>

                <div class="content-primary">

                    <div class="entry__content">

                        <div class="row block-lg-one-half block-tab-whole">
                            <p data-aos="fade-up" data-aos-duration="2000" class="px-10">
                                Indulge in the perfect harmony of flavors as we unveil our signature brownies. Crafted
                                with love and precision, each velvety square is a symphony of indulgence. The
                                combination of premium cocoa powder and just the right amount of butter elevates our
                                brownies to unparalleled levels of indulgence. It's a culinary dance of textures and
                                flavors that will leave you craving for more.
                            </p>
                        </div>

                    </div> <!-- end content-primary -->

            </article> <!-- end entry -->

            <article class="entry about-parallax about-spacing"
                style="background-image: url('{{ asset('assets/images/default/aded.jpg') }}');">

                <h1 class="text-center" data-aos="fade-down" data-aos-duration="2000" style="color: white">Coffee</h1>

                <div class="content-primary">

                    <div class="entry__content">

                        <div class="row block-lg-one-half block-tab-whole">
                            <p data-aos="fade-up" data-aos-duration="2000" class="px-10">
                                Let us guide you through the tantalizing world of our coffee. We understand that a
                                perfect cup of coffee starts with exceptional beans. From the smooth, velvety notes of
                                our espresso to the rich, vibrant profiles of our single-origin pour-overs, each sip is
                                a celebration of coffee craftsmanship. We believe that every coffee lover deserves to
                                experience the true essence of their chosen brew, and our commitment to using premium
                                beans ensures a transcendental coffee experience that delights the senses.
                            </p>
                        </div>

                    </div> <!-- end content-primary -->

            </article> <!-- end entry -->

            <article class="entry about">

                <h1 class="text-center" data-aos="fade-down" data-aos-duration="2000">Eatery</h1>

                <div class="content-primary">

                    <div class="entry__content">

                        <div class="row block-lg-one-half block-tab-whole">
                            <p data-aos="fade-up" data-aos-duration="2000" class="px-10">
                                step into our eatery, where premium ingredients take center stage. We curate a menu that
                                pays homage to locally sourced, seasonal produce, ensuring that every dish bursts with
                                freshness and flavor. From vibrant, crisp vegetables to succulent, free-range meats,
                                every ingredient is carefully selected to showcase its innate qualities. We believe in
                                honoring the integrity of each component, allowing its natural flavors to shine through
                                in our thoughtfully crafted dishes. With every bite, you embark on a culinary adventure
                                that celebrates the essence of premium ingredients.
                            </p>
                        </div>

                    </div> <!-- end content-primary -->

            </article> <!-- end entry -->

        </div>
    </div> <!-- end entry-wrap -->
</div>

@push('scripts')
    <script>
        window.addEventListener('scroll', function() {
            var parallaxElements = document.querySelectorAll('.about-parallax');
            var scrollPosition = window.pageYOffset;

            // Loop semua elemen dengan class about-parallax
            parallaxElements.forEach(function(parallax) {
                // Atur background-position Y berdasarkan scroll untuk masing-masing elemen
                parallax.style.backgroundPositionY = -(scrollPosition * 0.2) + 'px';
            });
        });
    </script>
@endpush
