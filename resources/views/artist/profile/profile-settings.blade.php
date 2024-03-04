@extends('layouts.app')
@section('content')
    <div class="head py-5 bg-dark"><br></div>
    <section id="profileSettingsArea" class="py-2" style="height: auto; background: #f5f9fa;">
        <div class="container my-4">
            <x-form.body>
                <x-form.heading heading="Profile Settings"/>
                <br>
                <form action="/update-artist-profile/{{$profile->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <x-form.border>
                                <div class="text-center mb-4 mx-2">
                                  <h6>Profile Picture</h6>
                                    <x-form.thumbnail type="mt-3 mb-2">
                                      <img src="{{$profile->profile_picture ? asset('storage/' . $profile->profile_picture) : asset('assets/img/bg-img/no-image.png')}}" class="artist-profile-photo" style="height: 200px; width: 200px;">
                                    </x-form.thumbnail>
                                    <p>Profile photo must not exceed 600x600 pixels</p>
                                    <input type="file" name="profile_picture" id="profilePic" class="artist-profile-photo-upload">
                                    <label for="profilePic" class="btn btn-dark d-block">Choose a file</label>
                                </div>
                            </x-form.border><br/>
                        </div>
                        <div class="col-12 col-sm-6">
                            <x-form.border>
                                <div class="text-center mb-4 mx-2">
                                  <h6>Cover Photo</h6>
                                    <x-form.thumbnail type="mt-3 mb-2">
                                      <img src="{{$profile->cover_photo ? asset('storage/' . $profile->cover_photo) : asset('assets/img/bg-img/no-image.png')}}" class="artist-cover-photo" style="height: 200px; width: 200px;">
                                    </x-form.thumbnail>
                                    <p>Cover photo must not exceed 1200x1200 pixels</p>
                                    <input type="file" name="cover_photo" id="coverPhoto" class="artist-cover-photo-upload">
                                    <label for="coverPhoto" class="btn btn-dark d-block">Choose a file</label>
                                </div>
                            </x-form.border><br/>
                        </div>
                    </div>
                    <div class="text-center mt-30">
                        <button class="btn oneMusic-btn-dark d-block w-100" type="submit">Save Changes</button>
                    </div>
                </form>
            </x-form.body>
            <br><br>
            <x-form.body>
                <div class="col-12 mt-30">
                    <x-form.heading heading="Account Settings"/>
                    <form action="/update-account/{{$artist->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter a new artist name" value="{{ old('name', $artist->name) }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter a new artist name" value="{{ old('email', $artist->email) }}">
                        </div>
                        <div class="text-center mt-30">
                            <button class="btn oneMusic-btn-dark d-block w-100" type="submit">Save Changes</button>
                        </div>
                    </form>
                </div>
            </x-form.body>
        </div>
    </section>
@endsection