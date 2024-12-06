@extends('administrator.layouts.master')

@section('title')
    Slider
@endsection

@section('content')
    <x-breadcrumb :items="[
        ['title' => 'Slider', 'route' => 'administrator.sliders'],
        ['title' => 'Edit '],
    ]" />
    <div class="mb-7 py-3 flex justify-between">
        <h1 class="font-bold text-2xl">Edit Slider</h1>
        <a wire:navigate href="{{ route('administrator.sliders') }}"
                class="px-2 py-2 rounded-md flex items-center text-slate-700 font-medium border-2 border-black hover:bg-white hover:text-black hover:border-transparent hover:shadow-md active:bg-slate-300 transition-all">
                <i class="text-xs fa-solid fa-arrow-left"></i> &nbsp; Kembali
            </a>
    </div>
    <livewire:administrator.cms.slider.edit :id="$id"/>
@endsection