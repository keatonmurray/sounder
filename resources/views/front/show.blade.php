@extends('layouts.app')
@section('content')
    <section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-absolute">
        <div class="bg-img text-center">
            <img src="{{asset('storage/' . $results->album_cover)}}" alt="">
        </div>
        <div class="container my-4">  
            <form action="" method="POST">
                <div class="row align-items-end">
                    <div class="col-12 col-md-5 col-lg-4">
                        <div class="container text-center">
                            <div class="featured-artist-thumb">
                                <img src="{{asset('storage/' . $results->album_cover)}}">
                            </div>
                            <div class="d-flex mt-3">
                                <a href="" class="show-btn btn btn-light w-50 mr-2 ml-2" type="button">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    Buy for ${{$results->price}}
                                </a>
                                <button href="" class="show-btn btn btn-light w-50 mr-2" type="submit">
                                    <i class="fa-solid fa-plus"></i>
                                    Add to wishlist
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-7 col-lg-8">
                        <div class="featured-artist-content">
                            <div class="section-heading white text-left mb-30">
                                <p>{{$results->artist_name}}</p>
                                <h2>{{$results->album_title}}</h2>
                            </div>
                            <div class="song-play-area">
                                <div class="song-name">
                                    <p class="text-white">{{Str::between($results->highlight_track, '/', '.')}}</p>
                                </div>
                                <audio preload="auto" controls>
                                    <source src="{{asset('storage/' . $results->audios[0])}}" type="audio/mp3">
                                </audio>
                            </div>
                            <div class="container">
                                <button class="show-btn btn btn-light float-left col-lg-4 d-block">
                                    <i class="fa-solid fa-plus"></i>
                                    Follow {{$results->artist_name}}
                                </button>
                            </div> <br><br><br>
                            <div class="container mt-4">
                                <p>{{$results->album_description}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="discographies mt-30 col-12 col-md-12 col-lg-8">
                        <div class="song-play-area">
                            <h4 class="text-white mb-4">All Songs</h4>
                            @foreach($results->audios as $result)
                                <div class="song-name">
                                    <button class="btn btn-light btn-sm ml-30 float-right">Buy for ${{$results->digital_track_price}}</button>
                                    <p class="text-white">{{Str::between($result, '/', '.')}}</p>
                                </div>
                                <audio preload="auto" controls>
                                    <source src="{{asset('storage/' . $result)}}" type="audio/mp3">
                                </audio>
                                <br>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="discographies mt-30">
                    <div class="song-play-area">
                        <h4 class="text-white mb-4">Buy Merch</h4>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-2">
                            <div class="single-album-area wow fadeInUp" data-wow-delay="100ms">
                                <div class="album-thumb">
                                    <img src="{{asset('storage/' . $results->merch)}}">
                                    <div class="album-price">
                                        <p>${{$results->merch_price}}</p>
                                    </div>
                                </div>
                                <div class="album-info">
                                    <a href="#">
                                        <h5 class="text-white text-center">{{$results->merch_name}}</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>    
@endsection