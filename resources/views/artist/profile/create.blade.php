@extends('layouts.app')
@section('content')
    <div class="head py-5 bg-dark"><br></div>
    <section id="profileSettingsArea" class="py-2" style="height: auto; background: #f5f9fa;">
        <div class="container my-4">
            <x-form.body>
                <x-form.heading heading="Profile Settings"/>
                <br>
                <form action="/modify-artist-profile" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <x-form.border>
                                <div class="text-center mb-4 mx-2">
                                  <h6>Profile Picture</h6>
                                    <x-form.thumbnail type="mt-3 mb-2">
                                      <img src="{{asset('assets/img/bg-img/no-image.png')}}" class="add-artist-profile-photo" style="height: 200px; width: 200px;">
                                    </x-form.thumbnail>
                                    <p>Profile photo must not exceed 600x600 pixels</p>
                                    <input type="file" name="profile_picture" id="profilePic" class="add-artist-profile-photo-upload">
                                    <label for="profilePic" class="btn btn-dark d-block">Choose a file</label>
                                </div>
                            </x-form.border><br/>
                        </div>
                        <div class="col-12 col-sm-6">
                            <x-form.border>
                                <div class="text-center mb-4 mx-2">
                                  <h6>Cover Photo</h6>
                                    <x-form.thumbnail type="mt-3 mb-2">
                                      <img src="{{asset('assets/img/bg-img/no-image.png')}}" class="add-artist-cover-photo" style="height: 200px; width: 200px;">
                                    </x-form.thumbnail>
                                    <p>Cover photo must not exceed 1200x1200 pixels</p>
                                    <input type="file" name="cover_photo" id="coverPhoto" class="add-artist-cover-photo-upload">
                                    <label for="coverPhoto" class="btn btn-dark d-block">Choose a file</label>
                                </div>
                            </x-form.border><br/>
                        </div>
                        <input type="email" name="email" value="{{ Auth::user()->email }}">
                    </div>
                    <div class="text-center mt-30">
                        <button class="btn oneMusic-btn-dark d-block w-100" type="submit">Upload to Sounder</button>
                    </div>
                </form>
            </x-form.body>
        </div>
    </section>
@endsection