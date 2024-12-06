@extends('front.layouts.master')

@section('title')
    Home
@endsection

@section('content')
    <section id="content" class="s-content">

        <livewire:front.home.slider/>

        <div class="row row-x-center">
            <div class="column lg-12 text-center" style="margin-bottom: 10rem;">
                <h1>About Us</h1>
            </div>
        </div>
        
        <div class="row">
            <!-- Column untuk teks di kiri -->
            <div class="column lg-6 md-6 mob-12 u-flexitem-center" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true">
                <p>Kurnia Brownies is an FnB business that has been around since 1998, starting as a home business and growing into the iconic name it is today. From selling brownies in small pieces to selling them in their original size in 1999, Kurnia Brownies reached its peak in 2004 until 2016. Now, Kurnia Brownies expanding its business into Coffee and Eatery to provide the customer needs.

                </p>
                <p>Etiam fringilla lectus in risus convallis vehicula. Aliquam erat volutpat. Sed fermentum sem sit amet lectus cursus consequat. Nam ultrices eu lectus sit amet malesuada. Integer ut leo non turpis dictum eleifend.</p>
            </div>
        
            <!-- Column untuk gambar di kanan -->
            <div class="column lg-6 md-6 mob-12 u-flexitem-center" data-aos="fade-left" data-aos-duration="2000" data-aos-once="true">
                <img src="https://picsum.photos/id/157/900" alt="Article Image" style="width: 100%;">
            </div>
        </div>

        <livewire:front.products.recommended/>

    </section> 
@endsection