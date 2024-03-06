@extends('layouts.app')
@section('content')
    <section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-absolute">
        <div class="bg-img text-center">
            <!--image here -->
        </div>
        <div class="container my-4">  
            <form action="" method="POST">
                @csrf
                <div class="row align-items-end">
                    <div class="col-12 col-md-5 col-lg-4">
                        <div class="container text-center">
                            <div class="featured-artist-thumb">
                                <img src="{{asset('storage/' . $albums->album_cover)}}">
                            </div>
                            <div class="d-flex justify-content-center mt-3">
                                <a href="" class="btn btn-light mr-2 w-100 font-weight-bold" type="button">
                                    <i class="fa-brands fa-paypal mr-1"></i>
                                    Buy for ${{$albums->digital_audio_price}}
                                </a>
                                <a href="" class="btn btn-light ml-2 w-100 font-weight-bold" type="submit">
                                    <i class="fa-solid fa-heart mr-1"></i>
                                    Add to wishlist
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-7 col-lg-8">
                        <div class="featured-artist-content">
                            <div class="section-heading white text-left mb-30">
                                <p>{{$albums->artists->name}}</p>
                                <h2>{{$albums->album_title}}</h2>
                            </div>
                            <div class="song-play-area">
                                <div class="song-name">
                                    <p class="text-white">{{Str::between($albums->audios[0], '/', '.')}}</p>
                                </div>
                                <audio preload="auto" controls>
                                    <source src="{{asset('storage/' . $albums->audios[0])}}" type="audio/mp3">
                                </audio>
                            </div>
                            <div class="container">
                                <button class="btn btn-light d-block w-100 font-weight-bold">
                                    <i class="fa-solid fa-plus"></i>
                                    Follow {{$albums->artists->name}}
                                </button>
                            </div> <br><br><br>
                            <div class="container mt-2">
                                <p>{{$albums->album_description}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="discographies mt-30 col-12 col-md-12 col-lg-8">
                        <div class="song-play-area">
                            <h4 class="text-white mb-4">All Songs</h4>
                            @foreach($albums->audios as $result)
                                <div class="song-name">
                                    <button class="btn btn-light btn-sm ml-30 float-right font-weight-bold">
                                        <i class="fa-brands fa-paypal mr-1"></i>
                                        Buy for ${{$albums->single_track_price}}</button>
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
                @if($merch)
                <div class="discographies mt-30">
                    <div class="song-play-area">
                        <h4 class="text-white mb-4">Buy Merch</h4>
                        <div class="col-12 col-md-3 col-md-3 col-lg-3">
                            <div class="single-album-area wow fadeInUp" data-wow-delay="100ms">
                                <div class="album-thumb">
                                    <img src="{{asset('storage/' . $merch->merch_first_upload)}}">
                                    <div class="album-price">
                                        <p>${{$merch->merch_price}}</p>
                                    </div>
                                </div>
                                <div class="album-info">
                                    <a href="#">
                                        <h5 class="text-white text-center">{{$merch->merch_name}}</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>   
                @endif
                </div>
            </form>
        </div>
    </section>    
@endsection