@extends('layouts.app')
@section('content')
<div class="head py-5 bg-dark"><br></div>
    <section id="artistDashboardArea" class="py-2" style="height: auto; background: #f5f9fa;">
        <div class="container">
            <h2 class="lead-heading mb-4">Dashboard</h2>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                    <nav class="mt-4 mb-4">
                        <div class="nav nav-tabs nav-fill justify-content-center" id="nav-tab" role="tablist">
                            <h4 class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="font-size: 25px; font-weight: 400;">Home</h4>
                            <h4 class="nav-item nav-link" id="nav-add-music-tab" data-toggle="tab" href="#nav-add-music" role="tab" aria-controls="nav-add-music" aria-selected="true" style="font-size: 25px; font-weight: 400;">Music</h4>
                            <h4 class="nav-item nav-link" id="nav-add-merch-tab" data-toggle="tab" href="#nav-add-merch" role="tab" aria-controls="nav-add-merch" aria-selected="false" style="font-size: 25px; font-weight: 400;">Merches</h4>
                            <h4 class="nav-item nav-link" id="nav-add-tours-tab" data-toggle="tab" href="#nav-add-tours" role="tab" aria-controls="nav-add-tours" aria-selected="false" style="font-size: 25px; font-weight: 400;">Tours</h4>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="tab-content mt-30" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
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
                        <br>
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
                                        <h5 class="text-capitalize">Revenue statistics</h5>
                                        <hr>
                                        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="tab-pane fade" id="nav-add-music" role="tabpanel" aria-labelledby="nav-add-music-tab">
                    <div class="row">
                        <div class="col-12">
                            <a href="/upload-music" class="btn btn-dark mb-4 float-right" id="action-btn">Add More</a>
                            <div class="card border">
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th scope="col">
                                                <h5>Album Title</h5>
                                            </th>
                                            <th scope="col">
                                                <h5>Status</h5>
                                            </th>
                                            <th scope="col">
                                                <h5>Action</h5>
                                            </th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr> 
                                            @if(count($artists) > 0)
                                                @foreach($artists as $result)
                                                    <td>{{$result->album_title}}</td>
                                                    <td>Live</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="/edit/{{$result->id}} "class="btn btn-sm mr-1" id="action-btn">
                                                                Edit
                                                            </a>
                                                            <button class="btn btn-sm ml-1" id="action-btn">
                                                                Delete
                                                            </button>
                                                        </div>
                                                    </td>
                                                @endforeach
                                            @endif
                                          </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                 <div class="tab-pane fade" id="nav-add-merch" role="tabpanel" aria-labelledby="nav-add-merch-tab">
                    <div class="row">
                        <div class="col-12">
                            <a href="/add-merch" class="btn btn-dark mb-4 float-right" id="action-btn">Add More</a>
                            <div class="card border">
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th scope="col">
                                                <h5>Merch Name</h5>
                                            </th>
                                            <th scope="col">
                                                <h5>Type</h5>
                                            </th>
                                            <th scope="col">
                                                <h5>Status</h5>
                                            </th>
                                            <th scope="col">
                                                <h5>Quantity</h5>
                                            </th>
                                            <th scope="col">
                                                <h5>Action</h5>
                                            </th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr> 
                                            <td>Moments Between Dreams EP 12" Vinyl</td>
                                            <td>Vinyl</td>
                                            <td>Live</td>
                                            <td>56</td>
                                            <td>
                                                <div class="d-flex">
                                                    <button class="btn btn-sm mr-1" id="action-btn">
                                                        Edit
                                                    </button>
                                                    <button class="btn btn-sm ml-1" id="action-btn">
                                                        Delete
                                                    </button>
                                                </div>
                                            </td>
                                          </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                 <div class="tab-pane fade" id="nav-add-tours" role="tabpanel" aria-labelledby="nav-add-tours-tab">
                     Tours
                 </div>
            </div>
        </div>
    </section>
@endsection