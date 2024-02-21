@extends('layouts.app')
@section('content')
<div class="head py-5 bg-dark"><br></div>
    <section id="artistDashboardArea" class="py-2" style="height: auto; background: #f5f9fa;">
        <div class="container">
            <div class="row mr-5">
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
            <div class="mt-50 mb-50">
                <h2>Music Posted</h2>
                <br>
               <div class="row">
                    <div class="col-12">
                        <div class="card border">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h2 class="table-heading-title">Music</h2>
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
                                                <td>Phantasmgore</td>
                                                <td>Active</td>
                                                <td class="d-flex">
                                                    <button id="action-btn" class="btn btn-sm btn-dark mr-1">Edit</button>
                                                    <button id="action-btn" class="btn btn-sm btn-dark ml-1">Delete</button>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>Pornographic Seizure</td>
                                                <td>Active</td>
                                                <td class="d-flex">
                                                    <button id="action-btn" class="btn btn-sm btn-dark mr-1">Edit</button>
                                                    <button id="action-btn" class="btn btn-sm btn-dark ml-1">Delete</button>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                        <div class="col-sm-6">
                                            <h2 class="table-heading-title">Merch</h2>
                                            <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">
                                                        <h5>Merch Name</h5>
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
                                                    <td>Phantasmgore EP 12" Vinyl</td>
                                                    <td>Active</td>
                                                    <td class="d-flex">
                                                        <button id="action-btn" class="btn btn-sm btn-dark mr-1">Edit</button>
                                                        <button id="action-btn" class="btn btn-sm btn-dark ml-1">Delete</button>
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td>Pornographic Seizure CD 2020</td>
                                                    <td>Active</td>
                                                    <td class="d-flex">
                                                        <button id="action-btn" class="btn btn-sm btn-dark mr-1">Edit</button>
                                                        <button id="action-btn" class="btn btn-sm btn-dark ml-1">Delete</button>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
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