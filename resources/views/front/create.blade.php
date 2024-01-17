@extends('layouts.app')
@section('content')
    <section class="upload-music-area bg-white mt-100">
        <div class="container" style="height: auto;">
            <div class="hero section-padding-70">
                <h2 class="heading">Upload Music</h2>
                <form class="py-4" action="/store" method="POST">
                    <div class="mb-3">
                      <label for="artistName" class="form-label">Artist Name</label>
                      <input type="text" class="form-control" id="artistName">
                    </div>
                    <div class="mb-3">
                        <label for="albumTitle" class="form-label">Album Title</label>
                        <input type="text" class="form-control" id="albumTitle">
                      </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Album Description</label>
                        <input type="text" class="form-control" id="description">
                      </div>
                    <button type="submit" class="btn btn-primary">Upload Music</button>
                    <a href="/" class="btn btn-dark">Cancel</a>
                </form>
            </div>
        </div>
    </section>
@endsection