@extends('layouts.app')
@section('content')
<div class="head py-5 bg-dark"><br></div>
    <section id="artistDashboardArea" class="py-4" style="height: auto; background: #f5f9fa;">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-10">
                    <h2 class="lead-heading">Dashboard</h2>
                </div>
                <div class="col-6 col-sm-2 d-flex" style="margin-top: -10px;">
                    <a href="/upload-music" class="btn small-btn mr-1">Add Music</a>
                    <a href="/add-merch" class="btn small-btn ml-1">Add Merch</a>
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-sm-4">
                    <div class="card border">
                        <div class="card-body">
                            <p class="lead">Monthly Streams</p>
                            <h2>12k+</h2>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-sm-4">
                    <div class="card border">
                        <div class="card-body">
                            <p class="lead">Digital Sales Revenue</p>
                            <h2>$3,121</h2>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-sm-4">
                    <div class="card border">
                        <div class="card-body">
                            <p class="lead">Physical Sales Revenue</p>
                            <h2>$5,421</h2>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <div class="mt-50">
                <h2>Overview</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card border">
                            <div class="card-body">
                                <h5 class="text-capitalize">Streams per month</h5>
                                <hr>
                                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-lg-6">
                        <div class="card border">
                            <div class="card-body">
                                <h5 class="text-capitalize">Total revenue</h5>
                                <hr>
                                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="mt-50 mb-50">
                <h2>Music Posted</h2>
               <div class="row">
                    <div class="col-12">
                        <div class="card border">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5>Music</h5>
                                        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
                                    </div>
                                    <div class="col-sm-6">
                                        <h5>Merch</h5>
                                        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </section>
@endsection