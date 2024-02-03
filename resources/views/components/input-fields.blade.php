<div class="container">
  <div class="row">
    <div class="col-md-5">
      <h2 class="heading text-center">Album Details</h2>
      <div>
        <br>
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
        <div class="mb-3">
          <label for="price" class="form-label">Single Track Price in USD</label>
          <input type="text" name="digital_track_price" class="form-control" id="digital_track_price">
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-7">
      <h2 class="heading text-center">File Upload</h2>
      <div class="files">
        <div class="border-dashed text-center">
          <div class="row">
            <div class="col-sm-4">
              <div class="text-center mb-4 mx-2">
                <h6>Album Cover</h6>
                <div class="thumbnail mt-3 mb-2">
                  <img src="{{asset('assets/img/bg-img/gallery.svg')}}" alt="" style="height: 100px; width: 100px;">
                </div>
                <p>Album cover must not exceed 1500x1500px</p>
                <input type="file" name="file" id="file" class="file-upload">
                <label for="file" class="btn btn-dark d-block d-block">Choose a file</label>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="text-center mb-4 mx-2">
                <h6>MP3/WAV Files</h6>
                <div class="thumbnail mt-3 mb-2">
                  <img src="{{asset('assets/img/bg-img/music.svg')}}" alt="" style="height: 100px; width: 100px;">
                </div>
                <p>Multiple select audio files from your library</p>
                <input type="file" name="file" id="file" class="file-upload">
                <label for="file" class="btn btn-dark d-block">Choose a file</label>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="text-center mb-4 mx-2">
                <h6>Highlight Track</h6>
                <div class="thumbnail mt-3 mb-2">
                  <img src="{{asset('assets/img/bg-img/file-audio-solid.svg')}}" alt="" style="height: 100px; width: 100px;">
                </div>
                <p>Select a track you want to highlight</p>
                <input type="file" class="file-upload"><input type="file" name="file" id="file" class="file-upload">
                <label for="file" class="btn btn-dark d-block">Choose a file</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <h2 class="heading text-center">Merch Gallery</h2>
      <div class="files">
        <div class="border-dashed my-3 text-center">
          <div class="text-center">
            <h6>Merch Gallery</h6>
            <div class="thumbnail mt-3 mb-2">
              <img src="{{asset('assets/img/bg-img/gallery.svg')}}" alt="" style="height: 100px; width: 100px;">
            </div>
            <p class="text-center">Upload photos of your merch</p>
            <input type="file" class="text-center center-block file-upload" name="merch" id="merch">
          </div>
        </div>   
      </div>  
    </div>
    </div>
  </div>
</div>
<div class="container">
  <button type="submit" data-animation="fadeInUp" data-delay="500ms" href="/" class="btn oneMusic-btn-dark mt-4 d-block w-100">Upload to Sounder <i class="fa fa-angle-double-right"></i></button>
</div>