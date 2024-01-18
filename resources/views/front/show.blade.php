@extends('layouts.app')
@section('content')
<section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed" style="background-image: url({{asset('assets/img/bg-img/bg-4.jpg')}}); height: auto;">
    <div class="container my-4">
        <div class="row align-items-end">
            <div class="col-12 col-md-5 col-lg-4">
               <div class="container text-center">
                    <div class="featured-artist-thumb">
                        <img src="{{asset('storage/' . $results->album_cover)}}" alt="">
                    </div>
                    <div class="d-flex mt-3">
                        <a href="" class="btn btn-light w-50 mr-2 ml-2" type="button">Purchase details</a>
                        <a href="" class="btn btn-light w-50 mr-2" type="button">Add to wishlist</a>
                    </div>
               </div>
            </div>
            <div class="col-12 col-md-7 col-lg-8">
                <div class="featured-artist-content">
                    <!-- Section Heading -->
                    <div class="section-heading white text-left mb-30">
                        <p>{{$results->artist_name}}</p>
                        <h2>{{$results->album_title}}</h2>
                    </div>
                    <p>{{$results->album_description}}</p>
                    <div class="song-play-area">
                        <div class="song-name">
                            <p>01. Main Hit Song</p>
                        </div>
                        <audio preload="auto" controls>
                            <source src="audio/dummy-audio.mp3">
                        </audio>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection