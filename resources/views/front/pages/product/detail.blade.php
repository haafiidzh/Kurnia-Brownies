@extends('front.layouts.master')

@section('content')
    <livewire:front.products.detail :slug="$slug" />

    <livewire:front.cta-product />
@endsection
