@extends('layouts.app')
@section('content')
    <section class="upload-music-area bg-white mt-100">
        <div class="container" style="height: auto;">
            <div class="hero section-padding-70">
                <h2 class="heading">Upload Music</h2>
                <form class="py-4" action="/store" method="POST">
                  @csrf
                    <div class="mb-3">
                      <label for="artistName" class="form-label">Artist Name</label>
                      <input type="text" name="artist_name" class="form-control" id="artistName">
                    </div>
                    <div class="mb-3">
                        <label for="albumTitle" class="form-label">Album Title</label>
                        <input type="text" name="album_title" class="form-control" id="albumTitle">
                      </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Album Description</label>
                        <textarea name="album_description" id="desctiption" class="form-control" cols="30" rows="8"></textarea>
                      </div>
                      <button type="submit" data-animation="fadeInUp" data-delay="500ms" href="/" class="btn oneMusic-btn-sm-dark">Upload Music <i class="fa fa-angle-double-right"></i></button>
                      <a href="/" type="button" data-animation="fadeInUp" data-delay="500ms" href="/" class="btn oneMusic-btn-sm-light">Cancel</a>
                </form>
            </div>
        </div>
    </section>
@endsection