@extends('layouts.app')
@section('content')
<x-breadcrumb>
    <p>Join the Sounder community</p>
    <h2>SIGNUP</h2>
</x-breadcrumb>
<section class="login-area section-padding-100 bg-white" style="height: auto;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card text-center" style="height: 300px;">
                    <div class="card-body">
                      <h4 class="card-title text-uppercase">Fan</h4>
                      <h6 class="card-subtitle mb-2 text-muted text-uppercase">Free</h6>
                      <p class="card-text">Signing up as a <b class="text-uppercase">fan</b> allows you to directly support and follow artists, stream music, and connect with everyone within the Sounder community. All albums you purchase will be publicly visible in your profile.</p>
                      <a href="/fan-account-signup" class="mt-4 d-block">Signup as a Fan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center" style="height: 300px;">
                    <div class="card-body">
                      <h4 class="card-title text-uppercase">Artist</h4>
                      <h6 class="card-subtitle mb-2 text-muted text-uppercase">Free</h6>
                      <p class="card-text">Signing up as an <b class="text-uppercase">artist</b> allows you publish your music, sell your merchandise, and build your audience, while keeping 100% of your copyright. We only take a 5% cut off of your digital and physical sales</p>
                      <a href="/artist-account-signup" class="mt-4 d-block">Signup as an Artist</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center" style="height: 300px;">
                    <div class="card-body">
                      <h4 class="card-title text-uppercase">Label</h4>
                      <h6 class="card-subtitle mb-2 text-muted text-uppercase">Free</h6>
                      <p class="card-text">Signing up as a <b class="text-uppercase">fan</b> allows you to directly support and follow artists, stream music, and connect with everyone within the Sounder community. All albums you purchase will be publicly visible in your profile.</p>
                      <a href="/fan-account-signup" class="mt-4 d-block">Signup as a Label</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection