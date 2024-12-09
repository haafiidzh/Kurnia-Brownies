@extends('front.layouts.master')

@section('title')
    Home
@endsection

@section('content')
    <section id="content" class="s-content">

        <livewire:front.home.slider/>

        <livewire:front.home.about/>

        <livewire:front.home.categories/>
        
        <livewire:front.products.recommended/>

        <livewire:front.home.latest-news/>

    </section> 
@endsection