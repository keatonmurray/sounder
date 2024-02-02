@extends('layouts.app')
@section('content')
<x-breadcrumb>
    <p>Choose how you want to register as</p>
    <h2>Fan/Artist Signup</h2>
</x-breadcrumb>
<section class="login-area section-padding-100 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-md-2 col-md-4 col-md-2 py-3">
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                      <h4 class="card-title text-uppercase">Fan</h4>
                      <h6 class="card-subtitle mb-2 text-muted text-uppercase">$0 / month</h6>
                      <p class="card-text">Signing up as a <b class="text-uppercase">fan</b> allows you to directly support and follow artists, stream music, and connect with everyone within the Sounder community. All albums you purchase will be publicly visible in your profile.</p>
                      <a href="/fan-account-signup" class="mt-4 d-block">Signup as a Fan</a>
                    </div>
                </div>
            </div>
            <div class="col-10 col-md-2 col-md-4 col-md-2 py-3">
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                      <h4 class="card-title text-uppercase">Artist</h4>
                      <h6 class="card-subtitle mb-2 text-muted text-uppercase">$0 / month</h6>
                      <p class="card-text">Signing up as an <b class="text-uppercase">artist</b> allows you publish your music, sell your merchandise, and build your audience, while keeping 100% of your copyright. We only take a 5% cut off of your digital and physical sales</p>
                      <a href="/artist-account-signup" class="mt-4 d-block">Signup as an Artist</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
@endsection