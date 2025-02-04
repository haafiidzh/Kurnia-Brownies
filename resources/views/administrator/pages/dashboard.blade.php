@extends('administrator.layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <livewire:administrator.dashboard.overview/>
    <div class="border-2 p-4 w-full border-black flex justify-center">
        <model-viewer src="{{ asset('assets/model/tes-3d-model.glb') }}" auto-rotate camera-controls></model-viewer>
    </div>
    <div class="border-2 p-4 w-full border-black flex justify-center mb-10">
        <model-viewer src="{{ asset('assets/model/brownie.glb') }}" auto-rotate camera-controls></model-viewer>
    </div>
@endsection
