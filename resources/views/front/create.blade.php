@extends('layouts.app')
@section('content')
    <section class="upload-music-area bg-white mt-100">
      <form action="/store" method="POST" enctype="multipart/form-data">
        <div class="container my-5" style="height: auto;">
              <div class="hero section-padding-30">
                <br><br><br>
                  @csrf
                    <x-input-fields/>
                </div>
          </div>
      </form>
      <br>
    </section>
@endsection