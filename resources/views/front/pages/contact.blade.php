@extends('front.layouts.master')

@section('title')
    Contact
@endsection

@section('content')
    <section id="content" class="s-content s-content--page">

        <div class="absolute -z-40 top-0 w-full h-[100px] bg-primary shadow-lg"></div>

        <livewire:front.contact.contact/>

    </section>
@endsection