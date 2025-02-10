@extends('administrator.layouts.master')

@section('title')
    SEO
@endsection

@section('content')
    <x-breadcrumb :items="[
        ['title' => 'SEO'],
    ]" />
    <div class="mb-7 py-3 flex justify-between">
        <h1 class="font-bold text-2xl">SEO</h1>
    </div>
    <livewire:administrator.setting.seo.table/>
@endsection