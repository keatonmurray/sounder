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
                    <x-input-fields/>
                </div>
              </div>
              <div class="col-lg-4 p-4 offset-lg-1 p-0 overflow-hidden">
                <div class="container">
                  <div class="files">
                    <h3 class="heading">Upload Files</h3>
                    <x-files/>
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