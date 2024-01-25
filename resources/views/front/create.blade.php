@extends('layouts.app')
@section('content')
    <section class="upload-music-area bg-white mt-100">
      <form action="/store" method="POST" enctype="multipart/form-data">
        <div class="container my-5" style="height: auto;">
          <div class="row px-4 py-4 pe-lg-0 pt-lg-5 align-items-center rounded-3">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
              <div class="hero section-padding-30">
                <h2 class="heading">Album Description</h2>
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
                        <textarea name="album_description" id="description" class="form-control" cols="20" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="price" class="form-label">Digital Album Price in USD</label>
                      <input type="text" name="price" class="form-control" id="price">
                    </div>
                    <h2 class="heading">Merch Upload</h2>
                    <div class="files">
                      <div class="border-dashed my-3 text-center">
                        <p class="text-center">Upload .png images</p>
                        <input type="file" name="merch" id="merch">
                      </div>     
                    </div>
                    <div class="mb-3">
                      <label for="merch" class="form-label">Merch Price in USD</label>
                      <input type="text" name="merch" class="form-control" id="merch">
                    </div>
                </div>
              </div>
              <div class="col-lg-4 p-4 offset-lg-1 p-0 overflow-hidden">
                <div class="container">
                  <div class="files">
                    <h3 class="heading">Upload Files</h3>
                    <div class="border-dashed my-3 text-center">
                      <p class="text-center">Multiple select .mp3 or .wav files</p>
                      <input type="file" name="audios[]" id="audio" multiple>
                    </div>
                    <div class="border-dashed my-3 text-center">
                      <p>Choose an album cover</p>
                      <input type="file" name="album_cover" id="album_cover">
                    </div>
                   <div class="border-dashed my-3 text-center">
                      <p>Choose a background image</p>
                      <input type="file" name="bg_img" id="bg_img" multiple>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container">
                <button type="submit" data-animation="fadeInUp" data-delay="500ms" href="/" class="btn oneMusic-btn-sm-dark mt-4">Upload to Sounder <i class="fa fa-angle-double-right"></i></button>
              </div>
            </div>
        </div>
      </form>
      <br>
    </section>
@endsection