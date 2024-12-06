@extends('administrator.layouts.master')

@section('title')
    CMS
@endsection

@section('content')
    <x-breadcrumb :items="[
        ['title' => 'CMS'],
    ]" />
    <div class="mb-7 py-3 flex justify-between">
        <h1 class="font-bold text-2xl">Content Management System</h1>
    </div>
    <livewire:administrator.cms.content.table/>
@endsection