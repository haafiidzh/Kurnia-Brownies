@extends('administrator.layouts.master')

@section('title')
    Konten
@endsection

@section('content')
    <x-breadcrumb :items="[
        ['title' => 'Konten'],
    ]" />
    <div class="mb-7 py-3 flex justify-between">
        <h1 class="font-bold text-2xl">Konten</h1>
    </div>
    <livewire:administrator.setting.content.table/>
@endsection