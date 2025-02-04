@extends('administrator.layouts.master')

@section('title')
    Pengaturan
@endsection

@section('content')
    <x-breadcrumb :items="[
        ['title' => 'Pengaturan', 'route' => 'administrator.app-setting'],
        ['title' => 'Edit '],
    ]" />
    <div class="mb-7 py-3 flex justify-between">
        <h1 class="font-bold text-2xl">Edit</h1>
        <a wire:navigate href="{{ route('administrator.app-setting') }}"
                class="px-2 py-2 rounded-md flex items-center text-slate-700 font-medium border-2 border-black hover:bg-white hover:text-black hover:border-transparent hover:shadow-md active:bg-slate-300 transition-all">
                <i class="text-xs fa-solid fa-arrow-left"></i> &nbsp; Kembali
            </a>
    </div>
    <livewire:administrator.setting.main.edit :id="$cmsId"/>
@endsection