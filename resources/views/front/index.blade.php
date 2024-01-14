@extends('layouts.app')
@section('content')
    <!-- Preloader -->
    @include('includes.preloader')
    <section class="hero-area">
        <x-hero>
            @foreach($results as $music)
            <x-hero-slide>
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url({{asset('assets/img/bg-img/bg-1.jpg')}});"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Latest album</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">{{$music->album_title}} <span>{{$music->album_title}}</span></h2>
                                <a data-animation="fadeInUp" data-delay="500ms" href="/albums/{{$music->id}}" class="btn oneMusic-btn mt-50">Discover <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
           </x-hero-slide>
           @endforeach
        </x-hero>
    </section>
    @include('front.partials.albums')
@endsection