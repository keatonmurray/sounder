@extends('layouts.app')
@section('content')
  <div class="head py-5 bg-dark"><br></div>
  <section class="upload-music-area bg-white">
    <form action="/update" method="POST" enctype="multipart/form-data">
      <div class="container my-5" style="height: auto;">
        <div class="hero section-padding-30">
          @csrf
          <x-form.body>
            <x-form.row>
              <!-- ALBUM COVER UPLOAD AREA START -->
              <x-form.column type="col-md-5 mb-4">
                <x-form.heading heading="File Upload"/>
                  <x-form.border>
                      <div class="text-center mb-4 mx-2">
                        <h6>Album Cover</h6>
                          <x-form.thumbnail type="mt-3 mb-2">
                            <img src="{{asset('assets/img/bg-img/gallery.svg')}}" class="avatar" alt="" style="height: 200px; width: 200px;">
                          </x-form.thumbnail>
                          <p>Album cover must not exceed 1500x1500px</p>
                          <input type="file" name="album_cover" id="file" class="file-upload">
                          <label for="file" class="btn btn-dark d-block">Choose a file</label>
                      </div>
                  </x-form.border><br/>
              </x-form.column>
              <!-- ALBUM COVER UPLOAD AREA END -->

              <!-- ALBUM DETAILS INPUT FIELDS AREA START -->
              <x-form.column type="col-md-7">
                <x-form.heading heading="Album Details"/>
                <x-form.album-details-input-fields/>
              </x-form.column>
               <!-- ALBUM DETAILS INPUT FIELDS AREA START -->
            </x-form.row>
          </x-form.body>

          <br><br>

          

          <x-form.body>
            <x-form.row>
                <x-form.column type="col-md-5 mb-4">
                  <x-form.heading heading="Upload Music"/>
                    <x-form.border>
                        <div class="text-center mb-4 mx-2">
                            <h6>Audio Files</h6>
                            <x-form.thumbnail type="mt-3 mb-2">
                              <img src="{{asset('assets/img/bg-img/file-audio-solid.svg')}}" class="" alt="" style="height: 150px; width: 200px;">
                            </x-form.thumbnail>
                            <p>Multiple select MP3, WAV, or FLAC files</p>
                            <input type="file" name="audios[]" id="audio" class="audio" multiple>
                            <label for="audio" class="btn btn-dark d-block">Choose a file</label>
                          </div>
                    </x-form.border> <br/>

                </x-form.column>
                <x-form.column type="col-md-7">
                  <x-form.heading heading="Music Downloading"/>
                  <x-form.audio-details-input-fields/>
                </x-form.column>
              
              </x-form.row>
          </x-form.body>
        </div>

        <div class="text-center mt-30">
          <button class="btn oneMusic-btn-dark d-block w-100" type="submit">Upload to Sounder</button>
        </div>

      </div>
    </form>
  </section>
@endsection