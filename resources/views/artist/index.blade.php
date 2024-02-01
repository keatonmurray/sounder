@extends('layouts.app')
@section('content')
    <x-breadcrumb>
        <div class="text-center mb-2">
            <img src="{{asset('assets/img/bg-img/chase.jpg')}}" class="rounded-circle" style="height: 100px; width: 100px;" >
        </div>
        <h5>{{ Auth::user()->name }}</h5>
        <div class="d-flex justify-content-around justify-content-lg">
            <div class="row">
                @include('artist.partials.followers')
            </div>
            <div class="row">
                @include('artist.partials.following')
            </div>
        </div>
    </x-breadcrumb>
    @include('artist.partials.discographies')
    @include('artist.partials.merch')
@endsection