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
                    <h4 style="font-size: 30px; font-weight: 400px;">{{ Auth::user()->name }}</h4>
                </div>
                <div class="d-flex w-100 justify-content-center">
                    <div class="row">
                        @include('artist.partials.follow-count')
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </section>
    <section class="album-catagory section-padding-100-0 bg-white mb-3" style="height: 100vh; margin-top: -50px;">
        <div class="container mt-30 mb-5">
            <nav>
                <div class="nav nav-tabs nav-fill d-flex w-100 justify-content-center" id="nav-tab" role="tablist">
                    <h4 class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="font-size: 25px; font-weight: 400;">Albums</h4>
                    <h4 class="nav-item nav-link" id="nav-merch-tab" data-toggle="tab" href="#nav-merch" role="tab" aria-controls="nav-merch" aria-selected="false" style="font-size: 25px; font-weight: 400;">Merch</h4>
                    <h4 class="nav-item nav-link" id="nav-tours-tab" data-toggle="tab" href="#nav-tours" role="tab" aria-controls="nav-tours" aria-selected="false" style="font-size: 25px; font-weight: 400;">Tours</h4>
                </div>
            </nav>
            <div class="tab-content mt-30" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    @include('artist.partials.discographies')
                </div>
                <div class="tab-pane fade" id="nav-merch" role="tabpanel" aria-labelledby="nav-merch-tab">
                    @include('artist.partials.merch')
                </div>
                <div class="tab-pane fade" id="nav-tours" role="tabpanel" aria-labelledby="nav-tours-tab">
                    <!--tours section here-->
                </div>
            </div>
            <!--
            <div class="load-more-btn text-center">
                <a href="#" class="btn oneMusic-btn">Load More <i class="fa fa-angle-double-right"></i></a>
            </div>
            -->
        </div>
    </section>
@endsection