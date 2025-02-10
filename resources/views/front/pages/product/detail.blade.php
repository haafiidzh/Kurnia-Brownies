@extends('front.layouts.master')

@section('title')
    Detail
@endsection

@section('content')
    <livewire:front.products.detail :slug="$slug" />

    <livewire:front.cta-product />
@endsection
