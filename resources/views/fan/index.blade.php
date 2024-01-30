@extends('layouts.app')

@section('content')
    <x-breadcrumb>
        <div class="text-center mb-2">
            <img src="{{asset('assets/img/bg-img/chase.jpg')}}" class="rounded-circle" style="height: 100px; width: 100px;" >
        </div>
        <h5>{{ Auth::user()->name }}</h5>
        <div class="d-flex justify-content-around justify-content-lg">
            @include('fan.partials.follow-count')
        </div>
    </x-breadcrumb>
    <section class="album-catagory section-padding-100-0 bg-white">
        <div class="container">
            <div class="mb-30 mt-30">
                <h2>Albums Bought</h2>
            </div>
            @include('fan.partials.collections')
            <br><br><br>
        </div>
    </section>
@endsection
