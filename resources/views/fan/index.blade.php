@extends('layouts.app')
@section('content')
    <section class="jumbotron-fluid text-center border-0 bg-white">
        <div class="head px-5 py-4 bg-absolute bg-overlay">
            <br><br><br><br>
            <div class="text-center mb-2 mt-2">
                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="rounded-circle" style="height: 150px; width: 150px;" >
            </div>
            <br><br>
        </div>
        <div class="container-fluid px-5">
            <div class="hero section-padding-30">
                <div class="mt-4">
                    <h4>{{ Auth::user()->name }}</h4>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="row">
                        @include('fan.partials.follow-count')
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </section>
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
