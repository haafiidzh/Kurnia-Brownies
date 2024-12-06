@extends('administrator.layouts.master')

@section('title')
    Profile
@endsection

@section('content')
    <x-breadcrumb :items="[['title' => 'Profile']]" />
    <div class="mb-7 py-3 flex justify-between">
        <h1 class="font-bold text-3xl">Profile</h1>
    </div>
    <livewire:administrator.profile.profile/>
@endsection
