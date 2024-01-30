@extends('layouts.app')
@section('content')
<x-breadcrumb>
    <div class="text-center mb-2">
        <img src="{{asset('assets/img/bg-img/chase.jpg')}}" class="rounded-circle" style="height: 100px; width: 100px;" >
    </div>
    <h5>Sanguisugabogg</h5>
    <div class="d-flex justify-content-around justify-content-lg">
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
            <h2>Discographies</h2>
        </div>
        <div class="row oneMusic-albums">
            <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t g u">
                <div class="single-album">
                    <a href="/albums/">
                        <img src="{{asset('assets/img/bg-img/me.jpg')}}" alt="">
                    </a>
                    <div class="album-info">
                        <a href="">
                            <h5>Keaton Murray</h5>
                        </a>
                        <p>Album Title</p>
                    </div>
                </div>
            </div>
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