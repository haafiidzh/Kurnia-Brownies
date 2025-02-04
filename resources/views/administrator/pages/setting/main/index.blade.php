@extends('administrator.layouts.master')

@section('title')
    Pengaturan
@endsection

@section('content')
    <x-breadcrumb :items="[
        ['title' => 'Pengaturan'],
    ]" />
    <div class="mb-7 py-3 flex justify-between">
        <h1 class="font-bold text-2xl">Pengaturan Utama</h1>
    </div>
    <livewire:administrator.setting.main.table/>
@endsection