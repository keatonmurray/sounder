@extends('layouts.app')

@section('content')
    <x-breadcrumb>
        <div class="text-center mb-2">
            <img src="{{asset('assets/img/bg-img/chase.jpg')}}" class="rounded-circle" style="height: 100px; width: 100px;" >
        </div>
        <h5>{{ Auth::user()->name }}</h5>
        <div class="d-flex justify-content-around justify-content-lg">
            <div class="row">
                <div class="card" style="border-width: 0;">
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title">Collections</h5>
                            <h6 class="card-subtitle mb-2">89</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card" style="border-width: 0;">
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title">Followers</h5>
                            <h6 class="card-subtitle mb-2">12</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card" style="border-width: 0;">
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title">Following</h5>
                            <h6 class="card-subtitle mb-2">49</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-breadcrumb>
    <section class="album-catagory section-padding-100-0 bg-white">
        <div class="container">
            <div class="mb-30 mt-30">
                <h2>Your Collections</h2>
            </div>
            <div class="row oneMusic-albums">
                @if(count($results) > 0)
                    @foreach($results as $result)
                        <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t g u">
                            <div class="single-album">
                                <a href="/albums/{{$result->id}}">
                                    <img src="{{asset('storage/' . $result->album_cover)}}" alt="">
                                </a>
                                <div class="album-info">
                                    <a href="/albums/{{$result->id}}">
                                        <h5>{{$result->artist_name}}</h5>
                                    </a>
                                    <p>{{$result->album_title}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @else
                    <div class="text-center mb-30">
                        <p class="text-dark">You have not purchased anything yet</p>
                    </div>
                @endif
            </div>
            <div class="row mt-30">
                <div class="col-12">
                    <div class="load-more-btn text-center">
                        <a href="#" class="btn oneMusic-btn">Load More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <br><br><br>
        </div>
    </section>
@endsection
