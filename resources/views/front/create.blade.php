@extends('layouts.app')
@section('content')
<div class="head py-5 bg-dark"><br></div>
    <section class="upload-music-area bg-white">
      <form action="/store" method="POST" enctype="multipart/form-data">
        <div class="container my-5" style="height: auto;">
              <div class="hero section-padding-30">
                  @csrf
                    <x-input-fields/>
                </div>
          </div>
      </form>
      <br>
    </section>
@endsection