@extends('front.layouts.master')

@section('content')
<section>

    <livewire:front.news.detail :slug="$slug"/>

    <livewire:front.cta-product />
</section> <!-- end s-content -->
@endsection